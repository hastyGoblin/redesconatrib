<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

    <title>Red &#8211; NACIONAL DE ESTAD&Iacute;STICAS JUDICIALES</title>

    <link rel="stylesheet" href="rede_3_est_jud/red/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_3_est_jud/red/plugins/superfish/css/superfish.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_3_est_jud/red/plugins/dl-menu/component.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_3_est_jud/red/plugins/font-awesome-new/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_3_est_jud/red/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_3_est_jud/red/plugins/flexslider/flexslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_3_est_jud/red/css/style-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_3_est_jud/red/css/style-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_3_est_jud/red/plugins/masterslider/public/assets/css/masterslider.main.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_3_est_jud/red/css/master-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?" family="Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221" type="text/css" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?" family="Montserrat%3Aregular%2C700&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221" type="text/css" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?" family="Droid+Serif%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221" type="text/css" media="all">

</head>

<body data-rsssl="1" class="home page-template-default page page-id-3304 _masterslider _msp_version_3.2.7">
    <div class="body-wrapper  float-menu" data-home="index.html">
        <header class="gdlr-header-wrapper">
            <div class="dlr-header-inner">
                <div class="gdlr-header-container container">
                    <div class="gdlr-logo">
                        <a href="index.html"> <img src="rede_3_est_jud/red/upload/logo_estadistica_judicial.png" alt=""> </a>
                        <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                            <button class="dl-trigger"> Men&uacute;</button>
                            <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item">
                                    <a href="#inicio" aria-current="page">Inicio</a>
                                </li>
                                <!--<li class="menu-item">
                                    <a href="#historia">Objetivo</a>
                                </li>-->
                                <li class="menu-item">
                                    <a href="#programa">Programa</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#ponentescdmx">Ponentes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gdlr-navigation-wrapper">
                        <nav class="gdlr-navigation" id="gdlr-main-navigation role=navigation">
                            <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                                <li class="menu-item menu-item-home">
                                    <a href="#inicio" aria-current="page">Inicio</a>
                                </li>
                                <!--<li class="menu-item">
                                    <a href="#historia">Objetivo</a>
                                </li>-->
                                <li class="menu-item">
                                    <a href="#programa">Programa</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#ponentescdmx">Ponentes</a>
                                </li>
                                @if (Auth::user()->constancia == 1)
                                <li class="menu-item menu-item-has-children">
                                    <a class="dropdown-item" href="{{ route('descargaConstancia') }}"  target="_blank"
                                       onclick="event.preventDefault();
                                                     document.getElementById('constancia-form').submit();">
                                        {{ __('Constancia') }}
                                    </a>

                                    <form id="constancia-form" action="{{ route('descargaConstancia') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                @endif
                                <li class="menu-item menu-item-has-children">
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
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url('rede_3_est_jud/red/upload/estadisticas_judiciales.png'); padding-top: 100px; padding-bottom: 70px; ">
                            <div class="container">
                                <div class="gdlr-title-item" style="margin-bottom: 40px;">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                        <div class="gdlr-item-title-head">
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">RED NACIONAL DE</h4>
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">ESTAD&Iacute;STICAS JUDICIALES</h4>
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
                  <!--  <section id="historia">
                        <div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 90px; padding-bottom: 60px; ">
                            <div class="container">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-medium">Objetivo de la red</h3>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="gdlr-testimonial-item-wrapper">
                                    <div class="clear"></div>
                                    <div class=" Two columns">
                                        <div class="gdlr-item gdlr-testimonial-item plain-style">
                                            <div class="gdlr-ux gdlr-testimonial-ux">
                                                <div class="testimonial-item">
                                                    <div class="testimonial-content gdlr-skin-content">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo.</p>
                                                    </div>
                                                    <div class="testimonial-info"><span class="testimonial-author gdlr-skin-link-color">Integrantes de la</span><span class="testimonial-position gdlr-skin-info"><span> </span>Red</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section> -->
                    <section id="programa">
                        <div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 90px; padding-bottom: 60px; ">
                            <div class="container">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-medium">Programa de eventos</h3>
                                        
                                    </div>
                                </div>
                            <div class="session-item-wrapper" style="margin-bottom: 75px;">
                                <div class="gdlr-session-item gdlr-tab-session-item gdlr-item">
                                    <div class="gdlr-session-item-head">
                                        <div class="gdlr-session-item-head-info gdlr-active" data-tab="gdlr-tab-1">
                                            <div class="gdlr-session-head-day">D&iacute;a 1</div>
                                            <div class="gdlr-session-head-date">10 Diciembre 2021</div>
                                        </div>
                                       
                                        <div class="clear"></div>
                                    </div>

                                    <!-- inicia dia 1-->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-1 gdlr-active">
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:00 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Magistrado Rafael Guerra &Aacute;lvarez</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Presidente del Poder Judicial de la CDMX y Presidente de la Comisión Nacional de Tribunales Superiores de Justicia de los Estados Unidos Mexicanos (CONATRIB).</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Inauguración</h3>
                                                <div class="gdlr-session-item-excerpt">
                                                    <div class="clear"></div></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://youtu.be/q7U2avizVEI">Ver mensaje</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:15 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user-circle"></i><a>MODERADORA: MTRA. MARÍA JACQUELINE MARTÍNEZ URIARTE </a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Directora General de Gestión Judicial del Consejo de la Judicatura Federal.</a></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Introducción a la sesión</h3>
                                                <div class="gdlr-session-item-excerpt">
                                                    <div class="clear"></div></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ea08c35f3070a9dc23eb50f4f536347e4"><button class="newsletter-submit gdlr-button with-border">Ver panel</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:30 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>MTRO. ESTEBAN MARTÍNEZ MEJÍA</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Titular de la Unidad de Enlace para la Reforma al Sistema de Justicia Laboral, Secretaría del Trabajo y Previsión Social.</a></div>

                                                                <div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-user-circle" aria-hidden="true"></i><a>Mtra. Mónica Rocío Farfán García.</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Ponencia Magistral</h3>
                                                <div class="gdlr-session-item-excerpt">Implementación del Nuevo Modelo de Justicia Laboral.
                                                    <div class="clear"></div></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ea08c35f3070a9dc23eb50f4f536347e4"><button class="newsletter-submit gdlr-button with-border">Ver panel</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:55 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">

                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>MTRO. ADRIAN FRANCO BARRIOS</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Vicepresidente de la Junta de Gobierno del Instituto Nacional de Estadística y Geografía.</a></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Ponencia Magistral</h3>
                                                <div class="gdlr-session-item-excerpt">Actualización de “Información Estadística en Materia de Justicia Laboral: Necesidades de Información y Mapa de Ruta".
                                                    <div class="clear"></div></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ea08c35f3070a9dc23eb50f4f536347e4"><button class="newsletter-submit gdlr-button with-border">Ver panel</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:20 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>LIC. RAMÓN GERARDO GUZMÁN BENAVENTE</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Magistrado Presidente del Tribunal Superior de Justicia del Poder Judicial del Estado de Durango.</a></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Ponencia Magistral</h3>
                                                <div class="gdlr-session-item-excerpt">La experiencia del Poder Judicial del Estado de Durango en la Conformación de Estadística de Justicia Laboral.
                                                    <div class="clear"></div></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ea08c35f3070a9dc23eb50f4f536347e4"><button class="newsletter-submit gdlr-button with-border">Ver panel</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class=gdlr-session-item-content-wrapper>
                                                <div class=gdlr-session-item-divider></div>
                                                <div class=session-break-content>
                                                    <div class=session-break-info><i class="fa fa-clock-o"></i>12:55 hrs.</div>
                                                    <h3 class="gdlr-session-break-title">Receso/Comida</h3></div>
                                                <div class=clear></div>
                                            </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>13:10 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>MTRA. BLANCA LILIA IBARRA CADENA</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Comisionada Presidenta del Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales.</a></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Ponencia Magistral</h3>
                                                <div class="gdlr-session-item-excerpt">Versiones Públicas de Sentencias en los Poderes Judiciales del País, Perspectiva del Órgano Garante Nacional.
                                                    <div class="clear"></div></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                   <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ea08c35f3070a9dc23eb50f4f536347e4"><button class="newsletter-submit gdlr-button with-border">Ver panel</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>13:35 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>DR. JULIO CÉSAR BONILLA GUTIÉRREZ</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Comisionado Presidente del Instituto de Transparencia, Acceso a la Información Pública, Protección de Datos Personales y Rendición de Cuentas de la Ciudad de México.</a></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Ponencia Magistral</h3>
                                                <div class="gdlr-session-item-excerpt">Justicia Abierta.
                                                    <div class="clear"></div></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                   <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ea08c35f3070a9dc23eb50f4f536347e4"><button class="newsletter-submit gdlr-button with-border">Ver panel</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>14:00 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>DR. DANIEL ESPINOSA LICÓN</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Magistrado Presidente del Supremo Tribunal de Justicia del Estado de Jalisco.</a></div>

                                                                <div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-user"></i><a>LIC. VALERIA PARADA SÁNCHEZ</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Coordinadora de Información Pública y Estadística del Poder Judicial de la Ciudad de México.</a></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Ponencia Magistral</h3>
                                                <div class="gdlr-session-item-excerpt">Experiencia de los Poderes Judiciales de Jalisco y Ciudad de México en la Elaboración de Versiones Públicas de Sentencias
                                                    <div class="clear"></div></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                   <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ea08c35f3070a9dc23eb50f4f536347e4"><button class="newsletter-submit gdlr-button with-border">Ver panel</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>14:25 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>DR. RICARDO ALFREDO SODI CUELLAR</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Magistrado Presidente del Poder Judicial del Estado de México.</a></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Ponencia Magistral</h3>
                                                <div class="gdlr-session-item-excerpt">Seguimiento de laImplementación del Marco Conceptual Homologadode la Estadística con Perspectiva de Género y Derechos Humanos de la Materia Penal del Sistema Acusatorio del Fuero Común.
                                                    <div class="clear"></div></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                   <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ea08c35f3070a9dc23eb50f4f536347e4"><button class="newsletter-submit gdlr-button with-border">Ver panel</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class=gdlr-session-item-content-wrapper>
                                                <div class=gdlr-session-item-divider></div>
                                                <div class=session-break-content>
                                                    <div class=session-break-info><i class="fa fa-clock-o"></i>14:50 hrs.</div>
                                                    <h3 class="gdlr-session-break-title">Conclusiones y acuerdos del encuentro</h3></div>
                                                <div class=clear></div>
                                            </div>
    
                                    </div>
                                    <!-- termina dia 1 -->
                                    
                                     

                                </div>
                                <div class=clear></div>
                            </div>
                            <div class=clear></div>
                        </div>
                            </div>
                        </div>
                        
                    </section>
                    <div class="section-container container">
                     <section id="ponentescdmx">
                        
                        <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                    <div class=gdlr-item-title-head>
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-medium">SEMBLANZA DE LOS PONETES</h3>
                                    </div>
                        </div>
                            <div class=clear></div>
                     </section>
                    </div>
				
		<div class="section-container container">
                    <section>
                        
                         <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/valeria.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">LIC. VALERIA PARADA SÁNCHEZ 
														 </h3>
														<div class="gdlr-session-item-excerpt">COORDINADORA DE LA RED NACIONAL DE ESTADÍSTICAS JUDICIALES DE LA CONATRIB  Y COORDINADORA DE INFORMACIÓN PÚBLICA Y ESTADÍSTICA DEL PODER JUDICIAL DE LA CIUDAD DE MÉXICO .
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-16>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    COORDINADORA DE LA RED NACIONAL DE ESTADÍSTICAS JUDICIALES DE LA CONATRIB  Y COORDINADORA DE INFORMACIÓN PÚBLICA Y ESTADÍSTICA DEL PODER JUDICIAL DE LA CIUDAD DE MÉXICO<br>

Licenciada en Derecho por la Universidad Nacional Autónoma de México (UNAM), se ha especializado en Derecho Administrativo y Responsabilidad de Servidores Públicos, así como en Protección de Datos Personales.<br>
En el sector privado fue Coordinadora de Licencias y Permisos de DHL Express (Región México).<br>
En el sector público se ha desempeñado como abogada en la Contraloría General del Gobierno del Distrito Federal (GDF) ; Jefa de Unidad Departamental de Amparos y de lo Contencioso, Directora Jurídica de la Delegación Xochimilco; ha sido también Titular de la Dirección General Jurídica y de Gobierno de la Delegación Xochimilco, y Directora de Servicios al Personal en la Secretaría de Desarrollo Agrario, Territorial y Urbano (SEDATU); ha colaborado en la Coordinación de asesores de la Consejería Jurídica y de Servicios Legales de la Ciudad de México, fungiendo como enlace ante la comisión de Derechos Humanos.<br>
En el Consejo de la Judicatura Federal, se desempeñó como Oficial Administrativo en el Juzgado 12° de Distrito en Materia Administrativa de la Ciudad de México y, en el Consejo de la Judicatura de la Ciudad de México, de abril de 2019 a la fecha, se ha desempeñado como Coordinadora de Información Pública y Estadística del Poder Judicial de la Ciudad de México, teniendo a cargo la representación de la Red Nacional de Estadísticas Judiciales de la Comisión Nacional de Tribunales Superiores de Justicia de los Estados Unidos Mexicanos (CONATRIB).<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-16 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/maria.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRA. MARÍA JACQUELINE MARTÍNEZ URIARTE
														</h3>
														<div class="gdlr-session-item-excerpt">DIRECTORA GENERAL DE GESTIÓN JUDICIAL DEL CONSEJO DE LA JUDICATURA FEDERAL
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-17>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Es licenciada en Ciencias Sociales por el Instituto Tecnológico Autónomo de México (ITAM) y actualmente es titular de la Dirección General de Gestión Judicial del Consejo de la Judicatura Federal.<br>
Cursó el Master Internacional en Sociología Jurídica del Instituto Internacional de Sociología Jurídica de Oñati, España. <br>
En el Poder Judicial Federal se ha desempeñado en diversos cargos por más de 13 años, entre los que destacan Jefa de la Unidad de Relaciones Institucionales (SCJN), Directora General de Derechos Humanos, Equidad de Género y Asuntos Internacionales (CJF) y Directora General de Estadística Judicial (CJF). <br>
Fue investigadora asociada del Centro de Investigación para el Desarrollo, A.C. (CIDAC) y Directora General Adjunta de la Academia Diplomática del Instituto Matías Romero en la Secretaría de Relaciones Exteriores.<br>
En 2015 fue Vocal del Comité Técnico Especializado de Información con Perspectiva de Género (CTEIPG) del Sistema Nacional de Información Estadística y Geográfica (SNIEG) y en 2001 Consultora de la Agencia de los Estados Unidos para el Desarrollo Internacional (US-AID) para el análisis del proceso de democratización en México.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-17 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/esteban.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. ESTEBAN MARTÍNEZ MEJÍA </h3>
														<div class="gdlr-session-item-excerpt"> TITULAR DE LA UNIDAD DE ENLACE PARA LA REFORMAAL SISTEMA DE JUSTICIA LABORAL, SECRETARÍA DEL TRABAJO Y PREVISIÓN SOCIAL.
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-18>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciado en Derecho por La Universidad Nacional Autónoma de México (UNAM) y Maestro en Derecho Internacional por La London School of Economics and Political Science (LSE). Cuenta con una especialidad en Derecho Transnacional por el Center for Transnational Legal Studies, de La Universidad de Georgetown.<br>
En el sector público, ha sido Titular de la Unidad de Asuntos Internacionales de la Secretaría del Trabajo y Previsión Social; Coordinador de Asesores del Jefe Delegacional de Azcapotzalco; Asesor parlamentario en la Cámara de Diputados, el Senado de La República y La Asamblea Constituyente de La Ciudad de México.<br>
Actualmente se desempeña como Titular de La Unidad de Enlace para la Reforma al Sistema de Justicia Laboral en la Secretaría del Trabajo y Previsión Social y funge como Secretario Técnico del Consejo de Coordinación para La Implementación de la Reforma al Sistema de Justicia Laboral.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-18 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/jesus.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">LIC. JESÚS CONTRERAS MARTÍNEZ   </h3>
														<div class="gdlr-session-item-excerpt">DIRECTOR GENERAL DE NORMATIVIDAD Y SEGUIMIENTO A ENTIDADES FEDERATIVAS, SECRETARÍA DEL TRABAJO Y PREVISIÓN SOCIAL.
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-19>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Abogado por la Escuela Libre de Derecho.<br>
En el sector privado fue Director Editorial de la revista El Mundo del Abogado y coordinador editorial de la revista Foro Jurídico. <br>En el sector público se ha desempeñado como Jefe de Departamento en la Fiscalía Especializada para la Atención de Delitos Electorales de la Procuraduría General de la República (FEPADE); Coordinador de Proyecto, en el entonces Fondo Nacional de Apoyo a Empresas en Solidaridad (FONAES); Subdirector de área y Director de carrera judicial e investigación en el Instituto de Estudios Judiciales del Tribunal Superior de Justicia de la Ciudad de México (CDMX); Titular de la Unidad de Supervisión de Medidas Cautelares y Suspensión Condicional del Proceso de la CDMX.<br>
En la Secretaría del Trabajo y Previsión Social se ha desempeñado como Director General Adjunto de Evaluación, Estadística y Vinculación, así como Director General de Normatividad y Difusión en la Unidad de Enlace para la Reforma al Sistema de Justicia Laboral. Actualmente es Director General de Normatividad y Seguimiento a Entidades Federativas<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-19 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=clear></div>
                                </div>
                            </div>
						<div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/oscar.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DR. OSCAR JAIMES BELLO
														</h3>
														<div class="gdlr-session-item-excerpt">DIRECTOR GENERAL DE ESTADÍSTICAS DE GOBIERNO, SEGURIDAD PÚBLICA Y JUSTICIA DEL INEGI
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-20>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    DIRECTOR GENERAL DE ESTADÍSTICAS DE GOBIERNO, SEGURIDAD PÚBLICA Y JUSTICIA DEL INEGI<br>
Es Licenciado en Administración por la Universidad Nacional Autónoma de México, Maestro en Políticas y Gestión del Desarrollo por la Universidad de Mánchester, Inglaterra, y Doctor en Ciencias Sociales y Políticas por la Universidad Iberoamericana (México).<br>
Ha participado en cursos sobre gestión pública y transparencia impartidos por el Centro de Investigación y Docencia Económicas (CIDE); así como de control de la corrupción en la Universidad Central Europea, con sede en Budapest, Hungría.<br>
En el sector público se ha desempeñado como Director de Estudios de Transparencia en la Secretaría de la Función Pública; Director de Coordinación Sectorial en la Comisión Intersecretarial para la Transparencia y el Combate a la Corrupción; asesor en los Programas de Extensión de Cobertura y Subdirector de Planeación y Análisis de la Secretaría de Salud.
Desde 2009 labora en el Instituto Nacional de Estadística y Geografía (INEGI) y actualmente funge como Director General de Estadísticas de Gobierno, Seguridad Pública y Justicia, donde coordina el diseño, captación, procesamiento y generación de información estadística, a través de censos y encuestas de gobierno, así como el aprovechamiento de registros administrativos, en temas de gobernanza, seguridad pública, violencia, justicia y derechos humanos.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-20 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/sergio.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">LIC. SERGIO RICARDO LÓPEZ RAMOS
														</h3>
														<div class="gdlr-session-item-excerpt">JUEZ DEL TRIBUNAL LABORAL DEL PRIMER DISTRITO JUDICIAL DEL PODER JUDICIAL DEL ESTADO DE DURANGO
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-21>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Es Licenciado en derecho, titulado por la Universidad Juárez del Estado de Durango en el año de 1995. Desde entonces fue asociado del Despacho Jurídico de José María Alcantar Franco. Ha sido Gerente Jurídico de la empresa General Hipotecaria y ha ocupado diversos cargos públicos como Actuario Judicial de los Juzgados de Distrito del Poder Judicial de la Federal, Abogado del Servicio de Administración Tributaria y Director de divulgación de los Derechos Humanos del Estado de Durango. <br>
Se ha desempeñado como catedrático de la Universidad España de Durango y la Universidad Autónoma de Durango. Asimismo, ha sido docente del Colegio de bachilleres del Estado de Durango desde hace 27 años.<br>
Prestó sus servicios por diecinueve años en la Junta Especial Número 27 de la Federal de Conciliación y Arbitraje, ocupando diversos cargos como actuario Judicial, secretario de acuerdos, auxiliar y encargado de la Presidencia por ministerio de Ley.<br>
Es especialista en derecho social, como lo es derecho del trabajo y de la seguridad social por la Universidad Juárez del Estado de Durango y cuenta con estudios de maestría por la misma universidad.<br>
Se ha capacitado en diferentes foros en derecho del trabajo, ha participado como capacitador y ponente.<br>
Se le otorgó el grado de excelencia por el Presidente de la Junta Federal de Conciliación y Arbitraje y diversos reconocimientos como académico por el Gobierno del Estado de Durango. 
Gestor en materia de derechos humanos, para la mejora de condiciones de acceso a los inmuebles públicos para personas con capacidades diferentes, como lo es la instalación de un elevador en Palacio Federal en Durango y diversas actividades.  <br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-21 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/josefina.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DRA. JOSEFINA ROMÁN VERGARA 
														</h3>
														<div class="gdlr-session-item-excerpt">INSTITUTO NACIONAL DE TRANSPARENCIA, ACCESO A LA INFORMACIÓN Y PROTECCIÓN DE DATOS PERSONALES
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-22>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Josefina Román Vergara, es Licenciada en Derecho por la Universidad Autónoma del Estado de México, Maestra en Derecho Corporativo por la Universidad Anáhuac y Doctora en Derecho por el Centro de Estudios de Posgrado en Derecho.<br>
Con una carrera de más de 30 años en el servicio público, ha ocupado diversos cargos de dirección en distintas áreas del Gobierno del Estado de México y a nivel federal en el Servicio de Administración Tributaria.<br>
Fue nombrada Comisionada del Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios, donde además fue elegida Comisionada Presidenta.<br>
Fue electa la Primera Coordinadora de Organismos Garantes de las Entidades Federativas del Sistema Nacional de Transparencia, Acceso a la Información Pública y Protección de Datos Personales.<br>
Ocupó el cargo como la Primera Secretaria Técnica de la Secretaría Ejecutiva del Sistema Anticorrupción del Estado de México y Municipios.<br>
Ha sido docente por muchos años en distintas instituciones tanto públicas como privadas y actualmente continúa como catedrática en la Facultad de Derecho de la Universidad Nacional Autónoma de México.<br>
Recibió por parte del Senado de la República el nombramiento como Comisionada del Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales, para el periodo 2019 – 2026; donde encabeza las Comisiones Permanentes de Normatividad de Datos Personales y Gestión Documental y Archivos.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-22 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/julio.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. JULIO CÉSAR BONILLA GUTIÉRREZ 
														</h3>
														<div class="gdlr-session-item-excerpt">COMISIONADO PRESIDENTE DEL INSTITUTO DE TRANSPARENCIA, ACCESO A LA INFORMACIÓN PÚBLICA, PROTECCIÓN DE DATOS PERSONALES Y RENDICIÓN DE CUENTAS DE LA CIUDAD DE MÉXICO
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-23>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Fue Coordinador de los Organismos Garantes de las Entidades Federativas del Sistema Nacional de Transparencia  durante el periodo 2020-2021.<br>
Maestro en Derecho y Especialista en Derecho Electoral con mención honorífica por la División de Estudios de Posgrado de la Facultad de Derecho de la UNAM, donde obtuvo la Medalla al Mérito Universitario Alfonso Caso 2015, distinción que anualmente se otorga a la persona egresada con mejor desempeño de la generación.<br>
Obtuvo el título de Máster en Protección Constitucional y en Sistema Interamericano de los Derechos Fundamentales “Dr. Jorge Carpizo” 2015, por el Instituto de Investigaciones Jurídicas de la UNAM y del Instituto de Derecho Parlamentario de la Universidad Complutense de Madrid.<br>
Ha realizado diversos cursos, entre los que destaca el curso de “Protección de datos personales” en la Facultad de Derecho de la Universidad Complutense de Madrid. 
Es Profesor en la División de Estudios de Posgrado de la Facultad de Derecho de la U.N.A.M; impartiendo catedra en la Especialización en Derecho Constitucional y Especialización Derecho a la Información.<br>
Obtuvo el reconocimiento y es recipiendario de la cátedra extraordinaria “Andrés Serra Rojas”, durante el periodo comprendido de julio de 2021 a junio de 2022 aprobado por el Consejo Técnico de la Facultad de Derecho de la UNAM.<br>
Ha participado en varias actividades académicas en la Escuela Judicial Electoral (EJE) del Tribunal Electoral del Poder Judicial de la Federación.<br>
Ha sido sínodo en exámenes profesionales de licenciatura y Posgrado de la UNAM.<br>
Ha participado en diferentes foros, seminarios y diplomados en temas de Transparencia, Acceso a la Información Pública y Rendición de Cuentas, Sistemas Anticorrupción, Derecho Electoral, Democracia, elecciones, Derechos Humanos.<br>
Ha publicado en diversos medios de comunicación dentro de los que destacan los periódicos “El Universal”, “Reforma”. revistas “Voz y Voto”, “Zócalo” “La Silla Rota” “Foro Jurídico”, “Revista Fuetes. Bolivia”, “Revista El Tribunal Superior de Justicia de la Ciudad de México”, “Gaceta UNAM”, y ha participado como coordinador y articulista en el libro “Monitor democrático 2019: Causas y efectos jurídicos del viraje electoral en México (2018) vs el pluripartidismo en México”; además es Autor de “Jueces y política” libro publicado en la Editorial Tirant lo Blanc.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-23 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=clear></div>
                                </div>
                            </div>
						
						<div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/daniel.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MAGISTRADO DANIEL ESPINOSA LICÓN   </h3>
														<div class="gdlr-session-item-excerpt">PRESIDENTE DEL SUPREMO TRIBUNAL DE JUSTICIA Y DEL CONSEJO DE LA JUDICATURA DEL ESTADO DE JALISCO.
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-24>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciado en Derecho por la Universidad de Guadalajara, comenzó su carrera jurisdiccional en 1991. Desde entonces, ha ocupado diversos cargos: Auxiliar, Secretario, Secretario Relator, Juez y Magistrado, nombramiento con el que fue distinguido en octubre de 2018, momento en el cual se incorporó a la Primera Sala en Materia Penal del Supremo Tribunal del Estado de Jalisco.<br>

A la par de su trayectoria laboral, enriqueció su formación académica con el estudio de dos maestrías en Administración de Justicia; una impartida en la Universidad de Guadalajara y otra en la Universidad de San Pablo CEU; institución donde también obtuvo el grado de Doctor en Ciencias Actuales de Ciencia Jurídica.<br>

Aunado a ello y a la obtención de varios posgrados en Derecho y Derecho Penal, ha dedicado gran parte de su tiempo a compartir sus conocimientos, a través de la impartición de cursos, diplomados, capacitaciones, conferencias, talleres, coloquios, seminarios y ponencias; lo que ha dado como resultado que goce de reconocimiento nacional e internacional, entre sus pares y quienes se encuentran en proceso de formación.<br>

De igual forma, ha publicado cuatro libros y varios artículos en revistas sobre el Sistema Acusatorio y el Código Nacional de Procedimientos Penales, los cuales han contribuido en la consolidación del Sistema de Justicia Penal Adversarial en Jalisco.<br>

El 15 de diciembre de 2020 fue electo Presidente del Supremo Tribunal de Justicia y del Consejo de la Judicatura del Estado, cargo que asumió a partir del 1º de enero de 2021.<br>

Actualmente tiene a su cargo la más alta representación de uno de los tres poderes públicos del Estado de Jalisco, el Poder Judicial.
<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-24 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/adriana.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">LIC. ADRIANA CRUZ ANAYA 
														</h3>
														<div class="gdlr-session-item-excerpt">DIRECTORA DE INFORMACIÓN Y ESTADÍSTICA DEL PODER JUDICIAL DEL ESTADO DE MÉXICO
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-25>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Matemáticas aplicadas y Computación, egresada de la Universidad Nacional Autónoma de México. <br>
Analista de información en el sector Privado, durante 5 años. <br>
En 2013 se incorporó al sector público en eI Instituto Nacional de Estadística y Geografía, en donde desarrollo e implementó la herramienta informática para la captación de información correspondiente al Censo Nacional de Impartición de Justicia 2014. <br>
Realizó un esquema de Base de Datos para aquellos Tribunales que contaban con su propio Sistema Institucional y estuvo a cargo de la compilación, validación y elaboración de la documentación técnica de la información captada de ambos esquemas, de los cuales asesoró a los diferentes Tribunales Superiores de Justicia. <br>
Durante 3 años estuvo a cargo de generar el proceso de llenado en materia penal del módulo 2 y 3 del Censo Nacional de Impartición de Justicia. <br>
Actualmente se desempeña como Directora de Información y Estadística del Poder Judicial del Estado de México, en donde coordina la elaboración de información estadística que apoye en la toma de decisiones de las diferentes áreas que integran institución y para la entrega de la misma a instituciones externas.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-25 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/persona1.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">  </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-26>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    <br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-26 data-rel=fancybox data-fancybox-type=inline>  </a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/persona1.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">  </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-27>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    <br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-27 data-rel=fancybox data-fancybox-type=inline></a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=clear></div>
                                </div>
                            </div>
						
                            <div class=clear></div>
                    </section>
                </div>
                </div>
            </div>
        </div>


        <footer class=footer-wrapper>
            <div class=copyright-wrapper>
                <div class="copyright-container container">
                    <div class=copyright-left> © Copyright CONATRIB 2021</div>
                    <div class=copyright-right> <a href="https://conatrib.org.mx/">P&aacute;gina web</a> | <a href="https://www.youtube.com/channel/UCjy09Wgg2LXoqTAtLXLpeQQ">Youtube</a> | <a href="https://m.facebook.com/CONATRIBoficial/">Facebook</a> | <a href="https://twitter.com/ConatribMx">Twitter</a></div>
                    <div class=clear></div>
                </div>
            </div>
        </footer>
    </div>

    <script src='js/jquery/jquery.js'></script>
    <script src='js/jquery/jquery-migrate.min.js'></script>


    <script src='plugins/superfish/js/superfish.js'></script>
    <script src='js/hoverIntent.min.js'></script>
    <script src='plugins/dl-menu/modernizr.custom.js'></script>
    <script src='plugins/dl-menu/jquery.dlmenu.js'></script>
    <script src='plugins/jquery.easing.js'></script>
    <script src='plugins/fancybox/jquery.fancybox.pack.js'></script>
    <script src='plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
    <script src='plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
    <script src='plugins/flexslider/jquery.flexslider.js'></script>
    <script src='plugins/jquery.isotope.min.js'></script>
    <script src='js/plugins.min.js'></script>
    <script src='plugins/masterslider/public/assets/js/masterslider.min.js'></script>



    <!-- MAster Slider Activation -->

    <script>
    (function ( $ ) {
        "use strict";

        $(function () {
            var masterslider_d1da = new MasterSlider();

            // slider controls
			masterslider_d1da.control('arrows'     ,{ autohide:true, overVideo:true  });
			masterslider_d1da.control('bullets'    ,{ autohide:true, overVideo:true, dir:'h', align:'bottom', space:6 , margin:25  });
            // slider setup
            masterslider_d1da.setup("slider_1", {
				width           : 1140,
				height          : 600,
				minHeight       : 0,
				space           : 0,
				start           : 1,
				grabCursor      : false,
				swipe           : true,
				mouse           : false,
				keyboard        : true,
				layout          : "fullwidth",
				wheel           : false,
				autoplay        : false,
                instantStartLayers:false,
				mobileBGVideo:false,
				loop            : true,
				shuffle         : false,
				preload         : 0,
				heightLimit     : true,
				autoHeight      : false,
				smoothHeight    : true,
				endPause        : false,
				overPause       : true,
				fillMode        : "fill",
				centerControls  : true,
				startOnAppear   : false,
				layersMode      : "center",
				autofillTarget  : "",
				hideLayers      : false,
				fullscreenMargin: 0,
				speed           : 20,
				dir             : "h",
				parallaxMode    : 'swipe',
				view            : "basic"
            });
            

            
            $("head").append( "<link rel='stylesheet' id='ms-fonts'  href='//fonts.googleapis.com/css?family=Raleway:300,800,regular' type=text/css media='all' />" );

            window.masterslider_instances = window.masterslider_instances || {};
            window.masterslider_instances["5_d1da"] = masterslider_d1da;
         });
        
    })(jQuery);
    </script> 

</body>

</html>