<?php
use App\Models\Producto;
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataproducto=Producto::all();
        return view('producto.index', compact('datapoducto'));

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataproducto = $request->except('_token','saveitem');
        Producto::insert($dataproducto);
        //return response()->json($dataProducts);
        return redirect('producto');

    }
    public function edit($id) {
        $dataproducto = Producto::find($id);
        return view('producto.edit', compact('dataproducto'));
     }

    public function update(Request $request, $id){

        $dataproducto = Producto::find($id);
        $dataproducto->update($request->all());
        $dataproducto->save();
        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $dataproducto = Producto::find($id);
        $dataproducto->delete();
        return redirect('producto');
    }
}
