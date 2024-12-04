<?php
include_once '../config.php';
include BASE_PATH . '/include/header1.php';
include BASE_PATH . '/include/header2.php';

// ID de la página actual (puedes obtenerlo de la URL o de otra fuente)
$currentPageId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Cargar el menú desde el JSON
$menuData = json_decode(file_get_contents(BASE_PATH . '/menu.json'), true);
$menu = $menuData['menu'];

// Inicializar el título por defecto
$titulo = 'Página no encontrada';

// Buscar el título de la página correspondiente al currentPageId
foreach ($menu as $modulo) {
  if (isset($modulo['paginas'])) {
    foreach ($modulo['paginas'] as $pagina) {
      if ($pagina['id'] === $currentPageId) {
        $titulo = $pagina['nombre'];
        break 2;
      }
    }
  }
}


include BASE_PATH . '/include/menu.php';
include BASE_PATH . '/include/navegacion.php';
?>
<title><?php echo htmlspecialchars($titulo); ?></title>
</head>

<body>

  <?php renderMenu($menu); ?>
  <?php renderMenuMoodle(); ?>
  <main>
    <section class="max-w-screen-lg">
      <h1>Este es el modulo 1</h1>

    </section>
  </main>
  <?php renderNavegacion(1, $currentPageId); ?>
  <script src="js/bundle.js"></script>

</body>

<?php
require_once BASE_PATH . '/include/footer.php';
?>

<?php
require_once BASE_PATH . '/include/footer2.php';
?>