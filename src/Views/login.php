<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Formulario de Acceso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body class="login-body">
    <div class="login-contenedor">
        <div class="login-central">
            <div class="login" id="login">
                <div class="login-titulo">
                    Bienvenido
                </div>
                <form id="loginForm" method="POST" action="/login-entrada">
                    <input type="text" name="email" id="email" class="login-input" placeholder="Email" required>
                    <input type="password" id="password" placeholder="Password" name="password" class="login-input" required>
                    <button type="submit" title="Ingresar" name="Ingresar" class="login-button">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
