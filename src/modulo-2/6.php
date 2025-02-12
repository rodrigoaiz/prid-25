<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 14;
ob_start();
?>
<section>
  <p>La teoría constructivista pretende explicar cómo se forma el conocimiento “en el interior del sujeto”, quien construye el conocimiento de la realidad y la transforma al interactuar con situaciones y objetos, ya que ésta no se construye por sí misma (Araya, Alfaro y Andonegui, 2007; p. 77). El constructivismo tiene sus orígenes en la filosofía griega (sofistas), así como en las ideas de Descartes, Galileo y Kant, entre otros.</p>
  <p>En el ámbito educativo, el enfoque constructivista es el más acorde al Modelo Educativo del Colegio, pues tiene como centro del aprendizaje al estudiantado, en contraposición con una visión transmisionista de información por parte del docente.</p>
  <p>Concibe a las y los estudiantes como un aprendices activos y autónomos, que construyen conocimiento a partir de sus experiencias previas. A su vez, el profesorado tiene una función mediadora; utiliza metodologías educativas activas y por descubrimiento en las que el alumnado transforma la información y construye significados nuevos al modificar sus esquemas de conocimiento previos.</p>
  <p>Por lo anterior, es importante reconocer el papel del aprendiz activo y del docente-guía en ese proceso conjunto de construcción de significados para ir más allá del entorno escolar y lograr aprendizajes significativos para toda la vida.</p>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-2/b5p04i05.webp';
  renderImageComponent($imageSrc, 'justify-center');
  ?>


  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>
      <p>A continuación, descarga los siguientes documentos y realiza su lectura crítica:</p>
      <ul class="ul-disc">
        <li><a href="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/modelo/bloque2/docs/2024/Constructivismo_origenes_perspectivas.pdf" target="_blank">Constructivismo: orígenes y perspectivas</a></li>
        <li><a href="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/modelo/bloque2/docs/2024/Constructivismo_aprendizaje_signficativo.pdf " target="_blank">Constructivismo y aprendizaje significativo (págs. 22-28).</a></li>
      </ul>
    </li>
    <li>Toma las notas que consideres necesarias acerca de las lecturas y posteriormente responde el siguiente cuestionario de opción múltiple.</li>
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
    <li>Organizados en equipos, según lo indicado por tus impartidores, elaboren de manera colaborativa una reflexión escrita acerca de la relación entre el Constructivismo y el Modelo Educativo del CCH.</li>
    <li>
      <p>Para la elaboración de la reflexión consideren la siguiente estructura:</p>
      <ol class="ol-lower-alpha">
        <li>Inicio: orígenes y definición del Constructivismo.</li>
        <li>Desarrollo: principales postulados del enfoque constructivista y su relación con el Modelo Educativo del Colegio.</li>
        <li>Conclusión: explicar brevemente de qué manera aplica los postulados del enfoque constructivista en su práctica docente.</li>
      </ol>
      <p>El documento debe considerar un título, elaborarse a renglón seguido, sin subtítulos. La extensión mínima debe ser de cuatro párrafos y máxima de una cuartilla (letra Arial 12, interlineado sencillo). </p>
    </li>
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