@extends('layouts.Plumas_Y_Papel.plantilla')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="material-icons">category</i>
                    </div>
                    <div class="card-content">
                        <!--COMPONENTS-->
                        @include('Plumas_Y_Papel/Components/Productos/navproducts')
                        <!--END COMPONENTS-->
                        <!--CONTENT-->
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover table_products" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCION</th>
                                        <th>STOCK</th>
                                        <th>PRECIO</th>
                                        <th class="disabled-sorting text-right">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <th>ID</th>
                                    <th>NOMBRE</th>
                                    <th>DESCRIPCION</th>
                                    <th>STOCK</th>
                                    <th>PRECIO</th>
                                    <th class="text-right">ACCIONES</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <!--
                                @foreach($productos as $items)
                                <tr>
                                    <td>{{ $items->t100_rowid }}</td>
                                    <td>{{ $items->t100_name_product }}</td>
                                    <td>{{ $items->t100_desc_product }}</td>
                                    <td>{{ $items->t100_stock_product }}</td>
                                    <td>{{ $items->t100_price_product }}</td>
                                    
                                    <td class="text-right">
                                        <a href="{{route('productos.edit', $items->t100_rowid)}}" class="text-success">
                                            <i title="Editar producto" class="material-icons">edit</i>
                                        </a>
                                        <a href="#" onclick="eliminarProducto('{{ $items->t100_rowid }}')" class="text-danger">
                                            <i title="Eliminar Producto" class="material-icons">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
-->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
</div>
</div>

@endsection

<!--SESIÓN DE SCRITPS--->
@section('code-scripts')
<script type="text/javascript">

const _token_                     = "{{ csrf_token() }}";
const routeDeleteProduct = "{{ route('productos.delete') }}";
const routeGetProducts = "{{ route('productos.get_products') }}";

</script>

<script src="{{ asset('productos/index.js') }}" type="text/javascript"></script>

@endsection