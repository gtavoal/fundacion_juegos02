<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresasController extends Controller
{
    public function index(){

        $empresas = Empresas::where('id', 3)->first();

        dd($empresas);

        return view('empresas.index');
        }

        public function create(){
        return view('empresas.new_empresa');
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
