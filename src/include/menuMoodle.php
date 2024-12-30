<?php
// Ruta al archivo menu.json
$menuPath = BASE_PATH . '/menu.json';
$menuData = json_decode(file_get_contents($menuPath), true);

// Obtener el array de menuMoodle
$menuMoodle = $menuData['menuMoodle'];
?>
<nav id="nav-moodle" class="w-100 justify-between flex px-2">
  <div>
    ¡Hola <span>
      <?php //echo $USER->firstname ." ". $USER->lastname;
      ?>!
    </span>
  </div>
  <div class="flex flex-cols justify-end gap-3 py-1">
    <?php foreach ($menuMoodle as $menuItem): ?>
      <a href="<?php echo $menuItem['url']; ?>">
        <img class="h-5" src="<?php echo PATH_ICONS . $menuItem['icon']; ?>" alt="<?php echo $menuItem['nombre']; ?>">
      </a>
    <?php endforeach; ?>
  </div>
</nav>