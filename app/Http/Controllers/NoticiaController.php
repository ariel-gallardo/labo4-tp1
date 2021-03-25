<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Noticia;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function index(Empresa $empresa)
    {
        return view('noticia.lista',compact('empresa'))->with('noticias',Noticia::where('empresa_id','=',$empresa->id)->orderBy('fecha','desc')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function create(Empresa $empresa)
    {
        return view('noticia.edicion',compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Empresa $empresa)
    {
        $noticia = new Noticia();
        $noticia->fecha = new DateTime();
        $noticia->titulo = $request->titulo;
        $noticia->contenido = $request->contenido;
        $noticia->resumen = $request->resumen;
        $noticia->imagen = "/storage/".basename($request->file('imagen')->store('public'));
        $noticia->publica = $request->publica;
        $noticia->empresa_id = $empresa->id;
        $noticia->save();
        return redirect('/empresa/'.$empresa->id.'/noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa, Noticia $noticia)
    {

        if ($empresa->id === $noticia->empresa_id) {
            return view('detalle', compact('noticia', 'empresa'));
        }

        return response()->view('errors.404', compact('empresa'), 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa, Noticia $noticia)
    {
        return view('noticia.modificar')->with('empresa', $empresa)->with('noticia',$noticia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa, Noticia $noticia)
    {
        $noticia->titulo = $request->titulo;
        $noticia->contenido = $request->contenido;
        $noticia->resumen = $request->resumen;


        if($noticia->imagen !== $request->imagen && $request->imagen !== null){
            $noticia->imagen = "/storage/" . basename($request->file('imagen')->store('public'));
        }

        $noticia->publica = $request->publica;
        $noticia->empresa_id = $empresa->id;
        $noticia->save();
        return redirect('/empresa/' . $empresa->id . '/noticias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa, Noticia $noticia)
    {
        $noticia->delete();
        return redirect('/empresa/' . $empresa->id . '/noticias');
    }
}
