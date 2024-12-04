<nav class="w-100 justify-between flex px-2 bg-orange-500">
  <div class="text-white">
    ¡Hola <span>
      <?php //echo $USER->firstname ." ". $USER->lastname; ?>!
    </span> <span class="size-xs">(<a href="/../../login/logout.php?sesskey=
    <?php //print sesskey(); ?>&alt=logout" class="menimg  over">
    salir</a>)</span>
  </div>
  <div class="flex flex-cols justify-end gap-3 py-1">
    <img class="h-5" src="<?php echo CSS_URL . '/img/moodle.png' ?>" alt="">
    <img class="h-5" src="<?php echo CSS_URL . '/img/calif.png' ?>" alt="">
    <img class="h-5" src="<?php echo CSS_URL . '/img/foro.png' ?>" alt="">
    <img class="h-5" src="<?php echo CSS_URL . '/img/mensajes.png' ?>" alt="">
    <img class="h-5" src="<?php echo CSS_URL . '/img/salir.png' ?>" alt="">
  </div>
</nav>