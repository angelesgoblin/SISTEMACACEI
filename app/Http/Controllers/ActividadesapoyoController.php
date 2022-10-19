<?php

namespace App\Http\Controllers;

use App\Models\Actividadesapoyo;
use Illuminate\Http\Request;

//use Illuminate\Database\Eloquent\Prunable;

/**
 * Class ActividadesapoyoController
 * @package App\Http\Controllers
 */
class ActividadesapoyoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividadesapoyos = Actividadesapoyo::paginate();

        return view('actividadesapoyo.index', compact('actividadesapoyos'))
            ->with('i', (request()->input('page', 1) - 1) * $actividadesapoyos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividadesapoyo = new Actividadesapoyo();
        return view('actividadesapoyo.create', compact('actividadesapoyo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Actividadesapoyo::$rules);

        $actividadesapoyo = Actividadesapoyo::create($request->all());

        return redirect()->route('actividadesapoyos.index')
            ->with('success', 'Actividadesapoyo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$actividadesapoyo = Actividadesapoyo::find($id);
        $actividadesapoyo = Actividadesapoyo::where('actividad', $id)->first();
        return view('actividadesapoyo.show', compact('actividadesapoyo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$actividadesapoyo = Actividadesapoyo::find($id);
        $actividadesapoyo = Actividadesapoyo::where('actividad', $id)->first();
        return view('actividadesapoyo.edit', compact('actividadesapoyo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Actividadesapoyo $actividadesapoyo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividadesapoyo $actividadesapoyo)
    {
        request()->validate(Actividadesapoyo::$rules);

        $actividadesapoyo->update($request->all());

        return redirect()->route('actividadesapoyos.index')
            ->with('success', 'Actividadesapoyo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        //$actividadesapoyo = Actividadesapoyo::find($id)->delete();
        $actividadesapoyo = Actividadesapoyo::where('actividad', $id)->first();
        return redirect()->route('actividadesapoyos.index')
            ->with('success', 'Actividadesapoyo deleted successfully');
    }
}
