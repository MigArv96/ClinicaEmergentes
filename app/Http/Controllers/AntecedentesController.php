<?php

namespace App\Http\Controllers;
use App\Models\Antecedentes;
use Illuminate\Http\Request;

class AntecedentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataantecedentes=Antecedentes::all();
        return view('antecedentes.index', compact('dataantecedentes'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('antecedentes.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataantecedentes = $request->except('_token','saveitem');
        Antecedentes::insert($dataantecedentes);
        //return response()->json($dataProducts);
        return redirect('antecedentes');

    }
    public function edit($id) {
        $dataantecedentes = Antecedentes::find($id);
        return view('antecedentes.edit', compact('dataantecedentes'));
     }

    public function update(Request $request, $id){

        $dataantecedentes = Antecedentes::find($id);
        $dataantecedentes->update($request->all());
        $dataantecedentes->save();
        return redirect('antecedentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $dataantecedentes = Antecedentes::find($id);
        $dataantecedentes->delete();
        return redirect('antecedentes');
    }
}
