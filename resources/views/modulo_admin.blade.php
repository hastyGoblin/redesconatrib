<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang=en-US>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="initial-scale=1.0">

    <title>Red &#8211; Cecofam</title>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Droid+Serif%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>

</head>

<body data-rsssl=1 class="home page-template-default page page-id-3304 _masterslider _msp_version_3.2.7">
    <div class="body-wrapper  float-menu" data-home=index.html>
        <header class="gdlr-header-wrapper">
            <div class="dlr-header-inner">
                <div class="gdlr-header-container container">
                    <div class="gdlr-logo">
                        <a href="index.html"> <img src="administrador/red/images/logo_red_1.png" alt=""> </a>
                        <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                            <button class="dl-trigger"> Men&uacute;</button>
                            <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item">
                                    <a href="#inicio" aria-current="page">Inicio</a>
                                </li>
                                <!--<li class="menu-item">
                                    <a href="#historia">Objetivo</a>
                                </li>-->
                               <!-- <li class="menu-item">
                                    <a href="#programa">Programa</a>
                                </li>-->
                             <!--   <li class="menu-item menu-item-has-children">
                                    <a href="#ponentescdmx">Ponentes</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="gdlr-navigation-wrapper">
                        <nav class="gdlr-navigation" id="gdlr-main-navigation role=navigation">
                            <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                               <!-- <li class="menu-item menu-item-home">
                                    <a href="#inicio" aria-current="page">Inicio</a>
                                </li>-->
                                <!--<li class="menu-item">
                                    <a href="#historia">Historia</a>
                                </li>-->

                                
                                <li class="menu-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
        <div id="gdlr-header-substitute"></div>
        <div class="content-wrapper">
            <div class="gdlr-content">
                <div class="with-sidebar-wrapper gdlr-type-no-sidebar">
                    <section id="inicio">
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url('administrador/red/upload/centros_convivencia.png'); padding-top: 100px; padding-bottom: 70px; ">
                            <div class="container">
                                <div class="gdlr-title-item" style="margin-bottom: 40px;">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                        <div class="gdlr-item-title-head">
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">{{$red[0]->red}}</h4>
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">SUPERVISADA Y AFINES DE LA REPÚBLICA MEXICANA</h4>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
        <div class=content-wrapper>
            <div class=gdlr-content>
                <div class="with-sidebar-wrapper gdlr-type-no-sidebar">

                    <section id=content-section-1>
                        <div class="section-container container">
                            <div class=session-item-wrapper style="margin-bottom: 75px;">
                                <div class="gdlr-session-item gdlr-small-session-item gdlr-item">
                                    <div class=gdlr-session-item-head>
                                        <div class="gdlr-session-item-head-info gdlr-active" data-tab=gdlr-tab-1>
                                            <div class=gdlr-session-head-day>Solicitudes</div>
                                            <div class=gdlr-session-head-date>Texto descriptivo </div>
                                        </div>
                                        <div class="gdlr-session-item-head-info " data-tab=gdlr-tab-2>
                                            <div class=gdlr-session-head-day>Aceptadas</div>
                                            <div class=gdlr-session-head-date>Texto descriptivo</div>
                                        </div>
                                        <div class="gdlr-session-item-head-info " data-tab=gdlr-tab-3>
                                            <div class=gdlr-session-head-day>Rechazadas</div>
                                            <div class=gdlr-session-head-date>Texto descriptivo</div>
                                        </div>
                                        <div class="gdlr-session-item-head-info " data-tab=gdlr-tab-4>
                                            <div class=gdlr-session-head-day>Constacias</div>
                                            <div class=gdlr-session-head-date>Texto descriptivo</div>
                                        </div>
                                        <div class=clear></div>
                                    </div>
                                    <div class="gdlr-session-item-tab-content gdlr-tab-1 gdlr-active">
                                        <div class=gdlr-session-item-content-wrapper>
                                            <div class=gdlr-session-item-divider></div>
                                            <div class=gdlr-session-item-content>
                                                <div class=gdlr-session-thumbnail-wrapper>
                                                    <div class=gdlr-speaker-thumbnail>
                                                        <div class=gdlr-speaker-thumbnail-inner>
                                                            <a href=../speaker/laurence-francis/index.html><img src=administrador/red/upload/aceptado.png alt width=150 height=150></a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class=gdlr-session-item-content-inner>
                                                    <h3 class="gdlr-session-item-title"><a href=../session/welcoming-and-introduction/index.html>Acepatdas</a></h3>
                                                    <div class=gdlr-session-item-content-info>
                                                        <div class=gdlr-session-info>
                                                            <div class="session-info session-speaker">
                                                                <div class=session-speaker-inner>

                                                                    <table>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Nombre</th>
                                                                                <th>A.Paterno</th>
                                                                                <th>A.Materno</th>
                                                                                <th>Dependencia</th>
                                                                                <th>Cargo</th>
                                                                                <th>Correo</th>
                                                                            </tr>
                                                                            
                                                                        </thead>
                                                                    </table>

                                                                    @foreach($registradosRed as $registrados)
                                                                        <div class=session-speaker-list>

                                                                            <div class=session-speaker-list-item>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>{{ $registrados->name}}</td>
                                                                                        <td>{{ $registrados->apellido_paterno }}</td>
                                                                                        <td>{{ $registrados->apellido_materno }}</td> 
                                                                                        <td>{{ $registrados->dependencia }}</td>
                                                                                        <td>{{ $registrados->cargo }}</td>
                                                                                        <td>{{ $registrados->email }}</td>
                                                                                    </tr> 
                                                                                </tbody>
    																		<input style="margin: 30px 20px;" class="newsletter-submit gdlr-button with-border" type=submit value=Aceptar>
    																		 </div>  
    																	</div>
                                                                    @endforeach
                                                                </div>
															
                                                            </div>
                                                            <div class=clear></div>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
    							            <div class=container>
                                    			 <div class="gdlr-subscribe-item gdlr-item"></div>
                                        		 <div class=clear></div>
                                  		    </div>
    									   <div class=clear></div>
    						    </div>	 
                            </div>
                                            <div class=clear></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
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


    <script src='administrador/red/js/jquery/jquery.js'></script>
    <script src='administrador/red/js/jquery/jquery-migrate.min.js'></script>
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
    <script src='administrador/red/js/plugins.min.js'></script>



</body>
</html>