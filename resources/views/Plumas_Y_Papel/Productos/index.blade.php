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
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
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
                                @foreach($productos as $items)
                                <tr>
                                    <td>{{ $items->t100_rowid }}</td>
                                    <td>{{ $items->t100_nom_product }}</td>
                                    <td>{{ $items->t100_desc_product }}</td>
                                    <td>{{ $items->t100_stock_product }}</td>
                                    <td>{{ $items->t100_price_product }}</td>
                                    
                                    <td class="text-right">
                                        <a href="{{route('productos.create')}}" class="text-success">
                                            <i title="Crear producto" class="material-icons">add_circle</i>
                                        </a>
                                        <a href="{{route('productos.edit', $items->t100_rowid)}}" class="text-warning">
                                            <i title="Editar producto" class="material-icons">edit</i>
                                        </a>
                                        <!--
                                        <form action="{{ route('productos.delete', $items->t100_rowid) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger" title="Borrar producto" style="border: none; background: none;">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                        -->
                                        <a href="#" onclick="eliminarProducto('{{ $items->t100_rowid }}')" class="text-danger">
                                            <i title="Eliminar Producto" class="material-icons">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
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
<script>

    
function ejecutarAccionDeCrud(producto, url, textoConfirmacion, textoExito) {
    swal({
        title: 'ATENCIÓN',
        text: textoConfirmacion,
        type: 'warning',
        showCancelButton: true,
        showConfirmButton: true,
        confirmButtonColor: '#4caf50',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
    }).then(function() {
        $.ajax({
            url: url, // Ruta a tu controlador
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                producto: producto
            },
            success: function(response) {
                let timer;
                swal({
                    title: 'ATENCIÓN',
                    text: textoExito,
                    type: 'success',
                    showConfirmButton: true,
                    confirmButtonColor: '#4caf50',
                    confirmButtonText: 'Aceptar',
                    timer: 3000 // 3 segundos
                }).then(function() {
                    clearTimeout(timer); // Cancela el timer si el usuario hace clic en "Aceptar"
                    window.location.reload();
                });
                // Recarga la página después de 3 segundos si no se ha cerrado el swal
                timer = setTimeout(function() {
                    window.location.reload();
                }, 3000);
            },
            error: function(error) {
                // Manejar errores
                console.log(error);
            }
        });
    });
}


// FUNCIONES EXPECIFICAS
// #1 BORRAR PRODUCTO
function eliminarProducto(producto) {

    //console.log('Hola pepito');
    ejecutarAccionDeCrud(
        producto,
        "{{ route('productos.delete') }}",
        "¿Estas seguro/a de eliminar el producto?.<br>",
        "<b style='color: green'>¡Producto eliminado exitosamente!</b>"
    );
}

</script>
@endsection
