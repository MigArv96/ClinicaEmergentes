<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use App\Models\Cita;
use Illuminate\Http\Request;
//ok
class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datacitas=Cita::all();
        return view('citas.index', compact('datacitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datacitas = $request->except('_token','saveitem');
        Pacientes::insert($datacitas);
        return redirect('citas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datacitas = Cita::find($id);
        return view('citas.edit', compact('datacitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datacitas = Cita::find($id);
        $datacitas->update($request->all());
        $datacitas->save();
        return redirect('citas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datacitas = Cita::find($id);
        $datacitas->delete();
        return redirect('citas');
    }
}
