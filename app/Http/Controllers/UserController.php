<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
