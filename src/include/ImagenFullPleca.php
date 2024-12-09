<?php
function renderImageComponent($imageSrc, $justifyClass = 'md:justify-center')
{
  $mdJustifyClass = 'md:' . $justifyClass;
?>
  </section>
  <div class="w-full flex justify-center <?php echo $mdJustifyClass; ?> my-4 md:my-10 relative gap-14 z-0">
    <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
    </div>
    <img class="z-10 block max-w-xs xl:max-w-72 md:mx-10" src="<?php echo $imageSrc; ?>" alt="">
  </div>
  <section>
  <?php
}
  ?>