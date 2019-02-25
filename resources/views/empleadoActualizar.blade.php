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
<div class="container">
    <div class="row">
        <div class="col-md-6">
            {!! Form::model($empleado, ['route' => ['empleado.update', $empleado->id], 'method' => 'PUT']) !!}
            {!! Form::select('selectEmpleado', $departamento, $empleado->departamento->id, ['class' => 'form-control']) !!}
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
</body>
</html>