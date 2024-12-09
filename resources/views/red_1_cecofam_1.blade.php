<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Red &#8211; Cecofam</title>

    <link rel="stylesheet" href="rede_1_cecofam/red/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_1_cecofam/red/plugins/superfish/css/superfish.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_1_cecofam/red/plugins/dl-menu/component.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_1_cecofam/red/plugins/font-awesome-new/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_1_cecofam/red/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_1_cecofam/red/plugins/flexslider/flexslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_1_cecofam/red/css/style-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_1_cecofam/red/css/style-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_1_cecofam/red/plugins/masterslider/public/assets/css/masterslider.main.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_1_cecofam/red/css/master-custom.css" type="text/css" media="all">
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
                        <a href=""> <img src="{!! asset('rede_1_cecofam/red/images/logo_red_1.png') !!}" alt=""> </a>
                        <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                            <button class="dl-trigger"> Men&uacute;</button>
                            <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item">
                                    <a href="#inicio" aria-current="page">Inicio</a>
                                </li>
                               <!-- <li class="menu-item">
                                    <a href="#historia">Historia</a>
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
                                <!-- <li class="menu-item">
                                    <a href="#historia">Historia</a>
                                </li>-->
                                <li class="menu-item">
                                    <a href="images/PROGRAMA_RED_NACIONAL_INTERVENCION_ESPECIALIZADA_APOYO_JUDICIAL_2024.pdf">Programa</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#ponentescdmx">Ponentes</a>
                                </li>
                                <li class="menu-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="dropdown-item" href="#"
                                       onclick="regLogout();event.preventDefault();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </nav>
                        @if ($activo==1)
                        <div class="" style="margin-bottom: 30px;top:198px;right:280px;">
                            <div class="speaker-item-holder gdlr-speaker-type-circle">
                                <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                    <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                        <div class=gdlr-speaker-item-content>
                                            <div class=gdlr-lightbox-form id=gdlr-form-200>
                                                <div class=gdlr-paypal-form-wrapper>
                                                    <form method="POST" action="{{ route('descargaConstancia') }}" target="_blank">
                                                        @csrf
                                                        <h3>Si encuentra alg&uacute;n error en su nombre por favor de hacer la corrección en los
                                                            siguientes campos: </h3>
                                                        <input style="font-size: 14px;font-family: ariel; color:black!important;" name="nombre"
                                                            id="nombre" value="{{$nombre}}" style="text-transform: uppercase;" maxlength="50">
                                                        <h5>Nombre</h5>
                                                        <input style="font-size: 14px;font-family: ariel; color:black!important;" name="appat"
                                                            id="appat" value="{{$appat}}" style="text-transform: uppercase;" maxlength="50">
                                                        <h5>Apellido Paterno</h5>
                                                        <input style="font-size: 14px;font-family: ariel; color:black!important;" name="apmat"
                                                            id="apmat" value="{{$apmat}}" style="text-transform: uppercase;" maxlength="50">
                                                        <h5>Apellido Materno</h5>
                                                        <input type="hidden" name="iduser" id="iduser" value="{{$id_user}}">
                                                        <input type="hidden" name="idred" id="idred" value="{{$idred}}">
                                                        <br>
                                                        <input type="submit" name="btncons" id="btncons">
                                                    </form>
                                                </div>
                                            </div>
                                            <div><a style="font-size: 11px;text-transform: uppercase;font-weight: 800;letter-spacing: 2px;color:#8e8e8e !important;font-family: Raleway;"
                                                    href=#gdlr-form-200 data-rel=fancybox data-fancybox-type=inline>Constancia</a></div>
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
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url('upload/centros_convivencia.png'); padding-top: 100px; padding-bottom: 70px; ">
                            <div class="container">
                                <div class="gdlr-title-item" style="margin-bottom: 40px;">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                        <div class="gdlr-item-title-head">
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">RED NACIONAL DE INTERVENCIÓN</h4>
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">ESPECIALIZADA PARA APOYO JUDICIAL</h4>
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
                    <!--<section id="historia">
                        <div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 90px; padding-bottom: 60px; ">
                            <div class="container">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-medium">Historia de la red</h3>
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
                    </section>-->
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
                                            <div class="gdlr-session-head-date">9 Diciembre 2024</div>
                                        </div>
                                        <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-2">
                                            <div class="gdlr-session-head-day">D&iacute;a 2</div>
                                            <div class="gdlr-session-head-date">10 Diciembre 2024</div>
                                        </div>
                                        <div class="gdlr-session-item-head-info " data-tab="gdlr-tab-3">
                                            <div class="gdlr-session-head-day">D&iacute;a 3</div>
                                            <div class="gdlr-session-head-date">11 Diciembre 2024</div>
                                        </div>
                                     <!--   <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-4">
                                            <div class="gdlr-session-head-day">D&iacute;a 4</div>
                                            <div class="gdlr-session-head-date">30 Noviembre 2023</div>
                                        </div> -->
									<!--	<div class="gdlr-session-item-head-info" data-tab="gdlr-tab-5">
                                            <div class="gdlr-session-head-day">D&iacute;a 5</div>
                                            <div class="gdlr-session-head-date">18 Noviembre 2023</div>
                                        </div> -->
                                        <div class="clear"></div>
                                    </div>

                                    <!-- inicia dia -->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-1 gdlr-active">
                                        <div class="gdlr-session-item-content-wrapper">
                                          <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                   <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>XX:00 hrs.</div>-->
                                                    
													
													<div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Rafael Guerra &Aacute;lvarez</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Magistrado Presidente del Poder Judicial de la Ciudad de México y de la Comisión Nacional de Tribunales Superiores de Justicia de los Estados Unidos Mexicanos (CONATRIB)
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
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                       <div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                  <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcdo. Jonathan López Flores</a></div>
																<div class="gdlr-session-item-excerpt">Psicólogo en el Consejo de Familia del Poder Judicial del Estado de Hidalgo</div>
                                                            </div>
                                                        </div>
														  
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Relaciones Insanas”</h3>
												
											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcdo. Diego Alberto Beaurregard Zentella</a></div>
																<div class="gdlr-session-item-excerpt">Psicólogo en la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco</div>
															 </div>
														 </div>
                                                      </div>
													
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia: </div>
                                               <h3 class="gdlr-session-item-title">“Técnica de Retiro”</h3>
												
                                                 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Pedro Daniel González García</a></div>
																<div class="gdlr-session-item-excerpt">Piscólogo en el Centro Estatal de Convivencia Familiar del Estado de Nuevo León</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Evaluación Psicológica en Casos de Infidelidad”</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Claudia Ibeth Navarrete Mendoza</a></div>
																<div class="gdlr-session-item-excerpt">Directora General de los CECOFAM en el Estado de Guerrero</div>
															</div>
															<div class="session-speaker-list">
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Dulce Anyra Cota Salazar</a></div>
																<div class="gdlr-session-item-excerpt">Directora del CECOFAM de Baja California Sur </div>
															</div>
															<div class="session-speaker-list">
																 <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Edgar Antonio Cabrera Meneses </a></div>
																<div class="gdlr-session-item-excerpt">Director de Psicología del Poder Judicial del Estado de Querétaro </div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conversatorio:</div>
                                               <h3 class="gdlr-session-item-title">“Cuando el Conflicto de Pareja Daña el Desarrollo Infantil”</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Sofía Flores Alonso</a></div>
																<div class="gdlr-session-item-excerpt">Docente en diversas Instituciones Educativas</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Retos de la Pareja Contemporánea"</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcdo. Miguel Ángel Miranda Aquino</a></div>
																<div class="gdlr-session-item-excerpt">Psicólogo adscrito al Departamento de Orientación Familiar del Tribunal Superior de Justicia del Estado de Morelos</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Consecuencias del Divorcio en la Salud Mental de Mujeres y Hombres”</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Carla Rosalía Domínguez Morán</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga en el CECOFAM del Estado de Nayarit</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Cápsula:</div>
                                               <h3 class="gdlr-session-item-title">“La Función del Psicólogo en la Escucha de Menores de Edad”</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcdo. Alán Joseph Blancas Chay</a></div>
																<div class="gdlr-session-item-excerpt">Perito en Criminología y Psicología Forense. Participación del Poder Judicial del Estado de Quintana Roo</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Trampas de la Violencia”</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Rosa Ornelas Mejorada</a></div>
																<div class="gdlr-session-item-excerpt">Docente en el Centro Interdisciplinario de Ciencias de la Salud del Instituto Politécnico Nacional. Participación del Poder Judicial de la CDMX</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Aceptación y cambio. Elementos Clave en la Relación de Pareja”</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Juez José de Jesús Estrada Navarro</a></div>
																<div class="gdlr-session-item-excerpt">Juzgado Décimo Primero en materia Familiar del Poder Judicial del Estado de Jalisco</div>
															 </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Cómo Afecta o Beneficia la Relación de los Padres en el Interés Superior de los NNA”</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                                  </div>
                                            </div>
                                          <div class="clear"></div>
                                     </div>
									
							
							    </div>			
							 </div>
									
									
                         <!-- termina dia 1-->
									
									
                         <!-- inicia dia 2 -->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-2">
                                        <div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                              <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div> -->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. María Andrea Coronado Angulo</a></div>
																<div class="gdlr-session-item-excerpt">Psicoterapeuta. Participación del Poder Judicial de la CDMX</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											   <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Las Cinco Claves que Nunca te Enseñaron para Crecer en Pareja”</h3>
												  <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
													 
                                                   <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Fabiola Musmé Estrada Gallegos</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga de la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Celotipia y Apego Evitativo, Un vínculo Adictivo”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
													 
                                                   <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcdo. Ulises Alejandro Torres Guevara</a></div>
																<div class="gdlr-session-item-excerpt">Psicólogo en la Unidad de Servicios Psicológicos y de Trabajo Social del Poder Judicial del Estado de Nuevo León</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“La Dinámica Parental en Peritajes de Custodia”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
													 
                                                   <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Eric García-López</a></div>
																<div class="gdlr-session-item-excerpt">Investigador Titular C en el INACIPE y Miembro del Sistema Nacional de Investigadoras e Investigadores (SNII)</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Trastorno de Estrés Postraumático Complejo en Casos de Violencia Contra la Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/siFcE5gRY-4?si=WTosINmaSBTtt9xb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Diana Lourdes Meléndez Rojas</a></div>
																<div class="gdlr-session-item-excerpt">Docente, Conferencista y Tallerista en Instituciones Nacionales e Internacionales</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Sexualidad, Intimidad y Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Erendira Toledo Cortés </a></div>
																<div class="gdlr-session-item-excerpt">Doctora en estudios de género y prevención de las violencias</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Parejas Postmodernas, retos y Realidades Contemporáneas”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
													 
                                                   <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Paulina Cruz López </a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga en el Consejo de Familia del Poder Judicial del Estado de Hidalgo</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula:</div>
                                               <h3 class="gdlr-session-item-title">“Comunicación Asertiva en las Parejas Siendo Padres”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Lizbeth Ramírez Pérez </a></div>
																<div class="gdlr-session-item-excerpt">Broker, Consultora Patrimonial y de Seguros </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Las Finanzas en Pareja son Básicas para la Sana Relación”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Juez Francisco Javier Ponce Barba</a></div>
																<div class="gdlr-session-item-excerpt">Juzgado Quinto en materia Familiar en el Primer Partido Judicial del Estado de Jalisco</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Sistema Interamericano de Derechos Humanos con Perspectiva de Niñez y Adolescencia, Relacionado con la Interferencia Parental”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Licdo. Tirso Febronio Tejeda Sanabria</a></div>
																<div class="gdlr-session-item-excerpt">Psicólogo en el CECOFAM del Poder Judicial de la CDMX</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula:</div>
                                               <h3 class="gdlr-session-item-title">“Codependencia Emocional en las Relaciones de Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Daniela Ferman Castro</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga en el Consejo de Familia del Poder Judicial del Estado de Hidalgo</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula:</div>
                                               <h3 class="gdlr-session-item-title"> “La Resolución de Conflictos en la Relación de Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                                  </div>
                                            </div>
                                          <div class="clear"></div>
                                        </div>		
										
						 </div>	
						 <!-- termina dia 2-->
									
									
                         <!-- inicia dia 3 -->
								<div class="gdlr-session-item-tab-content gdlr-tab-3">	
									
									<div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes: </a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Dulce Rosario Serralta Contreras </a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga en el área de Evaluación del CECOFAM en Playa del Carmen</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Diana Laura Acosta Elvira</a></div>
																<div class="gdlr-session-item-excerpt">Egresada de la Universidad Autónoma de Yucatán y se desempeña en el CECOFAM en Playa del Carmen</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcdo. Rodolfo Antonio Ávila Muñoz</a></div>
																<div class="gdlr-session-item-excerpt">Promotor de la Salud en Centros de Integración Juvenil </div>
															</div>
                                                        </div>
                                                      </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conversatorio:</div>
                                               <h3 class="gdlr-session-item-title">“Proceso de Duelo y su Impacto en las Familias Judicializadas”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
													
                                                   <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>19:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Roberto González Toríz</a></div>
																<div class="gdlr-session-item-excerpt">Psicólogo Especializado en el Poder Judicial de la CDMX</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Investigación Forense de la Violencia de Género”</h3>
												
                                                 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/22pjZqxMXt8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Emma Janeth García Ortiz</a></div>
																<div class="gdlr-session-item-excerpt">Encargada del CECOFAM del Poder Judicial del Estado de Nuevo León </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Una Visión Sistémica de la Violencia de Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Fabiola Silva Escalante</a></div>
																<div class="gdlr-session-item-excerpt">Encargada del área administrativa de la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula:</div>
                                               <h3 class="gdlr-session-item-title">Comunicación Efectiva y su Importancia en la Resolución de Conflictos de Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Jueza Alma Alejandra Murillo Gallardo</a></div>
																<div class="gdlr-session-item-excerpt">Juzgado Décimo Familiar del Primer Partido Judicial del Estado de Jalisco, con sede en Zapopan, Jalisco</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Marco Jurídico Sobre la Interferencia Parental”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Karla Jazmín Cetina Carrillo </a></div>
																<div class="gdlr-session-item-excerpt">Perita en el Poder Judicial del Estado de Quintana Roo</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcdo. Alán Joseph Blancas Chay</a></div>
																<div class="gdlr-session-item-excerpt">Perito en Criminología y Psicología Forense. Participación del Poder Judicial del Estado de Quintana Roo</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conversatorio:</div>
                                               <h3 class="gdlr-session-item-title">“Erradicación del Patriarcado en la Educación Infantil”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Marlen Ramírez García</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga Especializada en el Poder Judicial de la CDMX</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Creencias del Amor Romántico y las Dificultades de Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Cristina Peña Pedraza </a></div>
																<div class="gdlr-session-item-excerpt">Perita en Trabajo Social adscrita a CECOFAM del Estado de Nuevo León</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “La Relación de Pareja Vista Desde Una Perspectiva Social”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Esneidy Hernández Muñoz</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga en el Consejo de Familia del Poder Judicial del Estado de Hidalgo</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“TLP en las Relaciones de Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Claudia Cecilia Jiménez Ramos</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga de la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula:</div>
                                               <h3 class="gdlr-session-item-title">“Gosting, desapareciendo en un click”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Beatríz Garavito Gorostieta</a></div>
																<div class="gdlr-session-item-excerpt">Perita en Psicología en el Tribunal Superior de Justicia del Estado de Morelos </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Las Relaciones de Pareja en la Época Actual”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Miriam Alejandra Ochoa Valdivia </a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga Encargada de la Unidad de Justicia Restaurativa del Tribunal Superior de Justicia del. Estado de Nayarit </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Los Cuatro Pilares de la Relación de Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Cindy Yareli Santana Escamilla</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga en el CECOFAM en Chetumal, Quintana Roo</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Brianda Joselyn Palma Cahuich</a></div>
																<div class="gdlr-session-item-excerpt">Adscrita al Poder Judicial del Estado de Quintana Roo</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conversatorio:</div>
                                               <h3 class="gdlr-session-item-title"> “El Valor de la Coparentalidad para el Bienestar de los Hijos”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lcda. Karla Jazmín Cetina Carrillo </a></div>
																<div class="gdlr-session-item-excerpt">Perita en el Poder Judicial del Estado de Quintana Roo </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title"> “Amor Romántico en las Relaciones de Pareja”</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                                  </div>
                                            </div>
                                      <div class="clear"></div>
                            </div>	
									
									
									
				</div>		
 <!-- termina dia 3-->
                                   
 <!-- inicia dia 4-->
			<div class="gdlr-session-item-tab-content gdlr-tab-4">		
								<div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                 <!--<div class="session-info session-time"><i class="fa fa-clock-o"></i>09:00 – 09:40 hrs       </div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Ignacio Bautista Santamaria </a></div>
																<div class="gdlr-session-item-excerpt">Coordinación Parental en el CECOFAM del Poder Judicial de la Ciudad de México.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Luz Angélica Brisset Jiménez San Pedro </a></div>
																<div class="gdlr-session-item-excerpt">Coordinación Parental del Poder Judicial de la Ciudad de México.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Paola Viloria Ochoa</a></div>
																<div class="gdlr-session-item-excerpt">Coordinación Parental del Poder Judicial de la Ciudad de México.</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conversatorio</div>
                                               <h3 class="gdlr-session-item-title">El Impacto del Establecimiento de las Relaciones Parentales como Compañeros de Crianza en Padres Divorciados.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/22pjZqxMXt8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Eréndira Toledo Cortés</a></div>
																<div class="gdlr-session-item-excerpt">Coordinadora de la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Violencia como Factor Contaminante”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Sergio Vargas González</a></div>
																<div class="gdlr-session-item-excerpt">Titular de Servicios Periciales en el Poder Judicial del Estado de México.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula Informativa:</div>
                                               <h3 class="gdlr-session-item-title">“Valoración en Psicología Forense por Medios Electrónicos”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Arisbet Cueriel Aguilar</a></div>
																<div class="gdlr-session-item-excerpt">Poder Judicial del Estado de Hidalgo.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Violencia Familiar Desde la Perspectiva Social”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Oscar Ricardo Galicia Castillo</a></div>
																<div class="gdlr-session-item-excerpt">Jefe de Área y Procesos Básicos y Jefe de Laboratorios de Neurociencias y Miembro del Sistema Nacional de Investigadores del CONAHCYT.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Las Bases Fisiológicas de la Agresión y la Violencia”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Juan Alejandro Anguiano</a></div>
																<div class="gdlr-session-item-excerpt">Coordinador del Centro Municipal para la Atención y Trabajo con Hombres y Masculinidades.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“El Trabajo con Hombres para el Alcance de la Igualdad”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. María Fernanda González Castro</a></div>
																<div class="gdlr-session-item-excerpt">Coordinadora del Área de Psicología y Trabajo Social del Poder Judicial del Estado de Chiapas.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Consecuencias Psicológicas de las Niñas, Niños y Adolescentes, ante el Conflicto Legal del Divorcio de sus Padres”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Maribel Campos Delgado</a></div>
																<div class="gdlr-session-item-excerpt">Perita en la Subdirección de Trabajo Social del Poder Judicial de la Ciudad de México.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Angélica Mena Ramírez</a></div>
																<div class="gdlr-session-item-excerpt">Perita en la Subdirección de Trabajo Social del Poder Judicial de la Ciudad de México.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“El lado invisible de la Violencia”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Emma Janeth García Ortiz</a></div>
																<div class="gdlr-session-item-excerpt">Encargada de la Unidad de Convivencia Contry del Centro de Convivencia Familiar del Poder Judicial del Estado de Nuevo León.</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Repercusiones Psicológicas en Niñas, Niños y Adolescentes Expuestos a Situaciones de Violencia”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/7PFuFCDhnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                                  </div>
                                            </div>
                                      <div class="clear"></div>
                            </div>
				
				 </div>	
				
	<!-- termina dia 4-->
				
	<!-- inicia dia 5-->
			<div class="gdlr-session-item-tab-content gdlr-tab-5">		
								<div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>09:00 – 09:40  hrs.</div>
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Yamira Yaratzed Sánchez Guillen  </a></div>
																<div class="gdlr-session-item-excerpt">Coordinadora de Atención Psicológica del Poder Judicial de Campeche.</div>
																
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
                                               <h3 class="gdlr-session-item-title">Duelo en la familia por divorcio.</h3>
												<div class="gdlr-session-item-excerpt">Conferencia</div>
                                                 <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/22pjZqxMXt8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                                  </div>
                                            </div>
                                          <div class="clear"></div>
                                        </div>		
				</div>
	<!-- termina dia 5-->
									
				 </div>
          
			
                    <div class="section-container container">
                    <section id="ponentescdmx">
                        
                        <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-medium">SEMBLANZA DE LOS PONENTES</h3>
                                        <br>
                                    </div>
                                </div>
                            <div class="speaker-item-wrapper" style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class="flexslider" data-type="carousel" data-nav-container="speaker-item-wrapper" data-columns="4">
                                            <ul class="slides">
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class="gdlr-speaker-thumbnail"><img src="rede_1_cecofam/red/images/img_ponentes/2024/Claudia_Ibet_Navarrete_Mendoza_2024.jpg" alt width="400" height="400"></div>
                                                    <div class="gdlr-speaker-item-content">
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Claudia Ibet Navarrete Mendoza </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-50>
                                                            <div class="gdlr-paypal-form-wrapper">
                                                                <h3 style="text-align: justify">
                                                                    La Mtra. Claudia Ibet Navarrete Mendoza es Psicóloga y Directora General de los Centros de Convivencia Familiar Supervisada (CECOFAM) en el estado de Guerrero. Es licenciada en Psicología por la Universidad Autónoma de Guerrero y cuenta con una maestría en Psicología Clínica con enfoque humanista. Se ha especializado en Psicoterapia Gestalt y posee diplomados en Psicología Jurídica y Forense, Coordinación de Parentalidad, Métodos Alternativos de Solución de Conflictos y Derecho de Familia. Su carrera incluye el puesto de Subdirectora en el Instituto para el Mejoramiento Judicial, además de haber fundado el primer CECOFAM en Acapulco.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class="gdlr-ticket-button" href="#gdlr-form-50" data-rel="fancybox" data-fancybox-type="inline">Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class="gdlr-speaker-thumbnail"><img src="rede_1_cecofam/red/images/img_ponentes/2024/Dulce_Anyra_Cota_Salazar.jpg" alt width="400" height="400"></div>
                                                    <div class="gdlr-speaker-item-content">
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dra. Dulce Anyra Cota Salazar</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-51>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style=text-align: justify>
                                                                  La Dra. Dulce Anyra Cota Salazar, originaria de La Paz, B.C.S., es una destacada psicoterapeuta infantil y grupal, así como investigadora. Como Directora del Centro de Convivencia Familiar Supervisada (CECOFAM) en La Paz, lidera equipos que atienden familias en conflictos judiciales y coordina a profesionales que trabajan en la rehabilitación e inclusión social de niños y adolescentes con trastornos del desarrollo. Con más de 17 años de experiencia como terapeuta A.B.A. y 18 años de docencia universitaria en el noroeste de México, también se especializa en evaluación psicométrica. Es autora del libro La lectura en México, su método y su enseñanza, y ha escrito diversos artículos científicos y cuentos infantiles. Además, es fundadora y voluntaria en la Fundación Ayuda Niños La Paz, dedicada al apoyo de comunidades vulnerables.<br>


                                                                </h3>
                                                            </div>
                                                        </div>
                                                     <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-51 data-rel="fancybox" data-fancybox-type="inline">Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class="gdlr-speaker-thumbnail"><img src="rede_1_cecofam/red/images/img_ponentes/2024/Edgar_Antonio_Cabrera_Meneses.jpg" alt width="400" height="400"></div>
                                                    <div class="gdlr-speaker-item-content">
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtro. Edgar Antonio Cabrera Meneses </h3>
                                                        <div class="gdlr-lightbox-form" id="gdlr-form-52">
                                                            <div class="gdlr-paypal-form-wrapper">
                                                               <h3 style="text-align: justify">
                                                                    Edgar Antonio Cabrera Meneses es Licenciado en Psicología por la Universidad Autónoma de Querétaro y en Derecho por la Universidad Mondragón México, con una Especialidad en Administración de Justicia Familiar por el Instituto de Especialización Judicial del Poder Judicial del Estado de Querétaro. Cuenta con un Diplomado en Psicología Jurídica y Forense, es aspirante a la Maestría en Psicología Clínica por la Universidad Autónoma de Querétaro y actualmente cursa la Maestría en Derecho Constitucional y Amparo en la Universidad Tecnológica de México. Desempeña el cargo de Secretario Técnico y suplente de la Secretaría Ejecutiva de la Red Nacional de Centros de Convivencia Familiar Supervisada de la CONATRIB y es coautor del artículo “La Psicología Jurídica en el Tribunal Superior de Justicia de Querétaro” en la Revista Crónica Judicial. Actualmente, es Titular de la Dirección de Psicología y del Centro de Convivencia Familiar Supervisada de Querétaro (CECOFAMQRO) en el Poder Judicial.<br>


                                                               </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class="gdlr-ticket-button" href="#gdlr-form-52" data-rel="fancybox" data-fancybox-type="inline">Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class="gdlr-speaker-thumbnail"><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtro_Roberto_Gonzalez_Toriz.jpeg.jpg" alt width="400" height="400"></div>
                                                    <div class="gdlr-speaker-item-content">
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtro. Roberto González Toríz </h3>
                                                        <div class="gdlr-lightbox-form" id="gdlr-form-5">
                                                            <div class="gdlr-paypal-form-wrapper">
                                                                 <h3 style="text-align: justify">
                                                                   El Mtro. Roberto González Toríz es un reconocido profesional en psicología y criminología con una amplia trayectoria en el ámbito forense. Licenciado en Psicología por la Universidad Nacional Autónoma de México (UNAM), cuenta con una maestría en Criminología por el Instituto de Formación Profesional de la Fiscalía General de Justicia de la CDMX y una maestría en Psicología Criminal y Forense por el Instituto Ciencia Aplicada, además de una especialidad en Psicología Forense en el Instituto de Ciencias Jurídicas de Nayarit.<br>
Ha obtenido certificaciones internacionales en Perfilación Criminal y Victimología Forense por la Academy of Behavioral Profiling y The Forensic Criminology Institute, y se ha formado en temas como la Psicología Forense en contextos familiares, penales y civiles. Con experiencia como perito en psicología en la Fiscalía General de Justicia de la CDMX, también es docente y capacitador en ciencias forenses en varias instituciones mexicanas. Es coautor del libro Psicología Forense en Materia Familiar: Guía para la elaboración del dictamen pericial, publicado por el Poder Judicial de la CDMX y Manual Moderno. Actualmente, ejerce como Psicólogo Especializado en la Subdirección de Evaluación Psicológica del Poder Judicial de la Ciudad de México.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class="gdlr-ticket-button" href="#gdlr-form-5" data-rel="fancybox" data-fancybox-type="inline">Ver semblanza</a></div>
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
				
				<div class="section-container container">
                    <section>
                      <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lic_Lizbeth_Ramirez_Jimenez.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lic. Lizbeth Ramírez Jiménez </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-6>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   La Lic. Lizbeth Ramírez Jiménez es una destacada profesional en seguros y consultoría patrimonial con más de 12 años de experiencia. Es licenciada en Ciencias de la Comunicación, con diplomados en Análisis Económico y en el Sistema Financiero Mexicano. Está certificada por la SHCP y la CNSF en riesgos especiales y cuenta con amplia experiencia en medios de comunicación, seguros y riesgos empresariales.<br> 
Ha trabajado como agente de seguros en ING México, Subdirectora Asociada en AXA Seguros, y es Socio Comercial de AARCO Agente de Seguros y Fianzas. Actualmente, dirige su propia agencia como Broker Empresaria, ayudando a individuos y empresas a proteger y multiplicar su patrimonio mediante consultoría financiera. Además, ejerce como mentora en finanzas personales y de negocios, promoviendo la cultura financiera. Ha recibido múltiples reconocimientos, entre ellos el 1er lugar como Gerente de Formación en AXA Seguros y ha sido Convencionista Internacional de Allianz en París (2015) y Londres (2018). Actualmente, es Vicepresidenta Empresarial de la Asociación Mexicana de Mujeres Jefas de Empresa (AMMJE) para el periodo 2024-2026.
<br> 

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-6 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												
                                              <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Dra_Rosa_Elena_Ornelas_Mejorada.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dra. Rosa Elena Ornelas Mejorada </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-7>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    La Dra. Rosa Elena Ornelas Mejorada es una profesional destacada en psicología y salud mental con una sólida formación académica. Es licenciada en Psicología, maestra en Medicina Conductual y doctora en Psicología de la Salud, títulos obtenidos en la Universidad Nacional Autónoma de México (UNAM). <br>
Desde 2004, se desempeña como profesora en el Centro Interdisciplinario de Ciencias de la Salud (CICS) del Instituto Politécnico Nacional (IPN) en la carrera de Psicología. Además, colaboró en el programa de Maestría en Intervención Psicológica del CICS-UST del IPN como docente, tutora y sinodal de 2016 a 2018. Fue Jefa del Departamento de Investigación del CICS-UST del IPN de 2013 a 2017, liderando proyectos en odontología, optometría y psicología. Asimismo, participa como sinodal externo en los programas de Maestría en Medicina Conductual y Doctorado en Psicología de la UNAM. Desde el año 2000, ha trabajado como psicoterapeuta en instituciones públicas y en el ámbito privado, especializada en terapia cognitivo-conductual.
 <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-7 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Diana_Lourdes_Melendez_Rojas.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Diana Lourdes Meléndez Rojas</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-8>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   La Mtra. Diana Lourdes Meléndez Rojas, Dra. Honoris Causa con reconocimiento del CONAHCTyT (No. 2300180), es una destacada especialista en trabajo social, sexualidad y equidad de género. Posee una maestría en Trabajo Social por la Escuela Nacional de Trabajo Social (ENTS) de la UNAM y otra en Sexualidad y Equidad de Género por la Universidad Mexicana de Estudios de Posgrado.<br>
Con una sólida formación académica, es especialista en modelos de intervención en trabajo social con jóvenes, violencia familiar y temas de sexualidad. Es licenciada en Trabajo Social por la Universidad de Guadalajara y cuenta con una certificación en competencias laborales otorgada por la SEP/CONOCER.<br>
La Mtra. Meléndez ha cursado diplomados en diversas áreas, como educación de la sexualidad, VIH/SIDA, terapia familiar y temas de derechos humanos y políticas públicas. Es docente, conferencista y tallerista en foros nacionales e internacionales.
Coautora de los libros Estudios Críticos de Discapacidad y Familia o familias en México, editados por la ENTS/UNAM, es reconocida por su compromiso en temas de diversidad, inclusión y justicia social.
<br>



                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-8 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												
												
											<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Maria_Andrea_Coronado_Angulo.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. María Andrea Coronado Angulo </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-9>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                               <h3 style="text-align: justify">
                                                                   La Mtra. María Andrea Coronado Angulo es una profesional de la psicología con amplia experiencia en orientación y psicoterapia. Es maestra en Orientación Psicológica por la Universidad Iberoamericana y licenciada en Psicología por la UNAM. Fue presidenta de la Asociación Mexicana de Orientación Psicológica y Psicoterapia (AMOPP) de 2013 a 2015 y miembro activo desde 2010.<br> 
Desde 2005, ofrece consulta privada a adultos, adultos mayores y parejas, y cuenta con certificación como psicoterapeuta por la OPCA. Ha recibido entrenamiento en diversas modalidades de psicoterapia, lo que respalda su práctica profesional; y, desde 2016, imparte cursos y talleres de salud mental en instituciones públicas y privadas. Entre sus recientes colaboraciones destacan Assa Abloy, Yves Rocher, The Churchill School, Grupo Salinas, Estafeta y General Electric. Es coautora del Libro de las Emociones Extremas, publicado por la Universidad Iberoamericana.
<br> 

                                                               </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class="gdlr-ticket-button" href="#gdlr-form-9" data-rel="fancybox" data-fancybox-type="inline">Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                    </section>
                </div>
				
				
				
				<div class="section-container container">
                    <section id="ponentescdmx">
                        
                        <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                    
                                </div>
                            <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Marlen_Ramirez_Garcia.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Marlen Ramírez García </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-25>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    La Mtra. Marlen Ramírez García es una psicóloga especializada en intervención clínica y psicología forense, con una destacada trayectoria académica y profesional. Cuenta con una maestría en Psicología por la UNAM y una licenciatura en Psicología por la Universidad del Valle de México, complementada con diplomados en Psicología Psicosomática y Sexualidad Humana. <br> 
Desde 2015, trabaja en el Poder Judicial de la Ciudad de México como psicoterapeuta, realizando intervenciones grupales para padres en procesos legales familiares. Anteriormente, de 2010 a 2015, se desempeñó como perito en evaluación psicológica en temas de custodia, violencia y abuso. Además, es conferencista en temas de salud mental y justicia, impartiendo charlas y videoconferencias para el Poder Judicial de la CDMX y la CONATRIB, enfocadas en el impacto emocional de la separación y el duelo infantil. También es autora de artículos en psicología forense y ha sido docente en el UNITEC; además cuenta con 15 años de experiencia en consulta privada, su práctica se enfoca en terapia familiar y mediación.
 <br> 
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-25 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Sofia_Flores_Alonso.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Sofía Flores Alonso </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-26>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                  Sofía Flores Alonso es Psicóloga clínica y social, con licenciatura por la Universidad de las Américas, A.C., y maestría en Terapia Familiar en la misma institución. Recién concluyó su Doctorado en Ciencias para la Familia. Su formación incluye una especialización en Psicología Positiva por la Universidad Iberoamericana y en Terapias Narrativas y Posmodernas en Grupo Campos Elíseos, además de una especialidad en dislexia por Davis Dyslexia Association International. Con 22 años de experiencia docente en bachillerato y posgrado en instituciones como el Colegio Internacional de México, la Universidad Anáhuac Sur y TecMilenio, también se dedica a la psicoterapia infantil, adolescente y familiar, y ha impartido talleres sobre bienestar y psicología positiva en diversas organizaciones.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-26 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/lic_tirso_febrinio_tejeda_sanabria.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Licdo.  Tirso Febronio Tejeda Sanabria  </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-27>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                               Tirso Febronio Tejeda Sanabria es licenciado en Psicología y Diplomado en Docencia Universitaria por la UNAM, cuenta con un Master en Musicoterapia Humanista del Instituto Mexicano de Musicoterapia Humanista. Su trayectoria incluye roles como docente, tallerista y psicoterapeuta en diversas instituciones públicas y privadas, destacando su trabajo en el Centro de Estudios Superiores del Hospital Nacional Siglo XXI, el Instituto Nacional de Psiquiatría Ramón de la Fuente Muñiz y el Instituto Mexicano de Musicoterapia Humanista. En el Poder Judicial de la Ciudad de México, ha ejercido como psicólogo ofreciendo terapia individual y talleres para el personal. Es autor de artículos en la Gaceta de Desarrollo Humano, en el marco del Programa de Apoyo Psicológico y Emocional. Actualmente, colabora impartiendo talleres psicoeducativos en el Programa de Revinculación Familiar del Centro de Convivencia Familiar Supervisada.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-27 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Dr_Eric_Garcia_Lopez.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Erick García-López </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-28>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                 <h3 style="text-align: justify">
                                                                   El Dr. Erick García-López es un destacado investigador en psicopatología forense y neurociencia, con formación académica en Neurociencia por la Universidad Complutense de Madrid. Posee un postdoctorado en Evolución y Cognición Humana realizado en colaboración con el Instituto de Física Interdisciplinar y Sistemas Complejos de la Universitat de les Illes Balears. Actualmente, es investigador titular en el Instituto Nacional de Ciencias Penales y miembro del Sistema Nacional de Investigadoras e Investigadores. Su experiencia internacional incluye la participación en el Mental Health, Law and Policy Institute de Canadá y en el proyecto Neurociencia y Derecho Penal en la Universidad de Castilla-La Mancha. Además, colabora como editor asociado en diversas revistas científicas y es consultor para organizaciones como la UNODC y la UNESCO en temas de neuroderechos en México.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-28 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
				
				<div class="section-container container">
                    <section id="ponentescdmx">
                        <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Psic_Esneidy_Hernandez _Munoz.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Psic. Esneidy Hernández Muñoz  </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-29>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Esneidy Hernández Muñoz es licenciada en Psicología por la Universidad Autónoma del Estado de Hidalgo y cuenta con una maestría en Psicología Jurídica y Forense. Ha realizado diplomados en Atención Victimal, impartidos por el Centro de Justicia del Estado de Hidalgo, y recientemente se certificó en el uso y manejo del programa “Antenas por los Niños.” Ha desempeñado roles como Responsable Delegacional de Recursos Humanos y enlace delegacional de la prueba psicométrica PACI, dentro del programa de Estancias Infantiles. Actualmente, trabaja como psicóloga en el Consejo de Familia de Pachuca, Hidalgo, aportando su experiencia en psicología forense y atención a víctimas.<br> 

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-29 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Psic_Daniela_Ferman_Castro.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Psic. Daniela Ferman Castro </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-30>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Daniela Ferman Castro es licenciada en Psicología por la Universidad Autónoma del Estado de Hidalgo. Ha recibido formación en Primeros Auxilios Psicológicos y en Perfilación Criminal por la Universidad Autónoma de Tlaxcala. Como promotora de salud en Centros de Integración Juvenil, impartió talleres de sexualidad y habilidades socioemocionales para estudiantes de educación básica, y colaboró en jornadas preventivas de salud sobre adicciones en conjunto con la SEP. Además, ha completado cursos en equidad de género y diversidad sexual con instituciones como el Instituto Nacional de las Mujeres y la Red por los Derechos Sexuales y Reproductivos en México. Actualmente, es Psicóloga Titular en el Consejo de Familia de Pachuca, Hidalgo, y cuenta con certificación en el programa “Antenas por los Niños”.<br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-30 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Psic_Paulina_Cruz_Lopez.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Psic. Paulina Cruz López Miranda</h3> 
                                                        <div class=gdlr-lightbox-form id=gdlr-form-31>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Paulina Cruz López es licenciada en Psicología por la Universidad Autónoma del Estado de Hidalgo y tiene un año y medio de experiencia como psicóloga en el Consejo de Familia del estado de Hidalgo. Participó en el programa "1,2,3… Cuenta Conmigo," diseñando actividades para padres, niños y docentes sobre crianza, prevención de abuso sexual infantil y educación emocional. Ha asistido al Coloquio Internacional de Psicología de la UAEH y al 2do Congreso Internacional de Terapia Infantil y Abuso Sexual, donde realizó cursos como “Creación de programas de estimulación temprana” y “El tigre de bengala: Técnicas lúdicas para prevenir el abuso sexual.” Además, completó un curso en Psicología Forense en la Suprema Corte de Justicia de la Nación. Actualmente, estudia una Maestría en Psicología Criminal con especialidad en Psicología Forense en la Universidad Internacional Iberoamericana.<br> 

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-31 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Psic_Jonathan_Lopez_Flores.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Psic. Jonathan López Flores </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-32>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                               <h3 style="text-align: justify">
                                                                   Jonathan López Flores es licenciado en Psicología por la Universidad Autónoma del Estado de Hidalgo, de donde egresó en 2016. Desde 2019, trabaja como Psicólogo Titular en el Poder Judicial del Estado de Hidalgo, en el Consejo de Familia de Tulancingo. Recientemente se certificó en el programa “Antenas por los Niños.” Ha realizado talleres y asistido a ponencias sobre Estrategias Parentales, Psicología Forense, desgaste emocional y fatiga. En su experiencia previa, se desempeñó como auxiliar en Staffing y Recursos Humanos, realizando funciones de reclutamiento, selección, capacitación de personal y aplicación de estudios socioeconómicos.<br>
																   

                                                               </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-32 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
				
				
				

                <div class="section-container container">
                    <section>
                      <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Juez_Francisco_Javie_Ponce_Barba.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Juez Francisco Javier Ponce Barba</h3>
													
                                                        <div class=gdlr-lightbox-form id=gdlr-form-12>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Juez Francisco Javier Ponce Barba es abogado por la Universidad de Guadalajara, con especialización en Impuestos, y cuenta con maestrías en Derecho Constitucional y Amparo, y en Derecho Penal Acusatorio Adversarial. Posee un Doctorado en Derecho por el Instituto Internacional de Ciencias Penales y un doctorado homologado en colaboración entre la Universidad de San Pablo-CEU de Madrid y la Universidad de Guadalajara. Es Doctor Honoris Causa por el Claustro Doctoral de Líderes Internacionales. Su trayectoria incluye roles en la Procuraduría General de la República como Agente del Ministerio Público de la Federación, y en el Consejo de la Judicatura del Estado de Jalisco, donde ha sido Director de Visitaduría y Coordinador de Amparos, entre otros cargos. Actualmente, es juez titular del Juzgado Quinto en Materia Familiar en Jalisco. Además, es docente de posgrado en instituciones como la Universidad Veracruzana, Universidad Cuauhtémoc, y en la Universidad de Guadalajara.<br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-12 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Jueza_Alma_Alejandra_Murillo_Gallardo.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Jueza Alma Alejandra Murillo Gallardo </h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-13>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Jueza Alma Alejandra Murillo Gallardo es abogada por la Universidad de Guadalajara y Maestra en Derecho de la Función Judicial por la Escuela de Formación del Consejo de la Judicatura del Estado. Actualmente, cursa el Doctorado en Derecho de la Función Judicial en el Instituto de Ciencias Jurídicas de Nayarit. Con numerosos cursos y diplomados en justicia y derechos humanos, es catedrática en Derecho Civil, Procesal, Derechos Humanos, Derecho Laboral, y Oralidad Civil y Familiar. También imparte clases en la Maestría de Derecho de la Función Judicial del Consejo de la Judicatura del Estado de Jalisco. Con 26 años en el Poder Judicial de Jalisco, ha sido Auxiliar Judicial, Secretaria Conciliadora y Secretaria Relatora de Sala Civil, entre otros cargos. Actualmente, es Jueza Décimo Familiar del Primer Partido Judicial en Zapopan, Jalisco.<br>

                                                                </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-13 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Juez_Jose_de_Jesus_Estrada_Navarro.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Juez José de Jesús Estrada Navarro o</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-14>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Juez José de Jesús Estrada Navarro es abogado por la Universidad de Guadalajara, Maestro en Derecho Electoral por el Tribunal Electoral del Estado de Jalisco y actualmente cursa el Doctorado en Derecho en la Universidad de Buenos Aires. Ha completado diplomados en la UNAM, Escuela Libre de Derecho, y el TEC de Monterrey, y cursos en Derechos Humanos, atención a víctimas e impartición de justicia con perspectiva de género. Es docente de posgrado en el Supremo Tribunal de Justicia de Jalisco y el Tribunal Electoral de Jalisco, además de impartir clases en el TEC de Monterrey. Con más de 15 años en el servicio público, ha sido Auxiliar judicial, Secretario, Secretario de acuerdos y Secretario relator, y desde 2016, se desempeña como juez, actualmente en el Juzgado Décimo Primero en Materia Familiar.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-14 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Beatriz_Garavito_Gorostieta.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Beatriz Garavito Gorostieta </h3>
													
                                                        <div class=gdlr-lightbox-form id=gdlr-form-38>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                              Beatriz Garavito Gorostieta es psicóloga egresada de la Universidad Autónoma del Estado de Morelos, con una maestría en Psicoterapia Psicoanalítica de niños y adolescentes por el Centro Universitario del Sur y certificación en Psicología Forense. Ha trabajado en el ámbito de Trabajo Social en escuelas secundarias técnicas en el Instituto de Educación Básica del Estado de Morelos, y como psicóloga en los Servicios de Salud y en el DIF Estatal. Actualmente, es perito en psicología en el Tribunal Superior de Justicia de Morelos. Posee un diplomado en abordaje psicosocial de la violencia intrafamiliar, complementado con capacitación en temas de salud mental, género y prevención de la violencia sexual. Ha participado como ponente en talleres y congresos, destacando sus aportes en el análisis del crimen y en la capacitación para el apoyo jurídico de mujeres en situación de violencia..<br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-38 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
				
				
				
				<div class="section-container container">
                    <section>
                         <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcdo_Miguel_Angel_Miranda_Aquino.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcdo. Miguel Ángel Miranda Aquino </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-16>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Miguel Ángel Miranda Aquino es psicólogo egresado de la Universidad Autónoma del Estado de Morelos, con un diplomado en Criminología por la Facultad de Derecho y Ciencias Sociales de la misma universidad. Actualmente, está adscrito al Departamento de Orientación Familiar del Tribunal Superior de Justicia del Estado de Morelos, donde se especializa en temas de violencia, género y peritajes psicológicos. Su labor incluye la realización de evaluaciones y peritajes psicológicos en el contexto familiar y judicial, contribuyendo a la comprensión de factores de riesgo y dinámicas de violencia en casos específicos. Su experiencia le ha permitido colaborar en un entorno interdisciplinario, brindando orientación y apoyo en procesos legales relacionados con conflictos familiares y de género.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-16 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcda_Miriam_Alejandra_Ochoa_Valdivia.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcda. Miriam Alejandra Ochoa Valdivia  </h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-17>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Miriam Alejandra Ochoa Valdivia es psicóloga con especialización en Medios Alternos de Solución de Conflictos. Actualmente, es Psicóloga Encargada de la Unidad de Justicia Restaurativa del Tribunal Superior de Justicia de Nayarit y ha colaborado en el CECOFAM del mismo tribunal. Además, cuenta con experiencia en los departamentos psicopedagógicos de los colegios Simón Bolívar y Patria en Nayarit. Ha completado diversos diplomados, incluyendo Grafología Científica, Intervención en Violencia Sexual Infantil, Oralidad Familiar y Civil, Terapia de Pareja, y Psicodiagnóstico Infantil y Adolescente. También está formada en Justicia Restaurativa Familiar y es egresada de la Maestría en Terapia Sistémica de la Universidad Autónoma de Nayarit, actualmente en proceso de titulación.<br> 
                                                                </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-17 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Carla_Rosalia_Dominguez_Moran.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Carla Rosalía Domínguez Morán</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-18>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Carla Rosalía Domínguez Morán es licenciada en Derecho por la Universidad Autónoma de Nayarit y en Psicología por el Instituto de Estudios Superiores y Tecnológicos Matatipac. Posee una maestría en Terapia Familiar Sistémica por la Universidad del Valle de Atemajac (UNIVA) en Tepic, Nayarit. Su formación complementaria incluye diplomados en Psicología Clínica, intervención en violencia sexual infantil, oralidad familiar y civil, psicoterapia infantil, y lenguaje corporal, además de una especialidad en medios alternos. Desde 2004, se ha desempeñado como psicóloga en el Centro de Convivencia Familiar, donde aplica sus conocimientos en derecho y psicología para abordar conflictos familiares y ofrecer intervenciones en casos de violencia y evaluación psicológica infantil.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-18 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Emm_Janeth_Garcia_Ortiz.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Emma Janeth García Ortiz </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-19>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3>
                                                                   Emma Janeth García Ortiz es Licenciada en Psicología por la Universidad Autónoma de Nuevo León y Maestra en Psicoterapia Breve Sistémica por el Centro de Crecimiento Personal y Familiar. Actualmente, es pasante de la Maestría en Psicología Forense en el Colegio Internacional de Ciencias Criminológicas y Forenses y cuenta con una certificación internacional en Psicopatología Forense y Sistema de Justicia por CIFAL Argentina / UNITAR. Ha trabajado en el sector privado y en instituciones públicas, como la Secretaría de Desarrollo Social y la Facultad de Psicología de la UANL, donde brindó terapia psicológica y trabajó en programas preventivos para niños y adolescentes. Con más de 13 años de experiencia en intervención familiar, ha participado en talleres sobre psicología forense, derechos humanos, y mediación familiar. Actualmente, es Encargada del Centro de Convivencia Familiar del Poder Judicial del Estado de Nuevo León, donde aplica un enfoque sistémico en su labor de Terapia de Integración para fortalecer vínculos familiares. <br>

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
				
				<div class="section-container container">
                    <section>
                         <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtro_Pedro_Daniel_Gonzalez_Garcia.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Mtro. Pedro Daniel González García  </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-36>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Pedro Daniel González García es licenciado en Psicología por la Universidad Autónoma de Nuevo León (UANL), generación 2007, y cuenta con un grado de Máster en Psicología Analítica y formación como terapeuta en Arteterapia por la Fundación de Psicología Analítica Carl Gustav Jung en Buenos Aires, Argentina, generación 2009. Tiene amplia experiencia clínica trabajando con niños, adolescentes y adultos en contextos terapéuticos. Desde 2013, se desempeña como psicólogo en el Centro Estatal de Convivencia Familiar del Estado de Nuevo León, donde aplica su enfoque analítico y de arteterapia en el apoyo a familias y en la intervención en situaciones de conflicto familiar.
<br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-36 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcdo_Ulises_Alejandro_Torres_Guevara.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcdo. Ulises Alejandro Torres Guevara </h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-37>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Ulises Alejandro Torres Guevara es licenciado en Psicología por la Facultad de Ciencias de la Conducta de la Universidad Autónoma del Estado de México (UAEM) y actualmente cursa la Especialidad en Psicología Forense en el Instituto Nacional de Ciencias Penales (INACIPE). Ha completado diplomados y talleres en áreas como Coordinación de Parentalidad, Derechos Humanos y Psicología Forense, impartidos por la Suprema Corte de Justicia de la Nación y la Comisión Estatal de Derechos Humanos del Estado de Nuevo León, entre otros. Cuenta con más de 11 años de experiencia en la intervención pericial como psicólogo forense y actualmente es Psicólogo Titular en la Unidad de Servicios Psicológicos y de Trabajo Social del Poder Judicial del Estado de Nuevo León, donde realiza evaluaciones especializadas y participa en el abordaje de situaciones de conflicto familiar.<br> 
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-37 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcda_Cristina_Pena_Pedraza.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcda. Cristina Peña Pedraza</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-011>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Cristina Peña Pedraza es Licenciada en Trabajo Social por la Universidad Autónoma de Nuevo León, con una década de experiencia en el ámbito de la asistencia social. Su labor se centra en la aplicación del método de caso y familia, realizando diagnósticos, evaluaciones y estudios socioeconómicos, así como en el desarrollo de proyectos comunitarios y la gestión de recursos. Desde hace seis años, se desempeña como perito en Trabajo Social en el Centro de Convivencia Familiar del Estado de Nuevo León, donde elabora dictámenes socioeconómicos y realiza visitas sociales y evaluaciones con un enfoque sistémico. Su trabajo en este contexto se realiza en conjunto con un equipo interdisciplinario de derecho y psicología. Además, participa activamente en cursos y talleres de peritaje y tiene experiencia en comparecencias en juicios familiares.<br>

																	
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-011 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcda_Dulce_Rosario_Serralta_Contreras.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcda. Dulce Rosario Serralta Contreras </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-39>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3>
                                                                    Dulce Rosario Serralta Contreras es Licenciada en Psicología por la Universidad Humanista de Cancún, Quintana Roo, con especialidad en psicología clínica. También es licenciada en Ciencias de la Comunicación por el Instituto Comercial Bancarios de Mérida, Yucatán, y cuenta con un Diplomado en Coaching Ontológico por Red Consultores en Mérida. Inició su carrera como psicóloga en la Casa de Asistencia Temporal del DIF Municipal en Playa del Carmen, atendiendo a niños bajo resguardo de la Procuraduría de la Defensa del Menor y la Familia. Posteriormente, trabajó en el Complejo de Seguridad C5 de Quintana Roo, en Cancún, donde brindó apoyo psicológico en situaciones de emergencia de violencia familiar y de género. Fue psicóloga en el Centro de Reinserción Social Municipal en Playa del Carmen, ofreciendo terapia individual, familiar y talleres de desarrollo personal para los internos. Actualmente, se desempeña en el área de evaluación del Centro de Convivencia Familiar en Playa del Carmen.<br>
																	
																	

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-39 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
					
				<div class="section-container container">
                    <section>
                         <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcda_Diana_Laura_Acosta_Elvira.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcda. Diana Laura Acosta Elvira 
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-40>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Diana Laura Acosta Elvira es egresada de la licenciatura en Trabajo Social por la Universidad Autónoma de Yucatán. Su experiencia se centra en la atención social a adultos mayores y a niños y niñas, además de su participación en proyectos sociales como "Conexión Segura: Redes Sociales" y "Mi Futuro, Mis Decisiones," ambos enfocados en jóvenes de 12 a 18 años en comunidades rurales de Yucatán. Ha recibido formación complementaria a través de cursos y talleres del Instituto Mexicano del Seguro Social (IMSS), destacándose "Prevención y Atención de la Violencia Familiar y Sexual contra las Mujeres" y "Prevención y Detección Oportuna de Maltrato Infantil." Ha presentado la ponencia "Las Implicaciones del Trabajo Social en los Procesos de Adopción."
																	<br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-40 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcdo_Alan_Joseph_Blancas_Chay.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcdo.Alan Joseph Blancas Chay </h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-41>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Alan Joseph Blancas Chay es licenciado en Psicología con experiencia en criminología y psicología forense. Ha participado en eventos como el Congreso Mundial de Estudiantes de Ciencias de la Educación y el Foro Mundial de Universitarios, ha recibido formación en perfilación criminal y análisis de tatuajes en el Instituto Pericial Judicial, así como en reconocimiento de comportamientos violentos con No Verbal Consulting Group. Su trayectoria incluye la implementación del protocolo de investigación para feminicidios en Quintana Roo en colaboración con el Instituto Quintanarroense de la Mujer y la evaluación de maltrato infantil durante la pandemia con el Centro de Integración Juvenil. Además, ha abordado temas de derechos humanos y enfoques de género en eventos organizados por la UNAM y Hombres por la Equidad. Sus competencias abarcan la evaluación psicológica forense y la capacitación en derechos humanos y autocuidado laboral.<br>
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-41 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcda_Karla_Jazmin_Cetina_Carrillo.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcda. Karla Jazmín Cetina Carrillo </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-42>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Karla Jazmín Cetina Carrillo es Psicóloga certificada en evaluación psicológica forense en derecho familiar, con más de cinco años de experiencia. Realiza evaluaciones y peritajes psicológicos para el sistema judicial, especialmente en casos de custodia y capacidad parental. Es supervisora de convivencias y capacita al personal en temas como teorías de apego y parentalidad para mejorar su desempeño profesional. Además, es facilitadora certificada en yoga infantil, enseñando técnicas de regulación emocional y desarrollo de habilidades socioemocionales adaptadas a la infancia. Su formación incluye una licenciatura en Psicología, una certificación en Psicopatología criminal y forense, y una maestría en Psicoterapia Gestalt. Su enfoque combina métodos psicológicos y prácticas de bienestar para brindar una atención integral y efectiva en sus intervenciones tanto clínicas como forenses.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-42 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcda_Cindy_Yareli_Santana_Escamilla.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcda. Cindy Yareli Santana Escamilla </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-43>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Cindy Yareli Santana Escamilla es Psicóloga clínica en el Centro de Convivencia Familiar Supervisada en Chetumal, Quintana Roo, egresada del Instituto Universitario Carl Rogers. Ha complementado su formación con un diplomado en arte, juego y resiliencia infantil, y tiene experiencia en el desarrollo de talleres de crecimiento emocional, creatividad y resiliencia en psicoterapia infantil. Además, ha participado en cursos especializados sobre el interés superior de los menores, involucramiento parental y equidad de derechos entre padres. Su enfoque profesional se orienta al bienestar emocional y la resiliencia infantil, utilizando técnicas innovadoras y prácticas que promueven el desarrollo integral de los niños, fortaleciendo así su capacidad para enfrentar situaciones adversas.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-43 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
					
				<div class="section-container container">
                    <section>
                         <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Bryanda_Joselyn_Palma_Cahuich.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Bryanda Joselyn Palma Cahuich  </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-44>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Bryanda Joselyn Palma Cahuich es Psicóloga con una Maestría en Psicología Clínica y Psicoterapia por el Centro de Estudio Clínica e Investigación Psicológica (2020-2022) y una Licenciatura en Psicología por el Centro Universitario de Valladolid (2009-2012). Actualmente labora en el Centro de Convivencia Familiar Supervisada del Poder Judicial del Estado de Quintana Roo, donde supervisa convivencias familiares y brinda apoyo psicológico. Fue Coordinadora de Profesionales Especializados en Servicios Migratorios en el Instituto Nacional de Migración, gestionando atención a migrantes bajo una perspectiva de Derechos Humanos. Ha cursado talleres como "Educar para el Conflicto," "Evaluación Psicológica en Casos de Guarda y Custodia," y un Diplomado en Pruebas Psicométricas en Psicología Forense. Destaca en evaluación psicológica, comunicación efectiva, resolución de conflictos y trabajo en equipo.<br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-44 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcdo_Rodolfo_Antonio_Avila_Munoz.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcdo. Rodolfo Antonio Ávila Muñoz </h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-45>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">Rodolfo Antonio Ávila Muñoz es egresado del Instituto Universitario Carl Rogers en Chetumal, Quintana Roo, especializado en salud mental y educación. Ha trabajado como promotor de la salud en Centros de Integración Juvenil (CIJ), donde se ha enfocado en la prevención y el tratamiento de conductas adictivas, brindando atención a grupos vulnerables. También ha colaborado en la Unidad de Servicios de Apoyo a la Educación Regular (USAER), apoyando a alumnos con necesidades educativas especiales, asegurando una atención integral. Su compromiso en estos campos lo ha llevado a crear y facilitar talleres como "Los estragos del trago" y "Gestión de emociones," impactando positivamente en la comunidad educativa al fomentar la concientización y el desarrollo de habilidades emocionales en jóvenes.<br>						
																	
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-45 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcda_Fabiola_Silva_Escalante.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcda. Fabiola Silva Escalante </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-46>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Fabiola Silva Escalante es licenciada en Administración, con trece años de experiencia en la gestión de empresas privadas e instituciones públicas. Su trayectoria destaca en áreas como atención a derechohabientes, organización interna, gestión presupuestal, planificación y supervisión de equipos de trabajo, además de creación y seguimiento de proyectos de mejora continua y control de padrones internos. Ha recibido formación en temas familiares y con perspectiva de género. Actualmente se desempeña en la Unidad de Servicios Psicológicos, encargada del área administrativa, gestionando atenciones y seguimiento a usuarios. También ha trabajado en relaciones públicas, colaborando con tomadores de decisiones en la Administración Pública.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-46 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Lcdo_Diego_Alberto_Beaurregard_Zentella.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lcdo. Diego Alberto Beaurregard Zentella </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-47>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Diego Alberto Beaurregard Zentella es licenciado en Psicología con especialidad clínica y actualmente labora en la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco. Con tres años de experiencia en la aplicación e interpretación de pruebas proyectivas y estandarizadas, se destaca también en actividades administrativas, atención a usuarios y organización interna. Ofrece consulta clínica para niños, niñas, adolescentes y asesoría familiar, además de contar con experiencia en el diseño y facilitación de talleres de salud mental a nivel secundaria. Ha cursado diplomados en reeducación para hombres y masculinidades antihegemónicas, así como cursos sobre derechos humanos, enfoque de género y trata de personas.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-47 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
					
				<div class="section-container container">
                    <section>
                         <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Fabiola_Musme_Estrada_Gallegos.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Mtra. Fabiola Musmé Estrada Gallegos  </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-48>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Fabiola Musmé Estrada Gallegos es Psicóloga Clínica y Maestra en Educación con diez años de experiencia en entrevistas, aplicación de pruebas, y capacitación enfocada en el ámbito empresarial y de recursos humanos, así como en el desarrollo de programas psico-administrativos para empresas industriales. Ha trabajado en mejora continua y capacitación en sensibilización psicoeducativa. Durante más de cinco años, ha sido docente en niveles básico, superior y posgrado, elaborando contenidos con enfoque clínico, organizacional y de intervención social. Además, ofrece orientación vocacional en instituciones educativas. Cuenta con diplomados en Psicología Sexual Infantil, Educación Sexual Femenina y Psicología Forense especializada en la niñez. Actualmente, se desempeña como psicóloga en la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco, donde realiza dictámenes periciales para menores, adolescentes y adultos.<br>
															   </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-48 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Mtra_Claudia_Cecilia_Jimenez_Ramos.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Claudia Cecilia Jiménez Ramos </h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-60>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                 Claudia Cecilia Jiménez Ramos es psicóloga con especialización en Psicología Organizacional por la Universidad Popular de la Chontalpa y tiene una Maestría en Psicoterapia Humanista por el Instituto Universitario Carl Rogers. Actualmente, cursa la Licenciatura en Enfermería y Obstetricia. Con diez años de experiencia en la aplicación de pruebas proyectivas y psicométricas, ha trabajado en orientación vocacional y evaluación de personalidad delictiva en jóvenes y adultos jóvenes. Diseñó y dirigió talleres sobre experiencias adictivas para adolescentes en reclusión. En su rol en el Colegio Nacional de Educación Profesional Técnica, lideró el Programa de Orientación Educativa, realizando contención y asesoría para estudiantes, docentes y familias. En el Hospital del Niño Rodolfo Nieto Padrón, tiene experiencia en contención emocional y terapia ocupacional para pacientes pediátricos con enfermedades crónico-degenerativas. Actualmente, trabaja en la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco, con tres años de experiencia en dictámenes periciales para menores, adolescentes y adultos.<br>
														  </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-60 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/2024/Dra_Erendira_Toledo_Cortes.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dra. Eréndira Toledo Cortés</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-61>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Eréndira Toledo Cortés es Doctora en Estudios de Género y Prevención de las Violencias, con una Maestría en Estudios de Género y diversas subespecialidades en Psicopatología Gestalt, Desarrollo Humano y Sueños. Con 25 años de experiencia como facilitadora y once en temas de género, ha colaborado en instituciones como el Instituto Estatal de las Mujeres y el DIF Estatal, brindando apoyo a diversos grupos, incluyendo mujeres en situación de violencia y funcionarios públicos. Ha impartido talleres y conferencias sobre violencia de género, derechos humanos, autoestima, y liderazgos con perspectiva de género, y ha publicado artículos sobre temas de igualdad y género en revistas académicas y del Poder Judicial. También fue parte del equipo editorial de la Revista Quehaceres y colaboradora en la Revista Signos de la Universidad de la Chontalpa. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-61 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    
                                                    <div class=gdlr-speaker-item-content>
                                                        
														
                                                        
                                                        
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
					
					<div class="section-container container">
       
						
                </div>
					
					
			 </div>
          </div>
      </div>


        <footer class=footer-wrapper>
            <div class=copyright-wrapper>
                <div class="copyright-container container">
                    <div class=copyright-left> © Copyright CONATRIB 2024</div>
                    <div class=copyright-right> <a href="https://conatrib.org.mx/">P&aacute;gina web</a> | <a href="https://www.youtube.com/channel/UCjy09Wgg2LXoqTAtLXLpeQQ">Youtube</a> | <a href="https://m.facebook.com/CONATRIBoficial/">Facebook</a> | <a href="https://twitter.com/ConatribMx">Twitter</a></div>
                    <div class=clear></div>
                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    {{-- <script src='js/jquery/jquery.js'></script>
    <script src='js/jquery/jquery-migrate.min.js'></script> --}}


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
        $(document).ready(function () {

            $("#btncons").click(function () {
                setTimeout('document.location.reload()', 20000);

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