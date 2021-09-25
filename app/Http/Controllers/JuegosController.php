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

            $request->validate(
                [
                    'nombre_juego'=>'required|max:500',
                    'publico_objetivo'=>'required',
                    'precio_juego'=>'required|numeric',
                    'empresa_id'=>'required|max:500',
                    'archivo'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',

                ]
                ,
                [
                    'nombre_juego.required' => 'El nombre del juego es requerido',
                    'publico_objetivo.required' => 'El publico objetivo es requerido',
                    'precio_juego.numeric' => 'El precio del juego debe ser numerico',
                    'precio_juego.required' => 'El precio del juego es requerido',
                    'empresa_id.required' => 'La empresa perteneciente es requerida',
                    'archivo.mimes' => 'Las extensiones validas únicamente son jpeg,png,jpg,gif,svg',
                    'archivo.required' => 'La portada es requerida',
                    'archivo.max' => 'El peso máximo es 2048mb',
                ]
                );

            $juego = new Juegos;
            $juego->nombre_juego = $request->nombre_juego;
            $juego->publico_objetivo = $request->publico_objetivo;
            $juego->precio = $request->precio_juego;
            $juego->empresa_id = $request->empresa_id;

            if($request->hasFile("archivo")){
                $file=$request->file("archivo");

                $nombre = "archivo_".time().".".$file->guessExtension();

                $ruta = public_path("files/".$nombre);


                copy($file, $ruta);
            $juego->caratula = $nombre;
            }

            $juego->save();

            return back()->with('message','El juego fue creado correctamente');

        }

        public function update(Request $request,$id){

            $request->validate(
                [
                    'nombre_juego'=>'required|max:500',
                    'publico_objetivo'=>'required',
                    'precio_juego'=>'required|numeric',
                    'empresa_id'=>'required|max:500',
                    'archivo'=>'required',

                ]
                ,
                [
                    'nombre_juego.required' => 'El nombre del juego es requerido',
                    'publico_objetivo.required' => 'El publico objetivo es requerido',
                    'precio_juego.numeric' => 'El precio del juego debe ser numerico',
                    'precio_juego.required' => 'El precio del juego es requerido',
                    'empresa_id.required' => 'La empresa perteneciente es requerida',
                    'archivo.mimes' => 'Las extensiones validas únicamente son jpeg,png,jpg,gif,svg',
                    'archivo.required' => 'La portada es requerida',
                ]
                );


            $juego = Juegos::findOrFail($id);
            $juego->nombre_juego = $request->nombre_juego;
            $juego->publico_objetivo = $request->publico_objetivo;
            $juego->precio = $request->precio_juego;
            $juego->empresa_id = $request->empresa_id;

            if($request->hasFile("archivo")){
                $file=$request->file("archivo");

                $nombre = "archivo_".time().".".$file->guessExtension();

                $ruta = public_path("files/".$nombre);


                copy($file, $ruta);
            $juego->caratula = $nombre;
            }


            $juego->save();

            return back()->with('message','El juego fue actualizado correctamente');

        }

        public function delete($id){

            Juegos::where('id', $id)->delete();
            return back();

        }

}
