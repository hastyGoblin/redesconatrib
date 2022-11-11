<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

    <title>Red &#8211; EJ</title>

    <link rel="stylesheet" href="rede_2_esc_jud/red/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_2_esc_jud/red/plugins/superfish/css/superfish.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_2_esc_jud/red/plugins/dl-menu/component.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_2_esc_jud/red/plugins/font-awesome-new/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_2_esc_jud/red/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_2_esc_jud/red/plugins/flexslider/flexslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_2_esc_jud/red/css/style-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_2_esc_jud/red/css/style-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_2_esc_jud/red/plugins/masterslider/public/assets/css/masterslider.main.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_2_esc_jud/red/css/master-custom.css" type="text/css" media="all">
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
                        <a href="index.html"> <img src="{!! asset('rede_2_esc_jud/red/upload/logo_escuelas.png') !!}" alt=""> </a>
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
                                    <a href="#historia">objetivo</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#programa">Programa</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#ponentescdmx">Ponentes</a>
                                </li>
                                <li class="menu-item"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <div id="gdlr-header-substitute"></div>
        <div class="content-wrapper">
            <div class="gdlr-content">
                <div class="with-sidebar-wrapper gdlr-type-no-sidebar">
                    <section id="inicio">
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url('rede_2_esc_jud/red/upload/escuelas_judiciales.png'); padding-top: 100px; padding-bottom: 70px; ">
                            <div class="container">
                                <div class="gdlr-title-item" style="margin-bottom: 40px;">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                        <div class="gdlr-item-title-head">
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">RED DE ESCUELAS JUDICIALES</h4>
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">DE LOS ESTADOS DE LA REP&Uacute;BLICA MEXICANA</h4>
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
                                                        <p>Con el objetivo compartir, comparar y evaluar las buenas prácticas en formación de Carrera Judicial, así como, proponer modelos y técnicas de enseñanza que coadyuven a un mejor aprendizaje a la altura de los nuevos retos, reformas y modelos de comunicación en las Escuelas Judiciales de los Estados de la República Mexicana, y con el objeto de seguir motivando proyectos académicos en conjunto. </p>
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
                                            <div class="gdlr-session-head-date">14 Noviembre 2022</div>
                                        </div>
                                        <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-2">
                                            <div class="gdlr-session-head-day">D&iacute;a 2</div>
                                            <div class="gdlr-session-head-date">15 Noviembre 2022</div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>

                                    <!-- inicia dia 1-->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-1 gdlr-active">
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>09:00 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Rafael Guerra &Aacute;lvarez</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Magistrado Presidente del Poder Judicial de la Ciudad de México y de la Comisión Nacional de Tribunales Superiores de Justicia de los Estados Unidos Mexicanos.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Ceremonia Inaugural</h3>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/zPmJ8q6uBQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																</div>
															   <div class="entry-block"></div>
															    <!--<div class="entry-title">
												                  <a href="eventsingle-page.html" title="Corporate Paper Meetup Event"><h3>Descripci&oacute;n del video</h3></a>
																    </div>-->
														 </article>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                            </div>

                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:15 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Raúl Carrillo del Muro</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director de la Escuela Judicial del Poder Judicial de Zacatecas y Secretario General de la Red de Escuelas Judiciales de los Estados de la República Mexicana.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Bienvenida</h3>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/zPmJ8q6uBQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																</div>
															   <div class="entry-block"></div>
															    <!--<div class="entry-title">
												                  <a href="eventsingle-page.html" title="Corporate Paper Meetup Event"><h3>Descripci&oacute;n del video</h3></a>
																    </div>-->
														 </article>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                            </div>

									<div class="gdlr-session-item-content-wrapper">
                                          <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:30 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Panelistas:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Jaime López Reyes</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director de la Escuela Judicial del Estado de México.
                                                            </div>
															<div class="session-speaker-list">
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Jesús Demetrio Cadena Montoya</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director General del Instituto de la Judicatura del Estado de Nuevo León. (Por confirmar)
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director de la Escuela Judicial del Estado de México.
                                                            </div>
															<div class="session-speaker-list">
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Luis Ernesto González González</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director de la Escuela de Estudios e Investigación Judicial del Estado de Guanajuato.
                                                            </div>
															<div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Moderadora:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Mónica Rocío Farfán García</a></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
										 <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Implementación de un modelo de Carrera Judicial.</h3>
                                                <div class="gdlr-session-item-excerpt">Panel</div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/zPmJ8q6uBQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																</div>
															   <div class="entry-block"></div>
															    <!--<div class="entry-title">
												                  <a href="eventsingle-page.html" title="Corporate Paper Meetup Event"><h3>Descripci&oacute;n del video</h3></a>
																    </div>-->
														 </article>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                       </div>

										<div class="gdlr-session-item-content-wrapper">
                                                <div class="gdlr-session-item-divider"></div>
                                                <div class="session-break-content">
                                                    <div class="session-break-info"><i class="fa fa-clock-o"></i>12:30 hrs. - 12:40 hrs.</div>
                                                    <h3 class="gdlr-session-break-title">Receso</h3></div>
                                                <div class="clear"></div>
                                         </div>

										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:40 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Jordi Ferrer Beltrán</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director del Máster sobre Razonamiento Probatorio de la Universidad de Girona, España.
                                                            </div>
															<div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Moderadora:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra Mónica Rocío Farfán García</a></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
										 <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Sistemas de Justicia y Racionalidad.</h3>
                                                <div class="gdlr-session-item-excerpt">Conferencia</div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/zPmJ8q6uBQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																</div>
															   <div class="entry-block"></div>
															    <!--<div class="entry-title">
												                  <a href="eventsingle-page.html" title="Corporate Paper Meetup Event"><h3>Descripci&oacute;n del video</h3></a>
																    </div>-->
														 </article>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                            </div>

										<div class="gdlr-session-item-content-wrapper">
                                                <div class="gdlr-session-item-divider"></div>
                                                <div class="session-break-content">
                                                    <div class="session-break-info"><i class="fa fa-clock-o"></i>14:30 hrs. – 17:00 hrs.</div>
                                                    <h3 class="gdlr-session-break-title"> RECESO</h3></div>
                                                <div class="clear"></div>
                                         </div>

										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:40 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Jordi Ferrer Beltrán</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director del Máster sobre Razonamiento Probatorio de la Universidad de Girona, España.
                                                            </div>
															<div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Moderadora:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra Mónica Rocío Farfán García</a></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
										 <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Sistemas de Justicia y Racionalidad.</h3>
                                                <div class="gdlr-session-item-excerpt">Conferencia</div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/zPmJ8q6uBQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																</div>
															   <div class="entry-block"></div>
															    <!--<div class="entry-title">
												                  <a href="eventsingle-page.html" title="Corporate Paper Meetup Event"><h3>Descripci&oacute;n del video</h3></a>
																    </div>-->
														 </article>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                            </div>
						   </div>

                                    <!-- termina dia 1 -->
                                    <!-- Inicia dia 2 -->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-2">
                                        <div class="gdlr-session-item-content-wrapper">
                                          <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:00 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Panelistas:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. María Elena Ramírez Sánchez</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Jueza de la Ciudad de México
                                                            </div>
															<div class="session-speaker-list">
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Arturo Nahle García</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Magistrado Presidente del Tribunal Superior de Justicia del Estado de Zacatecas.
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director de la Escuela Judicial del Estado de México.
                                                            </div>
															<div class="session-speaker-list">
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Emmanuel Roa Rodríguez</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director del Instituto de Especialización Judicial del Estado de Michoacán.
                                                            </div>
															<div class="session-speaker-list">
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Vicente Solís Arana</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Profesor en la Facultad de Derecho de la Universidad Nacional Autónoma de México.
                                                            </div>
															<div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Moderadora:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra Mónica Rocío Farfán García</a></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
										 <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Retos de la Capacitación Judicial ante la expedición del Código Nacional de Procedimientos Civiles.</h3>
                                                <div class="gdlr-session-item-excerpt">Panel</div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/zPmJ8q6uBQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																</div>
															   <div class="entry-block"></div>
															    <!--<div class="entry-title">
												                  <a href="eventsingle-page.html" title="Corporate Paper Meetup Event"><h3>Descripci&oacute;n del video</h3></a>
																    </div>-->
														 </article>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                       </div>



										<div class="gdlr-session-item-content-wrapper">
                                                <div class="gdlr-session-item-divider"></div>
                                                <div class="session-break-content">
                                                    <div class="session-break-info"><i class="fa fa-clock-o"></i>12:20 hrs. –12:30 hrs.</div>
                                                    <h3 class="gdlr-session-break-title"> RECESO</h3></div>
                                                <div class="clear"></div>
                                         </div>


                                        <div class="gdlr-session-item-content-wrapper">
                                          <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:30 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Panelistas:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. José Luis Chacón Rodríguez</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director del Instituto de Formación y Actualización Judicial del Poder Judicial del Estado de Chihuahua.
                                                            </div>
															<div class="session-speaker-list">
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Jesús Ignacio Escobedo Correa</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director de la Escuela Judicial por Poder Judicial del Estado de Jalisco (Por confirmar).
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director de la Escuela Judicial del Estado de México.
                                                            </div>
															<div class="session-speaker-list">
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Gerardo García Silva</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director del Instituto de Profesionalización e Investigaciones Jurídicas del Poder Judicial del Estado de Hidalgo.
                                                            </div>
															<div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Moderadora:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra Mónica Rocío Farfán García</a></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
										 <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Mecanismos para el Fortalecimiento de la Justicia Laboral a través de la Capacitación Judicial.</h3>
                                                <div class="gdlr-session-item-excerpt">Panel</div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/zPmJ8q6uBQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																</div>
															   <div class="entry-block"></div>
															    <!--<div class="entry-title">
												                  <a href="eventsingle-page.html" title="Corporate Paper Meetup Event"><h3>Descripci&oacute;n del video</h3></a>
																    </div>-->
														 </article>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                       </div>


                                        <div class="gdlr-session-item-content-wrapper">
                                                <div class="gdlr-session-item-divider"></div>
                                                <div class="session-break-content">
                                                    <div class="session-break-info"><i class="fa fa-clock-o"></i>14:20hrs.  – 14:30 hrs.</div>
                                                    <h3 class="gdlr-session-break-title"> CLAUSURA </h3>
											<div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Raúl Carrillo del Muro</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director de la Escuela Judicial del Poder Judicial de Zacatecas y Secretario General de la Red de Escuelas Judiciales de los Estados de la República Mexicana.
                                                            </div>

                                                        </div>
											</div>

                                                <div class="clear"></div>


                                         </div>
									 </div>
                                     <!-- termina dia 2 -->


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

                                        <h1 style="font-size: 20px;"class="gdlr-item-title gdlr-skin-title gdlr-skin-border">SEMBLANZA DE LOS PONETES</h1>
                                    </div>
                                </div>
                            <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_2_esc_jud/red/images/img_ponentes/Arturo_Nahle_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DR. ARTURO NAHLE GARCÍA</h3>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-16>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Nació en la Ciudad de Río Grande, Zacatecas el 29 de agosto de 1961. Licenciado en Derecho por la UNAM, con Maestría en Juicios Orales y Doctorado en Administración Pública. En Zacatecas ha sido Secretario General de Gobierno (2000- 2003), Procurador General de Justicia (2010-2015) y Magistrado del TSJZAC (2016-2021); Actualmente es Presidente de dicho Tribunal.<br> En la Federación fue Diputado Federal (2003-2006) y Subsecretario de Estado (2015).<br> También fue Secretario y Coordinador General Jurídico del Gobierno del Estado de Hidalgo (1993-1998) y en el Gobierno de la Ciudad de México fue Subsecretario de Enlace Legislativo (2007-2009).<br> Consultor, Catedrático en diversas instituciones de Educación Superior y Editorialista en diversos medios de comunicación locales y nacionales.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-16 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_2_esc_jud/red/images/img_ponentes/Gerardo_Garcia_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">GERARDO GARCÍA SILVA </h3>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-17>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    DISTINCIONES:<br>


                                                                    Investigador honorario sistema estatal de investigadores del Consejo estatal de Ciencia y tecnología del estado de Quintana Roo.
                                                                    Miembro fundador del Claustro de Doctores de la Facultad de Derecho de la UNAM (2017)
                                                                    Miembro del Consejo Académico del Centro de Estudios de Posgrado (CEP) (2017)
                                                                    Miembro del Sistema Nacional de Investigadores del Consejo Nacional de Ciencia y Tecnología, Nivel I. (2008)
                                                                    Capacitador certificado debido a sus méritos por la Secretaría Técnica del Consejo de Coordinación para la Implementación del Sistema de Justicia Penal. (2011)
                                                                    Director y fundador de las Clínicas de Justicia penal bajo el sistema acusatorio, en el Instituto Tecnológico de Estudios Superiores de Monterrey, Campus Ciudad de México y Santa Fe (2015).
                                                                    Miembro de la Red de especialistas en Seguridad Pública (2009).
                                                                    Miembro del Registro de Evaluadores Acreditados (RCEA) del Consejo Nacional de Ciencia y Tecnología (CONACYT) (2008).
                                                                    Miembro del Programa “Verano de la Investigación Científica” de la Academia Mexicana de Ciencias, A.C. (2008)
                                                                    Miembro del Padrón de Dictaminadores de la Dirección de Investigación del Instituto Nacional de Ciencias Penales (INACIPE) (2010)
                                                                    Miembro del Consejo Editorial de la Revista Amicus Curiae, de la Facultad de Derecho de la UNAM (2015)
                                                                    Miembro del Padrón de Dictaminadores de la Revista Multidisciplina, de la FES Acatlán, UNAM (2016)
                                                                    Miembro de la cartera de árbitros del Boletín Mexicano de Derecho Comparado del Instituto de Investigaciones Jurídicas de la UNAM (2012).<br>
																	EXPERIENCIA:<br> DIRECTOR DEL INSTITUTO DE PROFESIONALIZACIÓN E INVESTIGACIONES


                                                                    JURÍDICAS DEL PODER JUDICIAL DEL ESTADO DE HIDALGO (2021- )



                                                                    CONSULTOR EN MATERIA PENAL, PROCESAL PENAL Y SEGURIDAD, DOCENTE E INVESTIGADOR A NIVEL POSGRADO, CAPACITADOR CERTIFICADO Y EVALUADOR INDEPENDIENTE (2013-)


                                                                    DIRECTOR ACADÉMICO EN EL INSTITUTO MEXICANO DEL JUICIO ORAL, CONSULTORÍA Y CAPACITACIÓN, S.C. /IMEJO, S.C.) (2010-2013)


                                                                    PROFESOR INVESTIGADOR, EN EL INSTITUTO DE CIENCIAS PENALES (INACIPE) (2009-2010)


                                                                    DIRECTOR JURÍDICO EN EL INSTITUTO DE CIENCIAS PENALES (INACIPE) (2008-2009)


                                                                    DIRECTOR DE INVESTIGACIÓN EN EL INSTITUTO DE CIENCIAS PENALES (INACIPE) (2008-2009)


                                                                    DIRECTOR DE CAPACITACIÓN EN EL INSTITUTO NACIONAL DE CIENCIAS PENALES (INACIPE) (2003-2006)


                                                                    DIRECTOR DE SERVICIOS A LA COMUNIDAD EN LA PROCURADURÍA GENERAL DE LA REPUBLICA, (PGR) (1977-2000)


                                                                    ABOGADO LITIGANTE (1995-1997)


                                                                    ANALISTA JURÍDICO Y COORDINADOR DE ASUNTOS INDÍGENAS EN LA COMISIÓN NACIONAL DE LOS DERECHOS HUMANOS (1933-1995)<br>


                                                                    DIRECTOR DE OPERACIONES Y CONVENIOS EN LA PROCURADURÍA GENERAL DE LA REPUBLICA, (PGR) (2000-2003) <br> FORMACIÓN:<br>Doctor en Derecho, con mención honorífica por la División de Estudios de Posgrado de la Universidad Nacional Autónoma de México (UNAM).
                                                                    Maestro en Ciencias Penales con Especialización en Ciencia Jurídico Penal, con mención honorífica por el Instituto Nacional de Ciencias Penales (INACIPE).
                                                                    Maestro en Derecho por la División de Estudios de Posgrado de la Universidad Nacional Autónoma de México (UNAM).
                                                                    Licenciado en Derecho por la Universidad Nacional Autónoma de México (UNAM).
                                                                    Ha cursado diversos diplomados de Formación de Profesores en Ética Jurídica (UNAM), en Amparo, Derecho Penal, Administración Pública (ULA), y Juicios Orales (INACIPE, CEJA, USAID, NITA, CALIFORNIA WESTERN SCHOOL OF LAW).
                                                                    Formó parte de la delegación mexicana que realizó una visita de estudio para conocer el sistema de justicia penal en el Reino Unido de la Gran Bretaña (BRITISH COUNCIL).<br> ACTIVIDADES ACADÉMICAS:<br> Ha impartido clases a nivel especialidad, maestría y doctorado en varias universidades del país, como la Universidad Nacional Autónoma de México (UNAM), el Instituto Nacional de Ciencias Penales (INACIPE), el Tecnológico de Monterrey, Campus Ciudad de México y Campus Santa Fe (ITESM CCM), Universidad Autónoma de Querétaro (UAQ), Universidad Autónoma del Noroeste (UANE), Instituto Mexicano del Juicio Oral, Consultoría y Capacitación, S.C. (IMEJO), Centro de Estudios de Actualización en Derecho (CEAD), Centro de Estudios de Posgrado (CEP), entre otras.<br> PUBLICACIONES:<br>“Mecanismos de auto protección permitidos en Derecho Penal: los “Offendicula”. Fundamentos, alcances y perspectivas”, Editorial académica española, 2017, registro N° 978-3-330-09197-9.
                                                                    La Constitución de 1917 y la reforma constitucional en materia de seguridad y justicia penal. Análisis del artículo 20 Constitucional, en “La Constitución Mexicana de 1917,
                                                                    100 años después, Coordinadores Vicente Fernández Fernández, Carlos Manuel Villabella Amengol y Juan Ramírez Marín, Editorial Porrúa, México, 2017, ISBN 978- 607-09-2612-9, pp. 213 a 241.
                                                                    “Estudio y Análisis del Código Nacional de Procedimientos Penales” (CD), bajo el registro de derechos de autor N° 03-2015070609490900-01.
                                                                    “Cadena de Custodia” (CD), en coautoría con Edward Charles Alexander Worrall González, bajo el registro de derechos de autor N° 03-2015-100111015600-01.
                                                                    “El nuevo sistema de justicia penal”, Editorial Porrúa, Segunda edición, México, 2014.
                                                                    “Antecedentes históricos del desarrollo de los sistemas procesales. Sistema acusatorio vs sistema inquisitivo”, capítulo dentro de la obra colectiva Impartición de Justicia en México en el Siglo XXI, Coordinador Vicente Fernández Fernández, Editorial Porrúa México-Tecnológico de Monterrey, México, 2011.
                                                                    “Derivaciones a tratamiento por mandato Ministerial y Judicial”, en Coautoría con Joahana Del Río Rebolledo, dentro de la obra colectiva Actualidades en Adicciones 2012, Libro 5 Adicciones y Grupos Específicos: Grupos Vulnerables y Personas en conflicto con la Ley, Secretaría de Salud Consejo Nacional Contra las Adicciones (CONADIC), México, 2012.
                                                                    Es coautor junto con la Mtra. Joahana Del Río Rebolledo del Volumen 1 de la Serie: “Manual del Litigante en el Nuevo Proceso Penal Acusatorio y el Juicio Oral en México”.
                                                                    Asimismo, cuenta con diversos artículos publicados en diferentes revistas especializadas como: Iter Criminis, Revista Mexicana de Justicia, Revista del Tribunal Superior de Justicia del Distrito Federal, Tribunal Superior de Justicia de Nuevo León, Revista de la Secretaría Técnica para la Implementación de la reforma constitucional, Revista del Instituto Federal de Defensoría Pública, Revista Mexicana de Justicia, Revista Derecho Penal Mínimo, Revista Defensa Penal, Jurípolis del Tec de Monterrey, entre otras.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-17 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_2_esc_jud/red/images/img_ponentes/Jordi_Ferrer_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DR. JORDI FERRER BELTRÁN</h3>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-18>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Jordi Ferrer Beltrán es profesor titular de filosofía del derecho de la Universidad de Girona (España) y Director de la Cátedra de Cultura Jurídica de esa misma universidad. Entre sus publicaciones más destacadas: Las normas de competencia.<br> Un aspecto de la dinámica jurídica (2000), Prueba y verdad en el derecho (2002), La valoración racional de la prueba (2007), junto a Jorge Rodríguez, Jerarquías normativas y dinámica de los sistemas jurídicos (2011) y Motivación y racionalidad de la prueba (2016).<br> Ha coeditado la serie de tres volúmenes Law, Politics, and Morality: European Perspectives (2003, 2006 y 2007), La laicidad desde el Derecho (2010), The Logic of Legal Requirements: Essays on Legal Defeasibility (2011), El realismo jurídico genovés (2011) y Seguridad jurídica y democracia en Iberoamérica (2015). También ha publicado un buen número de artículos en revistas como Rechtstheorie, Associations, Analisi e diritto, Ragion Pratica, Legal Theory, Law and Philosophy, Teoria Politica e Isonomía, entre otras.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-18 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_2_esc_jud/red/images/img_ponentes/Rodolfo_L_Vigo_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Rodolfo Luis Vigo</h3>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-19>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Abogado, Licenciado en Ciencias Políticas y Doctor en Ciencias Jurídicas y Sociales, se desempeñó como Juez de la Cámara en lo Civil y Comercial (1984-1988) y Ministro de la Corte Suprema de Justicia de la Provincia de Santa Fe, Argentina (1988-2007), Presidente de la Junta Federal de Cortes Supremas y Superiores Tribunales de las provincias argentinas (1994- 1997),  Premio Konex en el rubro jueces (1998),  destacado Profesor y conferencista en distintas Universidades en América y Europa,  miembro del Consejo Editorial de distintas revistas jurídicas, Co-redactor junto a Manuel Atienza del Código Modelo de Ética Judicial para Iberoamérica aprobado por la Cumbre Judicial Iberoamericana en 2006 y Primer Secretario Ejecutivo de la Comisión Iberoamericana de Ética Judicial (2006-2010),  Presidente de la Asociación Argentina de Filosofía del Derecho (2006-2010),  Miembro titular de la Academia Nacional de Derecho y Ciencias Sociales de Buenos Aires, y miembro correspondiente de la Academia de Derecho y Ciencias Sociales de Córdoba (Argentina) y de la Real Academia de Ciencias Morales y Políticas de España, se desempeñó también Director o Coordinador de distintos posgrados universitarios y publicaciones periódica, ha recibido Doctorados Honoris Causa y es Autor de más de veinticinco libros, destaca también en su trayectoria la Cátedra "Rodolfo Luis Vigo" creada en el 2010 por el Poder Judicial de Tabasco, México.<br>
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




                            <div class=clear></div>
                    </section>
                </div>
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
