<?php snippet('header') ?>

<main id="content" class="white-background" role="main">
  <div class="container">
    <h2 class="single-title"><?= $page->title()->html() ?></h2>
    <div class="owl-carousel owl-slider">
      <?php
      $galleryItems = $page->gallery()->toStructure();

      foreach($galleryItems as $galleryItem):
        // try to get an image object from the filename
        $image = $galleryItem->gallery_image()->toFile();
        // check if the image object exists
        if($image): ?>
          <img src="<?= $image->url() ?>" width="1240" height="698" alt="">
        <?php endif ?>
      <?php endforeach ?>
    </div>
    <div class="clear"></div>
    <div class="margin-4"></div>
    <div class="margin-6"></div>
  </div>
</main>

<?php snippet('footer') ?>
