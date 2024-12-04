<?php
// Ruta al archivo menu.json
$menuPath = BASE_PATH . '/menu.json';
$menuData = json_decode(file_get_contents($menuPath), true);

// Obtener el array de menuMoodle
$menuMoodle = $menuData['menuMoodle'];
?>
<nav class="w-100 justify-between flex px-2 bg-orange-500">
  <div class="text-white">
    ¡Hola <span>
      <?php //echo $USER->firstname ." ". $USER->lastname;
      ?>!
    </span> <span class="size-xs">(<a href="/../../login/logout.php?sesskey=
    <?php //print sesskey();
    ?>&alt=logout" class="menimg  over">
        salir</a>)</span>
  </div>
  <div class="flex flex-cols justify-end gap-3 py-1">
    <?php foreach ($menuMoodle as $menuItem): ?>
      <a href="<?php echo $menuItem['url']; ?>">
        <img class="h-5 invert" src="<?php echo PATH_ICONS . '/' . $menuItem['icon']; ?>" alt="<?php echo $menuItem['alt']; ?>">
      </a>
    <?php endforeach; ?>
  </div>
</nav>