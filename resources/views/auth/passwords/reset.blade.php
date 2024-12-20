<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redes Conatrib</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-theme2.css')}}">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div>
                    <img class="logo-size" src="{{ asset('images/Img_Conatrib.png')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg" style="background-image: url(../../images/RedesConatrib_3.png) !important;"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Restablecer contrase&ntilde;a</h3>
                       <!-- <p>Texto texto.</p> -->
                        <br>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{  $request->route('token')  }}">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma contraseña">
							
                        <div class="form-button">
							 
                             <button id="submit" type="submit" class="ibtn">Restablecer contrase&ntilde;a</button> 
							
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
