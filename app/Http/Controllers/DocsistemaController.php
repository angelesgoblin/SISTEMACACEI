<?php

namespace App\Http\Controllers;

use App\Models\Docsistema;
use Illuminate\Http\Request;

/**
 * Class DocsistemaController
 * @package App\Http\Controllers
 */
class DocsistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docsistemas = Docsistema::paginate();

        return view('docsistema.index', compact('docsistemas'))
            ->with('i', (request()->input('page', 1) - 1) * $docsistemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docsistema = new Docsistema();
        return view('docsistema.create', compact('docsistema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Docsistema::$rules);

        $docsistema = Docsistema::create($request->all());

        return redirect()->route('docsistemas.index')
            ->with('success', 'Docsistema created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docsistema = Docsistema::find($id);

        return view('docsistema.show', compact('docsistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docsistema = Docsistema::find($id);

        return view('docsistema.edit', compact('docsistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Docsistema $docsistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docsistema $docsistema)
    {
        request()->validate(Docsistema::$rules);

        $docsistema->update($request->all());

        return redirect()->route('docsistemas.index')
            ->with('success', 'Docsistema updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $docsistema = Docsistema::find($id)->delete();

        return redirect()->route('docsistemas.index')
            ->with('success', 'Docsistema deleted successfully');
    }
}
