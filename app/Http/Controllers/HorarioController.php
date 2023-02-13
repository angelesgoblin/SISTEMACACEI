<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Cedulacero;
use App\Models\Catalogodocente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HorarioExport;

/**
 * Class HorarioController
 * @package App\Http\Controllers
 */
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $horarios = Horario::paginate();
        return view('horario.index',compact('horarios'))
       ->with('i', (request()->input('page', 1) - 1) * $horarios->perPage());


    }

    /*public function datos(Request $request){

        $movies = [];

        if($request->has('q'))
            $search = $request->q;
            $movies =Catalogodocente::select("apellidos_empleado", "nombre_empleado")
            		->where('nombre_empleado', 'LIKE', "%$search%")
            		->get();
        
        return response()->json($movies);


      /*  $search = $request->get('term');
      
          $result = Catalogodocente::where('apellidos_empleado','LIKE','%'.$term.'%')->get();
 
          return response()->json($result);*/
      /*  $term = $request->get('term');
        $querys = Catalogodocente::where('nombre_empleado','LIKE','%'.$term.'%')->get();

        $data = [];

        foreach($querys as $query){
            $data[]=[
                'label' => $query-> nombre_empleado
            ];
        }

        return $data;*/

        public function search(Request $request)
        {
           // $texto1=trim($request->get('autocomplete-search'));
            $data = Catalogodocente::select("apellidos_empleado","nombre_empleado")
            ->where("apellidos_empleado","LIKE","%{$request->autocomplete}%")
            ->get('query');   
            return response()->json($data);
            return view('horario.buscar', compact('data'))->with(['autocomplete' => $request->autocomplete])->render();
            /*
            $posts = Catalogodocente::where('apellidos_empleado', 'LIKE', '%'.$request->search.'%')->get();
            return \response()->json($posts);*/
        }

    public function buscar()
    {
        return view('horario.buscar');

    }

    public function busqueda(Request $request)
    {
          $texto1=trim($request->get('texto1'));
          $texto2=trim($request->get('texto2'));
          $texto3=trim($request->get('texto3'));

            $horarios=DB::table('horarios')
            ->join('catalogodocentes', 'horarios.rfc', '=', 'catalogodocentes.rfc')
            ->join('materias', 'horarios.materia', '=', 'materias.materia')
            ->join('grupos','horarios.grupo','=','grupos.grupo')
            ->join('periodos', 'horarios.periodo', '=', 'periodos.periodo' )
            ->join('organigramas', 'catalogodocentes.clave_area', '=', 'organigramas.clave_area')
            ->select('periodos.identificacion_corta', 'catalogodocentes.nombre_empleado','horarios.rfc', 
                    'materias.nombre_completo_materia','horarios.grupo','organigramas.descripcion_area')
            ->where('catalogodocentes.apellidos_empleado','like', '%' . $texto1 . '%') 
            ->where('catalogodocentes.nombre_empleado','like', '%' . $texto2 . '%')
            ->where('periodos.identificacion_corta','like', '%' . $texto3 .'%')
            ->where('horarios.tipo_horario','=','D')
            ->whereNull('grupos.paralelo_de')

            ->selectRaw('sum(TIMESTAMPDIFF(HOUR, hora_inicial,hora_final)) as Horas')
            ->groupBy('horarios.materia','horarios.grupo')
            ->get();//poner otra validación para las personas que coinciden en grupos con los mismos nombres

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
           // 
           
           
            $horariosact=DB::table('horarios')
            ->join('catalogodocentes', 'horarios.rfc', '=', 'catalogodocentes.rfc')
            ->join('actividadesapoyos', 'horarios.actividad', '=', 'actividadesapoyos.actividad')
            ->join('periodos', 'horarios.periodo', '=', 'periodos.periodo' )
            ->select('periodos.identificacion_corta', 'catalogodocentes.nombre_empleado','horarios.rfc', 
                    'actividadesapoyos.descripcion_actividad','horarios.grupo')
            ->where('catalogodocentes.apellidos_empleado','like', '%' . $texto1 . '%') 
            ->where('catalogodocentes.nombre_empleado','like', '%' . $texto2 . '%')
            ->where('periodos.identificacion_corta','like', '%' . $texto3 .'%')
            ->where('horarios.tipo_horario','=','Y')
            ->selectRaw('sum(TIMESTAMPDIFF(HOUR, hora_inicial,hora_final)) as Horas')
            ->groupBy('horarios.actividad')
            ->get();

           
        return view('horario.buscar',compact('horarios','horariosact','texto1','texto2','texto3','area'));
       // Excel::download(new HorarioExport($horarioe),'horario.xlsx'));
    }

    public function exportar(){
        $horarios= Horario::all();
        return Excel::download(new HorarioExport($horarios),'horario.xlsx');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horario = new Horario();
        return view('horario.create', compact('horario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    
        request()->validate(Horario::$rules);
        $horario = Horario::create($request->all());
        return redirect()->route('horarios.index')
            ->with('success', 'Horario created successfully.');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$horario = Horario::find($id);
        $horario = Horario::where('codigo', $id)->first();
        return view('horario.show', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$horario = Horario::find($id);
        $horario = Horario::where('codigo', $id)->first();
        return view('horario.edit', compact('horario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Horario $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        request()->validate(Horario::$rules);
        $horario->update($request->all());
        return redirect()->route('horarios.index')
            ->with('success', 'Horario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        //$horario = Horario::find($id)->delete();
        $horario = Horario::where('codigo', $id)->first();
        return redirect()->route('horarios.index')
            ->with('success', 'Horario deleted successfully');
    }
}
