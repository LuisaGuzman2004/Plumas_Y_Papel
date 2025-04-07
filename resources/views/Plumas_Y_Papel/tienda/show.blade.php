@extends('layouts.Plumas_Y_Papel.plantilla')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-sm-10 col-sm-offset-1">
            <!-- Wizard container -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="rose" id="Producto">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <!-- @csrf -->

                        <div class="wizard-header">
                            <h3 class="wizard-title">
                                Detalle del producto
                            </h3>
                            <h5>Acá podras visualizar la información detallada del producto</h5>
                        </div>

                        <div class="wizard-navigation">
                            <ul>
                                <li>
                                    <a href="#about" data-toggle="tab">Conectamos con tu crecimiento</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane card" id="about">
                                <div class="row">
                                    <h4 class="info-text">{{ $producto->t100_name_product }}</h4>

                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="product-card">
                                            <div class="card-chart">
                                                <div class="card-header" data-background-color="blue">
                                                    <div class="product-image-container text-center">
                                                        <div class="product-image-container text-center">
                                                            @if ($imagenes->isNotEmpty())
                                                            <img id="mainProductImage" src="{{ asset($imagenes->first()->t080_url) }}" alt="Imagen del producto" class="img-responsive main-product-img">
                                                            @else
                                                            <img id="mainProductImage" src="{{ asset('assets/img/image_placeholder.jpg') }}" alt="Imagen por defecto" class="img-responsive main-product-img">
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                                <br>
                                                {{-- Miniaturas en forma horizontal --}}
                                                @if ($imagenes->count() > 1)
                                                <div class="miniatura-nav-wrapper text-center mt-2">
                                                    <div class="miniatura-nav-horizontal d-flex justify-content-center flex-wrap">
                                                        @foreach ($imagenes->take(5) as $imagen)
                                                        <div class="miniatura-item mx-1">
                                                            <img src="{{ asset($imagen->t080_url) }}" alt="Miniatura" class="miniatura-img {{ $loop->first ? 'miniatura-activa' : '' }}">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">category</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">CATEGORÍA</label>
                                                <select name="t090_product_category" id="t090_product_category" class="form-control">
                                                    @foreach ($categorias as $key => $items)
                                                    <option value="{{ $items->t090_rowid }}" {{ $items->t090_rowid == $producto->t090_product_category ? 'selected' : '' }}>
                                                        {{ $items->t090_category_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">PRECIO</label>
                                                <input name="t100_price_product" type="number" id="t100_price_product" class="form-control" value="{{ $producto->t100_price_product }}">
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">label</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">CÓDIGO DEL PRODUCTO</label>
                                                <input name="t100_cod_product" type="text" id="t100_cod_product" class="form-control" value="{{ $producto->t100_cod_product }}">
                                            </div>
                                        </div>

                                        <div class="input-group text-center">
                                            <input type="number" value="1" id="cant_product" min="1" max="20">
                                            <a href="#" class="btn btn-warning btn-round" onclick="addShop({{$producto->t100_rowid}})">Agregar al carrito</a>
                                            <a href="{{ route('tienda.carrito')}}" class="btn btn-success btn-round">Ver Carrito</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">CARACTERÍSTICAS</label>
                                            <textarea class="form-control" name="t100_desc_product" id="t100_desc_product" readonly rows="4">{{ $producto->t100_desc_product }}</textarea>
                                            @error('t100_desc_product')
                                            <br>
                                            <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><br>

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="card-header card-header-text" data-background-color="blue">
                                        <h5 class="card-title">PRODUCTO RELACIONADOS</h5>
                                    </div>

                                    <br><br>
                                    <!-- Carruseles de productos -->
                                    <div class="">
                                      <!-- Productos relacionados -->
                                      <div class="hero-wrap col-md-12 mb-5">
                                        <div class="home-slider owl-carousel owl-theme">
                                          @foreach($productos_relacionados as $item)
                                          <div class="product-card">
                                            <div class="card card-chart">
                                                <div class="card-header" data-background-color="blue">
                                                    <div class="product-image-container">
                                                        <a href="{{ route('tienda.show',$item->t100_rowid)}}">
                                                            <img src="{{ asset($item->t080_url) }}" alt="Imagen del producto">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-content text-center">
                                                    <h5 class="card-title">{{ $item->t100_name_product }}</h5>
                                                    <a href="#" class="btn btn-success btn-round">Agregar al carrito</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Fin de carruseles -->
                        </div>
                    </div>
                </div>

                <div class="wizard-footer">
                    <div class="pull-right">
                        <a href="{{ route('tienda.index') }}" class="button">
                            <input type='button' class='btn btn-fill btn-rose btn-wd' value="REGRESAR"/>
                        </a>
                    </div>
                </div>
            </form>
        </div> <!-- .wizard-card -->
    </div> <!-- .wizard-container -->
</div> <!-- .col-sm-10 -->
</div> <!-- .container-fluid -->
</div> <!-- .content -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mainImage = document.getElementById('mainProductImage');
        const thumbnails = document.querySelectorAll('.miniatura-img');

        // Si hay miniaturas, activa la primera por defecto (seguridad extra)
        if (thumbnails.length > 0) {
            thumbnails.forEach((img, index) => {
                if (index === 0) {
                    img.classList.add('miniatura-activa');
                    mainImage.setAttribute('src', img.getAttribute('src'));
                }

                img.addEventListener('click', function () {
                    // Cambiar imagen principal
                    const newSrc = this.getAttribute('src');
                    mainImage.setAttribute('src', newSrc);

                    // Resetear borde activo
                    thumbnails.forEach(img => img.classList.remove('miniatura-activa'));
                    this.classList.add('miniatura-activa');
                });
            });
        }
    });

    const routeSendProducts = "{{ route('tienda.send_products') }}";
    const _token_           = "{{ csrf_token() }}";

    const addShop = (product_id) => {

        let product_code  = $('#t100_cod_product').val();
        let product_cant  = $('#cant_product').val();
        let product_price = $('#t100_price_product').val();
        sendProducts(product_id, product_code, product_cant, product_price);

    }

    const sendProducts = (product_id, product_code, product_cant, product_price) => {

        console.log(product_id, product_code, product_cant, product_price);

        $.ajax({
            url: routeSendProducts,
            method: 'POST',
            data: {
                _token        : _token_,
                product_id    : product_id,
                product_code  : product_code,
                product_cant  : product_cant,
                product_price : product_price
            },
            success: function(response) {

                if (response) {
                    alert('Producto agregado!.');
                }

            },
            error: function(error) {
                console.error('Error al obtener productos:', error);
            }
        });

    }

</script>


@endsection
