<?php snippet('header') ?>

<main id="content" class="white-background" role="main">
  <div class="container">

    <div class="margin-2"></div>

    <h6>Restyling</h6>
    <div class="sep red margin-1"></div>
    <div class="owl-carousel owl-thumbs">
      <?php
        $filtered = $page->children()->filterBy('tags', 'Woonstijladvies Restyling', '/');
        foreach($filtered as $article): ?>
        <div class="thumb dark-overlay">
          <div class="photo">
            <a href="<?= $article->url() ?>">
              <?php
              $image = $article->cover_image()->toFile();
              if($image):
              ?>
              <img src="<?= $image->url() ?>" alt="" width="434" height="434">
              <?php endif ?>
              <span class="info"><span class="big-excerpt"><?= $article->title()->html() ?></span></span>
            </a>
          </div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="margin-4"></div>

    <h6>Op maat</h6>
    <div class="sep red margin-1"></div>
    <div class="owl-carousel owl-thumbs">
      <?php
        $filtered = $page->children()->filterBy('tags', 'Woonstijladvies op Maat', '/');
        foreach($filtered as $article): ?>
        <div class="thumb dark-overlay">
          <div class="photo">
            <a href="<?= $article->url() ?>">
              <?php
              $image = $article->cover_image()->toFile();
              if($image):
              ?>
              <img src="<?= $image->url() ?>" alt="" width="434" height="434">
              <?php endif ?>
              <span class="info"><span class="big-excerpt"><?= $article->title()->html() ?></span></span>
            </a>
          </div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="margin-4"></div>

    <h6>Luxe</h6>
    <div class="sep red margin-1"></div>
    <div class="owl-carousel owl-thumbs">
      <?php
        $filtered = $page->children()->filterBy('tags', 'Woonstijladvies Luxe', '/');
        foreach($filtered as $article): ?>
        <div class="thumb dark-overlay">
          <div class="photo">
            <a href="<?= $article->url() ?>">
              <?php
              $image = $article->cover_image()->toFile();
              if($image):
              ?>
              <img src="<?= $image->url() ?>" alt="" width="434" height="434">
              <?php endif ?>
              <span class="info"><span class="big-excerpt"><?= $article->title()->html() ?></span></span>
            </a>
          </div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="margin-4"></div>

    <h6>Verkoopstyling</h6>
    <div class="sep red margin-1"></div>
    <div class="owl-carousel owl-thumbs">
      <?php
        $filtered = $page->children()->filterBy('tags', 'Woonstijladvies Verkoopstyling', '/');
        foreach($filtered as $article): ?>
        <div class="thumb dark-overlay">
          <div class="photo">
            <a href="<?= $article->url() ?>">
              <?php
              $image = $article->cover_image()->toFile();
              if($image):
              ?>
              <img src="<?= $image->url() ?>" alt="" width="434" height="434">
              <?php endif ?>
              <span class="info"><span class="big-excerpt"><?= $article->title()->html() ?></span></span>
            </a>
          </div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="margin-6"></div>

  </div>
</main>

<?php snippet('footer') ?>
