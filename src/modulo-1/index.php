<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 0; // Establecer el ID de la página aquí
ob_start();
?>
<section class="mb-10">
  <div class="grid md:grid-cols-2 items-center gap-10 my-5 md:my-10">
    <article class="text-center bg-yellowown p-4 md:order-2">
      <span class="text-3xl text-darkown uppercase">Modelo Educativo del Colegio</span>
    </article>
    <img class="md:order-1" src="<?php echo ASSET_URL . 'img/modulo-1/bloque2.webp' ?>" alt="">
  </div>
  <div class="grid md:grid-cols-2 gap-x-4 md:gap-x-10">
    <article>
      <h3 class="text-orangeown">Objetivos</h3>
      <div class="bg-greenown/70 h-full text-darkown p-5">
        <ul class="ul-disc ml-5 flex flex-col gap-3">
          <li>Comprender los postulados del Modelo Educativo y el concepto de Cultura Básica.</li>
          <li>Determinar la importancia de la ética en el ejercicio de la docencia en el CCH e identificar los principales derechos y obligaciones de los profesores dentro de la UNAM y el CCH.</li>
          <li>Reflexionar sobre la propia práctica docente con base en los postulados del Modelo Educativo del CCH.</li>
        </ul>
      </div>
    </article>
    <article>
      <h3 class="text-orangeown">Temáticas</h3>
      <div class="bg-greenown/70 h-full text-darkown p-5">
        <ul class="ul-disc ml-5 flex flex-col gap-3">
          <li>Postulados</li>
          <li>Cultura Básica</li>
          <li>Ética y marco normativo de la docencia en la UNAM y el CCH</li>
          <li>Derechos y obligaciones (alumnado y profesorado)</li>
          <li>Autorreconocimiento de la práctica docente</li>
        </ul>
      </div>
    </article>
  </div>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
