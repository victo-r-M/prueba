

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión - Inventez</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="login-container">
      <div class="login-box">
        <h2>Inventez</h2>
        <p>Gestión de Inventario</p>
        <form id="loginForm" action="php/logins/login.php" method="POST">
          <input
            type="email"
            name="correo"
            placeholder="Correo electrónico"
            required
          />
          <input
            type="password"
            name="contraseña"
            placeholder="Contraseña"
            required
          />
          <button type="submit">Iniciar Sesión</button>
      <?php
        if (isset($_GET['error'])) {
            echo '<p style="color:red;">' . htmlspecialchars($_GET['error']) . '</p>';
        }
        ?>     
           </form>

        <p class="registro-link" id="crearCuentaLink">
          ¿No tienes cuenta? <a href="crear_cuenta.php">Crear una cuenta</a>
        </p>
      </div>
    </div>

    <script src="script/logins/login.js"></script>
  </body>
</html>
