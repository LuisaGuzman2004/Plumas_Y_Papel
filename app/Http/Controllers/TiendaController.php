<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\Products;
use App\Models\Products\ProductCategories;
use App\Models\Files;
use App\Models\User;


class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

     

    public function index()
    {
        //
        $lapiceros = Products::select('t100_products.*','t080_files.*')
        ->leftJoin('t080_files','t080_files.t100_product_id','=','t100_products.t100_rowid')
        ->where('t100_products.t090_product_category','=',1)
        ->where('t080_files.t080_is_cover', '=', 1)
        ->get();

        $cuadernos = Products::select('t100_products.*', 't080_files.*')
        ->leftJoin('t080_files', 't080_files.t100_product_id', '=', 't100_products.t100_rowid')
        ->where('t100_products.t090_product_category', '=', 2)
        ->where('t080_files.t080_is_cover', '=', 1)
        ->get();    

        //dd($cuadernos);

        $libros = Products::select('t100_products.*','t080_files.*')
        ->leftJoin('t080_files','t080_files.t100_product_id','=','t100_products.t100_rowid')
        ->where('t100_products.t090_product_category','=',3)
        ->where('t080_files.t080_is_cover', '=', 1)
        ->get();


        return view('Plumas_Y_Papel.Tienda.index', compact('cuadernos','lapiceros','libros'));
    }

    public function carrito()
    {
        return view('Plumas_Y_Papel.Tienda.carrito.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $producto)
    {

    $productos_relacionados = Products::select('t100_products.*','t080_files.*')
    ->leftJoin('t080_files','t080_files.t100_product_id','=','t100_products.t100_rowid')
    ->where('t100_products.t090_product_category','=',$producto->t090_product_category)
    ->where('t080_files.t080_is_cover', '=', 1)
    ->get();

    //Traemos las categorias disponibles
    $categorias = ProductCategories::select('t090_category_products.*')
    ->get();
    //Traemos las imagenes guardardaas que se relacionen con el producto
    $imagenes = Files::select('t080_files.*')
    ->where('t080_files.t100_product_id','=',$producto->t100_rowid)
    ->get();
    //dd($imagenes);
    
    $vendedor = User::select('users.*')
    ->where('users.id','=',$producto->t100_seller)
    ->get();

     return view('Plumas_y_Papel.tienda.show',compact('producto','vendedor','categorias','imagenes','productos_relacionados'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
