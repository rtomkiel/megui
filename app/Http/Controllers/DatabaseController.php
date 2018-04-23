<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function index()
    {
        $list_databases = \App\Database::all();
        return view('database.index', [
            'database' => $list_databases
        ] );
    }
    
    public function novoDB()
    {
        return view('skell.novodb');
    }
    
    public function store(Request $request)
    {
        \App\Database::create($request->all());
        return redirect("/novo-db")->with("message", "Banco de Dados adicionado");
    }
}
