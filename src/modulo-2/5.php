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
  <p>Posteriormente, entre 2009 y 2016 se llevó a cabo un proceso de Actualización de los Programas de Estudio. Finalmente, en el ciclo escolar 2023-2024 se realizó el último proceso de Revisión y Ajuste de los Programas de Estudio</p>
  <p>Una de las características distintivas de los Programas del Colegio es que su <a class="tooltip-multiline tooltip-bottom-left" data-tooltip="Las cartas descriptivas son una guía para orientar los cursos de una manera planeada, aunque flexible, hacia un rumbo determinado y con un método definido (Haro, 1994).">carta descriptiva</a><span class="sm:hidden">(Las cartas descriptivas son una guía para orientar los cursos de una manera planeada, aunque flexible, hacia un rumbo determinado y con un método definido (Haro, 1994).)</span>, toma como eje fundamental a los aprendizajes (que sustituyen a los objetivos de aprendizaje) con el propósito de que el profesorado y el estudiantado ubiquen los logros esperados en cada una de las asignaturas y eviten centrarse en abordar todos los temas y subtemas que contienen los programas.</p>
  <p>Así, el eje organizador de la unidad gira en torno a los aprendizajes que se busca que desarrolle el estudiantado y no en los contenidos temáticos, a diferencia de los modelos tradicionales de enseñanza. </p>
  <p>Un aprendizaje persigue propósitos de carácter declarativo, procedimental y actitudinal; “aprendizaje es lo que el alumno logra hacer (entiende, aplica, relaciona) con el contenido temático” (García, 2004: 12). Esto implica que los temas solamente son un punto de referencia y únicamente deben incluirse los estrictamente necesarios para sostener los aprendizajes propuestos. Aunque claro, tampoco se trata de prescindir de los temas, finalmente son parte de los aprendizajes. </p>
  <p>A manera de ejemplo presentamos un extracto de los aprendizajes propuestos para la Unidad 1 de la asignatura Taller de Lectura y Redacción e Iniciación a la Investigación Documental I (CCH, 2024, pp. 22):</p>


  <div class="overflow-x-auto my-8">
    <table class="w-full border-collapse border border-gray-400">
      <thead>
        <tr class="bg-gray-500 text-white">
          <th class="border border-gray-400 p-3 text-left font-bold">Aprendizajes</th>
          <th class="border border-gray-400 p-3 text-left font-bold">Temática</th>
          <th class="border border-gray-400 p-3 text-left font-bold">Estrategias sugeridas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border border-gray-400 p-4 bg-gray-100 align-top">
            <p class="font-bold mb-3">El alumnado:</p>
            <p><strong>1.</strong> Identifica los elementos integrantes de la situación comunicativa a partir de la lectura de diversos textos orales y escritos y de la comprensión del propósito comunicativo.</p>
          </td>
          <td class="border border-gray-400 p-4 bg-gray-200 align-top">
            <p class="font-bold mb-2">Situación comunicativa</p>
            <p class="mb-3">(texto, enunciador, enunciatario, referente, propósito y contexto)</p>
            
            <p class="font-bold mb-2">Oralidad y escritura:</p>
            <ul class="list-disc pl-5 space-y-1">
              <li>Características de la expresión oral.</li>
              <li>Características de la expresión escrita.</li>
            </ul>
          </td>
          <td class="border border-gray-400 p-4 bg-gray-100 align-top">
            <p class="font-bold mb-3">Actividades para el alumnado:</p>
            <ul class="list-disc pl-5 space-y-3">
              <li>Con la guía del profesorado, lee diversos textos autorreferenciados.</li>
              <li>Identifica, con la orientación del profesorado, los elementos de la situación comunicativa de diversos textos leídos, para determinar la relevancia e interacción de cada uno de dichos elementos.</li>
              <li>Muestra productos audiovisuales acerca de un tema de su interés o presentándose ante sus pares, para la práctica de su expresión oral y la escucha activa.</li>
              <li>Redacta un párrafo o comentario breve que considere la situación comunicativa de su texto acerca de sus impresiones al recibir los resultados de admisión al bachillerato. Después, organizado en equipos, lee los textos de sus pares, y comenta reflexivamente acerca del sentido de pertenencia a la Universidad.</li>
              <li>Elabora, en plenaria y junto al profesorado, un cuadro de comparación y contraste entre la expresión oral y la expresión escrita.</li>
              <li>Formula, oralmente o por escrito en un organizador gráfico, las conclusiones sobre la relevancia y lo indispensables que son los componentes de la situación comunicativa.</li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>
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
    <li>Descarga el documento <a href="https://www.cch.unam.mx/sites/default/files/OrientacionSentidoAreas_2025.pdf" target="_blank">Orientación y Sentido de las Áreas 2025</a> y lee el apartado referente al área a la que corresponde la materia que inscribiste.</li>
    <li>Lee el <a href="https://www.cch.unam.mx/programasestudio" target="_blank">Programa de Estudios 2024</a> de la materia que inscribiste.</li>
    <li>A partir de tus lecturas, completa el siguiente Cuadro Comparativo. Descarga el <a target="_blank" href="<?php echo PATH_DOCS . 'Actividad1_formato_2025.docx'; ?>">formato</a> en el que deberás realizar tu actividad.</li>
    <li>Guarda tu archivo (.doc o .pdf) bajo el siguiente formato: Nombre_Apellido_Actividad01. Ejemplo: <strong>Victoria_García_Actividad01</strong></li>
    <li>
      <p>Sube tu archivo para que pueda ser revisado por tu impartidor (en formato PDF o JPG; recuerda que el peso máximo debe ser de 10 MB).</p>
      <ul class="ul-disc">
        <li>Da clic en <strong>Adjuntar</strong> y arrástralo al campo que se solicita.</li>
        <li>No olvides dar clic en <strong>Guardar</strong>, pues de otra manera tu archivo no se subirá correctamente.</li>
        <li>Si quieres hacer cambios da clic en <strong>Editar envío</strong> y después en <strong>Guardar cambios</strong>.</li>
      </ul>
    </li>
    <li>Consulta los <a target="_blank" href="<?php echo PATH_DOCS . 'Actividad1_Rubrica.pdf'; ?>">criterios de evaluación</a> de la actividad.</li>
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
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>
