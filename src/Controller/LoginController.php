<?php

class LoginController {
    public function showLogin() {
        include __DIR__ . '/../views/login.php';
    }

    public function entradaUsuario() {
        require __DIR__ . '/../../config/conexion.php';
        session_start();
    
        // Recibe los datos del formulario enviado por POST
        $usuario = $_POST['email'] ?? '';
        $clave = $_POST['password'] ?? '';
    
        $query = "SELECT * FROM usuarios WHERE email='$usuario'";
        $consulta = pg_query($conexion, $query);
        $usuarioData = pg_fetch_assoc($consulta);
    
        // Verificar si se encontró un usuario con el correo proporcionado
        if ($usuarioData) {
            // Verificar si la contraseña coincide
            if ($clave === $usuarioData['password']) {
                $_SESSION['email'] = $usuario;
                // Redirige al usuario después del inicio de sesión exitoso
                header('Location: /home');
                exit();
            }
        }
    
        // Redirige con un parámetro de error
        header('Location: /login?error=incorrecto');
        exit();
    }
}
