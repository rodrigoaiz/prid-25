<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 12;
ob_start();
?>
<section>
  <p>De manera adicional a las Áreas, existen tres Departamentos Académicos en el Colegio en los que se ofrecen opciones de formación extracurricular para el estudiantado: </p>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>