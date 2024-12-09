<?php
function renderImageComponent($imageSrc, $justifyClass = 'justify-center')
{
?>
  </section>
  <div class="w-full hidden sm:flex <?php echo $justifyClass; ?> my-4 relative z-0">
    <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
    </div>
    <img class="z-10 max-w-[22rem] mx-10" src="<?php echo $imageSrc; ?>" alt="">
  </div>
  <section>
  <?php
}
  ?>