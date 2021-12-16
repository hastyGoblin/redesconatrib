<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

    <title>Red &#8211; Cooperación Judicial para la Protecci&oacute;n de la Ni&ntilde;ez</title>

    <link rel="stylesheet" href="rede_6_cjpn/red/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_6_cjpn/red/plugins/superfish/css/superfish.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_6_cjpn/red/plugins/dl-menu/component.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_6_cjpn/red/plugins/font-awesome-new/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_6_cjpn/red/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_6_cjpn/red/plugins/flexslider/flexslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_6_cjpn/red/css/style-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_6_cjpn/red/css/style-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_6_cjpn/red/plugins/masterslider/public/assets/css/masterslider.main.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_6_cjpn/red/css/master-custom.css" type="text/css" media="all">
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
                        <a href="index.html"> <img src="rede_6_cjpn/red/images/logo_cooperacion.png" alt=""> </a>
                        <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                            <button class="dl-trigger"> Men&uacute;</button>
                            <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item">
                                    <a href="#inicio" aria-current="page">Inicio</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#historia">Objetivo</a>
                                </li>
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
                                <li class="menu-item">
                                    <a href="#historia">Objetivo</a>
                                </li>
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
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url('rede_6_cjpn/red/upload/cooperacion_judicial.png'); padding-top: 100px; padding-bottom: 70px; ">
                            <div class="container">
                                <div class="gdlr-title-item" style="margin-bottom: 40px;">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                        <div class="gdlr-item-title-head">
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">Cooperación Judicial para la</h4>
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">Protecci&oacute;n de la Ni&ntilde;ez </h4>
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
                    <section id="historia">
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
                                                        <p>Actualizar a los impartidores de justicia en materia de Cooperaci&oacute;n Judicial para la Protección de la Ni&ntilde;ez, en apego al respeto irrestricto de los Derechos Humanos y homologar criterios a nivel nacional, as&iacute; como de una revisión general de los avances y retos que en la aplicación de la ley en materia de protección de la ni&ntilde;ez. </p>
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
                    </section>
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
                                        <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-2">
                                            <div class="gdlr-session-head-day">D&iacute;a 2</div>
                                            <div class="gdlr-session-head-date">13 Diciembre 2021</div>
                                        </div>
										 <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-3">
                                            <div class="gdlr-session-head-day">D&iacute;a 3</div>
                                            <div class="gdlr-session-head-date">14 Diciembre 2021</div>
                                        </div>
										<div class="gdlr-session-item-head-info" data-tab="gdlr-tab-4">
                                            <div class="gdlr-session-head-day">D&iacute;a 4</div>
                                            <div class="gdlr-session-head-date">15 Diciembre 2021</div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>

                                    <!-- inicia dia -->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-1 gdlr-active">
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:00</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Magistrado Rafael Guerra &Aacute;lvarez</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Mensaje de Inauguración</a></h3>
                                                <div class="gdlr-session-item-excerpt">Presidente del Poder Judicial de la CDMX y Presidente de la Comisión Nacional de Tribunales Superiores de Justicia de los Estados Unidos Mexicanos (CONATRIB).
                                                    <div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://youtu.be/q7U2avizVEI"><button class="newsletter-submit gdlr-button with-border">Ver mensaje</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:15</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Magdo. Dr. Oscar Gregorio Cervera Rivero</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Magistrado de la Segunda Sala Familiar del TSJCDMX y Coordinador Nacional de la Red Mexicana de Cooperación Judicial para la Protección de la Niñez.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conferencia Magistral</a></h3>
                                                <div class="gdlr-session-item-excerpt">Aspectos a considerar en la ejecución de la sentencia que concede la Restitución.
													
                                                    <div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://youtu.be/XS8HEDhEDEc"><button class="newsletter-submit gdlr-button with-border">Ver conferencia</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:15</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            
                                                        </div>
                                                    </div>
									           <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>RECESO</a></h3>
                                                 </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:30</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Mtro. José Roberto de Jesús Treviño Sosa</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Juez Segundo de Juicio Familiar Oral de Monterrey, Nuevo León.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conferencia</a></h3>
                                                <div class="gdlr-session-item-excerpt">Pruebas en el extranjero.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://youtu.be/X94WsxqRYJs"><button class="newsletter-submit gdlr-button with-border">Ver conferencia</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        
    
                                    </div>
                                    <!-- termina dia -->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-2">
                                        
                                       <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:00</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Dr. Fernando Rangel Ramírez</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Magistrado del Décimo Primer Tribunal Colegiado en materia Civil del Primer Circuito de la Ciudad de México.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conferencia Magistral</a></h3>
                                                <div class="gdlr-session-item-excerpt">Comentarios sobre la suplencia de la deficiencia de la queja en asuntos que afecten a niñas, niños y adolescentes
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://youtu.be/j0GSS2S9kp8" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver conferencia</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:30</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Mtro. Carlos Odriozola Mariscal</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Director General del Bufete Odriozola,S.C.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conferencia</a></h3>
                                                <div class="gdlr-session-item-excerpt">Las redes judiciales en la cooperación procesal internacional e interestatal: hacia el nuevo Código Nacional de Procedimientos Civiles y Familiares.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://youtu.be/HgEimZIM1VI" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver conferencia</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:30</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Lic. Marisela Sandoval López</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Magistrada Presidenta de la Sala Familiar del Tribunal Superior de Justicia de Querétaro.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conferencia</a></h3>
                                                <div class="gdlr-session-item-excerpt">La Restitución Internacional de Menores frente a la perspectiva de género.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://youtu.be/5RJ9XmT1ew4" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver conferencia</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										
								  </div>
									            <!-- termina dia -->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-3">
                                        
                                       <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:00</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Dr. Juan Carlos Ortega Castro</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Magistrado del Segundo Tribunal Colegiado en materia Civil del Segundo Circuito de Toluca, estado de México.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conferencia Magistral</a></h3>
                                                <div class="gdlr-session-item-excerpt">La Teoría del Caso en el Procedimiento de Restitución Internacional de Menores.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://www.youtube.com/watch?v=P34cbr_TvV0" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver conferencia</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:30</div>
                                                     <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>RECESO</a></h3>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:40</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Dra. Nuria González Martín</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Investigadora Titular “C” del Instituto de Investigaciones Jurídicas de la Universidad Nacional Autónoma de México.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conferencia</a></h3>
                                                <div class="gdlr-session-item-excerpt">La Mediación en casos de Sustracción Internacional de Menores.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://www.youtube.com/watch?v=-y06fCbOQRw" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver conferencia</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:10</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Dra. María Margarita Gallegos López</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Jueza Séptimo de lo Familiar de la Ciudad de México con especialidad en Restitución Internacional de Menores.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conferencia</a></h3>
                                                <div class="gdlr-session-item-excerpt">La autonomía progresiva de las niñas y niños en los procedimientos de Restitución Internacional.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://www.youtube.com/watch?v=MNZiwxUtjQQ" target="_blank"><button class="newsletter-submit gdlr-button with-border" target="_blank">Ver conferencia</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										
								  </div>
									
									<div class="gdlr-session-item-tab-content gdlr-tab-4">
                                     
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:15</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Magdo. Dr. Oscar Gregorio Cervera Rivero</a></div>
													          </div>
															<div class="session-speaker-list-item" ><i class="fa fa-address-card" aria-hidden="true"></i><a>Coordinador Nacional de la Red Mexicana de Cooperación Judicial para la Protección de la Niñez.</a></div>
                                                        </div>
														 <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Dra. Margarita Gallegos López</a></div>
													          </div>
															<div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Jueza Séptimo de lo Familiar de la Ciudad de México con especialidad en Restitución Internacional de Menores.</a></div>
                                                        </div>
														<div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Miguel Angel Reyes Moncayo</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Director General Adjunto de Derecho de Familia.</a></div>
                                                        </div>
														<div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Lic. Claudia Sierra Martínez</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Subdirectora de Restitución y Custodia Internacional de Menores.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Mesa de debate</a></h3>
                                                <div class="gdlr-session-item-excerpt">Mesa de debate con los Jueces de la Red, sobre un caso práctico de Restitución Internacional de Menores.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ed8e96136e3ff657eaae72db4d1837b3a" target="_blank"><button class="newsletter-submit gdlr-button with-border" target="_blank">Ver mesa de debate</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>13:15</div>
                                                   
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Lectura de conclusiones.</a></h3>
                                               
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ed8e96136e3ff657eaae72db4d1837b3a" target="_blank"><button class="newsletter-submit gdlr-button with-border" target="_blank">Ver lectura</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>14:00</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner"><i class="fa fa-user"></i>
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><a>Magdo. Dr. Oscar Gregorio Cervera Rivero</a></div>
													          </div>
															<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-address-card" aria-hidden="true"></i><a>Magistrado de la Segunda Sala Familiar del TSJCDMX y Coordinador Nacional de la Red Mexicana de Cooperación Judicial para la Protección de la Niñez.</a></div>
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
										   
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Clausura</a></h3>
                                                <div class="gdlr-session-item-excerpt">Clausura formal de la Décima Segunda Reunión de la Red Mexicana de Cooperación Judicial para la Protección de la Niñez.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=ed8e96136e3ff657eaae72db4d1837b3a" target="_blank"><button class="newsletter-submit gdlr-button with-border" >Ver mesa de debate</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										
								  </div>
                                 
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
                                        <br>
                                    </div>
                                </div>
                            <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/nuria.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DRA. NURIA GONZÁLEZ MARTÍN</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-1>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ES DOCTORA EN DERECHO INTERNACIONAL PRIVADO POR LA UNIVERSIDAD PABLO DE OLAVIDE, SEVILLA, ESPAÑA. POSTDOCTORA EN DERECHO -´NEW TECHNOLOGIES AND LAW´”- EN LA MEDITERRANEA INTERNATIONAL CENTRE FOR HUMAN RIGHTS RESEARCH (MICHR) DE LA UNIVERSITÀ MEDITERRANEA DI REGGIO CALABRIA (ITALIA). <br> ES INVESTIGADORA TITULAR “C” DEL INSTITUTO DE INVESTIGACIONES JURÍDICAS DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO (IIJ-UNAM) FUE DIRECTORA DEL BOLETÍN MEXICANO DE DERECHO COMPARADO (BMDC) Y AL TÉRMINO DE SU ENCARGO CONTINUÓ CON LA COORDINACIÓN DE LA COLECCIÓN “OPINIONES TÉCNICAS SOBRE TEMAS DE RELEVANCIA NACIONAL” ES INVESTIGADORA DEL SISTEMA NACIONAL DE INVESTIGADORES, CONACYT, NIVEL III.  <br> PARTICIPA EN COMISIONES ESPECIALES Y GRUPOS DE EXPERTOS TANTO DE LA CONFERENCIA DE LA HAYA DE DERECHO INTERNACIONAL PRIVADO (HCCH) Y EN EL SERVICIO SOCIAL INTERNACIONAL (ISS) EN HOLANDA Y SUIZA, RESPECTIVAMENTE, ADEMÁS DE PARTICIPAR EN GRUPOS DE TRABAJO, DESTACANDO POR SU ÁREA DE EXPERTISE, EL CONFORMADO EN MATERIA DE MEDIACIÓN FAMILIAR INTERNACIONAL EN CASOS DE SUSTRACCIÓN INTERNACIONAL PARENTAL CON EL DEPARTAMENTO DE ESTADO, CALIFORNIA, ESTADOS UNIDOS DE AMÉRICA; ASÍ COMO EN DIVERSOS COMITÉS NACIONALES DICTAMINADORES Y REVISORES DEL ÁREA RELATIVA A LAS CIENCIAS SOCIALES. <br> CONSEJERA INTERNA DEL INSTITUTO DE NVESTIGACIONES JURÍDICAS DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO. MEDIADORA CERTIFICADA POR EL TRIBUNAL SUPERIOR DE JUSTICIA DE LA CIUDAD DE MÉXICO. ASESORA EXTERNA AD HONOREM DE LA SECRETARÍA DE RELACIONES EXTERIORES MEXICANA. PROFESORA DE LICENCIATURA, MAESTRÍA Y DOCTORADO EN UNIVERSIDADES NACIONALES E INTERNACIONALES.  <br> ES MIEMBRO DE LA ACADEMIA MEXICANA DE CIENCIAS (AMC), MIEMBRO DE LA INTERNATIONAL ACADEMY OF COMPARATIVE LAW (IACL), MIEMBRO DE NÚMERO DE LA ACADEMIA MEXICANA DE DERECHO INTERNACIONAL PRIVADO Y COMPARADO (AMEDIP), ENTRE OTRAS INSTITUCIONES Y ASOCIACIONES ACADÉMICAS. <br> ES AUTORA DE 22 LIBROS DE PROPIA AUTORÍA/COAUTORÍA, 40 LIBROS COORDINADOS Y/O COMPILADOS Y MÁS DE DOS CENTENARES DE ARTÍCULOS PUBLICADOS EN REVISTAS DE EXCELENCIA NACIONALES E INTERNACIONALES. <br> A PARTIR DE 2018 ES SENIOR WEINSTEIN FELLOW DE LA WEINSTEIN INTERNATIONAL FOUNDATION (WIF). ENTRE SUS GALARDONES SE ENCUENTRAN: PREMIO ALTAMIRANO POR EL INSTITUTO DE INVESTIGACIONES JURÍDICAS DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO 2002. 

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-1 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/fernando.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MAGISTRADO FERNANDO RANGEL RAM&Iacute;REZ</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-2>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ES LICENCIADO EN DERECHO POR LA ESCUELA NACIONAL DE ESTUDIOS PROFESIONALES, PLANTEL ARAGÓN, DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO.<br> ESPECIALISTA EN ADMINISTRACIÓN DE JUSTICIA EN JUZGADOS DE DISTRITO, POR EL ENTONCES INSTITUTO DE LA JUDICATURA FEDERAL, ACTUALMENTE ESCUELA FEDERAL DE FORMACIÓN JUDICIAL. <br> ES MAESTRO EN DERECHO DE AMPARO POR LA UNIVERSIDAD TEPANTLATO.<br> ES DOCTOR EN DERECHO POR LA UNIVERSIDAD IUS SEMPER. <br>JUEZ DE DISTRITO DE JULIO DE 2002 A OCTUBRE DE 2011.<br> COORDINADOR DE TRIBUNALES COLEGIADOS EN MATERIA CIVIL DEL PRIMER CIRCUITO DESDE 2015. <br> MIEMBRO DE LA ASOCIACIÓN NACIONAL DE MAGISTRADOS DE CIRCUITO Y JUECES DE DISTRITO DEL PODER JUDICIAL DE LA FEDERACIÓN, ASOCIACIÓN CIVIL., EN DONDE EN LA ACTUALIDAD SE DESEMPEÑA COMO DIRECTOR DE FINANZAS EN LA DIRECTIVA REGIONAL DEL PRIMER CIRCUITO, EN LA CIUDAD DE MÉXICO. <br> ES MIEMBRO DE LA ASOCIACIÓN NACIONAL DE DOCTORES EN DERECHO. <br> FUE MIEMBRO DEL COMITÉ ACADÉMICO DEL INSTITUTO DE LA JUDICATURA FEDERAL DE FEBRERO DE 2010 A FEBRERO DE 2014. <br> EN NOVIEMBRE DE DOS MIL QUINCE RECIBIÓ LA PRESEA TEPANTLATO AL MÉRITO JURÍDICO. <br> DOCENTE EN LA ESCUELA FEDERAL DE FORMACIÓN JUDICIAL, EL TRIBUNAL FEDERAL ELECTORAL, LAS UNIVERSIDADES IUS SEMPER, TEPANTLATO E INADEJ, ENTRE OTRAS. <br> ES MAGISTRADO DE CIRCUITO DESDE NOVIEMBRE DE 2011, ADSCRITO ACTUALMENTE AL DÉCIMO PRIMER TRIBUNAL COLEGIADO EN MATERIA CIVIL DEL PRIMER CIRCUITO. <br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-2 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/persona2.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">LICENCIADA CLAUDIA SIERRA MART&Iacute;NEZ</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-3>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ES LICENCIADA EN DERECHO POR LA FACULTAD DE ESTUDIOS SUPERIORES ARAGÓN DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO CON UNA ESPECIALIDAD EN DERECHO ADMINISTRATIVO POR LA MISMA FACULTAD.<br> CUENTA CON UN DIPLOMADO EN MEDIACIÓN FAMILIAR POR EL INSTITUTO DE INVESTIGACIONES JURÍDICAS DE LA MISMA UNIVERSIDAD.<br> HA PARTICIPADO COMO PONENTE EN LAS REUNIONES DE LA RED MEXICANA DE COOPERACIÓN JUDICIAL PARA LA PROTECCIÓN DE LA NIÑEZ, ESCUELAS JUDICIALES ESTATALES, ASÍ COMO EN LAS JORNADAS DE ACTUALIZACIÓN EN MATERIA CIVIL Y ADMINISTRATIVA EN EL CONSEJO DE LA JUDICATURA FEDERAL.<br> SE HA DESEMPEÑADO COMO ABOGADA DICTAMINADORA EN LA DIRECCIÓN DE NACIONALIDAD Y NATURALIZACIÓN DE LA DIRECCIÓN GENERAL DE ASUNTOS JURÍDICOS Y JEFA DEL DEPARTAMENTO DE RECUPERACIÓN DE ALIMENTOS EN EL EXTRANJERO, AMBAS EN LA SECRETARÍA DE RELACIONES EXTERIORES.<br> ACTUALMENTE SE DESEMPEÑA COMO SUBDIRECTORA DE RESTITUCIÓN Y CUSTODIA INTERNACIONAL DE MENORES EN LA DIRECCIÓN GENERAL ADJUNTA DE DERECHO DE FAMILIA, OFICINA DESIGNADA COMO AUTORIDAD CENTRAL PARA LAS CONVENCIONES EN MATERIA DE SUSTRACCIÓN INTERNACIONAL DE MENORES ASÍ COMO ENCARGADA DE LOS CASOS DE REUNIFICACIÓN FAMILIAR ESTADOS UNIDOS-MÉXICO.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-3 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/maria.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DRA. MAR&Iacute;A MARGARITA GALLEGOS L&Oacute;PEZ</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-4>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ES LICENCIADA EN DERECHO POR LA FACULTAD DE DERECHO DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO.<br>ES MAESTRA EN DERECHO CIVIL POR LA DIVISIÓN DE ESTUDIOS DE POSGRADO DE LA FACULTAD DE DERECHO DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO.<br> CUENTA CON DIPLOMATURA INTERNACIONAL DERECHO CIVIL Y FAMILIAR, IMPARTIDO POR LA UNIVERSIDAD AUTÓNOMA DE BARCELONA, ESPAÑA. <br> ES DOCTORA EN DERECHO FAMILIAR POR LA UNIVERSIDAD DE TEPANTLATO Y DOCTORANDA POR LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO. <br> HA SIDO CONFERENCISTA EN DIVERSOS CONGRESOS NACIONALES E INTERNACIONALES. <br>RECIBIÓ LA PRESEA TEPANTLATO OTORGADA POR DICHA UNIVERSIDAD EN EL AÑO 2015. <br>ES MIEMBRO SUPERNUMERARIO DE LA ASOCIACIÓN MEXICANA DE DERECHO INTERNACIONAL PRIVADO. <br>AMEDIP DENTRO DEL TRIBUNAL SUPERIOR DE JUSTICIA DE LA CIUDAD DE MÉXICO HA OCUPADO LOS SIGUIENTES CARGOS:<br> SECRETARIA CONCILIADORA EN EL JUZGADO TRIGÉSIMO QUINTO DE LO FAMILIAR. <br>JUEZ POR OPOSICIÓN DEL JUZGADO DÉCIMO TERCERO DE LO FAMILIAR. <br> ACTUALMENTE ES JUEZ SÉPTIMO DE LO FAMILIAR CON ESPECIALIDAD EN RESTITUCIÓN INTERNACIONAL DE MENORES Y SECRETARIA TÉCNICA DE LA RED MEXICANA DE COOPERACIÓN JUDICIAL PARA LA PROTECCIÓN DE LA NIÑEZ.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-4 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/oscar.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DR. OSCAR GREGORIO CERVERA RIVERO</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-5>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ES MAGISTRADO INTEGRANTE DE LA SEGUNDA SALA FAMILIAR DEL TRIBUNAL SUPERIOR DE JUSTICIA DE LA CIUDAD DE MÉXICO.<br> ES DOCTOR EN DERECHO Y ADEMÁS ACTUALMENTE, CANDIDATO A DOCTOR EN ADMINISTRACIÓN Y GOBIERNO DEL PODER JUDICIAL POR EL INSTITUTO DE INVESTIGACIONES JURÍDICAS DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO E INSTITUTO DE ESTUDIOS JUDICIALES DEL PODER JUDICIAL DE LA CIUDAD DE MÉXICO.<br> <br>ES MIEMBRO NUMERARIO DE LA AMEDIP, ACADEMIA MEXICANA DE DERECHO INTERNACIONAL PRIVADO. <br> ENTRE OTRAS ACTIVIDADES, SE HA DESEMPEÑADO COMO:<br> JUEZ DE ENLACE MEXICANO EN MATERIA DE RESTITUCIÓN INTERNACIONAL ANTE LA HAGUE CONFERENCE ON PRIVATE INTERNATIONAL LAW (CONFERENCIA DE LA HAYA EN DERECHO INTERNACIONAL PRIVADO). <br> MIEMBRO DE LA ASOCIACIÓN INTERNACIONAL DE JUECES EN MATERIA DE FAMILIA. <br> IMPULSOR E INTEGRANTE DE LA RED MEXICANA DE COOPERACIÓN JUDICIAL PARA LA PROTECCIÓN DE LA NIÑEZ, FUNDADA EN 2010. <br>PARTICIPANTE EN LA QUINTA Y SEXTA REUNIONES DE LA COMISIÓN ESPECIAL PARA LA EVALUACIÓN DEL FUNCIONAMIENTO DE LA CONFERENCIA DE LA HAYA. <br> INTEGRANTE DEL GRUPO DE TRABAJO PARA LA ELABORACIÓN DE UNA GUÍA DE “BUENAS PRÁCTICAS, RESPECTO AL ARTÍCULO 13, PRIMER PÁRRAFO, INCISO B), DE LA CONVENCIÓN SOBRE ASPECTOS CIVILES DE LA SUSTRACCIÓN INTERNACIONAL DE MENORES” (EXCEPCIÓN DE GRAVE RIESGO).<br> INTEGRANTE DE LA DELEGACIÓN MEXICANA EN LAS REUNIONES DE TRABAJO ANTE LA ORGANIZACIÓN DE NACIONES UNIDAS PARA LA SUSTENTACIÓN DEL CUARTO Y QUINTO INFORMES CONSOLIDADOS SOBRE EL CUMPLIMIENTO EN NUESTRO PAÍS, DE LA CONVENCIÓN SOBRE LOS DERECHOS DEL NIÑO, CELEBRADA LOS DÍAS 18 Y 20 DE MAYO DEL 2015, EN GINEBRA, SUIZA. <br> OBRAS EN COAUTORÍA: <br> “PRÁCTICA FORENSE EN DERECHO FAMILIAR”.  INTER WRITERS. MÉXICO, 2010. <br> “PROCESOS ORALES EN MATERIA FAMILIAR. SUS ESTÁNDARES” INTER WRITERS. MÉXICO. 2015.<br> OBRAS COLECTIVAS: <br>“LOS MENORES COMO TITULARES DE LA ACCIÓN”. LA RESTITUCIÓN INTERNACIONAL DE LA NIÑEZ. ENFOQUE IBEROAMÉRICANO DOCTRINARIO Y JURISPRUDENCIAL. COORDINADORES, TAGLE Y TENORIO. EDITORIAL PORRÚA, MÉXICO, 2011.<br> “LA PRUEBA EN LOS PROCESOS DE RESTITUCIÓN INTERNACIONAL DE NIÑOS”. CUESTIONES COMPLEJAS EN LOS PROCESOS DE RESTITUCIÓN INTERNACIONAL DE NIÑOS EN LATINOAMERICA. COORDINADORES, TENORIO Y RUIBAJA CASTRO. EDITORIAL PORRÚA, MÉXICO, 2018.<br> FUE NOMBRADO MAGISTRADO DEL TRIBUNAL SUPERIOR DE JUSTICIA DEL DISTRITO FEDERAL EN AGOSTO DEL 2000, ADSCRITO A LA TERCERA SALA CIVIL Y A PARTIR DE 2005, A LA FECHA MAGISTRADO DE LA SEGUNDA SALA FAMILIAR DE ESTE HONORABLE TRIBUNAL, Y COORDINADOR NACIONAL DE LA RED MEXICANA DE COOPERACIÓN JUDICIAL PARA LA PROTECCIÓN DE LA NIÑEZ, Y A QUIEN CEDO EL USO DE LA VOZ.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-5 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/marisela.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MARISELA SANDOVAL LOPEZ</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-6>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ESTUDIOS PROFESIONALES: <br>Licenciatura en derecho. Universidad Autónoma de Querétaro. Querétaro. TITULO <br> Maestría en Derecho Penal. Universidad Cuauhtémoc A.C., Querétaro.  TITULO <br>Diversos Diplomados tanto en materia de Formación Directiva, Violencia Familiar,  Medios Alternos de Justicia, Conciliación Familiar así como en  materia de formación y actualización en Control de Constitucionalidad, Control de Convencionalidad y Procesos Orales. <br>ACTIVIDAD LABORAL:<br> Desde hace 27 años labora en el Poder Judicial del Estado de Querétaro, recorriendo prácticamente todos los puestos de la carrera judicial, desde mecanógrafa de juzgado, hasta el día de hoy que desde hace cuatro años funge como Magistrada y actualmente preside la Sala Familiar. <br> Desde el año de 2010 en que se fundó, funge también como Juez de Enlace por el Estado de Querétaro, de la Red Mexicana de Cooperación Judicial para la Protección de la Niñez. <br> ACTIVIDAD DOCENTE:<br> Desde hace más de 25 años, Capacitador y Maestra titular tanto en la Especialidad y Maestría en Administración de justicia que se imparte en el Instituto de Especialización Judicial del Poder Judicial del Estado de Querétaro, como en diversas universidades de la entidad, en materia de Violencia Familiar; Derecho Procesal Familiar tanto en juicio tradicional como juicio oral; restitución nacional e internacional; adopción nacional e internacional; obtención y recuperación de alimentos en el territorio nacional y en el extranjero; justicia para grupos vulnerables e intervención adecuada de niños, niña y adolescentes en juicio. <br> CONFERENCIAS:<br> Se han impartido diversas conferencias tanto a instituciones educativas como las preparatorias de la UAQ, personal de la Secretaría de Salud, Procuraduría Estatal y Municipales de Proteccion de Niños, Niñas y Adolescentes, Fiscalía  General de Justicia en el Estado y Colegio de Notarios del Estado, alusivas a diversas temáticas en materia penal y familiar y desde el año 2000 a la fecha en materia de: Violencia Familiar, Medidas Cautelares o de protección en materia familiar, Adopción Internacional y Restitución de Menores Nacional e Internacional; Intervención de Niños, niñas y adolescentes en juicio y Juicio Oral Familiar.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-6 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/carlos.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. CARLOS ENRIQUE ODRIOZOLA MARISCAL</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-7>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    EGRESADO DE LA FACULTAD DE DERECHO DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO, HA CURSADO DIVERSAS ESPECIALIDADES, DIPLOMADOS Y CURSOS EN LAS UNIVERSIDADES DE SALAMANCA, HARVARD, FEDERICA DE NÁPOLES, PANAMERICANA, EL COLEGIO DE MÉXICO E INSTITUTO DE INVESTIGACIONES JURÍDICAS DE LA UNIVERSIDAD NACIONAL AUTÓNIMA DE MÉXICO.<br> ESTUDIÓ LA MAESTRÍA EN DERECHO INTERNACIONAL EN LA DIVISIÓN DE ESTUDIOS DE POSGRADO DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO, EN DONDE FORMA PARTE DEL CLAUSTRO DE PROFESORES AL HABER IMPARTIDO DIVERSAS CÁTEDRAS RELATIVAS AL DERECHO INTERNACIONAL Y LOS DERECHOS HUMANOS. <br>ACTUALMENTE ES DOCTORANDO POR LA MISMA UNIVERSIDAD EN DONDE SU INVESTIGACIÓN ABORDA EL FUNCIONAMIENTO DE LAS REDES JUDICIALES PARA UNA MEJOR COOPERACIÓN PROCESAL INTERNACIONAL.<br> FUE PRESIDENTE DE LA JUNTA DE GOBIERNO DE LA ACADEMIA MEXICANA DE DERECHO INTERNACIONAL PRIVADO Y COMPARADO, ASOCIACIÓN CIVIL                          (AMEDIP) Y ES MIEMBRO PLENO DE LA ASOCIACIÓN AMERICANA DE DERECHO INTERNACIONAL PRIVADO (ASADIP).<br> HA PUBLICADO NUMEROSOS ARTÍCULOS EN MATERIA DE DERECHO PROCESAL INTERNACIONAL, LITIGIO ESTRATÉGICO Y DERECHOS HUMANOS. ES AUTOR DEL LIBRO “EL SEGURO DE TÍTULO INMOBILIARIO”, ÚNICA OBRA EN LENGUA HISPANA SOBRE DICHA FIGURA ANGLOSAJONA.<br> HA OBTENIDO DIVERSOS PREMIOS DE INVESTIGACIÓN JURÍDICA EN MÉXICO, INCLUIDOS EL PRIMER LUGAR DEL CONCURSO DE ENSAYO JURÍDICO PARA CELEBRAR EL 50 ANIVERSARIO DEL INSTITUTO DE INVESTIGACIONES JURÍDICAS DE LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO Y EL PRIMER LUGAR DEL CONCURSO LITERARIO SOBRE LA JUSTICIA, ORGANIZADO POR EL TRIBUNAL SUPERIOR DE JUSTICIA DE LA CIUDAD DE MÉXICO CONMEMORATIVO DE LOS 150 AÑOS DE SU FUNDACIÓN.<br> ES DIRECTOR GENERAL DE BUFETE ODRIOZOLA, SOCIEDAD CIVIL, FIRMA DE ABOGADOS LITIGANTES EN MATERIA CIVIL, FAMILIAR, MERCANTIL Y AMPARO DESDE HACE 25 AÑOS. ES PRESIDENTE DEL CENTRO CONTRA LA DISCRIMNACION, ASOCIACIÓN CIVIL (CECODI), EN DONDE HA REALIZADO UNA IMPORTANTE LABOR SOCIAL A TRAVÉS DE LITIGIO ESTRATÉGICO EN DERECHOS HUMANOS DESDE HACE MÁS DE 12 AÑOS. <br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-7 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/miguel.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. MIGUEL ANGEL REYES MONCAYO</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-8>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ES LICENCIADO EN DERECHO POR LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO Y MAESTRO EN LEYES POR LA UNIVERSIDAD DE HOUSTON, CON ESPECIALIDAD EN DERECHO INTERNACIONAL.<br> CUENTA CON QUINCE AÑOS DE EXPERIENCIA EN LA SECRETARÍA DE RELACIONES EXTERIORES, EN DONDE HA TRABAJADO EN LAS ÁREAS DE TRATADOS, DERECHO INTERNACIONAL PRIVADO, DERECHO INTERNACIONAL PÚBLICO Y LITIGIOS.<br> ES MIEMBRO DEL SERVICIO EXTERIOR MEXICANO DESDE 2012, ACTUALMENTE CON RANGO DE SEGUNDO SECRETARIO. <br> HA SIDO CÓNSUL DE MÉXICO EN LAS CIUDADES DE EL PASO Y HOUSTON EN DONDE HA ESTADO A CARGO DE LAS SECCIONES DE ASUNTOS FRONTERIZOS, ASUNTOS ECONÓMICOS Y PROTECCIÓN A MEXICANOS. <br> EN EL ÁMBITO ACADÉMICO, EL MAESTRO REYES MONCAYO, HA SIDO PROFESOR DE DERECHO INTERNACIONAL PÚBLICO A NIVEL LICENCIATURA. <br> IGUALMENTE, HA IMPARTIDO NUMEROSAS CONFERENCIAS, CAPACITACIONES Y TALLERES A ESTUDIANTES, PROFESORES, CANDIDATOS A MIEMBROS DEL SERVICIO EXTERIOR MEXICANO Y SERVIDORES PÚBLICOS ESTALES Y FEDERALES, SOBRE DIVERSOS TEMAS DE DERECHO INTERNACIONAL PÚBLICO Y PRIVADO.<br> SU PRINCIPAL ACTIVIDAD ES COORDINAR LAS FUNCIONES INHERENTES A LA AUTORIDAD EJECUTORA O CENTRAL DE MÉXICO EN TRATADOS Y ACUERDOS INTERNACIONALES EN MATERIA DE ADOPCIONES, SUSTRACCIÓN DE MENORES Y PENSIONES ALIMENTICIAS. <br> ACTUALMENTE ES DIRECTOR GENERAL ADJUNTO DE DERECHO DE FAMILIA, EN LA DIRECCIÓN GENERAL DE PROTECCIÓN A MEXICANOS EN EL EXTERIOR.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-8 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/juan.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MAGISTRADO DR. JUAN CARLOS ORTEGA CASTRO</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-9>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ES ABOGADO POR LA ESCUELA LIBRE DE DERECHO. MAESTRO EN DERECHO CONSTITUCIONAL, EN DERECHO CIVIL Y EN DERECHO PROCESAL PENAL.<br> ES DOCTOR EN CIENCIAS PENALES. DOCTOR HONORIS CAUSA POR EL COLEGIO DE ESTUDIOS JURÍDICOS DE MÉXICO.<br> ACTUALMENTE CURSA EL DOCTORADO EN DERECHO JUDICIAL EN EL INSTITUTO DE CIENCIAS JURÍDICAS DE NAYARIT.<br> CERTIFICADO COMO DOCENTE EN DERECHO INTERNACIONAL DE LOS DERECHOS HUMANOS POR LA OFICINA DEL ALTO COMISIONADO DE LOS DERECHOS HUMANOS DE LA ORGANIZACIÓN DE LAS NACIONES UNIDAS EN MÉXICO Y POR EL INSTITUTO DE LA JUDICATURA FEDERAL.<br> HA CURSADO DIPLOMADOS IMPARTIDOS POR PERÚ, ESPAÑA ESTADOS UNIDOS Y MÉXICO, EN ARGUMENTACIÓN JURÍDICA, RAZONAMIENTO JURÍDICO PENAL, TEORÍA JURÍDICA CONTEMPORÁNEA, MULTICULTURALIDAD, ÉTICA EN LA FUNCIÓN JUDICIAL, AMPARO PENAL, ENTRE OTRAS MATERIAS.<br> RECIBIÓ LA VENERA ABOGADO ISIDRO FABELA ALFARO. HA PUBLICADO OBRAS EN COAUTORÍA Y ARTÍCULOS EN MATERIAS CONSTITUCIONAL, DERECHO PENAL, CIVIL, FAMILIAR, MERCANTIL Y BIOÉTICA JURÍDICA, ENTRE OTRAS.<br> ES DOCENTE Y CONFERENCISTA EN INSTITUCIONES PÚBLICAS Y PRIVADAS DESDE HACE 37 AÑOS Y HA INTERVENIDO EN CONGRESOS INTERNACIONALES Y NACIONALES EN MATERIA AMBIENTAL, DERECHO PENAL, DERECHO CONSTITUCIONAL Y FAMILIAR, ENTRE OTRAS MATERIAS. <br> HA DIRIGIDO TESIS EN GRADOS DE LICENCIATURA, MAESTRÍA Y DOCTORADO Y HA PARTICIPADO EN MÚLTIPLES EXÁMENES DE GRADO.<br> INGRESÓ AL PODER JUDICIAL FEDERAL EN 1989. FUE DESIGNADO JUEZ DE DISTRITO EN 1997, Y POSTERIORMENTE MAGISTRADO DE CIRCUITO EN 1999, MEDIANTE SENDOS CONCURSOS DE OPOSICIÓN.<br> ACTUALMENTE ES MAGISTRADO PRESIDENTE DEL SEGUNDO TRIBUNAL COLEGIADO EN MATERIA CIVIL DEL SEGUNDO CIRCUITO DE TOLUCA, ESTADO DE MÉXICO.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-9 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/jose.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. JOSÉ ROBERTO DE JESÚS TREVIÑO SOSA</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-10>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ES LICENCIADO EN DERECHO CON MAESTRÍA EN CIENCIAS PENALES.<br> MIEMBRO HONORARIO LA SOCIEDAD DE HONOR LEGAL DE PHI DELTA PHI.<br> MIEMBRO SUPERNUMERARIO DE LA ACADEMIA DE DERECHO INTERNACIONAL PRIVADO Y COMPARADO. <br>CATEDRÁTICO DE DERECHO EN LA UNIVERSIDAD AUTÓNOMA DE NUEVO LEÓN Y EN LA UNIVERSIDAD REGIOMONTANA. <br> INGRESÓ AL PODER JUDICIAL DEL ESTADO DE NUEVO LEÓN, EN EL AÑO DE 1984.<br> FUE JUEZ SEGUNDO DE JUICIO FAMILIAR ORAL EN EL ESTADO DE NUEVO LEÓN Y ES MIEMBRO DE LA RED DE JUECES DE LA HAYA.<br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-10 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/persona1.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-11>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    <br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-11 data-rel=fancybox data-fancybox-type=inline> </a></div>
                                                    </div>
                                                </li>
												<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/persona1.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">  </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-12>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    <br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-12 data-rel=fancybox data-fancybox-type=inline>  </a></div>
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