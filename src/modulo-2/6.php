<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 14;
ob_start();
?>
<section>
  <p>La teoría constructivista pretende explicar cómo se forma el conocimiento “en el interior del sujeto”, quien construye el conocimiento de la realidad y la transforma al interactuar con situaciones y objetos, ya que ésta no se construye por sí misma (Araya, Alfaro y Andonegui, 2007; p. 77). El constructivismo tiene sus orígenes en la filosofía griega (sofistas), así como en las ideas de Descartes, Galileo y Kant, entre otros.</p>
  <p>En el ámbito educativo, el enfoque constructivista es el más acorde al Modelo Educativo del Colegio, pues tiene como centro del aprendizaje al estudiantado, en contraposición con una visión transmisionista de información por parte del docente.</p>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-2/b5p04i05.webp';
  renderImageComponent($imageSrc, 'justify-center');
  ?>


  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>Toma las notas que consideres necesarias acerca de las lecturas y posteriormente responde el siguiente cuestionario de opción múltiple.</li>
    <li>
      <p>A continuación, descarga los siguientes documentos y realiza su lectura crítica:</p>
      <ul class="ul-disc">
        <li><a href="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/modelo/bloque2/docs/2024/Constructivismo_origenes_perspectivas.pdf" target="_blank">Constructivismo: orígenes y perspectivas</a></li>
        <li><a href="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/modelo/bloque2/docs/2024/Constructivismo_aprendizaje_signficativo.pdf " target="_blank">Constructivismo y aprendizaje significativo (págs. 22-28).</a></li>
      </ul>
    </li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  include BASE_PATH . '/include/Actividad.php';
  renderActividad($ActividadContent, "Actividad 2 : Cuestionario sobre constructivismo");
  ?>
  <?php
  include BASE_PATH . '/include/ActividadIframe.php';
  renderActividadIframe('b2act2', 'quiz');
  ?>

  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>Organizados en equipos, según lo indicado por tus impartidores, elaboren de manera colaborativa un mapa mental acerca del texto “El constructivismo: orígenes y perspectivas”.</li>
    <li>Para conocer en qué consiste un mapa mental, consulta el siguiente <a href="https://www.youtube.com/watch?v=L5LLjFnjXco" target="_blank">link</a>. NOTA: se sugiere utilizar Canva, con su cuenta institucional, para elaborar la actividad.</li>
    <li>Guarda tu archivo (.doc o .pdf) bajo el siguiente formato: Nombre_Apellido_Actividad01. Ejemplo: <strong>Victoria_García_Actividad03</strong></li>
    <li>
      <p>Sube tu archivo para que pueda ser revisado por tu impartidor (en formato PDF o JPG; recuerda que el peso máximo debe ser de 10 MB).</p>
      <ul class="ul-disc">
        <li>Da clic en <strong>Adjuntar</strong> y arrástralo al campo que se solicita.</li>
        <li>No olvides dar clic en <strong>Guardar</strong>, pues de otra manera tu archivo no se subirá correctamente.</li>
        <li>Si quieres hacer cambios da clic en <strong>Editar envío</strong> y después en <strong>Guardar cambios</strong>.</li>
      </ul>
    </li>
    <li>Consulta los <a target="_blank" href="<?php echo PATH_DOCS . 'Actividad3_Rubrica.pdf'; ?>">criterios de evaluación</a> de la actividad.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 3 : Mapa mental del constructivismo (sesión sincrónica)");
  renderActividadIframe('b2act3');
  ?>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>