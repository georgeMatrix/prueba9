<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>
<body>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Departamento</th>
            <th>Actualizar</th>
        </tr>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellido}}</td>
            <td>{{$empleado->departamento->nombreDepartamento}}</td>
            <td><a href="{{route('empleado.edit', $empleado->id)}}">Editar</a></td>
        </tr>

    @endforeach
    </table>
</body>
</html>