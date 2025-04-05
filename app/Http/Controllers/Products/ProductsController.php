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

    public function get_products()
    {
        $productos = Products::select('t100_products.*')
        ->get();
        //dd($productos);

        return response()->json($productos);
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
        //Imprimimos el producto a editar antes de pasarlo a la vista
        //dd($producto);
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

        //dd($vendedor);

        return view('Plumas_Y_Papel.Productos.edit', compact('producto','vendedor','categorias','imagenes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $producto)
    {
        //
        //dd($request);

        //Guardamos los campos que vienen en el $request en la tabla de la DB de productos
        $producto->t100_name_product= $request->t100_name_product;
        $producto->t100_cod_product= $request->t100_cod_product;
        $producto->t100_desc_product = $request->t100_desc_product;
        $producto->t100_price_product = $request->t100_price_product;
        $producto->t100_stock_product = $request->t100_stock_product;
        $producto->t100_status_product = $request->t100_status_product;
        $producto->t100_publishing_policies = $request->t100_publishing_policies;
        $producto->t090_product_category = $request->t090_product_category;
        $producto->t100_seller = $request->t100_seller;

        $producto->update();

            // Validamos si vienen imágenes para actualizarlas o guardar las que no estén
            $imagenesExistentes = $request->input('img_ids', []);

            // Si se sube una nueva img_1, se resetean las portadas
            if ($request->hasFile('img_1')) {
                Files::where('t100_product_id', $producto->t100_rowid)
                    ->update(['t080_is_cover' => 0]);
            }

            foreach ($request->allFiles() as $key => $file) {
                if (strpos($key, 'img_') === 0 && $request->hasFile($key)) {
                    $existingId = $imagenesExistentes[$key] ?? null;
                    $url = $file->store('Files', 'public');
                    $name = $file->getClientOriginalName();
                    $link = Storage::url($url);

                    // Si es img_1, marcar como portada
                    $esPortada = ($key === 'img_1');

                    if ($existingId) {
                        $archivo = Files::find($existingId);
                        if ($archivo) {
                            $archivo->t080_url = $link;
                            $archivo->t080_name = $name;
                            $archivo->t080_is_cover = $esPortada;
                            $archivo->save();
                        }
                    } else {
                        $archivo = new Files();
                        $archivo->t080_url = $link;
                        $archivo->t080_name = $name;
                        $archivo->t100_product_id = $producto->t100_rowid;
                        $archivo->t080_is_cover = $esPortada;
                        $archivo->save();
                    }
                }
            }

            // Si no se subió img_1, pero existe, asegurar que siga siendo la portada
            if (!$request->hasFile('img_1') && isset($imagenesExistentes['img_1'])) {
                // Resetear portadas primero
                Files::where('t100_product_id', $producto->t100_rowid)
                    ->update(['t080_is_cover' => 0]);

                // Marcar img_1 como portada
                Files::where('t080_rowid', $imagenesExistentes['img_1'])
                    ->update(['t080_is_cover' => 1]);
            }



        Session::flash('mensaje',"¡El producto se ha actualizado de manera exitosa!.");
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
