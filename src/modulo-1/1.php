<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 1;
ob_start();
?>
<section>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-10 my-5 items-center">
    <article class="col-span-2">
      <p>El bachillerato universitario de la UNAM, integrado por la Escuela Nacional Preparatoria (ENP) y el Colegio de Ciencias y Humanidades (CCH), atiende a una población de 107 ,061 jóvenes, de los cuales 33,378 son de primer ingreso. El Colegio acoge en sus cinco planteles a 17, 803 alumnos y alumnas, lo que representa un 53.33% , quienes son atendidos por 3, 095 docentes (Estadística UNAM, 2024 ).</p>
      <p>Ambos subsistemas constituyen referentes en la educación media superior a nivel nacional. La creación de la ENP hace más de 150 años representa el origen del bachillerato mexicano.</p>
      <div class="bg-bluelightown p-5">
        <p class="text-xl">Por su parte, el surgimiento del CCH hace poco más de 50 años , estableció un parteaguas debido al carácter innovador de su modelo educativo, cuya pertinencia y vigencia han sido refrendadas en diferentes momentos.</p>
      </div>
    </article>
    <img src="<?php echo ASSET_URL . 'img/modulo-1/contxt1.webp' ?>" alt="">
  </div>
  <div class="text-center mt-10">
    <p class="text-2xl leading-relaxed">Por lo anterior, el CCH tiene una enorme responsabilidad educativa. La formación que las y los jóvenes reciben en el bachillerato es trascendental para su vida personal y para el desarrollo del país.</p>
  </div>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-1/contxt2.webp';
  renderImageComponent($imageSrc, 'justify-start');
  ?>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-10 my-5 items-center">
    <article class="col-span-2">
      <p>De acuerdo con estimaciones de la Comisión Económica para América Latina y el Caribe (CEPAL, 2010), la conclusión de este tipo educativo constituye el umbral necesario para estar fuera de la pobreza, pues permite acceder a mejores oportunidades de empleo. Asimismo, se ha demostrado que las personas que concluyen el bachillerato pueden acceder a una mejor calidad de vida pues desarrollan herramientas para participar en diverso s espacios y ejercer sus derechos sociales (INEE, 2011). Por ejemplo, según datos del Instituto Nacional de Estadística y Geografía (INEGI), del total de estudiantes que concluyen su bachillerato, el 78.3% ha tenido cuando menos un trabajo (INEGI, 2019).</p>
    </article>
    <img src="<?php echo ASSET_URL . 'img/modulo-1/contxt3.webp' ?>" alt="">
  </div>
  <div class="text-center mt-10">
    <p class="text-2xl leading-relaxed">Los retos y desafíos para lograr la tarea anterior son significativos y numerosos. No obstante, hoy, como hace 54 años, la tarea de “educar más y mejor a un mayor número de mexicanos” sigue vigente.</p>
  </div>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
