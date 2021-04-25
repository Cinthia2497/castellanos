<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        return view('producto.index')->with('producto', $producto);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Nombredelproducto' => 'required',
            'Codigodelproducto' => 'nullable',
            'Referencia' => 'nullable',
            'Descuento' => 'nullable',
            'Impuesto' => 'nullable'
        ]);
        Producto::create($data);

        return redirect('/producto')->with('success', 'producto creado correctamente.');
        //
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
        //$producto = producto::findOrFail($id);
        //return view('producto.update')->with('producto', $producto);
        //
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
       // $data = $request->validate([
            //'Nombre del producto' => 'required',
           // 'Codigo del producto' => 'nullable',
           // 'Referencia' => 'nullable',
            //'Descuento' => 'nullable',
            //'Impuesto' => 'nullable'
        //]);
        
        //producto::whereId($id)->update($data);

        //return redirect('/producto')->with('success', 'producto modificado correctamente.');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$producto = Producto::findOrFail($id);
        //$producto->producto();

        //return redirect('/producto')->with('success', 'producto eliminado correctamente.');;
        //
    }
}
