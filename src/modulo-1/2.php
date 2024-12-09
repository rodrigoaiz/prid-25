<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 2;
ob_start();
?>
<section>

  <p>El CCH nace el 26 de enero de 1971, fecha en que el Consejo Universitario de la UNAM aprobó su creación. En esa época el rector de nuestra Máxima Casa de Estudios era el doctor <strong>Pablo González Casanova</strong>.</p>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-1/b1p02i05.webp';
  renderImageComponent($imageSrc, 'justify-end');
  ?>
  <p>En aquellos años la creación del CCH coincide con la necesidad social de que un mayor número de jóvenes mexicanos, que vivían en el área metropolitana, tuvieran la oportunidad de contar con una educación a nivel medio superior.</p>
  <p>Al mismo tiempo, el Colegio surge como una opción educativa con una nueva perspectiva curricular y didáctica, que buscaba atender las dificultades del proceso de enseñanza-aprendizaje identificadas en aquél entonces.</p>
  <div class="max-w-screen-md mx-auto">
    <p class="text-xl">Para comprender lo que hoy se conoce como CCH, te presentamos algunos de los acontecimientos más relevantes de su historia:</p>
  </div>
  <div class="text-center mt-10">
    <p class="text-2xl leading-relaxed">Por lo anterior, el CCH tiene una enorme responsabilidad educativa. La formación que los jóvenes reciben en el bachillerato es trascendental para su vida personal y para el desarrollo del país.</p>
  </div>
</section>
<div class="w-full my-10 relative z-0">
  <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
  </div>
  <img class="z-10 relative translate-x-24 max-w-72" src="<?php echo ASSET_URL . 'img/modulo-1/contxt2.webp' ?>" alt="">
</div>
<section>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-10 my-5 items-center">
    <article class="col-span-2">
      <p>De acuerdo con estimaciones de la Comisión Económica para América Latina y el Caribe (CEPAL, 2010), la conclusión de este tipo educativo constituye el umbral necesario para estar fuera de la pobreza, pues permite acceder a mejores oportunidades de empleo. Asimismo, se ha demostrado que las personas que concluyen el bachillerato pueden acceder a una mejor calidad de vida pues desarrollan herramientas para participar en diversas esferas de la vida social y ejercer distintos derechos sociales (INEE, 2011). Por ejemplo, según datos del Instituto Nacional de Estadística y Geografía (INEGI), del total de estudiantes que concluyen su bachillerato, el 78.3% de ellos ha tenido cuando menos un trabajo (INEGI, 2019).</p>
    </article>
    <img src="<?php echo ASSET_URL . 'img/modulo-1/contxt3.webp' ?>" alt="">
  </div>
  <div class="text-center mt-10">
    <p class="text-2xl leading-relaxed">Los retos y desafíos para lograr la tarea anterior son significativos y numerosos. No obstante, hoy, como hace 53 años, la tarea de “educar más y mejor a un mayor número de mexicanos” sigue vigente.</p>
  </div>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
