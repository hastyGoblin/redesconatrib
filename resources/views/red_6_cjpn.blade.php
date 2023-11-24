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
                        <a href=""> <img src="rede_6_cjpn/red/images/logo_cooperacion.png" alt=""> </a>
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
                                {{-- CIERRE DE SESIÓN --}}
                                <li class="menu-item">
                                    <a class="dropdown-item" href=""
                                       onclick="regLogout();event.preventDefault();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </nav>
                        {{-- CONSTANCIA --}}
                        @if ($activo==1)
                            <div class="" style="margin-bottom: 30px;top:198px;right:280px;position: absolute;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                                <div class=gdlr-speaker-item-content>
                                                    <div class=gdlr-lightbox-form id=gdlr-form-200>
                                                        <div class=gdlr-paypal-form-wrapper>
                                                            <form method="POST" action="{{ route('descargaConstancia') }}" target="_blank">
                                                                @csrf
                                                                <h3>Si encuentra alg&uacute;n error en su nombre por favor de hacer la corrección en los siguientes campos: </h3>
                                                                <input style="font-size: 14px;font-family: ariel; color:black!important;" name="nombre" id="nombre" value="{{$nombre}}" style="text-transform: uppercase;" maxlength="50">
                                                                <h5>Nombre</h5>
                                                                <input style="font-size: 14px;font-family: ariel; color:black!important;" name="appat" id="appat" value="{{$appat}}" style="text-transform: uppercase;" maxlength="50">
                                                                <h5>Apellido Paterno</h5>
                                                                <input style="font-size: 14px;font-family: ariel; color:black!important;" name="apmat" id="apmat" value="{{$apmat}}" style="text-transform: uppercase;" maxlength="50">
                                                                <h5>Apellido Materno</h5>
                                                                <input type="hidden" name="iduser" id="iduser" value="{{$id_user}}">
                                                                <input type="hidden" name="idred" id="idred" value="{{$idred}}">
                                                                <br>
                                                                <input type="submit" name="btncons" id="btncons">
                                                            </form>
                                                        </div>
                                                    </div>
                                                        <div><a style="font-size: 11px;text-transform: uppercase;font-weight: 800;letter-spacing: 2px;color:#8e8e8e !important;font-family: Raleway;" href=#gdlr-form-200 data-rel=fancybox data-fancybox-type=inline>Descarga Constancia</a></div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
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
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">14 a Reunión de  la Red Mexicana de</h4>
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large"> Cooperación Judicial  para la Protecci&oacute;n de la Ni&ntilde;ez </h4>
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
                                                    <div class="testimonial-info"><span class="testimonial-author gdlr-skin-link-color">Integrantes de la Red</span><span class="testimonial-position gdlr-skin-info"><span> </span></span>
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
									
									<br>
									<br>
									<div class="gdlr-session-thumbnail-wrapper">
                                        <a href="{{ URL::asset('/rede_6_cjpn/red/images/Programa_Red_Ninez_2023.pdf') }}" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver Programa Completo PDF</button></a>
                                                    
                                   </div>
                                </div>
                            <div class="session-item-wrapper" style="margin-bottom: 75px;">
                                <div class="gdlr-session-item gdlr-tab-session-item gdlr-item">
                                    <div class="gdlr-session-item-head">
                                        <div class="gdlr-session-item-head-info gdlr-active" data-tab="gdlr-tab-1">
                                            <div class="gdlr-session-head-day">D&iacute;a 1</div>
                                            <div class="gdlr-session-head-date">28 de Noviembre de 2023</div>
                                        </div>
                                        <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-2">
                                            <div class="gdlr-session-head-day">D&iacute;a 2</div>
                                            <div class="gdlr-session-head-date">29 de Noviembre de 2023</div>
                                        </div>
										 <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-3">
                                            <div class="gdlr-session-head-day">D&iacute;a 3</div>
                                            <div class="gdlr-session-head-date">30 de Noviembre de 2023</div>
                                        </div>
									<div class="clear"></div>
                                    </div>

                                    <!-- inicia dia -->
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
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/nOR3IrqcOrM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:05  hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Oscar Gregorio Cervera Rivero</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Magistrado de la Segunda Sala Familiar del Poder Judicial de la Ciudad de México. </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia magistral</div>
                                                <h3 class="gdlr-session-item-title">Entender el diseño de la Convención, facilita su cumplimiento</h3>
												
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
											<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=m6e635f44b888a3d203106306d7e3602c"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                           </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:00  hrs.</div>
                                                    <div class="session-info session-speaker">
                                                   <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. María Margarita Gallegos López</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt"> </div>Jueza Séptimo de lo Familiar de la Ciudad de México, con especialidad en Restitución Internacional de Menores y Adopción Internacional.
                                                   </div>
												 <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Claudia Sierra Martínez</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt"> </div>Subdirectora de Restitución y Custodia Internacional de Menores de la SRE.
                                                   </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia</div>
                                                <h3 class="gdlr-session-item-title">Restitución Internacional en el Código Nacional de Procedimientos Civiles y Familiares</h3>
												
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=m6e635f44b888a3d203106306d7e3602c"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                           </div>
										
                                  </div>
                                 <!-- termina dia -->
									
								 <!-- inicia dia -->
									
                                    <div class="gdlr-session-item-tab-content gdlr-tab-2">
                                        
                                       <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:00  hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Fernando Rangel Ramírez</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Magistrado del Décimo Primer Tribunal Colegiado en materia Civil del Primer Circuito de la Ciudad de México. </div>
                                                        </div>
														
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia magistral</div>
                                                <h3 class="gdlr-session-item-title">Comentarios sobre la estructura y sentencia en el juicio de divorcio.</h3>
												
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=m6e635f44b888a3d203106306d7e3602c"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                           </div>
										
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:15  hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. José Roberto de Jesús Treviño Sosa</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Juez de lo Familiar en retiro del estado de Nuevo León y Coordinador de Fiscales Adscritos a los juzgados de lo Civil y Familiar de la Fiscalía del estado de Nuevo León.</div>
                                                        </div>
														
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia</div>
                                                <h3 class="gdlr-session-item-title">Acogimiento Familiar</h3>
												
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=m6e635f44b888a3d203106306d7e3602c"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                          </div>
										
							 </div>
									
									     <!-- termina dia -->
										 <!-- inicia dia -->
									
									
                                    <div class="gdlr-session-item-tab-content gdlr-tab-3">
                                        
                                       <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:00  hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Juan Carlos Ortega Castro</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Magistrado del Segundo Tribunal Colegiado en materia Civil del Segundo Circuito de Toluca, Estado de México.</div>
                                                        </div>
														
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia Magistral</div>
                                                <h3 class="gdlr-session-item-title">Derecho al cuidado y su impacto en los procedimientos familiares</h3>
												
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=m6e635f44b888a3d203106306d7e3602c"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
														      </div>
                                                    </div>
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
																<div class="session-speaker-list-item"><a>Ponente:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Juan Miguel Morales Monter</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Juez Quinto de lo Familiar de la Ciudad de México con Especialidad en Restitución Internacional de Menores y Adopción Internacional.</div>
                                                        </div>
														
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia</div>
                                                <h3 class="gdlr-session-item-title">Indemnización en los casos de violencia familiar</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=m6e635f44b888a3d203106306d7e3602c"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                          </div>
										
										
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:45 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente: TSJCDMX</a></div>
																
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Oscar Gregorio Cervera Rivero</a></div>
																<div class="gdlr-session-item-excerpt">Magistrado de la Segunda Sala Familiar del TSJCDMX.</div>
                                                            </div>
															<div class="session-speaker-list">
																
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. María Margarita Gallegos López</a></div>
																<div class="gdlr-session-item-excerpt">Jueza Séptimo de lo Familiar de la Ciudad de México, con especialidad en Restitución Internacional de Menores y Adopción Internacional.</div>
                                                            </div>
															
															<div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente: Secretaría de Relaciones Exteriores</a></div>
																
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Ministra María Noemí Hernández Téllez</a></div>
																<div class="gdlr-session-item-excerpt">Directora de Ayuda a mexicanos en el Extranjero de la Secretaría de Relaciones Exteriores.</div>
                                                            </div>
															<div class="session-speaker-list">
																
																
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Claudia Sierra Martínez</a></div>
																<div class="gdlr-session-item-excerpt">Subdirectora de Restitución y Custodia Internacional de Menores de la Secretaría de Relaciones Exteriores.</div>
                                                            </div>
														
                                                        </div>
												 </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Mesa de Debate</div>
                                                <h3 class="gdlr-session-item-title">Tribunal Superior de Justicia de la Ciudad de México con la autoridad Central.</h3>
												
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=m6e635f44b888a3d203106306d7e3602c"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
														      </div>
                                                    </div>
											</div>
											
											
                                      <div class="clear"></div>
                                   </div>
									
								<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                   
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Oscar Gregorio Cervera Rivero</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Magistrado de la Segunda Sala Familiar del TSJCDMX y Coordinador Nacional de la Red Mexicana de Cooperación Judicial para la Protección de la Niñez.</div>
                                                        </div>
														
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
											
                                                <h3 class="gdlr-session-item-title">Ceremonia de Clausura.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=m6e635f44b888a3d203106306d7e3602c"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
														      </div>
                                                    </div>
                                              </div>
                                             <div class="clear"></div>
                                          </div>		
										
								  </div>
									
									<div class="gdlr-session-item-tab-content gdlr-tab-4">
                                     
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
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-medium">SEMBLANZA DE LOS PONENTES</h3>
                                        <br>
                                    </div>
                                </div>
                            <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/Claudia_Sierra.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lic. Claudia Sierra Martínez</h3>
														<div class="gdlr-session-item-excerpt">Subdirectora de Restitución y Custodia Internacional de Menores</div>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-1>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    LICENCIADA EN DERECHO POR LA UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO CON UNA ESPECIALIDAD EN DERECHO ADMINISTRATIVO Y UN DIPLOMADO EN MEDIACIÓN FAMILIAR.  <br> LA LIC. CLAUDIA SIERRA HA PARTICIPADO COMO PONENTE EN LAS REUNIONES DE LA RED MEXICANA DE COOPERACIÓN JUDICIAL PARA LA PROTECCIÓN DE LA NIÑEZ, ESCUELAS JUDICIALES ESTATALES, ASÍ COMO EN LAS JORNADAS DE ACTUALIZACIÓN EN MATERIA CIVIL Y ADMINISTRATIVA EN EL CONSEJO DE LA JUDICATURA FEDERAL. <br> SE HA DESEMPEÑADO COMO ABOGADA DICTAMINADORA EN LA DIRECCIÓN DE NACIONALIDAD Y NATURALIZACIÓN DE LA DIRECCIÓN GENERAL DE ASUNTOS JURÍDICOS Y JEFA DEL DEPARTAMENTO DE RECUPERACIÓN DE ALIMENTOS EN EL EXTRANJERO AMBAS EN LA SECRETARÍA DE RELACIONES EXTERIORES. <br>  EN ESTE MOMENTO FUNGE COMO SUBDIRECTORA DE RESTITUCIÓN Y CUSTODIA INTERNACIONAL DE MENORES EN LA DIRECCIÓN GENERAL ADJUNTA DE DERECHO DE FAMILIA, OFICINA DESIGNADA COMO AUTORIDAD CENTRAL PARA LAS CONVENCIONES EN MATERIA DE SUSTRACCIÓN INTERNACIONAL DE MENORES ASÍ COMO ENCARGADA DE LOS CASOS DE REUNIFICACIÓN FAMILIAR ESTADOS UNIDOS-MÉXICO.   <br> 
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-1 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/Fernando_Rangel_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MAGISTRADO FERNANDO RANGEL RAM&Iacute;REZ</h3>
														<div class="gdlr-session-item-excerpt">Magistrado Décimo Primer Tribunal Colegiado en materia Civil del Primer Circuito de la Ciudad de México </div>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-2>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    ELicenciado en Derecho por la Escuela Nacional de Estudios Profesionales, ahora Facultad de Estudios Superiores, plantel Aragón, de la Universidad Nacional Autónoma de México.<br> Especialista en Administración de Justicia en Juzgados de Distrito, por el entonces Instituto de la Judicatura Federal, ahora Escuela Federal de Formación Judicial.<br> Maestro en Derecho de Amparo por la Universidad Tepantlato.<br> Maestro en Derecho Judicial por la Universidad Panamericana.<br> Doctor en Derecho por la Universidad Ius Semper.<br>Juez de Distrito de julio de 2002 a octubre de 2011.<br> Magistrado de Circuito desde noviembre de 2011, adscrito actualmente al Décimo Primer Tribunal Colegiado en Materia Civil del Primer Circuito.<br>Coordinador de tribunales colegiados en materia civil del primer Circuito desde 2015.<br>Miembro de la Asociación Nacional de Magistrados de Circuito y Jueces de Distrito del Poder Judicial de la Federación, A.C., en donde en la actualidad se desempeña como Director General del Primer Circuito que corresponde a la Ciudad de México.<br>Miembro de la Asociación Nacional de Doctores en Derecho.<br>Fue miembro del comité académico del entonces Instituto de la Judicatura Federal, ahora Escuela Federal de Formación Judicial, de febrero de 2010 a febrero de 2014.<br>Miembro del Consejo Académico de la Universidad Ius Semper.<br>En noviembre de dos mil quince recibió la presea Tepantlato al Mérito Jurídico.<br>Docente en la Escuela Federal de Formación Judicial, el Tribunal Federal Electoral, las universidades Ius Semper, Tepantlato, Inadej e Iustec, entre otras.<br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-2 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/Maria_M_Gallegos.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dra. María Margarita Gallegos López</h3>
														<div class="gdlr-session-item-excerpt"> Jueza Séptimo de lo Familiar de la Ciudad de México con especialidad en Restitución Internacional de Menores</div>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-7>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Derecho, egresada de la Universidad Nacional Autónoma de México, posee una destacada trayectoria académica y profesional que refleja su firme compromiso con el ámbito jurídico.<br> Su formación académica incluye una Maestría en Derecho Civil otorgada por la División de Estudios de Posgrado de la Facultad de Derecho de la Universidad Nacional Autónoma de México, consolidando así sus conocimientos en este campo.<br> Habiendo alcanzado el nivel más alto en su educación, ostenta un Doctorado obtenido por la Universidad Tepantlato y mantiene el estatus de Doctoranda en la Universidad Nacional Autónoma de México. <br>Su dedicación a la excelencia académica se refleja no solo en su formación continua, sino también en su destacado desempeño profesional.<br> Como parte de su compromiso con la justicia y el servicio público, tuvo el honor de desempeñarse como Jueza por Oposición en el Juzgado Décimo Tercero de lo Familiar.<br> Actualmente, ocupa el puesto de titular en el Juzgado Séptimo de lo Familiar del Poder Judicial de la Ciudad de México, donde ha consolidado su experiencia y especialidad en Restitución Internacional de Menores y Adopción Internacional. <br>Adicionalmente, su compromiso con la cooperación judicial y la protección de la niñez se manifiesta a través de su rol como Secretaria Técnica de la Red Mexicana de Cooperación Judicial para la Protección de la Niñez.<br> Como docente comprometida, imparte clases en la Maestría y Doctorado en Derecho Familiar en la Universidad Tepantlato, así como en la Escuela Libre de Derecho.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-7 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/Jose_R_Trevino_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtro. José Roberto de Jesús Treviño Sosa </h3>
														<div class="gdlr-session-item-excerpt">Juez en retiro, Monterrey Nuevo León</div>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-4>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    •LICENCIADO EN DERECHO POR LA FACULTAD DE DERECHO Y CRIMINOLOGIA DE LA UNIVERSIDAD AUTONOMA DE NUEVO LEON Y EN ELLA OBTUVO EL GRADO DE MAESTRIA EN CIENCIAS PENALES E INICIO ESTUDIOS DE DOCTORADO EN UN PROGRAMA CON LA UNIVERSIDAD PABLO DE OLAVIDE.<br>
•INGRESO EN 1982 AL PODER JUDICIAL HABIENDO SIDO MERITORIO, PRESTADOR DEL SERVICIO SOCIAL, OFICIAL ADMINISTRATIVO, ACTUARIO, SECRETARIO DE JUZGADO Y SECRETARIO DE SALA.<br>
•EN 1995 FUE DESIGNADO JUEZ 1º DE LO FAMILIAR CON SEDE EN MONTERREY, NUEVO LEON.<br>
•EN 2011 SE LE DESIGNO JUEZ 2º DE JUICIO FAMILIAR ORAL CON SEDE EN MONTERREY, NUEVO LEON.<br>
•DEL 2019 AL 2021, FUE JUEZ PRIMERO DE JUICIO FAMILIAR ORAL CON SEDE EN SAN NICOLAS DE LOS GARZA, NUEVO LEON.<br>
•CATEDRATICO EN LICENCIATURA Y POSGRADO EN LA FACULTAD DE DERECHO Y CRIMONOLOGIA DE LA UNIVERSIDAD AUTONOMA DE NUEVO LEON, Y EN LA UNIVERSIDAD REGIOMONTANA. TAMBIEN DEL INSTITUTO DE LA JUDICATURA DEL PODER JUDICIAL DEL ESTADO DE NUEVO LEON.<br>
•HA RECIBIDO RECONOCIMIENTOS POR LA FUNCION JUDICIAL Y EN LA DOCENCIA,  SE LE RECONOCIO EN EL AÑO 2022, COMO ABOGADO JUEZ POR EL COLEGIO DE ABOGADOS REGIOMINTANOS A.C.<br>
•HA PUBLICADO ARTÍCULOS EN REVISTAS Y LIBROS DE ORDEN INTERNACIONAL, NACIONAL Y LOCAL, SOBRESALIENDO EN EL BOLETIN DE LOS JUECES DE LA HAYA Y SU CALIDAD DE REVISOR DE ARTICULOS QUE PUBLICA LA SUPREMA CORTE DE JUSTICIA DE LA NACION.<br>
•HA PARTICIPADO EN PROYECTOS DE REFORMAS LEGISLATIVAS, EN SEMINARIOS Y DIPLOMADOS REALIZADOS TANTO EN EL ESTADO DE NUEVO LEON COMO EN DIVERSAS ENTIDADES DE LA REPUBLICA MEXICANA Y EN EL EXTRANJERO EN REUNIONES BI NACIONALES MEXICO ESTADOS UNIDOS, EN OTRAS RELACIONADAS CON LA CONFERENCIA DE DERECHO INTERNACIONAL PRIVADO REALIZADAS EN LA HAYA PAISES BAJOS, EN PANAMA , ARGENTINA, ESPAÑA Y EN LOS ESTADOS UNIDOS, ENTRE LOS SE ENCUENTRAN SU PARTICIPACION EN EL ENCUENTRO DE ALTO NIVEL SOBRE VIOLENCIA CONTRA LAS MUJERES Y NIÑAS Y LA PANDEMIA COVID 19. UNA MIRADA GLOBAL, PROMOVIDO POR LA ORGANIZACION DE ESTADOS AMERICANOS (OEA) Y LA CORTE INTERAMERICANA DE DERECHOS HUMANOS;  ASI COMO EN EL CURSO DESUSTRACCION INTERNACIONAL DE MENORES IMPARTIDO POR LA RED IBEROAMERICANA DE ESCUELAS JUDICIALES Y LA ESCUELA JUDICIAL DE LA REPUBLICA DE ARGENTINA; Y  ASISTENCIA EN ESTE AÑO A LAS JORNADAS DE CAPACITACIONES ITINERANTES Y FEDERALES EN MATERIA DE COOPERACIÓN  JURÍDICA INTERNACIONAL, ORGANIZADA POR MINISTERIO DE RELACIONES EXTERIORES, COMERCIO INTERNACIONAL Y CULTO DE ARGENTINA.<br>
•HA PARTICIPADO EN PROGRAMAS DE RADIO Y TELEVISIÓN, ADEMAS  CONDUJO EL PROGRAMA ARMONIA FAMILIAR EN EL TRIBUNAL RADIO EN EL PODER JUDICIAL DEL ESTADO DE NUEVO LEON.<br>
•HA SIDO MIEMBRO DEL SISTEMA MUNICIPAL DE PROTECCION INTEGRAL DELOS DERECHOS DE NIÑAS, NIÑOS Y ADOLESCENTES DE MONTERREY, ASI COMO DEL CONSEJO CONSULTIVO NACIONAL E INTERNACIONAL DE LA FACULTAD DE TRABAJO SOCIAL Y DESARROLLO HUMANO DE LA UANL.<br>
•MIEMBRO DE LA RED DE JUECES DE ENLACE DE LA CONFERENCIA DE DERECHO INTERNACIONAL PRIVADO DE LA HAYA, PAISES BAJOS.<br>
•MIEMBRO DE LA RED DE COOPERACION PARA LA PROTECCION DE LA NIÑEZ MEXICANA.<br>
•MIEMBRO DE LA ACADEMIA DE DERECHO INTERNACIONAL PRIVADO Y COMPARADO.<br>
•MIEMBRO HONORARIO THE LEGAL HONOR SOCIETY OF PHI DELTA PHI.<br>
•ACTUALMENTE JUEZ DE LO FAMILIAR EN RETIRO DEL ESTADO DE NUEVO LEON, Y<br>
•COORDINADOR DE FISCALES ADSCRITOS A LOS JUZGADOS DE LO CIVIL Y FAMILIAR DE LA FISCALIA GENERAL DE JUSTICIA DEL ESTADO DE NUEVO LEON.<br>

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/Juan_C_Ortega_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Juan Carlos Ortega Castro</h3>
														<div class="gdlr-session-item-excerpt">Magistrado del Segundo Tribunal Colegiado en materia Civil del Segundo Circuito de Toluca, estado de México </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-5>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Abogado por la Escuela Libre de Derecho. Maestro en Derecho Constitucional, en Derecho Civil y en Derecho Procesal Penal. Doctor en Ciencias Penales. <br>Doctor Honoris Causa por el CEJUM. Doctor en Derecho Judicial por el Instituto de Ciencias Jurídicas de Nayarit. Certificado como Docente en Derecho Internacional de los Derechos Humanos por la Oficina del Alto Comisionado de los Derechos Humanos de la ONU en México y por el IJF.<br> Ha cursado Diplomados impartidos por Perú, España Estados Unidos y México, en Argumentación Jurídica, Razonamiento Jurídico Penal, Teoría Jurídica Contemporánea, Multiculturalidad, Ética en la función judicial, Amparo Penal, entre otras materias.<br> Es Mediador Privado Certificado por el Centro de Mediación, Conciliación y Justicia Restaurativa del Estado de México. <br>Recibió la Venera Abogado Isidro Fabela Alfaro y la Medalla Miguel Ramos Arizpe por la FIA.<br> Ha publicado obras en coautoría y artículos en materias constitucional, derecho penal, civil, familiar, mercantil y bioética jurídica, entre otras.<br> Es docente y conferencista en instituciones públicas y privadas desde hace 39 años y ha intervenido en Congresos Internacionales y Nacionales en Materia Ambiental, Derecho Penal, Derecho Constitucional y Familiar, entre otras materias. Ha dirigido tesis en grados de licenciatura, maestría y doctorado y ha participado en múltiples exámenes de grado. Preside el Comité Académico Doctoral del CEJUM.<br> Ingresó al Poder Judicial Federal en 1989.<br> Fue designado Juez de Distrito en 1997, y posteriormente Magistrado de Circuito, en 1999, mediante sendos concursos de oposición. Actualmente es Magistrado integrante del Segundo Tribunal Colegiado en Materia Civil del Segundo Circuito.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-5 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/Oscar_G_Cervera_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Oscar Gregorio Cervera Rivero </h3>
														<div class="gdlr-session-item-excerpt">Magistrado de la Segunda Sala Familiar del Poder Judicial de la Ciudad de México</div>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-9>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Fue  abogado postulante durante veintidós años, es Magistrado de la Segunda Sala Familiar del Tribunal Superior de Justicia de la Ciudad de México, Juez de enlace Mexicano en materia de Restitución Internacional ante la Conferencia de la Haya en Derecho Internacional Privado; asimismo, es miembro de la Asociación Internacional de Jueces en materia de Familia, Coordinador Nacional e impulsor de la Red Mexicana de Cooperación Judicial para la protección de la niñez, fundada en el año dos mil diez; ha sido participante  en diversas comisiones y delegaciones especializadas en asuntos de familia alrededor del mundo;  integrante del Grupo de Trabajo para la elaboración de una Guía de Buenas Prácticas, del artículo 13, primer párrafo inciso B, de la Convención  Sobre Aspectos Civiles de la Sustracción Internacional de Menores; ha realizado diferentes Conferencias a nivel Nacional e Internacional; es integrante de la Comisión de Ética del Poder Judicial de la Ciudad de México,  Capacitador en el Consejo de la Judicatura Federal, en temas de la Convención de la Haya de 1980 sobre Aspectos Civiles de la Sustracción Internacional Menores, dirigido a Magistrados de Circuito y Jueces de Distrito por el período de 2017-2018; es doctor en derecho y candidato a doctor en Administración y Gobierno del Poder Judicial por el Instituto de Investigaciones Jurídicas de la UNAM e Instituto de Estudios Judiciales del Poder Judicial de la Ciudad de México; posee diversas obras en coautoría  denominadas “practica forense en derecho familiar y procesos orales en materia familiar”, así como “los menores titulares de la acción”, “la restitución internacional de la niñez enfoque iberoamericano doctrinario jurisprudencial”, de la obra colectiva.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-9 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_6_cjpn/red/images/img_ponentes/JUAN_MIGUEL.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">JUAN MIGUEL MORALES MONTER</h3>
														<div class="gdlr-session-item-excerpt">Juez 5º Familiar de proceso escrito.</div>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-7>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    CARRERA JUDICIAL : <br>

Cargos que ha desempeñado en el Tribunal:<br>

●	Pasante de Derecho en el Juzgado 3º Familiar.<br>

●	Secretario Actuario en el Juzgado 12º Familiar.<br>

●	Secretario Proyectista en el Juzgado 3º Familiar.<br>

●	Secretario de Acuerdos en el Juzgado 3º Familiar.<br>

●	Juez 34º Familiar de junio de 2008 a agosto de 2014.<br>

●	Juez 5º Familiar de agosto de 2014 a la fecha. <br>

HISTORIAL ACADÉMICO :<br>

Egresado de la Licenciatura en Derecho por la Universidad Nacional Autónoma de México, UNAM, ENEP ARAGÓN. Generación 1996 - 1999.<br>

Medalla “Gabino Barreda” al Mérito Universitario por la UNAM al haber obtenido la excelencia académica con el más alto promedio de la generación.<br>

Maestría en Derecho de Familia, egresado de la Universidad Tepantlato de la Ciudad de México.<br>

Doctorado en Derecho Familiar, egresado por la misma Universidad Tepantlato de la Ciudad de México. (en proceso de obtención de la cédula del doctorado).<br>

Master de Derechos Humanos impartido por el Instituto de Investigaciones Jurídicas de la UNAM en colaboración con la Universidad Complutense de Madrid.<br>
																	
Catedrático desde hace más de quince años en nuestro Instituto de Estudios Judiciales.<br>

Cursos, talleres, diplomados, conferencias, y demás actualizaciones en materia de derecho familiar.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-7 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    
                                                    <div class=gdlr-speaker-item-content>
                                                      <div class=gdlr-lightbox-form id=gdlr-form-8>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                
                                                            </div>
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
                    <div class=copyright-left> © Copyright CONATRIB 2023</div>
                    <div class=copyright-right> <a href="https://conatrib.org.mx/">P&aacute;gina web</a> | <a href="https://www.youtube.com/channel/UCjy09Wgg2LXoqTAtLXLpeQQ">Youtube</a> | <a href="https://m.facebook.com/CONATRIBoficial/">Facebook</a> | <a href="https://twitter.com/ConatribMx">Twitter</a></div>
                    <div class=clear></div>
                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
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

    <script src='js/bitacoraLogout.js'></script>

    <script>
        $(document).ready(function(){

            $("#btncons").click(function(){
            setTimeout('document.location.reload()',20000);

            });
        });
    </script>

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