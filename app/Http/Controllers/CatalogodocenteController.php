<?php

namespace App\Http\Controllers;
use App\Models\Catalogodocente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cedulacero;
use App\Models\Evaluaciondocente;


/**
 * Class CatalogodocenteController
 * @package App\Http\Controllers
 */
class CatalogodocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto1=trim($request->get('texto1'));
        $texto2=trim($request->get('texto2'));
        $texto3= trim($request->get('texto3'));

        $catalogodocente =DB::table('cedulaceros')
        ->select('cedulaceros.documento','cedulaceros.id',
                'catalogodocentes.apellidos_empleado','catalogodocentes.nombre_empleado','cedulaceros.periodo')
        -> join ('horarios','cedulaceros.rfc','=', 'horarios.rfc')
        -> join ('catalogodocentes','horarios.rfc','=', 'catalogodocentes.rfc')
        ->join('grupos','horarios.grupo','=','grupos.grupo')
        ->join('periodos','grupos.periodo','=','periodos.periodo')
       
        ->where('catalogodocentes.apellidos_empleado','like', '%' . $texto1 . '%') 
        ->where('catalogodocentes.nombre_empleado','like', '%' . $texto2 . '%')
      //->where('cedulaceros.documento','!=','NULL')
       // ->where('cedulaceros.rfc','like', '%' . $texto2 . '%')
       ->where('periodos.identificacion_corta','like', '%' . $texto3 . '%')
       ->distinct()->get();

       $catalogodocente_ed =DB::table('evaluaciondocentes')
        ->select('evaluaciondocentes.documento','evaluaciondocentes.id',
                'catalogodocentes.apellidos_empleado','catalogodocentes.nombre_empleado','evaluaciondocentes.periodo')
        -> join ('horarios','evaluaciondocentes.rfc','=', 'horarios.rfc')
        -> join ('catalogodocentes','horarios.rfc','=', 'catalogodocentes.rfc')
        ->join('grupos','horarios.grupo','=','grupos.grupo')
        ->join('periodos','grupos.periodo','=','periodos.periodo')
       
        ->where('catalogodocentes.apellidos_empleado','like', '%' . $texto1 . '%') 
        ->where('catalogodocentes.nombre_empleado','like', '%' . $texto2 . '%')
      //->where('cedulaceros.documento','!=','NULL')
       // ->where('cedulaceros.rfc','like', '%' . $texto2 . '%')
       ->where('periodos.identificacion_corta','like', '%' . $texto3 . '%')
       ->distinct()->get();

       $catalogodocente_dep =DB::table('evaluaciondepartamentos')
        ->select('evaluaciondepartamentos.documento','evaluaciondepartamentos.id',
                'catalogodocentes.apellidos_empleado','catalogodocentes.nombre_empleado','evaluaciondepartamentos.periodo')
        -> join ('horarios','evaluaciondepartamentos.rfc','=', 'horarios.rfc')
        -> join ('catalogodocentes','horarios.rfc','=', 'catalogodocentes.rfc')
        ->join('grupos','horarios.grupo','=','grupos.grupo')
        ->join('periodos','grupos.periodo','=','periodos.periodo')
       
        ->where('catalogodocentes.apellidos_empleado','like', '%' . $texto1 . '%') 
        ->where('catalogodocentes.nombre_empleado','like', '%' . $texto2 . '%')
      //->where('cedulaceros.documento','!=','NULL')
       // ->where('cedulaceros.rfc','like', '%' . $texto2 . '%')
       ->where('periodos.identificacion_corta','like', '%' . $texto3 . '%')
       ->distinct()->get();

       $area = DB::table('horarios')
       ->join('catalogodocentes', 'horarios.rfc', '=', 'catalogodocentes.rfc')
       ->join('periodos', 'horarios.periodo', '=', 'periodos.periodo' )
       ->join('organigramas', 'catalogodocentes.clave_area', '=', 'organigramas.clave_area')
      
       ->select('organigramas.descripcion_area')
       
       ->where('catalogodocentes.apellidos_empleado','like', '%' . $texto1 . '%') 
       ->where('catalogodocentes.nombre_empleado','like', '%' . $texto2 . '%')
       ->where('periodos.identificacion_corta','like', '%' . $texto3 .'%')
       ->where('horarios.tipo_horario','=','D')

       ->groupBy('horarios.materia','horarios.grupo')
       ->distinct('organigramas.descripcion_area')
       ->get()
       ->pluck('descripcion_area');

        return view('catalogodocente.show', compact('catalogodocente','catalogodocente_dep','catalogodocente_ed','texto1','texto2','texto3','area'));
        /*
        $texto1=trim($request->get('texto1'));
        $texto2=trim($request->get('texto2'));
       // $rfcs= trim($request->get('rfcs'));
        $fec= trim($request->get('texto3'));

      /*  $catalogodocentes =DB::table('catalogodocentes')
        
        -> join ('horarios','catalogodocentes.rfc','=', 'horarios.rfc')
        -> join ('cedulaceros','horarios.rfc','=', 'cedulaceros.rfc')
       // ->join('grupos','horarios.grupo','=','grupos.grupo')
        //->join('periodos','grupos.periodo','=','periodos.periodo')
        ->select('cedulaceros.documento','catalogodocentes.rfc')
        ->where('catalogodocentes.apellidos_empleado','like', '%' . $texto1 . '%') 
            ->where('catalogodocentes.nombre_empleado','like', '%' . $texto2 . '%')
      // ->where('cedulaceros.rfc','like', '%' . $rfcs . '%')
       ->where('cedulaceros.periodo','like', '%' . $fec . '%')
       ->distinct()->get();
       dd($catalogodocentes);
        return view('catalogodocente.index', compact('catalogodocentes','fec','texto1','texto2'));*/
        /*
        $catalogodocentes = Catalogodocente::
        join('organigramas', 'catalogodocentes.clave_area', '=', 'organigramas.clave_area')
        ->select('catalogodocentes.rfc','catalogodocentes.nombre_empleado',
                'catalogodocentes.apellidos_empleado','organigramas.descripcion_area','catalogodocentes.correo_electronico')
        ->get();
        
        
        return view('catalogodocente.index',compact('catalogodocentes'));*/
        //->with('i', (request()->input('page', 1) - 1) * $catalogodocentes->perPage());
        /*
       $catalogodocentes = Catalogodocente::paginate();
        return view('catalogodocente.index', compact('catalogodocentes'))
           ->with('i', (request()->input('page', 1) - 1) * $catalogodocentes->perPage());*/
    }

    public function busqueda(Request $request)
    {
          $texto1=trim($request->get('texto1'));
          $texto2=trim($request->get('texto2'));

            $catalogodocentes=DB::table('catalogodocentes')
            ->join('organigramas', 'catalogodocentes.clave_area', '=', 'organigramas.clave_area')
            ->select('catalogodocentes.rfc','catalogodocentes.nombre_empleado',
                'catalogodocentes.apellidos_empleado','organigramas.descripcion_area','catalogodocentes.correo_electronico')
            
            ->where('catalogodocentes.apellidos_empleado','like', '%' . $texto1 . '%') 
            ->where('catalogodocentes.nombre_empleado','like', '%' . $texto2 . '%')
            ->get();

           
        return view('catalogodocente.index',compact('catalogodocentes','texto1','texto2'));
       // Excel::download(new HorarioExport($horarioe),'horario.xlsx'));
    }

    public function searchByName(Request $request){
      /*  $data = Catalogodocente::select("apellidos_empleado")
                                ->where("apellidos_empleado", 'LIKE', '%'. $request->get('term').'%')
                                ->pluck('apellidos_empleado');*/
        $data = Catalogodocente::select(DB::raw("CONCAT('apellidos_empleado','nombre_empleado') AS display_name"))
                                ->where("apellidos_empleado", 'LIKE', '%'. $request->get('term').'%')
                                ->orWhere("nombre_empleado", 'LIKE', '%'. $request->get('term').'%')
                                ->get();
                                echo($data);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogodocente = new Catalogodocente();
        return view('catalogodocente.create', compact('catalogodocente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Catalogodocente::$rules);
        $catalogodocente = Catalogodocente::create($request->all());

        return redirect()->route('catalogodocentes.index')
            ->with('success', 'Catalogodocente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function mdocumento(Request $request)
    {
        $rfcs= trim($request->get('rfcs'));
        $fec= trim($request->get('texto3'));

        $catalogodocente =DB::table('cedulaceros')
        ->select('cedulaceros.documento','cedulaceros.id')
        -> join ('horarios','cedulaceros.rfc','=', 'horarios.rfc')
        -> join ('catalogodocentes','horarios.rfc','=', 'catalogodocentes.rfc')
        //->join('grupos','horarios.grupo','=','grupos.grupo')
        //->join('periodos','grupos.periodo','=','periodos.periodo')
       
       ->where('cedulaceros.rfc','like', '%' . $rfcs . '%')
       ->where('cedulaceros.periodo','like', '%' . $fec . '%')
       ->distinct()->get();

        return view('catalogodocente.show', compact('catalogodocente','rfcs','fec'));
    }

    public function download($id){
        $cedulacero = Cedulacero::where('id',$id)->firstOrfail();
        $pathToFile = storage_path("app/public/Archivos_Cedulascero/$cedulacero->rfc/".$cedulacero->documento);
        return response()->download($pathToFile);
    }

    public function show($id)
    {
        
        //$catalogodocente = Catalogodocente::find($id);
       $catalogodocente = Catalogodocente::where('rfc', $id)->first();
        return view('catalogodocente.show', compact('catalogodocente'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$catalogodocente = Catalogodocente::find($id);
        $catalogodocente = Catalogodocente::where('rfc', $id)->first();
        return view('catalogodocente.edit', compact('catalogodocente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Catalogodocente $catalogodocente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogodocente $catalogodocente)
    {
        request()->validate(Catalogodocente::$rules);

        $catalogodocente->update($request->all());

        return redirect()->route('catalogodocentes.index')
            ->with('success', 'Catalogodocente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        //$catalogodocente = Catalogodocente::find($id)->delete();
        $catalogodocente = Catalogodocente::where('rfc', $id)->first();
        return redirect()->route('catalogodocentes.index')
            ->with('success', 'Catalogodocente deleted successfully');
    }
}
