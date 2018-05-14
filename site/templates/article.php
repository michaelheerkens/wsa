<?php snippet('header') ?>

<main id="content" class="white-background" role="main">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <h2 class="single-title no-bottom"><?= $page->title()->html() ?></h2>
        <p class="post-meta"><span>door <a href="#">Nicole</a></span></p>
        <p><?= $page->text()->kirbytext() ?></p>
      </div>
    </div>

        <div class="clear"></div>
        <div class="margin-4"></div>
        <div class="margin-6"></div>
      </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
