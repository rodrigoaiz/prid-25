<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 10;
ob_start();
?>
<section>
  <button class="primary" onclick="window.dialog.showModal();">Open Dialog</button>

  <dialog id="dialog">
    <h2>Hello.</h2>
    <p>A CSS-only modal based on the <a href="https://developer.mozilla.org/es/docs/Web/CSS/::backdrop" target="_blank">::backdrop</a> pseudo-class. Hope you find it helpful.</p>
    <p>You can also change the styles of the <code>::backdrop</code> from the CSS.</p>
    <button onclick="window.dialog.close();" aria-label="close" class="x">❌</button>
  </dialog>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
