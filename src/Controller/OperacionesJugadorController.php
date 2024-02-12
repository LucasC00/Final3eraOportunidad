<?php

class OperacionesJugadorController {
    public function showDeleteInsert() {
        include __DIR__ . '/../views/operacionesjugador.php';
    }

    public function mostrarJugadores() {
        require __DIR__ . '/../../config/conexion.php';

        // Consulta para recuperar 15 jugadores de la tabla jugadores
        $query = "SELECT * FROM jugadores LIMIT 15";
        
        // Ejecutar la consulta
        $result = pg_query($conexion, $query);

        if (!$result) {
            echo "Error al obtener los jugadores: " . pg_last_error($conexion);
            exit;
        }

        // Guardar los datos de los jugadores en un array
        $jugadores = [];
        while ($row = pg_fetch_assoc($result)) {
            $jugadores[] = $row;
        }

        // Liberar la memoria ocupada por el resultado de la consulta
        pg_free_result($result);

        // Cerrar la conexión a la base de datos
        pg_close($conexion);

        // Pasar los datos de los jugadores a la vista
        include __DIR__ . '/../views/jugadores.php';
    }

    public function eliminarJugador() {
        require __DIR__ . '/../../config/conexion.php';

        // Obtener el ID del jugador a eliminar del formulario enviado
        $idJugador = $_POST['id_jugador'];

        // Consulta para eliminar al jugador de la tabla jugadores
        $query = "DELETE FROM jugadores WHERE id = $idJugador";

        // Ejecutar la consulta
        $result = pg_query($conexion, $query);

        if (!$result) {
            echo "Error al eliminar el jugador: " . pg_last_error($conexion);
            exit;
        }

        // Cerrar la conexión a la base de datos
        pg_close($conexion);

        // Redirigir a la página de operaciones con jugadores después de eliminar
        header('Location: /home');
        exit;
    }

    public function agregarJugador() {
        require __DIR__ . '/../../config/conexion.php';

        // Recuperar los datos del formulario enviado
        $clubId = $_POST['club_id'];
        $posicionId = $_POST['posicion_id'];
        $nacionalidadId = $_POST['nacionalidad_id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $nroCamiseta = $_POST['nro_camiseta'];

        // Consulta para insertar un nuevo jugador en la tabla jugadores
        $query = "INSERT INTO jugadores (club_id, posicion_id, nacionalidad_id, nombre, apellido, edad, nro_camiseta) 
                  VALUES ($clubId, $posicionId, $nacionalidadId, '$nombre', '$apellido', $edad, $nroCamiseta)";

        // Ejecutar la consulta
        $result = pg_query($conexion, $query);

        if (!$result) {
            echo "Error al agregar el jugador: " . pg_last_error($conexion);
            exit;
        }

        // Cerrar la conexión a la base de datos
        pg_close($conexion);

        // Redirigir a la página de operaciones con jugadores después de agregar
        header('Location: /home');
        exit;
    }
}