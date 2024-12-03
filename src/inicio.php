<?php
include_once 'config.php';
include BASE_PATH . '/include/header1.php';
include BASE_PATH . '/include/header2.php';

// Cargar el menú desde el JSON
$menuData = json_decode(file_get_contents(BASE_PATH . '/menu.json'), true);
$menu = $menuData['menu'];

include BASE_PATH . '/include/menu.php';
include BASE_PATH . '/include/navegacion.php';

// ID de la página actual (puedes obtenerlo de la URL o de otra fuente)
$currentPageId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<title>Inicio chidso</title>
</head>

<!--  <link rel="stylesheet" href="./assets/styles.css"> -->


<body class="bg-gray-100">

  <?php renderMenu($menu); ?>
  este es el iniciios
  <div class="row">
    <ol>
      <li>Organizados en equipos según lo indicado por sus impartidores, planteen una situación problemática o dilema que hayan enfrentado o que enfrenten con regularidad en su labor docente. Describan la situación de forma clara, así como la resolución que dieron al problema o situación.</li>
      <li>Posteriormente especifiquen lo siguiente: a) ¿Qué principios, normas o artículos de la normatividad revisada se deben considerar para analizar la situación planteada? b) ¿Qué otra u otras alternativas existen para abordar la situación planteada?</li>
      <li>Descarga el siguiente <a href="docs/Actividad2_FORMATO-2024.docx" target="_blank">formato</a> para la elaboración de la actividad.</li>
      <li>
        <p>Al terminar guarda tu archivo bajo el siguiente formato:</p>
        <p><em>Nombre_Apellido_Actividad</em>2. Ejemplo: <em>Victoria_García_Actividad2</em></p>
      </li>
      <li>
        <p>Sube tu archivo para que pueda ser revisado por tu impartidor (recuerda que el peso máximo debe ser de 10 MB). Nota: es necesario que todos los integrantes del equipo suban su trabajo, aunque se trate del mismo documento.</p>
        <ul>
          <li>Da clic en Adjuntar y arrástralo al campo que se solicita.</li>
          <li>No olvides dar clic en Guardar, pues de otra manera tu archivo no se subirá correctamente. </li>
          <li>Si quieres hacer cambios da clic en Editar envío y después en Guardar cambios.</li>
        </ul>
      </li>
      <li>Descarga los <a href="docs/Actividad2_criterios de evaluacion_2023.pdf" target="_blank">criterios de evaluación</a>.</li>
      <!--<li>Descarga el siguiente <a href="docs/Actividad5_B3.doc" target="_blank">documento</a>, en él se describen tres situaciones que podrían presentarse en el aula.</li>
			<li>Lee detenidamente cada una de ellas y responde en cada caso lo siguiente: a) ¿Cuál es tu opinión acerca del actuar del docente?, b) ¿Qué principios, normas o artículos de la normatividad revisada se deben considerar para analizar la situación planteada? (justifica tu respuesta), c) ¿Qué otra u otras alternativas existen para abordar la situación, además de la forma en que actuó el docente?</li>
			<li>Al terminar guarda tu archivo bajo el siguiente formato: <em>Nombre_Apellido_Actividad5</em>. Ejemplo: <strong>Victoria_García_Actividad5</strong>
			</li>
			<li>Sube tu archivo para que pueda ser revisado por tu asesor (recuerda que el peso máximo debe ser de 10 MB).</li>
			<ul>
				<li>Da clic en <strong>Adjuntar</strong> y arrástralo al campo que se solicita.</li>
				<li>No olvides dar clic en <strong>Guardar</strong>, pues de otra manera tu archivo no se subirá correctamente.</li>
				<li>Si quieres hacer cambios da clic en <strong>Editar envío</strong> y después en <strong>Guardar cambios.</strong>
				</li>
			</ul>
			<li>Descarga los <a href="docs/CriteriosdeEvaluacion_B3Act5.doc" target="_blank">criterios de evaluación</a>.</li>-->
    </ol>
  </div>
  <!--  <iframe id="actividad2" src="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/mod/assign/view.php?id=206&theme=photo"></iframe>  -->
  <script src="js/bundle.js"></script>

  <?php
  require_once BASE_PATH . '/include/footer.php';
  ?>

  <?php
  require_once BASE_PATH . '/include/footer2.php';
  ?>