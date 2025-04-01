<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 23;
ob_start();
?>
<section>
  <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-10 my-5 items-center">
    <article>
      El propósito de la Planeación didáctica es el análisis y organización de los contenidos educativos, determinación de las intenciones, aprendizajes y propósitos a lograr; además de presentar la secuencia de actividades a desarrollar en el tiempo y espacio (Ascencio, 2016), con el objetivo de establecer la metodología más adecuada para el logro de los aprendizajes, así como el sistema de evaluación que verdaderamente refleje el desempeño y aprendizajes logrados por el alumnado, a lo largo de la asignatura.
    </article>
    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/oL3yNyf0TiU?si=0guTdhCITwCVbfGE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div> -->
  <p class="py-5">El plan de clase es el diseño de instrucciones didácticas que realiza el profesorado a partir de los propósitos del programa de estudios y de los aprendizajes esperados en los aprendices a través de las actividades de ambos, lo cual permite orientar el proceso educativo con una secuencia lógica y desde una vertiente pedagógica para el logro de conocimientos, habilidades y actitudes. Es esencial considerar los propósitos, contenidos, tiempo, materiales, recursos; así como criterios e instrumentos de evaluación.</p>
  <p>Después de haber elaborado una secuencia didáctica de la materia o asignatura inscrita al PRID, ahora es el momento de diseñar por escrito una clase con duración de dos horas. Posteriormente se expondrá a los pares en formato de video. Cabe señalar que tanto la planeación como el video serán coevaluados a través de una rúbrica.</p>
  <img src="<?php echo ASSET_URL . 'img/modulo-4/b4p1e1.webp' ?>" alt="Alumnos CCH" class="max-w-2xl mx-auto h-auto mt-[5rem]">
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
