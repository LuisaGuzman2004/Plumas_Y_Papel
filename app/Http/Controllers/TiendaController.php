<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\Products;
use App\Models\Products\MovOrderProducts;
use App\Models\Products\OrderProducts;
use App\Models\Products\ProductCategories;
use Illuminate\Support\Str;
use App\Models\Files;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



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

        return view('Plumas_Y_Papel.Tienda.index', compact('plumas','papel','escritorio','arte_y_color'));
    }

    public function favoritos()
    {
        return view('Plumas_Y_Papel.Tienda.favoritos');
    }

    public function sendProducts(Request $request)
    {
        
        
        $user = Auth::User();
        $costumer = $user->id;
        

        $resultado = false;

        $row_id   = $request->product_id ?? null;
        $codigo   = $request->product_code ?? null;
        $cantidad = $request->product_cant ?? null;
        $precio   = $request->product_price ?? null;
        
        $ordenes_activas = OrderProducts::select('t093_order_purchase.*')
            ->where('t093_order_purchase.t093_order_status','=',1)
            ->first();
        
        if (!$ordenes_activas) {

            $ordenes_activas = OrderProducts::create([
                't093_uuid'              => Str::uuid()->toString(),
                't093_customer' => $costumer,
                't093_purchase_date' => Carbon::now(),
                't093_order_price' => 0,
                't093_order_status' => 1,
            ]);
            
        }
        
        $orden_id = $ordenes_activas->t093_rowid;

        $producto_existente = MovOrderProducts::where('t093_order', $orden_id)
            ->where('t100_product', $row_id)
            ->where('t092_status', 1)
            ->delete();

        $movimientos = MovOrderProducts::create([
            't092_customer'            => $costumer,
            't100_product'             => $row_id,
            't092_code_product'        => $codigo,
            't092_product_quantity'    => $cantidad, 
            't093_order'               => $orden_id,
            't092_product_price'       => $precio,
            't092_total_product_price' => $cantidad * $precio,
            't092_purchase_date'       => Carbon::now(),
            't092_status'              => 1,
        ]);

        if ($movimientos) {

            $resultado = true;

        }

        return $resultado;
        
    }


    public function carrito()
    {

        $user = Auth::User();
        $id = $user->id;
        

        $productos_activos_en_carrito = Products::select('t100_products.*','t092_mov_order_purchase.*','t080_files.*')
        ->join('t092_mov_order_purchase','t092_mov_order_purchase.t100_product','=','t100_products.t100_rowid')
        ->leftjoin('t080_files','t080_files.t100_product_id','t100_products.t100_rowid')
        ->where('t092_mov_order_purchase.t092_customer','=',$id)
        ->get();

        //dd($productos_activos_en_carrito);

        return view('Plumas_Y_Papel.Tienda.carrito.index', compact('productos_activos_en_carrito'));
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
