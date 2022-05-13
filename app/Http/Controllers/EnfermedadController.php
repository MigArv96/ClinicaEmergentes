<?php

namespace App\Http\Controllers;
use App\Models\Enfermedad;
use Illuminate\Http\Request;

class EnfermedadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataenfermedad=Enfermedad::all();
        return view('enfermedad.index', compact('dataenfermedad'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enfermedad.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataenfermedad = $request->except('_token','saveitem');
        Enfermedad::insert($dataenfermedad);
        //return response()->json($dataProducts);
        return redirect('enfermedad');

    }
    public function edit($id) {
        $dataenfermedad = Enfermedad::find($id);
        return view('enfermedad.edit', compact('dataenfermedad'));
     }

    public function update(Request $request, $id){

        $dataenfermedad = Enfermedad::find($id);
        $dataenfermedad->update($request->all());
        $dataenfermedad->save();
        return redirect('enfermedad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $dataenfermedad = Enfermedad::find($id);
        $dataenfermedad->delete();
        return redirect('enfermedad');
    }
}
