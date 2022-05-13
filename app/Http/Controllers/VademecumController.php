<?php

namespace App\Http\Controllers;
use App\Models\vademecum;
use Illuminate\Http\Request;

class VademecumController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datavademecum=vademecum::all();
        return view('vademecum.index', compact('vademecum'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vademecum.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datavademecum = $request->except('_token','saveitem');
        vademecum::insert($datavademecum);
        //return response()->json($dataProducts);
        return redirect('vademecum');

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }
    public function edit($id) {
        $datavademecum = vademecum::firstOrFail($id);
        return view('vademecum.edit', compact('datavademecum'));
     }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $datavademecum = vademecum::firstOrFail($id);
        $datavademecum->update($request->all());
        $datavademecum->save();
        return redirect('vademecum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vademecum  $vademecum
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $datavademecum = vademecum::find($id);
        $datavademecum->delete();
        return redirect('vademecum');
    }
}
