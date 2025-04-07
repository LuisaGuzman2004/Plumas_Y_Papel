<!doctype html>
    <html lang="en">


    <!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="{{asset('assets/img/PyP-logo.png')}}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        @if (auth()->user()->id == 1)
        <title> Plumas y Papel | Administrador</title>
        @else
        <title> Plumas y Papel | Cliente</title>
        @endif
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Canonical SEO -->
        <link rel="canonical" href="//www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="Plumas y Papel.">
        <meta name="description" content="Plumas y Papel.">
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Plumas y Papel.">
        <meta itemprop="description" content="Plumas y Papel.">
        <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="Plumas y Papel." />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="Plumas y Papel" />
        <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
        <meta property="og:description" content="Plumas y Papel." />
        <meta property="og:site_name" content="Creative Tim" />
        <!-- Bootstrap core CSS     -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <!--  Material Dashboard CSS    -->
        <link  href="{{ asset('assets/css/material-dashboard.css') }}"  rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.min') }}">
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/demo-economico.css') }}" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/google-roboto-300-700.css') }}" rel="stylesheet" />

        <!--ESTILO DE BOTON TOGGLE-->
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

        <!-- ESTILOS PERZONALIZADOS -->
         <link rel="stylesheet" href="{{asset('assets\landing\css\custom.css')}}">

         <!-- ESTILOS DEL CARRUSEL-->
        <link rel="stylesheet" href="{{ asset('assets/landing/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/landing/css/owl.carousel-cartas.min.css') }}">
        <!-- FIN ESTILOS CARRUSEL-->

    </head>

    <body class="Hola">
        <div class="wrapper">
            <div class="sidebar" data-active-color="blue" data-background-color="black" data-image="{{ asset('assets/img/sidebar-pyp.jpg') }}">

                <div class="logo">
                    <a href="{{ route('home') }}" class="simple-text">
                        @if (auth()->user()->id == 1)
                        Administrador
                        @else
                        Cliente
                        @endif
                    </a>
                </div>
                <div class="logo logo-mini">
                    <a href="{{ route('home') }}" class="simple-text">
                        PyP
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <img class="img"  src="{{asset('assets/img/favicon.png')}}" />
                            
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                             {{ auth()->user()->name }}
                             <b class="caret"></b>
                         </a>
                         <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="">Perfil</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                @if (auth()->user()->id == 1)
                <li class="nav-link {{ request()->is('')? 'active' : '' }}">
                    <a href="{{route('productos.index')}}">
                        <i style="color: #f39200" class="material-icons">star</i>
                        <p>Administrador<b> P y P</b></p>
                    </a>
                </li>
                @endif
                <li class="nav-link {{ request()->is('home')? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="material-icons">home</i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li class="nav-link {{ request()->is('Tienda/index')? 'active' : '' }}">
                    <a data-toggle="collapse" href="#Inicio">
                        <i class="material-icons">store</i>
                        <p>Catalogo
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="nav-link {{ request()->is('Tienda/index','Tienda/carrito','Tienda/show/*')? 'collapse in' : 'collapse' }}" id="Inicio">
                        <ul class="nav">
                        <li class="nav-link {{ request()->is('Tienda/index','Tienda/carrito','Tienda/show/*')? 'active' : '' }}">
                            <a href="{{ route('tienda.index')}}">Tienda</a>
                        </li>
                        <li class="nav-link {{ request()->is('')? 'active' : '' }}">
                            <a href="">Pedidos</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-link {{ request()->is('')? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="material-icons">contacts</i>
                        <p>Contanctanos <b>P y P</b></p>
                    </a>
                </li>
        </ul>
    </div>
</div>
<div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                    <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons visible-on-sidebar-mini">view_list</i>
                </button>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    @if (auth()->user()->id == 128)
                    Plumas y Papel | <b>Administrador</b>
                    @else
                    Plumas y Papel | <b>Cliente</b>
                    @endif
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">dashboard</i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">notifications</i>
                            <span class="notification">3</span>
                            <p class="hidden-lg hidden-md">
                                Notifications
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://www.bbc.com/mundo/noticias-america-latina-59631226"target="_blank">Adios al "El Rey"</a>
                            </li>
                        </ul>
                    </li>
                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
                   <!-- <form class="navbar-form navbar-right" role="search">
                        <div class="form-group form-search is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                -->
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">

            <!-- --------------------------[INICIO DE CONTENIDO]-------------------------- -->
            
            @yield('home')
            @yield('content')
            
            <!-- --------------------------[FIN CONTENIDO]-------------------------- -->

        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
                <!--
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
            -->
            <p class="copyright pull-right">
                Copyright
                &copy;
                <a href="https://Plumas y Papel.com/">Plumas y Papel</a>
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </p>
        </div>
    </footer>
</div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Configuración</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-purple" data-color="purple"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-rose active" data-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Color de menu</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="text-center">
                        <span class="badge filter badge-white" data-color="white"></span>
                        <span class="badge filter badge-black active" data-color="black"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Minimizar menu</p>
                    <div class="togglebutton switch-sidebar-mini">
                        <label>
                            <input type="checkbox" unchecked="">
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Imgen de fondo</p>
                    <div class="togglebutton switch-sidebar-image">
                        <label>
                            <input type="checkbox" checked="">
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Fondos</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/img/sidebar-1.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/img/sidebar-2.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/img/sidebar-3.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/img/sidebar-4.jpg') }}" alt="" />
                </a>
            </li>
            <li class="button-container">
                <div class="">
                    <a href="" target="_blank" class="btn btn-rose btn-block">Plumas y Papel</a>
                </div>
                <div class="">
                    <a href="http://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">Nuevo</a>
                </div>
            </li>
            <li class="header-title">Generando valor cada día</li>
            <div>
                <a href=""  target="_blank">
                    <button id="linkedin" class="btn btn-social-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i> &middot; 2021</button>
                </a>
                <a href="https://www.youtube.com/channel/UCMH--3BJDj5uDQEIRZha1iA"  target="_blank">
                    <button id="youtube" class="btn btn-social-icon btn-youtube btn-round"><i class="fa fa-youtube"></i> &middot; 2021</button>
                </a>
            </div>

        </ul>
    </div>
</div>

<div class="fixed-plugin2">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-usd fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Indicadores Economicos</li>
            <div class="module">    
                <div class="mod-wrapper clearfix">
                    <div class="mod-content clearfix">  
                        <div class="mod-inner clearfix">
                            <div class="bannergroup">

                                <div class="banneritem">
                                    <!-- DolarWeb IndMax Start --><div id="IndicadoresMax">
                                        <h2><a href="https://dolar.wilkinsonpc.com.co/">Dolar Hoy Colombia</a></h2>
                                    </div>
                                    <script type="text/javascript" src="https://dolar.wilkinsonpc.com.co/widgets/gratis/indicadores-economicos-max.js?ancho=260&alto=265&fondo=transparent&fsize=11&font-family=Helvetica&fcolor=black"></script><!-- DolarWeb IndMax End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </ul>
    </div>
</div>


</body>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<!--  Charts Plugin -->
<script src="{{ asset('assets/js/chartist.min.js') }}"></script>
<!--  Plugin for the Wizard -->
<script src="{{ asset('assets/js/jquery.bootstrap-wizard.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>
<!--   Sharrre Library    -->
<script src="{{ asset('assets/js/jquery.sharrre.js') }}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{ asset('assets/js/bootstrap-datetimepicker.js') }}"></script>
<!-- Vector Map plugin -->
<script src="{{ asset('assets/js/jquery-jvectormap.js') }}"></script>
<!-- Sliders Plugin -->
<script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="{{ asset('assets/js/jquery.select-bootstrap.js') }}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{ asset('assets/js/jquery.datatables.js') }}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('assets/js/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
<!-- TagsInput Plugin -->
<script src="{{ asset('assets/js/jquery.tagsinput.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('assets/js/material-dashboard.js') }}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>
<!-- SCRIPT BOTON TOGGLE-->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



<!-- SRCRIPS DE SCROLL-->
<script src="{{ asset('assets/landing/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/main.js') }}"></script>
<!-- FIN SRCRIPS DE SCROLL--> 


<!--GLOBAl-SCRIPTS-->
@yield('code-scripts')

@yield('js')
<script type="text/javascript">
    $().ready(function() {
        demo.initMaterialWizard();
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
                searchPlaceholder: "Buscar",
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
@if (Session::has('mensaje'))
<script class="text/javascript">
  var alertTimeout = setTimeout(function() {
    swal.close();
  }, 3000); // 5000 milisegundos = 5 segundos

  swal({
    title: 'ATENCIÓN',
    text: "{{Session::get('mensaje')}}",
    type: 'warning',
    showCancelButton: false,
    showConfirmButton: true,
    confirmButtonColor: '#5cb85c',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Aceptar'
}).then(function() {
    clearTimeout(alertTimeout); // Limpiar el temporizador si el usuario cierra la alerta manualmente
});
</script>
<style>
  div.dataTables_wrapper div.dataTables_filter input {
    display: inline-block;
    background-color: #f9f9f9;
    width: 200px;
    color: #5cb85c;
}
</style>
@endif

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->
</html>