<?php
function renderMenu($menu)
{
  $currentUrl = $_SERVER['REQUEST_URI']; // URL actual
  echo '<img src="logo.svg" alt="Logo" class="w-24 h-24 mx-auto mb-4">';
  echo '<ul class="menu flex flex-row">';
  foreach ($menu as $modulo => $detalles) {
    $isActiveModule = $currentUrl === $detalles['url'];

    echo '<li class="relative group">';
    if ($detalles['publicado']) {
      // Si el módulo está publicado, genera un enlace
      echo "<a href='{$detalles['url']}' class='block px-4 py-2 rounded-md " . ($isActiveModule ? "bg-blue-700 text-white" : "text-blue-100 hover:bg-blue-600") . "'>{$modulo}</a>";
    } else {
      // Si no está publicado, muestra un texto no clicable
      echo "<span class='block px-4 py-2 rounded-md text-gray-400 cursor-not-allowed'>{$modulo}</span>";
    }

    if (isset($detalles['paginas']) && is_array($detalles['paginas'])) {
      echo '<ul class="submenu hidden group-hover:block xl:absolute bg-white shadow-lg">';
      foreach ($detalles['paginas'] as $pagina) {
        $isActivePage = $currentUrl === $pagina['url'];
        if ($detalles['publicado']) {
          // Si está publicado, genera un enlace
          echo "<li class='relative'><a href='{$pagina['url']}' class='block px-3 py-1 rounded-md " . ($isActivePage ? "bg-blue-800 text-white" : "text-blue-200 hover:bg-blue-700") . "'>{$pagina['nombre']}</a></li>";
        } else {
          // Si no está publicado, muestra un texto no clicable
          echo "<li class='relative'><span class='block px-3 py-1 rounded-md text-gray-400 cursor-not-allowed'>{$pagina['nombre']}</span></li>";
        }
      }
      echo '</ul>';
    }

    echo '</li>';
  }
  echo '</ul>';
}
