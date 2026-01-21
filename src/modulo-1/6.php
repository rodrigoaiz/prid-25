<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 6;
ob_start();
?>
<section>
  <p>La Máxima Casa de Estudios cuenta con un marco normativo que rige sus tareas esenciales: docencia, investigación y difusión de la cultura. Evidentemente, la actividad docente en el CCH está regulada por dicho marco. Al respecto, existe una amplia variedad de documentos; a continuación, se enlistan algunos que se consideran básicos por su importancia para el ejercicio de la docencia:</p>
  <ul class="ul-disc">
    <li><strong>Ley Orgánica.</strong> Establece la función social y educativa de la UNAM, así como el fundamento de su estructura. Es la base en la cual descansa la organización de la Universidad.</li>
    <li><strong>Estatuto General.</strong> Especifica la organización y estructura de la Universidad. Una sección a destacar es la de “Responsabilidades y sanciones”.</li>
    <li><strong>Estatuto del Personal Académico.</strong> Indica la forma en que se organiza y reglamenta la situación del personal académico en la UNAM (técnicos y técnicas académicas , profesorado e investigadores).</li>
    <li><strong>Marco Institucional de Docencia.</strong> Establece los principios generales de la docencia en la UNAM y los lineamientos generales acerca de los planes y programas de estudio.</li>
    <li><strong>Código de ética de la UNAM.</strong> Documento publicado en julio de 2015 por el Consejo Universitario, el cual tiene como propósito regular la conducta de toda la comunidad universitaria (estudiantado , profesorado , trabajadores y trabajadoras). Está conformado por doce principios en los cuales se expresan los valores que deben orientar los fines de la Universidad (docencia, investigación y difusión de la cultura).</li>
    <li><strong>Contrato colectivo de trabajo 2023-2025.</strong> Es el convenio que regula las relaciones laborales entre la Universidad y el sindicato de su personal académico (AAPAUNAM). Incluye regulaciones relativas a los salarios, días de descanso y vacaciones, prestaciones, licencias, incapacidades, entre otros.</li>
    <li><strong>Herramientas para una docencia igualitaria, incluyente y libre de violencias.</strong> En esta guía, elaborada por la Coordinación para la Igualdad de Género (CIGU) de la UNAM, se especifican una serie de orientaciones sobre buenas prácticas docentes para construir ambientes educativos igualitarios y libres de violencia por razones de género.</li>
    <li><strong>Cartilla universitaria de buenas prácticas enfocadas a poblaciones LGBTIQ+.</strong> Este documento también fue elaborado por la CIGU con la intención de difundir la existencia de identidades sexogenéricas disidentes y promover cambios culturales encaminados a lograr la igualdad y la inclusión en la UNAM.</li>
    <p>De igual modo, resulta imprescindible conocer las medidas de seguridad y de actuación ante distintas situaciones de emergencia que pueden presentarse en los planteles del Colegio, las cuales se especifican en el siguiente documento:</p>
    <li>Prevención y autocuidado del cecehachero. Ciclo 2025-2026. En este Suplemento de Gaceta CCH se describen distintos protocolos de actuación para: casos de violencia de género, urgencia médica, violencia al interior y/o exterior del plantel, incendio, sismo y fuga de gas.</li>
  </ul>

  <p class="font-bold text-lg my-10">Por su relevancia y pertinencia para la actividad docente, a continuación, revisaremos algunos artículos incluidos en los documentos previamente citados. </p>
  <ul class="ul-disc mt-10">
    <li><strong>Ley orgánica de la UNAM</strong> <em>Artículo 1o.-</em> La Universidad Nacional Autónoma de México es una corporación pública -organismo descentralizado del Estado- dotada de plena capacidad jurídica y que tiene por fines impartir educación superior para formar profesionistas, investigadores, profesores universitarios y técnicos útiles a la sociedad; organizar y realizar investigaciones principalmente acerca de las condiciones y problemas nacionales, y extender con la mayor amplitud posible los beneficios de la cultura. </li>
    <li><a target="_blank" href="<?php echo PATH_DOCS . 'EstatutoGeneralUNAM.pdf'; ?>">Estatuto General de la UNAM</a> artículos 3º, 95, 96, 97 y 98.</li>
    <li><a target="_blank" href="<?php echo PATH_DOCS . 'EstatutodelPersonalAcademico.pdf'; ?>">Estatuto del Personal Académico (EPA)</a> artículos 6, 55 y 56.</li>
    <li><a target="_blank" href="<?php echo PATH_DOCS . 'MarcoInstitucionaldeDocencia.pdf'; ?>">Marco Institucional de Docencia.</a> principios 4, 7, 13, 14.</li>
    <li><a target="_blank" href="<?php echo PATH_DOCS . 'codigo-etica-unam.pdf" '; ?>">Código de ética de la UNAM.</a> : documento completo.</li>
    <li><a target="_blank" href="<?php echo PATH_DOCS . 'CIGU-Herramientas-docentes.pdf'; ?>">Herramientas para una docencia igualitaria, incluyente y libre de violencias</a> apartados correspondientes a “1. Buenas prácticas docentes” y “2. Uso de lenguaje incluyente y no sexista”. </li>
    <li><a target="_blank" href="<?php echo PATH_DOCS . 'cartillaLGBTIQ.pdf'; ?>">Cartilla universitaria de buenas prácticas enfocadas a poblaciones LGBTIQ+:</a> páginas 11 a 23, correspondientes a las “Buenas prácticas”.</li>
    <li><a target="_blank" href="<?php echo PATH_DOCS . 'autocuidado_prev_ago_2025.pdf'; ?>">Prevención y autocuidado del cecehachero. Ciclo escolar 2025-2026: páginas 13-19, 21, 31-44.</a></li>
  </ul>
  <p>Conocer, reflexionar y actuar conforme a lo establecido en la normatividad es esencial para el profesorado. No obstante, es preciso reconocer que la aplicación de las normas y principios no es un proceso mecánico ni lineal, pues existen situaciones que requieren de un análisis y debates exhaustivos.</p>
</section>
<div class="grid sm:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-10 px-5 my-10">
  <img class="mx-auto" src="<?php echo ASSET_URL ?>img/modulo-1/b1p06i01.webp" alt="cita 1">
  <img class="mx-auto" src="<?php echo ASSET_URL ?>img/modulo-1/b1p06i02.webp" alt="cita 2">
  <img class="mx-auto" src="<?php echo ASSET_URL ?>img/modulo-1/b1p06i03.webp" alt="cita 3">
</div>
<section>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>Organizados en equipos según lo indicado por sus impartidores, planteen una situación problemática o dilema que hayan enfrentado o que enfrenten con regularidad en su labor docente (también puede tratarse de un asunto ocurrido a un tercero). Describan la situación de forma clara, así como la resolución que dieron al problema o situación.</li>
    <li>
      <p>Posteriormente especifiquen lo siguiente:</p>
      <ol class="ol-lower-alpha">
        <li>¿Qué principios, normas o artículos de la normatividad revisada se deben considerar para analizar la situación planteada?</li>
        <li>¿Qué otra u otras alternativas existen para abordar la situación planteada?</li>
      </ol>
    </li>
    <li>Descarga el siguiente <a target="_blank" href="<?php echo PATH_DOCS . 'actividad-2-formato-25.docx'; ?>">formato</a> para la elaboración de la actividad.</li>
    <li>Al terminar guarda tu archivo bajo el siguiente formato: Nombre_Apellido_Actividad2. Ejemplo: Victoria_García_Actividad2</li>
    <li>
      <p>Sube tu archivo para que pueda ser revisado por tu impartidor (recuerda que el peso máximo debe ser de 10 MB). Nota: es necesario que todos los integrantes del equipo suban su trabajo, aunque se trate del mismo documento.</p>
      <ul class="ul-disc">
        <li>Da clic en Adjuntar y arrástralo al campo que se solicita.</li>
        <li>No olvides dar clic en Guardar, pues de otra manera tu archivo no se subirá correctamente.</li>
        <li>Si quieres hacer cambios da clic en Editar envío y después en Guardar cambios.</li>
      </ul>
    </li>
    <li>Descarga los <a target="_blank" href="<?php echo PATH_DOCS . 'actividad-2-criterios-evaluacion.pdf'; ?>">criterios de evaluación</a>.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  include BASE_PATH . '/include/Actividad.php';
  renderActividad($ActividadContent, "Actividad 2 : Planteamiento y análisis de una situación problemática");
  ?>
  <?php
  include BASE_PATH . '/include/ActividadIframe.php';
  renderActividadIframe('b1act2');
  ?>
  <?php ob_start(); ?>
  <ol class="ol-number">
    <li>Realiza la lectura del texto los textos “<a href="https://medium.com/@netza/los-hijos-que-no-tendr%C3%A9-8a546bae7bdf" target="_blank">Los hijos que no tendré</a>” y “<a href="https://iisue.unam.mx/nosotros/historias-y-huellas-en-mi-andar-docente/?fbclid=IwY2xjawF_pTRleHRuA2FlbQIxMAABHe3NZuk2-XcZ2mQUNdN7JcWLCrg32bknSjoXLE1mt5dluX9N3i-0OKSd0g_aem_pOg5E9x9Li6_ndCXRIhLaw" target="_blank">Una experiencia positiva</a>”.</li>
    <li>A partir de las lecturas, así como de tus propias reflexiones y vivencias, participa durante la sesión sincrónica contestando las siguientes preguntas: ¿Cuáles consideras que son tus principales retos/desafíos como docente del CCH y en qué medida coinciden o no con los presentados en las lecturas?, ¿Con qué alternativas cuentas para afrontar dichas dificultades?</li>
  </ol>

  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Actividad : Reflexión sobre la práctica docente ");
  ?>
  <?php ob_start(); ?>
     <ol class="ol-number">
        <li>En este espacio las y/o los impartidores registrarán la evaluación de las sesiones sincrónicas del Módulo.</li>
     </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad($ActividadContent, "Evaluación de sesiones sincrónicas");
  renderActividadIframe('b1act3');
  ?>
</section>
<?php ob_start(); ?>
<div class="grid  md:grid-cols-3 md:gap-10 items-center">
  <p class="md:col-span-2 text-2xl">Revisa los siguientes textos que contienen información sobre la normatividad y la ética del quehacer docente:</p>
  <div class="md:col-span-1">
    <img class="mx-auto" src="<?php echo ASSET_URL ?>img/modulo-1/sabermas.webp" alt="Estudiantes CCH">
  </div>
</div>
<ul class="ul-disc">
  <li><a target="_blank" href="<?php echo PATH_DOCS . 'aapaunam-2023_2025.pdf'; ?>">Contrato colectivo de trabajo 2023-2025.</a>
  </li>
  <li><a target="_blank" href="https://www.abogadogeneral.unam.mx/sites/default/files/archivos/LegUniv/26-EstatutoPersonalAcademico_UNAM_070425.pdf">Estatuto del Personal Académico de la UNAM (EPA).</a>
  </li>
  <li><a target="_blank" href="<?php echo PATH_DOCS . 'B1MarcoInstitucionalPSM2016.pdf'; ?>">Marco Institucional de Docencia en la UNAM.</a>
  </li>
  <li><a href="http://www.cch.unam.mx/consejo/" target="_blank">Micrositio del Consejo Técnico del CCH</a>, donde podrás encontrar los diferentes documentos que rigen la vida académica de nuestra institución.</li>
  <li><a href="http://www.abogadogeneral.unam.mx/" target="_blank">Oficina de la Abogacía General de la UNAM.</a>
  </li>
  <li><a target="_blank" href="<?php echo PATH_DOCS . 'plagioyetica.pdf'; ?>">Plagio y ética.</a></li>
  <li><a target="_blank" href="<?php echo PATH_DOCS . 'igualdad-genero-unam-2013.pdf'; ?>">Lineamientos para la igualdad de género en la UNAM.</a> </li>
  <li><a target="_blank" href="<?php echo PATH_DOCS . 'protocolo-atencion-integral-de-violencia-por-razones-de-genero-2022.pdf'; ?>">Protocolo para la atención de casos de violencia de género en la UNAM.</a></li>
  <li><a href="https://coordinaciongenero.unam.mx/" target="_blank">Coordinación para la Igualdad de Género en la UNAM</a></li>
  <li><a href="https://coordinaciongenero.unam.mx/2018/12/documento-fortalecimineto-politica-institucional-genero-unam/" target="_blank">Documento básico para el fortalecimiento institucional de género en la UNAM.</a></li>
</ul>
<?php
$SaberContent = ob_get_clean();
include BASE_PATH . '/include/ParaSaber.php';
renderSaberContent($SaberContent);
?>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>
