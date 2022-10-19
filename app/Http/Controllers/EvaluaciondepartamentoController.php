<?php

namespace App\Http\Controllers;

use App\Models\Evaluaciondepartamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Horario;
use Illuminate\Support\Facades\Storage;

/**
 * Class EvaluaciondepartamentoController
 * @package App\Http\Controllers
 */
class EvaluaciondepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          /* select c.rfc,c.periodo, c.documento 
        from (cedulaceros as c INNER join catalogodocentes as d on d.rfc=c.rfc) 
        INNER join organigramas as o on o.clave_area=d.clave_area 
        where o.descripcion_area="DEPARTAMENTO DE SISTEMAS Y COMPUTACION" and c.periodo="20163";*/
        $texto1=trim($request->get('texto1'));
        $texto2=trim($request->get('texto2'));
        
        $evaluaciondepartamentos = DB::table('evaluaciondepartamentos')
            ->join('catalogodocentes', 'catalogodocentes.rfc', '=', 'evaluaciondepartamentos.rfc')
            ->join('organigramas', 'organigramas.clave_area', '=', 'catalogodocentes.clave_area')
            ->select('evaluaciondepartamentos.id','evaluaciondepartamentos.rfc','evaluaciondepartamentos.periodo','calificacion_cuantitativa','calificacion_cualitativa', 'evaluaciondepartamentos.documento')
            ->where('organigramas.descripcion_area','like', '%' . $texto1 . '%') 
            ->where('evaluaciondepartamentos.periodo','like', '%' . $texto2 .'%')
            ->get();
          return view('evaluaciondepartamento.index',compact('evaluaciondepartamentos','texto1','texto2'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evaluaciondepartamento = new Evaluaciondepartamento();
        return view('evaluaciondepartamento.create', compact('evaluaciondepartamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Evaluaciondepartamento::$rules);

        $evaluaciondepartamento = Evaluaciondepartamento::create($request->all());

        return redirect()->route('evaluaciondepartamentos.index')
            ->with('success', 'Evaluaciondepartamento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluaciondepartamento = Evaluaciondepartamento::find($id);

        return view('evaluaciondepartamento.show', compact('evaluaciondepartamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluaciondepartamento = Evaluaciondepartamento::find($id);

        return view('evaluaciondepartamento.edit', compact('evaluaciondepartamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evaluaciondepartamento $evaluaciondepartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluaciondepartamento $evaluaciondepartamento)
    {
        if($request->file('documento'))
        {
            $fileName  = $request->file('documento')->getClientOriginalName();
            $extension= $fileName; 

            $evaluaciondepartamento->update($request->only(['id','rfc','periodo','calificacion_cuantitativa','calificacion_cualitativa']));

            if($evaluaciondepartamento->documento)
                        {
                            $path = storage_path("app/public/Archivos_Evaluacion_Departamentos/$evaluaciondepartamento->rfc/".$evaluaciondepartamento->documento);
                            
                            if(Evaluaciondepartamento::exists($path)){
                                unlink($path);
                            }//else si no esta, mensaje de archivo ya no existe
                        }
            $extension  = str_replace(" ", " ", $extension);
            $filePath  = ($request->file('documento')
                        ->storeAs('public/Archivos_Evaluacion_Departamentos/' . $evaluaciondepartamento->rfc, $extension));
            $evaluaciondepartamento->update(['documento' => $extension]); 
           
            /*guardar en drive*/
           Storage::disk("google")->putFileAs("Evaluacion-departamentos",$request->file("documento"),$extension);
            
            /* */
        }
        return redirect()->route('evaluaciondepartamentos.index');    
    }

    public function download($id){
        $evaluaciondepartamento = Evaluaciondepartamento::where('id',$id)->firstOrfail();
        $pathToFile = storage_path("app/public/Archivos_Evaluacion_Departamentos/$evaluaciondepartamento->rfc/".$evaluaciondepartamento->documento);
        return response()->download($pathToFile);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evaluaciondepartamento = Evaluaciondepartamento::find($id)->delete();

        return redirect()->route('evaluaciondepartamentos.index')
            ->with('success', 'Evaluaciondepartamento deleted successfully');
    }
}
