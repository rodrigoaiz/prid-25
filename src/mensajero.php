<?php
include_once 'config.php';
include BASE_PATH . '/include/header1.php';

// Cargar el menú desde el JSON
$menuData = json_decode(file_get_contents(BASE_PATH . '/menu.json'), true);
$menu = $menuData['menu'];

include BASE_PATH . '/include/menu.php';


// ID de la página actual (puedes obtenerlo de la URL o de otra fuente)
$currentPageId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<title>Programa de Regularización e Iniciación a la Docencia - Mensajero</title>
</head>



<body>

	<?php renderMenu($menu); ?>
	<?php renderMenuMoodle(); ?>
	<main>
		<section>
			<h1 class="text-3xl text-orangeown uppercase">Mensajero</h1>
			<iframe class="actividadmoodle w-full" src="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/message/?theme=photo"></iframe>
		</section>
	</main>
	<script src="<?php echo BASE_URL; ?>/js/bundle.js"></script>
	<?php
	// Función para eliminar BOM
	function removeBOM($text)
	{
		if (substr($text, 0, 3) === "\xEF\xBB\xBF") {
			$text = substr($text, 3);
		}
		return $text;
	}

	// Incluir archivos sin BOM
	ob_start();
	require_once BASE_PATH . '/include/footer.php';
	$footerContent = ob_get_clean();
	echo removeBOM($footerContent);

	ob_start();
	require_once BASE_PATH . '/include/footer2.php';
	$footer2Content = ob_get_clean();
	echo removeBOM($footer2Content);
	?>