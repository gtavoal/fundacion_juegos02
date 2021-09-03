<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegosController extends Controller
{
    public function index(){
        return view('juegos.index');
        }

        public function create(){
        return view('juegos.new_juego');
        }

        public function show($id){
        //Muestra un registro especifico pero sin dar la posibilidad de ser editado
        }

        public function edit($id){
        // Muestra un registro especifico pero con inputs que nos permiten actualizar el registro despues
        }

        public function store(Request $request){
        // Introducir datos a la base de datos
        }

        public function update($id){
        // Actualiza un registro en la base de datos proveniete de un formulario
        }

        public function delete($id){
        // Elimina un único registro de nuestra base de datos
        }

}
