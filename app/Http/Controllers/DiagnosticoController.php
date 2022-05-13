<?php

namespace App\Http\Controllers;
use App\Models\Diagnostico;
use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datadiagnostico=Diagnostico::all();
        return view('diagnostico.index', compact('datadiagnostico'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnostico.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datadiagnostico = $request->except('_token','saveitem');
        Diagnostico::insert($datadiagnostico);
        //return response()->json($dataProducts);
        return redirect('diagnostico');

    }
    public function edit($id) {
        $datadiagnostico = Diagnostico::find($id);
        return view('diagnostico.edit', compact('datadiagnostico'));
     }

    public function update(Request $request, $id){

        $datadiagnostico = Diagnostico::find($id);
        $datadiagnostico->update($request->all());
        $datadiagnostico->save();
        return redirect('diagnostico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnostico  $diagnostico
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $datadiagnostico = Diagnostico::find($id);
        $$datadiagnostico->delete();
        return redirect('diagnostico');
    }
}
