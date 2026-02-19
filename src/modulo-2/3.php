<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 11;
ob_start();
?>
<section>
  <p>La noción de <a class="tooltip-multiline tooltip-bottom-left" data-tooltip="Conjunto de conocimientos, habilidades y actitudes indispensables que permiten a un bachiller comprender los principales fenómenos de la sociedad y la naturaleza, y adquirir nuevos aprendizajes.">cultura básica</a> <span class="sm:hidden">(conjunto de conocimientos, habilidades y actitudes indispensables que permiten a un bachiller comprender los principales fenómenos de la sociedad y la naturaleza, y adquirir nuevos aprendizajes)</span> es un componente fundamental del Modelo Educativo del Colegio y hace referencia al conjunto de conocimientos, habilidades y actitudes indispensables que permiten a un bachiller comprender los principales fenómenos sociales y naturales, así como adquirir nuevos aprendizajes. </p>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-2/b2p2e6.webp';
  renderImageComponent($imageSrc, 'justify-start');
  ?>
  <p class="text-xl">La concepción del Colegio como un bachillerato de cultura básica ofrece dos ventajas importantes: </p>
  <ol class="ol-number">
    <li><strong>Permite centrarse en los contenidos esenciales de la enseñanza y trascender el enciclopedismo</strong>. Se reconoce como absurda la “pretensión de abarcar en la enseñanza, aunque sea en forma de introducción y esbozo, todo el conocimiento logrado por la cultura occidental” (DGCCH, 2006; p.7). Contrariamente, se propone realizar una selección de los contenidos que resulten esenciales.</li>
    <li><strong>Promueve la interdisciplina</strong>. Se fomenta que los y las estudiantes reconozcan las particularidades de las disciplinas, y al mismo tiempo identifiquen las similitudes y/o relaciones entre ellas.</li>
  </ol>
  <p>El Plan de Estudios del CCH estructura las asignaturas en cuatro áreas de conocimiento: <strong>Ciencias Experimentales</strong>, <strong>Histórico-Social</strong>, <strong>Talleres de Lenguaje y Comunicación</strong> y <strong>Matemáticas</strong>. Las primeras corresponden a los dos tipos de acercamiento a la realidad que rodea al ser humano: el de las ciencias naturales y el de las ciencias sociales. Por otro lado, se encuentran los dos tipos de lenguajes que se manifiestan a través de sistemas de signos variados y numerosos: la lengua y las matemáticas.</p>
  <!--   <button class="primary" onclick="window.dialog1.showModal();">Open Dialog</button> -->
  <p class="text-2xl leading-relaxed">Cada Área agrupa un conjunto de materias que comparten aspectos epistemológicos, enfoques y métodos, con implicaciones en su abordaje didáctico. <strong>Haz clic para conocerlas mejor</strong>: 👇</p>
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
  <h3 class="font-bold">Orientación y Sentido de las Áreas 2025</h3>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full justify-center items-center my-10">
    <div class="md:col-span-2">
      <p>De manera complementaria al Plan de Estudios, el Colegio cuenta con un documento denominado <em>Orientación y Sentido de las Áreas</em> en el cual se describe ampliamente la orientación disciplinaria de cada una de las cuatro Áreas académicas que integran el Plan de Estudios y su sentido educativo.</p>
      <p>La intención del documento es resaltar los aspectos teórico-metodológicos que articulan a las áreas académicas como grandes campos del saber científico y humanístico, así como proveer de elementos conceptuales y epistemológicos a las distintas disciplinas que representan las materias del mapa curricular. También se pretende revisar los métodos y las formas de trabajo más adecuadas en cada caso, para incidir en el mejoramiento de los aprendizajes del alumnado.</p>
    </div>
    <img src="<?php echo ASSET_URL; ?>img/modulo-2/b2p2e5.webp" alt="Profesores CCH" />
  </div>
  <p>Cabe aclarar que la primera versión de este documento se publicó en el año 2006, y en 2025 fue aprobada por el H. Consejo Técnico del Colegio la versión actualizada 2025.</p>
  <p>Por otro lado, existen dos asignaturas obligatorias, sin valor curricular, que forman parte del Plan de Estudios pero no se ubican en ninguna de las cuatro áreas de conocimiento, ya que tienen un carácter transversal, en tanto contribuyen a mejorar el aprendizaje, el desarrollo de conocimientos y habilidades, así como la convivencia escolar en todas las asignaturas del mapa curricular.</p>
  <p>En el caso de la asignatura de Educación Física, se busca impulsar la obtención de una cultura que promueva en el alumnado hábitos permanentes relacionados con la actividad física sistematizada. Se fomentan actitudes y habilidades necesarias para que, por sí mismo, el alumnado se apropie de conocimientos, desarrolle habilidades y asuma valores desde una actitud crítica (UNAM, 2024) como parte de su formación integral, ya que contribuye al fortalecimiento de la salud física y mental, así como a la prevención de riesgos, el manejo asertivo de las emociones y la vinculación del cuerpo con el entorno, a través de la convivencia deportiva y recreativa (UNAM, 2026a).</p>
  <p>Por su parte, la asignatura de Igualdad de Género surge como respuesta a la problemática de desigualdad de género a nivel nacional y mundial. Se pretende que el estudiantado adquiera herramientas que le permitan modificar prácticas de conducta estereotipadas y situaciones que fomenten la desigualdad. De este modo, se pretende contribuir en la disminución de los problemas de violencia hacia las mujeres y disidencias sexo-genéricas, la discriminación y la violencia escolar.</p>
</section>

<!-- Modales aca abajo -->
<dialog class="w-fit mx-auto" id="dialog1">
  <h2>Ciencias Experimentales </h2>
  <p>La función educativa del Área de Ciencias Experimentales es proporcionar al alumnado elementos que le brinden una cultura básica del conocimiento científico, tecnológico y del cuidado de sí y de su entorno, con una perspectiva sustentable. Estos conocimientos permitirán a las y los egresados del Colegio, interactuar con su entorno en forma más creativa, responsable, informada y crítica, además de capacitarlos para continuar estudios superiores.</p>
  <p>El enfoque didáctico del Área es congruente con el Modelo Educativo del Colegio de Ciencias y Humanidades, al proponer actividades de aprendizaje en las que el alumnado sea el protagonista en la construcción de sus conocimientos, en un proceso colaborativo y de aprendizaje autónomo, donde su trabajo personal se vea enriquecido y orientado por el profesorado y apoyado por sus pares.</p>
  <p>Dentro del enfoque disciplinario del Área, se contempla el conocimiento científico como un producto cultural, derivado de la interacción social entre humanos, por eso se dice que la ciencia es una actividad humana, la cual se enmarca en un momento histórico, dentro de un contexto social, económico y cultural de la época en que surge. En este sentido, el conocimiento científico es provisional. Asimismo, se considera que la ciencia es multifacética y dinámica, lejana a ser vista como una verdad absoluta, pues lo que es cierto en determinado contexto histórico puede no serlo en otro (Fara, 2014; citado en UNAM, 2026c).</p>
  <button onclick="window.dialog1.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog class="w-fit mx-auto" id="dialog2">
  <h2>Histórico-Social </h2>
  <p>La naturaleza del Área Histórico-Social reconoce al ser humano como sujeto histórico-social cuyo actuar deja huella, se reafirma en el presente e incide en la realidad de manera creativa y productiva. Desde ellas, se reconoce que en toda sociedad pasada y presente existen proyectos históricos distintos, y asume actitudes que le permiten convivir en sociedad y con la naturaleza.</p>
  <p>El enfoque didáctico del Área Histórico-Social, en congruencia con el Modelo Educativo del Colegio, es una propuesta que sugiere una aproximación, a través de propósitos de aprendizaje, a nociones que enfatizan la experiencia y el proceso. Resulta fundamental que se organicen caminos estratégicos que permitan al alumnado plantearse preguntas y descubrir los objetos de aprendizaje de manera ordenada, sistemática y reflexiva. Para ello, se propone el curso-taller, definido como un trabajo grupal de discusión en el que se enfatizan aproximaciones problematizadoras de los asuntos históricos, sociales y filosóficos, y en donde el alumnado tiene un papel activo y crítico en el proceso de aprendizaje; mientras que el profesorado es guía, facilitador y mediador del conocimiento. Las estrategias de aprendizaje, por su parte, impulsan procesos en los que el alumnado participa de manera colaborativa en la estructuración de conocimientos.</p>
  <p>El enfoque disciplinario de Historia la concibe como una disciplina que estudia al ser humano como ser social en su devenir espacio-temporal. La Historia permite a los individuos que la estudian pensar alternativas a viejos y nuevos problemas, posibilitando el actuar consciente en la transformación del mundo. Su enseñanza-aprendizaje contribuye a formar el pensamiento del alumnado a partir de aproximaciones y explicaciones tentativas en torno a la historicidad, al tiempo en que construyen conocimientos que les permiten reconocerse como seres históricos, adquirir conciencia de su papel y ser capaces de actuar con libertad y responsabilidad en la construcción de un mundo mejor (UNAM, 2026c). </p>
  <button onclick="window.dialog2.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog class="w-fit mx-auto" id="dialog3">
  <h2>Talleres de Lenguaje y Comunicación </h2>
  <p>Las materias que agrupa esta área promueven el desarrollo de las habilidades que permiten a las y los estudiantes entender, producir y emplear en forma adecuada los sistemas simbólicos para comunicarse. Dentro de estos sistemas se incluyen: la lengua materna, una lengua extranjera (inglés o francés), y los sistemas de signos auditivos y visuales.</p>
  <p>La enseñanza de estas asignaturas debe orientarse de forma que permita que las y los jóvenes desarrollen la competencia comunicativa, la cual comprende un amplio conjunto de habilidades, procesos y conocimientos lingüísticos, retóricos y discursivos que permiten utilizar con eficacia consciente la lengua. Lo anterior requiere que los contenidos sean presentados de manera contextualizada, en relación con una situación concreta o real que debe resolverse a través de textos auténticos.</p>
  <button onclick="window.dialog3.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog class="w-fit mx-auto" id="dialog4">
  <h2>Matemáticas</h2>
  <p>El objeto de estudio de las Matemáticas son las relaciones cuantitativas y las formas espaciales que se abstraen de la realidad, esto es, que han sido despojadas de todo lo concreto para ser estudiadas sólo en cuanto a su magnitud y forma, alcanzando grados más altos de abstracción.</p>
  <p>El enfoque disciplinario de las Matemáticas en el Colegio de Ciencias y Humanidades debe enfatizar su caracterización como una actividad creativa que descubre conceptos y procedimientos y, que requiere, en otro estadio, de la validación lógica. </p>
  <p>El enfoque didáctico consiste en que el profesorado incide en una serie de orientaciones que detonen la actividad intelectual necesaria para la resolución de problemas en sus etapas (no lineales) de: comprensión del problema, elaboración de un plan, ejecución de éste y retrospección, pretendiendo con esto que el alumnado gane autonomía (UNAM, 2026c).</p>
  <button onclick="window.dialog4.close();" aria-label="close" class="x">❌</button>
</dialog>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
