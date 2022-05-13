<?php

namespace App\Http\Controllers;
use App\Models\categoria_cie;
use Illuminate\Http\Request;

class CategoriaCieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datacategoria_cie=categoria_cie::all();
        return view('categoria_cie.index', compact('datacategoria_cie'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria_cie.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datacategoria_cie = $request->except('_token','saveitem');
        categoria_cie::insert($datacategoria_cie);
        //return response()->json($dataProducts);
        return redirect('categoria_cie');

    }
    public function edit($id) {
        $datacategoria_cie = categoria_cie::find($id);
        return view('categoria_cie.edit', compact('datacategoria_cie'));
     }

    public function update(Request $request, $id){

        $datacategoria_cie = categoria_cie::find($id);
        $datacategoria_cie->update($request->all());
        $datacategoria_cie->save();
        return redirect('categoria_cie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoria_cie  $categoria_cie
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $datacategoria_cie = categoria_cie::find($id);
        $datacategoria_cie->delete();
        return redirect('categoria_cie');
    }

}
