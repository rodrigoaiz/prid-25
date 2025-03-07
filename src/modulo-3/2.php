<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 19;
ob_start();
?>
<section>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-3/b3p2e1.webp';
  renderImageComponent($imageSrc, 'justify-start');
  ?>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>Consulta el siguiente material y realiza la lectura del <a target="_blank" href="<?php echo PATH_DOCS . 'actividad1_estrategias_docentes.pdf'; ?>">Capítulo 5. Estrategias de enseñanza para la promoción de aprendizajes significativos</a> de Frida Díaz Barriga Arceo y Gerardo Hernández Rojas (pp. 116-174).</li>
    <li>Con base en el texto, <strong>elabora un mapa conceptual sobre estrategias de enseñanza</strong>. Revisa el siguiente <a href="https://www.youtube.com/watch?v=q8fvXaUX5f4" target="_blank">video</a> en el que se explica en qué consiste y cómo se elabora un mapa conceptual.</li>
    <li>Para la realización de tu producto, considera los elementos señalados en la <a target="_blank" href="<?php echo PATH_DOCS . 'actividad1_02_rubrica_mapa.pdf'; ?>">rúbrica de evaluación</a>.</li>
    <li>Nombra tu archivo de la siguiente manera: <em>Nombre_Apellido_Actividad01M3</em>.</li>
    <li>Adjunta tu archivo como imagen o formato PDF con un máximo de 10 MB.</li>
    <li>No olvides dar clic en el botón de “entregar” o “guardar” para que pueda ser revisado por tus impartidores.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  include BASE_PATH . '/include/Actividad.php';
  renderActividad($ActividadContent, "Actividad 1 : Mapa conceptual sobre estrategias de enseñanza");
  ?>
  <?php
  include BASE_PATH . '/include/ActividadIframe.php';
  renderActividadIframe('b3act1');
  ?>

  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>
      <p>Consulta el siguiente material y realiza la lectura de la presentación sobre <a target="_blank" href="<?php echo PATH_DOCS . 'actividad2_01_presentacion_secuencia_didactica.pdf'; ?>">Secuencia Didáctica</a> y el texto <a target="_blank" href="<?php echo PATH_DOCS . 'actividad2_02_guia_secuencias.pdf'; ?>">Guía para la elaboración de una secuencia didáctica</a> de Ángel Díaz-Barriga.</p>
    </li>
    <li>Con base en el material consultado, elabora un <strong>resumen</strong> con una <strong>extensión mínima de dos y máxima de tres cuartillas</strong>, letra Arial 12, interlineado sencillo.</li>
    <li>Para la elaboración de tu trabajo considera los elementos señalados en la <a target="_blank" href="<?php echo PATH_DOCS . 'actividad2_05_lista_cotejo_resumen.pdf'; ?>">lista de cotejo</a>, así como el texto <a target="_blank" href="<?php echo PATH_DOCS . 'actividad2_04_Como_Resumir_un_Texto_Fin.pdf'; ?>">¿Cómo realizar un resumen?</a> </li>
    <li>Nombra tu archivo de la siguiente manera: <em>Nombre_Apellido_Actividad02M3</em>.</li>
    <li>Adjunta tu archivo para que pueda ser revisado por tus impartidores en formato Word como PDF con un máximo de 10 MB.</li>
    <li>No olvides dar clic en el botón de “entregar” o “guardar” para que lo pueda visualizar el impartidor.</li>
  </ol>
  <p><strong>NOTA:</strong> Lectura optativa: <a target="_blank" href="<?php echo PATH_DOCS . 'actividad2_03_practica_educativa.pdf'; ?>">Capítulo 3. Las secuencias didácticas y las secuencias de contenido</a> de Antoni Zavala Vidiella (pp. 53-89).</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 2 : Resumen secuencia didáctica");
  renderActividadIframe('b3act2');
  ?>
</section>
<div class="w-full my-4 relative z-0">
  <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
  </div>
  <div class=" max-w-screen-md mx-auto grid grid-cols-2 gap-10">
    <img class="relative z-20" src="<?php echo ASSET_URL; ?>img/modulo-3/b3p2e2.webp" alt="comunidad cch" />
    <img class="relative z-20" src="<?php echo ASSET_URL; ?>img/modulo-3/b3p2e3.webp" alt="comunidad cch" />
  </div>
</div>
<section>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>
      <p>Con base en los materiales revisados a lo largo de este módulo, así como de los dos previos, <strong>diseña una secuencia didáctica</strong> para lograr uno de los aprendizajes de una Unidad didáctica del programa de estudios de tu asignatura. Tu diseño debe incluir:</p>
      <ol class="ol-alpha">
        <li>Datos generales (Título de la Secuencia didáctica, Profesor(a), Asignatura, Semestre escolar, Plantel, número de sesiones, número de alumnos y fecha de elaboración).</li>
        <li>Programa (Unidad, propósito(s), aprendizajes, contenidos temáticos).</li>
        <li>Actividades de enseñanza-aprendizaje (inicio, desarrollo y síntesis).</li>
        <li>Sugerencias generales de evaluación (listado).</li>
        <li>Referencias de apoyo (bibliografía de consulta para los alumnos y bibliografía de consulta para el profesor).</li>
      </ol>
    </li>
    <li>Para la elaboración de tu secuencia, ocupa el siguiente formato: <a target="_blank" href="<?php echo PATH_DOCS . 'actividad3_03_formato_secuencia_didactica_primera_entrega.docx'; ?>">secuencia didáctica primera entrega</a>.</li>
    <li>En caso de que tengas alguna duda sobre el proceso de elaboración de tu secuencia, consulta a tus impartidores.</li>
    <li>Antes de entregar tu secuencia didáctica, revisa que cumpla con los elementos señalados en la <a target="_blank" href="<?php echo PATH_DOCS . 'actividad3_04_lista_cotejo_primera_entrega.pdf'; ?>">lista de cotejo de secuencia didáctica (primera entrega)</a>.</li>
    <li>Nombra tu archivo de la siguiente manera: <em>Nombre_Apellido_Actividad03M3</em>.</li>
    <li>Adjunta tu archivo para que pueda ser revisado por tus impartidores, en formato Word o PDF con un máximo de 10 MB.</li>
    <li>No olvides dar clic en el botón de “entregar” o “guardar” para que lo pueda visualizar el impartidor.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 3 : Diseño de una secuencia didáctica (primera entrega)");
  renderActividadIframe('b3act3');
  ?>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>