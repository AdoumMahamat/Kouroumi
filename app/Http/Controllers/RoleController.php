<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::get();
        return view('role.index', compact('roles'));
    }


    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $roles =new Role();
        $roles ->intitule=$request->intitule;
        $roles->save();
        return redirect()->route('role_index');
    }

    public function show($id)
    {
        $roles=Role::find($id);
        if($roles)
        {
            return view('role.show' , compact('roles'));
        }
    }

    public function edit($id)
    {
        $roles=Role::find(($id));
        return view('role.edit',compact('roles'));
    }


    public function update(Request $request,  $id) //request :permet de recupere les donnees saisies par l'utilisateur dans le formulaire
    {
        $roles=Role::find($id);
        if($roles)
        {
            $roles->intitule=$request->intitule;
            $roles->save();
            return redirect()->route('role_index');
        }
    }

    
    public function destroy( $id)
    {
        $roles=Role::find($id);
        if($roles)
        {
            $roles->delete();
            return redirect()->route('role_index');

        }
    }
}
