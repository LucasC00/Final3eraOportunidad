<?php
session_start(); // Iniciar la sesión

class ConfiguracionController {
    public function showConfiguracion() {
        include __DIR__ . '/../views/configuracion.php';
    }

    public function configurarContrasenha() {
        require __DIR__ . '/../../config/conexion.php';

        // Verificar si el usuario ha iniciado sesión
        if (!isset($_SESSION['email'])) {
            // Redirigir al usuario al inicio de sesión si no ha iniciado sesión
            header('Location: /login');
            exit;
        }

        // Obtener el email del usuario actualmente autenticado
        $emailUsuarioLogueado = $_SESSION['email'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recoger la nueva contraseña del formulario
            $nuevaPassword = $_POST['nuevaPassword'];
            $email = $_POST['email'];

            // Preparar la consulta para actualizar la contraseña en la base de datos
            $query = "UPDATE usuarios SET password = '$nuevaPassword' WHERE email = '$email'";
        
            // Ejecutar la consulta
            $result = pg_query($conexion, $query);

            if ($result) {
                // Redirigir al usuario a la página de inicio después de actualizar la contraseña
                header('Location: /home');
                exit;
            } else {
                echo "Error al actualizar la contraseña: " . pg_last_error($conexion); // Mostrar el error de PostgreSQL
            }

            // Cerrar la conexión a la base de datos
            pg_close($conexion);
        }
    }
}
?>
