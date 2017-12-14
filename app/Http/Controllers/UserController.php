<?php

namespace App\Http\Controllers;
use App\Role;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $request->user()->authorizeRoles(['user', 'admin']);

        $users= User::paginate(15);
        return view('user/index')->with('users', $users);
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

$rol=\DB::table('role_user')->where('user_id', $user->id)->first();
$rol=Role::find($rol->role_id);
        // show the edit form and pass the nerd
        return view('user/edit')
            ->with('user', $user)
            ->with('rol', $rol);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
         $request->validate([
             'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'rol' => 'required',
            'password' => 'nullable|string|min:6|confirmed',
]);

         
        $role=\DB::table('role_user')->where('user_id', $user->id)
                                     ->update(['role_id' => $request->input('rol')]);            
            

         $user->name=$request->input('name');
         $user->email=$request->input('email');
         $user->password= ($request->input('password')==null) ? $user->password : bcrypt($request->input('password'));
         $user->save();
       \Alert::success("Registro modificado con exito");
        return redirect()->route('users.index'); 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // delete

\DB::table('role_user')->where('user_id', $user->id)->delete();
        $user->delete();

        // redirect
        // Session::flash('message', 'Successfully deleted the nerd!');
        \Alert::success("Registro eliminado con exito");
        return redirect()->route('users.index'); 

        // return Redirect::to('users');
    }
}
