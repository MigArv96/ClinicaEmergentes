<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataconsulta=Consulta::all();
        return view('consulta.index', compact('dataconsulta'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consulta.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataconsulta = $request->except('_token','saveitem');
        Consulta::insert($dataconsulta);
        //return response()->json($dataProducts);
        return redirect('consulta');

    }
    public function edit($id) {
        $dataconsulta = Consulta::find($id);
        return view('consulta.edit', compact('dataconsulta'));
     }

    public function update(Request $request, $id){

        $dataconsulta = Consulta::find($id);
        $dataconsulta->update($request->all());
        $dataconsulta->save();
        return redirect('consulta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $dataconsulta = Consulta::find($id);
        $dataconsulta->delete();
        return redirect('consulta');
    }
}
