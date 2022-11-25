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
                        <a href=""> <img src="{!! asset('rede_8_aj/red/images/logo_cooperacion.png') !!}" alt=""> </a>
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
                                @if ($activo==1)
                                    <li>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </li>
                                @endif
                                <li class="menu-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="dropdown-item"
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
                            <div class="" style="margin-bottom: 30px;top:53px;right:280px;position: absolute;">
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
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:25 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Myriam Victoria Hernández Acosta</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Magistrada Presidenta del Tribunal Superior de Justicia y del Consejo de la Judicatura del Poder Judicial del Estado de Chihuahua.
                                                            </div>
                                                        </div>
														<div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Ricardo Alfredo Sodi Cuellar</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Magistrado Presidente del Tribunal Superior de Justicia y del Consejo de Ia Judicatura del Poder Judicial del Estado de México.
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
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/mtIOqiZY1mI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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


										<div class=gdlr-session-item-content-wrapper>
                                                <div class=gdlr-session-item-divider></div>
                                                <div class=session-break-content>
                                                    <div class=session-break-info><i class="fa fa-clock-o"></i>10:45 hrs.</div>
                                                    <h3 class="gdlr-session-break-title">RECESO</h3></div>
                                                <div class=clear></div>
                                            </div>
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:00 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="session-speaker-list-item"><a>Ponentes:</a></div>
																<div class="session-speaker-list-item"><a> Región I</a></div>

                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Carmen Patricia Bencomo Ferrales</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Directora General de Archivos del Poder Judicial del Estado de Chihuahua
                                                            </div>
                                                        </div>
														<div class="session-speaker-inner">
                                                            <div class="session-speaker-list">

																<div class="session-speaker-list-item"><a> Región II</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Alfredo Ríos Guajardo</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director del Archivo Judicial del Consejo de la Judicatura y del Poder Judicial del Estado de Nuevo León
                                                            </div>
															<div class="session-speaker-list">

																<div class="session-speaker-list-item"><a> Región III</a></div>

                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Ana Margarita De Luna Mora</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Coordinadora del Sistema de Archivo y Responsable del Archivo de Concentración del Poder Judicial del Estado de Aguascalientes
                                                            </div>
															<div class="session-speaker-list">

																<div class="session-speaker-list-item"><a> Región IV</a></div>

                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Luis Eduardo Pérez Merchant</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Director del Archivo Judicial del Poder Judicial del Estado de Puebla
                                                            </div>
															<div class="session-speaker-list">

																<div class="session-speaker-list-item"><a> Región V</a></div>

                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Ruth Maria Flores Bustillos</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Directora del Archivo Judicial del Poder Judicial del Estado de Quintana Roo
                                                            </div>


                                                        </div>


                                                    </div>



                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                           <div class="gdlr-session-item-content">
                                               <h3 class="gdlr-session-item-title">Diagnóstico a cargo de los representantes de las regiones (10 minutos por Estado)</h3>
												<div class="gdlr-session-item-excerpt">Ponencia Magistral:</div>
											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/mtIOqiZY1mI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
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

                                            </div>

											<div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>12:15 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Beatriz Ortega Sandoval</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Directora de Archivos del Poder Judicial del Estado de Guanajuato
                                                            </div>
															<div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Infraestructura esencial para la conservación y preservación de los archivos judiciales</a></div>

                                                        </div>
														<div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra Claudia A. Escoto Velázquez</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Directora de Gestión Documental del INAI
                                                            </div>
															<div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>El rol de las tecnologías de la información para la gestión electrónica y convencional de los expedientes judiciales</a></div>

                                                        </div>
														<div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Carlos Ortiz Paniagua</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Consultor independiente en materia de administración de documentos, archivos, transparencia. acceso a la información y protección de datos personales
                                                            </div>
															<div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>La capacitación y profesionalización del personal archivístico judicial: hacia una estrategia de formación integral</a></div>

                                                        </div>
												   </div>
													 <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Mesa de trabajo</h3>

                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/mtIOqiZY1mI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

										<div class=gdlr-session-item-content-wrapper>
                                                <div class=gdlr-session-item-divider></div>
                                                <div class=session-break-content>
                                                    <div class=session-break-info><i class="fa fa-clock-o"></i>l3:45 hrs.</div>
                                                    <h3 class="gdlr-session-break-title">Sesión de Conclusiones</h3></div>
                                                <div class=clear></div>
                                        </div>

										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>14:15 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Bibiana Peralta Hernández</a></div>
                                                            </div>
															<div class="gdlr-session-item-excerpt">Coordinadora de Archivos del Tribunal de Justicia Administrativa de la Ciudad de México.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">


                                                <h3 class="gdlr-session-item-title">Cestión Documental y Transparencia: Una Ecuación Indisoluble</h3>
											<div class="gdlr-session-item-excerpt">Conferencia magistral</div>

                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
														<article class="type-post">
																<div class="entry-cover">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/mtIOqiZY1mI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <a href="https://tsjcdmx.webex.com/tsjcdmx-sp/onstage/g.php?MTID=edbb3fdb9860f09a754225167d3d5960e"><button class="newsletter-submit gdlr-button with-border">Ver mesa</button></a>
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
                                        <div class=flexslider data-type=carousel data-nav-container=speaker-item-wrapper data-columns=4>
                                            <ul class=slides>
												<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Alfredo_Rios_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. ALFREDO RÍOS GUAJARDO</h3>
                                                        <div class="gdlr-lightbox-form id=gdlr-form-5">
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                 <h3 style="text-align: justify">
                                                                    Egresado de la Licenciatura en Derecho por la Facultad de Derecho y Criminología de la Universidad Autónoma de Nuevo León.<br>
                                                                    Maestro en Derecho con orientación en Amparo, por la misma Facultad, grado obtenido con mención honorífica.<br>
                                                                    Ha colaborado con el Poder Judicial del Estado de Nuevo León desde el año 2005 dos mil cinco, iniciando como meritorio y practicante en el Juzgado Séptimo de Jurisdicción Concurrente, para luego integrarse formalmente a la carrera judicial con la categoría de Escribiente de juzgado a principios del año 2006 dos mil seis, cargo que de igual forma desempeñó en la Segunda Instancia. Fungió como Actuario Judicial en Juzgado de Primera Instancia, así como en la Unidad de Medios de Comunicación. Posteriormente se desempeñó como Secretario Líder en la Gestión Judicial para los Juzgados de Juicio Familiar Oral.<br>
                                                                    En el ámbito administrativo, colaboró como Coordinador de Servicios Escolares y Administrativos, así como Coordinador de Formación Judicial y Capacitación Continua en el Instituto de la Judicatura, formando parte además del Claustro Académico del mencionado Centro de Formación Judicial, desde el año 2016 dos mil dieciséis, impartiendo las asignaturas de Gestión Judicial, Generalidades de la Función Actuarial, así como Notificaciones en Materia Civil, Familiar y Mercantil.<br>
                                                                    Actualmente se desempeña como Director del Archivo Judicial del Consejo de la Judicatura del Estado de Nuevo León.<br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-5 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Ana_M_DeLuna_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">LIC. ANA MARGARITA DE LUNA MORA
                                                        </h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-6>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Grado Académico:<br>
                                                                    Licenciatura en Derecho.<br>
                                                                    Capacitación Profesional:<br>
                                                                    Diplomado en archivonomía impartido por la Universidad Autónoma de Aguascalientes.<br>
                                                                    Experiencia Profesional en el Poder Judicial del Estado de Aguascalientes:<br>
                                                                    De enero de 2001 a enero de 2002: Jefe de Archivo.<br>
                                                                    De enero de 2002 a junio de 2003: Auxiliar de Archivo.<br>
                                                                    De junio de 2003 a enero de 2011: Jefe de Departamento de Selección de Documentos adscrito al Archivo Judicial.<br>
                                                                    De  enero de 2011 a noviembre de 2019: Directora del Archivo Judicial.<br>
                                                                    De noviembre de 2019 a la fecha: Coordinadora del Sistema de Archivo del Poder Judicial y Responsable del Archivo de Concentración.
                                                                    <br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-6 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Beatriz_Ortega_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">BEATRIZ ORTEGA SANDOVAL</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-4>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Historia por la Universidad de Guanajuato, con el trabajo de Descripción Documental Inventario del Grupo Documental Matrimonios contenido en el Archivo General de la Nación, México 1993.<br>
                                                                    Desarrollo Laboral:<br>
                                                                    Mi ejercicio en los archivos comenzó en el año 1989 en el Archivo General del Gobierno del Estado de Guanajuato como responsable del acervo bibliográfico, posteriormente ingresé al Archivo General de la Nación como integrante del Centro de referencias y posteriormente en el Departamento de Control de acervos.  En 1996 se dio mi ingreso al Archivo General del Poder Judicial de la Federación en la Ciudad de México y en ese mismo año me otorgaron el puesto de Titular de la Casa de la Cultura Jurídica de la Suprema Corte de Justicia de la Nación en el Estado de Guanajuato hasta 1999, año que fui invitada a trabajar en el Poder Judicial del Estado de Guanajuato, con el nombramiento de responsable de la Biblioteca del Supremo Tribunal de Justicia, en el año 2002 como Coordinadora de Biblioteca y Archivo General del Poder Judicial del Estado de Guanajuato. En el año 2013 obtengo el cargo de Directora Archivo General del Poder Judicial del Estado de Guanajuato y en enero de 2021 el de Directora de Archivos del Poder Judicial del Estado de Guanajuato.<br>
                                                                    Cursos impartidos y recibidos:<br>
                                                                    He impartido cursos Archivística a los responsables de archivos de trámite de Poder Judicial del Estado del Guanajuato del año 2008 a 2019, así como a los integrantes del Sistema Estatal de Archivos Generales de  Guanajuato (SEAGG).
                                                                    Recibí cursos y seminarios sobre Administración de Documentos, Valoración de documentos, Paleografía y Diplomática, Conservación de Documentos, Quehacer del archivista, Introducción al Sistema Oral Penal, Oralidad Familiar, Archivos Electrónicos, Expedientes electrónicos, Gestión de Documentos y Administración de Archivos, impartidos por diversas instituciones. Fui participante en XV Escuela de Archivos para Iberoamérica, “Teoría y Prácticas Archivísticas en España” como becaria por el Ministerio de Cultura de España. Alcalá de Henares, España. 2005.<br>
                                                                    Asistencia a Congresos Internacionales:<br>
                                                                    XV Congreso Internacional de Archivos. 2004, Viena, Austria.
                                                                    Congreso Internacional Archivos Digitales Sustentables: “Conservación y acceso a las colecciones sonoras y audiovisuales para las sociedades del futuro”. 2015, Centro de Investigaciones Bibliotecológicas y de la Información de la Universidad Autónoma de México, Ciudad de México.
                                                                    III Congreso Internacional de Archivos Digitales: “Forjando el futuro: Inteligencia artificial y Big data para la preservación digital, sonora y audiovisual”.  2019, Centro de Investigaciones Bibliotecológicas y de la Información de la Universidad Autónoma de México, Ciudad de México.
                                                                    Nombramientos :<br>
                                                                    Miembro del Colegio de Historiadores de Guanajuato.
                                                                    Miembro del Órgano Técnico Consultivo como Historiadora del Archivo General del Estado de Guanajuato, 2010 - 2014.
                                                                    Miembro del Comité Técnico Consultivo como Secretaria Técnica del Poder Judicial del Estado de Guanajuato, 2008 – 2020.
                                                                    Miembro del Sistema Nacional de Archivos Judiciales convocado por la Suprema Corte de Justicia de la Nación y la Asociación Nacional de Impartidores de Justicia (AMIJ). Participación en las Reuniones Ordinarias del SINAJ de 2010 a 2018.
                                                                    Miembro del Sistema Estatal de Archivos Generales del Estado de Guanajuato. Activo.
                                                                    Miembro de la Red Nacional de Archivos Judiciales. Activo.<br>
                                                                    Publicaciones:<br>
                                                                    Colaboración en la publicación “San Pedro Cholula. Título de Ciudad, 27 de octubre de 1537”. Archivo General de la Nación. México, 1993.
                                                                    “El Juicio de Allende” en Gaceta Judicial (Edición especial, 195 años del Poder Judicial del Estado de Guanajuato). Poder Judicial del Estado de Guanajuato, Revista trimestral, junio de 2019. <br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-4 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>

                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Carlos_Ortiz_.png" alt width=400 height=400></div>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Carmen_P_Bencomo_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">CARMEN PATRICIA BENCOMO FERRALES</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-5>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Egresada de la Universidad Regional del Norte donde obtuvo la licenciatura en ingeniería financiera, cuenta con estudios de Maestría en Administración por la Facultad de Contaduría y Administración de la Universidad Autónoma de Chihuahua.<br>
                                                                    Se ha desarrollado profesionalmente en cargos como Escribiente adscrita al Juzgado Tercero Familiar del Distrito Judicial Morelos, Asesora Técnica adscrita a la Oficialía Mayor del Tribunal Superior de Justicia, Jefa del Departamento de Recursos Materiales del Tribunal Superior de Justicia y Directora de Operaciones del Poder Judicial del Estado de Chihuahua.<br>
                                                                    Actualmente ocupa el cargo de Directora General y Coordinadora de Archivos del Poder Judicial del Estado de Chihuahua lo que le ha permitido desarrollarse en puestos como Presidenta del Grupo Interdisciplinario de Archivos del Poder Judicial del Estado de Chihuahua, fue nombrada representante General de la Red Nacional de Archivos de los Poderes Judiciales locales ante la Comisión Nacional de Tribunales Superiores (CONATRIB).<br>
                                                                    Ha realizado participación activa y permanente en las mesas técnicas para la armonización de la Ley de Archivos del Estado de Chihuahua con la Ley General de Archivos y se nombró Representante del Poder Judicial del Estado de Chihuahua ante el Consejo Estatal de Archivos.<br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-5 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Luis_E_Perez_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">LUIS EDUARDO PEREZ MERCHANT</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-10>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Escolaridad: <br>Licenciado en Derecho por la Universidad de las Américas <br> Maestría en Administración <br>Certificado en el estándar ECO 176 (competencia laboral) <br> En el Poder Judicial del Estado de Puebla 2018- a la fecha: <br>Director del Archivo Judicial del Tribunal Superior de Justicia y Titular del Área Coordinadora de Archivos<br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-10 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/persona1.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">CLAUDIA ALIN ESCOTO VELÁZQUEZ</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-7>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Maestra en Derecho con Orientación a Acceso a la Información por la UNAM y Especialista en el Reglamento General de Protección de Datos de la Unión Europea, impartido por la UNED. Diplomada en “Privacidad, Regulación y Gobernanza de Datos” por el CIDE y en “Gestión de Información para la Transparencia” por la Fundación de las Ciencias de la Documentación (España). Ha tomado cursos de “Implantación de Sistemas de Gestión para Documentos según ISO 30300/30301” en la Universidad Autónoma de Barcelona, de “Proyectos Digitales para el Gobierno Abierto” en la OEA, “Interpretación de la Norma ISO 27000 Sistemas de Gestión de Seguridad de la Información (NYCE) y de Especialización en el Cybersecurity Summer Bootcamp – Policy Makers – Intensivo, organizado por la Universidad de León e INCIBE con la colaboración de la OEA.<br>
                                                                    Actualmente es Subdirectora de Gestión en el INAI y cuenta con más de 25 años de experiencia en la administración pública, ha participado en proyectos de archivos, transparencia, acceso a la información, protección de datos personales y el uso de tecnologías de la información; así como en la conformación de diversos proyectos normativos tales la conformación de la Ley General de Archivos de México y los Lineamientos para la organización y la conservación de archivos emitidos por el Consejo del Sistema Nacional de Transparencia.<br>
                                                                    Es Miembro del Pleno del Grupo de Trabajo sobre Acceso a la Información y Transparencia de la Asociación Latinoamericana de Archivos, así como afiliada del Consejo Internacional de Archivos (ICA, por sus siglas en inglés) y la Asociación Internacional de Profesionales de la Privacidad (IAPP).<br>
                                                                    Ha participado como docente en diversos diplomados, cursos y talleres y cuenta con diversas publicaciones académicas entre las que se destacan “El uso de blockchain para la valoración documental con miras a la conformación de la memoria histórica en México” en la Revista Iberoamericana de Derecho Informático (FIADI), “Hacia una Ley General de Archivos y la protección de datos personales” en el libro Visiones contemporáneas del Derecho a la Información (Tirant lo Blanch-INAI-UNAM), “Los sistemas automatizados para la gestión documental como facilitadores para la transparencia, el acceso a la información, la protección de datos personales y la rendición de cuentas” (Simposio Internacional de Archivos. Archivo, documentación e información en escenarios híbridos), “El metaverso y sus beneficios para el derecho de acceso a la información en México a través de sus archivos” (FIADI), entre otros.
                                                                    <br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-7 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Elisa_B_Peralta_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MAESTRA ELSA BIBIANA PERALTA HERNÁNDEZ</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-8>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Actualmente es la primera Titular del Área Coordinadora de Archivos del TJACDMX. Fue Comisionada Ciudadana del Instituto de Transparencia, Acceso a la Información Pública, Protección de Datos Personales y Rendición de Cuentas de la Ciudad de México, coordinando durante su gestión las Direcciones Jurídica y de Protección de Datos; integrando al Instituto como invitado permanente al Comité de Igualdad de Género de los Órganos Impartidores de Justicia de la Ciudad de México (CDMX). Representó a dicha Institución en la implementación del PDH CDMX en los temas de derecho de acceso a la información y protección de datos personales. Estuvo sola al frente durante nueve meses, lo que constituyó un hecho inédito.<br>
                                                                    En el Sistema Nacional de Transparencia coordinó la Comisión de Rendición de Cuentas, de la cual también fue Secretaria Técnica, así como de la de Comisión Jurídica, de Criterios y Resoluciones, y durante dos períodos consecutivos, al mismo tiempo, de la de Archivos y Gestión Documental y de la de Datos Personales. Durante toda su gestión que duró seis años, integró de manera activa dichas comisiones, así como también las de Tecnologías de la Información y Plataforma Nacional de Transparencia, y la de Derechos Humanos, Género e Inclusión.<br>
                                                                    Ha participado de manera activa en la organización; así como, como ponente o moderadora, en diversos Foros de Transparencia, Protección de Datos Personales, Archivos, Anticorrupción y Género, tanto en la República Mexicana, como en el ámbito internacional en países como Argentina, Chile, Uruguay, Colombia, Perú, El Salvador y España.<br>
                                                                    Fue la primera Contralora General del Tribunal Superior de Justicia del Distrito Federal y del Consejo de la Judicatura, así como Encargada del Despacho de la Oficina de Información Pública del mismo. Fue Asesora y Secretaría Técnica de la Presidencia de dichos órganos. Durante más de 20 años, fungió como Secretaria Proyectista de Tribunal Colegiado y Unitario, Secretaria Proyectista de Sala, Actuaria de Juzgado de Distrito y Oficial Judicial en diversos Órganos Jurisdiccionales, tanto Locales como Federales y en la SCJN.<br>
                                                                    Es Maestra en Administración Pública por el Instituto Nacional de Administración Pública, con Mención Honorifica. Es Licenciada en Derecho por la Universidad Nacional Autónoma de México. Es Doctorante en Administración y Políticas Públicas. Curso diversos diplomados, seminarios y especialidades en las materias mencionadas, destacando el Seminario de Capacitación de Servidores Públicos Mexicanos, por invitación de la Escuela de Gobernanza en China.
                                                                    De manera honorífica Coordinó la Comisión de Transparencia y Rendición de Cuentas y el Primer Comité de Igualdad de Género, en el Instituto Nacional de Administración Pública.<br>
                                                                    Es miembro activo de la Barra Mexicana Colegio de Abogados y Subcoordinadora de la Comisión de Datos Personales.
                                                                    Actualmente es fundadora de la RED DE MUJERES POR LA TRANSPARENCIA, e integra diversos grupos y colectivos feministas.
                                                                    Actualmente es titular del Programa #LALUPA que se transmite por internet y diversas redes sociales, como Facebook Live, YouTube, Instagram, Linkedln, Twitter y Tik Tok. Es invitada habitual en programas de Radio y Televisión como especialista en las materias mencionadas; así como articulista en diversos libros, revistas y columnas especializadas. Cuenta con la publicación del libro denominado “Reflexiones Femeninas”, que ella denomina “Poesía Feminista”.<br>
                                                                    Ha impartido cátedra en diversas Instituciones del Sector Público en materia de Transparencia, Protección de Datos Personales, Archivos, Anticorrupción y Género, tanto en la República Mexicana, como en el ámbito Internacional.
                                                                    <br>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/Ruth_M_Flores_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRA. RUTH MARÍA FLORES BUSTILLOS</h3>
                                                        <div class="gdlr-lightbox-form id=gdlr-form-11">
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                 <h3 style="text-align: justify">
                                                                    Licenciada en Ciencias Jurídicas egresada del Centro de Estudios Universitarios, Facultad de Derecho en la ciudad de Monterrey, Nuevo León; con Maestría en Derecho Judicial de la Escuela Judicial del Poder Judicial del Estado de Quintana Roo. <br>
                                                                    Ha sido catedrática en la Universidad de Quintana Roo por un periodo de seis años. En el Poder Legislativo del Estado de Quintana Roo, durante tres años, tuvo a su cargo la Subdirección del Control de Proceso Legislativo y posteriormente, por dos años, estuvo al frente de la Subdirección del Archivo, en donde coordinó los trabajos para la implementación de la Ley General de Archivos. Asimismo, en el Poder Judicial del Estado de Quintana Roo, a lo largo de más de 15 años, desempeñó cargos como Secretaria de Acuerdos en Juzgados de Primera Instancia, Secretaria de Estudio y Cuenta en Segunda Instancia, Secretaria de Acuerdos de la Sala Penal y actualmente, Directora del Archivo Judicial, en donde desde 2018, ha dirigido los trabajos para la implementación del Sistema Institucional de Archivos, instalación del Grupo Interdisciplinario y demás acciones inherentes a la materia.<br>
                                                                    Ha participado impartiendo diversos cursos, conferencias y asesorías en materia de archivo, tanto al interior del Poder Judicial del Estado de Quintana Roo, así como en organismos autónomos como la Auditoría Superior del Estado, Centro de Conciliación Laboral del Estado de Quintana Roo; Instituto de Movilidad, entre otros. De igual forma, ha participado como expositora en la Red Nacional de Archivos de la CONATRIB, con el tema “Plan de Valoración Documental”.<br>
                                                                    La Mtra. Flores Bustillos, actualmente es Representante de la Región 5 de la Red Nacional de Archivos de CONATRIB, en la que se encuentran los estados de Campeche, Chiapas, Oaxaca, Quintana Roo y Yucatán.<br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-11 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/roman.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">ROMÁN SOUBERVILLE GONZÁLEZ</h3>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-12>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciado en Derecho por la Universidad Autónoma del Estado de Hidalgo con Titulación automática por promedio, también es egresado de la Licenciatura en Relaciones Internacionales por la Universidad Nacional Autónoma de México. <br>
                                                                    Tiene estudios de especialización en Amparo, por la Universidad Iberoamericana y diplomado en Juicio de Amparo por la UNAM y la SCJN.<br>
                                                                    Cuenta con diplomado en Juicio de Amparo por la casa de la Cultura Jurídica de la SCJN.<br>
                                                                    Ha realizado cursos en Derecho Procesal Constitucional en el Tribunal Electoral del Poder Judicial de la Federación. Así como la pasantía de capacitación del Sistema Acusatorio Adversarial, en Santiago de chile. Diplomado por Especialización para nuevos aspirantes a jueces de Control y Juicio Oral. <br> Asimismo, Curso de Nuevo sistema de Justicia Penal de Aspirantes a Jueces que cuenten con nivel avanzado de capacitación. <br>
                                                                    Curso en capacitación especializada para Magistrados y Consejeros del Sistema Penal Acusatorio.<br>
                                                                    Ha sido abogado postulante, catedrático en diferentes instituciones educativas y ha ocupado diversos cargos en la Administración Pública a nivel Municipal, Estatal y Federal.<br>
                                                                    En el Poder Judicial del Estado, ha sido Consejero de la Judicatura, Presidente de la Sala Unitaria de Justicia Penal para Adolescentes, integrante de la Segunda Sala Pena y, actualmente, se desempeña como integrante de la Primera Sala Penal.<br>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-12 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_8_aj/red/images/img_ponentes/brenda.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">L.C. BRENDA LILIANA CERVANTES ROSALES</h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-13>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    FORMACION ACADEMICA <br>
                                                                    PRIMARIA: PRESIDENTE MIGUEL ALEMAN EN LA CIUDAD DE TEPIC, NAYARIT. <br>
                                                                    SECUNDARIA: SECUNDARIA FEDERAL NUMERO 2, EN LA CIUDAD DE TEPIC, NAYARIT. <br>
                                                                    BACHILLERATO: INSTITUTO TECNOLOGICO DE TEPIC, NAYARIT. <br>
                                                                    PROF ESIONAL: LICENCIATURA EN CONTADURIA, LA UNIVERSIDAD DEL VALLE DE MATATIPAC.  <br>
                                                                    ACTIVIDADES PROFESISONALES<br>
                                                                    EN EL MES DE OCTUBRE DEL AÑO 1988 AL 2008 TRABAJE EN LA INICIATIVA PRIVADA EN DIVERSOS LUGARES DESEMPEÑANDOME COMO CONTADOR PUBLICO COMO EN CASA DE CAMBIO EL RUBLO THARSOS CENTER NOTARIA 8, DESPACHO SIMANCAS COMO AUDITOR Y EN LOS ESTADOS UNIDOS COMO PREPARADORA DE IMPUESTOS DEL AÑO 2003 AL 2008.<br>
                                                                    EN EL AÑO 2008 COMENCE A TRABAJAR EN EL GOBIERNO DEL ESTADO EN LA CON TRALORIA DEL ESTADO HASTA EL AÑO 2011. DESEMPEÑAMDO EL PUESTO DE AUDITOR.<br>
                                                                    EN EL AÑO 2011 ME DESEMPEÑE EN EL CARGO DE TRANSPARENCIA EN EL DESPACHO DEL EJECUTIVO DURANTE EL GOBIERNO DEL ROBERTO SANDOVAL CASTAÑEDA.<br>
                                                                    EN EL AÑO 2014 COMENCE A OCUPAR EL CARGO DE JEFA DE RECURSOS HUMANOS EN EL PODER JUDICIAL DEL ESTADO DE NAYARIT. HASTA EL 2017<br>
                                                                    EN EL AÑO DEL 2017 ME DESEMPEÑE COMO JEFA DEL DEPARTAMENTO DE BIENES Y SERVICIOS. <br>
                                                                    Y EN EL AÑO 2018 ME ASIGNAN COMO JEFA DEL ARCHIVO JUDICIAL DEL ESTADO DE NAYARIT HASTA LA FECHA. <br>
																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-13 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
												<li class="gdlr-item gdlr-speaker-item">

                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"></h3>
                                                        <div class=gdlr-lightbox-form id=gdlr-form-10>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-10 data-rel=fancybox data-fancybox-type=inline></a></div>
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
