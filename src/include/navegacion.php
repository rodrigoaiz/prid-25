<?php
include_once dirname(__DIR__) . '/config.php';

function renderNavegacion($moduloId, $currentPageId)
{
    // Ajustar la ruta al archivo menu.json
    $menuPath = dirname(__DIR__) . '/menu.json';
    $menuData = json_decode(file_get_contents($menuPath), true);

    // Obtener las páginas del módulo especificado
    $moduloKey = "Módulo $moduloId";
    if (isset($menuData['menu'][$moduloKey]['paginas'])) {
        $paginas = $menuData['menu'][$moduloKey]['paginas'];
    } else {
        $paginas = [];
    }

    // Encontrar la página actual y las páginas anterior y siguiente
    $currentIndex = array_search($currentPageId, array_column($paginas, 'id'));
    $prevPage = $currentIndex > 0 ? $paginas[$currentIndex - 1] : null;
    $nextPage = $currentIndex < count($paginas) - 1 ? $paginas[$currentIndex + 1] : null;

    // Generar navegación
    echo "<nav class='mt-10 w-100 flex items-center justify-center bg-greenown relative'><ul class='flex flex-row items-center justify-center gap-x-2'>";
    if ($prevPage) {
        echo "<a href='" . BASE_URL . "{$prevPage['url']}'><img src='" . BASE_URL . "/assets/icons/chevron-compact-left.svg' /></a>";
    }
    foreach ($paginas as $pagina) {
        $activeClass = ($pagina['id'] == $currentPageId) ? 'class="active"' : '';
        $linkText = ($pagina['id'] == 0) ? '<li class="flex items-center"><img src="' . BASE_URL . '/assets/icons/house.svg" alt="Home"></li>' : $pagina['id'];
        echo "<li class='flex items-center'><a href='" . BASE_URL . "{$pagina['url']}' alt='{$pagina['nombre']}' $activeClass data-nombre='{$pagina['nombre']}'>{$linkText}</a></li>";
    }
    echo "</ul></nav>";
}
