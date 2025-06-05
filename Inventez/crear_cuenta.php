
<?php
session_start();
if (!isset($_SESSION['IdUsuario']) || $_SESSION['IdRol'] != 1) {
    // Redirige a login si no está logueado o no es dueño
    header("Location: index.php?error=Acceso no autorizado");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crear Cuenta - Inventez</title>
  <link rel="stylesheet" href="css/login.css" />
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <h2>Crear Cuenta</h2>
      <form id="registroForm">
        <input type="text" name="nombre" placeholder="Nombre completo" required />
        <input type="email" name="correo" placeholder="Correo electrónico" required />
        <input type="password" name="contrasena" placeholder="Contraseña" required />
        
        <button type="submit">Registrar</button>
        <div class="error" id="errorMsg"></div>
      </form>
      <p class="registro-link">
        ¿Ya tienes cuenta? <a href="index.php">Inicia sesión</a>
      </p>
    </div>
  </div>
<script src="script/logins/registro.js"></script>

</body>
</html>
