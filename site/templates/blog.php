<?php snippet('header') ?>

<main id="content" role="main">
  <div class="container container-masonry">
    <div class="inner">
      <div class="row">
        <div class="box col-sm-7 col-md-6">
          <div class="thumb featured">
            <div class="photo">
                <?php $coverimage = $page->coverimage()->toFile(); ?>
                <?php if($coverimage): ?>
                  <img src="<?= $coverimage->url() ?>" width="715" alt="">
                <?php  endif ?>
                <span class="info"><strong class="big-title"><?= $page->header()->html() ?></strong><span class="excerpt"><?= $page->text()->html() ?></span></span>
            </div>
          </div>
        </div>
      <?php
        $ind = 0;
        $filtered = $page->children()->visible()->filterBy('date', '>', date('Y-m-d'))->sortBy('date', 'desc');
        foreach($filtered as $article): ?>
        <?php $image = $article->coverimage()->toFile(); ?>
        <?php if($ind===0): ?>
          <div class="box col-sm-5 col-md-3">
            <div class="post-box vertical clearfix">
              <a href="<?= $article->url() ?>" class="image-link arrow-icon">
                <?php if($image): ?>
                  <img src="<?= $image->url() ?>" width="434" height="434" alt="">
                <?php  endif ?>
              </a>
              <div class="extra-info">
                <p class="meta small"><?= $article->date('d M Y') ?> door <a href="#">Nicole</a></p>
                <h5><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h5>
              </div>
            </div>
          </div>
        <?php elseif($ind==1): ?>
          <div class="box col-sm-6 col-md-3">
            <div class="post-box vertical clearfix">
              <div class="extra-info">
                <p class="meta small"><?= $article->date('d M Y') ?> door <a href="#">Nicole</a></p>
                <h5><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h5>
              </div>
              <a href="<?= $article->url() ?>" class="image-link arrow-icon dark-overlay">
                <?if($image): ?>
                  <img src="<?= $image->url() ?>" width="434" height="434" alt="">
                <? endif ?>
              </a>
            </div>
          </div>
        <?php else: ?>
          <div class="box col-sm-6">
            <div class="post-box horizontal clearfix">
              <a href="<?= $article->url() ?>" class="image-link image-left arrow-icon">
                <?if($image): ?>
                  <img src="<?= $image->url() ?>" width="434" height="434" alt="">
                <? endif ?>
              </a>
              <div class="extra-info">
                <p class="meta small"><?= $article->date('d M Y') ?> door <a href="#">Nicole</a></p>
                <h5><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h5>
              </div>
            </div>
          </div>
        <?php endif ?>
        <?php $ind++ ?>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
