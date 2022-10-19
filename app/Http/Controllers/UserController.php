<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function _construct()
    {
      // $this->middleware('can:usuarios.index')->only('index');
      //  $this->middleware('can:usuarios.edit')->only('edit');
      //  $this->middleware('can:usuarios.update')->only('update');
    }
    
     public function index()
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

   /* public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }*/

  
   /* public function store(Request $request)
    {
        request()->validate(User::$rules);
        $user = User::create($request->all());
        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }*/

  
   /* public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       // $user = User::find($id);
        //$user = User::where('user', $id)->first();
        $roles = Role::all();
        return view('user.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('users.edit', $user)
        ->with('info','Se asignó rol correctamente');
            
    }

   
 /*   public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }*/
}
