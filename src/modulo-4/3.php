<?php
include_once __DIR__ . '/../config.php';
include BASE_PATH . '/include/Actividad.php';
include BASE_PATH . '/include/ActividadIframe.php';
$currentPageId = 25;
ob_start();
?>

<section>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>En la actividad anterior comenzaste a realizar tu plan de clase. Ahora, de acuerdo con las observaciones y correcciones que realizaron tus impartidores en la revisión de tu primera entrega, haz los ajustes pertinentes para llegar a la versión final del plan de clase.</li>
    <li>
      Además de los elementos solicitados en la primera versión, para esta actividad debes incluir una reflexión al final de tu plan de clase (máximo una cuartilla) en la que respondas a los siguientes cuestionamientos:
      <ol class="ol-alpha">
        <li>¿De qué manera se refleja en tu planeación de clase el enfoque disciplinario y didáctico de tu materia?</li>
        <li>¿De qué forma se concretan en tu planeación de clase los principios del constructivismo y el Modelo Educativo del CCH?</li>
      </ol>
    </li>
    <li>Para la elaboración de esta actividad, utiliza el siguiente formato.</li>
    <li>No olvides revisar cuidadosamente los criterios de evaluación de esta actividad.</li>
    <li>Nombra tu archivo de la siguiente manera: Nombre_Apellido_Actividad03M4. Ejemplo: <strong>Victoria_García_Actividad03M4</strong></li>
    <li>Sube tu archivo para que pueda ser revisado y retroalimentado por tus impartidores (en formato PDF o JPG; recuerda que el peso máximo debe ser de 10 MB).</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 3 : Plan de clase (entrega final)");
  renderActividadIframe('b4act3');
  ?>
  <div class="grid max-w-3xl mx-auto grid-cols-2 gap-10 my-10 justify-center items-center">
    <img
      class="mx-auto"
      src="<?php echo ASSET_URL ?>img/modulo-4/b4p3e2.webp"
      alt="Estudiantes CCH">
    <img
      class="mx-auto"
      src="<?php echo ASSET_URL ?>img/modulo-4/b4p3e1.webp"
      alt="Estudiantes CCH">
  </div>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>Elabora un video en el que expongas de manera argumentada tu plan de clase. El video debe tener una duración de mínima de 3 y máxima de 5 minutos, y es indispensable que salgas a cuadro en el mismo. </li>
    <li>
      Para la elaboración de tu video revisa los siguientes materiales:
      <ol class="ol-alpha">
        <li><a href="https://www.youtube.com/watch?v=fEpD4LDd95A" target="_blank">¿Cómo grabar en Canva con tu voz y cámara web?</a></li>
        <li><a href="https://www.youtube.com/watch?v=ISqsLCC-cXA" target="_blank">La mejor forma de grabar Power Point con voz y cámara 2025</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'Modulo_4_Actividad_4_guia_grabacion_video.pdf'; ?>">Guía básica de grabación de un video con smartphone</a></li>
      </ol>
    </li>
    <li>También es indispensable que revises cuidadosamente los criterios de evaluación de la actividad.</li>
    <li>Sube tu video a una carpeta compartida digital (OneDrive o Google Drive) y comparte la liga para que pueda ser revisado por tus impartidores (en formato MP4). Nombra tu archivo de la siguiente manera: Nombre_Apellido_Actividad04.Ejemplo: <strong>Victoria_García_Actividad04</strong></li>
    <li class="font-bold">No olvides verificar que hayas dado los accesos y permisos para que tus impartidores puedan revisar el video.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 4. Video sobre plan de clase ");
  renderActividadIframe('b4act4');
  ?>

</section>

<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
