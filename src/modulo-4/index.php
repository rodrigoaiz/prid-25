<?php
include_once __DIR__ . '/../config.php';
// Establecer el ID de la página aquí
$currentPageId = 22;
ob_start();
?>
<section class="pb-10">
  <div class="grid md:grid-cols-2 items-center gap-10 my-5 md:my-10">
    <article class="text-center bg-yellowown p-4 md:order-2">
      <span class="text-3xl text-darkown uppercase">Elaboración y presentación en video de un plan de clase
      </span>
    </article>
    <img class="md:order-1" src="<?php echo ASSET_URL . 'img/modulo-4/modulo_4_bloque_index.webp' ?>" alt="">
  </div>
  <div class="grid md:grid-cols-2 gap-x-4 md:gap-x-10">
    <article>
      <h3 class="text-orangeown">Objetivo</h3>
      <div class="bg-greenown/70 object-center h-full text-darkown p-5 flex items-center">
        <p class="text-2xl leading-relaxed">Diseñar, presentar y evaluar la planeación de una clase (a partir de la secuencia didáctica elaborada en el módulo anterior) para detectar sus alcances y limitaciones, con la finalidad de mejorar los procesos de enseñanza y aprendizaje en la materia o asignatura inscrita al PRID.</p>
      </div>
    </article>
    <article>
      <h3 class="text-orangeown">Temáticas</h3>
      <div class="bg-greenown/70 h-full text-darkown p-5 flex items-center">
        <ul class="ul-disc list-inside flex flex-col">
          <li>Diseño de una clase</li>
          <li>
            <p>Evaluación de la planeación de clase</p>
            <ul>
              <li>Correspondencia con los propósitos, aprendizajes y contenidos del programa de Estudios en cuestión.</li>
              <li>Organización de las actividades.</li>
              <li>Formas e instrumentos de evaluación.</li>
              <li>Pertinencia de los recursos y materiales.</li>
              <li>Fuentes documentales en las que se basa la planeación.</li>
            </ul>
          </li>
          <li>
            <p>Coevaluación de la planeación de clase</p>
            <ul>
              <li>Descripción y argumentación del plan de clase ante pares.</li>
            </ul>
          </li>
        </ul>
      </div>
    </article>
  </div>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
