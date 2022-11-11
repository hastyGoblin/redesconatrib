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
                        <a href=""> <img src="{!! asset('rede_3_est_jud/red/upload/logo_estadistica_judicial.png') !!}" alt=""> </a>
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
                                            <div class="gdlr-session-head-date">14 de noviembre de 2022</div>
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
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/1W5V9SnFjl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
																<div class="gdlr-session-item-excerpt">Moderadora:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. María Jacqueline Martínez Uriarte</a></div>
																<div class="gdlr-session-item-excerpt">Directora General de Gestión Judicial del Consejo de la Judicatura Federal. </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
                                               <h3 class="gdlr-session-item-title">Introducción a la sesión</h3>

											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/1W5V9SnFjl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
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
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Silvia Gabriela Ortiz Rascón</a></div>
																<div class="gdlr-session-item-excerpt">Secretaria de Estudio y Cuenta de la SCJN, en representación de la Ministra Yasmín Esquivel Mossa.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
                                               <h3 class="gdlr-session-item-title">INDICADORES CON PERSPECTIVA DE GÉNERO</h3>
												<div class="gdlr-session-item-excerpt">Ponencia Magistral</div>
											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/1W5V9SnFjl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                                 </div>
                                            </div>
                                          <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:45  hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Ma Fabiola Alanís Sámano</a></div>
																<div class="gdlr-session-item-excerpt">Comisionada Nacional para Prevenir y Erradicar la Violencia contra las Mujeres (CONAVIM).</div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">ESTRUCTURA ACTUAL Y HORIZONTES DEL BANCO NACIONAL DE DATOS E INFORMACIÓN SOBRE CASOS DE VIOLENCIA CONTRA LAS MUJERES (BANAVIM)</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/1W5V9SnFjl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:00 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Arístides Rodrigo Guerrero García</a></div>
                                                               <div class="gdlr-session-item-excerpt">Coordinador de la Comisión de Protección de Datos Personales del Sistema Nacional de Transparencia.</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">PROTECCIÓN DE DATOS PERSONALES EN LAS SENTENCIAS</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/1W5V9SnFjl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class=gdlr-session-item-content-wrapper>
                                                <div class=gdlr-session-item-divider></div>
                                                <div class=session-break-content>
                                                    <div class=session-break-info><i class="fa fa-clock-o"></i>11:15 a 11:30 hrs.</div>
                                                    <h3 class="gdlr-session-break-title">Receso</h3></div>
                                                <div class=clear></div>
                                            </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:30 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Valeria Parada Sánchez</a></div>
                                                               <div class="gdlr-session-item-excerpt">Coordinadora de Información Pública y Estadística del Poder Judicial de la Ciudad de México.</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">RETOS Y AVANCES DE LOS TRIBUNALES SUPERIORES DE JUSTICIA PARA LA ELABORACIÓN DE VERSIONES PÚBLICAS DE SENTENCIAS.</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/1W5V9SnFjl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:45 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. José Guillermo Castillo Koschnick</a></div>
                                                                <div class="gdlr-session-item-excerpt">Director General Adjunto de Políticas y Censos Nacionales de Gobierno del Instituto Nacional de Estadística y Geografía (INEGI).</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">RETOS PARA LA RECOPILACIÓN DE INFORMACIÓN ESTADÍSTICA A TRAVÉS DE LA ENTRADA EN VIGOR DE LA REFORMA EN MATERIA DE JUSTICIA LABORAL.</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/1W5V9SnFjl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:00 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Jesús Contreras Martínez</a></div>
                                                                <div class="gdlr-session-item-excerpt">Director General de Normatividad y Asistencia a Entidades Federativas de la Secretaría del Trabajo y Previsión Social.
																</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">ESTADÍSTICAS DEL NUEVO SISTEMA DE JUSTICIA LABORAL.</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/1W5V9SnFjl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:15 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponentes:</div>

                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Martha Beatriz Vargas Rojas</a></div>
                                                                <div class="gdlr-session-item-excerpt">Directora de Estadística de la Presidencia del Poder Judicial de la Ciudad de México.</div>
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Ing. Hernán Sánchez Zúñiga</a></div>
                                                                <div class="gdlr-session-item-excerpt">Jefe de Unidad Departamental de Apoyo Tecnológico para la Generación de Estadística del Poder Judicial de la Ciudad de México.</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">IMPLEMENTACIÓN DEL SISTEMA DE INFORMACIÓN ESTADÍSTICA DE LAS ENTIDADES FEDERATIVAS (SIEEFE).</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/1W5V9SnFjl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class=gdlr-session-item-content-wrapper>
                                                <div class=gdlr-session-item-divider></div>
                                                <div class=session-break-content>
                                                    <div class=session-break-info><i class="fa fa-clock-o"></i>12:30 a 12:45 hrs.</div>
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
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-medium">SEMBLANZA DE LOS PONENTES</h3>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Valeria_Parada.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lic. Valeria Parada Sánchez
														 </h3>
														<div class="gdlr-session-item-excerpt">Coordinadora de la Red Nacional de Estadísticas Judiciales de la CONATRIB.
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-16>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    COORDINADORA DE LA RED NACIONAL DE ESTADÍSTICAS JUDICIALES DE LA CONATRIB  Y COORDINADORA DE INFORMACIÓN PÚBLICA Y ESTADÍSTICA DEL PODER JUDICIAL DE LA CIUDAD DE MÉXICO<br> Licenciada en Derecho por la Universidad Nacional Autónoma de México (UNAM), se ha especializado en Derecho Administrativo y Responsabilidad de Servidores Públicos, así como en Protección de Datos Personales.<br> En el sector privado fue Coordinadora de Licencias y Permisos de DHL Express (Región México).<br>En el sector público se ha desempeñado como abogada en la Contraloría General del Gobierno del Distrito Federal (GDF) ; Jefa de Unidad Departamental de Amparos y de lo Contencioso, Directora Jurídica de la Delegación Xochimilco; ha sido también Titular de la Dirección General Jurídica y de Gobierno de la Delegación Xochimilco, y Directora de Servicios al Personal en la Secretaría de Desarrollo Agrario, Territorial y Urbano (SEDATU); ha colaborado en la Coordinación de asesores de la Consejería Jurídica y de Servicios Legales de la Ciudad de México, fungiendo como enlace ante la comisión de Derechos Humanos.<br> En el Consejo de la Judicatura Federal, se desempeñó como Oficial Administrativo en el Juzgado 12° de Distrito en Materia Administrativa de la Ciudad de México y, en el Consejo de la Judicatura de la Ciudad de México, de abril de 2019 a la fecha, se ha desempeñado como Coordinadora de Información Pública y Estadística del Poder Judicial de la Ciudad de México, teniendo a cargo la representación de la Red Nacional de Estadísticas Judiciales de la Comisión Nacional de Tribunales Superiores de Justicia de los Estados Unidos Mexicanos (CONATRIB).<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-16 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Aristedes_Rodrigo_Guerrero.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. ARÍSTIDES RODRIGO GUERRERO GARCÍA</h3>
														<div class="gdlr-session-item-excerpt">Coordinador de la Comisión de Protección de Datos Personales del Sistema Nacional de Transparencia.
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-17>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Doctor en Derecho por la Facultad de Derecho de la Universidad Nacional Autónoma de México, maestro en Derecho, Especialista en Derecho Constitucional y Licenciado en Derecho, grados obtenidos conmención honorífica.<br> Cuenta con un Máster en Derecho Parlamentario y Estudios Legislativos por la Universidad Complutense de Madrid y un curso avanzado sobre Protección de Datos Personales, impartido por la misma universidad y la Agencia Española de Protección de Datos, así como un curso de Metodología de la Comparación Jurídica por la Universidad de Bolonia, Italia.<br> En el ámbito docente se ha destacado como profesor de la Facultad de Derecho de la UNAM donde imparte diversas asignaturas como Poder Judicial, Estructura Política del Estado Mexicano, Derecho Constitucional, Derecho Electoral y Derechos. Fue acreedor de la Medalla al Mérito Docente 2019, profesor José Santos Valdés otorgada por el Congreso de la Ciudad de México.<br> El 18 de diciembre de 2018 fue designado por el Pleno del Congreso de la Ciudad de México para desempeñar el cargo de Comisionado Ciudadano del Instituto de Transparencia, Acceso a la Información Pública, Protección de Datos Personales y Rendición de Cuentas de la Ciudad de México (INFO CDMX) y posteriormente, el 15 de diciembre del 2021, fue electo como Comisionado Presidente del Instituto.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-17 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Jose_Guillermo_Castillo.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtro. José Guillermo Castillo Koschnick</h3>
														<div class="gdlr-session-item-excerpt"> Director General Adjunto de Políticas y Censos Nacionales de Gobierno del Instituto Nacional de Estadística y Geografía (INEGI).
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-18>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Es Director General Adjunto de Políticas y Censos Nacionales de Gobierno en la Dirección General de Estadísticas de Gobierno, Seguridad Pública y Justicia en el Instituto Nacional de Estadística y Geografía (INEGI). Ha sido consultor en el Centro de Excelencia para Información Estadística de Gobierno, Seguridad Pública, Victimización y Justicia de la Oficina de Naciones Unidas contra la Droga y el Delito, así como para el Fondo de Naciones Unidas para la Infancia (UNICEF). Es Maestro en Ciencias del Crimen por la Universidad del Colegio de Londres (UCL) y Licenciado en Ciencia Política y Relaciones Internacionales por el Centro de Investigación y Docencia Económicas (CIDE). Ha sido premiado por el Centro Latinoamericano de Administración para el Desarrollo (CLAD) y por el programa Chevening, financiado por la Oficina de Asuntos Exteriores y de la Mancomunidad de Reino Unido. Entre sus principales temas de interés se encuentran análisis geográfico del delito, violencia contra niñas, niños y adolescentes, y prevención e inteligencia criminal.
<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-18 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Maria_Jacqueline_Martinez.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. María Jacqueline Martínez Uriarte</h3>
														<div class="gdlr-session-item-excerpt">Directora General de Gestión Judicial del Consejo de la Judicatura Federal.
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-19>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Es licenciada en Ciencias Sociales por el Instituto Tecnológico Autónomo de México (ITAM) y actualmente es titular de la Dirección General de Gestión Judicial del Consejo de la Judicatura Federal. <br>Cursó el Master Internacional en Sociología Jurídica del Instituto Internacional de Sociología Jurídica de Oñati, España. <br> En el Poder Judicial Federal se ha desempeñado en diversos cargos por más de 13 años, entre los que destacan Jefa de la Unidad de Relaciones Institucionales (SCJN), Directora General de Derechos Humanos, Equidad de Género y Asuntos Internacionales (CJF) y Directora General de Estadística Judicial (CJF). <br> Fue investigadora asociada del Centro de Investigación para el Desarrollo, A.C. (CIDAC) y Directora General Adjunta de la Academia Diplomática del Instituto Matías Romero en la Secretaría de Relaciones Exteriores.<br> En 2015 fue Vocal del Comité Técnico Especializado de Información con Perspectiva de Género (CTEIPG) del Sistema Nacional de Información Estadística y Geográfica (SNIEG) y en 2001 Consultora de la Agencia de los Estados Unidos para el Desarrollo Internacional (US-AID) para el análisis del proceso de democratización en México.<br>

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Alberto_Menendez.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Alberto Menéndez Vázquez </h3>
														<div class="gdlr-session-item-excerpt">Director de Estadísticas. Unidad de Enlace para la Reforma al Sistema de Justicia Laboral
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-20>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Economista egresado de Licenciatura y Maestría en la Universidad de La Habana; Doctor en Políticas Públicas egresado del CIDE, con especialidad en Política Económica.<br> Profesor-Investigador en la Facultad de Economía de la Universidad de La Habana, en materias de Teoría e Historia del Pensamiento Económico. Directivo de la revista académica Economía y Desarrollo. <br>Asistente de Docencia e Investigación de la División de Economía del CIDE en temas de Regulación y Competencia Económica, específicamente en el sector energético.<br> Funcionario público del Gobierno de México y de la Ciudad de México en temas de mercado, economía y justicia laboral.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-20 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Martha_Beatriz_Vargas.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRA. MARTHA BEATRIZ VARGAS ROJAS</h3>
														<div class="gdlr-session-item-excerpt">Directora de Estadística de la Presidencia.
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-21>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Es licenciada en Derecho por la Universidad Nacional Autónoma de México y Maestra en Criminología por la Universidad de Barcelona. Cuenta con estudios en Estadística y ha realizado diversos cursos internacionales y diplomados en materia del sistema de justicia penal, estadística e indicadores. <br>Se ha desempeñado como Coordinadora de monitoreo y evaluación del Programa para la Convivencia Ciudadana de las ciudades de Tijuana, Monterrey y Ciudad Juárez. De 2007 a 2012, se desempeñó como Directora de investigaciones criminológicas en la Dirección General de Política y Estadística Criminal de la entonces Procuraduría General de Justicia del DF. <br> En el sector público y como consultora independiente, ha coordinado y participado en múltiples proyectos estadísticos y de indicadores de derechos humanos y género, así como en el diseño de estudios, marcos conceptuales, encuestas y metodologías de evaluación y seguimiento para programas de prevención de la violencia y del delito, sistema de justicia y del sistema penitenciario. <br> Actualmente es Directora de Estadística de la Presidencia del Tribunal Superior de Justicia de la Ciudad de México. <br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-21 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Hernan_Sanchez.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Ing. Hernán Sánchez Zúñiga</h3>
														<div class="gdlr-session-item-excerpt">Jefe de Unidad Departamental de Apoyo Tecnológico para la Generación de Estadística.
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-22>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Candidato a maestro en electrónica y computación e Ingeniero en computación por la Universidad Tecnológica de la Mixteca.<br> Experiencia laboral:<br> Profesional Ejecutivo de Servicios Especializados de 2011 a 2015 y Jefe de Unidad Departamental de Apoyo Tecnológico para la Generación de Estadística de 2015 a la fecha en la Dirección de Estadística de la Presidencia del TSJCDMX. <br>Entre las actividades realizadas se encuentra el desarrollo, administración y soporte de sistemas de información estadística, administración de servidores, administración de bases de datos y explotación de información. Entre los desarrollos realizados se listan:<br> Sistema de Información Estadística de las Entidades Federativas (SIEEFE)<br> Módulos de Captura de Medidas de Protección.<br> Directorio Único Institucional del TSJCDMX y del CJCDMX.<br> Sistema de Información Estadística Familiar Oral (SIEFO).<br> Portal de la Dirección de Estadística del TSJCDMX.<br> Monitor de Estadística Penal (MEP).<br> Generador Automático de Informes INEGI.<br> Administrador del SIEMP.<br> Sistema del Pleno del CJCDMX.<br>Publicaciones<br> Desarrollo de una herramienta de autoevaluación para agilizar el tiempo de adopción de la Norma NMX-059-NYCE-2005.<br>Coloquio Nacional de Investigación en Ingeniería de Software y Vinculación Academia-Industria 2010. (CoNIIS). León, Gto.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-22 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Fabiola_Alanis.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DRA. MA FABIOLA ALANÍS SÁMANO</h3>
														<div class="gdlr-session-item-excerpt">Comisionada Nacional para Prevenir y Erradicar la Violencia contra las Mujeres (CONAVIM).
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-23>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Es doctora en ciencias sociales en la línea de relaciones de poder y cultura política por la Universidad Autónoma Metropolitana Unidad Xochimilco, maestra en ciencia política por la Universidad Laval de Québec, Canadá y licenciada en economía por la Universidad Michoacana de San Nicolás de Hidalgo.<br> Se ha especializado en políticas públicas con perspectiva de género a partir de diversas experiencias y modelos latinoamericanos.<br> Sus temas de mayor interés en el campo de la investigación y la docencia son:<br> Mujeres en conflicto armado no internacional, mujeres y seguridad, políticas públicas con perspectiva de género, Estado y relaciones de poder.<br> Se autodefine como una militante de izquierda y feminista. Desde diversos espacios de la administración pública ha sido impulsora de programas y acciones en beneficio de las mujeres, las niñas y los niños. <br>Diseñó el Programa MujerArte y promovió la incorporación productiva de las mujeres indígenas desde el Servicio del Empleo de la STPS de Michoacán.<br> Participó en el diseño y operación del Programa “Palabra de Mujer”, reconocido por el PNUD como una experiencia exitosa de inclusión financiera en la región latinoamericana y del Caribe.<br> Promovió la elaboración del Protocolo Integral para la atención a niñas, niños y adolescentes en orfandad por feminicidio, emitido por el Gobierno de la República a través del SNDIF-CONAVIM e INMUJERES.<br> Es co-diseñadora del Programa Mujeres Constructoras de Paz (MUCPAZ), dirigido por el INMUJERES con el financiamiento del SESNSP del Gobierno de México.<br> El Programa se inserta en el Resolutivo 1325 del Consejo de Seguridad de la ONU/ Mujeres, Paz y Seguridad.<br>

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Jesus_Contreras.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">LIC. JESÚS CONTRERAS MARTÍNEZ</h3>
														<div class="gdlr-session-item-excerpt">Director General de Normatividad y Asistencia a Entidades Federativas de la Secretaría del Trabajo y Previsión Social.
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-24>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Abogado por la Escuela Libre de Derecho. En el sector privado fue Director Editorial de la revista El Mundo del Abogado y coordinador editorial de la revista Foro Jurídico.<br> En el sector público se ha desempeñado como Jefe de Departamento en la Fiscalía Especializada para la Atención de Delitos Electorales de la Procuraduría General de la República (FEPADE); Coordinador de Proyecto, en el entonces Fondo Nacional de Apoyo a Empresas en Solidaridad (FONAES); Subdirector de área y Director de carrera judicial e investigación en el Instituto de Estudios Judiciales del Tribunal Superior de Justicia de la Ciudad de México (CDMX); Titular de la Unidad de Supervisión de Medidas Cautelares y Suspensión Condicional del Proceso de la CDMX.<br> En la Secretaría del Trabajo y Previsión Social se ha desempeñado como Director General Adjunto de Evaluación, Estadística y Vinculación, así como Director General de Normatividad y Difusión en la Unidad de Enlace para la Reforma al Sistema de Justicia Laboral. Actualmente es Director General de Normatividad y Seguimiento a Entidades Federativas.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-24 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Silvia_Gabriela_Ortiz.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Silvia Gabriela Ortiz Rascón</h3>
														<div class="gdlr-session-item-excerpt">Secretaria de Estudio y Cuenta de la SCJN, en representación de la Ministra Yasmín Esquivel Mossa.
                                                        </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-25>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Lugar y fecha de nacimiento: 27 de diciembre de 1959 en la Ciudad de México.<br>Formación Académica: <br>Escuela Libre de Derecho (1978 – 1983), con la tesis profesional “La responsabilidad de los Servidores Públicos y el Fuero Constitucional”, habiendo recibido mención especial por el jurado examinador. Curso de Postgrado, Universidad Carlos III de Madrid “Problemas Actuales de los Derechos Fundamentales y Transformaciones del Estado” (2006).<br> Experiencia Profesional:<br> En la Suprema Corte de Justicia de la Nación como Secretaria de Estudio y Cuenta comisionada a las ponencias de las señoras Ministras Margarita Beatriz Luna Ramos (diciembre 2010-febrero de 2018) y Yasmín Esquivel Mossa (marzo 2018 a la fecha). <br> Escuela Libre de Derecho en la que se desempeñó como  Secretaria General a cargo de las áreas académica y de administración (agosto 2008– diciembre 2010). <br>Tribunal Electoral del Poder Judicial de la Federación como Secretaria General de Acuerdos (nov. 2006 – sept. 2007); Coordinadora en Ponencia (octubre 2005 – octubre 2006); Coordinadora General de Asesores de la Presidencia (2004-2006), Secretaria de Estudio y Cuenta (2000-2006), Secretaria Auxiliar (2996-2000). <br> Tribunal Superior de Justicia del Distrito Federal teniendo el cargo de Secretaria Proyectista de la Sexta Sala Civil (mayo 1993 – mayo 1996). Así también ocupó diversos cargos en la Secretaría de Comercio y Fomento Industrial, y en la Secretaría de Hacienda y Crédito Público, Dirección General De Seguros y Valores.<br> Profesora titular por oposición de la Cátedra de Derecho Electoral en la Escuela Libre de Derecho desde 2012.<br>Participación como congresista y en cursos relacionados con derecho electoral: Como docente en el curso de preparación para el Proceso Electoral Federal 2002-2003, Tribunal Electoral del Poder Judicial de la Federación. Como asistente al III curso de formación judicial electoral México-España (2002), con la coautoría del tema “Democracia interna de los partidos políticos”, presentado en dicho foro. Como congresista en el XII congreso mundial de derecho procesal (2003).<br> Otros:<br>Participante en el proceso de selección de Magistrados para integrar la Sala Superior del Tribunal Electoral del Poder Judicial de la Federación, habiendo sido seleccionada por votación unánime como aspirante por la Suprema Corte de Justicia de la Nación, así como integrando una de las seis ternas que aprobó el Senado de la República para la designación definitiva.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-25 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>

												<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail></div>
                                                    <div class=gdlr-speaker-item-content>
                                                       <div class=gdlr-lightbox-form id=gdlr-form-22>

                                                        </div>

                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail></div>
                                                    <div class=gdlr-speaker-item-content>
                                                       <div class=gdlr-lightbox-form id=gdlr-form-22>

                                                        </div>

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
