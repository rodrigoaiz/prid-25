<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 4;
ob_start();
?>
<section>
  <p>La sociedad actual se enfrenta a una serie de retos en el terreno social, económico, político y ambiental. Este contexto tiene un fuerte impacto en el ámbito educativo y, entre otras cosas, ha originado un aumento de las exigencias para el trabajo de las y los profesores, muchas de las cuales sobrepasan los conocimientos disciplinarios y técnicos que adquirieron durante su formación profesional.</p>
  <img class="mx-auto w-full my-10" src="<?php echo ASSET_URL ?>img/modulo-1/b1p04i01.webp" alt="Estudiantes CCH">
  <p>A este panorama se suman otras condiciones que dificultan la labor docente. Por un lado, los organismos internacionales y gubernamentales, así como la sociedad en general, reconocen al profesorado como actor clave para el logro de la calidad educativa. Por otro lado, la profesión está social y económicamente devaluada; además de que en algunos sistemas educativos las y los docentes se perciben a sí mismos como meros ejecutores de lo que deciden las autoridades educativas.</p>
  <p>Después de la pandemia por COVID-19 se han sumado retos que implican no solamente preparar clases en formato presencial, sino también prepararse para la virtualidad en caso de requerirse. De igual modo, la incorporación de la Inteligencia Artificial en la vida cotidiana, y el incremento de los problemas de salud mental en las juventudes suponen un replanteamiento y adaptación de las labores educativas.</p>
  <p>Estas situaciones han provocado que la comunidad docente se ubique entre los grupos profesionales con mayor riesgo de sufrir el Síndrome de Bornout o desgaste profesional, el cual se caracteriza por la presencia de (Maslach y Jackson, 1981):</p>

  <div class="w-full grid sm:grid-cols-1 xl:grid-cols-3 gap-5 px-5 my-10">
    <div class="p-4 shadow-xl bg-yellowown">
      <strong>Cansancio emocional:</strong> pérdida progresiva de energía, desgaste, agotamiento y fatiga; 
    </div>
    <div class="p-4 shadow-xl bg-yellowown">
      <strong>Despersonalización:</strong> desarrollo de actitudes negativas y sentimientos fríos e impersonales hacia el alumnado;
    </div>
    <div class="p-4 shadow-xl bg-yellowown">
      <strong>Falta de realización personal:</strong> tendencia a evaluarse negativamente, lo que afecta la realización del trabajo y la relación con las personas a las que atienden.
    </div>
  </div>
  <p>La investigación educativa ha demostrado que el grado de satisfacción que tiene un docente con su quehacer es un factor protector frente al desgaste profesional. Los maestros y maestras que consideran que su trabajo es importante y que marcan una diferencia en la vida de sus estudiantes, son capaces de tolerar una mayor cantidad de estrés inherente a la docencia (Arón y Milicic, 2000, citado en Matus, 2013). Contrariamente, la práctica docente alienada genera respuestas negativas en el estudiantado, lo que a su vez refuerza el sentido de ineficiencia por parte del profesorado, convirtiéndose así en un círculo vicioso.</p>
  <p>De este modo, es fundamental que las instituciones educativas proporcionen al profesorado condiciones más favorables para la realización de sus labores. Al mismo tiempo, quienes eligen el camino de la docencia, necesitan desarrollar distintas estrategias de afrontamiento al estrés y “<strong>[un] compromiso que va más allá del logro del sustento diario y requiere por ello, de la construcción de un proceso identitario que otorgue a su práctica cotidiana significatividad y trascendencia</strong>” (Matus, 2013: 79).</p>
</section>
<?php ob_start(); ?>
<div class="grid  md:grid-cols-3 md:gap-10 items-center">
  <p class="md:col-span-2 text-2xl"><a href="https://youtu.be/cFWUt0msxcc?si=4j3ntllumcn4m83m" target="_blank">Identidad docente: dilemas de la profesión.</a> Este video consiste en una entrevista de poco menos de 30 minutos al sociólogo Emilio Tenti Fanfani, en el que se abordan, en términos generales, los dilemas de la profesión docente en la sociedad contemporánea.</p>
  <div class="md:col-span-1">
    <img class="mx-auto" src="<?php echo ASSET_URL ?>img/modulo-1/sabermas_1.webp" alt="Estudiantes CCH">
  </div>
</div>
<?php
$SaberContent = ob_get_clean();
include BASE_PATH . '/include/ParaSaber.php';
renderSaberContent($SaberContent);
?>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>