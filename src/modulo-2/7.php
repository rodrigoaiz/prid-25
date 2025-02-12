<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 15;
ob_start();
?>
<section>
  <p>Una vez identificados los conceptos centrales del constructivismo en la educación y sus características e importancia para el aprendizaje significativo, es momento de pasar al tema de la Planeación Didáctica con un enfoque constructivista.</p>
  <p>Se concibe la planeación didáctica como la organización de un conjunto de ideas y actividades que permiten desarrollar un proceso educativo con sentido, significado y continuidad. Constituye una guía que permite al profesorado enfrentar su práctica de forma ordenada y congruente (SEP, 2009). Su elaboración implica analizar y organizar los contenidos educativos, determinar los objetivos, intenciones y propósitos a lograr; además de establecer la secuencia de actividades en el tiempo y espacio (Ascencio, 2016).</p>
  <div class="grid grid-cols-2 my-5">
    <img src="<?php echo ASSET_URL; ?>img/modulo-2/b5p04i02.webp" alt="Alumnos CCH" />
    <img src="<?php echo ASSET_URL; ?>img/modulo-2/b5p04i04.webp" alt="Alumnos CCH" />
  </div>
  <p>En forma conjunta, la información de <strong>la planeación didáctica conforma un plan de acción integral, que permite dar claridad a los fundamentos educativos que orientarán el proceso de enseñanza aprendizaje</strong>. La manera en la que las y los docentes estructuran la enseñanza, la distribución del tiempo, las actividades que asignan al estudiantado para el trabajo en el aula, los recursos educativos, las estrategias, los mecanismos de evaluación y sus propias expectativas de la clase son algunas de las perspectivas que hoy en día se consideran como parte de una enseñanza eficaz (Murillo, Martínez y Hernández, 2011). A esto se suma el andamiaje necesario para que el alumnado construya los conocimientos conceptuales, procedimentales y actitudinales; la práctica para aplicarlos y emplearlos en diversas situaciones; lo que debe ser reflejado dentro y fuera del aula mediante la planeación docente de su asignatura (Ascencio, 2016).</p>
  <p><strong>La planeación también debe considerar el análisis de varios componentes</strong> como el tamaño del grupo, las características del estudiantado (edad, intereses, conocimientos previos) y las condiciones de infraestructura escolar, entre otros aspectos. En la planeación didáctica se refleja la metodología más adecuada para el logro de los aprendizajes, así como el sistema de evaluación que permita tomar decisiones encaminadas a mejorar los aprendizajes del estudiantado y que reflejen su desempeño a lo largo de la asignatura.</p>
  <p>Entre las ventajas que se derivan de la elaboración y uso de la planeación didáctica de un curso están el facilitar al profesorado la realización de sus funciones a partir de una adecuada organización y optimización del tiempo para el logro de los propósitos establecidos, generar una visión del curso completo, así como establecer condiciones para que las y los jóvenes adquieran una formación homogénea (Haro del Real, 1994); además es la base para el inicio de la práctica docente reflexiva.</p>
  <h2 class="my-10 leading-relaxed">La planeación en la práctica: Del programa institucional o indicativo y el programa operativo</h2>
  <p>El <strong>programa institucional o indicativo es la guía que debe atender y respetar el profesorado</strong>, pero “corresponde a este hacer culminar desde su situación personal el ejercicio de la libertad de enseñanza, especificando contenidos, seleccionando las actividades más adecuadas contribuyendo a evaluar los programas a partir de los resultados de su práctica, compartiendo con los demás profesores sus cuestionamientos y propuestas” (Robles y Bazán, 1994; p.4). Así, en el ámbito de la libertad de cátedra, le corresponde al profesorado enriquecer su docencia con sus ideas propias, experiencias y valores.</p>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-2/b5p04i03.webp';
  renderImageComponent($imageSrc, 'justify-center');
  ?>
  <p>Este proceso culmina con la elaboración escrita de un <strong>programa operativo, con base en el institucional, en el cual se detallan con mayor precisión los contenidos temáticos, las estrategias, las actividades, las formas de trabajo y los criterios de evaluación; así como la bibliografía</strong>.</p>
  <p>Es preciso enfatizar la importancia de que las y los profesores cuenten con un espacio de reflexión tanto para elaborar de manera conjunta sus <a class="tooltip-multiline tooltip-top-left" data-tooltip="Es la propuesta didáctica, personal o de grupo, que apegada al programa de estudios de una asignatura a) orienta el proceso de enseñanza-aprendizaje, b) articula los contenidos, las estrategias de enseñanza-aprendizaje, c) los materiales y recursos didácticos, d) las estrategias e instrumentos de evaluación, y e) materiales de apoyo utilizados.">programas operativos</a> <span class="sm:hidden">(Es la propuesta didáctica, personal o de grupo, que apegada al programa de estudios de una asignatura a. orienta el proceso de enseñanza-aprendizaje, a. articula los contenidos, las estrategias de enseñanza-aprendizaje, c. los materiales y recursos didácticos, d. las estrategias e instrumentos de evaluación, y e. materiales de apoyo utilizados.)</span>, como para compartir los resultados obtenidos después de su aplicación.</p>
</section>
<div class="w-full my-4 relative z-0">
  <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
  </div>
  <div class="bg-slate-100 max-w-screen-lg p-5 shadow-2xl border border-slate-500/75 relative z-10 mx-auto px-10 py-5 text-xl">
    <p class="text-xl font-semibold">De acuerdo con el Glosario de términos del Protocolo de Equivalencias para el ingreso y la promoción de los profesores ordinarios de carrera del Colegio de Ciencias y Humanidades (CCH, 2020), un programa operativo:</p>
    <p class="text-lg">Es la propuesta didáctica, individual o colegiada que, con relación al Programa de Estudio de una asignatura, orienta el proceso de enseñanza-aprendizaje, elaborado por un máximo de seis integrantes.</p>
    <p class="text-lg">Debe articular aprendizajes, contenidos, estrategias didácticas, materiales y recursos didácticos, formas e instrumentos de evaluación y fuentes consultadas (p.48).</p>
  </div>
</div>
<section>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>Realiza la planeación didáctica general de una Unidad de tu Programa de Estudio de la materia que inscribiste; para ello, descarga el <a target="_blank" href="<?php echo PATH_DOCS . 'Actividad4_formato_2025.docx'; ?>">formato</a> en el que deberás realizar tu actividad y consulta el ejemplo que se te proporciona.</li>
    <li>Guarda tu archivo (.doc o .pdf) bajo el siguiente formato: Nombre_Apellido_Actividad01. Ejemplo: <strong>Victoria_García_Actividad04</strong></li>
    <li>
      <p>Sube tu archivo para que pueda ser revisado por tu impartidor (en formato PDF o JPG; recuerda que el peso máximo debe ser de 10 MB).</p>
      <ul class="ul-disc">
        <li>Da clic en <strong>Adjuntar</strong> y arrástralo al campo que se solicita.</li>
        <li>No olvides dar clic en <strong>Guardar</strong>, pues de otra manera tu archivo no se subirá correctamente.</li>
        <li>Si quieres hacer cambios da clic en <strong>Editar envío</strong> y después en <strong>Guardar cambios</strong>.</li>
      </ul>
    </li>
    <li>Consulta los <a target="_blank" href="<?php echo PATH_DOCS . 'Actividad4_Rubrica.pdf'; ?>">criterios de evaluación</a> de la actividad.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  include BASE_PATH . '/include/Actividad.php';
  renderActividad($ActividadContent, "Actividad 4 : Planeación didáctica general de una unidad");
  ?>
  <?php
  include BASE_PATH . '/include/ActividadIframe.php';
  renderActividadIframe('b2act4');
  ?>
</section>
<?php ob_start(); ?>
<div class="grid  md:grid-cols-3 md:gap-10 items-center">
  <p class="md:col-span-2 text-2xl">Te sugerimos que revises los siguientes documentos:</p>

  <div class="md:col-span-1">
    <img class="mx-auto" src="<?php echo ASSET_URL ?>img/modulo-1/sabermas.webp" alt="Estudiantes CCH">
  </div>
</div>
<ul class="ul-disc mt-5">
  <li><a href="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/modelo/bloque2/docs/Programas_institucionales_y_operativos.pdf " target="_blank">Programas institucionales y operativos</a>. Este documento señala la importancia de los programas institucionales y reflexiona sobre la construcción de programas operativos con base en ellos.</li>
  <li><a href="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/modelo/bloque2/docs/Lecturas_Sesion2.pdf " target="_blank">Aprendizajes relevantes. La experiencia del Colegio en la modificación de sus programas de estudio</a>. En el texto se describe y justifica la propuesta construida para realizar las modificaciones a los programas de estudio durante el proceso de revisión y ajuste llevado a cabo entre 2001 y 2003. Asimismo, se ponderan los resultados alcanzados en la modificación de dichos programas y se identifican algunos retos para su mejora.</li>
  <li><a href="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/modelo/bloque2/docs/2024/Suplemento_GUIA_REVISION_AJUSTE_PROGRAMAS_ESTUDIO.pdf " target="_blank">Guía para la revisión y ajuste de los Programas de Estudio del Colegio de Ciencias y Humanidades 2023-2024</a>. Este documento tiene como propósito ser un instrumento de apoyo para los integrantes de las comisiones que iniciaron su trabajo de revisión de los Programas de Estudio en agosto del 2023</li>
</ul>
<?php
$SaberContent = ob_get_clean();
include BASE_PATH . '/include/ParaSaber.php';
renderSaberContent($SaberContent);
?>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>