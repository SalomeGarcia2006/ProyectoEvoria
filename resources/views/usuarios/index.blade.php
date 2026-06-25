<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>

<h1>Lista de Usuarios</h1>

<a href="/usuarios/nuevo">Nuevo Usuario</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Estado</th>
    </tr>

    @foreach($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->id_usuario }}</td>
        <td>{{ $usuario->nombre }}</td>
        <td>{{ $usuario->apellido }}</td>
        <td>{{ $usuario->correo }}</td>
        <td>{{ $usuario->estado }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>