<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="contenedor">

        <!-- Imagen de fondo -->
        <img src="{{ asset('images/image.png') }}" alt="Crear cuenta">

        <!-- Formulario -->
        <div class="formulario">

            <form action="/usuarios" method="POST">

                @csrf

                <h1>Crear Usuario</h1>
                <hr> <p> ¿Ya tienes una cuenta? <a href="/login">Inicia sesión</a></p>
                

                <input type="text" name="nombre" placeholder="Nombre">

                <input type="text" name="apellido" placeholder="Apellido">

                <input type="email" name="correo" placeholder="Correo">

                <input type="password" name="password" placeholder="Contraseña">

                <input type="text" name="telefono" placeholder="Teléfono">

                <input type="number" name="id_rol" placeholder="ID Rol">

                <button type="submit">
                    Guardar
                </button>

            </form>

        </div>

    </div>

</body>
</html>