<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 16;
ob_start();
?>
<section>
  <ul id="biblio" class="ul-disc">
    <li>Araya, V.; Alfaro, M.; Andoneguí, M. (2007). <em>Constructivismo: orígenes y perspectivas</em>. <em>Laurus Revista de Educación</em>, 13(24), 76-92. Universidad Pedagógica Experimental Libertador.</li>
    <li>Ascencio P., C. (2016). Adecuación de la Planeación Didáctica como Herramienta Docente en un Modelo Universitario Orientado al Aprendizaje. <em>REICE. Revista Iberoamericana sobre Calidad, Eficacia y Cambio en Educación</em>, 14(3), 109-130.</li>
    <li>CCH. (1996). <em>Plan de Estudios Actualizado</em>. México: Colegio de Ciencias y Humanidades-Unidad Académica del Ciclo de Bachillerato, UNAM.</li>
    <li>CCH. (2020). <em>Protocolo de Equivalencias para el ingreso y la promoción de los profesores ordinarios de carrera del Colegio de Ciencias y Humanidades</em>. UNAM/CCH.</li>
    <li>DGCCH/UNAM. (2013). Comisión especial para la actualización de los Programas de Estudios del Taller de Lectura, Redacción e Iniciación a la Investigación Documental I-IV (TLRIID I-IV). <em>Programas de Estudio del Taller de Lectura, Redacción e Iniciación a la Investigación Documental I-IV</em> (versión preliminar). México: Colegio de Ciencias y Humanidades.</li>
    <li>DGCCH. (2009). <em>Proyecto académico para la revisión curricular. El Proyecto Curricular del Colegio. Continuidades y cambios en el Plan y los Programas de Estudios</em>. Cuadernillo, (7). México: DGCCH/UNAM.</li>
    <li>DGCCH. (2006). <em>Orientación y Sentido de las Áreas del Plan de Estudios Actualizado</em>. México: DGCCH/UNAM.</li>
    <li>Díaz Barriga, F.; Hernández, G. (2010). <em>Estrategias docentes para un aprendizaje significativo. Una interpretación constructivista</em>. CDMX. Mc Graw Hill.</li>
    <li>García, T. (2004). Aprendizajes Relevantes. La experiencia del Colegio en la modificación de sus programas de estudio. <em>Eutopía</em>, (2), 7-17.</li>
    <li>Gil, P. (2007). <em>El diseño curricular y los diversos modelos educativos</em>. México: Universidad Autónoma Metropolitana.</li>
    <li>Haro, J. (1994). Cartas descriptivas ¿Para qué? <em>Sinéctica</em>, (4), 1-7.</li>
    <li>Medina R. A.; Domínguez G., Ma. Concepción. (2016). <em>Didáctica general. Formación básica para los profesionales de la educación</em>. Madrid: Universitas.</li>
    <li>Murillo, F. J.; Martínez G., C.; Hernández C., R. (2011). Decálogo para una enseñanza eficaz. <em>REICE. Revista Iberoamericana sobre Calidad, Eficacia y Cambio en Educación</em>, 9(1), 6-27.</li>
    <li>Robles, J.; Bazán, J. (1994, 7 de noviembre). Programas institucionales y operativos. <em>Cuadernillo del Colegio de Ciencias y Humanidades</em>, Número 30. México: UNAM.</li>
    <li>SEP. (2009). <em>Guía para la instrumentación didáctica de los programas de estudio para la formación y desarrollo de competencias profesionales</em>.</li>
  </ul>
</section>
<style>
  #biblio li {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
</style>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>