@extends('layouts.Plumas_Y_Papel.plantilla')

@section('content')

<!-- ESTILOS DEL CARRUSEL-->
<link rel="stylesheet" href="{{ asset('assets/landing/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/landing/css/owl.carousel-cartas.min.css') }}">
<!-- FIN ESTILOS CARRUSEL-->

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-icon" data-background-color="blue">
            <i class="material-icons">home</i>
          </div>
          <div class="card-content">
            <h4 class="card-title">Bienvenido a <b>Plumas Y Papel</b></h4>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
        <!--SCROLL DE IMAGENES-->
        <div class="hero-wrap col-md-8 ">
          <div class="home-slider owl-carousel">
            
            
          </div>
        </div>
        <!--FIN SCROLL DE IMAGENES-->

        <div class="row col-md-3 col-sm-offset-9"  style="float: revert">
          <div class="col-sm-12">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon" >
                <div class="card-icon">
                <i class="fa fa-youtube blue-color " ></i>
                </div>
                <p class="card-category">Plumas y Papel</p>
                <h3 class="card-title-2">Youtube</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                  <a href="" target="_blank">Visitar</a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-sm-12">
            <div class="card card-stats">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                <i class='fa fa-linkedin-square'></i>
                </div>
                <p class="card-category">Plumas y Papel</p>
                <h3 class="card-title">Linkedin</h3>
              </div>
              <div class="card-footer">
              <div class="stats">
                  <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                  <a href="" target="_blank">Visitar</a>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-sm-12">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                <i class='fa fa-google-plus-square'></i>
                </div>
                <p class="card-category">Plumas y Papel</p>
                <h3 class="card-title">Gmail</h3>
              </div>
              <div class="card-footer">
              <div class="stats">
                  <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                  <a href="" target="_blank">Visitar</a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-sm-12">
            <div class="card card-stats">
              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                <i class='fa fa-flag-checkered'></i>
                </div>
                <p class="card-category">Plumas y Papel</p>
                <h3 class="card-title">Plumas y Papel</h3>
              </div>
              <div class="card-footer">
              <div class="stats">
                  <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                  <a href="" target="_blank">Visitar</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>
</div>

<!-- SRCRIPS DE SCROLL-->
<!-- SRCRIPS DE SCROLL-->
<script src="{{ asset('assets/landing/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/main.js') }}"></script>
<!-- FIN SRCRIPS DE SCROLL--> 
<!-- FIN SRCRIPS DE SCROLL--> 
@endsection

