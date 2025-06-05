<?php
include '../php/logins/sesion.php';  
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Invenez</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/ventana_modal.css" />
    <link rel="stylesheet" href="../css/lista_producto.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="../img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="../css/responsive.css" />

    <script src="https://unpkg.com/lucide@latest" defer></script>
  </head>
  <body>
    <!-- Botón para menú en móvil -->
    <button class="menu-toggle" onclick="toggleMenu()">☰</button>

    <!-- Menú lateral -->
    <div class="sidebar" id="sidebar">
      <div class="logo-container">
        <img src="../img/logo.png" alt="Logo" class="logo-img" />
        <span class="logo-text">Invenez</span>
      </div>
      <a href="../main.php"><i data-lucide="home" class="icon"></i> Inicio</a>

      <a href="#" class="has-submenu" onclick="toggleSubmenu(this)">
        <i data-lucide="package" class="icon"></i> Productos
      </a>
      <div class="submenu">
        <a href="lista_producto.php">Lista</a>
        <a href="producto_nuevo.php">Nuevo</a>
      </div>

      <a href="#" class="has-submenu" onclick="toggleSubmenu(this)">
        <i data-lucide="shopping-cart" class="icon"></i> Ventas
      </a>
      <div class="submenu">
        <a href="#">Historial</a>
        <a href="nueva_venta.php">Nueva venta</a>
      </div>

        <?php if ($rol == 1): ?>
    <a href="../crear_cuenta.php"><i data-lucide="user-plus" class="icon"></i> Crear cuenta</a>
       <?php endif; ?>

  <a href="../php/logins/logout.php"><i data-lucide="log-out" class="icon"></i> Cerrar sesión</a>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
      <h1 class="titulo">Lista de Productos</h1>
      <p>
          Sesión iniciada como:
          <strong><?php echo htmlspecialchars($nombreUsuario); ?></strong>
        </p>

      <div class="busqueda-container">
        <input type="text" id="buscador" placeholder="Buscar producto..." />
        <select id="ordenar" onchange="cargarProductos()">
          <option value="nombre">Ordenar por Nombre</option>
          <option value="stock_desc">Stock (Mayor a menor)</option>
          <option value="stock_asc">Stock (Menor a mayor)</option>
          <option value="fecha">Fecha de Creación</option>
        </select>
      </div>

      <div class="tabla-container">
        <table id="tabla-productos">
          <thead>
            <tr>
              <th></th>
              <th>Producto</th>
              <th>Descripción</th>
              <th>Stock</th>
              <th>Precio Venta</th>
            </tr>
          </thead>
          <tbody>
            <!-- Los productos se insertarán aquí con JS -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Modal -->
    <div id="modal-producto" class="modal oculto">
      <div class="modal-contenido">
        <h2 class="modal-titulo">Detalle del producto</h2>

        <div class="modal-header">
          <button id="btn-editar">
            <i data-lucide="edit" class="icon-btn"></i> Editar
          </button>
          <button id="btn-eliminar">
            <i data-lucide="trash-2" class="icon-btn"></i> Eliminar
          </button>
          <button id="cerrar-modal" class="cerrar" title="Cerrar">
            <i data-lucide="x" class="icon-btn"></i>
          </button>
        </div>
        <div class="modal-body">
          <img
            id="modal-imagen"
            src=""
            alt="Imagen del producto"
            class="modal-img"
          />
          <div class="modal-info">
            <p><strong>Nombre:</strong> <span id="modal-nombre"></span></p>
            <p>
              <strong>Descripción:</strong> <span id="modal-descripcion"></span>
            </p>
            <p><strong>Stock:</strong> <span id="modal-stock"></span></p>
            <p>
              <strong>Stock mínimo:</strong>
              <span id="modal-stockMinimo"></span>
            </p>
            <p>
              <strong>Precio Compra:</strong> $<span
                id="modal-precioCompra"
              ></span>
            </p>
            <p>
              <strong>Precio Venta:</strong> $<span
                id="modal-precioVenta"
              ></span>
            </p>
            <p>
              <strong>Fecha Registro:</strong> <span id="modal-fecha"></span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <script src="../script/index.js"></script>
    <script src="../script/listar_productos.js"></script>

    <script>
      window.addEventListener("DOMContentLoaded", () => lucide.createIcons());
    </script>
  </body>
</html>
