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
  <p>De acuerdo con la naturaleza de la materia que inscribiste al PRID, se realizarán lecturas disciplinarias indicadas por tus impartidores, así como las actividades que se deriven de ellas.</p>
</section>
<div class="w-full my-4 relative z-0">
  <div class="w-full bg-slate-100 min-h-20 absolute translate-y-full origin-center z-0">
  </div>
  <div class="max-w-screen-xl md:grid grid-cols-3 gap-5 relative z-10 mx-auto">
    <div class="bg-slate-100 brightness-125  shadow-lg text-slate-900 p-5 md:hover:scale-105 group ease-in-out transition-all">
      <h3 class="uppercase text-xl">Área de Matemáticas:</h3>
      <ul class="ul-disc">
        <li><a target="_blank" href="<?php echo PATH_DOCS . 'mate01_ideas_de_pollya.pdf'; ?>">Las ideas de Póllya en la resolución de problemas.</a></li>
        <li><a target="_blank" href="https://diposit.ub.edu/dspace/bitstream/2445/174473/1/0037_970-18-1739-7_Matmaticas_Chevallard.pdf">Estudiar matemáticas. El eslabón entre enseñanza y aprendizaje.</a></li> </ul>
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
    <div class="bg-slate-100 brightness-125  shadow-lg text-slate-900 p-5 md:hover:scale-105 group ease-in-out transition-all">
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
    <div class="bg-slate-100 brightness-125  shadow-lg text-slate-900 p-5 md:hover:scale-105 group ease-in-out transition-all">
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
