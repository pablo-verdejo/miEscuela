<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Crear Alumno</title>
</head>
<body>
<h1>Crear Alumno</h1>
<div> 
    <form  action="{{url('recibir')}}"  method="post">
        <!-- csrf evita ataques -->
    @csrf
    <!-- {{csrf_field()}} -->
        <label>Nombre</label>
        <!-- {{-- {{<input type="text" name="__token" value=csrf_token()> }} --}} -->
        <input type="text" name="nombre" required><br>

        <label>Apellido</label>
        <input type="text" name="apellido" required><br>

        <label>Email</label>
        <input type="email" name="email" required><br>

    <label>Edad</label>
    <input type="number" name="edad" required><br>
    <label>password</label>
    <input type="password" name="passwd" required>
    <input type="submit" name="Enviar" value="Enviar">
    </form>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>