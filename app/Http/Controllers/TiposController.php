<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TipoI=Tipo::All();
        return view('documento.tipo.index',compact('TipoI'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documento.tipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion'=> "required|max:30|unique:tipos,descripcion",
        ]);
        Tipo::create($request->all());
        return redirect()->route('tipos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $TEdit = Tipo::findorfail($id);
        return view('documento.tipo.edit', compact('TEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descripcion'=> "required|max:30|unique:tipos,descripcion,$id",
        ]);
        Tipo::findorfail($id)->update($request->all());
        //redireccionar
        return redirect()->route('tipos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipo::findorfail($id)->delete();
        return redirect()->route('tipos.index');
    }
}
