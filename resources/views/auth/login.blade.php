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
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div>
                    <img class="logo-size" src="images/Img_Conatrib.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg" style="background-image: url(images/RedesConatrib_3.png) !important;"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Ingresa tu correo para acceder a tu red</h3>
                       <!-- <p>Texto texto.</p> -->
                        <br>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input class="form-control" type="text" name="email" id="email" placeholder="Email" required>
                            <div class="form-button">
							    <input class="form-control" type="password" name="password" placeholder="Contrase&ntilde;a" required>
                                <button id="submit" type="submit" class="ibtn">Ingresar</button> 
                                <button id="rpassword" type="button" onclick="location.href='recupera.html';"  class="ibtn">Recuperar Constrase&ntilde;a</button> 
                            </div>
                        </form>
                         <div class="other-links">
                            <span></span><a href="https://conatrib.org.mx/">P&aacute;gina web</a><a href="https://m.facebook.com/CONATRIBoficial/">Facebook</a><a href="https://twitter.com/ConatribMx">Twitter</a><a href="https://www.youtube.com/channel/UCjy09Wgg2LXoqTAtLXLpeQQ">YouTube</a>
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