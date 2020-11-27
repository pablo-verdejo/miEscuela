<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Mostrar alumnos</title>
</head>
<body>
    <form method="get" action="{{url('/crear')}}">
    <button type="submit">Crear</button>
    </form>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Passwd</th>
            <th>Actualizar</th>
            <th>Borrar</th>
        </tr>
        <tbody>
    @foreach ($listaAlumnos as $alumnos)
        <tr>
            <td>{{$alumnos->id}}</td>
            <td>{{$alumnos->nombre}}</td>
            <td>{{$alumnos->apellido}}</td>
            <td>{{$alumnos->edad}}</td>
            <td>{{$alumnos->email}}</td>
            <td>{{$alumnos->passwd}}</td>

            <td>
            <form method="get" action="{{url('/actualizar/'.$alumnos->id)}}">
            <button type='submit' onclick="return confirm('¿quieres ir a actualizar?');">Actualizar</button>
            </td>
            <td>
            <form method="post" action="{{url('/borrar/'.$alumnos->id)}}">
            <button type='submit' onclick="return confirm('¿Borrar?');" class="btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </thead>
</table>
    
<!-- para obtener todos los nombres -->
        
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>