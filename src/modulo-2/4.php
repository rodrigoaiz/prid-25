<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 12;
ob_start();
?>
<section>
  <p>De manera adicional a las Áreas, existen tres Departamentos Académicos en el Colegio en los que se ofrecen opciones de formación extracurricular para el estudiantado: </p>
</section>
<div class="w-full my-4 relative z-0">
  <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
  </div>
  <div class="max-w-screen-xl grid grid-cols-3 gap-5 relative z-10 mx-auto">
    <div class="bg-orangeown/35 text-slate-900 p-5 hover:scale-105 group ease-in-out transition-all">
      <h3 class="uppercase text-xl">Departamento de Difusión Cultural</h3>
      <p>Proporciona a las y los alumnos formación cultural por medio de dos vías: la participación en talleres y/o la asistencia a eventos de distintas manifestaciones artísticas (música, danza, teatro, entre otras). </p>
    </div>
    <div class="bg-orangeown/35 text-slate-900 p-5 hover:scale-105 group ease-in-out transition-all">
      <h3 class="uppercase text-xl">Departamento de Educación Física</h3>
      <p>Tiene como objetivo promover entre la comunidad educativa en general, y el alumnado en particular, estilos de vida saludable. Para ello, se ofrece la clase de Educación Física cuatro horas a la semana, durante un semestre, al estudiantado del primer año. Además, quienes así lo decidan, tienen la posibilidad de practicar, a lo largo de su estancia en el Colegio, distintas disciplinas deportivas (fútbol, baloncesto, voleibol, entre otras). De igual modo, las personas de la comunidad pueden participar en alguna de las actividades complementarias ofrecidas (carreras, concursos, acondicionamiento físico integral, entre otras).</p>
    </div>
    <div class="bg-orangeown/35 text-slate-900 p-5 hover:scale-105 group ease-in-out transition-all">
      <h3 class="uppercase text-xl">Departamento de Opciones Técnicas</h3>
      <p>Su objetivo es ofrecer al estudiantado que así lo desee, una capacitación y formación específica para el trabajo. Actualmente se cuenta con una oferta de 20 programas de Estudios Técnicos Especializados (ETE). /p>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>