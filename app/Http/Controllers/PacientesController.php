<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapacientes=Pacientes::all();
        return view('pacientes.index', compact('datapacientes'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datapacientes = $request->except('_token','saveitem');
        Pacientes::insert($datapacientes);
        //return response()->json($dataProducts);
        return redirect('pacientes');

    }
    public function edit($id) {
        $datapacientes = Pacientes::find($id);
        return view('pacientes.edit', compact('datapacientes'));
     }

    public function update(Request $request, $id){

        $datapacientes = Pacientes::find($id);
        $datapacientes->update($request->all());
        $datapacientes->save();
        return redirect('pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacientes  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $datapaciente = Pacientes::find($id);
        $datapaciente->delete();
        return redirect('pacientes');
    }


}
