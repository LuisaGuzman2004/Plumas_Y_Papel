@extends('layouts.Plumas_Y_Papel.plantilla')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <!--
          <div class="card-header card-header-icon" data-background-color="blue">
            <i class="material-icons">home</i>
          </div>
        
          <div class="card-content">
            <h4 class="card-title">Bienvenido a <b>Plumas Y Papel</b></h4>
          </div>
-->
          <!-- end content-->
        </div>
        <!--  end card  -->
        <!--SCROLL DE IMAGENES-->
        <div class="hero-wrap col-md-12 ">
          <div class="home-slider owl-carousel">
            <div class="col-sm-12">
              <div class="card card-product2">
                <div class="card-header card-header-image" data-header-animation="true">
                  <a href="#pablo">
                    <img  src="assets/landing/images/banner_p_y_p.png" />
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                      <i class="material-icons">build</i> ¡RECONSTRUIR!
                    </button>
                    <a href="https://api.whatsapp.com/send?phone=573146437351" target="_blank" class="btn btn-primary">Contactar</a>
                    <a href="{{route('tienda.index')}}" class="btn btn mb1 bg-blue">ver más</a>
                  </div>
                  <h4 class="card-title">
                    <a href="">Plumas y Papel esta abierto 24/7</a>
                  </h4>
                  <div class="card-description">
                    Contamos con todos los productos que necesitas para que lleves al siguiente nivel tus proyectos.
                  </div>
                </div>
                <div class="card-footer">
                  <div class="author foto">
                    <img class="img" style="background-color: white" src="{{asset('assets/img/logo-uno.png')}}" />
                    <h2 class="autor"><b>Conectamos con tu crercimiento</b></h2>
                  </div>
                  <div class="stats">
                    <p class="card-category"><i class="material-icons">place</i> PyP, Medellin</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--FIN SCROLL DE IMAGENES-->
<!--
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
-->
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
          <!--
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
-->
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
@endsection

