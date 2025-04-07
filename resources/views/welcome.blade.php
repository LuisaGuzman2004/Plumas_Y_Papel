<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/Logo_PyP.jpg">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Plumas y Papel | inicio</title>
  <link rel="stylesheet" href="assets/landing/css/animate.css">
  
  <link rel="stylesheet" href="assets/landing/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/landing/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/landing/css/magnific-popup.css">

  <link rel="stylesheet" href="assets/landing/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="assets/landing/css/jquery.timepicker.css">

  <link rel="stylesheet" href="assets/landing/css/flaticon.css">
  <link rel="stylesheet" href="assets/landing/css/style.css">

  <!-- Bootstrap core CSS     -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--  Material Dashboard CSS    -->
  <link href="assets/css/material-dashboard.css" rel="stylesheet" />
  <link rel="canonical" href="//www.creative-tim.com/product/material-dashboard-pro" />
  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="assets/css/demo.css" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/google-roboto-300-700.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link rel="stylesheet" href="{{ asset('\assets\landing\css\custom.css') }}">
  

</head>
<body>
  <nav class="navbar navbar-dark navbar-absolute">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="/">Plumas y Papel | <b>Plumas y Papel </b></a> -->
        <a class="navbar-brand" href="/"><img src="assets/img/logo-uno.png" alt="250px" width="35%" style="margin-top:-30px"></a>
      </div>
      <div class="collapse navbar-collapse" >
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="/">
              <i class="material-icons">home</i> Inicio
            </a>
          </li>
          <li class="">
            <a href="{{ route('register') }}">
              <i class="material-icons">person_add</i> Registrar
            </a>
          </li>
        <li>
          <a href="{{ route('login') }}">
            <i class="material-icons">fingerprint</i> Iniciar Sesión
            
          </a>
        </li>
        <!---OTROS-->
        <!---
        <li>
          <h4><b>|</b></h4>
        </li>
        <li>
          <a href="" target="_blank">
            <i class="material-icons" style="color: #205f6d">donut_large</i>Historia
          </a>
        </li>
        <li>
          <h4><b>|</b></h4>
        </li>
        <li>
          <a href="" target="_blank">
            <i class="material-icons" style="color: #205f6d">group</i>Redes
          </a>
        </li>
-->
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->


<div class="hero-wrap js-fullheight">
  <div class="home-slider owl-carousel js-fullheight">
    
    <div class="slider-item js-fullheight" style="background-image:url(assets/landing/images/fondo-landing.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-7 ftco-animate">
            <div class="text w-100">
              <h2><b class="col-md-1 col-lg-12">BIENVENIDO A PLUMAS Y PAPEL</b></h2>   
              <h1 class="mb-4 color-white">Lo más popular</h1>
              <p><a href="{{ route('login') }}" class="btn btn-primary">ver más</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- 
    <div class="slider-item js-fullheight" style="background-image:url(assets/landing/images/login.JPG);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-7 ftco-animate">
            <div class="text w-100">
              <h2><b>ATENCION AL CLIENTE</b></h2>
              <h1 class="mb-4 color-white">Nos destacamos por nuestro buen servicio y atención al usuario</h1>
              <p><a href="{{ route('login') }}" class="btn btn-primary">ver más</a> <a href="#" class="btn btn-white">Contáctanos</a></p>
            </div>
          </div>
        </div><strong></strong>
      </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image:url(assets/landing/images/home2.png);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-7 ftco-animate">   
            <div class="text w-100">
              <h2><b>SERVICIO AL CLIENTE</b></h2>
              <h1 class="mb-4 color-white">Nuestra prioridad es cubrir las necesidades del cliente</h1>
              <p><a href="{{ route('login') }}" class="btn btn-primary">ver más</a> <a href="#" class="btn btn-white">Contáctanos</a></p>
            </div>
          </div>
        </div><strong></strong>
      </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image:url(assets/landing/images/card-2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-7 ftco-animate">
            <div class="text w-100">
              <h2><b>SEDE BARRANQUILLA</b></h2>
              <h1 class="mb-4 color-white">Nuestra sede en Barranquilla te espera.</h1>
              <p><a href="{{ route('login') }}" class="btn btn-primary">ver más</a> <a href="#" class="btn btn-white">Contáctanos</a></p>
            </div>
          </div>
        </div><strong></strong>
      </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image:url(assets/landing/images/card-3.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-7 ftco-animate">
            <div class="text w-100">
              <h2><b>SEDE CALI</b></h2>
              <h1 class="mb-4 color-white">Te esperamos en nuestra sede de Cali con todas las medidas de bioseguridad.</h1>
              <p><a href="{{ route('login') }}" class="btn btn-primary">ver más</a> <a href="#" class="btn btn-white">Contáctanos</a></p>
            </div>
          </div>
        </div><strong></strong>
      </div>
    </div> -->
    
  </div>
</div>
<div class="nav-center">
  <ul class="nav nav-pills nav-pills-warning nav-pills-icons" role="tablist">
                        <!--
            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
          -->
          <li>
            <a href="#" role="tab" data-toggle="tab">
              <i class="material-icons">local_mall</i> Catalogo
            </a>
          </li>
          <li>
            <a href="#description-1" role="tab" data-toggle="tab">
              <i class="material-icons">business</i> Nuestra empresa
            </a>
          </li>
          <li class="">
            <a href="#schedule-1" role="tab" data-toggle="tab">
              <i class="material-icons">contacts</i> Contactanos
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-content">
        <div class="tab-pane" id="description-1">
          <div class="card card-plain2">
            <div class="empresa-texto-izquierdo">
              <div class="item-nosotros">
                <div class="col-3">
                  <h2><b>Nosotros</b></h2>    
                  <span></span>   
                </div>
                <div class="col-8">
                  <div>
                    <p>Plumas y Papel es una miscelánea de papelería innovadora que nace con el propósito de ofrecer soluciones prácticas y de alta calidad a estudiantes, profesionales y empresas del Valle de Aburrá.</p>
                    <p> Nos especializamos en la venta de productos de oficina, útiles escolares y artículos ecológicos, garantizando disponibilidad las 24 horas del día. Creemos en la importancia de la sostenibilidad y la comodidad, por lo que trabajamos para ofrecer un servicio eficiente y amigable con el medio ambiente, con entregas rápidas y atención personalizada</p>
                    <p>Nuestro compromiso es brindar la mejor experiencia de compra, ayudando a nuestros clientes a encontrar siempre lo que necesitan sin importar la hora o el lugar.</p>
                  </div>
                </div>
              </div>

              <div class="item-mision">
                <div class="col-3">
                  <h2><b>Misión</b></h2>    
                  <span> </span>  
                </div>
                <div class="col-8">
                  <div>
                    <p>En Plumas y Papel, nuestra misión es brindar a nuestros clientes una experiencia de compra confiable y accesible, ofreciendo productos de papelería de alta calidad y amigables con el medio ambiente. Nos comprometemos a estar disponibles las 24 horas del día, asegurando que estudiantes, profesionales y empresas encuentren lo que necesitan en cualquier momento y lugar del Valle de Aburrá. Buscamos mejorar continuamente nuestros servicios, garantizando rapidez en la entrega, precios competitivos y atención personalizada para satisfacer las necesidades de nuestros clientes con eficiencia y compromiso.</p>
                  </div>
                </div>
              </div>

              <div class="item-vision">
                <div class="col-4">
                  <h2><b>Visión</b></h2>     
                  <span> </span>  
                </div>
                <div class="col-8">
                  <div>
                    <p>Aspiramos a convertirnos en la miscelánea de papelería líder en el Valle de Aburrá y en un referente de innovación y sostenibilidad en el sector. Nuestro objetivo es ampliar nuestra cobertura y diversificar nuestra oferta, integrando nuevas tecnologías para optimizar nuestros procesos y mejorar la experiencia del cliente. Nos visualizamos como una empresa que no solo suministra productos de papelería, sino que también fomenta el uso responsable de los recursos y promueve soluciones ecológicas para contribuir a un futuro más sostenible.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="politica-calidad">
              <div>
                <div class="col-3">
                  <h2><b>Políticas</b></h2>
                  <span></span>
                </div>
                <div class="col-4">
                  <div class="texto-politica-calidad">
                    <p>
                      <b>1. Disponibilidad y Atención al Cliente</b>
                      <br>Ofrecemos atención y servicio las 24 horas del día, los 7 días de la semana.
                      <br>Nuestro equipo de atención al cliente está disponible para resolver cualquier inquietud o solicitud de manera rápida y eficiente.
                    </p>
                    <p>
                      <b>2. Calidad y Sostenibilidad</b>
                      <br>Nos aseguramos de que todos nuestros productos cumplan con estándares de calidad y sean duraderos.
                      <br>Priorizamos artículos ecológicos y amigables con el medio ambiente en nuestro catálogo
                    </p>
                    <p>
                      <b>3. Envíos y Cobertura</b>
                      <br>Realizamos entregas en todo el Valle de Aburrá con tiempos de respuesta optimizados.
                      <br>Contamos con diferentes opciones de envío para garantizar comodidad y eficiencia en la entrega de los pedidos.
                    </p>
                    <p>
                      <b>4. Garantías y Devoluciones</b>
                      <br>Garantizamos la satisfacción de nuestros clientes, ofreciendo cambios o devoluciones en caso de productos defectuosos o errores en el pedido.
                      <br>El cliente deberá realizar su solicitud dentro de un plazo de 3 días hábiles después de recibir el producto.
                    </p>
                    <p>
                      <b>5. Métodos de Pago</b>
                      <br>Aceptamos pagos en efectivo, transferencias bancarias y diversas plataformas digitales para mayor comodidad.
                      <br>Todas las transacciones son seguras y cumplen con los estándares de protección de datos.
                    </p>
                    <p>
                      <b>Compromiso con el Cliente</b>
                      <br>Nos esforzamos por ofrecer un servicio confiable, rápido y de calidad.
                      <br>Escuchamos a nuestros clientes y trabajamos constantemente en la mejora de nuestros procesos y productos.
                    </p>
                  </div>
                </div>
                <div class="col-5">
                  <div class="img-pol-calidad">
                    <br>
                    <p><img class="alignnone wp-image-7615 size-full" src="assets/img/favicon.png" alt="" width="100" height="100">  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="tab-content">
          <div class="tab-pane" id="schedule-1">
            <div class="card card-plain">
                <div class="card-content">
                  <div class="col-3">
                    <h2><b>Contactanos</b></h2>    
                    <span></span>   
                  </div>
                  <div class="col-8">
                    <div>
                      <center>
                      <img  style="width: 10%; margin-left: 5px" src="assets/img/PyP-logo.png">
                        <p>
                          <b>Correo Electronico: atencion.pyp@plumasypapel.com</b>
                          <br>Linea de atención: 0180056787
                          <br>Whatsapp: 3146437351
                        </p>
                    </center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div> -->

        <div class="tab-pane" id="schedule-1">
          <div class="card card-plain2">
            <div class="card-content">
            <center>
                <img  style="width: 15%; margin-left: 5px" src="assets/img/Contactos_PYP.png">
                <p>
                      <b>Correo Electronico: atencion.pyp@plumasypapel.com</b>
                      <br>Linea de atención: 0180056787
                      <br>Whatsapp: 3146437351
                    </p>
            </center>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5035892721726!2d-75.58551318474926!3d6.197092628589801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4682446b6fa345%3A0x4b8abeddfff91c5d!2sLaumayer%20Colombiana%20Comercializadora%20S.A.!5e0!3m2!1ses!2sco!4v1623276906760!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-10 col-lg-6">
    <!--<div class="subscribe mb-5">
     <form action="" class="subscribe-form" method="POST">
      @csrf
      <div class="form-group d-flex">
        <input type="email" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="Ingresa un email válido"
        class="form-control rounded-left" name="email" placeholder="Ingrese su correo eléctronico">

        <input type="submit" value="Suscribirse" class="form-control submit px-3">
      </div>
    </form>
  </div>-->
</div>
</div>



<div class="row mt-5">
  <div class="col-md-6 col-lg-8">

    <p class="copyright">
      Copyright
      &copy;
      <a href="">Plumas y Papel</a>
      <script>
        document.write(new Date().getFullYear())
      </script>
    </p>

  </div>
  <div class="col-md-6 col-lg-4 text-md-right">
   <p class="mb-0 list-unstyled">
    <a class="mr-md-3" style="color: white"   target="_blank" href="">Términos y condiciones</a>
  </p>
</div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/landing/js/jquery.min.js"></script>
<script src="assets/landing/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/landing/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/landing/js/jquery.easing.1.3.js"></script>
<script src="assets/landing/js/jquery.waypoints.min.js"></script>
<script src="assets/landing/js/jquery.stellar.min.js"></script>
<script src="assets/landing/js/jquery.animateNumber.min.js"></script>
<script src="assets/landing/js/bootstrap-datepicker.js"></script>
<script src="assets/landing/js/jquery.timepicker.min.js"></script>
<script src="assets/landing/js/owl.carousel.min.js"></script>
<script src="assets/landing/js/jquery.magnific-popup.min.js"></script>
<script src="assets/landing/js/scrollax.min.js"></script>
<script src="assets/landing/js/main.js"></script>

<!--  DataTables.net Plugin    -->
<script src="assets/js/jquery.datatables.js"></script>

<script src="assets/js/material.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>


<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
  $().ready(function() {
    demo.checkFullPageBackgroundImage();

    setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
      $('.card').removeClass('card-hidden');
    }, 700)
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
        ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }

    });


    var table = $('#datatables').DataTable();

        // Edit record
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');

      var data = table.row($tr).data();
      alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

        // Delete a record
    table.on('click', '.remove', function(e) {
      $tr = $(this).closest('tr');
      table.row($tr).remove().draw();
      e.preventDefault();
    });

        //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });

    $('.card .material-datatables label').addClass('form-group');
  });
</script>




</body>
</html>