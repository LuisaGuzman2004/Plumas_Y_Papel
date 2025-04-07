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
              <h3>Productos favoritos</h3>
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

            <!-- TEXTO CENTRADO -->
            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
              <h2 class="text-center font-weight-bold text-muted">PROXIMAMENTE...</h2>
            </div>

          </div> <!-- end card-content -->
        </div> <!-- end card -->
      </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
  </div> <!-- end container-fluid -->
</div> <!-- end content -->

@endsection
