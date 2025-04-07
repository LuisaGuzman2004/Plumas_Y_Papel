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
              <!-- Puedes agregar botones o acciones adicionales aquí -->
            </div>

            <!-- Información general -->
            <div class="info-general">
              <h3>Productos disponibles</h3>
              <p>El stock de todos los productos aquí mostrados está sujeto a disponibilidad.</p>
              
              <div class="botnes-pedidos mt-3 mb-4">
                <a href="{{ route('tienda.index') }}" class="btn btn-next btn-fill btn-rose btn-wd">Inicio</a>
                <a href="{{ route('tienda.favoritos' )}}" class="btn btn-next btn-fill btn-rose btn-wd">Favoritos</a>
                <a href="{{ route('tienda.carrito') }}" class="btn btn-next btn-fill btn-rose btn-wd">Carrito</a>
              </div>

              <!-- Leyenda de disponibilidad -->
              <article class="estados mb-4">
                <h3>Disponibilidad</h3>
                <ul>
                  <li class="primer"><span></span><b>Disponible</b></li>
                  <li class="segun"><span></span><b>Pocas unidades</b></li>
                  <li class="tercer"><span></span><b>Agotado</b></li>
                </ul>
              </article>
            </div>

            <!-- Carruseles de productos -->
            <div class="wrapper">
              <!-- Plumas -->
              <div class="hero-wrap col-md-12 mb-5">
                <h4><b>Plumas</b></h4>
                <div class="home-slider owl-carousel owl-theme">
                  @foreach($plumas as $item)
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
                        <a href="#"
                        class="btn btn-success btn-round agregar-carrito"
                        data-id="{{ $item->t100_rowid }}"
                        data-code="{{ $item->t100_cod_product }}"
                        data-price="{{ $item->t100_price_product }}"
                      >
                          Agregar al carrito
                      </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <hr>
              <!-- Papel -->
              <div class="hero-wrap col-md-12 mb-5">
                <h4><b>Papel</b></h4>
                <div class="home-slider owl-carousel owl-theme">
                  @foreach($papel as $item)
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
                        <a href="#"
                        class="btn btn-success btn-round agregar-carrito"
                        data-id="{{ $item->t100_rowid }}"
                        data-code="{{ $item->t100_cod_product }}"
                        data-price="{{ $item->t100_price_product }}"
                      >
                          Agregar al carrito
                      </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <hr>
              <!-- Escritorio -->
              <div class="hero-wrap col-md-12 mb-3">
                <h4><b>Escritorio</b></h4>
                <div class="home-slider owl-carousel owl-theme">
                  @foreach($escritorio as $item)
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
                        <a href="#"
                        class="btn btn-success btn-round agregar-carrito"
                        data-id="{{ $item->t100_rowid }}"
                        data-code="{{ $item->t100_cod_product }}"
                        data-price="{{ $item->t100_price_product }}"
                      >
                          Agregar al carrito
                      </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <hr>
              <!-- Escritorio -->
              <div class="hero-wrap col-md-12 mb-3">
                <h4><b>Arte y Color</b></h4>
                <div class="home-slider owl-carousel owl-theme">
                  @foreach($arte_y_color as $item)
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
                        <a href="#"
                        class="btn btn-success btn-round agregar-carrito"
                        data-id="{{ $item->t100_rowid }}"
                        data-code="{{ $item->t100_cod_product }}"
                        data-price="{{ $item->t100_price_product }}"
                      >
                          Agregar al carrito
                      </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <!-- Fin de carruseles -->

          </div> <!-- end card-content -->
        </div> <!-- end card -->
      </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
  </div> <!-- end container-fluid -->
</div> <!-- end content -->


<script>
    const routeSendProducts = "{{ route('tienda.send_products') }}";
    const _token_ = "{{ csrf_token() }}";

    document.addEventListener('DOMContentLoaded', function () {

        // Agregar evento a todos los botones con la clase .agregar-carrito
        document.querySelectorAll('.agregar-carrito').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                const product_id    = this.dataset.id;
                const product_code  = this.dataset.code;
                const product_price = this.dataset.price;
                const product_cant  = 1; // o podrías hacer un input en el futuro

                sendProducts(product_id, product_code, product_cant, product_price);
            });
        });

        const sendProducts = (product_id, product_code, product_cant, product_price) => {
            console.log(product_id, product_code, product_cant, product_price);

            $.ajax({
                url: routeSendProducts,
                method: 'POST',
                data: {
                    _token: _token_,
                    product_id: product_id,
                    product_code: product_code,
                    product_cant: product_cant,
                    product_price: product_price
                },
                success: function (response) {
                    if (response) {
                        alert('Producto agregado!');
                    }
                },
                error: function (error) {
                    console.error('Error al agregar el producto:', error);
                }
            });
        }
    });
</script>

@endsection
