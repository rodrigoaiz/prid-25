	<?php

    //FireBUG
    ob_start();

    global $USER,$COURSE,$DB;

  ?>
  </head>

  <body>
    <header class="header">
      <nav class="header__navbar" id="header">
        <div class="container header__navbar__container">
          <section class="header__navbar__logo">
            <img src="../../../assets/images/logo-pel.svg" alt="logo" class="header__navbar__logo-logo" />
            <div class="header__navbar__logo-texto">PROGRAMAS DE ESTUDIO EN LÍNEA</div>
          </section>
          <ul class="navunidades header__navbar__ul">
          </ul>
        </div>
      </nav>
      <nav class="acciones">
        <div class="container acciones__container">
          <div class="acciones__article">
            <div class="acciones__article__div"><a href="/../../?theme=moove"><i class="ri-arrow-left-double-line"></i>Volver a mis cursos</a></div>
          </div>
          <div class="acciones__usuario acciones__article">
            <div class="acciones__article__div">¡Hola <span><?php echo $USER->firstname ." ". $USER->lastname; ?>!</span> <span class="size-xs">(<a href="/../../login/logout.php?sesskey=<?php print sesskey(); ?>&alt=logout" class="menimg  over">salir</a>)</span></div>
          </div>

        </div>
      </nav>
      <nav class="navtemas">
        <div class="container">
          <div class="navtemas__titulo">Temas en la unidad</div>
          <ol class="temasUnidad"></ol>
        </div>
      </nav>
    </header>

    <div class="container mb-5" id="menu_down">
      <div class="paginador__titulo">Pantallas de este tema</div>

        <div class="paginacion">
          <a id="prevPage" class="paginador__controles"><i class="ri-arrow-left-double-line"></i></a>
          <section class="paginador"></section>
          <a id="nextPage" class="paginador__controles"><i class="ri-arrow-right-double-line"></i></a>
        </div>

    </div>
