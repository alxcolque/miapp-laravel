<?php

namespace App\Http\Controllers;

use App\Documento;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function index()
    {
        $InsStockInf=Documento::all();
        return view('documento.index',compact('InsStockInf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $InsInf=Insumos::all();
        $TieInf=Tiendas::all();
        return view('supervisor.insumos_stocks.create',compact('InsInf','TieInf'));
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
            'ins_id'=> "required",
            'tienda_id' => 'required',
            'cantidad' => 'required',
            'fecha' => 'required',
        ]);
        Insumos_Stocks::create($request->all());
        return redirect()->route('insumos_stocks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $InsumStockEdit=Insumos_Stocks::findorfail($id);
        $InsInf=Insumos::all();
        $TieInf=Tiendas::all();
        return view('supervisor.insumos_stocks.edit',compact('InsInf','TieInf','InsumStockEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ins_id'=> "required",
            'tienda_id' => 'required',
            'cantidad' => 'required',
            'fecha' => 'required',
        ]);
        Insumos_Stocks::findorfail($id)->update($request->all());
        return redirect()->route('insumos_stocks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Insumos_Stocks::findorfail($id)->delete();
        return redirect()->route('insumos_stocks.index');
    }
}
