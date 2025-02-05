<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 10;
ob_start();
?>
<section>
  <p>De acuerdo con Gil (2007), un plan de estudios es la descripción secuencial de la trayectoria de formación del alumnado en un tiempo determinado. Está compuesto por los siguientes elementos: <strong>1. perfil de egreso</strong>, <strong>2. líneas curriculares o áreas de conocimiento</strong>, y <strong>3. mapa curricular</strong>.</p>
  <div class=" w-full">
    <img class="max-w-screen-sm mx-auto" src="<?php echo ASSET_URL; ?>img/modulo-2/b2p2e1.webp" alt="Profesores CCH" />
  </div>
  <p>En la historia del Colegio han existido dos Planes de Estudios: el del año 1971, con el que nace el CCH; y el vigente, aprobado en 1996. Éste último es el producto del trabajo desarrollado por la comunidad docente y la institución durante cinco años (de 1991 a 1996). A pesar de las modificaciones realizadas, el Plan de Estudios de 1996 conserva los rasgos esenciales del proyecto educativo original del Colegio (CCH, 1996).</p>
  <p>Posteriormente, entre 2001 y 2004 se llevó a cabo una Revisión y Ajuste de los Programas de Estudio. Dos años después, en 2006, fue publicado el documento “Orientación y sentido de las áreas del Plan de Estudios Actualizado”, el cual describe ampliamente la orientación disciplinaria de las áreas y su sentido educativo.</p>
  <p>En el año 2009, el CCH inició un proceso de Actualización de los Programas de Estudio que concluyó en noviembre de 2016. Más recientemente, en el ciclo escolar 2023-2024 se realizó el último proceso de Revisión y Ajuste de los Programas de Estudio.</p>
  <div class="grid grid-cols-2 my-5">
    <img src="<?php echo ASSET_URL; ?>img/modulo-2/b2p2e2.webp" alt="Alumnos CCH" />
    <img src="<?php echo ASSET_URL; ?>img/modulo-2/b2p2e3.webp" alt="Alumnos CCH" />
  </div>
  <h2>Perfil de egreso </h2>
  <p>El perfil de egreso describe el conjunto de conocimientos, habilidades, valores y actitudes que caracterizan al alumnado al concluir el trayecto académico indicado en el Plan de Estudios, lo que significa que dicho perfil establece un ideal del tipo de personas que se aspira formar a través de las experiencias educativas que la institución ofrece.</p>
  <p>El perfil de egreso se encuentra enmarcado en un contexto histórico-social determinado; responde a una concepción filosófica particular del ser humano y a un conjunto de necesidades sociales a las que se pretende atender mediante la formación de las personas.</p>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-2/b2p2e4.webp';
  renderImageComponent($imageSrc, 'justify-start');
  ?>
  <p>En el caso particular del Colegio, se aspira a formar jóvenes que posean conocimientos y habilidades en los campos básicos del saber (matemáticas, ciencias y humanidades), así como valores éticos y civiles que les permitan desarrollar una participación social responsable y positiva, adquirir bases para cursar con éxito estudios profesionales y/o incorporarse a la vida laboral.</p>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
