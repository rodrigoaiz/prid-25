<?php
	require_once("include/header1.php");
?>

	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/menuverde.css">
	<title>Mensajero</title>

<?php
	require_once("include/header2.php");
?>
<!-- Inicia Contenido -->


<div class="container">
	<iframe id="actividad" src="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/message/?theme=photo" width="100%" height="400px"></iframe>
</div>


<!-- Termina Contenido -->

<!-- Inicia Footer -->
<?php
	require_once("include/footer.php");
?>
  <script type="text/javascript">
    $('#actividad').iframeAutoHeight({heightOffset: 20,minHeight: 500});
  </script>
<?php
	require_once("include/footer2.php");
?>
