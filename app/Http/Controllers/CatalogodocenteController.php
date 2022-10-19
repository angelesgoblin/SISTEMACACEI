<?php

namespace App\Http\Controllers;

use App\Models\Catalogodocente;
use Illuminate\Http\Request;
use DB;


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
    public function index()
    {
        $catalogodocentes = Catalogodocente::paginate();

        return view('catalogodocente.index', compact('catalogodocentes'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogodocentes->perPage());
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
                                dd($data);
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
