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
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="https://conatrib.org.mx/congreso_redes/">
               				 <div>
                    			<img class="logo-size" src="images/Img_Conatrib.png" alt="">
             				 </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/img2.jpg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items" style="margin: auto;">
                        <h3>El contenido estar&aacute; disponible a partir del d&iacute;a de la inauguraci&oacute;n de tu Red</h3>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                           <!-- <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>-->
                            <div class="form-button full-width">

                                <button id="submit" type="submit" class="ibtn btn-forget" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Regresar</button>
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
