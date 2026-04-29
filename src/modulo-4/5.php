<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 27;
ob_start();
?>
<section>
  <ul id="biblio" class="ul-disc">
    <li>Ashcraft, N. (2014). <em>Lesson Planning</em>. USA: TESOL International Association.</li>
    <li>Cedillo-Arias, L. (2022). La incorporación de las TIC en el aula. En A. Diaz Barriga (Coord.), <em>Docente y didáctica. Acercamientos polémicos</em> (pp.162-178). IISUE Educación. </li>
    <li>Díaz Barriga, F. & Hernández, G. (2010). Capítulo 6 Estrategias para el aprendizaje significativo: fundamentos, adquisición y enseñanza: Pp. 175-222. En: F. Díaz Barriga A. & G. Hernández R. (Autores). <em>Estrategias docentes para un aprendizaje significativo. Una interpretación constructivista</em>. Tercera edición. México: McGraw-Hill.</li>
    <li>Gorbina, F. (2024, 28 de agosto). <em>Cómo grabar en Canva con tu voz y cámara web</em> [Video]. https://www.youtube.com/watch?v=fEpD4LDd95A</li>
    <li>Guzmán, J. (2024, 21 de marzo). <em>La mejor forma de grabar PowerPoint con voz y Cámara en 2025</em> [Video]. https://www.youtube.com/watch?v=ISqsLCC-cXA</li>
    <li>Pansza, M., Pérez, J. y Morán, P. (2011). Instrumentación didáctica. <em>En Conceptos generales. Fundamentación de la didáctica</em> (pp. 158-165). Gernika. </li>
    <li>UNIdeNicaraguaOficial (15 de mayo de 2020). <em>Tutorial Grabación de videos desde el celular</em> [video]. Nicaragua: Revista UNITV. https://www.youtube.com/watch?v=2eEZQc1KJuc</li>
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
