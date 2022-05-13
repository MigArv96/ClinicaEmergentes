<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datacategoria=categoria::all();
        return view('categoria.index', compact('datacategoria'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datacategoria = $request->except('_token','saveitem');
        categoria::insert($datacategoria);
        //return response()->json($dataProducts);
        return redirect('categoria');

    }
    public function edit($id) {
        $datacategoria = categoria::find($id);
        return view('categoria.edit', compact('datacategoria'));
     }

    public function update(Request $request, $id){

        $datacategoria = categoria::find($id);
        $datacategoria->update($request->all());
        $datacategoria->save();
        return redirect('categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $datacategoria = categoria::find($id);
        $datacategoria->delete();
        return redirect('categoria');
    }


}
