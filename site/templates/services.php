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
                  <img src="<?= $coverimage->url() ?>" width="715" height="715" alt="">
                <?php  endif ?>
                <span class="info"><strong class="big-title"><?= $page->header()->html() ?></strong><span class="excerpt"><?= $page->text()->kirbytext() ?></span></span>
            </div>
          </div>
        </div>

        <?php
        $adviseItems = $page->advise()->toStructure();
        $ind = 0;
        foreach($adviseItems as $adviseItem):
          // try to get an image object from the filename
          $image = $adviseItem->image()->toFile();
          ?>
          <?php if($ind===0): ?>
            <div class="box col-sm-5 col-md-3">
              <div class="post-box vertical clearfix">
                <a href="<?= $adviseItem->link()->html() ?>" class="image-link arrow-icon">
                  <?php if($image): ?>
                    <img src="<?= $image->url() ?>" width="434" height="434" alt="">
                  <?php  endif ?>
                </a>
                <div class="extra-info">
                  <p class="meta small">door <a href="#">Nicole</a></p>
                  <h5><a href="<?= $adviseItem->link()->html() ?>"><?= $adviseItem->title()->html() ?></a></h5>
                </div>
              </div>
            </div>
          <?php elseif($ind==1): ?>
            <div class="box col-sm-6 col-md-3">
              <div class="post-box vertical clearfix">
                <div class="extra-info">
                  <p class="meta small">door <a href="#">Nicole</a></p>
                  <h5><a href="<?= $adviseItem->link()->html() ?>"><?= $adviseItem->title()->html() ?></a></h5>
                </div>
                <a href="<?= $adviseItem->link()->html() ?>" class="image-link arrow-icon dark-overlay">
                  <?if($image): ?>
                    <img src="<?= $image->url() ?>" width="434" height="434" alt="">
                  <? endif ?>
                </a>
              </div>
            </div>
          <?php else: ?>
            <div class="box col-sm-6">
              <div class="post-box horizontal clearfix">
                <?php if($adviseItem->flipimage()->value() != "1") : ?>
                <a href="<?= $adviseItem->link()->html() ?>" class="image-link image-left arrow-icon">
                  <?if($image): ?>
                    <img src="<?= $image->url() ?>" width="434" height="434" alt="">
                  <? endif ?>
                </a>
                <?php endif ?>
                <div class="extra-info">
                  <p class="meta small">door <a href="#">Nicole</a></p>
                  <h5><a href="<?= $adviseItem->link()->html() ?>"><?= $adviseItem->title()->html() ?></a></h5>
                </div>
              <?php if($adviseItem->flipimage()->value() === "1") : ?>
                <a href="<?= $adviseItem->link()->html() ?>" class="image-link image-right arrow-icon">
                  <?if($image): ?>
                    <img src="<?= $image->url() ?>" width="434" height="434" alt="">
                  <? endif ?>
                </a>
                <?php endif ?>
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
