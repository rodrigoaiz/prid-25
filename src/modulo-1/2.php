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
  renderImageComponent($imageSrc, 'justify-center');
  ?>
  <p>En aquellos años la creación del CCH coincide con la necesidad social de que un mayor número de jóvenes, que vivían en el área metropolitana, tuvieran la oportunidad de contar con una educación de nivel medio superior.</p>
  <p>Al mismo tiempo, el Colegio surge como una opción educativa con una nueva perspectiva curricular y didáctica, que buscaba atender las dificultades del proceso de enseñanza-aprendizaje identificadas en aquél entonces.</p>
  <div class="my-10 text-center mx-auto text-2xl">
    Para comprender lo que hoy se conoce como CCH, te presentamos algunos de los acontecimientos más relevantes de su historia:
  </div>
</section>
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-2 pl-2 pr-2 md:gap-x-7 md:pl-6 md:pr-6">
  <div class="bg-slate-200 shadow-lg p-2 md:p-6">
    <ul class="ul-disc">
      <li>En el inicio Roger Díaz de Cossío, Coordinador de Ciencias de la UNAM, encabezó a 80 destacados universitarios para elaborar el Plan y los Programas de Estudio.</li>
      <li>Con la participación de los coordinadores de Ciencias y Humanidades de la Universidad, Guillermo Soberón y Rubén Bonifaz Nuño; de los directores de las facultades de Filosofía y Letras, Ciencias, Química y Ciencias Políticas y Sociales, Ricardo Guerra Tejeda, Juan Manuel Lozano, José F. Herrán y Víctor Flores Olea y del director de la Escuela Nacional Preparatoria, Moisés Hurtado G. respectivamente; González Casanova elaboró un plan para crear un sistema innovador que se denominó Colegio de Ciencias y Humanidades.</li>
      <li>El 12 de abril de 1971, abrieron sus puertas para recibir a las primeras generaciones de estudiantes, los planteles Azcapotzalco, Naucalpan y Vallejo, al siguiente año iniciaron actividades Oriente y Sur.</li>
      <li>En 1992 se crea el Consejo Técnico, máximo órgano rector del Colegio.</li>
      <li>En 1996 se actualiza el Plan de Estudios, con el objetivo de responder a las nuevas necesidades de adquisición de conocimientos y el desarrollo de habilidades acordes a los tiempos que se vivían.</li>
    </ul>
  </div>
  <div class="bg-slate-200 shadow-lg p-2 md:p-6">
    <ul class="ul-disc">
      <li>En 1997 obtiene el rango de Escuela Nacional.</li>
      <li>En 1998 se instala la Dirección General.</li>
      <li>Entre 2002 y 2004 se realizó una revisión y ajuste de los Programas de Estudio.</li>
      <li>Desde 2009 y hasta 2016, se desarrolló un proceso de actualización de los Programas de Estudio de sus 31 materias curriculares y de Educación Física.</li>
      <li>El 07 de agosto de 2020, las Opciones Técnicas se convierten en Estudios Técnicos Especializados.</li>
      <li>En el ciclo escolar 2023-2024 nuevamente se llevó a cabo un proceso de revisión y ajuste de los Programas de Estudio de las materias curriculares y Educación Física. Asimismo, el 18 junio de 2024 el Consejo Técnico aprobó la incorporación de la asignatura Igualdad de Género como requisito de egreso de su Plan de Estudios.</li>
      <li>En 2025, se aprobó la más reciente actualización al Plan de Estudios. En ésta se sistematizan todas las modificaciones curriculares realizadas en el CCH a partir de 1996, incluyendo: las diversas revisiones y ajustes de los programas de estudio, la actualización de los documentos de Orientación y Sentido de las Áreas y el Modelo Educativo, y el establecimiento de la asignatura de Educación Física como requisito de egreso.</li>
    </ul>
  </div>
</div>
<?php ob_start(); ?>
<div class="grid  md:grid-cols-3 md:gap-10">
  <ul class="ul-disc text-xl md:col-span-2">
    <li>¿Qué semejanzas y diferencias podemos identificar entre el contexto socioeconómico y político en el que surge el Colegio y el contexto actual?</li>
    <li>¿De qué manera influye este contexto en la misión del Colegio?</li>
  </ul>
  <div class="md:col-span-1">
    <img class="mx-auto" src="<?php echo ASSET_URL ?>img/modulo-1/b1p02i01.webp" alt="Instalaciones CCH">
  </div>
</div>
<?php
$SaberContent = ob_get_clean();
include BASE_PATH . '/include/ParaSaber.php';
renderSaberContent($SaberContent, "Para reflexionar");
?>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
