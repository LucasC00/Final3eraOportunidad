<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <title>My page title</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300%7CSonsie+One" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>

    <nav>
        <ul>
            <li><a href="/login">Logout</a></li>
        </ul>

    </nav>

    <main>
        <article>
            <h2 class="h2-configurar">Configuración de Usuario</h2>
            <form id="configuracionForm" method="POST" action="/configuracion-realizar" class="form-configurar">
                <div class="section-configurar">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" class="input-configurar" required>

                    <label for="nuevaPassword">Nueva Contraseña:</label>
                    <input type="password" id="nuevaPassword" name="nuevaPassword" class="input-configurar" required>
                </div>
                <div class="submit-container">
                    <button type="submit" class="button-configurar">Guardar</button>
                </div>
            </form>
        </article>
    </main>


</body>

</html>