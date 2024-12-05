<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 1;
ob_start();
?>
  <section class="max-w-screen-lg">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-10 my-5 items-center">
      <article class="col-span-2">
        <p>El bachillerato universitario atiende a una población de 106,863 jóvenes, de los cuales 33,992 son de primer ingreso. El Colegio de Ciencias y Humanidades acoge en sus cinco planteles a casi un 54%, lo que corresponde a 56,990 alumnos y alumnas, quienes son atendidos por 3, 096 docentes (cifras de 2023).</p>
        <p>Ambos subsistemas constituyen referentes en la educación media superior a nivel nacional. La creación de la ENP hace más de 150 años representa el origen del bachillerato mexicano.</p>
        <div class="bg-bluelightown p-5">
          <p class="text-xl">Por su parte, el surgimiento del CCH hace 53 años, estableció un parteaguas debido al carácter innovador de su modelo educativo, cuya pertinencia y vigencia han sido refrendadas en diferentes momentos.</p>
        </div>
      </article>
      <img src="<?php echo ASSET_URL . 'img/modulo-1/contxt1.webp' ?>" alt="">
    </div>
    <p class="font-bold">Por lo anterior, el CCH tiene una enorme responsabilidad educativa. La formación que los jóvenes reciben en el bachillerato es trascendental para su vida personal y para el desarrollo del país.</p>
  </section>
  <div class="w-full my-10 relative">
    <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
    </div>
    <img class="z-10 relative translate-x-10 max-w-72" src="<?php echo ASSET_URL . 'img/modulo-1/contxt2.webp' ?>" alt="">
  </div>
  <section class="max-w-screen-lg">
    <p>De acuerdo con estimaciones de la Comisión Económica para América Latina y el Caribe (CEPAL, 2010), la conclusión de este tipo educativo constituye el umbral necesario para estar fuera de la pobreza, pues permite acceder a mejores oportunidades de empleo. Asimismo, se ha demostrado que las personas que concluyen el bachillerato pueden acceder a una mejor calidad de vida pues desarrollan herramientas para participar en diversas esferas de la vida social y ejercer distintos derechos sociales (INEE, 2011). Por ejemplo, según datos del Instituto Nacional de Estadística y Geografía (INEGI), del total de estudiantes que concluyen su bachillerato, el 78.3% de ellos ha tenido cuando menos un trabajo (INEGI, 2019).</p>
    <p>Los retos y desafíos para lograr la tarea anterior son significativos y numerosos. No obstante, hoy, como hace 53 años, la tarea de “educar más y mejor a un mayor número de mexicanos” sigue vigente.</p>
  </section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
