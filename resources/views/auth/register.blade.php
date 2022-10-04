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
            <a href="{{route('login')}}"> 
                <div>
                    <img class="logo-size" src="images/Img_Conatrib.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg" style="background-image: url(images/RedesConatrib.png) !important;"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">

                        @if($message = Session::get('success'))
                        <div class="alert alert-success" >
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ $message }}
                        </div>
                        @endif

                        @if($message = Session::get('error'))
                        <div class="alert alert-danger" >
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ $message }}
                        </div>
                        @endif   
                        
                        <h3>Registrate</h3>
                       <!-- <p>Texto texto.</p> -->
                        <!--<div class="page-links">
                            <a href="login2.html">Acceso</a><a href="register2.html" class="active">Reg&iacute;strate</a>
                        </div>-->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf    
                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input style="text-transform: uppercase;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre" maxlength="50">
                                    <input class="form-control" type="text" name="paterno" placeholder="Apellido paterno" style="text-transform: uppercase;" value="{{ old('paterno') }}" required maxlength="50">
                                    <input class="form-control" type="text" name="materno" placeholder="Apellido materno" style="text-transform: uppercase;" value="{{ old('materno') }}" required maxlength="50">
                                    <input class="form-control" type="text" name="dependencia" placeholder="Dependencia" style="text-transform: uppercase;" value="{{ old('dependencia') }}" required maxlength="120"> 

                                <select class="custom-select" required name="fk_estado" style="text-transform: uppercase;">
                                     <option value="">Selecciona una entidad</option>
                                    @foreach($entidades as $entidad)
                                     <option value="{{$entidad->id}}">{{$entidad->entidad}} </option>
                                    @endforeach
                                </select> <br> <br>

        
                                    <input class="form-control" type="text" name="cargo" placeholder="Cargo" style="text-transform: uppercase;" value="{{ old('cargo') }}" required maxlength="120">
                                    <input class="form-control" type="text" name="celular" placeholder="NÚMERO CELULAR" value="{{ old('celular') }}" required maxlength="15">
                                    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="CORREO ELECTRÓNICO">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    
                                <label>Red en la que desea participar</label> <br>
                                <select class="custom-select" required name="id_red" style="text-transform: uppercase;">
                                     <option value="">Selecciona una red</option>
                                    @foreach($rconatrib as $redes)
                                     <option value="{{$redes->id}}">{{$redes->red}} </option>
                                    @endforeach
                                </select>
                                

                                </div>
                            </div>
                            <label>Nota: La contraseña deberá contener un minimo de 8 digitos</label>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="CONTRASEÑA">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRMA CONTRASEÑA">
                                </div>
                            </div>
                            <!--<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							<input type="hidden" name="red" value="convivencia_familiar">
                            <a onclick="showPWD()" style="color: #FFF; cursor:pointer; ">Ver contrase&ntilde;a</a>-->
                            @php
                                if( isset($_GET['IdRed']) ){
                                    echo '<input id="idRed" name="idRed" type="hidden" value="'.$_GET['IdRed'].'"></input>';
                                }
                            @endphp

                            @error('idRed')
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <strong>No existe el Identificador</strong>
                                    </div>
                                </div>
                            @enderror
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Registrar</button>
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
