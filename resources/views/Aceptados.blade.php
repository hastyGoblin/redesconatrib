<!DOCTYPE html>
<html lang=en-US>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content="initial-scale=1.0">

    <title>Coordinador Red</title>

    <link rel="stylesheet" href="administrador/red/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/superfish/css/superfish.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/dl-menu/component.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/font-awesome-new/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/flexslider/flexslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/css/style-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/css/style-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/masterslider/public/assets/css/masterslider.main.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/css/master-custom.css" type="text/css" media="all">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">

    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Droid+Serif%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    {{-- Estilos de la tabla --}}
    <link rel="stylesheet" href="{{asset('css/tableConteiner.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
  
</head>

<body data-rsssl=1 class="home page-template-default page page-id-3304 _masterslider _msp_version_3.2.7">
    <!-- Encabezado -->
    <div class="body-wrapper  float-menu" data-home=index.html>
        <header class="gdlr-header-wrapper">
            <div class="dlr-header-inner">
                <div class="gdlr-header-container container">
                    <div class="gdlr-logo">
                        <a href="/home"> <img src="administrador/red/images/logo_red_1.png" alt=""> </a>
                        <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                            <button class="dl-trigger"> Men&uacute;</button>
                            <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item">
                                    <a href="#inicio" aria-current="page">Inicio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gdlr-navigation-wrapper">
                        <nav class="gdlr-navigation" id="gdlr-main-navigation role=navigation">
                            <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                                <li class="menu-item">
                                    <a class="dropdown-item">{{Auth::user()->name}}</a>
                                </li>
                                <li class="menu-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </header>
    </div>

    <!-- Contenido -->
    <div class="content-wrapper">
        <div class="gdlr-content">
            <div class="with-sidebar-wrapper gdlr-type-no-sidebar">
                <section id="inicio">
                    <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url('administrador/red/upload/centros_convivencia.png'); padding-top: 100px; padding-bottom: 70px; ">
                        <div class="container">
                            <div class="gdlr-title-item" style="margin-bottom: 40px;">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-center">
                                    <div class="gdlr-item-title-head">
                                        <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">{{$red[0]->red}}</h4>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
                
                <div class=content-wrapper>
                    <div class=gdlr-content>
                        <div class="with-sidebar-wrapper gdlr-type-no-sidebar">
                            <section id=content-section-1>
                                <div class="section-container container">
                                    <div class=session-item-wrapper style="margin-bottom: 75px;">
                                        <div class="gdlr-session-item gdlr-small-session-item gdlr-item">
                                            <!-- Título -->
                                            <div class="gdlr-session-item-head">
                                                <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-2" style="user-select: none; cursor: pointer;">
                                                    <h3 class="gdlr-session-head-day" style="font-size: 20px; font-weight: bold; text-transform: uppercase;">
                                                        USUARIOS REGISTRADOS
                                                    </h3>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                
                <!-- Botón General -->
                <div class="text-center mb-3" hidden>
                    <form method="post" action="{{ route('habilitaTodasConstancias') }}">
                        @csrf
                        <button type="submit" class="btn btn-success">Habilitar Constancias para Todos</button>
                    </form>
                </div>

                <!-- Tabla -->
                <div class="table-container">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Numero de Registro</th>
                                <th>Nombre Completo</th>
                                <th>Estado</th>
                                <th>Dependencia</th>
                                <th>Cargo</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Estatus Constancia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registradosRed as $registrados)
                            <tr>
                                <td data-label="Numero de Registro">{{ $registrados->id }}</td>
                                <td data-label="Nombre">{{ $registrados->name.' '.$registrados->apellido_paterno.' '.$registrados->apellido_materno }}</td>
                                <td data-label="Estado">{{ $registrados->entidad }}</td>
                                <td data-label="Dependencia">{{ $registrados->dependencia }}</td>
                                <td data-label="Cargo">{{ $registrados->cargo }}</td>
                                <td data-label="Teléfono">{{ $registrados->numero_celular }}</td>
                                <td data-label="Correo">{{ $registrados->email }}</td>
                                <td data-label="Fecha">{{ $registrados->updated_at->format('d-m-Y') }}</td>
                                <td data-label="Hora">{{ $registrados->updated_at->isoFormat('H:mm:ss A') }}</td>
                                <td data-label="Acciones">
                                    @if ($registrados->estatus_const == 1)
                                        <span class="label label-success">Constancia habilitada</span>
                                    @else
                                        <span class="label label-warning">Pendiente</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pie de página -->
                <footer class=footer-wrapper>
                    <div class=copyright-wrapper>
                        <div class="copyright-container container">
                            <div class=copyright-left> © Copyright CONATRIB 2022</div>
                            <div class=copyright-right> <a href="https://conatrib.org.mx/">P&aacute;gina web</a> | <a href="https://www.youtube.com/channel/UCjy09Wgg2LXoqTAtLXLpeQQ">Youtube</a> | <a href="https://m.facebook.com/CONATRIBoficial/">Facebook</a> | <a href="https://twitter.com/ConatribMx">Twitter</a></div>
                            <div class=clear></div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    {{-- <script src='administrador/red/js/jquery/jquery.js'></script> --}}
    {{-- <script src='administrador/red/js/jquery/jquery-migrate.min.js'></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src='administrador/red/plugins/superfish/js/superfish.js'></script>
    <script src='administrador/red/js/hoverIntent.min.js'></script>
    <script src='administrador/red/plugins/dl-menu/modernizr.custom.js'></script>
    <script src='administrador/red/plugins/dl-menu/jquery.dlmenu.js'></script>
    <script src='administrador/red/plugins/jquery.easing.js'></script>
    <script src='administrador/red/plugins/fancybox/jquery.fancybox.pack.js'></script>
    <script src='administrador/red/plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
    <script src='administrador/red/plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
    <script src='administrador/red/plugins/flexslider/jquery.flexslider.js'></script>
    <script src='administrador/red/plugins/jquery.isotope.min.js'></script>
    {{-- <script src='administrador/red/js/plugins.min.js'></script> --}}
    {{-- Data Table --}}
    <script>
        $(document).ready(function () {
            let table = new DataTable('#myTable', {
                language: {
                    // url: '//cdn.datatables.net/plug-ins/2.1.8/i18n/es-MX.json',
                    url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/es-MX.json',
                },
                columnDefs: [
                    {
                        targets: 0, // La columna 0
                        render: function (data, type, row, meta) {
                            return meta.row + 1; // Devuelve el número de fila + 1
                        }
                    }
                ]
            });
        });
    </script>
    {{-- Mensaje Habilitar Constancia --}}
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            confirmButtonText: 'Aceptar'
        });
    </script>
    @endif


</body>
</html>