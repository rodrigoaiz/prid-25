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

    // Encontrar la página actual y las páginas anterior y siguiente
    $currentIndex = array_search($currentPageId, array_column($paginas, 'id'));
    $prevPage = $currentIndex > 0 ? $paginas[$currentIndex - 1] : null;
    $nextPage = $currentIndex < count($paginas) - 1 ? $paginas[$currentIndex + 1] : null;

    // Generar navegación
    echo "<nav class='w-100 flex items-center justify-center'><ul class='flex flex-row items-center gap-1'>";
    if ($prevPage) {
        echo "<a href='{$prevPage['url']}' class='btn prev'>Atrás</a>";
    }
    foreach ($paginas as $pagina) {
        $activeClass = ($pagina['id'] == $currentPageId) ? 'class="active"' : '';
        $linkText = ($pagina['id'] == 0) ? '<img src="./assets/img/home.svg" alt="Home">' : $pagina['id'];
        echo "<li><a href='{$pagina['url']}' alt='{$pagina['nombre']}' $activeClass data-nombre='{$pagina['nombre']}'>{$linkText}</a></li>";
    }
    if ($nextPage) {
        echo "<a href='{$nextPage['url']}' class='bg-slate-300'><img src='./assets/img/next.svg' /></a>";
    }
    echo "</ul></nav>";

    // Elemento para mostrar el nombre de la página
    echo "<div id='page-name' class='mt-4 text-center'></div>";
}
?>