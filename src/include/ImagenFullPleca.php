<?php
function renderImageComponent($imageSrc, $justifyClass)
{
  $mdJustifyClass = 'justify-center ' . 'md:' . $justifyClass;
?>
  </section>
  <div class="w-full flex <?php echo $mdJustifyClass; ?> my-4 relative z-0">
    <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
    </div>
    <img class="z-10 max-w-full md:max-w-[22rem] mx-10" src="<?php echo $imageSrc; ?>" alt="">
  </div>
  <section>
  <?php
}
  ?>