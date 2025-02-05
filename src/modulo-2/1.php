<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 9;
ob_start();
?>
<section>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-10 my-5 items-center">
    <article>
      Para que el proyecto curricular de cualquier sistema o institución educativa se materialice, es preciso que sea plasmado en distintos niveles, que van de lo macro a lo micro, y son conocidos como niveles de concreción curricular. En el caso del Colegio, el primer nivel de concreción está constituido por el Modelo Educativo, el cual fue descrito en el primer módulo. En el segundo nivel de concreción se ubican el Plan y los Programas de Estudio; y en el tercero, la planeación de clase que el profesorado realiza para llevar a cabo con el estudiantado (programación de aula).
    </article>
    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/6rm0h3t8ad0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <p>El Plan de Estudios establece la organización y secuenciación de las materias obligatorias y optativas que el estudiantado debe cursar para acreditar el bachillerato.</p>
  <p>Por su parte, los Programas de Estudio especifican los propósitos, los aprendizajes, los contenidos temáticos y la metodología de trabajo a seguir en cada materia, por lo que constituyen una guía imprescindible para la planeación, desarrollo y evaluación de los cursos.</p>
  <div class="max-w-screen-md mx-auto my-5">
    <img src="<?php echo ASSET_URL; ?>img/modulo-2/b2p1e01.webp" alt="Imagen de un salón de clases con estudiantes y profesor" />
  </div>
  <p>Debido a su importancia, en este módulo se revisarán los documentos institucionales en los que se describe el Plan de Estudios vigente del Colegio de Ciencias y Humanidades, las cuatro Áreas de Conocimiento en las que se organizan las materias que lo integran, y los Programas de Estudio.</p>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
