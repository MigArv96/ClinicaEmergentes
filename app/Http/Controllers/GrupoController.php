<?php

namespace App\Http\Controllers;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datagrupo=Grupo::all();
        return view('grupo.index', compact('datagrupo'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupo.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datagrupo = $request->except('_token','saveitem');
        Grupo::insert($datagrupo);
        //return response()->json($dataProducts);
        return redirect('grupo');

    }
    public function edit($id) {
        $datapacientes = Grupo::find($id);
        return view('grupo.edit', compact('datagrupo'));
     }

    public function update(Request $request, $id){

        $datagrupo = grupo::find($id);
        $datagrupo->update($request->all());
        $datagrupo->save();
        return redirect('grupo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $datagrupo = grupo::find($id);
        $datagrupo->delete();
        return redirect('grupo');
    }
}
