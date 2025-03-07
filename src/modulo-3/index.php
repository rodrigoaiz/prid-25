<?php
include_once __DIR__ . '/../config.php';
// Establecer el ID de la página aquí
$currentPageId = 17;
ob_start();
?>
<section class="pb-10">
  <div class="grid md:grid-cols-2 items-center gap-10 my-5 md:my-10">
    <article class="text-center bg-yellowown p-4 md:order-2">
      <span class="text-3xl text-darkown uppercase">Taller de planeación didáctica
      </span>
    </article>
    <img class="md:order-1" src="<?php echo ASSET_URL . 'img/modulo-3/index-bloque-3.webp' ?>" alt="">
  </div>
  <div class="grid md:grid-cols-2 gap-x-4 md:gap-x-10">
    <article>
      <h3 class="text-orangeown">Objetivo</h3>
      <div class="bg-greenown/70 object-center h-full text-darkown p-5 flex items-center">
        <p class="text-2xl leading-relaxed">Diseñar una secuencia didáctica de uno de los aprendizajes establecidos en una Unidad del programa de su materia (la inscrita en el PRID), acorde con los enfoques didáctico y disciplinario correspondientes, teniendo como referencia el Modelo Educativo del CCH, con la finalidad de mejorar la práctica docente.</p>
      </div>
    </article>
    <article>
      <h3 class="text-orangeown">Temáticas</h3>
      <div class="bg-greenown/70 h-full text-darkown p-5 flex items-center">
        <ul class="ul-disc list-inside flex flex-col">
          <li>Diferencia entre Secuencia y Estrategia Didáctica</li>
          <li>
            <p>Proceso de la elaboración de secuencias didácticas</p>
            <ul>
              <li>Título de la unidad</li>
              <li>Propósitos</li>
              <li>Aprendizajes</li>
              <li>Temáticas</li>
              <li>Secuencia de actividades</li>
              <li>Tiempo didáctico</li>
              <li>Materiales y recursos</li>
              <li>Propuestas de evaluación</li>
              <li>Fuentes de consulta</li>
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
