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
      <div class="grid grid-cols-2 items-center gap-10 my-10">
        <img src="<?php echo ASSET_URL . 'img/modulo-1/bloque2.jpg' ?>" alt="">
        <article class="text-center bg-orangeown p-4">
          <span class="text-3xl text-dark">Modelo Educativo del Colegio</span>
        </article>
      </div>
      <div class="grid grid-cols-2 gap-10">
        <article>
          <h3 class="text-orangeown">Objetivos</h3>
          <div class="bg-bluelightown text-darkown p-5">
            <ul class="list-disc ml-5 flex flex-col gap-3">
              <li>Comprender los postulados del Modelo Educativo y el concepto de Cultura Básica.</li>
              <li>Determinar la importancia de la ética en el ejercicio de la docencia en el CCH e identificar los principales derechos y obligaciones de los profesores dentro de la UNAM y el CCH.</li>
              <li>Reflexionar sobre la propia práctica docente con base en los postulados del Modelo Educativo del CCH.</li>
            </ul>
          </div>
        </article>
        <article>
          <h3 class="text-orangeown mt-2">Temáticas</h3>
          <div class="bg-bluelightown text-darkown p-5">
            <ul class="list-disc ml-5 flex flex-col gap-3">
              <li>Postulados</li>
              <li>Cultura Básica</li>
              <li>Ética y marco normativo de la docencia en la UNAM y el CCH</li>
              <li>Derechos y obligaciones (alumnado y profesorado)</li>
              <li>Autorreconocimiento de la práctica docente</li>
            </ul>
          </div>
        </article>
      </div>
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