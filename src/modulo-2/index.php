<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 8; // Establecer el ID de la página aquí
ob_start();
?>
<section class="pb-10">
  <div class="grid md:grid-cols-2 items-center gap-10 my-5 md:my-10">
    <article class="text-center bg-yellowown p-4 md:order-2">
      <span class="text-3xl text-darkown uppercase">La metodología didáctica de las Áreas del Colegio
      </span>
    </article>
    <img class="md:order-1" src="<?php echo ASSET_URL . 'img/modulo-2/index-bloque-2.webp' ?>" alt="">
  </div>
  <div class="grid md:grid-cols-2 gap-x-4 md:gap-x-10">
    <article>
      <h3 class="text-orangeown">Objetivos</h3>
      <div class="bg-greenown/70 object-center h-full text-darkown p-5 flex items-center">
        <ul class="ul-disc list-inside flex flex-col">
          <li>Conocer el documento Orientación y Sentido de las Áreas, el enfoque didáctico y disciplinario de su Área.</li>
          <li>Comprender los fundamentos del enfoque constructivista en la educación y su concordancia con el Modelo Educativo del Colegio.</li>
          <li>Analizar los elementos del Programa Indicativo para diseñar la propuesta de una unidad del Programa Operativo acorde a su materia o asignatura.</li>
        </ul>
      </div>
    </article>
    <article>
      <h3 class="text-orangeown">Temáticas</h3>
      <div class="bg-greenown/70 h-full text-darkown p-5 flex items-center">
        <ul class="ul-disc list-inside flex flex-col">
          <li>
            <p>La Orientación y Sentido del Área y su vínculo con el Plan de Estudios.</p>
            <ul>
              <li>Enfoque disciplinario y didáctico del área.</li>
              <li>Enfoque disciplinario y didáctico de la materia.</li>
            </ul>
          </li>
          <li>El constructivismo en la educación y el Modelo Educativo del CCH</li>
        </ul>
      </div>
    </article>
  </div>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
