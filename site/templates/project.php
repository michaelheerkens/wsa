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
          <a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
          <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
          <a href="#" class="social-link"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="social-link"><i class="fa fa-dribbble"></i></a>
          <a href="#" class="social-link"><i class="fa fa-pinterest"></i></a>
          <a href="#" class="social-link"><i class="fa fa-behance"></i></a>
        </p>
      </div>
      <div class="col-sm-8 col-md-8 col-md-offset-1">
        <?= $page->text()->kirbytext() ?>
        <div class="margin-1"></div>
        <p class="tags"><strong>Tags:</strong>
          <?php foreach($page->tags()->split('/') as $tag): ?>
              <a href="#"><?= $tag ?></a>
          <?php endforeach ?>
        </p>
      </div>
    </div>
    <div class="margin-3"></div>
    <h5>Similar Projects</h5>
    <div class="owl-carousel owl-thumbs">
      <div class="thumb dark-overlay">
        <div class="photo">
          <a href="project.html">
            <img src="img/sample-thumb.png" alt="" width="434" height="434">
            <span class="info"><span class="big-excerpt">Din Kook</span></span>
          </a>
        </div>
      </div>
      <div class="thumb dark-overlay">
        <div class="photo">
          <a href="project.html">
            <img src="img/sample-thumb.png" alt="" width="434" height="434">
            <span class="info"><span class="big-excerpt">Suprette</span></span>
          </a>
        </div>
      </div>
      <div class="thumb dark-overlay">
        <div class="photo">
          <a href="project.html">
            <img src="img/sample-thumb.png" alt="" width="434" height="434">
            <span class="info"><span class="big-excerpt">Frock</span></span>
          </a>
        </div>
      </div>
      <div class="thumb dark-overlay">
        <div class="photo">
          <a href="project.html">
            <img src="img/sample-thumb.png" alt="" width="434" height="434">
            <span class="info"><span class="big-excerpt">Maon</span></span>
          </a>
        </div>
      </div>
      <div class="thumb dark-overlay">
        <div class="photo">
          <a href="project.html">
            <img src="img/sample-thumb.png" alt="" width="715" height="715">
            <span class="info"><span class="big-excerpt">Northbound</span></span>
          </a>
        </div>
      </div>
    </div>
    <div class="margin-6"></div>
  </div>
</main>

<?php snippet('footer') ?>
