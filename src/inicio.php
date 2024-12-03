<?php
include_once 'config.php';

// Cargar el menú desde el JSON
$menuData = json_decode(file_get_contents(BASE_PATH . '/menu.json'), true);
$menu = $menuData['menu'];

include BASE_PATH . '/include/menu.php';
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
  este es el iniciio
  <script src="js/bundle.js"></script>



</body>

</html>