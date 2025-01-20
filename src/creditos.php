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
<title>Programa de Regularización e Iniciación a la Docencia - Créditos</title>
</head>



<body>

  <?php renderMenu($menu); ?>
  <?php renderMenuMoodle(); ?>
  <main>
    <section>
      <h1 class="text-3xl text-orangeown uppercase">Créditos</h1>
      <div class="grid md:grid-cols-2 md:gap-4 gap-2">
        <article class="bg-slate-300 shadow-sm shadow-darkown/50 p-4">
          <h3>Secretaría Académica </h3>
          <p>María Elena Juárez Sánchez (secretaria)</p>
          <h3>Departamento de Formación de Profesores</h3>
          <p>María Alejandra Gasca Fernández</p>
          <p>Thalía Michelle Domínguez Granillo</p>
          <p>Judith Adriana Díaz Rivera</p>
          <p>Russell Gustavo Cabrera González</p>
          <p class="font-bold">Secretaría Auxiliar del Área de Matemáticas</p>
          <p class="font-bold">Secretaría Auxiliar del Área de Ciencias Experimentales</p>
          <p class="font-bold">Secretaría Auxiliar del Área Histórico-Social</p>
          <p class="font-bold">Secretaría Auxiliar del Área de Talles de Lenguaje y Comunicación</p>
          <p class="font-bold">Departamento de Inglés</p>
          <p class="font-bold">Departamento de Francés</p>
        </article>
        <article class="bg-slate-300 shadow shadow-darkown/50 p-4">
          <h3>Secretaría de Servicios de Apoyo al Aprendizaje</h3>
          <p>Taurino Marroquín Cristóbal</p>
          <h3>Departamento de Medios Digitales</h3>
          <p>Claudia Durán Olmos</p>
          <h3>Diseño instruccional</h3>
          <p>Yadira Jannet Jiménez Taboada</p>
          <h3>Desarrollo Web y Administración Plataforma Moodle</h3>
          <p>Jesús Rodrigo Aizpuru Parra</p>
          <p>Karla Gabriela Moreno Vega</p>
        </article>
      </div>
    </section>
  </main>
  <style>
    h3 {
      font-size: 1.2rem !important;
      font-weight: bold;
      text-transform: uppercase;
    }
  </style>
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