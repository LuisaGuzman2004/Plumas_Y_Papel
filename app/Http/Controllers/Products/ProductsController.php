<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Products\Products;
use App\Models\Products\ProductCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Files;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        //Traemos las categoriasc disponibles
        $categorias = ProductCategories::select('t090_category_products.*')
        ->get();

        $user = Auth::User();
        $id = $user->id;
        
        $vendedor = User::select('users.*')
        ->where('users.id','=',$id)
        ->get();

        return view('Plumas_Y_Papel.Productos.create', compact('vendedor','categorias'));
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
            't100_name_product' => 'required',
            't100_cod_product' => 'required',
            't100_desc_product' => 'required',
            't100_price_product' => 'required',
            't100_stock_product' => 'required',
            't100_status_product' => 'required',
            't100_publishing_policies' => 'required',
            't090_product_category' => 'required',
            't100_seller' => 'required',
            'img_1' => 'required'
        ]);


        //Traemos la fecha actual para indicar cuando se creo el producto
        $fecha_actual = Carbon::now();

        //Creamos una instancia del modelo para guardar los datos
        $producto = new Products();

        //Guardamos los campos que vienen en el $request en la tabla de la DB de productos
        $producto->t100_name_product = $request->t100_name_product;
        $producto->t100_cod_product = $request->t100_cod_product;
        $producto->t100_desc_product = $request->t100_desc_product;
        $producto->t100_price_product = $request->t100_price_product;
        $producto->t100_stock_product = $request->t100_stock_product;
        $producto->t100_status_product = $request->t100_status_product;
        $producto->t100_publishing_policies = $request->t100_publishing_policies;
        $producto->t090_product_category = $request->t090_product_category;
        $producto->t100_seller = $request->t100_seller;
        

        $producto->save();

         // Obtener el ID recién creado para relacionar las imagenes
         $id = $producto->t100_rowid;

         /*

         $archivo = new Files();

         // SE GUARDA EL ARCHIVO EN LA CARPETA STORAGE
         $url1 = $request->file('img_1')->store('Files', 'public');
         
         // ACA GUARDAMOS EL NOMBRE REAL DEL ARCHIVO
         $name = $request->file('img_1')->getClientOriginalName();
         
         // SE LE DA UN LINK A LA IMAGEN PARA PODER ACCEDER A ELLA
         $link1 = Storage::url($url1);
         
         // Asignar valores a la DB
         $archivo->t080_url = $link1;
         $archivo->t080_name = $name;
         $archivo->t100_product_id = $id; // ID del producto recién guardado
         
         // Si es la primera imagen (img_1), se marca como portada
         $archivo->t080_is_cover = true; 
         
         $archivo->save();
         */
         
         //Empezamos el guardado de las imagenes

         foreach ($request->all() as $key => $file) {
             // Verifica si el nombre del archivo comienza con "img_" y si es un archivo válido
             if (strpos($key, 'img_') === 0 && $request->hasFile($key)) {
         
                 $archivo = new Files();
         
                 // SE GUARDA EL ARCHIVO EN LA CARPETA STORAGE
                 $url = $request->file($key)->store('Files', 'public');
         
                 // OBTENER EL NOMBRE REAL DEL ARCHIVO
                 $name = $request->file($key)->getClientOriginalName();
         
                 // SE LE DA UN LINK A LA IMAGEN PARA PODER ACCEDER A ELLA
                 $link = Storage::url($url);
         
                 // Asignar valores a la DB
                 $archivo->t080_url = $link;
                 $archivo->t080_name = $name;
                 $archivo->t100_product_id = $id; // ID del producto recién guardado
         
                 // Si es la imagen "img_1", marcar como portada
                 $archivo->t080_is_cover = ($key === 'img_1');
         
                 $archivo->save();
             }
         }
         
        

        Session::flash('mensaje',"¡El producto se ha creado de manera exitosa!.");
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
    public function destroy(Request $request)
    {
       
    // dd($request->all());

     DB::table('t100_products')
     ->where('t100_rowid','=',$request->producto)
     ->delete();

    }
}
