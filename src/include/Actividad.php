<?php
function renderActividad($ActividadContent, $ActividadTitulo = "Para Actividad más")
{
  ob_start();
?>
  <div class="w-full mt-10 border-t-4 border-dashed">
    <div class="max-w-screen-lg mx-auto py-5 text-darkown px-5 md:px-2">
      <h3 class="uppercase font-bold mb-5 flex justify-start items-center gap-3"><img class="h-10 bg-redown p-1 rounded-xl" src="<?php echo PATH_ICONS ?>pencil.svg" alt="Icono Actividad"><?php echo htmlspecialchars($ActividadTitulo); ?></h3>
      <?php
      if (isset($ActividadContent)) {
        echo $ActividadContent;
      } else {
        echo "Contenido no disponible.";
      }
      ?>
    </div>
  </div>
<?php
  ob_end_flush();
}
?>