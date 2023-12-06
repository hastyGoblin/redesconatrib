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
                        <a href=""> <img src="rede_5_masc/red/images/logo_red_5.png" alt=""> </a>
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
                                        <a href="{{ URL::asset('/rede_5_masc/red/images/programa_Red_MASC.pdf') }}" target="_blank"><button class="newsletter-submit gdlr-button with-border">Ver Programa Completo PDF</button></a>
                                   </div>
									
									
                                </div>
                            <div class="session-item-wrapper" style="margin-bottom: 75px;">
                                <div class="gdlr-session-item gdlr-tab-session-item gdlr-item">
                                    <div class="gdlr-session-item-head">
                                        <div class="gdlr-session-item-head-info gdlr-active" data-tab="gdlr-tab-1">
                                            
                                            <div class="gdlr-session-head-date">28 de Noviembre 2023</div>
                                        </div>
                                        
                                        
                                       
                                        <div class="clear"></div>
                                    </div>

                                    <!-- inicia dia 1-->
                                  <div class="gdlr-session-item-tab-content gdlr-tab-1 gdlr-active">
                                        <div class="gdlr-session-item-content-wrapper">
                                            <div class="gdlr-session-item-divider"></div>
                                            
                                            
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
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>Dr. Felipe Alejandro Zegbe Camarena</a></div>
																<div class="gdlr-session-item-excerpt">Secretario Técnico de la Comisión de Justicia del Senado de la Republica </div>
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
                                                <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://us02web.zoom.us/j/89018266597?pwd=REdhYWhoU3h0N0JvR0J2QlpvQVhZdz09" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
                                              </div>
                                            </div>
                                          <div class="clear"></div>
                                        </div>
										
									<div class="gdlr-session-item-content-wrapper">
                                           <div class="gdlr-session-item-divider"></div>
                                             <div class="gdlr-session-item-content-info">
                                                <div class="gdlr-session-info">
                                                    <!--<div class="session-info session-time"><i class="fa fa-clock-o"></i>18:00 – 18:40 hrs.</div>-->
                                                      <div class="session-info session-speaker">
                                                        <div class="session-speaker-inner">
                                                            <div class="session-speaker-list">
                                                                <div class="session-speaker-list-item"><i class="fa fa-user"></i><a>MTRO. SERGIO VALLS </a></div>
																<div class="gdlr-session-item-excerpt">Coordinador Nacional de la Red de Mecanismos Alternativos de Solución de Controversias y Titular del Centro Estatal de Mediación del Estado de México. </div>
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
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                     <div class="gdlr-session-thumbnail-wrapper">
                                                    <a href="https://us02web.zoom.us/j/89018266597?pwd=REdhYWhoU3h0N0JvR0J2QlpvQVhZdz09" target="_blank"><button class="newsletter-submit gdlr-button with-border">Entrar</button></a>
                                                </div>
                                              </div>
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
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/Alejandro _Zegbe.jpg" alt width=200 height=200></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">Dr. Felipe Alejandro Zegbe Camarena</h3>
														<div class="gdlr-session-item-excerpt">Secretario Técnico de la Comisión de Justicia del Senado de la Republica </div>
														
                                                        <div class=gdlr-lightbox-form id=gdlr-form-17>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Licenciado en Derecho por la Universidad Iberoamericana, con titulación por Excelencia Académica y un Master en Derecho de las Telecomunicaciones y Nuevas Tecnologías, por la Universidad Francisco de Vittoria / Anáhuac del Sur. Ha impartido Ponencias en relación al Código Nacional de Procedimientos Civiles y Familiares en la Barra Mexicana, Colegio de Abogados; en el Ilustre y Nacional Colegio de Abogados de México; Grupo Tirant Lo Blanch; Colegio Nacional del Notariado Mexicano, A.C.; Colegio de Notarios del Estado de Jalisco; Universidad Panamericana; Universidad Autónoma del Estado de Morelos; Universidad CUGs; en los Poderes Judiciales y Supremos Tribunales de Jalisco, Morelos, Michoacán, Puebla, Hidalgo, Veracruz, Chihuahua, Zacatecas, Aguascalientes, Chiapas, entre otros. En el ámbito público y privado se ha desempeñado como Secretario Técnico de la Comisión de Justicia del Senado de la República; Coordinador del Grupo Técnico Revisor del Código Nacional de Procedimientos Civiles y Familiares; Coordinador Técnico del Grupo de Trabajo en materia de Mecanismos Alternativos de Solución de Controversias; Asesor Legislativo en la Comisión de Justicia; Director de Vinculación y Seguimiento Legislativo, adscrito a la Oficina del C. Secretario de Hacienda y Crédito Público y a la Procuraduría Fiscal de la Federación; Director General Adjunto de Vinculación Política, Director de Enlace con Diputados y Asesor Jurídico del Secretario de Economía; Secretario Técnico de la Comisión de Fomento Económico del Senado de la República; Asesor Legislativo en Congreso del Estado de Puebla; Abogado y Consultor Jurídico de Dumont, Bergman, Bider & Co y Bufete Corporativo de Abogados, S.C. y Asesor de Vicepresidencia Jurídica de CONCAMINZ<br>

																</h3>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class="gdlr-ticket-button" href=#gdlr-form-17 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-item gdlr-speaker-item">
                                                    <div class=gdlr-speaker-thumbnail><img src="rede_5_masc/red/images/img_ponentes/Sergio_Arturo_Valls.png" alt width=200 height=200></div>
                                                    <div class=gdlr-speaker-item-content>
                                                        <h3 class="gdlr-speaker-item-title gdlr-skin-title">MTRO. SERGIO VALLS</h3>
														<div class="gdlr-session-item-excerpt">Coordinador Nacional de la Red de Mecanismos Alternativos de Solución de Controversias </div>
                                                          <div class=gdlr-lightbox-form id=gdlr-form-18>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                <h3 style="text-align: justify">
                                                                    Formación Académica:<br>
Licenciado en derecho por la universidad intercontinental <br>
Maestro en Derecho por el centro de Estudios de Posgrado <br>
Cuenta con cursos de Especialización en la universidad de Salamanca, Universidad de Alcalá de Henares, Instituto de investigaciones Judiciales de la UNAM, Centro de Estudios Jurídicos para las Américas (CEJA-OEA) y Harvard University. <br>
Autor de multiples artículos de investigación y critica jurídica.<br>
Coautor de la obra “tiempos de Justicia” editado por la Suprema Corte de Justicia de la Nación.<br>
Trayectoria Profesiona:<br>
Se ha desempeñado en la Administración Pública Federal y Estatal <br>
En organismos autónomos ocupo la Secretaria Técnica de la Presidencia de la comisión nacional de los derechos humanos (CNDH)<br>
Comisionado en el Instituto de Transparencia y Acceso a la Información del Estado de México (Infoem).
En el año 2010 tomo protesta como Magistrado del Tribunal Superior de Justicia Restaurativa del Poder Judicial del Estado de México.<br>
El 30 de junio del año 2023, fue designado mediante asamblea de CONATRIB Coordinador de la Red Nacional de Mecanismos Alternativos de Solución de Controversias.

 <br>
																</h3>
                                                            </div>
                                                          </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-18 data-rel=fancybox data-fancybox-type=inline>Ver semblanza</a></div>
                                                    </div>
                                                </li>
                                         <li class="gdlr-item gdlr-speaker-item">
                                                    
                                                    <div class=gdlr-speaker-item-content>
                                                        
												<div class="gdlr-session-item-excerpt"></div>
													<div class=gdlr-lightbox-form id=gdlr-form-19>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                
                                                            </div>
                                                    </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-19 data-rel=fancybox data-fancybox-type=inline></a></div>
                                                    </div>
                                            </li>
                                             <li class="gdlr-item gdlr-speaker-item">
                                                    
                                                    <div class=gdlr-speaker-item-content>
                                                        
														<div class="gdlr-session-item-excerpt"></div>
													
                                                        <div class=gdlr-lightbox-form id=gdlr-form-20>
                                                            <div class=gdlr-paypal-form-wrapper>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-speaker-item-position gdlr-info-font gdlr-skin-info"><a class=gdlr-ticket-button href=#gdlr-form-20 data-rel=fancybox data-fancybox-type=inline></a></div>
                                                    </div>
                                                </li>
												
                                            </ul>
                                        </div>
                                    </div>
                               <div class=clear></div>
                             </div>
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