<?php
include_once __DIR__ . '/../config.php';
include BASE_PATH . '/include/Actividad.php';
include BASE_PATH . '/include/ActividadIframe.php';
include BASE_PATH . '/include/ImagenFullPleca.php';
$currentPageId = 24;
ob_start();
?>

<section>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>
      Realiza la lectura cuidadosa de los siguientes textos:
      <ul class="ul-disc">
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'act1-lineamientos-coa.pdf'; ?>">Lineamientos para la Presentación de Pruebas de Concurso de Oposición Abierto para Plazas de Profesor Ordinario de Carrera de Tiempo Completo. (pp. 8-10).</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'act1-instrumentacion-didactica.pdf'; ?>">Instrumentación didáctica de Margarita Pansza, Esther Pérez y Porfirio Morán. (pp. 158-165). </a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'act1-incorporacion-tic.pdf'; ?>">La incorporación de las TIC en el aula. Laura Cedillo-Arias. (pp.162-178).</a></li>
      </ul>
    </li>
    <li>A partir de las lecturas, elabora una <strong>reflexión de mínimo una y máximo dos cuartillas</strong> (Letra Arial 12, interlineado 1.5) acerca de la instrumentación didáctica y la incorporación de las TIC.</li>
    <li>Para la realización de tu producto, considera los elementos señalados en los <a target="_blank" href="<?php echo PATH_DOCS . 'act1-rubrica-26.pdf'; ?>">criterios de evaluación</a>.</li>
    <li>Nombra tu archivo de la siguiente manera: <em>Nombre_Apellido_Actividad01M4</em>.</li>
    <li>Adjunta tu archivo como imagen o formato PDF con un máximo de 10 MB.</li>
  </div>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 1 : Reflexión sobre la planeación de clases (Lecturas)");
  renderActividadIframe('b4act1');
  ?>


  <?php
  $imageSrc = ASSET_URL . 'img/modulo-4/b4p2e1.webp';
  renderImageComponent($imageSrc, 'justify-center');
  ?>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>
      <p>Elabora un plan de clase de <strong>90 minutos de la temática asignada por tus impartidores (as)</strong>, considerando todo lo aprendido en los módulos previos. La planeación debe contener: </p>
      <ol class="ol-alpha">
        <li>Datos generales</li>
        <li>Elementos del Programa de estudios</li>
        <li>Descripción general</li>
        <li>Descripción de las actividades, organizadas en inicio, desarrollo y cierre.</li>
        <li>Criterios e instrumentos de evaluación</li>
        <li>Materiales y recursos</li>
        <li>Referencias de apoyo</li>
        <li>Anexos</li>
      </ol>
    </li>
    <li>
      <p>Además, debes incluir una reflexión final (máximo una cuartilla) en la que respondas a los siguientes cuestionamientos:</p>
      <ol class="ol-alpha">
        <li>Explica el tipo de estrategias de enseñanza-aprendizaje que utilizaste. Justifica tu respuesta.</li>
        <li>¿De qué forma se concretan en tu planeación de clase los principios del Modelo Educativo del CCH? </li>
      </ol>
    </li>
    <li>Para la elaboración de tu plan de clase utiliza el siguiente <a target="_blank" href="<?php echo PATH_DOCS . 'm4-act2-criterios.docx'; ?>">formato</a>.</li>
    <li>Descarga y revisa cuidadosamente los <a target="_blank" href="<?php echo PATH_DOCS . 'act2-rubrica-26.pdf'; ?>">criterios de evaluación</a> de esta actividad.</li>
    <li>Nombra tu archivo de la siguiente manera: Nombre_Apellido_Actividad02M4. Ejemplo: <strong>Victoria_García_Actividad02M4</strong></li>
    <li>Sube tu archivo para que pueda ser revisado y retroalimentado por tus impartidores (en formato PDF o JPG; recuerda que el peso máximo debe ser de 10 MB).</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 2. Plan de clase");
  renderActividadIframe('b4act2');
  ?>

</section>

<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
