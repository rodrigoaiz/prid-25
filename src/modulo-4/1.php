<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 23;
ob_start();
?>
<section>
  <p class="py-5">El plan de clase es el diseño de instrucciones didácticas que realiza el profesorado a partir de los propósitos del programa de estudios y de los aprendizajes esperados en los aprendices a través de las actividades de ambos, lo cual permite orientar el proceso educativo con una secuencia lógica y desde una vertiente pedagógica para el logro de conocimientos, habilidades y actitudes. Es esencial considerar los propósitos, contenidos, tiempo, materiales, recursos; así como criterios e instrumentos de evaluación.</p>
  <p>Después de haber elaborado una secuencia didáctica de la materia o asignatura inscrita al PRID, ahora es el momento de diseñar por escrito una clase con duración de dos horas. Posteriormente se expondrá a los pares en formato de video.</p>
  <img src="<?php echo ASSET_URL . 'img/modulo-4/b4p1e1.webp' ?>" alt="Alumnos CCH" class="max-w-2xl mx-auto h-auto mt-[5rem]">
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
