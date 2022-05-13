<?php

namespace App\Http\Controllers;
use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datareceta=Receta::all();
        return view('receta.index', compact('datareceta'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receta.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datareceta = $request->except('_token','saveitem');
        Receta::insert($datareceta);
        //return response()->json($dataProducts);
        return redirect('receta');

    }
    public function edit($id) {
        $datareceta = Receta::find($id);
        return view('receta.edit', compact('datareceta'));
     }

    public function update(Request $request, $id){

        $datareceta = Receta::find($id);
        $datareceta->update($request->all());
        $datareceta->save();
        return redirect('receta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $datareceta = Receta::find($id);
        $datareceta->delete();
        return redirect('receta');
    }
}
