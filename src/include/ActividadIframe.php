<?php

function renderActividadIframe($actividadKey)
{
  $json = file_get_contents(BASE_PATH . '/menu.json');
  $menu = json_decode($json, true);
  $actividadId = $menu['actividades'][$actividadKey];

  if ($actividadId) {
?>
    <iframe class="w-full actividadmoodle" id="actividad<?php echo $actividadId; ?>" src="https://moodle.portalacademico.cch.unam.mx/modelo-educativo/mod/assign/view.php?id=<?php echo $actividadId; ?>&amp;theme=photo"></iframe>

<?php
  } else {
    echo "Actividad no encontrada.";
  }
}
?>