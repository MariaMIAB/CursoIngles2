<?php

namespace App\Http\Controllers;

use App\Models\Cronograma;
use Illuminate\Http\Request;

class CronogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cronograma = Cronograma::orderBy('id','asc')->paginate();
        return view('cronograma.index', compact('cronograma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cronograma = Cronograma::all();
        return view('cronograma.create', compact('cronograma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cronograma = new Cronograma();

        $cronograma->descripcion = $request->descripcion;
        $cronograma->fechaini = $request->fechaini;
        $cronograma->fechafin = $request->fechafin;
        $cronograma->save();
        return redirect()->route('cronograma.show',$cronograma);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cronograma = cronograma::find($id);
        
        return view('cronograma.show', compact('cronograma'));;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cronograma $cronograma)
    {
        return view('cronograma.edit', compact('cronograma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Cronograma $cronograma)
    {

        $cronograma->descripcion = $request->descripcion;
        $cronograma->fechaini = $request->fechaini;
        $cronograma->fechafin = $request->fechafin;
        $cronograma->save();
        return redirect()->route('cronograma.show',$cronograma);
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
