<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class PeriodoController
 * @package App\Http\Controllers
 */
class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo::paginate();

        return view('periodo.index', compact('periodos'))
            ->with('i', (request()->input('page', 1) - 1) * $periodos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodo = new Periodo();
        return view('periodo.create', compact('periodo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Periodo::$rules);
        $periodo = Periodo::create($request->all());
        return redirect()->route('periodos.index')
            ->with('success', 'Periodo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$periodo = Periodo::find($id);
        $periodo = Periodo::where('periodo', $id)->first();
        return view('periodo.show', compact('periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$periodo = Periodo::find($id);
        $periodo = Periodo::where('periodo', $id)->first();
        return view('periodo.edit', compact('periodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Periodo $periodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodo $periodo)
    {
        request()->validate(Periodo::$rules);
        $periodo->update($request->all());
        return redirect()->route('periodos.index')
            ->with('success', 'Periodo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        //$periodo = Periodo::find($id)->delete();
        $periodo = Periodo::where('periodo', $id)->first();
       
        return redirect()->route('periodos.index')
            ->with('success', 'Periodo deleted successfully');
    }

    public function herraadmin()
    {
        return view('periodo.herramienta');

    }

   public function eliminar()
    {
        $periodo = Periodo::where('created_at','<=', now()->subYears(3))->delete();//borrar datos de hace 3 años. tablas vinculadas a periodo
       // DB::select(DB::raw("call llenartabla"));//llenar tablas cedula, evaluaciones
        
        return view('periodo.herramienta')
        ->with('success', 'Se eliminaron los datos con exito');
    }
    public function llenartablas()
    {
        DB::select(DB::raw("call llenartabla"));//llenar tablas cedula, evaluaciones
        
        return view('periodo.herramienta')
        ->with('success', 'Se actualizaron los datos con exito');
    }

}
