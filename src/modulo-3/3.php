<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 20;
ob_start();
?>
<section>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-3/b3p3e1.webp';
  renderImageComponent($imageSrc, 'justify-start');
  ?>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>
      <p>Consulta el siguiente material y realiza la lectura del <a target="_blank" href="<?php echo PATH_DOCS . 'actividad3_01_constructivismo_evaluacion_educativa.pdf'; ?>">Capítulo 8. Constructivismo y evaluación educativa</a> de Frida Díaz-Barriga Arceo y Gerardo Hernández Rojas (pp. 305-373).</p>
      <p class="text-sm">*Lectura optativa: <a target="_blank" href="<?php echo PATH_DOCS . 'actividad3_02_la_evaluacion.pdf'; ?>">Capítulo 8. Evaluación</a> de Antoni Zabala Vidiella (pp. 203-230).</p>
    </li>
    <li>Con base en la información consultada de los materiales elabora un mapa mental; considera en su diseño los elementos señalados en la siguiente rúbrica de evaluación.</li>
    <li>Para conocer en qué consiste y cómo se elabora un mapa mental, revisa el siguiente <a href="https://www.youtube.com/watch?v=L5LLjFnjXco" target="_blank">video</a>. </li>
    <li>Nombra tu archivo de la siguiente manera: <em>Nombre_Apellido_Actividad04M3</em>.</li>
    <li>Adjunta tu archivo para que pueda ser revisado por tu asesor, como imagen o PDF conun máximo de 10 MB.</li>
    <li>No olvides dar clic en el botón de “entregar” o “guardar” para que lo pueda visualizar el impartidor.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  include BASE_PATH . '/include/Actividad.php';
  renderActividad($ActividadContent, "Actividad 4 : Mapa mental sobre evaluación");
  ?>
  <?php
  include BASE_PATH . '/include/ActividadIframe.php';
  renderActividadIframe('b3act4');
  ?>
  <div class="my-5">
    <img class="mx-auto block" src="<?php echo ASSET_URL; ?>img/modulo-3/b3p3e2.webp" alt="comunidad cch" />
  </div>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>Con base en la retroalimentación que recibiste en tu primera entrega, revisa, corrige y termina el diseño de tu secuencia didáctica. En esta ocasión, es necesario que incluyas los instrumentos de evaluación y todos los anexos, así como que realices una reflexión al final.</li>
    <li>
      <p>La secuencia debe incluir:</p>
      <ol class="ol-alpha">
        <li>Datos generales (Título de la Secuencia didáctica, Profesor(a), Asignatura, Semestre escolar, Plantel, número de sesiones, número de alumnos y fecha de elaboración).</li>
        <li>Programa (Unidad, propósito(s), aprendizajes, contenidos temáticos).</li>
        <li>Actividades de enseñanza-aprendizaje (inicio, desarrollo y síntesis).</li>
        <li>Instrumentos de evaluación (listas de cotejo, rúbricas, portafolios, etcétera).</li>
        <li>Referencias de apoyo (bibliografía de consulta para los alumnos y bibliografía de consulta para el profesor).</li>
        <li>Anexos</li>
        <li>Reflexión sobre la forma en la que se aplican los principios del Constructivismo y el Modelo Educativo en la secuencia didáctica planteada (mínimo tres párrafos y máximo una cuartilla).</li>
      </ol>
    </li>
    <li>Para la elaboración de tu trabajo utiliza el siguiente formato de secuencia didáctica(versión final).</li>
    <li>En el diseño de tu secuencia considera los elementos señalados en la lista de cotejo de secuencia didáctica (versión final).</li>
    <li>Si tienes alguna duda, no dudes en consultar a tus impartidores.</li>
    <li>Nombra tu archivo de la siguiente manera: <em>Nombre_Apellido_Actividad05M3</em>.</li>
    <li>Adjunta tu archivo para que pueda ser revisado por tu asesor, como imagen o PDF con un máximo de 10 MB.</li>
    <li>No olvides dar clic en el botón de “entregar” o “guardar” para que lo pueda visualizar el impartidor.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad 5 : Diseño de una secuencia didáctica (versión final)");
  renderActividadIframe('b3act5');
  ?>
  <h2 class="mt-10">Lecturas de apoyo</h2>
  <p>De acuerdo con la naturaleza de la materia que inscribiste al PRID, se realizarán lecturas disciplinarias indicadas por tus impartidores, así como las actividades que se deriven de ellas.</p>
</section>
<div class="w-full my-4 relative z-0">
  <div class="w-full bg-slate-100 min-h-20 absolute translate-y-full origin-center z-0">
  </div>
  <div class="max-w-screen-xl grid grid-cols-3 gap-5 relative z-10 mx-auto">
    <div class="bg-slate-100 brightness-125  shadow-lg text-slate-900 p-5 hover:scale-105 group ease-in-out transition-all">
      <h3 class="uppercase text-xl">Área de Matemáticas:</h3>
      <ul class="ul-disc">
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'mate01_ideas_de_pollya.pdf'; ?>">Las ideas de Póllya en la resolución de problemas.</a></li>
      </ul>
      <h3 class="uppercase text-xl">Área de Ciencias Experimentales:</h3>
      <ul class="ul-disc">
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'experimentales01_ensenanza_metodologia_ciencia.pdf'; ?>">Enseñanza de la Metodología de la ciencia en el Bachillerato.</a></li>
      </ul>
      <h3 class="uppercase text-xl">Área Histórico-Social:</h3>
      <ul class="ul-disc">
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'historico01_relaciones_filosofia_didactica.pdf'; ?>">Las relaciones entre filosofía y didáctica.</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'historico02_didactica_ciencias_sociales.pdf'; ?>">Didáctica de las ciencias sociales: currículo escolar y formación del profesorado.</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'historico03_ensenar_aprender.pdf'; ?>">Enseñar y aprender didáctica de las ciencias sociales: la formación del profesorado desde una perspectiva sociocrítica.</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'historico04_didactica_disciplinas.pdf'; ?>">Didáctica de las disciplinas: ciencias sociales.</a></li>
      </ul>
      <h3 class="uppercase text-xl">Área de Talleres:</h3>
      <ul class="ul-disc">
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'talleres01_competencias_comunicativas.pdf'; ?>">El aprendizaje escolar de competencias comunicativas.</a></li>
      </ul>
    </div>
    <div class="bg-slate-100 brightness-125  shadow-lg text-slate-900 p-5 hover:scale-105 group ease-in-out transition-all">
      <h3 class="uppercase text-xl">Departamento de Idiomas:</h3>
      <ul class="ul-disc">
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'idiomas01_communicative_teaching.pdf'; ?>">Chapter 9 Communicative Language Teaching</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'idiomas02_aprender_accion.pdf'; ?>">¿Qué significa aprender a través de la acción?</a></li>
        <li><a href="https://vimeo.com/809596922" target="_blank">Video: Del enfoque comunicativo a la perspectiva accional</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'idiomas03_lista_cotejo.pdf'; ?>">Lista de cotejo para cuadro comparativo</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'idiomas2_01_teaching_listening.pdf'; ?>">Chapter 15 Teaching Listening: pp. 314-344.</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'idiomas2_02_teaching_reading.pdf'; ?>">Chapter 17 Teaching Reading: pp. 389-425.</a></li>
      </ul>
    </div>
    <div class="bg-slate-100 brightness-125  shadow-lg text-slate-900 p-5 hover:scale-105 group ease-in-out transition-all">
      <h3 class="uppercase text-xl">Departamento de Opciones Técnicas:</h3>
      <ol class="ul-disc">
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'tecnicas01_unidades_didacticas_integrales.pdf'; ?>">Elaboración de unidades didácticas integrales</a></li>
      </ol>
      <h3 class="uppercase text-xl">Departamento de Educación Física:</h3>
      <ol class="ul-disc">
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'edfisica01_didactica_educacion_fisica.pdf'; ?>">Didáctica de la Educación Física</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'edfisica2_estilos_ensenanza.pdf'; ?>">Qué son los estilos de enseñanza. Aproximación desde una perspectiva ecológica: pp27-49.</a></li>
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'edfisica3_como_evaular_edfisica.pdf'; ?>">Cómo evaluar bien Educación Física: pp.67-102</a></li>
      </ol>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>