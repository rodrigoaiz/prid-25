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
  <p>Posteriormente, entre 2001 y 2004 se llevó a cabo una Revisión y Ajuste de los Programas de Estudio. Dos años después, en 2006, fue publicado el documento “Orientación y sentido de las áreas del Plan de Estudios Actualizado”, el cual describe ampliamente la orientación disciplinaria de las áreas y su sentido educativo.</p>
  <p class="font-bold text-greenown mt-5">En la historia del Colegio han existido tres Planes de Estudios:</p>
  <ol class="ol-alpha my-5">
    <li>El primero, correspondiente al año 1971, con el que nace el CCH y que se describe en el documento conocido como Gaceta Amarilla, revisado en el módulo anterior.</li>
    <li>El segundo, aprobado 25 años después en 1996, el cual implicó entre otras cuestiones, ajustes en el tiempo de duración de las clases, una modificación sustantiva de las materias y el mapa curricular, así como la restructuración de los turnos de clase, que pasaron de cuatro a dos. </li>
    <li>El tercero y vigente, aprobado en 2025. En este se integran las modificaciones realizadas a los Programas de Estudio de 1996 a 2024, la creación de los programas de formación complementaria en Asesoría y Tutoría, además de que se incorporan las asignaturas de Educación Física e Igualdad de Género como obligatorias sin créditos.</li>
  </ol>
  <h2>Perfil de egreso </h2>
  <p>El <strong>perfil de egreso</strong> describe el conjunto de conocimientos, habilidades, valores y actitudes que caracterizan al alumnado al concluir el trayecto académico indicado en el Plan de Estudios, lo que significa que dicho perfil establece un ideal del tipo de personas que se aspira formar a través de las experiencias educativas que la institución ofrece.</p>
  <p>El perfil de egreso se encuentra enmarcado en un contexto histórico-social determinado; responde a una concepción filosófica particular del ser humano y a un conjunto de necesidades sociales a las que se pretende atender mediante la formación de las personas.</p>
  <?php
  include BASE_PATH . '/include/ImagenFullPleca.php';

  $imageSrc = ASSET_URL . 'img/modulo-2/b2p2e4.webp';
  renderImageComponent($imageSrc, 'justify-start');
  ?>
  <p>En el caso particular del Colegio, se aspira a formar jóvenes que posean conocimientos y habilidades en los campos básicos del saber (lengua, matemáticas, ciencias y humanidades), así como valores éticos y civiles que les permitan desarrollar una participación social responsable y positiva, adquirir bases para cursar con éxito estudios profesionales y/o incorporarse a la vida laboral.</p>
  <p class="my-5 font-bold">Para conocer el perfil de egreso actualizado, <span class="text-greenown">revisa las páginas 94-97</span> del documento <a href="<?php echo PATH_DOCS; ?>PlanEstudiosENCCH_2025.pdf" target="_blank">Plan de Estudios 2025</a>.</p>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
