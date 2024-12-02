<?php
// Cargar el menú desde el JSON
$menuData = json_decode(file_get_contents('menu.json'), true);
$menu = $menuData['menu'];

include './menu.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú Dinámico</title>
  <link href="css/styles.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <nav class="p-4 bg-red-900 text-white relative">
    <?php renderMenu($menu); ?>
  </nav>
  <script src="js/bundle.js"></script>

</body>

</html>