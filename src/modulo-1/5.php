<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 5;
ob_start();
?>
<section>
  <div class="text-2xl pl-3 lg:px-10 mx-auto border-l-4 border-l-greenown max-w-screen-md my-5 lg:my-10">
    <span class="block italic">Lo que el maestro es, es más importante que lo que enseña.</span>
    <span class="block">Karl A. Menninger</span>
  </div>
  <p>El Modelo Educativo del Colegio sirve como marco de referencia y acción para organizar sus prácticas educativas. Así, a partir tanto de los documentos de creación del Colegio, como de los trabajos que la comunidad académica ha desarrollado a lo largo del tiempo, es posible perfilar un modelo de docencia institucional en donde el profesorado se caracteriza, entre otras cosas, por (García, 2016):</p>
</section>
<div class="grid xl:grid-cols-2 gap-5 px-5 my-10">
  <ol class="ol-number max-w-screen-md mx-auto text-pretty">
    <li>Realizar la función de guía y orientador, considerando las características, necesidades e intereses del alumnado;</li>
    <li>Fomentar la autonomía de las y los estudiantes y el desarrollo de habilidades que les permitan aprender por cuenta propia;</li>
    <li>Establecer relaciones democráticas con el estudiantado, sin que ello implique que las y los profesores pierdan su autoridad académica;</li>
    <li>Promover en el estudiantado el desarrollo de aprendizajes esenciales, y no saturarlos de información;</li>
    <li>Atender el enfoque didáctico y disciplinario de la materia y el área de conocimientos respectiva, así como vincular los aprendizajes de su materia con los de otras asignaturas;</li>
    <li>Retomar el programa de estudios como punto de partida para la planeación y desarrollo de sus clases.</li>
  </ol>
  <img class="mx-auto" src="<?php echo ASSET_URL ?>img/modulo-1/b1p05i01.webp" alt="Estudiantes CCH">
</div>
<section>
  <p>Para lograr lo anterior se requiere que además del dominio disciplinario y didáctico de la asignatura a impartir, las y los docentes desarrollen vocación, amor y compromiso con su quehacer. Ser docente tiene su parte de formación profesional y su lado ético. Quien está al frente de un aula se exhibe, como una persona experta en uno o varios temas y como ser humano; es decir, el estudiantado se percata de la sapiencia del profesorado y también observa su manera de conducirse en la vida.</p>
</section>
<ul class="list-none flex flex-wrap justify-center gap-x-10 gap-y-5 items-center p-5 my-10 text-xl  font-bold text-center text-white bg-greenown">
  <li>¿Qué hace enojar a mi maestro o maestra?</li>
  <li>¿Cuándo sonríe?</li>
  <li>¿Qué juzga o no tolera?</li>
  <li>¿Le importamos o nos ignora?</li>
  <li>¿Nos respeta y se da a respetar?</li>
  <li>¿Grita e insulta o habla y se comunica?</li>
  <li>¿Le gusta dar clases o no ha encontrado otra actividad mejor para llevar a cabo?</li>
</ul>
<section>
  <p class="text-lg font-black text-center mb-10">Éstas y otras preguntas son respondidas por las y los docentes, incluso sin proponérselo, porque la ética guía el accionar humano y, basado en su ética, el profesorado decide qué decir y cómo comportarse frente a al alumnado.</p>
  <p class="mt-10">En este sentido, es trascendental que la planta docente se reconozca como ejemplo a seguir (o no) en su accionar diario. El profesorado puede enseñar matemáticas, biología, filosofía, inglés o redacción, no obstante, igualmente muestra y hace que los y las estudiantes aprendan valores como: la solidaridad, la tolerancia, la inclusión, el respeto, la autonomía, el amor y la responsabilidad.</p>
  <div class="text-2xl pl-3 lg:px-10 mx-auto border-l-4 border-l-greenown max-w-screen-lg my-5 lg:my-10">
    <span class="block mb-10 font-bold">En palabras de Freire (1996, p.99; citado en Matus, 2013):</span>
    <span class="block italic">“De la misma manera en que no puedo ser profesor sin sentirme capacitado para enseñar correctamente y bien los contenidos de mi disciplina, tampoco puedo, por otro lado, reducir mi práctica docente a la mera enseñanza de esos contenidos. Ese es tan sólo un momento de mi actividad pedagógica. Tan importante como la enseñanza de los contenidos es mi testimonio ético al enseñarlos. Es la decencia con que lo hago. Es la preocupación científica revelada sin arrogancia, al contrario, con humildad. Es el respeto nunca negado al educando, a su saber “hecho de experiencia que busco superar junto a él”.</span>
  </div>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>