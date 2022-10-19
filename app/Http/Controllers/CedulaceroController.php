<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Cedulacero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

/**
 * Class CedulaceroController
 * @package App\Http\Controllers
 */
class CedulaceroController extends Controller
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
        
        $cedulaceros = DB::table('cedulaceros')
            ->join('catalogodocentes', 'catalogodocentes.rfc', '=', 'cedulaceros.rfc')
            ->join('organigramas', 'organigramas.clave_area', '=', 'catalogodocentes.clave_area')
            ->select('cedulaceros.id','cedulaceros.rfc','cedulaceros.periodo', 'cedulaceros.documento')
            ->where('organigramas.descripcion_area','like', '%' . $texto1 . '%') 
            ->where('cedulaceros.periodo','like', '%' . $texto2 .'%')
            ->get();
          return view('cedulacero.index',compact('cedulaceros','texto1','texto2'));
         
        }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        request()->validate(Cedulacero::$rules);
        $ccedulacero = Cedulacero::create($request->all());
        return redirect()->route('cedulaceros.index')
            ->with('success', 'Cedulacero created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cedulacero::$rules);
        $cedulacero = Cedulacero::create([
            'id' => $request->id,
            'rfc' => $request->rfc,
            'periodo' => $request->periodo,
            'documento' => $request->documento
        ]);
       // dd($request->file("documento")->store("Archivos_Cedulascero/","storage"));

        if($request->hasFile('documento'))
        {
            $image = $request->file('documento')->getClientOriginalName();
            $request->file('documento')
                ->storeAs('Archivos_Cedulascero/' . $cedulacero->id, $image);
            $cedulacero->update(['documento' => $image]);
        }
        //Cedulacero::create($cedulacero);
        return redirect()->route('cedulaceros.index');
      

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cedulacero = Cedulacero::find($id);
        return view('cedulacero.show', compact('cedulacero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cedulacero = Cedulacero::find($id);
        return view('cedulacero.edit', compact('cedulacero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cedulacero $cedulacero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cedulacero $cedulacero)
    {
        if($request->file('documento'))
        {
            $fileName  = $request->file('documento')->getClientOriginalName();
            $extension= $fileName; 
            if($cedulacero->documento)
                        {
                            $path = storage_path("app/public/Archivos_Cedulascero/$cedulacero->rfc/".$cedulacero->documento);
                            
                            if(Cedulacero::exists($path)){
                                unlink($path);
                            }
                        }
            $extension  = str_replace(" ", " ", $extension);
            $filePath  = ($request->file('documento')
                        ->storeAs('public/Archivos_Cedulascero/' . $cedulacero->rfc, $extension));
            $cedulacero->update(['documento' => $extension]); 
           
            /*guardar en drive*/
           Storage::disk("google")->putFileAs("Cedulas-cero",$request->file("documento"),$extension);
            
            /* */
        }
        return redirect()->route('cedulaceros.index');
            }

     public function download($id){
        $cedulacero = Cedulacero::where('id',$id)->firstOrfail();
        $pathToFile = storage_path("app/public/Archivos_Cedulascero/$cedulacero->rfc/".$cedulacero->documento);
        return response()->download($pathToFile);
    }

       
    

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    
    public function destroy($id)
    {
        $cedulacero = Cedulacero::find($id)->delete();
        return redirect()->route('cedulaceros.index')
            ->with('success', 'Cedulacero deleted successfully');
    }
}
