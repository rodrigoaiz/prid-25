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
    <li>A partir de la lectura del <a target="_blank" href="<?php echo PATH_DOCS . 'Modulo_4_Activida1_Estrategias_aprendizaje_significativo.pdf'; ?>">Capítulo 6. <em>Estrategias para el aprendizaje significativo: fundamentos, adquisición y enseñanza</em></a> de Frida Díaz Barriga Arceo y Gerardo Hernández Rojas (págs. 175-222), elabora un mapa conceptual acerca de las estrategias para promover el aprendizaje significativo.</li>
    <li>Revisa el siguiente <a target="_blank" href="https://www.youtube.com/watch?v=q8fvXaUX5f4">video</a> en el que se explica en qué consiste y cómo se elabora un mapa conceptual.</li>
    <li>Para la realización de tu producto, considera los elementos señalados en los criterios de evaluación.</li>
    <li>Nombra tu archivo de la siguiente manera: <em>Nombre_Apellido_Actividad01M4</em>.</li>
    <li>Adjunta tu archivo como imagen o formato PDF con un máximo de 10 MB.</li>
  </ol>
  <div class="mx-auto bg-slate-100 p-5 max-w-3xl">
    <p class="text-2xl font-bold">Lectura complementaria para Actividad 1</p>
    <p><a target="_blank" href="<?php echo PATH_DOCS . 'Modulo_4_Actividad1_Preguntas_Detonadoras_Idiomas.pdf'; ?>">Lesson planning (idiomas)</a></p>
  </div>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 1 : Mapa conceptual de estrategias para el aprendizaje significativo");
  renderActividadIframe('b4act1');
  ?>
  <?php
  $imageSrc = ASSET_URL . 'img/modulo-4/b4p2e1.webp';
  renderImageComponent($imageSrc, 'justify-center');
  ?>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>
      Con base en la secuencia didáctica desarrollada en el Módulo 3, elabora un plan de clase de <strong>dos horas</strong>. La planeación debe contener:
      <ol class="ol-alpha">
        <li>Datos generales</li>
        <li>Elementos del Programa de estudios</li>
        <li>Descripción general</li>
        <li>Descripción de las actividades, organizadas en inicio, desarrollo y cierre.</li>
        <li>Evidencias de aprendizaje e instrumentos de evaluación</li>
        <li>Materiales y recursos</li>
        <li>Referencias de apoyo</li>
        <li>Anexos</li>
      </ol>
    </li>
    <li>Para la elaboración de tu plan de clase utiliza el siguiente formato. También es importante que consultes el siguiente ejemplo.</li>
    <li>Descarga y revisa cuidadosamente los criterios de evaluación de esta actividad.</li>
    <li>Nombra tu archivo de la siguiente manera: Nombre_Apellido_Actividad02M4. Ejemplo: <strong>Victoria_García_Actividad02M4</strong></li>
    <li>Sube tu archivo para que pueda ser revisado y retroalimentado por tus impartidores (en formato PDF o JPG; recuerda que el peso máximo debe ser de 10 MB).</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 2. Plan de clase (primera entrega)");
  renderActividadIframe('b4act2');
  ?>

</section>

<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
