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
                        <a href=""> <img src="rede_3_est_jud/red/upload/logo_estadistica_judicial.png" alt=""> </a>
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
                            <div class="" style="margin-bottom: 30px;top:198px;right:280px;">
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
									
									
									<br>
									<br>
									<div class="gdlr-session-thumbnail-wrapper">
                                        <a href="{{ URL::asset('/rede_3_est_jud/red/images/PROGRAMA_RNEJ_2023.pdf') }}" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver Programa Completo PDF</button></a>
                                   </div>
                                </div>
                            <div class="session-item-wrapper" style="margin-bottom: 75px;">
                                <div class="gdlr-session-item gdlr-tab-session-item gdlr-item">
                                    <div class="gdlr-session-item-head">
                                        <div class="gdlr-session-item-head-info gdlr-active" data-tab="gdlr-tab-1">
                                            
                                            <div class="gdlr-session-head-date">30 de noviembre de 2023</div>
                                        </div>
                                       
                                        <div class="clear"></div>
                                    </div>

                                    <!-- inicia dia 1-->
                                    <div class="gdlr-session-item-tab-content gdlr-tab-1 gdlr-active">
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            
                                            
                                             <div class="clear"></div>
                                            </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:00 hrs.</div>
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. José Alfredo Rodríguez Báez</a></div>
																<div class="gdlr-session-item-excerpt">Coordinador de Información Pública y Estadística del Poder Judicial de la Ciudad de México y de la Red Nacional de Estadísticas Judiciales de la CONATRIB.</div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
                                               <h3 class="gdlr-session-item-title">Introducción al Encuentro</h3>
												
											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
                                                </div>
                                            </div>
                                          <div class="clear"></div>
                                        </div>
										<div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:05 hrs.</div>
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Moderadora:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. María Jacqueline Martínez Uriarte</a></div>
																<div class="gdlr-session-item-excerpt">Directora General de Estadísticas Judiciales del Consejo de la Judicatura Federal.</div>
															</div>
                                                        </div>
                                                      </div>
                                                    <div class="clear"></div>
                                                </div>
                                             </div>
                                            <div class="gdlr-session-item-content">
											 <h3 class="gdlr-session-item-title">Introducción a la Sesión</h3>
                                               
											    <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
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
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:10&nbsp; hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Alberto Menéndez Vázquez</a></div>
																<div class="gdlr-session-item-excerpt">Director de Estadística de la Unidad de Enlace para la Reforma al Sistema de Justicia Laboral.</div>
                                                               

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Estadísticas del Sistema de Justicia Laboral</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
										
										<div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:20 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtro. Heriberto Robles Alanís</a></div>
                                                               <div class="gdlr-session-item-excerpt">Director de Políticas de Información Gubernamental del Instituto Nacional de Estadística y Geografía.</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Estadísticas del Registro Administrativo en Materia Laboral (RALAB)</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
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
																<div class="gdlr-session-item-excerpt">Ponentes:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Markus Gottsbacher</a></div>
                                                               <div class="gdlr-session-item-excerpt">Oficial de Programa de Gobernanza Incluyente y Democrática en el Centro Internacional de Investigaciones para el Desarrollo (IDRC) de Canadá.</div>
																
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Sofía Brito</a></div>
                                                               <div class="gdlr-session-item-excerpt">Diálogo Diverso, Ecuador.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Samuel Jair Martínez</a></div>
                                                               <div class="gdlr-session-item-excerpt">Investigador de la organización Letra S. Sida, Cultura y Vida Cotidiana, A.C integrante de la Red Sin Violencia LGBTI.</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Lic. Karen Anaya </a></div>
                                                               <div class="gdlr-session-item-excerpt">Secretaria técnica de la Red Sin Violencia LGBTI. </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Importancia de datos y estadísticas para la visibilización de la migración y homicidios de personas LGBTI+</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>10:50 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>
																<div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Verónica Martínez Solares </a></div>
                                                                <div class="gdlr-session-item-excerpt">Consejera de la Fundación para el Estudio de la Seguridad y Gobernanza, A.C. </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">La triangulación en el proceso de evaluación de la calidad de la justicia</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
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
																<div class="gdlr-session-item-excerpt">Ponente:</div>
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Sra. Paulina Grobet Vallarta </a></div>
                                                                <div class="gdlr-session-item-excerpt">Asesora de ONU Mujeres México. 
																</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Estadística con perspectiva de género</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:10 hrs.</div>
                                                    <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
																<div class="gdlr-session-item-excerpt">Ponente:</div>

                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Celia Aguilar Setién </a></div>
                                                                <div class="gdlr-session-item-excerpt">Directora General de Planeación y Evaluación en el Instituto Nacional de las Mujeres.</div>
</div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-session-item-content">
                                                <h3 class="gdlr-session-item-title">Perspectiva de género en los programas estadísticos de impartición de justicia</h3>
                                                <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                      <div class="gdlr-session-item-content-wrapper">
                                          <div class="gdlr-session-item-divider"></div>
                                          <div class="gdlr-session-item-content-info">
                                            <div class="gdlr-session-info">
                                              <div class="session-info session-time"><i class="fa fa-clock-o"></i>11:20 hrs.</div>
                                              <div class="session-info session-speaker">
                                                <div class="session-speaker-inner">
                                                  <div class="session-speaker-list">
                                                    <div class="gdlr-session-item-excerpt">Ponente:</div>
                                                    <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dra. Mila Paspalanova  </a></div>
                                                    <div class="gdlr-session-item-excerpt">Asesora de No-Discriminación Racial para Europa. Oficina del Alto Comisionado de las Naciones Unidas para los Derechos Humanos. </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="clear"></div>
                                            </div>
                                          </div>
                                          <div class="gdlr-session-item-content">
                                            <h3 class="gdlr-session-item-title">Indicadores de derechos humanos</h3>
                                            <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                            <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
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
                                                  <div class="gdlr-session-item-excerpt">Ponente:</div>
                                                  <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Mtra. Martha Beatriz Vargas Rojas </a></div>
                                                  <div class="gdlr-session-item-excerpt">Directora de Estadística de la Presidencia del Poder Judicial de la Ciudad de México. </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="clear"></div>
                                          </div>
                                        </div>
                                        <div class="gdlr-session-item-content">
                                          <h3 class="gdlr-session-item-title">Resultados del Sistema de Información Estadística de las Entidades Federativas (SIEEFE)</h3>
                                          <div class="gdlr-session-item-excerpt">Ponencia Magistral. </div>
                                          <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://pjcdmx.webex.com/pjcdmx/j.php?MTID=mb97c611b51ff7b3d980813f7b9136875" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="clear"></div>
                                      </div>

                                        <div class=gdlr-session-item-content-wrapper>
                                          <div class=gdlr-session-item-divider></div>
                                                <div class=session-break-content>
                                                    <div class=session-break-info><i class="fa fa-clock-o"></i>11:35 hrs.</div>
                                                    <h3 class="gdlr-session-break-title">Conclusiones y acuerdos</h3></div>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Maria-Jacqueline-.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. María Jacqueline Martínez Uriarte
														 </h3>
														<div class="gdlr-session-item-excerpt">Directora General de Estadísticas Judiciales del Consejo de la Judicatura Federal. 
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-16>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   
Es licenciada en Ciencias Sociales y actualmente titular de la Dirección General de Estadística Judicial del Consejo de la Judicatura Federal.<br>
Cursó el Master Internacional en Sociología Jurídica del Instituto Internacional de Sociología Jurídica de Oñati, España.<br>
Se ha desempeñado en diversos cargos en el Poder Judicial de la Federación, por más de 15 años, entre los que destacan: directora general de Gestión Judicial, directora general de Derechos Humanos, Equidad de Género y Asuntos Internacionales en el Consejo de la Judicatura Federal; así como Jefa de la Unidad de Relaciones Institucionales en la Suprema Corte de Justicia de la Nación.<br>
Fue Directora General Adjunta de la Academia Diplomática del Instituto Matías Romero en la Secretaría de Relaciones Exteriores de México e investigadora asociada del Centro de Investigación para el Desarrollo (CIDAC).<br>
Participó como Vocal del Comité Técnico Especializado de Información con Perspectiva de Género del Sistema Nacional de Información Estadística y Geográfica, Coordinara Nacional en la Cumbre Judicial Iberoamericana y Consultora de la Agencia de los Estados Unidos para el Desarrollo Internacional para el análisis del proceso de democratización en México.
<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-16 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Dr.-Alberto-Menendez-Vazquez.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Alberto Menéndez Vázquez </h3>
														<div class="gdlr-session-item-excerpt">Director de Estadística de la Unidad de Enlace para la Reforma al Sistema de Justicia Laboral. 
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-17>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Economista egresado de Licenciatura y Maestría en la Universidad de La Habana; Doctor en Políticas Públicas egresado del CIDE, con especialidad en Política Económica.<br>
Profesor-Investigador en la Facultad de Economía de la Universidad de La Habana, en materias de Teoría e Historia del Pensamiento Económico. Directivo de la revista académica Economía y Desarrollo.<br> 
Asistente de Docencia e Investigación de la División de Economía del CIDE en temas de Regulación y Competencia Económica, específicamente en el sector energético. <br>
Funcionario público del Gobierno de México y de la Ciudad de México en temas de mercado, economía y justicia laboral. 
<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-17 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Mtro.-Heriberto-Robles-Alanis.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtro. Heriberto Robles Alanís </h3>
														<div class="gdlr-session-item-excerpt"> Director de Políticas de Información Gubernamental del Instituto Nacional de Estadística y Geografía. 
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-18>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    El Maestro Robles Alanis es Licenciado en economía por la Universidad Autónoma Metropolitana – Unidad Azcapotzalco –; y Maestro en Administración y Políticas Públicas por el Centro de Investigación y Docencia Económicas (CIDE), en la Ciudad de México.<br>
Respecto a su experiencia laboral:<br>
En 2009 fue Asesor en la Suprema Corte de Justicia de la Nación, en materia de planeación, seguimiento y desarrollo organizacional.<br>
En 2011 laboró como Subdirector en la SETEC1, Secretaría encargada de coordinar la implementación de la reforma de 2008 al sistema de justicia penal a nivel nacional, en donde participó en la asesoría y seguimiento para la integración de los planes estratégicos de implementación en 22 entidades federativas. En 2012, estuvo comisionado a la Oficina del C. Secretario de Gobernación para el seguimiento y conclusión de proyectos sobre seguridad pública.<br>
Para 2013, fungió como Asesor y luego como Director de Planeación y Organización en el Tribunal Electoral del Poder Judicial de la Federación.<br>
En 2016 retomó trabajos en SETEC, donde participó en el diseño de indicadores de desempeño para medir y evaluar el funcionamiento del sistema de justicia penal en las entidades federativas.<br>
En 2016 se desempeñó en la Secretaría de Hacienda y Crédito Público como Subdirector de Análisis y Valoración de Políticas públicas, donde colaboró en el diseño e implementación de una metodología para el análisis y la valoración de políticas públicas, utilizada para realizar evaluaciones en materia de cambio climático y perspectiva de género.<br>
1 Secretaría Técnica para la Implementación del Sistema de Justicia Penal
8° Encuentro Nacional de la Red de Estadísticas Judiciales de la CONATRIB
Ha sido consultor del CIDE para diversas instituciones en los temas de seguridad pública, educación, transparencia, derechos humanos, electoral, desarrollo organizacional, desarrollo urbano, ciencia y tecnología, y anticorrupción.<br>
Actualmente se colabora en la Dirección General de Estadísticas de Gobierno, Seguridad Pública y Justicia del INEGI, como Director de Políticas de Información Gubernamental, área encargada del diseño conceptual y metodológico de los instrumentos de captación de los Censos Nacionales de Gobierno, recopilaciones, y aprovechamiento de registros administrativos, que atiendan a las necesidades de información en los temas de gobierno, derechos humanos, rendición de cuentas, corrupción, crimen, seguridad pública, violencia, justicia, sistema penitenciario y drogas, en el marco del Subsistema Nacional de Información de Gobierno, Seguridad Pública e Impartición de Justicia.<br>
Finalmente, ha publicado sobre evaluación de política pública en materia de infraestructura pública y, como una colaboración con el INEGI-SEGOB, en 2017 publicó el artículo “Victimización y capacidades institucionales del Sistema Nacional de Atención a Víctimas” en Estadísticas judiciales en el marco del nuevo sistema de justicia penal en México.

<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-18 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Dr.-Markus-Gottsbacher.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Markus Gottsbacher </h3>
														<div class="gdlr-session-item-excerpt">Oficial de Programa de Gobernanza Incluyente y Democrática en el Centro Internacional de Investigaciones para el Desarrollo [IDRC] de Canadá. 
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-19>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Es Maestro y Doctor en Ciencias Políticas por la Universidad de Viena. Cuenta con casi 30 años de experiencia en proyectos relacionados al acceso a la justicia, prevención del delito, así como la reducción de la violencia y construcción de paz en Latinoamérica y el Caribe. Ha trabajado en diversos programas, fondos y agencias especializadas de la Organización de las Naciones Unidas entre las que destacan: ONU Mujeres; el Programa de las Naciones Unidas para el Desarrollo (PNUD); y la Oficina de las Naciones Unidas contra la Droga y el Delito (UNODC) en donde se desempeñó como Gerente de Programa en proyectos relacionados a la justicia penal, prevención del delito y la reducción de la demanda de drogas en México. Ha sido profesor del postgrado de Ciencias Políticas de la UNAM, e investigador/profesor del Instituto de Investigación Dr. José María Luis Mora, donde también coordinó la Maestría de Cooperación Internacional para el Desarrollo. Es Profesor de Investigación Adjunto del Instituto de Economía Política de la Universidad Carleton en Ottawa, Canadá. Ha participado en publicaciones para la Universidad de Naciones Unidas, Siglo XXI, UNAM, IDRC, Universidad Javeriana, CLACSO, Instituto Mora, Universidad Iberoamericana, CONACYT, Routledge y Oxford University Press. Asimismo, ha sido Gerente de Programa de la Organización Internacional de Derecho para el Desarrollo (IDLO) en México. Actualmente es Oficial de Programa de la división de Gobernanza democrática e incluyente del Centro Internacional de Investigaciones para el Desarrollo (IDRC) de Canadá.

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Mtra.-Sofia-Brito.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Sofía Brito  </h3>
														<div class="gdlr-session-item-excerpt">Diálogo Diverso, Ecuador
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-20>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Ecuatoriana/americana, es una joven activista lesbiana. Es Licenciada en comunicación y periodismo, y tiene una maestría en comunicación y opinión pública, por la Facultad Latinoamericana de Ciencias Sociales, sede Ecuador. Es investigadora en las líneas de comunicación, opinión pública, nuevas tecnologías y género, con énfasis en derechos de personas LGBTIQ+. Fue coordinadora de comunicación en Diálogo Diverso y actualmente coordina el proyecto regional Protegiendo los derechos de personas LGBTIQ+ en situación de migración y desplazamiento forzado, MigracionEs LGBTIQ+. Es coordinadora de la Red de Mujeres Lesbianas, Bisexuales y Queer, Existimos. También es Consejera Principal del Consejo Consultivo LGBTI+ del Consejo Nacional para la Igualdad de Género de Ecuador.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-20 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Lic.-Samuel-Jair-Martinez-Cruz.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lic. Samuel Jair Martínez </h3>
														<div class="gdlr-session-item-excerpt">Investigador de la organización Letra S. Sida, Cultura y Vida Cotidiana, A.C integrante de la Red Sin Violencia LGBTI.  
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-21>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Estudiante del Doctorado en Ciencia Social con Especialidad en Sociología en El Colegio de México. Maestro en Estudios de Género por El Colegio de México. Licenciado en psicología social por la Universidad Autónoma Metropolitana (UAM). Funge como coordinador del área de investigación en Letra S. Sida, Cultura y Vida Cotidiana, A. C., y en particular, del proyecto “crímenes de odio por LGBTFobia en México”. Ha publicado informes, artículos y otros materiales relacionados con la violencia por prejuicio en México. Ha participado en foros, simposios, coloquios y múltiples espacios relacionados con su trabajo como investigador en ciencias sociales y la intersección entre la violencia, el género, la diversidad sexual y los derechos humanos.<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-21 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Lic.-Karen-Anaya-Cortez.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Lic. Karen Anaya </h3>
														<div class="gdlr-session-item-excerpt">Secretaria técnica de la Red Sin Violencia LGBTI
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-22>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Abogada feminista y candidata a Magíster en Estudios de Género por la Pontificia Universidad Católica del Perú (PUCP). Especializada en el Derecho Internacional de los derechos humanos.
 Ha trabajado en organizaciones de sociedad civil peruanas, acompañando la incidencia internacional y litigio estratégico de personas LGBTI+. También trabajó en el Ministerio de Justicia y DDHH de Perú. Actualmente, es secretaria técnica de la Red Sin Violencia LGBTI y coordina la Red de Litigantes LGBTI de las Américas, un grupo de expertes y organizaciones litigantes de casos emblemáticos como Atala Riffo e hijas vs Chile, Azul Rojas vs. Perú y Vicky Hernández vs. Honduras.
<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-22 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Mtra.-Veronica-Martinez-Solares.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Verónica Martínez Solares </h3>
														<div class="gdlr-session-item-excerpt">Consejera de la Fundación para el Estudio de la Seguridad y Gobernanza, A.C. 
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-23>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                   Es miembro de la junta directiva de la Organización Internacional para el Apoyo a las Víctimas, organización con estatus especial consultivo ante las Naciones Unidas; de la Fundación para el Estudio de la Seguridad y Gobernanza, A.C. de México; representante del Consejo Internacional de Prevención de la Deutscher Präventionstag de Alemania, miembro permanente del Wolfson College y del Instituto de Criminología de la Universidad de Cambridge; y miembro fundadora de la Plataforma Justicia y Democracia en las Américas de Canadá. Cuenta con estudios de licenciatura en Derecho y en Gestión y administración pública, y de maestría en Victimología, además de especialidades en políticas públicas y género. Fue nombrada Juez Ad-Hoc en la Corte Interamericana de Derechos Humanos y se desempeñó como profesora-investigadora en el Instituto Nacional de Ciencias Penales de México. En el nivel latinoamericano, ha sido directora de programas y proyectos en varios países de la subregión, además de trabajar con Proyectos Estratégicos Consultoría, S.C., en temas de derechos de las víctimas, prevención de la violencia y el delito, acceso a la justicia, género, empoderamiento económico, evaluación de proyectos, delincuencia organizada, reforma policial y al sistema de justicia penal, desplazamiento forzado interno e internacional y emergencias humanitarias. En diversas ocasiones, ha sido asesora en la Cámara de Diputados donde sus propuestas legislativas son ahora parte del marco jurídico mexicano vigente. Ha formado parte de los grupos de expertos y expertas del Sistema de Naciones Unidas y ha sido consultora para diversas organizaciones de cooperación internacional en más de 20 países y 4 continentes. Ha coordinado y participado en investigaciones multi-país y ha escrito artículos, capítulos de libros, libros e informes internacionales en 12 países, en inglés, español, francés, portugués y alemán.<br>

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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Sra.-Paulina-Grobet-Vallarta.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Sra. Paulina Grobet Vallarta </h3>
														<div class="gdlr-session-item-excerpt">Asesora de ONU Mujeres México. 
                                                      </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-24>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Actualmente, Paulina es consultora de ONU Mujeres México. Se retiró del sistema de Naciones Unidas a principios de año, habiendo desempeñado los cargos de Oficial de Programas y Coordinadora del Centro Global de Excelencia en Estadísticas de Género.<br>  

Paulina es Licenciada en Sociología por la Universidad Autónoma Metropolitana, Maestra en Demografía por El Colegio de México, y Candidata al grado de doctora (Ph.D) en Sociología, con especialidad en Población, por la Universidad de Texas en Austin. <br>

Cuenta con más de 40 años de carrera profesional impartiendo cátedra en la UNAM, la Ibero y la Universidad Autónoma de Hidalgo. Ha realizado investigación sociodemográfica en El Colegio de México y ha diseñado planes y programas tanto académicos como de políticas públicas. En el sector público tuvo cargos de alta dirección y ha trabajado en organismos autónomos, en organizaciones y asociaciones civiles, y para el Sistema de Naciones Unidas en México. <br>  

Sus intereses académicos han versado alrededor de la demografía electoral, la participación política de las mujeres, las estadísticas de género, la inserción de las mujeres en los mercados laborales, así como la violencia contra las mujeres y niñas y más recientemente trabajó sobre temas como la movilidad humana y género y cuidados. <br> 

Como coordinadora del Centro Global de Excelencia en Estadísticas de Género lideró más de 15 estudios transdisciplinares en los temas de empoderamiento económico y violencia contra las mujeres, estudios geoespaciales, así como movilidad humana y género, documentos que se encuentran publicados en los sitios de ONU Mujeres (global, regional y nacional).  
<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-24 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Celia-Aguilar-Setien.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Celia Aguilar Setién</h3>
														<div class="gdlr-session-item-excerpt">Secretaria de Estudio y Cuenta de la SCJN, en representación de la Ministra Yasmín Esquivel Mossa.
                                                        </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-25>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Actualmente es Directora General de Planeación y Evaluación en el Instituto Nacional de las Mujeres en México; fue Oficial de Programas en la oficina de UNIFEM (hoy ONU Mujeres), para México, Centroamérica, República Dominicana y Cuba, de 2001 a 2009.

Trabajó por 20 años en Centroamérica en donde su trabajo se desarrolló principalmente en el área de Desarrollo Humano en el ámbito Rural con enfoque de género, generacional, enfoque intercultural y de desarrollo territorial.
<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-25 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                
												<li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Dra.-Mila-Paspalanova.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content><h3 class="gdlr-speaker-item-title gdlr-skin-title">Dra. Mila Paspalanova </h3>
														<div class="gdlr-session-item-excerpt">Asesora de No-Discriminación Racial para Europa. Oficina del Alto Comisionado de las Naciones Unidas para los Derechos Humanos. 
                                                        </div>
													
												
                                                       <div class=gdlr-lightbox-form id=gdlr-form-28>
														        <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Mila Paspalanova es doctora en ciencias sociales y políticas por la Universidad Católica de Lovaina y la Universidad Católica de Bruselas. Ha trabajado en ambas universidades como investigadora sobre migración internacional con un enfoque especial sobre la migración indocumentada. Tiene varias publicaciones en revistas internacionales y capítulos en libros sobre medición de los derechos humanos, indicadores de derechos humanos migración internacional, problemas relacionados a la protección internacional y metodología de investigación. Ha participado como poniente en múltiples conferencias sobre los temas así mencionados. Se ha desempeñado como profesora en el Instituto Tecnológico de Estudios Superiores de Monterrey y ha trabajando para el Alto Comisionado de la Naciones Unidas para los Refugiados en México. Actualmente es la coordinadora de la Unidad de Indicadores en la Oficina en México del Alto Comisionado de las Naciones Unidas para los Derechos Humanos.  A través de su trabajo en OHCHR-México ha impulsado la adopción por parte del estado mexicano del marco metodológico en materia de indicadores del ACNUDH.  Desde 2008 hasta la fecha, impulsando la colaboración con múltiples actores (ej: INEGI, CNDH, instancias gubernamentales, academia y sociedad civil) ha garantizado la generación de indicadores sobre el derecho a la salud, educación, libertad de opinión y expresión, vida, seguridad y libertad, juicio justo, no discriminación, violencia contra las mujeres así como la definición y generación de indicadores para la evaluación del impacto de Programas Nacionales y Estatales de Derechos Humanos. Desde 2010 ha sido encargada de la socialización de la experiencia mexicana en medición del nivel de cumplimiento de los derechos humanos y el apoyo de semejantes procesos en Ecuador, Bolivia, Paraguay, Brasil, Chile, Costa Rica, Panamá, Guatemala y la Unión Europea. <br>

																</h3>
                                                            </div>
														 
                                                            
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-28 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>  
                                                    </div>
                                                </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_3_est_jud/red/images/img_ponentes/Martha_Beatriz_Vargas.png" alt width=400 height=400></div>
                                                    <div class=gdlr-speaker-item-content><h3 class="gdlr-speaker-item-title gdlr-skin-title">Mtra. Martha Beatriz Vargas Rojas </h3>
														<div class="gdlr-session-item-excerpt">Directora de Estadística de la Presidencia del Poder Judicial de la Ciudad de México. 
                                                        </div>
                                                      
                                                       <div class=gdlr-lightbox-form id=gdlr-form-29>
														        <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">Actualmente es Directora de Estadística de la Presidencia del Tribunal Superior de Justicia de la CDMX. 

Ha sido Coordinadora de monitoreo y evaluación del Programa para la Convivencia Ciudadana de las ciudades de Tijuana, Monterrey y Ciudad Juárez. De 2007 a 2012, colaboró como Directora de investigaciones criminológicas en la Dirección General de Política y Estadística Criminal de la entonces Procuraduría General de Justicia del D.F., de 2000 a 2006, se desempeñó como Directora de Capacitación en la Oficialía Mayor del hoy Gobierno de la Ciudad de México.

En el sector público y como consultora internacional, ha coordinado y participado en múltiples proyectos estadísticos, sistemas de información y de indicadores de derechos humanos y género, así como en el diseño de estudios, marcos conceptuales, encuestas y metodologías de evaluación y seguimiento para programas de prevención de la violencia y del delito, del sistema de justicia y del sistema penitenciario. 

En el ámbito periodístico ha colaborado como reportera en el Periódico Reforma y Metro, en las secciones de justicia y seguridad pública. 

Es licenciada en Derecho por la UNAM, Maestra en Criminología por la Universidad de Barcelona y cuneta con estudios en Estadística; ha realizado diversos cursos y diplomados nacionales, regionales e internacionales en materia del sistema de justicia, estadística, indicadores y derechos humanos.  

                                                                    <br>

																</h3>
                                                            </div>
														 
                                                            
                                                        </div>
                                                             <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-29 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div> 
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