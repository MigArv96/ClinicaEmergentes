<?php

namespace App\Http\Controllers;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafactura=Factura::all();
        return view('factura.index', compact('datafactura'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('factura.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datafactura = $request->except('_token','saveitem');
        Factura::insert($datafactura);
        //return response()->json($dataProducts);
        return redirect('factura');

    }
    public function edit($id) {
        $datafactura = Factura::find($id);
        return view('factura.edit', compact('datafactura'));
     }

    public function update(Request $request, $id){

        $datafactura = Factura::find($id);
        $datafactura->update($request->all());
        $datafactura->save();
        return redirect('factura');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $datafactura = Factura::find($id);
        $datafactura->delete();
        return redirect('factura');
    }
}
