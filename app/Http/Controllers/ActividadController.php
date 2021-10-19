<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividades::orderBy('id','asc')->paginate();
        return view('actividades.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividades = Actividades::all();
        return view('actividades.create',compact('actividades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividades = new Actividades();
        $actividades->nombre_actividad = $request->nombre_actividad;
        $actividades->fechaini = $request->fechaini;
        $actividades->fechapresent = $request->fechapresent;
        $actividades->tema_id = $request->tema_id;
        $actividades->save();
        return redirect()->route('actividades.show',$actividades);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividades = Actividades::find($id);
        return view('actividades.show', compact('actividades'));;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividades = Actividades::find($id);
        return view('actividades.edit', compact('actividades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividades $actividades, $id)
    {
        $actividades = Actividades::find($id);
        $actividades->nombre_actividad = $request->nombre_actividad;
        $actividades->fechaini = $request->fechaini;
        $actividades->fechapresent = $request->fechapresent;
        $actividades->tema_id = $request->tema_id;
        $actividades->save();
        return redirect()->route('actividades.show',$actividades);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
