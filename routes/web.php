<?php

use App\Http\Controllers\Products\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\PedidosController;

use App\Models\Products\Products;
use App\Models\Files;


Route::get('/', function () {



            //
            $plumas = Products::select('t100_products.*','t080_files.*')
            ->leftJoin('t080_files','t080_files.t100_product_id','=','t100_products.t100_rowid')
            ->where('t100_products.t090_product_category','=',1)
            ->where('t080_files.t080_is_cover', '=', 1)
            ->get();
    
            $papel = Products::select('t100_products.*', 't080_files.*')
            ->leftJoin('t080_files', 't080_files.t100_product_id', '=', 't100_products.t100_rowid')
            ->where('t100_products.t090_product_category', '=', 2)
            ->where('t080_files.t080_is_cover', '=', 1)
            ->get();    
    
            $escritorio = Products::select('t100_products.*','t080_files.*')
            ->leftJoin('t080_files','t080_files.t100_product_id','=','t100_products.t100_rowid')
            ->where('t100_products.t090_product_category','=',3)
            ->where('t080_files.t080_is_cover', '=', 1)
            ->get();
    
            $arte_y_color = Products::select('t100_products.*','t080_files.*')
            ->leftJoin('t080_files','t080_files.t100_product_id','=','t100_products.t100_rowid')
            ->where('t100_products.t090_product_category','=',4)
            ->where('t080_files.t080_is_cover', '=', 1)
            ->get();


    return view('welcome',compact('plumas','papel','escritorio','arte_y_color'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTAS DE PRODUCTOS
Route::get('/Productos/index', [ProductsController::class, 'index'])->name('productos.index');
Route::get('/Productos/get_products', [ProductsController::class, 'get_products'])->name('productos.get_products');
Route::get('/Productos/create', [ProductsController::class, 'create'])->name('productos.create');
Route::post('/Productos/store', [ProductsController::class, 'store'])->name('productos.store');
Route::get('/Productos/edit/{producto}', [ProductsController::class, 'edit'])->name('productos.edit');
Route::put('/Productos/update/{producto}', [ProductsController::class, 'update'])->name('productos.update');
Route::post('/Productos/delete/', [ProductsController::class, 'destroy'])->name('productos.delete');


//RUTAS DE TIENDA
Route::get('/Tienda/index', [TiendaController::class, 'index'])->name('tienda.index');
Route::get('/Tienda/favoritos', [TiendaController::class, 'favoritos'])->name('tienda.favoritos');
Route::get('/Tienda/carrito', [TiendaController::class, 'carrito'])->name('tienda.carrito');
Route::get('/Tienda/show/{producto}', [TiendaController::class, 'show'])->name('tienda.show');

Route::post('/Tienda/send_products', [TiendaController::class, 'sendProducts'])->name('tienda.send_products');

//PEDIDOS
Route::get('/Pedidos/index', [PedidosController::class, 'index'])->name('Pedidos.index');