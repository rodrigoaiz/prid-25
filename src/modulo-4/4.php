<?php
include_once __DIR__ . '/../config.php';
include BASE_PATH . '/include/Actividad.php';
include BASE_PATH . '/include/ActividadIframe.php';
include BASE_PATH . '/include/ImagenFullPleca.php';
$currentPageId = 26;
ob_start();
?>

<section>

  <?php ob_start(); ?>
  <p>Redacta un escrito con tu reflexión personal acerca de tu participación en el Programa de Regularización a la Iniciación Docente de la Escuela Nacional Colegio de Ciencias y Humanidades (PRIDENCCH). Desarrolla las siguientes ideas a párrafo corrido y en primera persona (no es un cuestionario), usa conectores en cada párrafo para dar cohesión y coherencia al texto y cuida la ortografía.</p>
  <?php
  $imageSrc = ASSET_URL . 'img/modulo-4/b4p4e1.webp';
  renderImageComponent($imageSrc, 'justify-center');
  ?>
  <p class="font-bold text-2xl pb-2">Considera lo siguiente:</p>
  <ol class="ol-number">
    <li>
      <p class="text-xl font-bold">Estructura</p>
      <p>Inicio</p>
      <p>Nombre</p>
      <p>Materia o asignatura en la que está inscrito en el PRIDENCCH.</p>
      <p>Motivos por los que se inscribió al Programa.</p>
      <p class="text-xl font-bold">Desarrollo</p>
      <p>Opinión argumentada sobre la incidencia de los contenidos del PRIDENCCH en su formación docente y profesionalización de la enseñanza de su materia, acorde con el Modelo Educativo del CCH.</p>
      <ul class="ul-disc">
        <li>Aspectos didáctico-pedagógicos</li>
        <li>Aspectos didáctico-disciplinarios</li>
      </ul>
      <p class="text-xl font-bold">Cierre</p>
      <p>Opinión argumentada sobre el logro de objetivos personales y los aspectos a fortalecer en su práctica docente en el CCH.</p>
    </li>
    <li>
      <p class="text-xl font-bold">Formato</p>
      <ul class="ul-disc">
        <li>Extensión: dos a tres cuartillas máximo.</li>
        <li>Letra Arial 12 puntos, interlineado 1.5, márgenes normales y párrafos proporcionados.</li>
      </ul>
    </li>
    <li>Descarga y revisa cuidadosamente los <a target="_blank" href="<?php echo PATH_DOCS . 'actfinal_cotejo.pdf'; ?>">criterios de evaluación</a>.</li>

  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad final Reflexión escrita sobre mi práctica docente");
  renderActividadIframe('b4act5');
  ?>

</section>

<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
