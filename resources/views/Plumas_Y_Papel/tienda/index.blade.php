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
                <a href="#" class="btn btn-next btn-fill btn-rose btn-wd">Favoritos</a>
                <a href="{{ route('tienda.carrito') }}" class="btn btn-next btn-fill btn-rose btn-wd">Carrito</a>
                <a href="#" class="btn btn-next btn-fill btn-rose btn-wd">NUEVOS</a>
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
              <!-- Cuadernos -->
              <div class="hero-wrap col-md-12 mb-5">
                <h4><b>Cuadernos</b></h4>
                <div class="home-slider owl-carousel owl-theme">
                  @foreach($cuadernos as $item)
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
              <hr>
              <!-- Lapiceros -->
              <div class="hero-wrap col-md-12 mb-5">
                <h4><b>Lapiceros</b></h4>
                <div class="home-slider owl-carousel owl-theme">
                  @foreach($lapiceros as $item)
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
                        <a href="#" class="btn btn-success">Agregar al carrito</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <hr>
              <!-- Libros -->
              <div class="hero-wrap col-md-12 mb-3">
                <h4><b>Libros</b></h4>
                <div class="home-slider owl-carousel owl-theme">
                  @foreach($libros as $item)
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
                        <a href="#" class="btn btn-success">Agregar al carrito</a>
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

@endsection
