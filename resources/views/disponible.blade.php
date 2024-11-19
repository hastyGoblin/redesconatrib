<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redes Conatrib</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/iofrm-style.css">
    <link rel="stylesheet" href="css/iofrm-theme2.css">
    <style>
        /* Mejora del botón */
        .btn-highlight {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .btn-highlight:hover {
            background-color: #0056b3;
            color: #f8f9fa;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="https://conatrib.org.mx/congreso_redes/">
                <div>
                    <img class="logo-size" src="images/Img_Conatrib.png" alt="Logo Conatrib">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/img2.jpg" alt="Información visual de Redes Conatrib">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items text-center">
                        <h3>El contenido estará disponible los días 9, 10 y 11 de diciembre en punto de las 9:00 AM de la Ciudad de México</h3>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <div class="form-button full-width mt-4">
                            <button id="submit" type="submit" class="btn-highlight" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Regresar
                            </button>
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
