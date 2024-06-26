<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/styles.css') }}">
    <link rel="icon" href="{{ asset('img/icono.ico') }}" type="image/x-icon">
    <title>Estados...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1 class="my-4">Listado de estados</h1>
        <!--<a href="paises/create" class="btn btn-success mb-3">Crear un nuevo estado</a>-->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estados as $estado)
                <tr>
                    <td>{!! $estado->id !!}</td>
                    <td>{!! $estado->nombre !!}</td>
                    <td>{!! $estado->status !!}</td>
                    <td>
                        <a href="{!! 'estados/'.$estado->id.'/edit' !!}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{!! 'estados/'.$estado->id !!}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{!! asset('/') !!}" class="btn btn-info mt-3">REGRESAR</a>
    </div>
    <br><br>
</body>
</html>
