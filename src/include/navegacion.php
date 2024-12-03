<?php
function renderNavegacion($moduloId, $currentPageId) {
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

    // Generar navegación
    echo "<nav><ul>";
    foreach ($paginas as $pagina) {
        $activeClass = ($pagina['id'] == $currentPageId) ? 'class="active"' : '';
        echo "<li><a href='{$pagina['url']}' alt='{$pagina['nombre']}' $activeClass>{$pagina['id']}</a></li>";
    }
    echo "</ul></nav>";

    // Encontrar la página actual y las páginas anterior y siguiente
    $currentIndex = array_search($currentPageId, array_column($paginas, 'id'));
    $prevPage = $currentIndex > 0 ? $paginas[$currentIndex - 1] : null;
    $nextPage = $currentIndex < count($paginas) - 1 ? $paginas[$currentIndex + 1] : null;

    // Generar botones de navegación
    echo "<div class='navigation-buttons'>";
    if ($prevPage) {
        echo "<a href='{$prevPage['url']}' class='btn prev'>Atrás</a>";
    }
    if ($nextPage) {
        echo "<a href='{$nextPage['url']}' class='btn next'>Siguiente</a>";
    }
    echo "</div>";
}
?>