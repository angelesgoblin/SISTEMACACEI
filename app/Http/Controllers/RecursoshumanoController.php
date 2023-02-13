<?php

namespace App\Http\Controllers;

use App\Models\Recursoshumano;
use Illuminate\Http\Request;

/**
 * Class RecursoshumanoController
 * @package App\Http\Controllers
 */
class RecursoshumanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recursoshumanos = Recursoshumano::paginate();

        return view('recursoshumano.index', compact('recursoshumanos'))
            ->with('i', (request()->input('page', 1) - 1) * $recursoshumanos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recursoshumano = new Recursoshumano();
        return view('recursoshumano.create', compact('recursoshumano'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recursoshumano::$rules);

        $recursoshumano = Recursoshumano::create($request->all());

        return redirect()->route('recursoshumanos.index')
            ->with('success', 'Recursoshumano created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recursoshumano = Recursoshumano::find($id);

        return view('recursoshumano.show', compact('recursoshumano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recursoshumano = Recursoshumano::find($id);

        return view('recursoshumano.edit', compact('recursoshumano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recursoshumano $recursoshumano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recursoshumano $recursoshumano)
    {
        request()->validate(Recursoshumano::$rules);

        $recursoshumano->update($request->all());

        return redirect()->route('recursoshumanos.index')
            ->with('success', 'Recursoshumano updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recursoshumano = Recursoshumano::find($id)->delete();

        return redirect()->route('recursoshumanos.index')
            ->with('success', 'Recursoshumano deleted successfully');
    }
}
