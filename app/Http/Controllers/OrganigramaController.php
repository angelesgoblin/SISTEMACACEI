<?php

namespace App\Http\Controllers;

use App\Models\Organigrama;
use Illuminate\Http\Request;

/**
 * Class OrganigramaController
 * @package App\Http\Controllers
 */
class OrganigramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organigramas = Organigrama::paginate();

        return view('organigrama.index', compact('organigramas'))
            ->with('i', (request()->input('page', 1) - 1) * $organigramas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organigrama = new Organigrama();
        return view('organigrama.create', compact('organigrama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Organigrama::$rules);

        $organigrama = Organigrama::create($request->all());

        return redirect()->route('organigramas.index')
            ->with('success', 'Organigrama created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$organigrama = Organigrama::find($id);
        $organigrama = Organigrama::where('clave_area', $id)->first();;
        return view('organigrama.show', compact('organigrama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $organigrama = Organigrama::find($id);
       $organigrama = Organigrama::where('clave_area', $id)->first();;
        return view('organigrama.edit', compact('organigrama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Organigrama $organigrama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organigrama $organigrama)
    {
        request()->validate(Organigrama::$rules);

        $organigrama->update($request->all());

        return redirect()->route('organigramas.index')
            ->with('success', 'Organigrama updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        //$organigrama = Organigrama::find($id)->delete();
        $organigrama = Organigrama::where('clave_area', $id)->first();
        return redirect()->route('organigramas.index')
            ->with('success', 'Organigrama deleted successfully');
    }
}
