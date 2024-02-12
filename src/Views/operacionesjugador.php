<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Eliminar Jugador</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>

    <h1>Eliminar Jugador</h1>
    <form method="POST" action="/borrar-jugador" class="form-jugador">
        <label for="id_jugador">ID del Jugador:</label>
        <input type="text" id="id_jugador" name="id_jugador" required>
        <button type="submit" name="delete">Eliminar</button>
    </form>

    <h2>Agregar Jugador</h2>
    <form action="/crear-jugador" method="POST">
        <label for="club_id">ID del Club:</label>
        <input type="number" name="club_id" required>
        <label for="posicion_id">ID de la Posición:</label>
        <input type="number" name="posicion_id" required>
        <label for="nacionalidad_id">ID de la Nacionalidad:</label>
        <input type="number" name="nacionalidad_id" required>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" required>
        <label for="nro_camiseta">Número de Camiseta:</label>
        <input type="number" name="nro_camiseta">
        <button type="submit" name="create">Agregar Jugador</button>
    </form>

</body>

</html>
