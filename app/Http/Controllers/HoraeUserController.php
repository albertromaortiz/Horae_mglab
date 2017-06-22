<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

use App\User;
use App\Role;
use Image;
use Storage;
use File;
use URL;
use Redirect;


class HoraeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.list_usuarios', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::pluck( 'role_name', 'id');
        return view('admin.users.form_ins_usuarios', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = new user;



      if($request->hasFile('avatar')){
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();
      Image::make($avatar)->fit(160, 160, function ($constraint) {
          $constraint->upsize();
      })->save('images/avatar/'.$filename );
      $user->avatar = $filename;
    }



        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $password = Hash::make($request->password);
        $user->password = $password;

        $user->save();



        return redirect('admin/users');


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
      $user = User::findOrFail($id);
      $roles = Role::pluck( 'role_name', 'id');

      return view('admin.users.form_edit_usuarios', compact('roles'))->withUser($user);
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

      $user = User::findOrFail($id);

      $avataractual = $user->avatar;

      if($request->hasFile('avatar')){
      File::delete('images/avatar/'.$avataractual);
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();
      Image::make($avatar)->fit(160, 160, function ($constraint) {
      $constraint->upsize();
      })->save('images/avatar/'.$filename );
        $user->avatar=$filename;
      }

      $user->name=$request->name;
      $user->email=$request->email;
      $user->role_id = $request->role_id;
      $user->save();

      return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::findOrFail($id);
      $avataractual = $user->avatar;
      File::delete('images/avatar/'.$avataractual);
      $user->delete();

      return redirect('admin/users');

    }
}
