<?php snippet('header') ?>

<main id="content" role="main">
  <div class="container container-boxes">
    <div class="row">
      <div class="col-sm-6">
        <div class="box white-bg" style="background-image:url(img/sample-inside.png)">
          <h1><?= $page->title()->kirbytext() ?></h1>
          <p><?= $page->subtitle()->kirbytext() ?></p>
          <p class="small contact-address-info">
            <i class="fa fa-map-marker"></i>
            <?= $page->address()->kirbytext() ?>
          </p>
          <p class="small contact-address-info">
            <i class="fa fa-envelope"></i>
            <?= $page->email()->kirbytext() ?>
          </p>
          <p class="small contact-address-info">
            <i class="fa fa-phone"></i>
            <?= $page->phone()->kirbytext() ?>
          </p>
        </div>
        <div class="box white-bg text-center">
          <h5><?= $page->socialmedia_title()->kirbytext() ?></h5>
          <p><?= $page->socialmedia_subtitle()->kirbytext() ?></p>
          <p class="social-share no-bottom">
            <a href="https://twitter.com/woonstijladvies" class="social-link"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/pages/Woonstijladvies/304331819608845" class="social-link"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/woonstijladvies/" class="social-link"><i class="fa fa-instagram"></i></a>
          </p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="box white-bg text-center">
          <div class="col-md-6">
            <p class="twitter-follow">
              <a href="<?= $page->socialmedia_pinterestlink()->kirbytext() ?>" class="username"><i class="fa fa-pinterest"></i><?= $page->socialmedia_pinterest()->kirbytext() ?></a>
              <a href="<?= $page->socialmedia_pinterestlink()->kirbytext() ?>" class="button"><?= $page->socialmedia_followtext()->kirbytext() ?></a>
            </p>
          </div>
          <div class="col-md-6">
            <h5 class="twitter-follow-text no-bottom"><?= $page->socialmedia_intro()->kirbytext() ?></h5>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="box white-bg">
          <h5>Verstuur bericht</h5>
          <div class="sep red"></div>
          <div class="margin-1"></div>
          <form action="contact1.html" class="no-bottom">
            <label for="name" class="sr-only">instagram</label>
            <input type="text" class="underline" name="name" id="name" placeholder="Jouw volledige naam..." required>
            <label for="email" class="sr-only">E-mail</label>
            <input type="email" class="underline" name="email" id="email" placeholder="Jouw e-mailadres..." required>
            <label for="message" class="sr-only">Bericht</label>
            <textarea class="underline" name="message" id="message" cols="30" rows="6" placeholder="Plaats hier je vraag..." required></textarea>
            <div class="margin-1"></div>
            <input type="submit" value="Verstuur nu">
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
