<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $nbAdmin = $users->where('role_id', Role::where('slug','ADMI')->first()->id)->count();
        return view('users.index')->with(compact('users', 'nbAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Set user as admin
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setAdmin(Request $request)
    {
        $user = user::find($request->input('userid'));
        if ($user != null)
        {
            $role = role::where('slug','ADMI')->first();

            $user->role()->associate($role->id);
            $user->save();

            return redirect(route('users.index'))->with('message',"{$user->pseudo} est maintenant admin !");
        }
        else {
            return redirect(route('users.index'))->with('message',"Une erreur est survenue.");
        }
    }

    /**
     * Set user as student
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setStud(Request $request)
    {
        $user = user::find($request->input('userid'));
        if ($user != null)
        {
            $role = role::where('slug','STUD')->first();

            $user->role()->associate($role->id);
            $user->save();

            return redirect(route('users.index'))->with('message',"{$user->pseudo} est maintenant étudiant !");
        }
        else {
            return redirect(route('users.index'))->with('message',"Une erreur est survenue.");
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
