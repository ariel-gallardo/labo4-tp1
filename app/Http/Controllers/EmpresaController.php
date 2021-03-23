<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public function validar(Request $req){
        $this->validate($req,[
            "denominacion" => "required | string | min:3 | max:128",
            "telefono" => "required | string | min:7 | max:50",
            "horario" => "required | string | min:10 | max:256 ",
            "info" => "required | string | min:10 | max:1024 ",
            "latitud" => "required | numeric | between:-85.000000,85.000000 ",
            "longitud" => "required  | numeric | between:-180.000000,180.000000 ",
            "domicilio" => "required | min:10 | max:256 ",
            "email" => "required | min:7 | max:75"
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome')->with('empresas', Empresa::paginate('10'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validar($request);
        $empresa = new Empresa();
        $empresa->denominacion = $request['denominacion'];
        $empresa->telefono = $request['telefono'];
        $empresa->horario = $request['horario'];
        $empresa->info = $request['info'];
        $empresa->latitud = $request['latitud'];
        $empresa->longitud = $request['longitud'];
        $empresa->domicilio = $request['domicilio'];
        $empresa->email = $request['email'];
        $empresa->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('home')->with('empresa',$empresa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.editar')->with('empresa',$empresa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $this->validar($request);
        $empresa->denominacion = $request['denominacion'];
        $empresa->telefono = $request['telefono'];
        $empresa->horario = $request['horario'];
        $empresa->info = $request['info'];
        $empresa->latitud = $request['latitud'];
        $empresa->longitud = $request['longitud'];
        $empresa->domicilio = $request['domicilio'];
        $empresa->email = $request['email'];
        $empresa->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect('/');
    }
}
