<?php
include_once '../config.php';

// Cargar el menú desde el JSON
$menuData = json_decode(file_get_contents(BASE_PATH . '/menu.json'), true);
$menu = $menuData['menu'];

include BASE_PATH . '/include/menu.php';
include BASE_PATH . '/include/navegacion.php';

// ID de la página actual (puedes obtenerlo de la URL o de otra fuente)
$currentPageId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prid</title>
  <link href="css/styles.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

  <?php renderMenu($menu); ?>
  <h1>Este es el modulo 1</h1>
  <?php renderNavegacion(1, $currentPageId); ?>
  <script src="js/bundle.js"></script>

</body>
