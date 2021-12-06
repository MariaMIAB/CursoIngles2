<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use App\Models\Usuario;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Notas::paginate();
        return view('notas.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = Usuario::all();
        $notas = Notas::all();
        return view('notas.create',compact('notas'),compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notas = new Notas();
        $notas->nota1 = $request->nota1;
        $notas->nota2 = $request->nota2;
        $notas->nota3 = $request->nota3;
        $notas->notafinal =($request->nota1 + $notas->nota2 + $request->nota3)/3;
        $notas->usuario_id = $request->usuario_id;
        $notas->save();
        return redirect()->route('notas.show',$notas);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $notas = Notas::find($id);
        return view('notas.show', compact('notas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notas = Notas::find($id);
        return view('notas.edit', compact('notas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notas $notas, $id)
    {
        $notas = Notas::find($id);
        $notas->nota1 = $request->nota1;
        $notas->nota2 = $request->nota2;
        $notas->nota3 = $request->nota3;
        $notas->notafinal = $request->notafinal;
        $notas->usuario_id = $request->usuario_id;
        $notas->save();
        return redirect()->route('notas.show',$notas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notas $notas, $id)
    {
        $notas = Notas::find($id);
        $notas->delete();
        return redirect()->route('notas.index');
    }
}
