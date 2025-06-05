<?php
include 'php/logins/sesion.php';  
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Invenez</title>
    <link rel="stylesheet" href="css/index.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <script src="https://unpkg.com/lucide@latest" defer></script>
  </head>
  <body>
    <!-- Botón para menú en móvil -->
    <button class="menu-toggle" onclick="toggleMenu()">☰</button>

    <!-- Menú lateral -->
    <div class="sidebar" id="sidebar">
      <div class="logo-container">
        <img src="img/logo.png" alt="Logo" class="logo-img" />
        <span class="logo-text">Invenez</span>
      </div>
      <a href="main.php"><i data-lucide="home" class="icon"></i> Inicio</a>

      <a href="#" class="has-submenu" onclick="toggleSubmenu(this)">
        <i data-lucide="package" class="icon"></i> Productos
      </a>
      <div class="submenu">
        <a href="html/lista_producto.php">Lista</a>
        <a href="html/producto_nuevo.php">Nuevo</a>
      </div>

      <a href="#" class="has-submenu" onclick="toggleSubmenu(this)">
        <i data-lucide="shopping-cart" class="icon"></i> Ventas
      </a>
      <div class="submenu">
        <a href="#">Historial</a>
        <a href="html/nueva_venta.php">Nueva venta</a>
      </div>

      <?php if ($rol == 1): ?>
      <a href="crear_cuenta.php"><i data-lucide="user-plus" class="icon"></i> Crear cuenta</a>
      <?php endif; ?>

      <a href="php/logins/logout.php"><i data-lucide="log-out" class="icon"></i> Cerrar sesión</a>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
      <div class="header-box">
        <h1>Bienvenido a Invenez</h1>
        <p>
          Sesión iniciada como:
          <strong><?php echo htmlspecialchars($nombreUsuario); ?></strong>
        </p>
      </div>

      <!-- Panel de tarjetas resumen -->
      <div class="dashboard">
        <div class="card">
          <h3>Total de productos</h3>
          <p>150</p>
        </div>
        <div class="card">
          <h3>Ventas del mes</h3>
          <p>$12,500</p>
        </div>
        <div class="card">
          <h3>Productos bajos en stock</h3>
          <p style="color: #e74c3c">5</p>
        </div>
      </div>

      <!-- Últimas actividades -->
      <h2>Últimas actividades</h2>
      <ul class="activity-list">
        <li>✔️ Se registró una venta el 24/05/2025</li>
        <li>🛒 Se agregaron 10 unidades de 'Mouse Logitech'</li>
        <li>⚠️ El producto 'Tóner HP' está bajo en stock</li>
      </ul>

      <!-- Alerta importante -->
      <div class="alert">
        <strong>¡Atención!</strong> Hay productos que están por agotarse. Revisa
        el inventario.
      </div>
    </div>

    <script src="script/index.js"></script>
    <script>
      window.addEventListener("DOMContentLoaded", () => lucide.createIcons());
    </script>
  </body>
</html>
