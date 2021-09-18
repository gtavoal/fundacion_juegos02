<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\Juegos;
use Illuminate\Support\Facades\DB;

class JuegosController extends Controller
{
    public function index(){

        $juegos = DB::table('juegos AS j')
                ->select('j.id','j.nombre_juego','e.nombre_empresa')
                ->join('empresas AS e', 'j.empresa_id', '=', 'e.id')
                ->get();



        return view('juegos.index', [
            'juegos' => $juegos
        ]);

        }

        public function create(){

        $empresas = Empresas::get();


        return view('juegos.new_juego', [
            'empresas' => $empresas
        ]);
        }

        public function show($id){
        //Muestra un registro especifico pero sin dar la posibilidad de ser editado
        }

        public function edit($id){

            $juego = Juegos::where('id', $id)->first();
            $empresas = Empresas::get();

            return view('juegos.edit_juego', [
                'juego' => $juego,
                'empresas' => $empresas,
            ]);
        }

        public function store(Request $request){

            $juego = new Juegos;
            $juego->nombre_juego = $request->nombre_juego;
            $juego->publico_objetivo = $request->publico_objetivo;
            $juego->precio = $request->precio_juego;
            $juego->empresa_id = $request->empresa_id;
            $juego->save();

            return back();

        }

        public function update(Request $request,$id){

            $juego = Juegos::findOrFail($id);
            $juego->nombre_juego = $request->nombre_juego;
            $juego->publico_objetivo = $request->publico_objetivo;
            $juego->precio = $request->precio_juego;
            $juego->empresa_id = $request->empresa_id;
            $juego->save();

            return back();

        }

        public function delete($id){

            Juegos::where('id', $id)->delete();
            return back();

        }

}
