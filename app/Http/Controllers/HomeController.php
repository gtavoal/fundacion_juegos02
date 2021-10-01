<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $juegos = DB::table('juegos AS j')
        ->select('j.id','j.nombre_juego','j.publico_objetivo','j.precio','j.caratula','e.nombre_empresa')
        ->join('empresas AS e', 'j.empresa_id', '=', 'e.id')
        ->get();




        return view('home', [
            'juegos' => $juegos
        ]);



    }
}
