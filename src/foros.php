<?php
	require_once("include/header1.php");
?>
<link rel="stylesheet" href="css/general.css">
<link rel="stylesheet" href="css/menuverde.css">
<link rel="stylesheet" href="css/login.css">
<title>Foros</title>
<?php
	require_once("include/header2.php");
?>

<!-- Inicia Contenido -->

	<iframe id="actividad" src="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/mod/forum/view.php?id=204&theme=photo" width="95%" height="500px"></iframe>


   <!--
    <ul id="select_foros" class="unstyled  vertical20">
      <li id="bloq0"><span class="b0"><a href="#fb0">Foro General</a></span></li>
      </ul>

     <li id="bloq1"><span class="b1"><a href="#fb1">Foro Bloque 1</a></span></li>
      <li id="bloq2"><span class="b2"><a href="#fb2">Foro Bloque 2</a></span></li>
      <li id="bloq3"><span class="b3"><a href="#fb3">Foro Bloque 3</a></span></li>
      <li id="bloq4"><span class="b4"><a href="#fb4">Foro Bloque 4</a></span></li>
      <li id="bloq5"><span class="b5"><a href="#fb5">Foro Bloque 5</a></span></li>
      <li id="bloq6"><span class="b6"><a href="#fb6">Foro Bloque 6</a></span></li>
    </ul>
  </div>
</div>
 <iframe id="fb1" src="/modeloeducativo/mod/forum/view.php?id=51&theme=induccion" width="100%" height="500px"></iframe>
<iframe id="fb2" src="/modeloeducativo/mod/forum/view.php?id=48&theme=induccion" width="100%" height="500px"></iframe>
<iframe id="fb3" src="/modeloeducativo/mod/forum/view.php?id=70&theme=induccion" width="100%" height="500px"></iframe>
<iframe id="fb4" src="/modeloeducativo/mod/forum/view.php?id=54&theme=induccion" width="100%" height="500px"></iframe>
<iframe id="fb5" src="/modeloeducativo/mod/forum/view.php?id=57&theme=induccion" width="100%" height="500px"></iframe>
<iframe id="fb6" src="/modeloeducativo/mod/forum/view.php?id=65&theme=induccion" width="100%" height="500px"></iframe>-->

</div>
<!-- Termina Contenido -->

<!-- Inicia Footer -->
<?php
	require_once("include/footer.php");
?>
<!--
<script type="text/javascript">
	$(document).ready(function(){
		$("iframe").hide();
		$("ul#select_foros li a").click(function(e){
			e.preventDefault();
			id = $(this).attr("href");
			$(id).show();
			$("#select_foros").hide();
		});
	$('#fb0').iframeAutoHeight({heightOffset: 20,minHeight: 300});
	$('#fb1').iframeAutoHeight({heightOffset: 20,minHeight: 300});
        $('#fb2').iframeAutoHeight({heightOffset: 20,minHeight: 300});
        $('#fb3').iframeAutoHeight({heightOffset: 20,minHeight: 450});
        $('#fb4').iframeAutoHeight({heightOffset: 20,minHeight: 300});
        $('#fb5').iframeAutoHeight({heightOffset: 20,minHeight: 300});

	});

</script> -->
<?php
	require_once("include/footer2.php");
?>
