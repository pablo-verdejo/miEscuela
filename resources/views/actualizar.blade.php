<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Actualizar Alumno</title>
</head>
<body>
<h1>Actualizar Alumno</h1>
<div> 
    <form  action="{{url('modificar/'.$alumno->id)}}"  method="post">
        <!-- csrf evita ataques -->
    @csrf
    <!-- {{csrf_field()}} -->
    {{method_field('PUT')}}
        <label>Nombre</label>
        <!-- {{-- {{<input type="text" name="__token" value=csrf_token()> }} --}} -->
        <input type="text" name="nombre" value="{{$alumno->nombre}}" required><br>

        <label>Apellido</label>
        <input type="text" name="apellido" value="{{$alumno->apellido}}" required><br>

        <label>Email</label>
        <input type="email" name="email" value="{{$alumno->email}}" required><br>

    <label>Edad</label>
    <input type="number" name="edad" value="{{$alumno->edad}}" required><br>
    <label>password</label>
    <input type="password" name="passwd" value="{{$alumno->passwd}}" required>
    <input type="submit" name="Enviar" value="Enviar">
    </form>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>