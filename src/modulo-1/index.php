<?php
include_once '../config.php';
include BASE_PATH . '/include/header1.php';
include BASE_PATH . '/include/header2.php';

// Cargar el menú desde el JSON
$menuData = json_decode(file_get_contents(BASE_PATH . '/menu.json'), true);
$menu = $menuData['menu'];

include BASE_PATH . '/include/menu.php';
include BASE_PATH . '/include/navegacion.php';

// ID de la página actual (puedes obtenerlo de la URL o de otra fuente)
$currentPageId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<title>Inicio chido</title>
</head>

<body class="bg-gray-100">

  <?php renderMenu($menu); ?>
  <?php renderMenuMoodle(); ?>
  <h1>Este es el modulo 1</h1>
  <?php renderNavegacion(1, $currentPageId); ?>
  <script src="js/bundle.js"></script>

</body>

<?php
require_once BASE_PATH . '/include/footer.php';
?>

<?php
require_once BASE_PATH . '/include/footer2.php';
?>