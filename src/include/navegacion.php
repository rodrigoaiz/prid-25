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
    echo "<nav id='nav' class='py-1 w-100 flex relative top-[-1px] z-50 items-center justify-center bg-orangeown'><ul class='flex flex-row items-center justify-center gap-x-1'>";
    if ($prevPage) {
        $prevUrl = ($prevPage['id'] == 0) ? BASE_URL . "/modulo-{$moduloId}/index.php" : BASE_URL . "{$prevPage['url']}";
        echo "<a href='" . $prevUrl . "'><img src='" . BASE_URL . "/assets/icons/chevron-compact-left.svg' /></a>";
    }
    foreach ($paginas as $pagina) {
        if ($pagina['id'] == 0 && $currentPageId == 0) {
            continue; // Omitir el icono de "Home" si estamos en el índice 0
        }
        $activeClass = ($pagina['id'] == $currentPageId) ? 'class="active"' : '';
        $linkText = ($pagina['id'] == 0) ? '<img src="' . ASSET_URL . '/icons/house.svg" alt="Home" />' : $pagina['id'];
        $linkUrl = ($pagina['id'] == 0) ? BASE_URL . "/modulo-{$moduloId}/index.php" : BASE_URL . "{$pagina['url']}";
        echo "<li class='flex items-center'><a href='" . $linkUrl . "' alt='{$pagina['nombre']}' $activeClass data-nombre='{$pagina['nombre']}'>{$linkText}</a></li>";
    }
    if ($nextPage) {
        echo "<a href='" . BASE_URL . "{$nextPage['url']}'><img src='" . BASE_URL . "/assets/icons/chevron-compact-right.svg' /></a>";
    }
    echo "</ul><div id='page-name' class='absolute -translate-y-6 top-0 text-sm pointer-events-none text-darkown'></div></nav>";
}