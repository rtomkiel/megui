<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    
        public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function databases(){
        $list_databases = \App\Database::all();
        return view('skell.listdatabases', [
            'databases'=>$list_databases
        ]);
    }
}
