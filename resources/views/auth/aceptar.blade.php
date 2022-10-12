<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/R</title>
</head>
<h1>Fromulario de Aceptar/Rechazar</h1>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>name</th>
                <th>apellido_paterno</th>
                <th>apellido_materno</th>
                <th>dependencia</th>
                <th>cargo</th>
                <th>numero_celular</th>
                <th>email</th>
                <th>id_red</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuario as $usuarios)
            <tr>
                <td>{{ $usuarios->name }}</td>
                <td>{{ $usuarios->apellido_paterno }}</td>
                <td>{{ $usuarios->apellido_materno }}</td>
                <td>{{ $usuarios->dependencia }}</td>
                <td>{{ $usuarios->cargo }}</td>
                <td>{{ $usuarios->numero_celular }}</td>
                <td>{{ $usuarios->email }}</td>
                <td>{{ $usuarios->id_red }}</td>

                <td>
                    <a href="{{ url('show') }}">
                        <button>Aceptar</button>
                        <button>Rechazar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> <br>
    <a href="{{ route('register') }}">
        <button>Cerrar sesión</button>
    </a>
</body>
</html>