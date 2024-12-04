<header class="w-full z-50">
  <?php
  function renderMenu($menu)
  {
    $currentUrl = $_SERVER['REQUEST_URI']; // URL actual
    echo '<nav class="items-center py-2 gap-y-2 flex flex-col lg:flex-row justify-between bg-blue-900 text-white px-4 xl:py-5">';
    echo '<div class="order-0"><img src="' . CSS_URL . '/img/logo.svg" alt="Logo" class="w-44 mx-auto"></div>';

    echo '<ul class="grid grid-cols-2 sm:grid-cols-4 md:flex md:flex-row gap-3 text-light font-semibold uppercase">';
    foreach ($menu as $modulo => $detalles) {
      $isActiveModule = $currentUrl === $detalles['url'];

      echo '<li class="">';
      if ($detalles['publicado']) {
        // Si el módulo está publicado, genera un enlace
        echo "<a href='{$detalles['url']}' class='menu-item " . ($isActiveModule ? "bg-blue-700 text-white" : "text-blue-100 items-center transition-all") . "'>{$modulo}</a>";
      } else {
        // Si no está publicado, muestra un texto no clicable
        echo "<span class='text-gray-400 cursor-not-allowed'>{$modulo}</span>";
      }


      echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
  }
  ?>
  <?php
    function renderMenuMoodle() {
        require_once BASE_PATH . '/include/menuMoodle.php';
    }
  ?>
</header>