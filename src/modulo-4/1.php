<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 23;
ob_start();
?>
<section>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-10 my-5 items-center">
    <article>
      El propósito de la Planeación didáctica es el análisis y organización de los contenidos educativos, determinación de las intenciones, aprendizajes y propósitos a lograr; además de presentar la secuencia de actividades a desarrollar en el tiempo y espacio (Ascencio, 2016), con el objetivo de establecer la metodología más adecuada para el logro de los aprendizajes, así como el sistema de evaluación que verdaderamente refleje el desempeño y aprendizajes logrados por el alumnado, a lo largo de la asignatura.
    </article>
    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/oL3yNyf0TiU?si=0guTdhCITwCVbfGE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <p class="py-5">Esta información permite un plan de acción integral que provee claridad a los fundamentos educativos que orientarán el proceso de enseñanza-aprendizaje. La manera en la que se estructuren las secuencias didácticas, se distribuya el tiempo en el aula, se asignen las actividades de aprendizaje al estudiantado, los recursos educativos, los mecanismos de evaluación y las propias expectativas de los integrantes de la clase, son algunas de las perspectivas que hoy en día se consideran como parte de una enseñanza eficaz (Murillo, Martínez y Hernández, 2011). A esto se suma el andamiaje necesario para que el alumnado construya los aprendizajes conceptuales, procedimentales y actitudinales; con ello podrá aplicarlos en diversas situaciones (Ascencio, 2016), sin dejar de lado la diversidad de aspectos como la cultura y las condiciones socioeconómicas en las que se desenvuelven (SEP, 2013).</p>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-3/b3p1e1.webp';
  renderImageComponent($imageSrc, 'justify-start');
  ?>
  <p class="py-2 text-xl">Entre las ventajas que se derivan de la planeación didáctica para un curso están (Haro del Real, 1994): </p>
  <ul class="ul-disc">
    <li>facilitar al profesorado la realización de sus funciones docentes a partir de una adecuada organización y optimización del tiempo;</li>
    <li>el logro de los propósitos establecidos,</li>
    <li>generar una visión completa del curso,</li>
    <li>establecer condiciones necesarias para que el alumnado adquiera una formación integral.</li>
    <li>establecer condiciones necesarias para que el alumnado adquiera una formación integral.</li>
  </ul>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
