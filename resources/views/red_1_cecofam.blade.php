<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

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
                        <a href=""> <img src="rede_1_cecofam/red/images/logo_red_1.png" alt=""> </a>
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
                                    <a href="#programa">Programa</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#ponentescdmx">Ponentes</a>
                                </li>
                                {{-- CIERRE DE SESIÓN --}}
                                <li class="menu-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url('rede_1_cecofam/red/upload/centros_convivencia.png'); padding-top: 100px; padding-bottom: 70px; ">
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
									<br>
									<br>
									<div class="gdlr-session-thumbnail-wrapper">
                                        <a href="{{ URL::asset('/rede_1_cecofam/red/images/PROGRAMA_RED_NACIONAL_INTERVENCIÓN_ESPECIALIZADA_APOYO_JUDICIAL.pdf') }}" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver Programa Completo PDF</button></a>
                                                </div>
                                </div>
                            <div class="session-item-wrapper" style="margin-bottom: 75px;">
                                <div class="gdlr-session-item gdlr-tab-session-item gdlr-item">
                                    <div class="gdlr-session-item-head">
                                        <div class="gdlr-session-item-head-info gdlr-active" data-tab="gdlr-tab-1">
                                            <div class="gdlr-session-head-day">D&iacute;a 1</div>
                                            <div class="gdlr-session-head-date">27 Noviembre 2023</div>
                                        </div>
                                        <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-2">
                                            <div class="gdlr-session-head-day">D&iacute;a 2</div>
                                            <div class="gdlr-session-head-date">28 Noviembre 2023</div>
                                        </div>
                                        <div class="gdlr-session-item-head-info " data-tab="gdlr-tab-3">
                                            <div class="gdlr-session-head-day">D&iacute;a 3</div>
                                            <div class="gdlr-session-head-date">29 Noviembre 2023</div>
                                        </div>
                                        <div class="gdlr-session-item-head-info" data-tab="gdlr-tab-4">
                                            <div class="gdlr-session-head-day">D&iacute;a 4</div>
                                            <div class="gdlr-session-head-date">30 Noviembre 2023</div>
                                        </div> 
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>MTRA. MARIANA ORTIZ CASTAÑARES</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">COORDINADORA DE INTERVENCION ESPECIALIZADA PARA APOYO JUDICIAL
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
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/s4ke7hHjVow?si=AGi9AykX90cYexwZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
									<!--		
								<div class="gdlr-session-item-content-wrapper">
									
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">-->
                                                    <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <!--<div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post aligncenter">
															<div class="entry-cover">
																<iframe width="1024" height="576" src="https://www.youtube.com/embed/J6U6aWSGrsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                                  </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           
                                          <div class="clear"></div>
                                     </div> -->
											
									<!----------------------- -->
											
									<div class="gdlr-session-item-content-wrapper">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<iframe width="1024" height="576" src="https://www.youtube.com/embed/HnPUR6jK3fU?si=oxRc7ecVwgkPVOxu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
											</iframe>
										</div>
                                    </div> 
											
									<!----------------------- -->
											
                                       <div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                  <!--  <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Luis Alberto Disanto</a></div>
																<div class="gdlr-session-item-excerpt">Director del Programa de Actualización en Psicología Investigativa Criminal (UBA).</div>
                                                            </div>
                                                        </div>
														  
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Importancia del análisis victimológico en la investigación criminal”.</h3>
												
											    
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Olga Verónica Ochoa</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga de los Centros de Convivencia Familiar del Poder Judicial del Estado de Baja California.</div>
															 </div>
														 </div>
                                                      </div>
													
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Cápsula: </div>
                                               <h3 class="gdlr-session-item-title">“La Relación de las Habilidades Parentales con las Habilidades Socioemocionales”.</h3>
												
                                                 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Mayra Alejandra Mora Miranda</a></div>
																<div class="gdlr-session-item-excerpt">Escritora e Investigadora en la evaluación e intervención psicológica en enfermedades crónico-degenerativas </div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Antídotos Prácticos para la Violencia”.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Juez Edgar Tello Arcos</a></div>
																<div class="gdlr-session-item-excerpt">Juez Séptimo familiar del Primer Partido Judicial.</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Violencia en Niñas, Niños y Adolescentes Ocasionada por la Separación de los Padres que Derivan Convivencia en un CECOFAM”.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Yesenia Reyes García</a></div>
																<div class="gdlr-session-item-excerpt">Perita en materia de Trabajo Social en la Subdirección de Trabajo Social del Poder Judicial de la Ciudad de México.</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Cápsula Informativa:</div>
                                               <h3 class="gdlr-session-item-title">“Violencia en el ámbito Familiar: Maltrato Infantil”.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Pedro Daniel González García</a></div>
																<div class="gdlr-session-item-excerpt">Psicólogo en el Centro Estatal de Convivencia Familiar del Poder Judicial del Estado de Nuevo León</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Evaluación Sistémica en Casos de Violencia Familiar”.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Fabiola Silva Escalante</a></div>
																<div class="gdlr-session-item-excerpt">Encargada Administrativa de la Unidad de Servicios Psicológicos en el Poder Judicial del Estado de Tabasco.</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Cápsula Informativa:</div>
                                               <h3 class="gdlr-session-item-title">“Ciclo de la Violencia”.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Rocío Estela López Orozco</a></div>
																<div class="gdlr-session-item-excerpt">Subdirectora de Evaluación Psicológica del Poder Judicial de la Ciudad de México.</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Amores que matan: Familicidios”.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Magdo. Dr. Raúl Aarón Romero Ortega</a></div>
																<div class="gdlr-session-item-excerpt">Consejero del Poder Judicial del Estado de México.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Jueza Mtra. Dora Nuño Mejía</a></div>
																<div class="gdlr-session-item-excerpt">Titular del Juzgado Sexto Familiar de Cuautitlán México.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Daniel Alejandro Pérez Martínez</a></div>
																<div class="gdlr-session-item-excerpt">Coordinador de Parentalidad en los Centros de Convivencia Familiar del Poder Judicial del Estado de México.</div>
																
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conversatorio:</div>
                                               <h3 class="gdlr-session-item-title">“La Coordinación de Parentalidad y sus Retos en los Juicios de Violencia Familiar”.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Leonor Olivia Ruvalcaba Vargas</a></div>
																<div class="gdlr-session-item-excerpt">Juez Especializada en Violencia Contra las Mujeres.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. María de Jesús Salazar Martínez</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga CECOFAM Chilpancingo..</div>
															 </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Cápsula Informativa:</div>
                                               <h3 class="gdlr-session-item-title">“Procedimiento de Escuchas Judiciales a Niñas, Niños y Adolescentes”.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
																<div class="session-speaker-list-item"><a>Ponente:</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Sofía Durón Cárdenas</a></div>
																<div class="gdlr-session-item-excerpt">Subdirectora del CECOFAM del Poder Judicial de la Ciudad México, sede Niños Héroes.</div>
																
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                           <div class="gdlr-session-item-content">
											<div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Prácticas Violentas como Forma de Ejercer Disciplina en las Niñas, Niños y Adolescentes”.</h3>
												 <div class="gdlr-session-thumbnail-wrapper">
                                                     
                                                  </div>
                                            </div>
                                          <div class="clear"></div>
                                     </div> 
											
											
								
							
							    </div>			
							 </div>
									
									
                         <!-- termina dia 1-->
									
									
                         <!-- inicia dia 2 -->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-2">
										<br>
									<div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
								<!----------------------- -->
											
									<div class="gdlr-session-item-content-wrapper">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<iframe width="1024" height="576" src="https://www.youtube.com/embed/0UnPwdnErN0?si=x5b_xDJW8OuMpCjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
											</iframe>
										</div>
                                    </div> 
											
									<!----------------------- -->
											
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                              <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:30 hrs.</div> -->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Carolina Santillán Torres Torija</a></div>
																<div class="gdlr-session-item-excerpt">Profesora en la Universidad Nacional Autónoma de México y miembro del Sistema Nacional de Investigadores CONACYT.</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											   <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Conductas Asociadas al Suicidio y su Relación con la Violencia”.</h3>
												  <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Diego Alberto Beaurregard Zentella</a></div>
																<div class="gdlr-session-item-excerpt">Psicólogo en la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula:</div>
                                               <h3 class="gdlr-session-item-title">“Masculinidades Libres de Violencia”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Sergio Vargas González</a></div>
																<div class="gdlr-session-item-excerpt">Consejero del Poder Judicial del Estado de México.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Ana María Castelán Rowe</a></div>
																<div class="gdlr-session-item-excerpt">Perito en Materia de Psicología en el Poder Judicial del Estado de México.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Gloria López Santiago</a></div>
																<div class="gdlr-session-item-excerpt">Perito Oficial en Materia de Psicología, en Materia de Familia y Niñez, Victimología y Género en el Poder Judicial del Estado de México.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conversatorio:</div>
                                               <h3 class="gdlr-session-item-title">“La Valoración en Psicología en los Juicios de Violencia Familiar”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Rosario Flores Rodríguez</a></div>
																<div class="gdlr-session-item-excerpt">Perita en materia de Trabajo Social en la Subdirección de Trabajo Social del Poder Judicial de la Ciudad de México.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula Informativa:</div>
                                               <h3 class="gdlr-session-item-title">“Círculo de la Violencia”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Miguel Ángel Miranda Aquino</a></div>
																<div class="gdlr-session-item-excerpt">Integrante en el Departamento de Orientación Familiar en el Poder Judicial del Estado de Morelos.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Violencia y Acceso a la Justicia de las Personas con Discapacidad en México”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Pedro Daniel Martínez Sierra</a></div>
																<div class="gdlr-session-item-excerpt">Profesor de Carrera Asociado “C” en la Escuela Nacional de Trabajo Social de la UNAM.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Niñas, Niños y Adolescentes en Escenarios de Violencia Social”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Mónica Karina Illan Meza</a></div>
																<div class="gdlr-session-item-excerpt">Jefa del Centro de Convivencia Familiar de Zapopan.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Edgar Tello Arcos</a></div>
																<div class="gdlr-session-item-excerpt">Juez Séptimo Familiar del Primer Partido Judicial.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Juez Sergio Vladimir Cabrales Becerra</a></div>
																<div class="gdlr-session-item-excerpt">Juez de Control Adscrito al Centro de Justicia para la Mujer.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Mesa de Diálogo:</div>
                                               <h3 class="gdlr-session-item-title">“Convivencia, Violencia y Protección desde los Juzgados y del CECOFAM de Zapopan del Estado de Jalisco”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Erika Trinidad Chávez</a></div>
																<div class="gdlr-session-item-excerpt">Subdirectora de Trabajo Social en el Poder Judicial de la Ciudad de México.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“La Intervención del Profesional de Trabajo Social en Casos de Violencia Familiarl”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Erika Paola García Almazán</a></div>
																<div class="gdlr-session-item-excerpt">Encargada del Centro de Convivencia Familiar Apodaca del Estado de Nuevo León.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Intervención Activa durante Convivencias Supervisadas, en Situaciones de Violencia”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Aracelli del Carmen Abundis</a></div>
																<div class="gdlr-session-item-excerpt">Supervisora y Asistente en los Juzgados Familiares y de Oralidad en el Estado de Nayarit.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. María de la Luz García Medina</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga del Poder Judicial del Estado de Nayarit, Adscrita al Centro Estatal de Convivencia Familiar.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Violencia Vicaria”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Psicóloga Clínica María Fernanda Salth Barba</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga en el Centro de Convivencia Familiar en el Poder Judicial de Chiapas.</div>
															 </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Las Emociones como Clave para la Salud Mental”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Tirso Febronio Tejeda Sanabria</a></div>
																<div class="gdlr-session-item-excerpt">Psicoterapeuta y Tallerista en la Academia Anamar Orihuela.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula:</div>
                                               <h3 class="gdlr-session-item-title">“La Importancia de la Comunicación con un Lenguaje no Violento”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
										<br>
										
										<!----------------------- -->
											
								<!--	<div class="gdlr-session-item-content-wrapper">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<iframe width="1024" height="576" src="https://www.youtube.com/embed/J6U6aWSGrsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
											</iframe>
										</div>
                                    </div> -->
											
									<!----------------------- -->
											
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
												 <!-- <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:30  hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponente</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Adriana María Isabel Núñez García</a></div>
																<div class="gdlr-session-item-excerpt">Perita en Materia de Trabajo Social en la Fiscalía de Investigación del Delito de Feminicidio, en la Fiscalía General de Justicia de la CDMX.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Espiral de la Violencia, Rueda de Poder y Control como Obstáculo en el Camino de las Mujeres Víctimas de Violencia de Género en la Búsqueda y Acceso a la Justicia”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
																<div class="session-speaker-list-item"><a>Ponentes </a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Luisa Isabel Morales Reynoso </a></div>
																<div class="gdlr-session-item-excerpt">Jueza en Línea Familiar del Poder Judicial del Estado de México.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Jueza Mtra. Nohemí García Rosales</a></div>
																<div class="gdlr-session-item-excerpt">Jueza en Línea en Materia de Violencia Familiar y Protección de Niñas, Niños y Adolescentes del Estado de México.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Olga Lidia Sanabria Téllez</a></div>
																<div class="gdlr-session-item-excerpt">Directora General del Centro de Convivencia Familiar del Poder Judicial del Estado de México.</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
												<div class="gdlr-session-item-excerpt">Conversatorio:</div>
                                               <h3 class="gdlr-session-item-title">“El Juzgado en Línea Especializado en Violencia Familiar y Protección de Niñas, Niños y Adolescentes y su Vinculación con los Centros de Convivencia Familiar”.</h3>
												
                                                 <div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Itzel Nadchie liihi Bernal de Anda</a></div>
																<div class="gdlr-session-item-excerpt">Directora de Evaluación e Intervención Psicológica del Poder Judicial de la Ciudad de México.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula Informativa:</div>
                                               <h3 class="gdlr-session-item-title">“Estadísticas de Violencia en México”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Juez Sergio Vladimir Cabrales Becerra</a></div>
																<div class="gdlr-session-item-excerpt">Juez de Control adscrito al Centro de Justicia para la Mujer en el Supremo Tribunal de Justicia del Estado de Jalisco.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“La Efectividad de los Binomios de Geolocalización para Combatir la Violencia en Razón de Género”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Cristina Peña Pedrazaa</a></div>
																<div class="gdlr-session-item-excerpt">Perito en Trabajo Social en el Poder Judicial del Estado de Nuevo León.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“La Evaluación de Trabajo Social en Situación de Violencia de Familiar”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Alejandra Maa Rosas</a></div>
																<div class="gdlr-session-item-excerpt">Terapeuta en la Clínica de la Ansiedad.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Normalización de la Violencia”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Ileska Karelia Vega Trapero</a></div>
																<div class="gdlr-session-item-excerpt">Psicóloga del Centro de Convivencia Familiar Supervisada, del Poder Judicial del Estado de Sinaloa.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Convivencias “Forzadas” una Forma de Violencia en los Conflictos jurídicofamiliares”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Fernando López Munguía</a></div>
																<div class="gdlr-session-item-excerpt">Jefe de Psiquiatría Legal del Hospital Psiquiátrico Fray Bernardino Álvarez.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Violencia: Perspectiva Psiquiátrica”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Annel Rosado Lara</a></div>
																<div class="gdlr-session-item-excerpt">Jefa del Departamento de Atención a la Violencia de Género del Consejo de la Judicatura del Poder Judicial del Estado de Yucatán.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conferencia:</div>
                                               <h3 class="gdlr-session-item-title">“Actuación Judicial con Perspectiva de Género”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Joani Lizbeth Ortíz Romero</a></div>
																<div class="gdlr-session-item-excerpt">Perita en materia de Trabajo Social en la Subdirección de Trabajo Social del Poder Judicial de la Ciudad de México.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Cápsula Informativa:</div>
                                               <h3 class="gdlr-session-item-title">“Violencia Económica, una Perspectiva desde Trabajo Social”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Alejandra Nieves Ramírez</a></div>
																<div class="gdlr-session-item-excerpt">Perita en Psicología en el Poder Judicial del Estado de Morelos.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Jesús Salvador López Gutiérrez</a></div>
																<div class="gdlr-session-item-excerpt">Dictaminador Pericial en Materia de Psicología en el Poder Judicial del Estado de Morelos.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											    <div class="gdlr-session-item-excerpt">Conversatorio:</div>
                                               <h3 class="gdlr-session-item-title">“Alcances y Limitaciones en las Convivencias Familiares Supervisadas”.</h3>
												<div class="gdlr-session-thumbnail-wrapper">
                                                     
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
									
									<br>
									<!----------------------- -->
											
								<!---	<div class="gdlr-session-item-content-wrapper">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<iframe width="1024" height="576" src="https://www.youtube.com/embed/J6U6aWSGrsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
											</iframe>
										</div>
                                    </div> -->
											
									<!----------------------- -->
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                 <!--<div class="session-info session-time"><i class="fa fa-clock-o"></i>09:00 – 09:40 hrs       </div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes</a></div>
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
                                                    <div class="gdlr-speaker-thumbnail"><img src="rede_1_cecofam/red/images/img_ponentes/Olga_Veronica_Ochoa.jpg" alt width="400" height="400"></div>
                                                    <div class="gdlr-speaker-item-content">
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Psic. Olga Verónica Ochoa</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-50>
                                                            <div class="gdlr-paypal-form-wrapper">
                                                                <h3 style="text-align: justify">
                                                                    Lic. En Psicología.
Maestría en Educación Inclusiva.<br>
Especialidad en Evaluación Neuropsicológica Infantil.<br>
Más de 14 años trabajando en Orientación familiar y educativa.<br>
Coordinadora Psicopedagógico en diferentes instituciones educativas del área privada.<br>
Docente del Programa de Educación Socioemocional a adolescentes.<br>
Psicóloga de los Centros de Convivencia Familiar del Poder Judicial del Estado de Baja California (CECOFAM).
<br>
Fue premiada con el Reconocimiento al Ejercicio Profesional del Trabajo Social de la Ciudad de México 2019. Categoría: “Buenas prácticas de intervención social con personal adultas mayores”.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class="gdlr-ticket-button" href="#gdlr-form-50" data-rel="fancybox" data-fancybox-type="inline">Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class="gdlr-speaker-thumbnail"><img src="rede_1_cecofam/red/images/img_ponentes/Cinthya_Magdalena_Torres.jpg" alt width="400" height="400"></div>
                                                    <div class="gdlr-speaker-item-content">
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Psic. Cinthya Magdalena Torres García </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-51>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style=text-align: justify>
                                                                   Lic. En Psicología.<br>
Especialista en Psicología infantil, abuso sexual y derechos de la infancia.<br>
Más de 10 años trabajando con los derechos de la infancia.<br>
Coordinadora del Programa infantil Centro de Atención y Orientación Familiar, A.C. (CENAFAM).<br>
Operadora de Programa de riesgo psicosociales del Desarrollo Integral de las Familias (DIF).<br>
Coordinadora de los Centros de Convivencia Familiar del Poder Judicial del Estado de Baja California (CECOFAM).<br>


                                                                </h3>
                                                            </div>
                                                        </div>
                                                     <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-51 data-rel="fancybox" data-fancybox-type="inline">Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class="gdlr-speaker-thumbnail"><img src="rede_1_cecofam/red/images/img_ponentes/Rocio_Estela_Lopez_Orozco.jpeg" alt width="400" height="400"></div>
                                                    <div class="gdlr-speaker-item-content">
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dra. Rocio Estela López Orozco</h3>
                                                        <div class="gdlr-lightbox-form" id="gdlr-form-52">
                                                            <div class="gdlr-paypal-form-wrapper">
                                                               <h3 style="text-align: justify">
                                                                    LICENCIATURA EN PSICOLOGIA POR LA UNAM (Ced: 2792046)<br>
ENTRENAMIENTO ESPECIALIZADO EN AUTOPSIA PSICOLOGICA POR EL INSTITUTO CUBANO DE ANTROPOLOGIA. (Certificado No. 329)<br>
MAESTRIA EN PREVENCION DEL DELITO Y SISTEMAS PENITENCIARIOS POR EL IPIP.  (Céd: 4333791)<br>
DOCTORADO EN CIENCIAS PENALES Y POLITICA CRIMINAL POR EL INACIPE. CON MENCION HONORIFICA. (Céd. 08711976)<br>
ESPECIALIDAD EN PSICOLOGIA FORENSE POR EL INSTITUTO DE CIENCIAS JURIDICAS DE NAYARIT (Diploma)<br>
ESPECIALIZACIÓN EN GRAFOLOGÍA Y PERICIA CALIGRÁFICA. FUNIBER (cursando actualmente)<br>
EXFUNCIONARIA DEL SISTEMA PENITENCIARIO (Coordinadora de técnicos penitenciarios, Jefa del C.O.C. de la Penitenciaría de Santa Martha Varonil, Jefa de Reclutamiento y selección de personal, Capacitadora profesional en el Instituto de Capacitación Penitenciaria)<br>
EXFUNCIONARIA DEL SISTEMA DE JUSTICIA PARA ADOLESCENTES (Coordinadora de tratamiento en el Centro de Atención Especial Quiróz Cuarón, Subdirectora del Centro varonil de San Fernando, Tlalpan, Directora del área de prevención)<br>
ASESORA PENITENCIARIA DEL GRUPO PRECOOR (Empresa dedicada a la elaboración de diagnósticos prospectivos del funcionamiento de prisiones e instituciones para menores infractores a nivel nacional)<br>
JURADO INTERNACIONAL DEL MILLENIUM PROJECT DE LA ORGANIZACIÓN DE NACIONES UNIDAS EN CRIMEN TRANSNACIONAL ORGANIZADO.<br>
EXPOSITORA EN FOROS NACIONALES E INTERNACIONALES<br>
AUTORA DEL LIBRO: PSICOLOGIA FORENSE: DE LA TEORIA A LA PRACTICA, EDITORIAL VESALIUS, MEXICO 2020 (DIVERSAS PUBLICACIONES NACIONALES E INTERNACIONALES).<br>
ACTUALMENTE SE DESEMPEÑA COMO SUBDIRECTORA DE EVALUACION PSICOLOGICA DEL PODER JUDICIAL DE LA CDMX.
<br>


                                                               </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class="gdlr-ticket-button" href="#gdlr-form-52" data-rel="fancybox" data-fancybox-type="inline">Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class="gdlr-speaker-thumbnail"><img src="rede_1_cecofam/red/images/img_ponentes/Oscar_Ricardo_Galicia_Costilla.jpg" alt width="400" height="400"></div>
                                                    <div class="gdlr-speaker-item-content">
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Oscar Ricardo Galicia Castillo</h3>
                                                        <div class="gdlr-lightbox-form" id="gdlr-form-5">
                                                            <div class="gdlr-paypal-form-wrapper">
                                                                 <h3 style="text-align: justify">
                                                                    Oscar Galicia Castillo estudió la Licenciatura en psicología en la Facultad de psicología de la UNAM, realizó su tesis de licenciatura en el Laboratorio de Neurofarmacología del Dr. Simón Brailowsky Klipstein donde se graduó con mención honorífica en 1992 con la tesis: “Efecto de la infusión crónica de GABA en el cuerpo estriado de la rata, en una tarea de alternancia espacial”.<br> Desarrollando en el proceso habilidades en técnicas de registro electrofisiológico y análisis de señales eléctricas que seguiría utilizando durante toda su formación de postgrado. Posteriormente realizó estudios de Maestría en Investigación Biomédica en el Departamento de Neurociencias del Instituto de Fisiología Celular de la UNAM, donde no optó por el título para continuar sus estudios de Doctorado en Investigación Biomédica en el Departamento de Fisiología de la Facultad de Medicina de la UNAM en el Laboratorio de Sueño, Neuroinfecciones y canabinoides del Dr. Oscar Prospéro García, donde se gradúa en el 2002 con la tésis “Efecto de la inyección de la proteína VIHgp120 sobre el potencial P300 en la rata”. Donde genera un modelo experimental para el registro de potenciales evocados de latencia larga en la rata. <br> En agosto del 2002 ingresó al Departamento de Psicología de la Universidad Iberoamericana como Jefe del Área de Procesos Básicos y posteriormente como Jefe del recien creado laboratorio de Neurociencias. En este mismo departamento ha sido Coordinador del Postgrado del Departamento de Psicología y Coordinador de la Licenciatura en Psicología.<br> Actualmente se desempeña como Jefe del Area de Procesos Básicos y Jefe de los laboratorios de Neurociencias y es miembro del Sistema Nacional de Investigadores del Conahcyt.<br> Sus líneas de investigación principales son la Fisiología de la conducta emotiva particularmente la agresión, la violencia y la atracción. Adicionalmente estudia los efectos fisiologicos y conductuales de los canabinodes.<br>

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Pedro_Daniel_Martinez_Sierra.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Pedro Daniel Martínez Sierra</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-6>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Doctor en Pedagogía por la Universidad Nacional Autónoma de México, graduado con mención honorifica. Maestro en Trabajo Social por la UNAM, acreedor a la medalla de posgrado “Alfonso Caso” versión 2012. Licenciado en Trabajo Social por de la UNAM, titulado por totalidad de créditos y alto rendimiento académico.<br> Técnico en Trabajo Social y acreedor a la Medalla al “Mérito Estudiantil versión 2003”. Docente en universidades públicas y privadas de nivel posgrado, licenciatura y bachillerato.<br> Conferencista y ponente en congresos nacionales e internacionales de Trabajo Social y Educación. Profesor invitado a la cátedra de “Bases teóricas de Trabajo Social” en la Facultad de Trabajo Social de la Universidad Complutense de Madrid, España.<br> Ha publicado diferentes artículos y capítulos de investigación y participado como dictaminador de libros, artículos y ponencias nacionales e internacionales.<br> Forma parte del Sistema Nacional de Investigadores como Investigador Nacional Nivel I.<br> Actualmente se desempeña como Profesor de Carrera Asociado “C” de Tiempo Completo en la Escuela Nacional de Trabajo Social de la UNAM, bajo el eje temático de grupos de atención prioritaria, específicamente en la línea de investigación social de niñas, niños y adolescentes.


                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-6 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												
                                              <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Angelica_Mena_Ramirez.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Angélica Mena Ramírez</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-7>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Trabajo Social por la Universidad Nacional Autónoma de México (UNAM), se encuentra como pasante de la especialidad en modelos de intervención con jóvenes y mediadora energética. <br>Ha colaborado en proyectos específicos de carácter social a través de la UNAM con diferentes instituciones de sector público y privado (Instituto del Fondo Nacional de la Vivienda para los Trabajadores, Comisión Federal de Electricidad, Instituto Mexicano del Seguro Social, Secretaría de Desarrollo Social, Ingenieros Civiles Asociados, Fundación Carlos Slim, entre otras) con la finalidad de intervenir en la elaboración, diseño, coordinación, aplicación y evaluación. Ha impartido clases en el Centro de Educación Continua de la Escuela Nacional de Trabajo Social (CEC) sobre “Diseño de proyectos comunitarios” y S.O.S Manejo terapéutico en abuso sexual; cuenta con diez años de experiencia en trabajo con comunidades y grupos. <br>Actualmente se desempeña como Perita adscrita a la Subdirección de Trabajo Social del Poder Judicial de la Ciudad de México. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-7 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Tirso_Febronio_Tejeda_Sanabria.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Tirso Febronio Tejeda Sanabria</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-8>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Experiencia profesional. <br>  Egresado de la Universidad Nacional Autónoma de México, Facultad de Estudios Superiores Zaragoza, cómo Licenciado en Psicología y diplomado en Docencia Universitaria, con Master en MUSICOTERAPIA HUMANISTA, por el Instituto Mexicano de Musicoterapia Humanista,  más de 10 años de experiencia facilitando procesos emocionales y de crecimiento personal, individual y grupal, en diferentes espacios profesionales.<br> 
																	He trabajado como docente y tallerista en distintos programas del área educativa. Incluyendo la co-creación e impartición del diplomado de “Musicoterapia Integral para la infancia y la adolescencia” en el Centro de Estudios Superiores, dentro del Hospital Nacional siglo XXI
Trabajé como co-facilitador y docente dentro del Instituto Mexicano de Musicoterapia Humanista, en la formación del Master en Musicoterapia Humanista durante 4 años
Trabajando actualmente como parte del equipo de psicoterapeutas y tallerista en Academia Anamar Orihuela, donde atiendo consultas individuales de terapia y acompañando grupos de crecimiento personal.<br> 
Trabajé  en el Tribunal Superior de Justicia de la Ciudad de México, EN  sesiones de apoyo psicológico individual, impartiendo talleres de desarrollo personal y cómo autor de distintos artículos de la Gaceta desarrollo humano, como parte del Programa de Apoyo Psicológico y Emocional. Actualmente laborando dentro de esta misma institución, dentro del Centro de Convivencia Familiar, en el  área de talleres.<br>
Desarrollo personal.<br>Desde hace más de 20 años la salud mental ha sido una búsqueda personal en mi proceso de vida, para mi es una búsqueda que nace desde la percepción de mis propios conflictos, asuntos pendientes y crisis emocionales, la vida me ha enseñado sobre la importancia de recibir apoyo.<br>
En mi trabajo con la música, he aprendido que es un potenciador natural de nuestros estados emocionales, hay una sabiduría en los instrumentos y en las piezas musicales que proporcionan la contención, expresión, apoyo y consciencia.<br>
Considero al espacio psicoterapéutico, como un lugar de aprendizaje sagrado y seguro, en el que los consultantes pueden explorar sus conflictos, creencias, corporalidad, emociones e imágenes internas. Creo en el desarrollo de una nueva humanidad, más justa, respetuosa, amorosa y consciente de sí misma.<br>



                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-8 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												
												
											<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Erika_Trinidad_Chavez.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Erika Trinidad Chávez</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-9>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                               <h3 style="text-align: justify">
                                                                    Licenciada en Trabajo Social por la Escuela Nacional de Trabajo Social, actualmente Maestrante en Trabajo Social; diplomada en peritaje en materia de Trabajo Social, teoría y práctica docente y mediación familiar, todos por la Universidad Nacional Autónoma de México.<br>  Es Consejera en Trabajo Social del Grupo Hibrys “Adultos Mayores Emprendedores”, docente en la Escuela Nacional de Trabajo Social de la UNAM y en el Colegio de Trabajadores Sociales de México A.C., ha fungido como perito en Trabajo Social de manera oficial y particular, actualmente se desempeña como Subdirectora de Trabajo Social del Tribunal Superior de Justicia de la Ciudad de México.<br>  Fue premiada con el Reconocimiento al Ejercicio Profesional del Trabajo Social de la Ciudad de México 2019. Categoría: Buenas prácticas de intervención social con personal adultas mayores. <br> 

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Joani_Lizbeth_Ortiz_Romero.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Joani Lizbeth Ortiz Romero</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-25>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Trabajo Social por la Universidad Nacional Autónoma de México, con experiencia profesional en el ámbito de peritaje social; desde el 2018 se encuentra adscrita a la Subdirección de Trabajo Social de la Coordinación de Intervención Especializada para Apoyo Judicial del Tribunal Superior de Justicia de la Ciudad de México, con el nombramiento de Perita en Trabajo Social, espacio donde ha recibido capacitación, a través, del diplomado, “Peritaje en Materia de Trabajo Social”, por la Universidad Nacional Autónoma de México, Escuela Nacional de Trabajo Social, Centro de Educación Continua, 2019, “Mediación Familiar”.<br>  Tribunal Superior de Justicia 2018, Consejo de la Judicatura, Centro de Justicia Alternativa del Tribunal Superior, y Coordinación de Intervención Especializada para el Apoyo Judicial, todos de la Ciudad de México, “Investigación Social y la Construcción del Informe Pericial”, Academia Forense Chile y taller de contrainterrogatorio avanzado para peritos. <br> 
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-25 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Maribel_Campos_Delgado.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Maribel Campos Delgado</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-26>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                  Licenciada en Trabajo Social por la Universidad Nacional Autónoma de México (UNAM); se encuentra como pasante de la especialidad en modelos de intervención con adultos mayores. Ha colaborado en proyectos con la UNAM para el diseño, análisis y resultados de la evaluación de programas sociales dentro de la Alcaldía Coyoacán; cuenta con conocimiento y experiencia en investigación de campo, así como en el análisis y sistematización de información. Posee formación como perito en Trabajo Social Forense.<br> Ha colaborado como perita oficial en el Poder Judicial del Estado de México y actualmente se desempeña como Perita adscrita a la Subdirección de Trabajo Social del Poder Judicial de la Ciudad de México.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-26 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Yesenia_Reyes_Garcia.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Yesenia Reyes García </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-27>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                Licenciada en Trabajo Social por la Universidad Nacional Autónoma de México, profesionalizada como perito a través del diplomado de “Peritaje en Materia de Trabajo Social 2022” impartido por el Colegio de Trabajadores Sociales de México A.C. y delCurso taller: “Investigación Social y la Construcción del Informe Pericial” con  por parte de la academia Forense de Chile, Diplomado “La suprema Corte y los DerechosHumanos 2021” impartido por la  “Situación jurídica de la familia” por la Escuela Nacional de Trabajo 2017, Taller “Contrainterrogatorio avanzado para peritos 20 22” por el Tribunal Superior de Justicia, desde el año 2022 Perito en materia de Trabajo Social, adscrita a la Subdirección de Trabajo Social del Poder Judicial de la Ciudad de México, donde ha desarrollado mencionada función principalmente en procedimientos del ámbito familiar.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-27 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Adriana_Isabel_Nunez_Garcia.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Adriana María Isabel Núñez García</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-28>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                 <h3 style="text-align: justify">
                                                                   Licenciada en Trabajo Social por la Universidad Nacional Autónoma de México (UNAM),
Maestra en Trabajo Social por la UNAM recibiendo mención honorífica por su defensa de
tesis de maestría. Escribió un libro sobre juventudes en el barrio de Tepito editada por la
UNAM. Ha participado como ponente en diferentes foros, congresos y conversatorios a
nivel nacional e internacional, por mencionar algunos lugares como: el Senado de la
República, diálogos en confianza, la Universidad de Costa Rica, la Universidad de
Chapingo, la Escuela Nacional de Trabajo Social, la unidad de posgrado de la UNAM y
COMECSO. <br>
																	 Se ha desempeñado durante 10 años como Trabajadora Social en áreas críticas del
Hospital General Ajusco Medio, Ha sido docente desde hace 5 años en la Escuela
Nacional de Trabajo Social de la UNAM, fungió como Juez Dictaminador del programa
(PACMYC), actualmente es Perita en Materia de Trabajo Social en la Fiscalía de
Investigación del Delito de Feminicidio. <br>

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Alejandra_Maa_Rosas.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Alejandra Maa Rosas </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-29>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    <br> 

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-29 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Itzel_Nadchie_liihi_Bernal_de_Anda.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">ITZEL NADCHIE LIIHI BERNAL DE ANDA</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-30>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Es licenciada y maestra en psicología por la Universidad Nacional Autónoma de
México. En la actualidad es candidata a Doctora en el Programa de Posgrado de
Psicología en la misma casa de estudios, desarrolló investigación relacionada con
familias en conflictos judiciales. Tiene una certificación por la UC Davis Health
para aplicar la terapia PC- CARE, intervención especializada para mejorar la
relación parento-filial. Cuenta con experiencia en psicoterapia clínica de 25 años,
abordando diferentes problemáticas infantiles, familiares y de adultos. Ha
participado como docente a nivel licenciatura y posgrado en distintas
universidades a nivel nacional. Actualmente ocupa el puesto de Directora de
Evaluación e Intervención Psicológica del PJCDMX. <br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-30 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Mayra_Alejandra_Mora_Miranda.jpg " alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Mayra Alejandra Mora Miranda</h3> 
                                                        <div class=gdlr-lightbox-form id=gdlr-form-31>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Maestra en Psicología por la Universidad Nacional Autónoma de México con especialidad
en Medicina Conductual. Docente con 12 años de experiencia a nivel licenciatura y
posgrado en el área clínica y de la salud para la Universidad Nacional Autónoma de
México, FES-Iztacala, la Universidad Anáhuac, Campus Sur y la Universidad
Panamericana. Terapeuta cognitivo-conductual con 16 años de experiencia clínica en
temas de ansiedad, depresión, estrés, violencia y pareja; cuenta con una especialidad en
psicooncología y cuidados paliativos desde el 2009 y un diplomado en alimentación
consciente en el 2022. <br> Ha sido tallerista y capacitadora en diversos temas de salud tanto
a nivel en diversas organizaciones privadas y públicas.<br>  Fue prestadora de servicios
especializados en atención psicológica y supervisión durante confinamiento por COVID-19
a nivel público y privado abordando aspectos asociados al estrés, insomnio, soledad y
aislamiento, violencia y primeros auxilios psicológicos.<br>  En los últimos 10 años, ha escrito
y presentado trabajos de investigación relacionados con la supervisión clínica, y la
evaluación e intervención psicológica en enfermedades crónico-degenerativas.<br> 

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-31 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Sandra_Gabriela_Cedillo_Chacon.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Sandra Gabriela Cedillo Chacón.</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-32>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                               <h3 style="text-align: justify">
                                                                   Candidata a Doctora en Terapia Familiar y de Pareja por el Instituto Regional de la
Familia.
-  Maestra en Terapia Familiar Sistémica por el Instituto Regional de la Familia.
- Licda. Psicología por la Universidad Carls Rogers . 
- Licda. Derecho por la Universidad Interamericana.
- Hipnoterapeuta por la UNAM.
- Diplomado en XXII Diplomado Multidisciplinario sobre Violencia Familiar y
Derechos Humanos, 2023 por la UNAM.
- Diplomado en Bioética y Derecho por el Instituto de Formación y Actualización
Judicial.
- Diplomado en Derechos Humanos por la Universidad Autónoma de Chihuahua. 
- Diplomado en Coparentalidad.
- Diplomado en Diversos acercamientos Terapéuticos por la Universidad Carls
Rogers. 
- Diplomado en Criminalística, por el Centro Universitario de Ciudad Juárez. 
-  Diplomado en Criminología por el Centro Universitario de Ciudad Juárez.
-  Diplomado en Investigación por el Centro de Investigación y Seguridad Nacional. 
- Especialidad en Seguridad Pública y Privada por el Centro Universitario de
Ciudad Juárez. 
- Certificación Internacional en Terapia Familiar Colaborativa basada en Fortalezas
Adolescentes desafiantes y sus familias.
- Certificación Internacional en abordaje del Suicidio desde el modelo Centrado en
Soluciones.
- Constancia de Curso Taller “Internacional de prácticas narrativas, trabajo con
quienes ejercen y quienes resisten el abuso y la violencia”.
- Constancia Curso de “Paquete de Servicios Esenciales” por Spotlight.
- Múltiples cursos y talleres en materia de Psicología, Derechos Humanos e
Perspectiva de Género.<br> 
																   
EXPERIENCIA LABORAL 

Actualmente:
-Adscrita como Asesora Técnica en la Dirección de Derechos Humanos e
Igualdad de Género, del Tribunal Superior de Justicia del Estado de
Chihuahua.
																   
Entre mis actividades se encuentran:

-Acompañamiento a Víctimas de Violencia Laboral, Acoso y
Hostigamiento Sexual en los Procesos de Responsabilidades
Administrativas.
- Diseño y estrategias de acompañamiento multidisciplinario para las
víctimas.
- Desarrollo de Protocolos relacionados con la violencia laboral,
acoso y hostigamiento sexual, así como de aquellos que tengan
que ver con la NOM-035-STPS-2018.
- Encargada del Programa de Prevención a la Violencia Laboral.
- Capacitadora en temas relacionados con la Violencia Laboral,
Acoso y Hostigamiento Sexual, asi como de Sensibilización en
temas relacionados con la Violencia de Género.
- Coordinadora de conferencias, mesas de trabajo y encuentros
relacionados con Psicología Jurídica.
- Psicoterapeuta e Hipnoterapeuta en el ámbito privado. 
- Conferencista, capacitadora y talleristas en el hábito particular.<br>
																   
 Así mismo laboré como:

-  Titular de la Dirección de Derechos Humanos e Igualdad de Género del Poder
Judicial del Estado de Chihuahua.
- Coordinadora del Centro de Convivencia Familiar Supervisada del Tribunal
Superior de Justicia del Distrito Judicial Morelos. 
- Coordinadora del área de Psicología de la Granja Hogar.  
- Docente del Instituto Regional de la Familia en Maestría y especialidad
en Atención y prevención a la Violencia Familiar.

- Conferencista, capacitadora, tallerista y diseñadora en temas relacionados con
la Atención a la Familia de la asociación civil, Escuela para Padres ONEAMI.  
- Coordinadora del Comité Ciudadano y Previamente Analista e
Investigadora criminológica en la Dirección de Seguridad Pública Municipal.
- Investigadora en el Centro de Investigación y Seguridad Nacional.
																   

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Sofia__Duron_ Cardenas.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Sofía Durón Cárdenas</h3>
													
                                                        <div class=gdlr-lightbox-form id=gdlr-form-12>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Originaria de la Ciudad de México. Estudió la carrera de Ciencias de la
Comunicación, así como la de Psicología en la Universidad del Valle de México.<br>
Tiene una especialidad en Logoterapia por la Universidad Anáhuac y es
Maestra en Psicología por la Universidad del Valle de México, además de
estudiar Ciencias Bíblicas y formación personal.<br>

Durante su ejercicio profesional desarrolló, implementó y participó en proyectos estratégicos de
comunicación y mercadotecnia para promocionar diferentes carreras en las preparatorias de la
Ciudad de México. En Caritas V Vicaría creó e impartió cursos, conferencias y talleres de
autoayuda para la mejora en la calidad de vida de las personas; dio asesorías psicológicas
individuales. Además, fue dirigente Comunitaria de Moral, Eclesiología y Vida Interior e impartió
pláticas en Estados Unidos a las poblaciones hispanas de Ohio, Cincinnati, Columbus y Los Ángeles.
Actualmente continúa impartiendo conferencias, talleres y asesorías psicológicas en diferentes
parroquias y grupos de autoayuda como Codependientes anónimos, comedores compulsivos y
Alcohólicos anónimos.<br>
En el año 2013 comenzó a laborar en el Tribunal Superior de Justicia de la Ciudad de México, ahora
Poder Judicial; realizó Evaluaciones Psicológicas, Asistencias Técnicas en audiencias, supervisó
Convivencias de las niñas, niños y adolescentes en el Centro de Convivencia Familiar Supervisada,
posteriormente formó parte del equipo de Entrevista Diagnóstica de dicho Centro y actualmente
es Subdirectora de Sede del CECOFAM.<br>
A tomado diferentes cursos y congresos en relación a su labor como servidora pública y psicóloga
del Poder Judicial. <br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-12 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Juan_Alejandro_Anguiano.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtro. Alejandro Anguiano</h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-13>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Profesional con 15 años de experiencia en la elaboración de proyectos
sociales, comunitarios e institucionales para la prevención social de la
violencia desde el enfoque de los estudios de género de los hombres.<br>
 Licenciado en psicología por la Escuela Superior de Psicología de
Ciudad Juárez.<br>
 Maestro en Psicoterapia Humanista y Educación para la Paz por la
Universidad Autónoma de Ciudad Juárez.<br>
 Diplomado en estudios e intervención para la paz desde una
perspectiva de derechos humanos, en prevención social de la violencia
y la delincuencia, en víctimas del delito y de violaciones a sus derechos
humanos, en psicoterapia basada en Mindfulness.<br>
 Estudios en trauma psicosocial, formación en círculos transformativos
para la prevención y transformación de conflictos, asistencia integral a
varones que ejercen violencia de género, evaluación psicológica
forense de mujeres víctimas de violencia de género.<br>
 Coordinador del Centro Municipal para la Atención y Trabajo con
Hombres y Masculinidades.<br>
 Co-fundador de la asociación civil Hombres en Rumbo de
Restablecimiento y Equidad Social.<br>
 Creador del modelo para la atención a hombres que ejercen violencia
de género “Las 4Rs de la responsabilidad”.<br>
 Integrante de la Red Latina para el Trabajo Critico con Hombres que
Ejercen Violencia de Género.<br>
 Titular de la Dirección de Estudios Psicológicos y Socioeconómicos y
los Centros de Convivencia Familiar Supervisada del Poder Judicial del
Estado de Chihuahua (2018-2022).<br>
 Psicoterapeuta particular.<br>
 Perito y asesor psico jurídico particular. <br>

                                                                </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-13 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Luis_Alberto_Disanto.jpeg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Luis Alberto Disanto</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-14>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciado en Psicología (UBA), Especialista en Investigación Científica del
delito (IUPFA), Especialista en Psicología Clínica con Orientación
Psicoanalítica (UBA), Magister en Perfilacion y Análisis del Comportamiento
Criminal (Universitat de Barcelona), Co-Director Diplomados Criminalística,
Criminología y Psicología Investigativa (Universidad Siglo 21), Director del
Programa Actualización en Psicología Investigativa Criminal (UBA).<br> Autor de
artículos publicados en Argentina, Chile, Colombia, España, EE.UU y México.
Docente UBA, Universidad Siglo 21, Universidad Internacional de Andalucía y
Universidad Nacional de Córdoba. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-14 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Fernando_Lopez_Munguia.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. FERNANDO LÓPEZ MUNGUÍA</h3>
													
                                                        <div class=gdlr-lightbox-form id=gdlr-form-38>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                               - LICENCIADO EN MEDICINA Y CIRUGÍA (UNAM).<br>
- ESPECIALISTA EN PSIQUIATRÍA (UNAM y Hospital Psiquiátrico “Fray
Bernardino Álvarez”).<br>
- ESPECIALISTA EN PSIQUIATRÍA FORENSE (Universidad Complutense de
Madrid, España).<br>
- MIEMBRO RE-CERTIFICADO DEL CONSEJO MEXICANO DE PSIQUIATRÍA,
A.C. NÚMERO: 9820814
- EX-PRESIDENTE DE LA ASOCIACIÓN PSIQUIÁTRICA MEXICANA, A.C.
- EX-SUBDIRECTOR MÉDICO DEL HOSPITAL PSIQUIÁTRICO “FRAY
BERNARDINO ÁLVAREZ”.<br>
- PROFESOR TITULAR DE PSIQUIATRÍA FORENSE CURSO DE POSGRADO
PARA MÉDICOS ESPECIALISTAS (UNAM)
- PROFESOR DE PSIQUIATRÍA FORENSE, CURSO DE ESPECILIZACIÓN EN
PSIQUIATRÍA. UNAM.<br>
- PROFESOR DE PSIQUIATRÍA EN PRE-GRADO EN LA UNIVERSIDAD
AUTÓNOMA DE MÉXICO Y EN LA UNIVERSIDAD AUTÓNOMA
METROPOLITANA.<br>
- JEFE DE PSIQUIATRÍA LEGAL DEL HOSPITAL PSIQUIÁTRICO FRAY
BERNARDINO ÁLVAREZ.<br>
- PERITO EN PSIQUIATRÍA EN LA PRÁCTICA PRIVADA.
-CONFERENCISTA NACIONAL E INTERNACIONAL EN TEMA DE
PSIQUIATRÍA FORENSE.<br>
-AUTOR Y COAUTOR EN DIVERSAS PUBLICACIONES (LIBROS Y REVISTAS)
ESPECIALIZADAS EN PSIQUIATRÍA.<br>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Ignacio_Bautista_SantamarIa.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> LIC. IGNACIO BAUTISTA SANTAMARIA </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-16>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciado en Psicología por la Universidad Nacional Autónoma de México.<br>
Ha realizado diversos cursos y diplomados, entre los que destacan:<br>
Diplomado de Actualización Profesional: “Terapia Familiar Sistémica”, (2005). <br>
Taller: “Diálogo Estratégico Aplicado”.<br>
Cursos de: Pruebas Psicológicas (varios).<br>
Taller: “Supervisión Clínica, Aplicación Contemporánea del Modelo Terapia Breve Resolución de Problemas”.<br>
Curso: “El Coordinador de Parentalidad en Familias de Alto Conflicto.”<br>
Diplomado en línea “Coordinación Parental: Una respuesta a los divorcios conflictivos”.<br>
Curso: “Programa de capacitación para la implementación de la Coordinación Parental en el Poder Judicial de la Ciudad de México”.<br>
Diplomado “Coordinación Parental: Una Propuesta a los Divorcios Conflictivos”.<br>
Diplomado Online “Técnicas de Intervención Breve, Sistémica y Posmoderna”.<br>
Dentro de su trayectoria en el Tribunal Superior de Justicia de la Ciudad de México la cual inicio en el año 2015, ha colaborado en Evaluación Psicológica y Asistencia Técnica en Salas y Juzgados.<br>
Desde el año 2020 está adscrito al Centro de Convivencias Familiar Supervisada como Coordinador Parental. Asimismo, durante 22 años ha ejercido como terapeuta familiar particular y en instituciones no gubernamentales.
<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-16 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Luz_Angelica_Brisset_Jimenez_San_Pedro.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Luz Angélica Brisset Jiménez San Pedro </h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-17>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Lic en Derecho y Mtra. en Derecho Penal con énfasis en Juicios Adversariales, por
la Universidad Latina.<br> 
Abogado litigante con conocimiento en materia familiar, laboral y fiscal. Servidor
Público.<br> 
Experiencia laboral:<br> 
7 años de experiencia en el TSJCDMX dentro del Área Jurídica en la 6ta Sala Civil
y Juzgado 26° Civil. Actividades administrativas y Asistente de Dirección en
CECOFAM.<br> 
3 años en el área de Coordinación Parental en TSJCDMX desde la creación e
implementación de la figura a la fecha.<br> 
Abogado litigante en Iniciativa privada, Corporativo PROSUM en materia Fiscal.
Otros estudios:<br> 
- Diplomado “Coordinación Parental: Una respuesta a los Divorcios Conflictivos”<br> 
- Diplomado “Técnicas de Intervención Breve, Sistemática y Postmoderna”<br> 
- Diplomado “Formación en Coordinación de Parentalidad”<br> 
- Mediación y resolución pacífica de conflictos<br> 
- Cursos en temas de Derechos Humanos, Derechos niños, niñas y adolescentes,
Padres e Hijos Frente al Divorcio, Violencia Vicaria.<br> 
- Cursos impartidos por Organizaciónes internacionales como la ONU, en temas
de Género para empezar; Marcos internacionales para la igualdad de género,
Violencia en contra de Mujeres y niñas y Migración.<br> 
                                                                </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-17 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Paola_Viloria_Ochoa.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Paola Viloria OchoaN</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-18>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Licenciada en Psicología por la Universidad Nacional Autónoma de México
(UNAM) y Maestra en Psicomotricidad, por el Colegio Internacional de Educación
Superior (CIES).<br>
Ha realizado diversos diplomados y cursos, entre los que destacan:<br>
 Diplomado en Estimulación e Intervención temprana.<br>
 Diplomado en Psicoterapia de Juego.<br>
 Diplomado en Psiquiatría.<br>
 Diplomado en técnicas de Vanguardia para la selección y evaluación de
personal.<br>
 Diplomado en Administración Gerencial de Recursos Humanos.<br>
 Inteligencia emocional en la familia.<br>
 Tanatología.<br>
 Primeros Auxilios emocionales y psicológicos por COVID.<br>
 Desarrollo Neuromotor.<br>
 Salud Mental.<br>
 Salud pública y migración.<br>
 Terapia sistémica.<br>
 Seminario de atención a víctima del delito.<br>
 ABC para el abordaje psicoterapéutico de divorcios conflictivos.<br>
Experiencia laboral de 24 años en distintos ámbitos de la psicología. Durante 11 años
laboró en Centros de Control de Confianza del ámbito federal, realizó evaluaciones
psicológicas, y análisis de competencias laborales, ocupó puestos de evaluadora, jefa de
departamento, Subdirectora y Directora del área de Psicología de dependencias federales
y seguridad nacional. <br> Desde 2023 se encuentra adscrita en la Coordinación de
Intervención Especializada para el Apoyo Judicial, en el TSJCDMX desempeñando
funciones de Coordinadora de la Coordinación Parental. <br> Experiencia como terapeuta de 7
años. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-18 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Rosario_Flores_Rodriguez.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Rosario Flores Rodríguez</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-19>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3>
                                                                   Licenciada en Trabajo Social por la Universidad Nacional Autónoma de México, profesionalizada como perito a través del diplomado de “Peritaje en Materia de Trabajo Social” y del curso “Fundamentación y Desahogo Escrito y Oral de la Prueba Pericial en Trabajo Social”, con formación especializada en materia de Derechos Humanos, por acreditación de los diplomados “La Suprema Corte y los Derechos Humanos 2022”, “Protección y Defensa de los Derechos Humanos” y “Desarrollo Integral con Perspectiva de Derechos Humanos”, otorgados por la Suprema Corte de Justicia de la Nación y la Comisión Nacional de los Derechos Humanos; desde el año 2019 Perito en materia de Trabajo Social, adscrita a la Subdirección de Trabajo Social del Poder Judicial de la Ciudad de México, donde ha desarrollado mencionada función principalmente en procedimientos del ámbito familiar y de derechos humanos, complementado dicha actuación con los cursos adicionales de “Ley de Protección de Datos Personales”, “Servidor Público”, “Genero, Masculinidades y Lenguaje Incluyente y No Sexista”, “Derecho al Trabajo”, “Derechos de las Personas con Discapacidad”, “Derechos Sexuales y Reproductivo”, “Derecho de la Diversidad Sexual”, entre otros. <br>

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Maria_Fernanda_Gonzalez_Castro.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> María Fernanda González Castro </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-36>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Psicología Social por la Universidad Valle del Grijalva, Maestría en Ciencias de la
Educación por el Instituto de Estudios universitario, Maestría en Psicología Forense por la Facultad
libre de Derecho del Estado de Chiapas. Certificada en Psicología jurídica y Forense por el Colegio
Oficial de Psicólogos del Estado de Chiapas
Diplomado: en Psicopatología clínica con enfoque forense; Diplomado: Derechos de las Niñas,
Niños y Adolescentes. • Impartido por la Universidad Autónoma de Chiapas, Diplomado: Violencia
contra las mujeres desde los derechos humanos, el género y la interculturalidad, para las y los
servidores públicos del estado de Chiapas. • Impartido por la Universidad Autónoma de Chiapas y
la Asociación Nacional de Consejos de Participación Cívica A.C. a través de la Fiscalía General del
Estado; Diplomado: Intervención Psicológica Clínica en niños y Adolescente. • Impartido por el
Instituto de Psicología y Psicoterapia de Chiapas en colaboración con el colegio Oficial de
Psicólogos de Estado de Chiapas. Diplomado: Psicopatología y Psicometría Forense • Expedido por
el Colegio de Estudios Universitarios, Campus Veracruz; Diplomado y Certificación como Perito en
Psicología Jurídica y Forense • Impartido por el Colegio Oficial de Psicólogos del Estado de Chiapas;
Diplomado en Intervención en el Abuso Sexual Infantil • Expedido por SERENDIPITY centro de
Actividades Psicológicas.<br>
Cursos, talleres, seminarios y conferencias en temas de Derechos humanos, psicología forense,
autopsia psicología, psicología del testimonio, Violencia Familiar, clínica Infantil, Genero, derechos
Humanos de la Infancia desde la Perspectiva de Género, sensibilización, Intervención en Crisis,
Derechos de las Niñas, niños y Adolescentes, Violencia Sexual, entre otros.<br>
																	
Experiencia Laboral
2009-Actualidad<br>
Docente y Ponente •en Diplomados, talleres y cursos • en diversos temas de violencia en el
Noviazgo, violencia doméstica, intervención en crisis, abuso sexual infantil, autoestima, Psicología
Forense, Violencia de Género y Derechos Humanos, entre otros. • Diferentes Instituciones a nivel
Nacional e internacional.<br>
14 de octubre 2014 -2023
Coordinadora del área de Psicología y Trabajo Social del Poder Judicial del Estado de Chiapas.
Perito en Psicología del Poder Judicial del Estado de Chiapas y Coordinadora de Psicólogos y
Trabajadores Sociales del Poder Judicial del Estado.<br>
Labore en Instituciones como Procuraduría de la Familia y Adopciones del DIF estatal atendiendo a
Niños, niñas y Adolescentes brindándoles atención y terapia psicológica; en la Secretaria para el
Desarrollo y Empoderamiento de las Mujeres del Estado de Chiapas como tallerista en temas de
Violencia de genero dirigido a Funcionarias y funcionarios, así como terapeuta en atención a
Mujeres que sufrían Violencia y sus hijas e hijos.
<br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-36 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Maria_Fernanda_Stalth_Barba.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">María Fernanda Stahl Barba </h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-37>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Psicóloga Clínica, psicoterapeuta Gestalt con 5 años de experiencia en acompañamiento psicológico a adultos. Diplomado en Intervención en maltrato y abuso sexual infantil. Diplomado en Terapia Breve. Actualmente psicóloga del Centro de Convivencia Familiar. Ponente en el taller virtual “Las emociones como clave para la salud mental” • Impartido a estudiantes de la Universidad Michoacana. Ponente en el taller “Gestión y Manejo de las emociones. • Impartido a directores y directoras de las diferentes áreas del Poder Judicial del Estado de Chiapas.<br> 
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-37 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Ana_Maria_Castelan_Rowe.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtcc. Ana María Castelán Rowe</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-38>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Perito en psicología forense y Psicoterapeuta cognitivo-conductual Es Maestra en Psicoterapia cognitivo-conductual por el Instituto de Psicoterapia Cognitivo Conductual, A.C. México, cuenta con Especialidad en Administración de Personal por el Instituto Nacional de Administración Pública (INAP) con Mención Honorífica, cursó el Diplomado en Psicoterapia Cognitivo-Conductual por la Universidad Nacional Autónoma de México, cuenta con el Diplomado en Psicoterapia de Esquemas por el Instituto de Psicoterapia Cognitivo Conductual. A.C. México.<br>

																	Es Licenciada en Psicología Clínica por la Universidad Autónoma Metropolitana Campus Xochimilco (UAM-X); ha cursado diversos cursos relacionados en el ámbito forense, clínico y educativo, ha impartido Cursos y Talleres; conferencista en diversas instituciones educativas y comentarista en mesa de discusión.<br> Profesionalmente se desempeñó en la Secretaría de Salud en el área educativa, en la Secretaria de Comunicaciones y Transportes en áreas de Recursos Humanos, Organización y Métodos y Capacitación, ambas a nivel federal, fue Directora de la Escuela Profesional de Psicología en el Instituto Universitario del Estado de México (IUEM), así como Profesora de Tiempo Completo y Docente Nivel Licenciatura en la Escuela Profesional de Psicología del mismo Instituto Universitario y en la Universidad del Valle de México. Campus Metepec, impartiendo diferentes asignaturas en el ámbito de la psicología, así como directora de tesis y trabajos de investigación a nivel Licenciatura. Tiene una carrera de 15 años en el Poder Judicial del Estado de México desempeñando el cargo de Perito en materia de psicología, es Psicoterapeuta en consulta privada desde hace más de 20 años.<br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-38 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Daniel_Alejandro_Perez_Martinez.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtro. Daniel Alejandro Pérez Martínez</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-39>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3>
                                                                    Como psicólogo clínico empezó interviniendo con personas responsables de delito dentro del Centro Preventivo y de Readaptación Social de Santiaguito, brindando atención psicológica para la asimilación de sus circunstancias, así como su reintegración a la sociedad de forma saludable.<br> Dentro del ámbito privado desarrollando intervenciones de orientación psicológica mayormente enfocada al ámbito familiar, atendiendo las necesidades de niñas, niños y adolescentes ante procesos de separación de los padres, dinámicas familiares poco favorables para el desarrollo humano y condiciones de separación emocional de pareja.<br> Actualmente forma parte de los Centros de Convivencia Familiar del Poder Judicial del estado de México como Coordinador de Parentalidad, con un enfoque terapéutico familiar que permite la reestructuración y reintegración de esta figura social.<br>
																	CURSOS:<br>
➢ Diplomado en Educación.<br>
➢ Curso de psicometría Penitenciaria.<br>
➢ Curso de la psicopatía a la sociopatía.<br>
➢ Conferencia. “Modelos para la elaboración de Talleres Psicoeducativos”.<br>
➢ Congreso Nacional CONATRIB.<br>
➢ Conferencia Divorcios Conflictivos.<br>
➢ Curso ABC para el abordaje psicoterapéutico de divorcios conflictivos.<br>
➢ Congreso Internacional de investigación sobre intervenciones en crisis de la coparentalidad.<br>
“Nuevas orientaciones en justicia para la familia del siglo XXI” impartido por la Facultad<br>
de Derecho de la Universidad Alberto Hurtado de Santiago de Chile.<br>
																	
																	

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Dora_Nuno_Mejia.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Jueza Mtra. Dora Nuño Mejía </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-40>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Formación Académica<br> Licenciada en Derecho, egresada de la Universidad Autónoma del Estado de México Especialidad en Derecho Procesal Civil en la referida Universidad Autónoma del Estado de México Diversos Diplomados, cursos y talleres impartidos por la Escuela Judicial del Estado de México, en materia de Derecho Civil, Mercantil y Familiar. Actualmente, cursando la maestría en Derecho Civil y Familiar en el Centro de Estudios Jurídicos Ameyalli.<br>
																	Experiencia Laboral<br> Poder Judicial del Estado de México desde el año de 1989, donde me he desempeñado como taquimecanógrafa judicial, notificadora en Tribunal de Alzada, Secretario Judicial de Sala y Juzgado en materia Civil. Desde al año de 2001 me desempeño Juez de Primera Instancia en distintas adscripciones en materia civil, mercantil y familiar, actualmente titular del Juzgado Sexto Familiar de Cuautitán, México. Docente en materia Civil y Familiar en distintas Instituciones Escolares.
																	<br>
</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-40 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Gloria_Lopez_Santiago.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DRA. GLORIA LOPEZ SANTIAGO</h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-41>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Doctora en Estudios de Familia por el Instituto de Terapia Familiar Cencalli
• Maestra en Victimología por el Instituto Nacional de Ciencias Penales. Fiscalía General de la Republica Mexicana

• Psicóloga, egresada den la Facultad de Estudios Superiores “Zaragoza”- Universidad Nacional Autónoma de México

• Perito Oficial en materia de Psicología en materia de Familia y niñez, Victimologia y Género, adscrita al Poder Judicial del Estado de México desde el

2011 a la fecha
• Integrante de la Asociación Iberoamericana de Psicología

Jurídica y forense

Integrante de la Asociación Nacional de Psicología Jurídica AIPJ
Integrante de Asociación Mexicana de Psicología Social AMEPSO
Integrante de Red Iberoamérica de Estudios de Familia A.C.
Integrante de Asociación Mexicana de Psicología Jurídica y Derecho Penal
Instructora en materia de Victimología, Psicología Jurídica, Psicología
Criminal y Forense para diversas instituciones del área de Psicología
Jurídica y Forense, incluyendo la División de Educación Continua UNAM
• Docente invitada de diferentes instituciones en Perú y Chile.
• Instructora para el Ministerio Publico del Distrito Judicial de Ancash en Perú
• Participación en diversos Congresos Nacionales e Internacionales<br> 
																	
Perito particular en materia de Psicología desde el 2005; con experiencia
profesional por 5 años en evaluación de Control de Confianza en la Policía
Bancaria e Industrial de la Ciudad de México.
Participación en materia de “Psicología Forense y Violencia a niños” en el Libro,
Rostros y huellas de las violencias en Iberoamérica, (2021), editado por la
Universidad de Ciencias y Artes de Chiapas y la Red Iberoamericana de Estudios
de Familia.
Colaboración en capítulo del libro “Amor, empatía y conductas prosociales: una
reflexión interdisciplinaria”, editado por la Universidad Católica Luis Amigo de
Colombia.<br>
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-41 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Luisa_Isabel_Morales_Reynoso.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. LUISA ISABEL MORALES REYNOSO</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-42>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Derecho por la Universidad Autónoma del Estado de México.<br> Maestra en Garantías y Amparo por la Universidad Mexicana de Educación a Distancia.<br> Cuenta con múltiples cursos en materia de Derechos y Protección de los Niños, Niñas y Adolescentes, así como en materia de Derechos Humanos.<br> Tiene una trayectoria de 16 años en el Poder Judicial del Estado de México, iniciando como técnico judicial, secretario de acuerdos, secretario proyectista de sentencias y jueza familiar. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-42 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Nohemi_Garcia_Rosales.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">NOHEMI GARCIA ROSALES</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-43>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Derecho por la Universidad Autónoma del Estado de México. Maestrante en derecho con área terminal en Justicia Constitucional en la Universidad Autónoma del Estado de México. Con diversos diplomados y cursos relativos a impartición de justicia en materia familiar, protección de Niños, Niñas y Adolescentes e impartición de justicia en casos en los que se encuentren involucrados personas con discapacidad. Trayectoria en el Poder Judicial del Estado de México, como secretario de acuerdos de cuantía menor, secretario de primera instancia y Juez de Primera Instancia, actualmente adscrita al Juzgado en Línea especializado en materia de Violencia Familiar y Protección de Niñas, Niños y Adolescentes del Estado de México. <br>

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Olga_Lidia_Sanabria_Tellez.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Dra. Olga Lidia Sanabria Téllez </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-44>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Derecho por la Universidad Autónoma del Estado de México, Maestra en Ciencias de la Educación, Maestra en Administración, Maestra en Competencias Educativas y Doctora en Derecho Penal. Formación en Justicia Restaurativa, Mecanismos Alternativos de Solución de Conflictos, Derechos de niñas, niños y adolescentes, atención a niñas, niños y adolescentes en conflictos familiares y Coordinación de Parentalidad. Se encuentra certificada en Intervención para la solución de conflictos por CONOCER.<br>
																	En su desarrollo profesional ha sido abogada postulante del 2000 al 2009. Coach de vida del 2006 al 2010. Docente en diversas universidades como son la Universidad del Valle de México (UVM), Universidad Tecnológica de México (UNITEC), entre otras. Docente de la Escuela del Poder Judicial del Estado de México, ha impartido cursos en diversas materias en Escuelas Judiciales de los Estados de Campeche, Durango, Guanajuato, Sinaloa, San Luis Potosí, Sonora y Quintana Roo. En el Poder Judicial del Estado de México ha ocupado los siguientes encargos: Mediadora Conciliadora y Facilitadora del Centro Estatal, Subdirectora de Certificación, Capacitación y Extensión del Centro Estatal, Secretario Proyectista de la Sala Unitaria Penal de Barrientos. Actualmente es Directora General del Centro de Convivencia Familiar del Poder Judicial del Estado de México.<br>
																	Conferencista, Tallerista y Ponente en diversas Actividades Académicas y Foros en materia de Justicia Alternativa, Familiar y Educativa. Asesora en la creación y desarrollo de la Licenciatura en Medios Alternos de la Universidad Autónoma del Estado de México. Ha publicado diversos artículos en materia de medios alternos y coordinación de parentalidad. Coordinadora y coautora de 14 cuadernos de apoyopsicoeducativos y  Poder Judicial del estado de México.<br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-44 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Raul_Aaron_Romero_Ortega.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Consejero Mgdo. Dr. Raúl Aarón Romero Ortega</h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-45>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">•Licenciado en Derecho por la Universidad Nacional Autónoma de México. Especialidad en Administración de Justicia Civil, por la, facultad de Derecho de la Universidad Autónoma del Estado de México. Maestro en Ciencias Penales con Especialidad en Área de Derecho Penal, por el instituto Nacional de Ciencias Penales, Maestría en Docencia y Desarrollo de ·Competencias, Doctorado en Derecho Judicial, en la Escuela Judicial del Estado de México.
•	Diplomado "Experto en Estrategias Didácticas y Evaluación de Competencias en el Centro Universitario CIFE.
•	Diplomado en legislación penal en el Tribunal Superior de Justicia y de la Universidad Autónoma de Estado de México.
•	Diplomado en Derecho Indígena en el Instituto de la Judicatura Federal.
•	VII Diplomado en gestión y transformación de conflictos.<br>
																Juez de Cuantía Menor y de Primera Instancia del Poder Judicial del Estado de México. Magistrado del Tribunal Superior del Estado de México. Actualmente Consejero del Poder judicial del Estado de México.


•	Escuela Judicial del Estado de México; en tos cursos de formación de Notificador, Ejecutor, Secretario, Juez en Materia Civil; Especialidad en Derecho Familiar y Maestría en Derecho Judicial.
•	Profesor de la Maestría en Derecho del programa de posgrado en Derecho de la Universidad Nacional Autónoma de México; en tas materias de Teoría del Acto Jurídico, asi como Obligaciones y Contratación Actual.
•	integrante de los Comités de Evaluación de tos Cursos de Formación para Juez de Primera Instancia Materia Civil y Cuantía Menor.
•	En 2018, Reconocimiento al Mérito Docente por la Escueta ludida! del Estado de México.
•	Parte del claustro docente del Instituto de la Judicatura Federal, extension Nezahulacoyotl en el Diplomado Nociones Generales de Derecho, en materia de derecho familiar.	
																	
																	
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-45 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Sergio_Vargas_Gonzalez.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtro. Sergio Vargas González</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-46>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Formación Académica: Licenciado en Derecho y Maestro en Política Criminal por la
Universidad Nacional Autónoma de México; Diplomado en “Ética Gubernamental y
Corporativa, Anticorrupción y Prevención de Conflicto de Intereses”, por la Escuela Libre de
Derecho.<br>
Es profesor interino de Derechos Humanos, Garantías y Amparo en materia Penal de la
Facultad de Estudios Superiores Acatlán, de la Universidad Nacional Autónoma de México.
Experiencia laboral: actualmente es titular de la Coordinación de Servicios Periciales del
Poder Judicial del Estado de México; desempeñó los cargos de Delegado de la Contraloría
del Poder Judicial del Estado de México en Texcoco y Tlalnepantla y Líder de Proyecto en la
Dirección General de Contraloría.<br>
Desde 2020 es titular de los servicios periciales del Poder Judicial del Estado de México,
implementando el primer proceso de selección para peritos oficiales en diversas materias,
así como la Valoración en Psicología Forense por Medios Electrónicos. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-46 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Arisbet_Cueriel_Aguilar.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Arisbet Curiel Aguilar</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-47>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Año 2022 Maestría en Trabajo Social Jurídico<br>
Pachuca Hgo. Centro de Estudios Interdisciplinarios CEDEI<br>
            
Año 2016 Licenciatura en Trabajo Social<br>
Pachuca Hgo. Instituto de Ciencias Sociales y Humanidad<br>
    
EXPERIENCIA<br>

Lugar: Consejo de Familia, Tribunal Superior de Justicia del Estado de Hidalgo<br>
Duración:Julio 2017 - actual<br>

Actividades desarrolladas:<br>

•Realización de Estudios de Campo: cuando así lo ordena jueces y juezas familiares, en los casos donde se involucran niños, niñas, adolescentes e incapaces. <br>

•Estudios socioeconómicos, entrevistas estructuradas: aplicación de instrumento e interpretación y análisis de los datos recopilados.<br>

•Visitas domiciliarias: con el fin de corroborar la información proporcionada e investigar las condiciones económicas, sociales, familiares y culturales de las partes 
en un juicio familiar donde se vean involucrados niños, niñas y/o adolescentes.

<br>

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Edgar_Tello_Arcos.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> MAESTRO EN DERECHO EDGAR TELLO ARCOS </h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-48>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Formación Académica y Carrera Judicial:<br>
❖ Egresado de la Universidad de Guadalajara, como Licenciado en Derecho.<br>
❖ Maestría de Derecho Civil y Financiero en la Universidad de Guadalajara.<br>
❖ Actualmente Doctorando por le Instituto Internacional del Derecho y del Estado.<br>
❖ Ingresando al Poder Judicial en el año de 1995 mil novecientos noventa y cinco,
teniendo diversos cargos, como; Notificador, Secretario y Secretario de Sala.<br>
❖ Nombrado como Juez en el mes de septiembre del año 2007 dos mil siete, y, con
motivo de ello; ha sido titular en los siguientes Juzgados:<br>
❖ Juzgado Primero Penal con sede en Puerto Vallarta, Jalisco.<br>
❖ Juzgados Regionales de Justicia Integral para Adolescentes de Puerto Vallarta,
Ciudad Guzmán y Lagos de Moreno, todos dentro del Estado de Jalisco.<br> 
❖ Juzgados Primero, Cuarto, Quinto Auxiliar, Noveno y Actualmente, Adscrito al
Juzgado Séptimo de lo Familiar del Primer Partido Judicial.<br>
</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-48 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Monica_Karina_Illan_Meza.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Monica Karina Illan Meza</h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-49>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                 Jefa del Centro de Convivencia
Familiar de Zapopan desde el
2021. Actualmente pertenece a la
Red de CECOFAMS, representando
al Estado de Jalisco, es líder de la
Comisión de Difusión.
Ha trabajado con NNA desde el
2004, en el sector educacional y
jurídico.
Velando siempre por el interés
superior de la niñez, busca estar
en constante actualización en
temas Psicológico-Jurídico<br>
																	
Universidad de las Ciencias Jurídica<br>

Universidad Internacional UI<br>
Maestría en Psicología Jurídica
Forense.<br>
Especialidad en dictaminación Pericial (actualmente).<br>
E X P E R I E N C I A<br>
Jefa del Centro de Convivencia Familiar de Zapopan<br>
Psicologa<br>
Juzgados Municipales de Zapopan<br>
Consejo	<br>
Inspección y Vigilancia de Zapopan<br>
Asistente de área.<br>
																	
																	
																	
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-60 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Sergio_Vladimir_Cabrales_Becerra.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Sergio Vladimir Cabrales Becerra</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-61>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Es abogado por la Universidad de Guadalajara, con Maestría en Derecho Penal por la Universidad Cuauhtémoc y actualmente cursando Maestría en Sistema Penal Acusatoria en la Universidad Panamericana. <br>Docente de la maestría en Sistema Acusatorio Adversarial, impartida en el Supremo Tribunal de Justicia del Estado de Jalisco. Desde el 31 de mayo de 2016 dos mil dieciséis, funge como Juez de Control, actualmente adscrito al Centro de Justicia para la Mujer, con sede en Guadalajara, Jalisco. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-61 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Alejandra_Nieves_Ramirez.jpeg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">PSICÓLOGA ALEJANDRA NIEVES RAMÍREZ</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-63>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Psicología por la Universidad Autónoma del Estado de Morelos; ha trabajado en la Fiscalía General del Estado de Morelos como perito en psicología realizando evaluaciones a víctimas de delito, mismo cargo que actualmente ejerce en el Tribunal Superior de Justicia del Poder Judicial del Estado de Morelos, donde además de realizar evaluaciones en materia familiar y penal, realiza labores de contención y apoyo emocional con víctimas de delito directas e indirectas. Cuenta con diversos diplomados y cursos de formación en: psicología forense, psicopatología forense, derechos humanos, perspectiva de género, pruebas psicológicas en el área forense, especialización en niñas, niños y adolescentes, elaboración del dictamen médico psicológico para la evaluación de tortura de acuerdo al Protocolo de Estambul; así como certificaciones nacionales en psicopatología forense y Protocolo de Estambul. Actualmente cursa la licenciatura en Derecho en el Centro Educativo Morelense y el “Curso Autogestivo sobre Protocolo de Estambul y la Defensa Pública Federal” por parte de la Escuela Federal de Formación Judicial. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-63 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Jesus_Salvador_Lopez_Gutierrez.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Psic. Jesús Salvador López Gutiérrez</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-64>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Estudios de licenciatura en psicología en la Universidad Autónoma del Estado de Morelos. <br>
Psicólogo en el Centro de Ejecución de Medidas Privativas de la Libertad Para Adolescentes en el Estado de Morelos, ejerciendo funciones tales como atención psicológica de los adolescentes bajo el enfoque terapéutico de corte breve, así mismo el desarrollo de dinámicas e intervención para la reinserción de los adolescentes, como lo fueron torneos deportivos, talleres de lectura y programas de regularización en sus respectivos grados escolares, estimulando su participación social y modos adecuados de convivencia.<br>
Jefe de departamento del área de proyectos en la Comisión Estatal de Seguridad Pública de Morelos, realizando entrevistas de filtro para elementos de nuevo ingreso, atención psicológica de los elementos policiales que son canalizados a través de las áreas operativas, aplicación de baterías psicológicas para la Licencia Oficial Colectiva para la portación de arma de fuego emitida por SEDENA y revisión de perfiles para establecer las convocatorias de las áreas operativas de la policía.<br>
Dirección General de Atención Especializada para Adolescentes, donde se desempeñan labores de acompañamiento en vida cotidiana con las personas adolescentes en con medida de internamiento, elaboración de informes y notas evolutivas de los avances en su medida de internamiento de las personas adolescentes.<br>
Actualmente, laborando en el Tribunal Superior de Justicia del Estado de Morelos, realizando funciones como elaboración de dictámenes periciales en materia de psicología, supervisión de convivencias entre figuras parentales e hijos, impartición de pláticas de sensibilización, acompañamiento en presentaciones de infantes y adolescentes, acompañamiento de víctimas en juicios orales.<br>
Docente con 10 años de labor en diferentes centros educativos tales como Universidad Hartmann, Colegio Jurista y Academia Estatal de Estudios Superiores de Seguridad.<br> Así mismo experiencia en asignaturas tales como:<br>
Psicología Forense<br>
Psicopatología<br>
Justicia para Adolescentes<br>
Formación Humana para la Atención Integral de Personas Adolescentes  <br>
Desarrollo Humano Policial<br>
</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-64 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Miguel_Angel_Miranda_Aquino.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lic. en Psicología Miguel Angel Miranda Aquino</h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-53>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   EDUCACIÓN<br>
 Licenciado en Psicología Facultad de Psicología de la Universidad Autónoma del Estado de Morelos (2015-2019) <br>
Diplomado en Criminología│ Facultad de Derecho y Ciencias Sociales de la Universidad Autónoma del Estado de Morelos (Enero 2022-Julio 2022) <br>

EXPERIENCIA  LABORAL<br>
 Consultorio Particular<br>
 Marzo 2021- Actualidad<br>

 Tribunal Superior de Justicia del Estado de Morelos <br>
Departamento de Orientación Familiar <br>
 Marzo 2023- Actualidad<br>

 Fiscalía General del Estado de Morelos <br>
Proyecto AVG CONAVIM 2022 <br>
Agosto 2022 – Diciembre 2022 <br>

Tribunal Superior de Justicia del Estado de Morelos <br>
Unidad de Igualdad de Género y Derechos Humanos <br>
Mayo 2022-Agosto 2022 <br>

Fiscalía General del Estado de Morelos<br>
Proyecto AVG CONAVIM 2021 <br>
Julio 2021-Diciembre 2021 <br>

CURSOS Y TALLERES <br>
Curso: Capacitación Sobre Feminicidios, Derechos Humanos y Acceso a la Justicia con Perspectiva de Género. (Mayo 2021) SEGOB, INACIPE Y BANAVIM <br>
Curso: Acceso a la Justicia de las Personas con Discapacidad 2021 (Marzo 2021) Suprema Corte de Justicia de la Nación.<br>


PARTICIPACIONES <br>
Ponente en el Foro y Mesa de Iniciativa de Ley: "Discapacidad, Derechos Humanos y Participación” H. Congreso del Estado de Morelos 30 de enero del 2023 
Foro “Logros, Retos y Perspectiva en la Implementación de la Convención de los Derechos de Personas con Discapacidad, Rumbo al 2030” H. Congreso del Estado de Morelos 03 de mayo del 2022 .<br>
PUBLICACIONES <br>
Artículo: “Consecuencias del divorcio en niños, niñas y adolescentes” Revista Jurídica Justicia y Libertad Numero. 01 Escuela Judicial del Poder Judicial del Estado de Morelos Abril 2021.
<br>
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-53 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Aracelli_del_Carmen_Abundis.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lic. Aracelli Abundis Zepeda</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-54>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Experiencia laboral <br>
Servidor Público <br>
Poder Judicial del Estado de Nayarit CECOFAM 2015- a La fecha<br>

-Supervisar Convivencias programadas por los Juzgados Familiares<br>
-Asistencia a escucha de menores de edad en los Juzgados Familiares. así como Juzgados de Oralidad Penal del Estado.<br>
-Asistencia a Diligencias programadas como auxiliar en contención emocional.<br>

Maestra escuela Milenio <br>
Escuela Prisciliano Sánchez Pantanal Nayarit, 2011-2012<br>
-Materia impartida: recreación.<br>
-Actividades lúdicas recreativas a alumnos de 3º a 6º año de primaria.<br>
-Elaboración de planeación y objetivos específicos en el desarrollo de los menores de edad.<br>

Datos académicos <br>
FEELINK 
Diplomado internacional en Neurobiología del Comportamiento Humano 11 <br>
Poder Judicial del Estado de Nayarit/Carrera Judicial Especialidad en Medios Alternos de Solucion de Conflictos actualmente 
IIDEJRE/Poder Judicial del Estado de Nayarit/Carrera Judicial Diplomado Justicia Restaurativa Familiar 25 ago- 26 nov. 2021 
Servicios de Salud del Estado de Nayarit.<br>
Diplomado Intervención de La violencia sexual infantil desde una perspectiva psicológica y jurídica 01jun-16 nov 2018.  <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-54 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Maria_de_la_Luz_Garcia_Medina.jpeg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> María de la Luz García Medina</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-55>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Formación académica.<br>
• Febrero-Mayo 2023 Curso-Taller, Terapia Familiar Sistémico.<br>
• Noviembre 2021-actualidad. Especialidad en Medios Alternos de Solución de Conflicto (MASC).<br>
• Diplomado en Justicia Restaurativa.<br>
• Abril-julio 2021. Diplomado en terapia Infantil y Adolescente.<br>
• Septiembre-marzo 2021. Diplomado en terapia de pareja.<br>
• Noviembre 2019: Curso de capacitación Psicometría.<br>
• Enero-junio 2018: seminario en Terapia de Juego con enfoque Ericksoniano.<br>
• Junio-Diciembre 2016: Diplomado en Metodología de la Investigación.<br>
• Lic. Psicología  Área de Ciencias Sociales y Humanidades de la Universidad Autónoma de Nayarit.<br>
Experiencia profesional.<br>
• 2017- actual. Psicóloga del Poder Judicial del Estado de Nayarit, adscrita al  Centro Estatal de Convivencia Familiar.<br>
• 2022- Docente de Educación Especial (Área de Psicología en Lenguaje y Comunicación) USAER 29.<br>
• Ciclos escolar 2016-2017, 2017-2018, 2018-2019 Maestra frente a grupo Preescolar y guardería Mundo Infantil. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-55 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
						
						
						<section>
                         <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Cristina_Pena_Pedraza.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Licda. Cristina Peña Pedraza</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-65>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Formación académica<br>
Licenciatura en la Facultad de Trabajo Social y Desarrollo Humano, U.A.N.L.<br>

Experiencia profesional<br>
10 años en área de Asistencia social, mediante la intervención de caso y familias, estudios socioeconómicos e investigaciones sociales, proyectos, administración y procuración de fondos.<br>
5 años como Perito en Trabajo Social en la elaboración de dictámenes socioeconómicos y sistémicos en colaboración con psicólogos. <br>

Desempeño en la Unidad de Servicios Psicológicos y de Trabajo Social, del Centro Estatal de Convivencia Familiar.<br>

Dependencia: Poder Judicial del Estado de Nuevo León.<br>
Puesto: Perito en Trabajo social.<br>

Funciones: Manejo y aplicación del modelo de Evaluación psicológica con enfoque sistémico (trabajo multidisciplinario con área de Psicología), elaboración de reportes de evaluación socioeconómica y visita social, mediante entrevistas individuales, visitas domiciliarias y de campo en instituciones, análisis de información, diagnósticos sociales, análisis familiar, elaboración de familiogramas, entre otros correspondientes al método de Trabajo Social en el ámbito Forense.<br>
</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-65 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Emma_Janeth_Garcia_Ortiz.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Licda. Emma Janeth García Ortiz</h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-66>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Licenciada en Psicología por la Universidad Autónoma de Nuevo León. Maestra en Psicoterapia Breve Sistémica en el Centro de Crecimiento Personal y Familiar. <br> Actualmente cursando Maestría en Psicología Forense en el Colegio Internacional de Ciencias Criminológicas y  Forenses. Cuenta con una certificación internacional en Psicopatología Forense y Sistema de Justicia por CIFAL Argentina / UNITAR.<br>
Ha trabajado en el ámbito privado y en instituciones públicas, como la Secretaria de Desarrollo Social y la Facultad de Psicología de la UANL, brindando terapia psicológica y en la intervención con grupos terapéuticos de niños, niñas y adolescentes, así como en la elaboración, aplicación y evaluación de programas preventivos. <br>
Ha participado en talleres y diplomados con las siguientes temáticas: psicología forense, derechos  humanos, derechos de la infancia y acceso a la justicia,  mediación en materia familiar, coordinación parental y otros. Además ha impartido conferencias sobre temas del ámbito familiar.<br>
Cuenta con más de  12 años de experiencia en la intervención con familias conflicto, brindando servicios en los que se busca la prevalencia de los vínculos parento filiales, además de aplicar el programa de intervención psicológica con enfoque sistémico, para realizar el servicio de Terapia de Integración en el Centro de Convivencia Familiar.
Actualmente funge como Encargada de la Unidad de Convivencia Contry del Centro de Convivencia Familiar del Poder Judicial del Estado de Nuevo León.<br>
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-66 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Pedro_Daniel_Gonzalez_Garcia.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">LICDO. PEDRO DANIEL GONZÁLEZ GARCÍA</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-67>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciado en psicología por la UANL, generación 2007, grado Master
en psicología analítica, así como la carrera de terapeuta en arte terapia,
ambas por la Fundación de psicología analítica Carl Gustav Jung, en
Buenos Aires, Argentina, generación 2009; experiencia clínica con
niños, adolescentes y adultos, actualmente psicólogo en el Centro
Estatal de Convivencia familiar desde el año 2013. <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-67 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Erika_Paola_Garcia_Almazan.jpeg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Lic. Erika Paola García Almazán</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-68>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                     <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-68 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
						
						
						<section>
                         <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Ileska_Karelia_Vega_Trapero.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Psic. Jesús Salvador López Gutiérrez</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-69>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
Formación académica:<br>
																	
Licenciada en Psicología por la UAS, con cédula profesional 4502811 (1998-2003); con estudios de Maestría en Criminología certificados por el Instituto de Criminología y Ciencias Penales del Noroeste A.C. (2003-2005); Con Certificado en fundamentos de la psicología positiva, por la Universidad Tec Milenio (2018); certificado en Políticas efectivas de desarrollo infantil, por el Banco interamericano de desarrollo (2020). Curso Psicología Forense especializada en niñas, niños y adolescentes, y curso “Los derechos de la infancia y el acceso a la justicia”, impartidos por La SCJN, ODDI A.C., AMIJ, UNICEF (2020). Asistente a los cursos-taller, “Buenas prácticas en el tema de centros de convivencia familiar supervisada”, impartido por Ricardo Carrillo Franco (2017), “Victimología” impartido por el Dr. Luis Rodríguez Manzanera (2021), “Intervención psicológica con enfoque sistémico” impartido por la comisión nacional de tribunales superiores de justicia de los estados unidos mexicanos CONATRIB (2022), y “Violencia de género y familiar: estrategias de valoración psicológica” organizado por el poder judicial del estado de Guerrero (2023).<br>

																	Actividades formativas:<br>

Instructor de los módulos “Introducción al estudio del crimen: objeto y función de la criminología”, y “Taller de investigación”, en el Diplomado en sociología de la criminalidad impartido por la UAS (2008); Instructor del módulo “Psicología Jurídica”, en el Diplomado en psicología Criminal impartido por la UAS (2008); Instructor del Taller “perfilación criminal” en el I Congreso Internacional de Derecho, Culiacán Sinaloa (2009); Instructor del Taller “perfilación criminal” en el marco de la jornada académica de criminología, Universidad Autónoma de Durango campus Guasave (2014); Ponente en el módulo “Aspectos psicosociales del delincuente” en el diplomado Sociología Criminal, impartido por la UAS (2014); Ponente con el tema “Psicología Jurídico-familiar” dentro del marco del Curso Introducción a la Psicología Forense impartido por la UAS (2017), Ponente con la conferencia “La causalidad psicógena de la capacidad victimal como síntoma de la personalidad” dentro del 6º coloquio internacional sobre violencia, realizado por la UAS (2019), Ponente en el módulo “psicología jurídica, intervención judicial” en el diplomado virtual de Psicología Criminal, impartido por la UAS (2021).<br>

																	Experiencia Laboral:<br>

Docente de la materia psicología criminal en la UadO campus Culiacán, de 2005 a 2010; Psicóloga adscrita al Juzgado de Primera Instancia Tercero Familiar de abril 2011 a noviembre de 2016; Docente en el Instituto de Neurociencias y Educación de Sinaloa, de 2017 a la fecha; Psicóloga adscrita al Centro de Convivencia Familiar Supervisada del Poder Judicial del Estado, Culiacán Sinaloa de noviembre de 2016 a la fecha.<br>

																	
</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-69 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Diego_Alberto_Beaurregard_Zentella.jpeg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Diego Alberto Beaurregard Zentella</h3>
														
                                                          <div class=gdlr-lightbox-form id=gdlr-form-70>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Licenciatura en psicología con especialidad clínica<br>

Trabaja en la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco.<br>
Cuenta con dos años experiencia en aplicación e interpretación de pruebas proyectivas y estandarizadas, cuatro en actividades administrativas y de gestión, atención a clientes/usuarios, así como en la organización interna de la Unidad.<br>
Atiende consulta clínica a niñas, niños y adolescentes, así como asesorías familiares.<br>
Tiene un año de experiencia en diseño y facilitación de talleres enfocados a la salud mental de nivel secundaria
Ha cursado el diplomado Reeducación para hombres promovido por el Poder Judicial del Estado de Tabasco e impartido por el Psc. Victor Hugo Saldaña y los cursos en línea Aspectos Fundamentales de Derechos Humanos, Derechos Humanos de las Personas Adultas Mayores y por último La trata de Personas, promovidos por la Comisión de Derechos Humanos del Estado de Puebla.<br>
                                                         </h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-70 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Erendira_Toledo_Cortes.jpeg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Eréndira Toledo Cortés</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-71>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Doctora en Estudios de Género y Prevención de las Violencias<br>
Maestra en Estudios de Género <br>
Sub especialidad en Experiencia Disfuncional (Psicopatología en Gestalt)<br>
Sub especialidad en Sueños desde la perspectiva Gestalt<br>
Sub especialidad en Síntomas <br>
Sub especialidad en Desarrollo Humano<br>
Psicoterapeuta Gestalt<br>
Licenciada en Comunicación
<br>
Certificación en Estándar de Competencias 539 Atención de Primer Contacto a mujeres víctimas de violencia de género<br>
Certificación en Estándar de Competencias 293 Elaboración de Peritajes Grafológicos<br>
Certificación en Estándares de Competencia 308, Capacitación presencial a servidoras y servidores públicos en y dese el enfoque de igualdad entre mujeres y hombres <br>
Certificación en Estándares de Competencia 217, Impartición de Cursos de Formación de Capital Humano de manera presencial. <br>
																	Actualmente es la coordinadora de la Unidad de Servicios Psicológicos del Poder Judicial del Estado de Tabasco, donde se realizan valoraciones psicológicas y emisión de dictámenes psicológicos de personas usuarias que tienen procesos jurídicos en matera familiar o civil, implementando la Perspectiva de Género en todos los procesos.<br>
																	Cuenta con 23 años de experiencia como facilitadora y diez en temas Género. Ha colaborado en el Instituto Estatal de las Mujeres, Centros de Salud, DIF Estatal e iniciativa privada. Ha trabajado con población infantil, adolescente, adulta y en mayor medida con funcionariado público tomadores de decisiones y mujeres en situación de violencia.<br>
Desde el perfil de género, imparte talleres, pláticas y conferencias con temáticas como Socialización de género, Derechos Humanos y de las Mujeres, Tipos y Ámbitos de la Violencia, Violencia en el noviazgo, Acoso y Hostigamiento sexual en los ámbitos  laboral y callejero, Lenguaje Incluyente y no Sexista, Autoestima con perspectiva de Género, Liderazgos con perspectiva de Género, entre otros.<br>
																	
																	Ha colaborado con artículos en libros: Diagnóstico de la violencia en el noviazgo en jóvenes de 15 a 18 años en Tabasco y Camino hacia la igualdad, memoria de acciones en materia de atención y prevención de la violencia de género, publicados por el IEM. <br>
Publicó el artículo de investigación: TRANSVERSALIZACIÓN DE LA PERSPECTIVA DE GÉNERO EN LA ADMINISTRACIÓN PÚBLICA: CASO UNIDAD DE SERVICIO PSICOLÓGICOS DEL TRIBUNAL SUPERIOR DE JUSTICIA (TABASCO, MÉXICO), en la revista Investigación, Desarrollo, Innovación y Emprendimiento (IDIE), volumen 2, número 1, de la Universidad Tecnológica Autónoma del  Pacífico, Cali, Colombia, 2023.<br>
Fue parte del equipo editorial de la Revista Quehaceres, con perfil de género y coolaboradora de la Revista Signos de la Universidad de la Chontalpa.
Ha cursado talleres, diplomados y Seminarios en Derechos Humanos, Acceso a la justicia para personas con Discapacidad, Psicología Forense especializada para NNyA,  Identificación de personalidades peligrosas y de alto riesgo, entrevista y diagnóstico, Modelo de Gestión de proyectos sociales, Perspectiva de Género, Violencia de Género, Igualdad y no Discriminación, Ley para la Igualdad entre Mujeres y Hombres; sí como de Desarrollo Humano, Formación de Talleristas con perspectiva de género, Metodología del Marco Lógico con Perspectiva de Género, Elaboración de manuales de Procedimiento, entre otros.<br>
Ha impartido formaciones a la sociedad civil, empresas privadas, funcionariados municipales y estatales, grupos vulnerables, Centro de Salud y Organizaciones No Gubernamentales. Destacan Tribunal Superior de Justicia, Fiscalía General del Estado, Policía Federal, Secretaría de Seguridad Pública, Secretaría de Educación DIF, DAM, INEGI, PEMEX, CONAFE, UJAT, IMSS, CONAGUA, Comisión Nacional de Seguridad, Ayuntamientos Municipales, Universidades, Colegios.<br>




                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-71 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Fabiola_Silva_Escalante.jpeg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Fabiola Silva Escalante</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-72>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciatura en Administración<br>
Cuenta con doce años de experiencia en administración de empresas privadas e instituciones públicas, destacando atención a derechohabientes, organización interna, gestiones presupuestales, planificación y supervisión de equipos de trabajo, creación y seguimiento de proyectos de mejora continua, así como control de padrones internos.<br>
Actualmente pertenece a la Unidad de Servicios Psicológicos, encargada del área administrativa de la Unidad, donde se gestionan las atenciones y seguimientos de las personas usuarias.<br>
Ha sido encargada de las relaciones públicas directas con personal tomadora de decisiones en los espacios de la Administración Pública.
 <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-72 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
						
						<section>
                         <div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_1_cecofam/red/images/img_ponentes/Annel_Rosado_Lara.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Annel Rosado Lara</h3>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-73>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
Estudió la Licenciatura en Derecho en el “Centro de Estudios Superiores CTM Justo Sierra O’Reilly”. <br>
Se especializó en atención a personas en situación de violencia por razón de género, al realizar la maestría en Intervención de Violencia en el “Centro de Estudios Superiores de Sexualidad”.  <br>
También se formó como mediadora, con el “Programa Integral de Formadores de Mediadores con Sede Judicial” por el Instituto de Mediación de México, S.C”. 
Realizó los estudios “Sistema Integral de justicia para Adolescentes” impartido por el Instituto Nacional de Ciencias Penales” (INACIPE).
Ha ampliado sus conocimientos en atención a personas víctimas de discriminación y violencia a través de diversos seminarios, talleres, cursos y diplomados relativos al tema de la atención y argumentación para la protección y garantía de Derechos Humanos de personas víctimas en la administración de justicia.
Cómo actividad de investigación en el año de 2011 a julio de 2012 fue enlace del Poder Judicial para llevar a cabo un diagnóstico sobre acceso de las mujeres a la justicia que realizó la Comisión Nacional de Tribunales Superiores de Justicia (CONATRIB), la Suprema Corte de Justicia de la Nación (SCJN) y la Asociación Mexicana de Impartidores de Justicia (AMIJ). <br>
Asimismo, ha colaborado en el diseño de programas, cursos, talleres de capacitación en Derechos Humanos de las Mujeres, Perspectiva de género, Argumentación Jurídica y atención a mujeres víctimas de violencia de género, en instituciones del Estado como, por ejemplo: el Instituto para la Igualdad entre Mujeres y Hombres (IPIEMH), la Fiscalía General del Estado (FGE), el Instituto de la Mujer (IM) y en los poderes Judiciales de Quintana Roo, Campeche y Yucatán. 
En materia de difusión ha participado con diversas asociaciones de la sociedad civil, impartiendo, cursos, talleres, conferencias, dirigidos a la ciudadanía en general entre otras actividades. <br>
De 2018 a 2021 se desempeñó como Consejera Consultiva de la Comisión Estatal de los Derechos Humanos del estado de Yucatán y formó parte del Comité de seguimiento de la Solicitud de Alerta de Género (SAVG), como Consejera de dicha institución.
Desde 2012 realiza actividades intervención de personas en situación de violencia por razón de género en el Poder Judicial del estado de Yucatán, actualmente se desempeña como docente de la Escuela Judicial del Poder Judicial y es Jefa del Departamento de Atención a la Violencia de Género del Consejo de la Judicatura del Poder Judicial del estado de Yucatán; participa en el Consejo de Violencia del Estado y realiza actividades de vinculación entre el Poder Judicial e Instituciones del Poder Ejecutivo para difundir contenido de Derechos Humanos de las Mujeres y coordinar acciones de prevención, atención y sanción con instituciones del Estado para Prevenir, Atender, Sancionar y Erradicar la violencia por razón de género. 
 <br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-73 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  
                                                    <div class=gdlr-speaker-item-content>
                                                        
														
                                                          
                                                        
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    
                                                    
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    
                                                    
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