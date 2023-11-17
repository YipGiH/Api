<!DOCTYPE html>
<html>
<head>
    <title>Información del Usuario</title>
</head>
<body>
    <h1>Información del Usuario</h1>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Identificacion:</strong> {{ $usuario->cedula }}</p>
    <p><strong>Telefono:</strong> {{ $usuario->telefono }}</p>
    <p><strong>Direccion:</strong> {{ $usuario->direccion }}</p>

</body>
</html>
