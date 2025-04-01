<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Products\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productos = Products::select('t100_products.*')
        ->get();
        //dd($productos);

        return view('Plumas_Y_Papel.Productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Plumas_Y_Papel.Productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Imprimimos el $request para validar que si esta llegando la informacións
        //dd($request);

        //Valiamos que si se esten enviando todos los campos antes de hacer el guardado
        $request->validate([
            'nombre_producto' => 'required',
            'descripcion_producto' => 'required',
            'precio_producto' => 'required',
            'stock_producto' => 'required'
        ]);

        //Creamos una instancia del modelo para guardar los datos
        $producto = new Products();

        //Guardamos los campos que vienen en el $request en la tabla de la DB de productos
        $producto->t100_nom_product = $request->nombre_producto;
        $producto->t100_desc_product = $request->descripcion_producto;
        $producto->t100_price_product = $request->precio_producto;
        $producto->t100_stock_product = $request->stock_producto;

        $producto->save();

        return redirect()->route('productos.index')->with('status', '¡Producto creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Products $producto)
    {
        //s
        //Imprimimos el producto a editar antes de pasarlo a la vista
        //dd($producto);

        return view('Plumas_Y_Papel.Productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $producto)
    {
        //
        //dd($producto);

        //Guardamos los campos que vienen en el $request en la tabla de la DB de productos
        $producto->t100_nom_product = $request->nombre_producto;
        $producto->t100_desc_product = $request->descripcion_producto;
        $producto->t100_price_product = $request->precio_producto;
        $producto->t100_stock_product = $request->stock_producto;

        $producto->update();

        return redirect()->route('productos.index')->with('status', '¡Producto editado exitosamente!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $producto)
    {
        //
        $producto->delete();

        return redirect()->route('productos.index')->with('status', '¡Producto eliminado exitosamente!');

    }
}
