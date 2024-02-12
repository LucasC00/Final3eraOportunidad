<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Listado de Jugadores</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <h1>Listado de Jugadores</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Club</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jugadores as $jugador): ?>
            <tr>
                <td><?php echo $jugador['id']; ?></td>
                <td><?php echo $jugador['nombre']; ?></td>
                <td><?php echo $jugador['apellido']; ?></td>
                <td><?php echo $jugador['edad']; ?></td>
                <td><?php echo $jugador['club_id']; ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
