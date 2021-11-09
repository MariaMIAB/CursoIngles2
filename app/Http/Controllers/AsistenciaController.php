<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencia = Asistencia::paginate();
        return view('asistencia.index', compact('asistencia'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asistencia = Asistencia::all();
        return view('asistencia.create',compact('asistencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asistencia = new Asistencia();

        
        $asistencia->estado = $request->estado;
        $asistencia->usuario_id = $request->usuario_id;
        $asistencia->save();
        return redirect()->route('asistencia.show',$asistencia);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistencia = Asistencia::find($id);
        return view('asistencia.show', compact('asistencia'));;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = Asistencia::find($id);
        return view('asistencia.edit', compact('asistencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Asistencia $asistencia,$id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->estado = $request->estado;
        $asistencia->usuario_id = $request->usuario_id;
        $asistencia->save();
        return redirect()->route('asistencia.show',$asistencia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia, $id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->delete();
        return redirect()->route('asistencia.index');
    }
}
