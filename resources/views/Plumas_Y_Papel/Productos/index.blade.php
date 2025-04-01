@extends('layouts.Plumas_Y_Papel.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 hola">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="card-content">
                        <!--COMPONENTS-->
                        @include('Plumas_Y_Papel/Components/Productos/navproducts')
                        <!--END COMPONENTS-->
                       <!--CONTENT-->
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCION</th>
                                        <th>STOCK</th>
                                        <th>PRECIO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <th>ID</th>
                                    <th>NOMBRE</th>
                                    <th>DESCRIPCION</th>
                                    <th>STOCK</th>
                                    <th>PRECIO</th>
                                    <th>ACCIONES</th>
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
                                        <form action="{{ route('productos.delete', $items->t100_rowid) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger" title="Borrar producto" style="border: none; background: none;">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                     <!--END CONTENT-->
                </div>
                <!-- end content-->

            </div>
        </div>
    </div>
</div>
</div>
@endsection
