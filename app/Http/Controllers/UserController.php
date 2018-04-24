<?php

namespace App\Http\Controllers;

use Request;

class UserController extends Controller
{
    
        public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function users(){
        $list_users = \App\User::all();
        return view('skell.listuser', [
            'users'=>$list_users
        ]);
    }
    
    
    public function newuser() {
        return view('skell.newuser');
        
    }
    
    
    /* Criando usuário */
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'type' => 'required|string|min:5|confirmed'
        ]);
    }
    
    protected function create()
    {
        $user = new \App\User();

        $user->name = Request::get('name');
        $user->email = Request::get('email');
        $user->type = Request::get('type');
        $user->password = \Illuminate\Support\Facades\Hash::make(Request::get('password'));

        $user->save();

        return \Illuminate\Support\Facades\Redirect::to('/usuarios');
    }
    
    /* View para ediçção de usuário */
    public function getEdit($id)
    {
        $user = \App\User::find($id);
        return \Illuminate\Support\Facades\View::make('skell.edituser', compact('user'), ['users' => $user]);
    }


    public function postEdit()
    {
        $user = \App\User::find(Request::get('id'));
        $user->name = Request::get('name');
        $user->email = Request::get('email');
        $user->type = Request::get('type');
        
        if(Request::get('password'))
        {
            $user->password = \Illuminate\Support\Facades\Hash::make(Request::get('password'));
        }

        $user->save();

        return \Illuminate\Support\Facades\Redirect::to('/usuarios');
    }
    
    
}
