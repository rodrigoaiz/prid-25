<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 10;
ob_start();
?>
<section>
  <p>La noción de <a class="tooltip-multiline tooltip-bottom-left" data-tooltip="Conjunto de conocimientos, habilidades y actitudes indispensables que permiten a un bachiller comprender los principales fenómenos de la sociedad y la naturaleza, y adquirir nuevos aprendizajes.">cultura básica</a> <span class="sm:hidden">(conjunto de conocimientos, habilidades y actitudes indispensables que permiten a un bachiller comprender los principales fenómenos de la sociedad y la naturaleza, y adquirir nuevos aprendizajes)</span> es un componente fundamental del Modelo Educativo del Colegio y hace referencia al conjunto de conocimientos, habilidades y actitudes indispensables que permiten a un bachiller comprender los principales fenómenos sociales y naturales, así como adquirir nuevos aprendizajes. </p>
  <p class="text-xl">La concepción del Colegio como un bachillerato de cultura básica ofrece dos ventajas importantes: </p>
  <ol class="ol-number">
    <li><strong>Permite centrarse en los contenidos esenciales de la enseñanza y trascender el enciclopedismo</strong>. Se reconoce como absurda la “pretensión de abarcar en la enseñanza, aunque sea en forma de introducción y esbozo, todo el conocimiento logrado por la cultura occidental” (DGCCH, 2006; p.7). Contrariamente, se propone realizar una selección de los contenidos que resulten esenciales.</li>
    <li><strong>Promueve la interdisciplina</strong>. Se fomenta que los y las estudiantes reconozcan las particularidades de las disciplinas, y al mismo tiempo identifiquen las similitudes y/o relaciones entre ellas.</li>
  </ol>
  <p>El Plan de Estudios del CCH estructura las asignaturas en cuatro áreas de conocimiento: <strong>Ciencias Experimentales</strong>, <strong>Histórico-Social</strong>, <strong>Talleres de Lenguaje y Comunicación</strong> y <strong>Matemáticas</strong>. Las primeras corresponden a los dos tipos de acercamiento a la realidad que rodea al hombre concreto: el de las ciencias naturales y el de las ciencias sociales. Por otro lado, se encuentran los dos tipos de lenguajes que se manifiestan a través de sistemas de signos variados y numerosos: la lengua y las matemáticas.</p>
  <!--   <button class="primary" onclick="window.dialog1.showModal();">Open Dialog</button> -->
  <p class="text-2xl leading-relaxed">Cada Área agrupa un conjunto de materias que comparten enfoques y métodos, con implicaciones en su abordaje didáctico (CCH, 1996). <strong>Haz clic para conocerlas mejor</strong>: 👇</p>
</section>
<div class="w-full bg-greenown/30 py-6 my-5">
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 max-w-screen-md mx-auto text-center">
    <div class="aspect-square">
      <img src="<?php echo PATH_ICONS . 'area-experimentales.svg'; ?>" class="cursor-pointer aspect-square	h-full max-w-full" onclick="window.dialog1.showModal();" alt="ciencias experimentales">
      <p class="areas-iconos">Ciencias experimentales</p>
    </div>
    <div class="aspect-square">
      <img src="<?php echo PATH_ICONS . 'area-historico.svg'; ?>" class="cursor-pointer aspect-square	h-full max-w-full" onclick="window.dialog2.showModal();" alt="histórico-social">
      <p class="areas-iconos mt-2">Histórico-social</p>
    </div>
    <div class="aspect-square">
      <img src="<?php echo PATH_ICONS . 'area-talleres.svg'; ?>" class="cursor-pointer aspect-square	h-full max-w-full" onclick="window.dialog3.showModal();" alt="talleres de lenguaje y comunicación">
      <p class="areas-iconos mt-2">Talleres</p>
    </div>
    <div class="aspect-square">
      <img src="<?php echo PATH_ICONS . 'area-matematicas.svg'; ?>" class="cursor-pointer aspect-square	h-full max-w-full" onclick="window.dialog4.showModal();" alt="matematicas">
      <p class="areas-iconos">Matemáticas</p>
    </div>
  </div>
</div>
<section>
  <h3>Orientación y Sentido de las Áreas</h3>
  <p>Como su nombre lo indica, el documento <em>Orientación y Sentido de las Áreas del Plan de Estudios Actualizado</em>, publicado en 2006, describe ampliamente la orientación disciplinaria de las Áreas y su sentido educativo.</p>
  <p>La intención del documento fue dotar a las áreas académicas de los aspectos teórico-metodológicos que las articulan como grandes campos del saber científico y humanístico, así como proveer de elementos conceptuales y epistemológicos a las distintas disciplinas que representan las materias del mapa curricular. También se pretendió revisar los métodos y las formas de trabajo para incidir en el mejoramiento de los aprendizajes de los alumnos.</p>
  <p>Cabe aclarar que desde el año 2020, profesoras y profesores organizados en Seminarios centrales por área, han trabajado en la actualización del documento OSA. No obstante, hasta el momento la nueva versión del documento no ha sido aprobada por las instancias correspondientes.</p>
</section>

<!-- Modales aca abajo -->
<dialog class="w-fit mx-auto" id="dialog1">
  <h2>Ciencias Experimentales </h2>
  <p>Comprende las asignaturas en las que se busca que los y las estudiantes sean capaces de elaborar explicaciones basadas en la evidencia científica de los fenómenos naturales que ocurren en su medio o en su propio organismo, así como que valoren el desarrollo tecnológico, su uso en la vida diaria y el impacto ambiental derivado del mismo.</p>
  <p>El tratamiento didáctico de las asignaturas de esta área debe propiciar la comprensión de que el conocimiento científico se encuentra en constante evolución y está vinculado con los aspectos sociales que dan contexto y sentido a los trabajos de investigación realizados. Para lograr lo anterior, es necesario implementar situaciones de enseñanza en las que se plantee al estudiantado problemáticas específicas de su interés y se realicen actividades de investigación documental y experimental sujetas a la reflexión.</p>
  <button onclick="window.dialog1.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog class="w-fit mx-auto" id="dialog2">
  <h2>Histórico-Social </h2>
  <p>El sentido de esta área consiste en que el estudiantado sea capaz de comprender la sociedad en la que vive y pueda enfrentar de una mejor manera los problemas del presente y el futuro. Para ello, las asignaturas que la componen pretenden iniciarlo en el manejo de las metodologías propias de la Historia, las Ciencias Sociales y la Filosofía.</p>
  <p>El estudio de la sociedad implica un profundo compromiso con el pensamiento crítico y con él se podrá comprender la complejidad de la vida humana en los diversos elementos que la articulan: la economía, la política, las relaciones entre los grupos sociales y las expresiones culturales en su dimensión histórica (pasado-presente-futuro).</p>
  <button onclick="window.dialog2.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog class="w-fit mx-auto" id="dialog3">
  <h2>Talleres de Lenguaje y Comunicación </h2>
  <p>Las materias que agrupa esta área promueven el desarrollo de las habilidades que permiten a las y estudiantes entender, producir y emplear en forma adecuada los sistemas simbólicos para comunicarse. Dentro de estos sistemas se incluyen: la lengua materna, una lengua extranjera (inglés o francés), y los sistemas de signos auditivos y visuales.</p>
  <p>La enseñanza de estas asignaturas debe orientarse de forma que permita que las y los jóvenes desarrollen la competencia comunicativa, la cual comprende un amplio conjunto de habilidades, procesos y conocimientos lingüísticos, retóricos y discursivos que permiten utilizar con eficacia consciente la lengua. Lo anterior requiere que los contenidos sean presentados de manera contextualizada, en relación con una situación concreta o real que debe resolverse a través de textos auténticos.</p>
  <button onclick="window.dialog3.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog class="w-fit mx-auto" id="dialog4">
  <h2>Matemáticas</h2>
  <p>El aprendizaje de las asignaturas comprendidas en esta área persigue como objetivos centrales: proporcionar al estudiantado los elementos necesarios para interpretar los aspectos lógicos y numéricos de la realidad; promover la toma de decisiones fundamentadas, así como la comprensión y el manejo adecuado de los avances tecnológicos.</p>
  <p>La enseñanza de las Matemáticas debe permitir que el estudiantado comprenda que se trata de una ciencia en constante desarrollo, cuyos conocimientos se construyen a partir de la formalización, sistematización y abstracción de métodos derivados de la solución de problemas concretos.</p>
  <button onclick="window.dialog4.close();" aria-label="close" class="x">❌</button>
</dialog>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
