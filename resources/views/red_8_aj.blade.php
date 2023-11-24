<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

    <title>Red &#8211; Archivos Judiciales</title>

    <link rel="stylesheet" href="rede_8_aj/red/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_8_aj/red/plugins/superfish/css/superfish.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_8_aj/red/plugins/dl-menu/component.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_8_aj/red/plugins/font-awesome-new/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_8_aj/red/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_8_aj/red/plugins/flexslider/flexslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_8_aj/red/css/style-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_8_aj/red/css/style-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_8_aj/red/plugins/masterslider/public/assets/css/masterslider.main.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_8_aj/red/css/master-custom.css" type="text/css" media="all">
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
                        <a href=""> <img src="rede_8_aj/red/images/logo_cooperacion.png" alt=""> </a>
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
                               <!-- <li class="menu-item">
                                    <a href="#historia">Objetivo</a>
                                </li>-->
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
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url('rede_8_aj/red/upload/archivos_judiciales.png'); padding-top: 100px; padding-bottom: 70px; ">
                            <div class="container">
                                <div class="gdlr-title-item" style="margin-bottom: 40px;">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                        <div class="gdlr-item-title-head">
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">RED NACIONAL DE</h4>
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">ARCHIVOS JUDICIALES</h4>
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
                                        <a href="{{ URL::asset('/rede_8_aj/red/images/Prorgama_RNAJ_2023.pdf') }}" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver Programa Completo PDF</button></a>
                                                    {{-- <a href="images/Prorgama_RNAJ_2023.pdf"><button class="newsletter-submit gdlr-button with-border">Ver Programa Completo PDF</button></a> --}}
                                   </div>
                                </div>
                            <div class="session-item-wrapper" style="margin-bottom: 75px;">
                                <div class="gdlr-session-item gdlr-tab-session-item gdlr-item">
                                    <div class="gdlr-session-item-head">
                                        <div class="gdlr-session-item-head-info gdlr-active" data-tab="gdlr-tab-1">
                                            <div class="gdlr-session-head-day">D&iacute;a 1</div>
                                            <div class="gdlr-session-head-date">27 de noviembre de 2023</div>
                                        </div>
                                        
										
										
                                        <div class="clear"></div>
                                    </div>

                                    <!-- inicia dia -->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-1 gdlr-active">
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>13:00 hrs.</div>
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
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>13:10 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a> Dr. Ricardo Alfredo Sodi Cuellar </a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Presidente del Tribunal Superior de Justicia y del Consejo de la Judicatura del Poder Judicial del Estado de México.
                                                            </div>
                                                        </div>
</div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Palabras y Agradecimiento</h3>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<article class="type-post">
															<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjem.webex.com/pjem/j.php?MTID=me43dc2d782c1e783a14f0528fc77c37b"><button class="newsletter-submit gdlr-button with-border">Ver mensaje</button></a>
                                                </div>
													            <div class="entry-block"></div>
													 </article>
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
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>13:15 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes:</a></div>
																<!--<div class="session-speaker-list-item"><a> Región I</a></div> -->
																
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Ing. Erick Cardoso Espinoza</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">CEO y fundador de la empresa Petra Heritage
                                                            </div>
                                                        </div>
														<div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
															
																<!-- <div class="session-speaker-list-item"><a> Región II</a></div>-->
																
                                                              <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Yolanda Martínez Mancilla</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Coordinadora de Estrategia Digital Nacional
                                                            </div>
															<div class="session-speaker-list">
																
																<!-- <div class="session-speaker-list-item"><a> Región III</a></div> -->
																
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Joel Gómez Treviño</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Presidente Fundador de la Academia Mexicana de Derecho Informático
                                                            </div>
</div>
														
														
                                                    </div>
													
										
													
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                           <div class="gdlr-session-item-content">
                                               <h3 class="gdlr-session-item-title">PONENCIA MAGISTRAL</h3>
												<!-- <div class="gdlr-session-item-excerpt">Ponencia Magistral:</div> -->
											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjem.webex.com/pjem/j.php?MTID=me43dc2d782c1e783a14f0528fc77c37b"><button class="newsletter-submit gdlr-button with-border">Ver mensaje</button></a>
                                                </div>
													            <div class="entry-block"></div>
													 </article>
                                             </div>
                    </div>
											
                                             <div class="clear"></div>
                                      </div>
<div class="gdlr-session-item-content-wrapper">
                      <div class="gdlr-session-item-divider"></div>
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
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Encargados de los programas de capacitación interna de cuatro Estados.</a></div>

                                                                <div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-user-circle" aria-hidden="true"></i><a>Moderador: Pendiente</a></div>
													          </div>
															
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Mesa 3</a></h3>
                                                <div class="gdlr-session-item-excerpt">Desarrollo y profesionalización de los servidores públicos adscritos a los servicios documentales y archivísticos de los Poderes Judiciales locales.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=e307174283ab161b1813ff3274b40aff1"><button class="newsletter-submit gdlr-button with-border">Ver mensaje</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										
										<div class=gdlr-session-item-content-wrapper>
                                                <div class=gdlr-session-item-divider></div>
                                                <div class=session-break-content>
                                                    <div class=session-break-info><i class="fa fa-clock-o"></i>12:00 hrs.</div>
                                                    <h3 class="gdlr-session-break-title">RECESO</h3></div>
                                                <div class=clear></div>
                                            </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:15</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Josefina Román Vergara.</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Comisionada del INAI</a></div>
													          </div>
															
															
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conferencia de cierre</a></h3>
                                                <div class="gdlr-session-item-excerpt">Mecanismos de coordinación de los Archivos Judiciales con los Consejos Estatales y el Consejo Nacional de Archivos.
													<div class="clear"></div><a href="../session/welcoming-and-introduction/index.html" class="gdlr-info-font excerpt-read-more">Hola mundo</a></div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=edbb3fdb9860f09a754225167d3d5960e"><button class="newsletter-submit gdlr-button with-border">Ver conferencia</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>13:15</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Carmen Patricia Bencomo Ferrales</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Coordinadora de la Red Nacional de Archivos Judiciales y Coordinadora de Archivos del Poder Judicial del Estado de Chihuahua.</a></div>
													          </div>
															
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Conclusiones y acuerdos</a></h3>
                                               
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=edbb3fdb9860f09a754225167d3d5960e"><button class="newsletter-submit gdlr-button with-border">Ver conclusiones</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>13:45</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Magda. Miriam Victoria Hernández Acosta</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Presidenta del Tribunal Superior de Justicia del Estado de Chihuahua.</a></div>
													          </div>
															
                                                        </div>
                                                    </div>
												
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title"><a>Clausura</a></h3>
                                               
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=edbb3fdb9860f09a754225167d3d5960e"><button class="newsletter-submit gdlr-button with-border">Ver clausura</button></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										
								  </div>
									            <!-- termina dia -->
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
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=3>
                                            <ul class=slides>
												<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/4images/img_ponentes/Erick Cardoso Espinoza.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Ing. Erick Cardoso Espinoza</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-5>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                 <h3 style="text-align: justify">
                                                             Es ingeniero en Computación por el Instituto Politécnico Nacional con especialización en Ciencias de la Información por la Universidad del Norte de Texas en Denton.<br>
Actualmente es CEO y fundador de la empresa Petra Heritage dedicada a los servicios y consultoria en preservación digital y data management. En donde ha encabezado talleres de preservacion digital en el Congreso 2023 del Consejo Internacional de Archivos en Abu Dhabi en los Emiratos Arabes, desarrolla proyectos de ciencias de la información clientes tanto de la iniciativa privada como casas de postproducción y con gobiernos estatales, municipales.<br>
En 2019 se desempeñó en el cargo de Chief Technology Officer en Labo Digital y estába bajo su responsabilidad era establecer directrices en materia de Tecnologías de la Información para que la empresa se mantenga en la vanguardia tecnológica para los servicios de post producción, doblaje, distribución.
Ocupó el cargo de Director de Tecnologías de la Información en el Archivo General de la Nación (AGN) de 2013 a 2018 donde coordinó los trabajos para la creación de un modelo de preservación digital a partir de la construcción de un repositorio para la salvaguardia del acervo digitalizado y para el que su formato de origen es digital.<br>
Ha colaborado en iniciativas como el Archivo del Mundo en el Ártico, en donde participó en la implementación de una primera prueba de concepto del modelo de preservación desarrollado para el AGN y la presentación de dicho modelo en foros como el International Workshop: Maintaining the Facts Infrastructure in the Era of Post-Truth Politics, celebrado en la ciudad de Estocolmo, Suecia (2017), Seminar on the long-term preservation of electronic records and archives, celebrado en la ciudad de Beijing, China (2018).<br>
Además, participa como miembro en el subcómite técnico de Encoded Archival Standards (TS-EAS) en la Sociedad de Archivistas Americanos y en The Consultative Committee for Space Data Systems (CCSDS) donde colabora desarrollando actualizando el standard ISO/DIS 14721 en temas de preservación digital a largo plazo. Miembro del consejo intencional de archivos y de la asociación latinoamericana de archivos.<br>
En el periodo que comprende de 2007 a 2012 se desempeñó como Director de Desarrollo de Sistemas para el Exterior e Internet en la Secretaría de Relaciones Exteriores en donde desarrolló el sistema que se utiliza para la expedición de documentos de nacionalidad e identidad que se emplea actualmente en las representaciones de México en el exterior. Asimismo, coordinó la logística para los trabajos de registro y acreditación del G-20.<br>


                                                             </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-5 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Yolanda Martinez Mancilla.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Yolanda Martínez Mancilla</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-6>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                  
Egresada de la Licenciatura en Sistemas de Información por la UdeG, maestra en Política Pública por la Universidad de Carnegie Mellon y candidata a doctora en Sociedad de la Información y del Conocimiento por la Universidad Oberta de Cataluña. Lidera iniciativas de transformación digital en el sector público y privado a nivel nacional e internacional. En el área internacional, dirigió la oficina del BID en Chile, ha colaborado con diversas agencias de la ONU, como el Programa para el Desarrollo y el Departamento de Asuntos Económicos y Sociales, participando como revisora de pares de la OECD para las estrategias de gobierno digital de diversos países de América Latina, y como consejera honoraria para la estrategia digital de El Salvador y Arabia.<br>
Es especialista en el diseño de servicios digitales transaccionales y medición del desempeño, investigación de necesidades de los usuarios, política TIC y estrategias de procura, gobernanza de internet y de gobierno digital, inclusión digital y accesibilidad, identidad digital & firma electrónica, y uso de tecnologías emergentes en el sector público.<br>
Entre sus principales iniciativas de transformación digital están: Zapopan Ciudad Digital; comercio electrónico justo de la iniciativa ecuatorial de Naciones Unidas; Política TIC, Contrato Marco, la Ventanilla Única Nacional www.gob.mx, el Estándar de Servicios Digitales aplicado a más de 5000 servicios, y la puesta en línea de los servicios de más alta demanda ciudadana como acta de nacimiento. Aplicación de tecnologías emergentes BlockchainHackMX, habilidades digitales PROSPERA y hogar conectado, e InteroperaMX.
Como líder global en la materia participa activamente en diversas plataformas globales para el desarrollo digital. Durante el 2017 dirigió la Red de Gobierno Electrónico de América Latina y el Caribe; desde la CEDN lidera el mecanismo de seguimiento de la Agenda Digital para América Latina y el Caribe eLAC2018, representa a México en la reunión ministerial del consorcio del D7, la Cumbre Mundial de la Sociedad de la Información y del Conocimiento (WSIS) y en el grupo especializado de e-gobierno de la OCDE.<br>
Desde de la Coordinación de Estrategia Digital Nacional (CEDN) es responsable de la articulación y seguimiento al cumplimiento de las 69 líneas de acción que integran la EDN bajo un modelo de múltiples partes interesadas y en colaboración constante con el ecosistema digital en México.<br>
En el sector privado, ha dirigido varias iniciativas de transformación digital como gerenta de estrategia y operaciones en Deloitte Consulting. Reconocida por Apolitical como una de las veinte personas más influyentes a nivel global en gobierno digital.
 <br>


                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-6 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Joel_Gomez.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Joel Gómez Treviño</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-4>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Abogado egresado del Tecnológico de Monterrey y tiene una Maestría en Derecho Internacional por la Universidad de Arizona. Es Doctor Honoris Causa. Cuenta con 24 años de trayectoria como especialista en derecho de las tecnologías de la información, privacidad y propiedad intelectual. Es Presidente Fundador de la Academia Mexicana de Derecho Informático y Coordinador del Comité de Derecho de las Tecnologías de la Información y Protección de Datos Personales de la Asociación Nacional de Abogados de Empresa, Colegio de Abogados. Es Socio Fundador y Director de Lex Informática Abogados. Es miembro honorario de Phi Delta Phi, la Sociedad Legal Internacional de Honores más grande del mundo. Es Perito Forense Digital honorario de la Red Latinoamericana de Informática Forense. Ha recibido 19 reconocimientos provenientes de organizaciones de Argentina, España, Francia, Gran Bretaña y México, entre ellos el Premio por Trayectoria Meritoria de la Asociación de Internet, debido a su desempeño profesional y su contribución al crecimiento de la industria de Internet en México, y el Premio al Mérito Jurídico de la Asociación Interdisciplinaria de Juristas de México y el Claustro Nacional De Doctores Honoris Causa por su trayectoria de excelencia en el ejercicio de la Abogacía. En los últimos 21 años ha sido profesor de licenciatura y posgrado en el Tec de Monterrey, en la Universidad Panamericana, en la UDLAP Jenkins Graduate School, en La Salle y en INFOTEC, entre otras universidades. Ha sido invitado a impartir más de 450 conferencias y cursos en programas académicos y profesionales de Brasil, Canadá, Colombia, Costa Rica, Ecuador, España, Estados Unidos, Guatemala, Italia, Panamá, México y Asia.<br> </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-4 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                
                                                <!--<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="images/img_ponentes/Carlos_Ortiz_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">CARLOS ORTIZ PANIAGUA
</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-7>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Especialista en materia de administración de documentos, archivos, transparencia, acceso a la información y protección de datos personales.<br>
Ha sido consultor independiente en materia de administración de documentos, archivos, transparencia, acceso a la información y protección de datos personales.<br>
Cuenta con estudios de licenciatura en Derecho Administrativo por la Universidad Autónoma Metropolitana-Azcapotzalco (UAM); de Historia por la Escuela Nacional de Antropología e Historia, (ENAH),  y Diplomado en archivos por el Ministerio de Cultura, Educación y Deportes de España y por el Archivo General de la Nación-México; en transparencia por la Universidad Autónoma Metropolitana y el Instituto de Acceso a la Información Pública del Distrito Federal UAM-INFODF; de Datos Personales por la Universidad Autónoma Metropolitana y el Instituto de Acceso a la información Pública del Distrito Federal UAM-INFODF.<br>
Como funcionario público ha trabajado para el Archivo General de la Nación (AGN) en dos etapas: de 1992 a 1996 como responsable de la documentación del siglo XIX; del Centro de Información Gráfica; de la atención a investigadores de posgrado (maestría y doctorado) del Centro de Referencias, y; del Programa de Incorporación de nuevos Fondos Documentales; y de 2000 a 2004 como Jefe del Departamento de Asesoría Archivística; Jefe de la División de Archivos Estatales, y; Director del Sistema Nacional de Archivos.<br>
En 1998 - 1999 fue Subdirector de la Oficina Privada C. Presidente de la República responsable del Archivo Privado del C. Presidente de la república. 
En 2004 participó como coordinador por parte del Archivo General de la Nación en la creación de los Lineamientos Generales para la Organización y Conservación de los Archivos de las Dependencias y Entidades de la Administración Pública Federal y, posteriormente, desde el INFODF en el borrador de la Ley de Archivos para el Distrito Federal de 2007.<br>
De 2007 a 2009 laboró en el Instituto de Acceso a la Información y Protección de Datos Personales del Distrito Federal como responsable del Archivo Institucional y de la asesoría en la materia a los entes obligados. 
De 2009 a 2011 participó en la creación de la Subdirección de Protección de Datos Personales, el control del Registro Electrónico de Sistemas de Datos Personales y la asesoría a los entes obligados.<br>
Ha impartido más de 125 cursos en materia de Administración de documentos, archivos, transparencia y protección de datos personales a lo largo del país y en las principales instituciones académicas.<br>
También ha laborado en la Suprema Corte de Justicia de la Nación en el proyecto de creación de las Casas de la Cultura Jurídica, teniendo a su cargo la correspondiente al Estado de Hidalgo, en el Tribunal Electoral del Distrito Federal, en la Comisión Federal de Telecomunicaciones, el Fideicomiso Educación Garantizada del Distrito Federal, Servicio Postal Mexicano y actualmente en el Centro Federal de Conciliación y Registro Laboral, siempre en materia de archivos, protección de datos personales, transparencia y acceso a la información.
En 2000 obtuvo por oposición la beca otorgada por el Ministerio de Cultura, Educación y Deportes de España para participar en el Curso “Escuela Iberoamericana de Archivos” y en el año 2003 recibió un reconocimiento especial del Archivo General de la Nación por sus aportaciones en materia de normatividad archivística.<br>


                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-7 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>-->
                                         </ul>
                                        </div>
                                    </div>
                                    <div class=clear></div>
                                </div>
                            </div>
						
						<div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper">
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4> </div>
                                    </div>
                                    <div class=clear></div>
                                </div>
                            </div>
						
						<div class=speaker-item-wrapper style="margin-bottom: 30px;">
                                <div class="speaker-item-holder gdlr-speaker-type-circle">
                                    <div class="gdlr-item gdlr-speaker-carousel-wrapper"> </div>
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