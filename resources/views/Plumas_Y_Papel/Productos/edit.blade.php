@extends('layouts.Plumas_Y_Papel.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Editar Producto') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="card-content">
                        <!--COMPONENTS-
                        @include('Plumas_Y_Papel/Components/Productos/navproducts')
                        <END COMPONENTS-->
                        <!--CONTENT-->
                        <form action="{{route('productos.update', $producto)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!-- Nombre del producto -->
                                <div class="col-sm-12 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">label</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre del Producto
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input name="nombre_producto" type="text" id="nombre_producto" class="form-control" value="{{$producto->t100_nom_product}}">
                                            @error('nombre_producto')
                                            <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Descripción del producto -->
                                <div class="col-sm-12 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">description</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Descripción
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input name="descripcion_producto" type="text" id="descripcion_producto" class="form-control" value="{{$producto->t100_desc_product}}">
                                            @error('descripcion_producto')
                                            <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Precio del producto -->
                                <div class="col-sm-12 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Precio
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input name="precio_producto" type="text" id="precio_producto" class="form-control" value="{{$producto->t100_price_product}}">
                                            @error('precio_producto')
                                            <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Stock del producto -->
                                <div class="col-sm-12 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">inventory_2</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Stock
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input name="stock_producto" type="number" id="stock_producto" class="form-control" value="{{$producto->t100_stock_product}}">
                                            @error('stock_producto')
                                            <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Botón de envío -->
                                <div class="col-sm-12 text-left">
                                    <button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>
                                    <a href="{{route('productos.index')}}" class="btn btn-primary me-2">Cancelar</a>
                                </div>
                            </div>
                        </form>
                        <!--END CONTENT-->
                    </div>
                    <!-- end content-->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
