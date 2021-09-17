<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresasController extends Controller
{
    public function index(){

        $empresas = Empresas::get();

        //dd($empresas);

        return view('empresas.index', [
            'empresas' => $empresas,
        ]);
        }

        public function create(){
        return view('empresas.new_empresa');
        }

        public function show($id){
        //Muestra un registro especifico pero sin dar la posibilidad de ser editado
        }

        public function edit($id){

            //$empresa = Empresas::findOrFail($id);
            $empresa = Empresas::where('id', $id)->first();

            return view('empresas.edit_empresa', [
                'empresa' => $empresa,
            ]);
        }

        public function store(Request $request){

            $empresa = new Empresas;
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->direccion = $request->direccion_empresa;
            $empresa->nit = $request->nit_empresa;
            $empresa->telefono = $request->telefono_empresa;
            $empresa->save();

            return back();



        }

        public function update(Request $request, $id){
            $empresa = Empresas::findOrFail($id);
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->direccion = $request->direccion_empresa;
            $empresa->nit = $request->nit_empresa;
            $empresa->telefono = $request->telefono_empresa;
            $empresa->save();
            return back();
        }

        public function delete($id){

        Empresas::where('id', $id)->delete();
        return back();

        }

}
