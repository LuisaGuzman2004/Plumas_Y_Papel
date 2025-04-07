@extends('layouts.Plumas_Y_Papel.plantilla')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="material-icons">store</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tienda <b>PyP</b></h4>
                        <div class="toolbar">
                          <!--        Here you can write extra buttons/actions for the toolbar              -->
                      </div>
                      <div class="table-responsive">
                        <h3>Productos disponibles</h3>
                        <hp>El stock de todos los productos aqui mostrados esta sujeta a disponibiidad.</hp>
                        <br>
                        <div class="botnes-pedidos mt-3 mb-4">
                            <a href="{{ route('tienda.index') }}" class="btn btn-next btn-fill btn-rose btn-wd">Inicio</a>
                            <a href="#" class="btn btn-next btn-fill btn-rose btn-wd">Favoritos</a>
                            <a href="{{ route('tienda.carrito') }}" class="btn btn-next btn-fill btn-rose btn-wd">Carrito</a>
                            <a href="#" class="btn btn-next btn-fill btn-rose btn-wd">NUEVOS</a>
                        </div>
                        <br>
                        <article class="estados">

                          <h3>Resumen de pedido</h3>
                          
                          
                      </article>
                      <br>
                      <br>
                      <table class="table table-shopping">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>Producto</th>
                                <th class="th-description">Codigo</th>
                                <th class="th-description">Categoria</th>
                                <th class="text-right">Precio</th>
                                <th class="text-right">Cantidad</th>
                                <th class="text-right">Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos_activos_en_carrito as $item)
                            <tr>
                                <td>
                                    <div class="img-container">
                                        @if( $item->t080_is_cover == 1)
                                        <img src="{{ asset($item->t080_url) }}" alt="...">
                                        @endif
                                    </div>
                                </td>
                                <td class="td-name">
                                    <a href="{{ route('tienda.show',$item->t100_rowid)}}">{{$item->t100_name_product}}</a>
                                    <br />
                                </td>
                                <td>
                                   {{$item->t100_cod_product}}
                               </td>
                               <td>
                                  {{$item->t090_product_category}}
                              </td>
                              <td class="td-number text-right">
                                <small>$</small> {{$item->t092_product_price}}
                            </td>
                            <td class="td-number">
                                {{$item->t092_product_quantity}}
                                    <!--
                                    <div class="btn-group">
                                        <button class="btn btn-round btn-success btn-xs"> <i class="material-icons">remove</i> </button>
                                        <button class="btn btn-round btn-success btn-xs"> <i class="material-icons">add</i> </button>
                                    </div>
                                -->
                            </td>
                            <td class="td-number">
                                <small>$</small>{{$item->t092_total_product_price}}
                            </td>
                            <td class="td-actions">
                                <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-simple">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2" class="text-right">
                                <button type="button" class="btn btn-warning btn-round">Completar compra <i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection