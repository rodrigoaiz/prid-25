<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 13;
ob_start();
?>
<section>
  <p>Son los instrumentos mediante los cuales se pone en práctica el Plan de Estudios. En ellos se representan concretamente todos los principios y objetivos planteados en el perfil de egreso.</p>
  <p>En los más de 50 años de existencia del Colegio, los Programas de Estudio han experimentado diversos cambios. Después de la actualización al Plan de Estudios de 1996, entre el año 2001 y 2004, se llevó a cabo una Revisión y Ajuste de los Programas con la intención de especificar los aprendizajes a alcanzar, adaptar los contenidos y actualizar la bibliografía y estrategias empleadas en el proceso de enseñanza-aprendizaje (DGCCH, 2009).</p>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-2/b4p05i02.webp';
  renderImageComponent($imageSrc, 'justify-center');
  ?>
  <p>Como parte de los trabajos de esta Revisión y Ajuste también se reestructuró el formato de la carta descriptiva, el cual tomó como eje fundamental a los aprendizajes (que sustituyeron a los objetivos de aprendizaje) con el propósito de que el profesorado y estudiantado pudieran ubicar los logros esperados en cada una de las asignaturas y evitaran centrarse en abordar todos los temas y subtemas que contienen los programas.</p>
  <p>Como parte de los trabajos de esta Revisión y Ajuste también se reestructuró el formato de la <a class="tooltip-multiline tooltip-bottom-left" data-tooltip="Las cartas descriptivas son una guía para orientar los cursos de una manera planeada, aunque flexible, hacia un rumbo determinado y con un método definido (Haro, 1994).">carta descriptiva</a><span class="sm:hidden">(Las cartas descriptivas son una guía para orientar los cursos de una manera planeada, aunque flexible, hacia un rumbo determinado y con un método definido (Haro, 1994).)</span>, el cual tomó como eje fundamental a los <strong>aprendizajes</strong> (que sustituyeron a los objetivos de aprendizaje) con el propósito de que el profesorado y estudiantado pudieran ubicar <strong>los logros esperados en cada una de las asignaturas</strong> y evitaran centrarse en abordar todos los temas y subtemas que contienen los programas.</p>
  <p class="text-lg my-5 font-bold">Así, el eje organizador de la unidad gira en torno a los aprendizajes que se busca que desarrolle el estudiantado y no en los contenidos temáticos, a diferencia de los modelos tradicionales de enseñanza.</p>
  <p>Un aprendizaje persigue propósitos de carácter declarativo, procedimental y actitudinal; “aprendizaje es lo que el alumno logra hacer (entiende, aplica, relaciona) con el contenido temático” (García, 2004: 12). Esto implica que los temas solamente son un punto de referencia y únicamente deben incluirse los estrictamente necesarios para sostener los aprendizajes propuestos. Aunque claro, tampoco se trata de prescindir de los temas, finalmente son parte de los aprendizajes</p>
  <p>A manera de ejemplo presentamos un extracto de los aprendizajes propuestos para la Unidad 1 de la asignatura Taller de Lectura y Redacción e Iniciación a la Investigación Documental I (CCH, 2016, pp. 19-22):</p>
  <div class="mx-auto max-w-screen-sm ">
    <img class="cursor-zoom-in" onclick="window.dialog1.showModal();" src="<?php echo ASSET_URL; ?>img/modulo-2/b4p05i01.webp" alt="Unidades TLRIID" />
    <p class="text-sm mt-3 text-center">Haz clic para agrandar la imagen 👆.</p>
  </div>
  <p class="my-10">Por otro lado, en el último proceso de revisión y ajuste de los programas de estudio que concluyó en 2024, la estructura de los mismos quedó conformada por los siguientes apartados:</p>
</section>
<div class="w-full my-4 relative z-0">
  <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
  </div>
  <div class="bg-slate-100 max-w-screen-md p-5 shadow-2xl relative z-10 mx-auto px-10 py-5">
    <ol class="lista-programas">
      <li>Índice</li>
      <li>Presentación de la materia</li>
      <ol>
        <li>Ubicación de la materia en el marco del mapa curricular</li>
        <li>Enfoque disciplinario y didáctico de la materia</li>
        <li>Concreción de la materia de los principios del Modelo Educativo del Colegio: aprender a aprender, aprender a hacer, aprender a ser</li>
        <li>Contribución al perfil del egresado</li>
        <li>Propósitos generales de la materia</li>
        <li>Panorama general de las unidades</li>
      </ol>
      <li>Presentación de la Asignatura</li>
      <li>Presentación de la Unidad</li>
      <li>Carta descriptiva: </li>
      <p>Título de la Unidad</p>
      <ul>
        <li>Tiempo</li>
        <li>Propósitos de la unidad</li>
        <li>Aprendizajes </li>
        <li>Temática</li>
        <li>Estrategias sugeridas</li>
        <li>Evaluación</li>
        <li>Referencias </li>
      </ul>
    </ol>
  </div>
</div>
<section>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>Descarga el documento <a href="https://www.cch.unam.mx/sites/default/files/planestudios/S_O_Areas_y_Deptos_2006.pdf" target="_blank">Orientación y Sentido de las Áreas del Plan de Estudios Actualizado</a> y <strong>lee</strong> el apartado referente al área a la que corresponde la materia que inscribiste.</li>
    <li>Lee el <a href="https://www.cch.unam.mx/programasestudio2024" target="_blank">Programa de Estudios</a> de la materia que inscribiste.</li>
    <li>A partir de tus lecturas, completa el siguiente Cuadro Comparativo. Descarga el <a target="_blank" href="<?php echo PATH_DOCS . 'Actividad1_formato_2024.docx'; ?>">formato</a> en el que deberás realizar tu actividad.</li>
    <li>Guarda tu archivo (.doc o .pdf) bajo el siguiente formato: Nombre_Apellido_Actividad01. Ejemplo: <strong>Victoria_García_Actividad01</strong></li>
    <li>
      <p>Sube tu archivo para que pueda ser revisado por tu impartidor (en formato PDF o JPG; recuerda que el peso máximo debe ser de 10 MB).</p>
      <ul class="ul-disc">
        <li>Da clic en <strong>Adjuntar</strong> y arrástralo al campo que se solicita.</li>
        <li>No olvides dar clic en <strong>Guardar</strong>, pues de otra manera tu archivo no se subirá correctamente.</li>
        <li>Si quieres hacer cambios da clic en <strong>Editar envío</strong> y después en <strong>Guardar cambios</strong>.</li>
      </ul>
    </li>
    <li>Consulta los criterios de evaluación de la actividad</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  include BASE_PATH . '/include/Actividad.php';
  renderActividad($ActividadContent, "Actividad 1 : La orientación y sentido de las áreas y el Programa de Estudios ");
  ?>
  <?php
  include BASE_PATH . '/include/ActividadIframe.php';
  renderActividadIframe('b2act1');
  ?>
</section>
<!-- Modales aca abajo -->
<dialog class="max-w-screen-lg mx-auto" id="dialog1">
  <img class="px-10 mx-auto" src="<?php echo ASSET_URL; ?>img/modulo-2/b4p05i01.webp" alt="Unidades TLRIID" />
  <p class="text-sm mt-5">Como se ha dicho, para conservar el sentido de “Aprendizaje relevante”, se sugiere que cada aprendizaje aborde más de un contenido temático. En el ejemplo propuesto se ve como si a cada aprendizaje correspondiera un tema, pero es porque presentamos el ejemplo parcialmente. En esta Unidad (Los textos y su diversidad) de TLRIID I, se proponen cinco aprendizajes y diez temas, sugerimos que se revise el ejemplo de la unidad completo en la siguiente <a href="https://www.cch.unam.mx/sites/default/files/actualizacion2012/avances_programas/TLRIID_I_IV.pdf" target="_blank">link</a></p>
  <button onclick="window.dialog1.close();" aria-label="close" class="x">❌</button>
</dialog>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>