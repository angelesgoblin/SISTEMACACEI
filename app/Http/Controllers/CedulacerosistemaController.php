<?php

namespace App\Http\Controllers;

use App\Models\Cedulacerosistema;
use App\Periodo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Class CedulacerosistemaController
 * @package App\Http\Controllers
 */
class CedulacerosistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cedulacerosistemas = Cedulacerosistema::paginate();

        return view('cedulacerosistema.index', compact('cedulacerosistemas'))
            ->with('i', (request()->input('page', 1) - 1) * $cedulacerosistemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cedulacerosistema = new Cedulacerosistema();
        return view('cedulacerosistema.create', compact('cedulacerosistema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cedulacerosistema = Cedulacerosistema::create([
            'uuid' => (string) Str::orderedUuid(),
            'Periodo' => $request->Periodo,
            'Departamento' => $request->Departamento,
            'Documento' => $request->Documento
        ]);
        if($request->hasFile('Documento'))
        {
            $image = $request->file('Documento')->getClientOriginalName();
            $request->file('Documento')
                ->storeAs('Archivos/' . $cedulacerosistema->id, $image);
            $cedulacerosistema->update(['Documento' => $image]);
        }
        return redirect()->route('cedulacerosistemas.index');
/*
        $cedulacerosistema=$request->all();
        $cedulacerosistema['uuid']=(string) Str::uuid();   
        if($request->hasFile('Documento')){
                 //01
       // $cedulacerosistema['Documento']= $request->file('Documento')->store('Archivos');
        //02
       // $cedulacerosistema['Documento']=$request->file('Documento')->getClientOriginalName();
       // $request->file('Documento')->storeAs('folder_archivos',$cedulacerosistema['Documento']);
        //03
        $cedulacerosistema['Documento']=time().'_'.$request->file('Documento')->getClientOriginalName();
        $request->file('Documento')->storeAs('Archivos',$cedulacerosistema['Documento']);    //04       
   // $cedulacerosistema['Documento']=time().'_'.$request->file('Documento')->getClientOriginalName();
   // $request->file('Documento')
    //        ->storeAs('Documentos_usuario/'.auth()->id(),$cedulacerosistema['Documento']);
        }

        Cedulacerosistema::create($cedulacerosistema);
    //   Cedulacerosistema::edit($cedulacerosistema);
        return redirect()->route('cedulacerosistemas.index');*/

    }

    public function download($uuid){

        $cedulacerosistema = Cedulacerosistema::where('uuid',$uuid)->firstOrfail();
        $pathTofile = storage_path("app/Archivos/$cedulacerosistema->id/".$cedulacerosistema->Documento);
        return response()->download($pathTofile);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cedulacerosistema = Cedulacerosistema::find($id);

        return view('cedulacerosistema.show', compact('cedulacerosistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cedulacerosistema $cedulacerosistema)
    {
       //$cedulacerosistema = new Cedulacerosistema();
        return view('cedulacerosistema.edit', compact('cedulacerosistema'));
       // $cedulacerosistema = Cedulacerosistema::find($id);
      // return view('cedulacerosistema.edit', compact('cedulacerosistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cedulacerosistema $cedulacerosistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cedulacerosistema $cedulacerosistema)
    {

        $cedulacerosistema->update($request->only(['uuid','Periodo','Departamento','Documento']));  
        if($request->hasFile('Documento'))
        {
            $image = $request->file('Documento')->getClientOriginalName();
            $request->file('Documento')
                ->storeAs('Archivos/' . $cedulacerosistema->id, $image);
               /*if($cedulacerosistema->Documento != '')
                {
                    unlink(storage_path('app/public/Archivos/' . $cedulacerosistema->id . '/' . $cedulacerosistema->Documento));
                }*/
                $cedulacerosistema->update(['Documento' => $image]);
        }
        return redirect()->route('cedulacerosistemas.index');
   // ->with('success', 'Cedulacerosistema updated successfully');
}

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cedulacerosistema = Cedulacerosistema::find($id)->delete();

        return redirect()->route('cedulacerosistemas.index')
            ->with('success', 'Cedulacerosistema deleted successfully');
    }

}
