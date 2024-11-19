<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        
                        @if($message = Session::get('error'))
                        <div class="alert alert-danger" >
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ $message }}
                        </div>
                        @endif

                        <h3>Registro del 20 de noviembre al 04 de diciembre de 2024<br><br>
                            @foreach($rconatrib as $redes)
                                {{$redes->red}}
                            @endforeach
                        </h3><br>
                        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input style="text-transform: uppercase;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre" maxlength="50">
                                    <input class="form-control" type="text" id="paterno" name="paterno" placeholder="Apellido paterno" style="text-transform: uppercase;" value="{{ old('paterno') }}" required maxlength="50">
                                    <input class="form-control" type="text" id="materno" name="materno" placeholder="Apellido materno" style="text-transform: uppercase;" value="{{ old('materno') }}" required maxlength="50">
                                    <input class="form-control" type="text" id="dependencia" name="dependencia" placeholder="Dependencia" style="text-transform: uppercase;" value="{{ old('dependencia') }}" required maxlength="120">
                                    <select class="custom-select" required id="fk_estado" name="fk_estado" style="text-transform: uppercase;">
                                        <option value="">Selecciona una entidad</option>
                                        @foreach($entidades as $entidad)
                                        <option value="{{$entidad->id}}">{{$entidad->entidad}} </option>
                                        @endforeach
                                    </select> <br> <br>
                                        <input class="form-control" type="text" id="cargo" name="cargo" placeholder="Cargo" style="text-transform: uppercase;" value="{{ old('cargo') }}" required maxlength="120">
                                        <input class="form-control" type="text" id="celular" name="celular" placeholder="NÚMERO CELULAR" value="{{ old('celular') }}" required maxlength="15">
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="CORREO ELECTRÓNICO">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    {{-- <label>Red en la que desea participar</label> <br> --}}
                                    <select class="custom-select" required name="id_red" id="id_red" style="text-transform: uppercase;" hidden>
                                        <option value="">Selecciona una red</option>
                                        @foreach($rconatrib as $redes)
                                            <option selected value="{{$redes->id}}">{{$redes->red}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- Contraseña --}}
                            <label><strong>Nota:</strong> La contraseña deberá contener un minimo de 8 digitos</label>
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
                            {{-- Confirmar contraseña --}}
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRMA CONTRASEÑA">
                                </div>
                            </div>
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
                                <center>
                                    <button id="submit" type="submit" class="ibtn">Registrar</button>
                                </center>
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
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- SweetAlert2 -->
<script src="js/regUsuario.js"></script>
{{-- Mensajes de validación de Registro--}}
@if(session('warning'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Registro no disponible',
            text: "{{ session('warning') }}",
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif
@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: '¡Registro Exitoso!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        });
    </script>
@endif

</body>
</html>
