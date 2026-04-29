<?php
include_once __DIR__ . '/../config.php';
include BASE_PATH . '/include/Actividad.php';
include BASE_PATH . '/include/ActividadIframe.php';
$currentPageId = 25;
ob_start();
?>

<section>
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
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'Guia_grabacion_smartphone.pdf'; ?>">Guía básica de grabación de un video con smartphone</a></li>
      </ol>
    </li>
    <li>También es indispensable que revises cuidadosamente los <a target="_blank" href="<?php echo PATH_DOCS . 'act3-rubrica-26.pdf'; ?>">criterios de evaluación</a> de la actividad.</li>
    <li>Sube tu video a una carpeta compartida digital (OneDrive o Google Drive) y comparte la liga para que pueda ser revisado por tus impartidores (en formato MP4). Nombra tu archivo de la siguiente manera: Nombre_Apellido_Actividad04.Ejemplo: <strong>Victoria_García_Actividad04</strong></li>
    <li class="font-bold">
      <p>No olvides verificar que hayas dado los accesos y permisos para que tus impartidoras (es) puedan revisar el video.</p>
      <!--<p><strong>NOTA</strong>: para conocer cómo subir y compartir el video desde una carpeta digital consulta el siguiente <a href="https://n9.cl/g4eju" target="_blank">material</a>. </p>-->
    </li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 3. Video sobre plan de clase ");
  renderActividadIframe('b4act3');
  ?>

</section>

<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
