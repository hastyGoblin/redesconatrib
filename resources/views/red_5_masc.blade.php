<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

    <title>Red &#8211; MASC</title>

    <link rel="stylesheet" href="rede_5_masc/red/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_5_masc/red/plugins/superfish/css/superfish.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_5_masc/red/plugins/dl-menu/component.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_5_masc/red/plugins/font-awesome-new/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_5_masc/red/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_5_masc/red/plugins/flexslider/flexslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_5_masc/red/css/style-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_5_masc/red/css/style-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_5_masc/red/plugins/masterslider/public/assets/css/masterslider.main.css" type="text/css" media="all">
    <link rel="stylesheet" href="rede_5_masc/red/css/master-custom.css" type="text/css" media="all">
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
                        <a href=""> <img src="{!! asset('rede_5_masc/red/images/logo_red_5.png') !!}" alt=""> </a>
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
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url('rede_5_masc/red/upload/mecanismos_alternativos.png'); padding-top: 100px; padding-bottom: 70px; ">
                            <div class="container">
                                <div class="gdlr-title-item" style="margin-bottom: 40px;">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                        <div class="gdlr-item-title-head">
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">RED NACIONAL DE MECANISMOS  ALTERNATIVOS DE</h4>
                                            <h4 class="gdlr-item-title gdlr-skin-title gdlr-skin-border gdlr-title-large">SOLUCI&Oacute;N DE CONTROVERSIAS</h4>
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
                                            <div class="gdlr-session-head-date">14 de Noviembre 2022</div>
                                        </div>


                                        <div class="clear"></div>
                                    </div>

                                    <!-- inicia dia 1-->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-1 gdlr-active">
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:00 – 17:10 hrs. hrs.</div>
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
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>17:10 – 18:00 hrs.</div>
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>DRA. AMELIA IRURETAGOYA QUIROZ</a></div>
																<div class="gdlr-session-item-excerpt">Coordinadora y Facilitadora de la Asociación Hermosillo ¿Cómo Vamos?. </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
                                               <h3 class="gdlr-session-item-title">Conferencia Magistral</h3>
												<div class="gdlr-session-item-excerpt"></div>
											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/LeZYVuI-SvE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:00 – 18:40 hrs.</div>
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>DR. EMILIO NAVAS PAÚS</a></div>
																<div class="gdlr-session-item-excerpt">Director del Master de Mediación de la Universidad Francisco de Vitoria en Madrid, España. </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
                                               <h3 class="gdlr-session-item-title">Conferencia Magistral</h3>
												<div class="gdlr-session-item-excerpt"></div>
											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/LeZYVuI-SvE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>18:40 – 20:00 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>DR. GUILLERMO ZEPEDA LECUONA</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Director General del Instituto de Justicia Alternativa del Poder Judicial de Jalisco.</a></div>

																<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-user"></i><a>MTRA. HILIANA NUÑEZ GARCÍA</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Subdirectora General del Centro Estatal de Justicia Alternativa del Poder Judicial del Estado de Durango.</a></div>

																<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-user"></i><a>MTRO. JUAN CASTRO PALACIOS</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Director del Centro de Justicia Alternativa del Poder Judicial del Estado de Quintana Roo.</a></div>
																<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-user"></i><a>DR. SERGIO VALLS SPONDA</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Director General del Centro Estatal de Mediación, Conciliación y Justicia Restaurativa del Estado de México.</a></div>


																<div class="session-speaker-list-item" style="padding-top: 2em !important;"><i class="fa fa-user-circle" aria-hidden="true"></i><a>Moderadora: MTRA. ELISHEBA GOLDHABER PASILLAS</a></div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-address-card" aria-hidden="true"></i><a>Directora General del Centro Estatal de Justicia Alternativa del estado de Chiapas.</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                               <h3 class="gdlr-session-item-title">Panel de Diálogo</h3>
												<div class="gdlr-session-item-excerpt">“El trabajo de la mediación intra-judicial”.</div>
											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <article class="type-post">
															<div class="entry-cover">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/LeZYVuI-SvE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													            <div class="entry-block"></div>
													 </article>
                                                 </div>
                                            </div>
                                           <div class="clear"></div>
                                        </div>

                                    </div>
                                    <!-- termina dia 1 -->

                                    <!-- Inicia dia 2 -->

                                     <!-- termina dia 2 -->
                                     <!-- inicia dia 3-->

                                    <!-- termina dia 3 -->

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/Amelia_Iruretegoya.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DRA. AMELIA IRURETAGOYA QUIROZ</h3>
														<div class="gdlr-session-item-excerpt">Coordinadora y Facilitadora de la Asociación Hermosillo ¿Cómo Vamos? </div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-17>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Dra. en Criminología y Justicia Juvenil por el Centro de Criminología de la Universidad Castilla la Mancha, España; Mediadora por la Universidad de Sonora y el Instituto de Mediación de México,S.C., con estudios en Justicia Restaurativa por varios centros de enseñanza. <br>Es corresponsal en México de la Fundación Acción Restaurativa/ Argentina.<br> Participa en organizaciones ciudadanas para la generación de políticas públicas municipales y en materia de prevención, atención y avance para erradicar la violencia, hacia la niñez y las mujeres. Cuenta con publicaciones como coautora en varios libros y autora de artículos en varias revistas especializadas.<br> Preside el Consejo ciudadano del Sistema de protección de niñas, niños y adolescentes del estado de Sonora.<br> Ocupo varios cargos directivos en la Universidad de Sonora siendo el último como Directora de la División de Ciencias Sociales en el año 2019.<br> Actualmente se desempeña en la Asociación Hermosillo ¿Cómo Vamos? como Coordinadora y Facilitadora de procesos de Diálogo entre quienes integran las mesas temáticas que analizan los principales problemas de la Ciudad de Hermosillo, Sonora, y presentan sus propuestas al gobierno municipal.<br> Ha tenido diversos reconocimientos uno de los últimos que su biografía y trayectoria fue aceptada y aparece en Wikipedia.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class="gdlr-ticket-button" href=#gdlr-form-17 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/elishe.jpg" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRA. ELISHEBA GOLDHABER PASILLAS</h3>
														<div class="gdlr-session-item-excerpt">Directora General del Centro Estatal de Justicia Alternativa del estado de Chiapas </div>
                                                          <div class=gdlr-lightbox-form id=gdlr-form-18>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Derecho por la Universidad Autónoma de Chiapas, Diplomado en Políticas Públicas por The Washington Center; y Maestra en Derecho con formación en Derecho Constitucional y Amparo por la Universidad Autónoma de Chiapas. A partir del 27 de septiembre del 2011 se desempeñó como Conciliadora adscrita a la Subdirección Regional del Centro Estatal de Justicia Alternativa del Poder Judicial del Estado de Chiapas, posteriormente en 2013 se desempeña como Árbitro en la misma dependencia y a partir de enero del 2019 es la Directora General del Centro Estatal de Justicia Alternativa del estado de Chiapas y actualmente Jueza de primera instancia encargada de la Dirección General de mencionado Centro Estatal. <br>
																</h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-18 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/Emilio_Navas.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DR. EMILIO NAVAS PAÚS</h3>
														<div class="gdlr-session-item-excerpt">Director del Master de Mediación de la Universidad Francisco de Vitoria en Madrid, España.</div>
													<div class=gdlr-lightbox-form id=gdlr-form-19>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Abogado Universidad Nacional de Buenos Aires; Abogado Universidad Autónoma de Madrid;Mediador del Ilustre Colegio de Abogados de Madrid; Miembro de QAP Mediation International;Certificado por la International Mediation Institute, IMI; Presidente de la AsociaciónInterdisciplinaria Europea de Estudios de la Familia, AIEEF; Organizador y ponente del WorldMediation Summit, Madrid.<br>Ponente en Congresos Internacionales, coordinador de Punto deEncuentro Familiar Tres Cantos Madrid; es Director del Master de Mediación de la UniversidadFrancisco de Vitoria en Madrid, España.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-19 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/Guillermo_Raul_Zepeda.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">DR. GUILLERMO ZEPEDA LECUONA</h3>
														<div class="gdlr-session-item-excerpt">Director General del Instituto de Justicia Alternativa del Poder Judicial de Jalisco.</div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-20>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3>
                                                                   Director General del Instituto de Justicia Alternativa del Poder Judicial de Jalisco. Profesor en El Colegio de Jalisco. Miembro del Sistema Nacional de Investigadores.<br> Académico y consultor con más de 25 años de experiencia en el seguimiento y evaluación de los sistemas de justicia, en proyectos de investigación nacionales e internacionales.<br> Coordinó el Grupo Técnico Especializado del Comité de Evaluación y Seguimiento de la Implementación del Nuevo Sistema de Justicia Penal de Corte Acusatorio (SETEC-SEGOB). Doctor en Derecho por el Instituto de Investigaciones Jurídicas de la Universidad Nacional Autónoma de México, con especialidad en Sociología jurídica; Maestro en Políticas Públicas por el Instituto Tecnológico Autónomo de México (ITAM) y Abogado por la Universidad de Guadalajara. <br>Autor de trece libros y más de cincuenta ensayos publicados como capítulos de libros, monografías y como artículos en revistas especializadas. Entre sus libros se pueden referir: Crimen sin castigo: Procuración de Justicia Penal y ministerio público en México, publicado por el Fondo de Cultura Económica y el Centro de Investigación para el Desarrollo; así como Buenas prácticas en la implementación y operación del nuevo Sistema de Justicia Penal en México, publicado por la Agencia de los Estados Unidos para el Desarrollo Internacional.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-20 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/Hiliana_Nunez.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRA. HILIANA NUÑEZ GARCÍA</h3>
														<div class="gdlr-session-item-excerpt">Subdirectora General del Centro Estatal de Justicia Alternativa del Poder Judicial del Estado de Durango.</div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-21>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciada en Derecho por la Universidad Juárez del Estado de Durango; Maestra en Terapia Familiar por la misma Universidad; Maestra en Derecho judicial por la Universidad Judicial del Poder Judicial del Estado de Durango y del Consejo de la Judicatura con la Especialidad de Derecho Civil; Doctorante en Derecho Judicial por la misma Universidad; Formadora en cursos de capacitación para aspirantes a especialistas en métodos alternos de solución de conflictos y docente en los niveles de licenciatura y posgrado en Derecho.<br> A partir del 10 de octubre de 2005 labora como Especialista Institucional del Centro Estatal de Justicia Alternativa del Poder Judicial del Estado de Durango y desde noviembre de 2020 se desempeña en el mismo Centro como Subdirectora General; desde octubre de 2022 se encuentra como encargada del Despacho de es mismo Centro Estatal.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class="gdlr-ticket-button" href=#gdlr-form-21 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                  <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/Juan_Jesus_Castro_.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. JUAN CASTRO PALACIOS</h3>
														<div class="gdlr-session-item-excerpt">Director del Centro de Justicia Alternativa del Poder Judicial del Estado de Quintana Roo.</div>

                                                          <div class=gdlr-lightbox-form id=gdlr-form-22>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                     Licenciado en Derecho por la Universidad Autónoma Metropolitana, con estudios de Maestría en Mecanismos Alternativos de Solución de Conflictos, ha sido Director del Centro de Asistencia Jurídica en Cancún del Poder Judicial del Estado de Quintana Roo, entre los años de 1997 y 2000, tiempo en el que colaboró en la Elaboración de la Primera Ley de Justicia Alternativa en el país (de Quintana Roo), publicada el 14 de agosto de 1997; Regidor del H. Ayuntamiento de Benito Juárez (Cancún), entre 2002 y 2005; y Director de Gobierno de ese mismo Ayuntamiento entre 2005 y 2008. <br>Desde 2017, es Director del Centro de Justicia Alternativa del Poder Judicial del Estado de Quintana Roo.<br>
																</h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-22 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/Ruben_Cardoza.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. RUBEN CARDOZA MOYRON </h3>

													<div class=gdlr-lightbox-form id=gdlr-form-43>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciado en Derecho por el Instituto Tecnológico y de Estudios Superiores de Monterrey; con Maestría en Derecho Público, por la División de Posgrado de la Facultad de Derecho y Criminología de la Universidad Autónoma de Nuevo León; y Maestría en Administración Pública y Políticas Públicas por la Escuela de Graduados en Administración Pública (EGAP) del Tecnológico de Monterrey. <br>  Funcionario judicial y director fundador del Centro de Mediación del H. Tribunal Superior de Justicia de Baja California Sur, desde el año 2000 hasta enero de 2005; fundador y Director del Centro Estatal de Métodos Alternos para la Solución de Conflictos del Estado de Nuevo León, de febrero de 2005 a diciembre de 2012. <br> Fue gerente de Justicia Alternativa de PROJUSTICIA/USAID en México, consultor privado en mediación y solución de conflictos y Responsable del Programa Reforma de Justicia del Centro de Estudios sobre la Enseñanza y el Aprendizaje del Derecho, A.C. (CEEAD).<br>  Desde mayo de 2018 es Director del Centro Estatal de Justicia Alternativa de Baja California Sur.<br>  Miembro entre 2002 y 2005 del Comité Asesor del Proyecto para la Mediación en México de la American Bar Association (ABA)-USAID. Miembro fundador de la Asociación Nacional para la Resolución de Conflictos, A.C. (ARCO). <br> Es docente por asignatura y miembro de la Junta Consultiva de la Universidad Autónoma de Baja California Sur.<br>  Es profesor de Derecho e instructor de Mediación en diversas universidades e instituciones del país, y ha participado en múltiples foros y talleres nacionales e internacionales como ponente o instructor en materias de administración de justicia, mediación y justicia restaurativa con especial acentuación en las materias penal y de justicia para adolescentes. <br>  Fue Docente Certificado en Conciliación y Mediación por el Consejo de Coordinación para la Implementación del Sistema de Justicia Penal de la Secretaría de Gobernación (SETEC), y Miembro del Consejo Técnico del Examen Diagnóstico de Conocimientos y Habilidades en el Sistema Procesal Penal Acusatorio (EXSIPA) del Centro Nacional de Evaluación para la Educación Superior (CENEVAL).  <br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-43 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/Sergio_Arturo_Valls.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title"> Magistrado Sergio Arturo Valls Esponda</h3>
														<div class="gdlr-session-item-excerpt">Director General del Centro Estatal de Mediación, Conciliación y Justicia Restaurativa del Estado de México.</div>

                                                        <div class=gdlr-lightbox-form id=gdlr-form-24>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3>
                                                                   Licenciado en Derecho por la Universidad Intercontinental; Maestro en Derecho por el Centro de Estudios de Posgrado en Derecho; Master en Argumentación Jurídica por la Universidad de León, España; cuenta con cursos de especialización en la Universidad de Salamanca, Universidad de Alcalá de Henares, Instituto de Investigaciones Jurídicas de la UNAM, Centro de Estudios Jurídicos para las Américas (CEJA-OEA) y Harvard University. Autor de múltiples artículos de investigación y crítica jurídica. <br> Se ha desempeñado en la administración pública federal y estatal; en organismos autónomos ocupó la Secretaría Técnica de la Presidencia de la Comisión Nacional de Derechos Humanos (CNDH); Comisionado en el Instituto de Transparencia y Acceso a la Información del Estado de México (INFOEM); en 2010 la Legislatura del Estado de México le tomó protesta como Magistrado del Tribunal Superior de Justicia del Estado de México.<br> Actualmente es Director General del Centro Estatal de Mediación, Conciliación y Justicia Restaurativa del Estado de México.<br>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-24 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
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
    <script src="js/jquery.min.js"></script>
    <script src='js/bitacoraLogout.js'></script>



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
