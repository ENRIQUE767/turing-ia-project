<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('CSS/styles.css') }}">
        <link rel="icon" href="{{ asset('img/icono.ico') }}" type="image/x-icon">
        <title>Estados Editar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1 class="my-4">Editar Entidad</h1>

        {!! Form::open(['method' => 'PATCH', 'url' => '/estados/'.$estado->id, 'class' => 'form']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre del estado') !!}
                {!! Form::text('nombre', $estado->nombre, ['class' => 'form-control', 'placeholder' => 'Ingresa nombre del estado']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', 'Estatus:') !!}
                {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], $estado->status, ['class' => 'form-control', 'placeholder' => 'Seleccionar ...']) !!}
            </div>
            {!! Form::submit('Editar Estado', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>


</body>
</html>
