<?php

namespace App\Http\Controllers;
use App\Models\subgrupo_cie;
use Illuminate\Http\Request;

class SubgrupoCieController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasubgrupo=subgrupo_cie::all();
        return view('subgrupo_cie.index', compact('datasubgrupo'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subgrupo.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datasubgrupo = $request->except('_token','saveitem');
        subgrupo_cie::insert($datasubgrupo);
        //return response()->json($dataProducts);
        return redirect('subgrupo_cie');

    }
    public function edit($id) {
        $datasubgrupo = subgrupo_cie::find($id);
        return view('subgrupo.edit', compact('datasubgrupo'));
     }

    public function update(Request $request, $id){

        $datasubgrupo = subgrupo_cie::find($id);
        $datasubgrupo->update($request->all());
        $datasubgrupo->save();
        return redirect('subgrupo_cie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subgrupo_cie  $subgrupo_cie
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $datasubgrupo = subgrupo_cie::find($id);
        $datasubgrupo->delete();
        return redirect('subgrupo_cie');
    }
}
