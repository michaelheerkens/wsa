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
    <div class="margin-3"></div>
    <div class="row">
      <div class="col-sm-4 col-md-3 project-properties">
        <h6>Type woning</h6>
        <p class="small"><?= $page->project()->html() ?></p>
        <h6>Soort advies</h6>
        <p class="small"><?= $page->title()->html() ?></p>
        <h6>Woonstijl</h6>
        <p class="small"><?= $page->style()->html() ?></p>
        <p class="social-share">
          <a href="https://twitter.com/woonstijladvies" class="social-link"><i class="fa fa-twitter"></i></a>
          <a href="https://www.facebook.com/pages/Woonstijladvies/304331819608845" class="social-link"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/woonstijladvies/" class="social-link"><i class="fa fa-instagram"></i></a>
        </p>
      </div>
      <div class="col-sm-8 col-md-8 col-md-offset-1">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
    <div class="margin-4"></div>
    <div class="margin-6"></div>
  </div>
</main>

<?php snippet('footer') ?>
