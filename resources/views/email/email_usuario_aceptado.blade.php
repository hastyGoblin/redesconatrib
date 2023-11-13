<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redes Conatrib</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                         <div class="website-logo">
                            <a href="https://conatrib.org.mx/congreso_redes/">
                                <div>
                                    <img class="logo-size" src="images/Img_Conatrib.png" alt="">
                                </div>
                            </a>
        				</div>
                        <h3>¡Felicidades {!! nl2br($info['name']) !!}!</h3>
                        <p style="text-align: justify">Has completado tu registro a la <strong>{!! nl2br($info['red']) !!}</strong>, en el marco de la XLVI Congreso Nacional CONATRIB 2023.</p>
						<p style="text-align: justify">Con tu registro, podrás ingresar al micrositio del evento, de igual manera accederás a las ponencias y material de apoyo que sea provisto por los organizadores.</p>
                        <p style="text-align: justify">Al finalizar el evento, las instrucciones para recibir tu constancia de participación serán evaluadas y emitidas en el micrositio.</p>
						<p style="text-align: justify">Recuerda que los datos de acceso son los que introdujiste en la plataforma</p>
						<p style="text-align: justify">Cercanos a la fecha de inicio, podrás acceder al micrositio mediante el siguiente link:</p>
                        <div class="form-button">
                            @if ($info['id_red'] == 6 || $info['id_red'] == 4 || $info['id_red'] == 9)
                                <a name="" id="" class="btn btn-primary" href="http://redesconatrib.poderjudicialcdmx.gob.mx/login" role="button">Ingresar</a>
                            @else
                                <a href="http://redesconatribp.poderjudicialcdmx.gob.mx/login">Ingresar</a>
                            @endif
                        </div>
                   </div>
                    <div class="form-sent">
                        <div class="website-logo">
                            
                                <div class="logo">
                                    <img class="logo-size" src="images/Img_Conatrib.png" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>