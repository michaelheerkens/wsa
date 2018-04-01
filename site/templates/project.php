<?php snippet('header') ?>

<main id="content" class="white-background" role="main">
  <div class="container">
    <h2 class="single-title"><?= $page->title()->html() ?></h2>
    <div class="owl-carousel owl-slider">
      <img src="img/sample-slide.png" width="1240" height="698" alt="">
      <img src="img/sample-slide.png" width="1240" height="698" alt="">
      <img src="img/sample-slide.png" width="1240" height="698" alt="">
    </div>
    <div class="margin-3"></div>
    <div class="row">
      <div class="col-sm-4 col-md-3 project-properties">
        <h6>Clients</h6>
        <p class="small">The Nordic Smorrebrod Food</p>
        <h6>Category</h6>
        <p class="small">Branding, UI/UX, Web Design</p>
        <h6>Posted</h6>
        <p class="small">July 30th, 2015</p>
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
        <p class="tags"><strong>Tagged:</strong><a href="#">Blog</a> <a href="#">Mobile</a> <a href="#">Agency</a> <a href="#">Portfolio</a></p>
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
