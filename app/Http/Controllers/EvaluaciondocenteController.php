<?php

namespace App\Http\Controllers;

use App\Models\Evaluaciondocente;
use Illuminate\Http\Request;
use App\Models\Horario;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

/**
 * Class EvaluaciondocenteController
 * @package App\Http\Controllers
 */
class EvaluaciondocenteController extends Controller
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
        
        $evaluaciondocentes = DB::table('evaluaciondocentes')
            ->join('catalogodocentes', 'catalogodocentes.rfc', '=', 'evaluaciondocentes.rfc')
            ->join('organigramas', 'organigramas.clave_area', '=', 'catalogodocentes.clave_area')
            ->join('periodos','evaluaciondocentes.periodo','=','periodos.periodo')
            ->select('evaluaciondocentes.id','catalogodocentes.apellidos_empleado','catalogodocentes.nombre_empleado','periodos.identificacion_corta','evaluaciondocentes.total_cuantitativo','evaluaciondocentes.total_cualitativo', 'evaluaciondocentes.documento')
            ->where('organigramas.descripcion_area','like', '%' . $texto1 . '%') 
            ->where('periodos.identificacion_corta','like', '%' . $texto2 .'%')
            ->get();
          return view('evaluaciondocente.index',compact('evaluaciondocentes','texto1','texto2'));
         
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evaluaciondocente = new Evaluaciondocente();
        return view('evaluaciondocente.create', compact('evaluaciondocente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Evaluaciondocente::$rules);
        $evaluaciondocente = Evaluaciondocente::create($request->all());
        return redirect()->route('evaluaciondocentes.index')
            ->with('success', 'Evaluaciondocente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluaciondocente = Evaluaciondocente::find($id);

        return view('evaluaciondocente.show', compact('evaluaciondocente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluaciondocente = Evaluaciondocente::find($id);
        return view('evaluaciondocente.edit', compact('evaluaciondocente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evaluaciondocente $evaluaciondocente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluaciondocente $evaluaciondocente)
    {
       
        if($request->file('documento'))
        {
            $fileName  = $request->file('documento')->getClientOriginalName();
            $extension= $fileName; 
            $evaluaciondocente->update($request->only(['id','rfc','periodo','total_cuantitativo','total_cualitativo']));
            if($evaluaciondocente->documento)
                        {
                            $path = storage_path("app/public/Archivos_Evaluacion_Docente/$evaluaciondocente->rfc/".$evaluaciondocente->documento);
                            
                            if(Evaluaciondocente::exists($path)){
                                unlink($path);
                            }
                        }
            $extension  = str_replace(" ", " ", $extension);
            $filePath  = ($request->file('documento')
                        ->storeAs('public/Archivos_Evaluacion_Docente/' . $evaluaciondocente->rfc, $extension));
            $evaluaciondocente->update(['documento' => $extension]); 
           
            /*guardar en drive*/
           Storage::disk("google")->putFileAs("Evaluacion-docentes",$request->file("documento"),$extension);
            
            /* */
        }
        return redirect()->route('evaluaciondocentes.index');
    }

    public function download($id){
        $evaluaciondocente = Evaluaciondocente::where('id',$id)->firstOrfail();
        $pathToFile = storage_path("app/public/Archivos_Evaluacion_Docente/$evaluaciondocente->rfc/".$evaluaciondocente->documento);
        return response()->download($pathToFile);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evaluaciondocente = Evaluaciondocente::find($id)->delete();
        return redirect()->route('evaluaciondocentes.index')
            ->with('success', 'Evaluaciondocente deleted successfully');
    }
}
