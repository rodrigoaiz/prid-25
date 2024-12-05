<?php
include_once '../config.php';
include BASE_PATH . '/include/header1.php';
include BASE_PATH . '/include/header2.php';

// ID de la página actual (puedes obtenerlo de la URL o de otra fuente)
$currentPageId = isset($_GET['id']) ? (int)$_GET['id'] : 1;

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
      <h1><?php echo htmlspecialchars($titulo); ?></h1>

    </section>
  </main>
  <?php
  // Función para eliminar BOM
  function removeBOM($text)
  {
    if (substr($text, 0, 3) === "\xEF\xBB\xBF") {
      $text = substr($text, 3);
    }
    return $text;
  }

  // Capturar y limpiar la salida de renderNavegacion
  ob_start();
  renderNavegacion(1, $currentPageId);
  $navegacionContent = ob_get_clean();
  echo removeBOM($navegacionContent);
  ?>
  <script src="js/bundle.js"></script>
  <?php
  // Incluir archivos sin BOM
  ob_start();
  require_once BASE_PATH . '/include/footer.php';
  $footerContent = ob_get_clean();
  echo removeBOM($footerContent);

  ob_start();
  require_once BASE_PATH . '/include/footer2.php';
  $footer2Content = ob_get_clean();
  echo removeBOM($footer2Content);
  ?>