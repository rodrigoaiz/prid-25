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
      <h1>Módulo uno</h1>
      <h2>Modelo Educativo del Colegio</h2>
      <div class="grid grid-cols-2 items-center gap-5">
        <img src="<?php echo ASSET_URL . 'img/modulo-1/bloque2.jpg' ?>" alt="">
        <div class="bg-bluelightown">
          <ul class="list-disc">
            <li>Comprender los postulados del Modelo Educativo y el concepto de Cultura Básica.</li>
            <li>Determinar la importancia de la ética en el ejercicio de la docencia en el CCH en el CCH e identificar los principales derechos y obligaciones de los profesores dentro de la UNAM y el CCH.</li>
            <li>Reflexionar sobre la propia práctica docente con base en los postulados del Modelo Educativo del CCH.</li>
          </ul>
        </div>
      </div>

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