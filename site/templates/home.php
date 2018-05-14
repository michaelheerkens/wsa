<?php snippet('header') ?>


<main id="content" role="main">
  <div class="container container-masonry">
    <div class="inner">
      <div class="row">
        <?php $ind = 0; ?>
        <?php foreach($page->blocks()->toStructure() as $item): ?>
          <?php $icon = $page->image($item->icon()); ?>

          <?php if($ind === 0): ?>
          <div class="box col-sm-4 col-md-6">
            <div class="thumb featured">
              <div class="photo">
                <a href="<?= $item->url()->html() ?>">
                  <img src="<?= $icon->url() ?>" alt="" width="715" height="715">
                  <span class="info"><strong class="big-title"><?= $item->title()->html() ?></strong><span class="excerpt"><?= $item->text()->html() ?></span><em class="arrow-right"></em></span>
                </a>
              </div>
            </div>
          </div>
        <?php endif ?>

          <?php if($ind > 0): ?>
          <div class="box col-xs-6 col-sm-4 col-md-3">
            <div class="thumb">
              <div class="photo">
                <a href="<?= $item->url()->html() ?>">
                  <img src="<?= $icon->url() ?>" alt="" width="434" height="434">
                  <span class="info"><strong class="title"><?= $item->title()->html() ?></strong><span class="excerpt"><?= $item->text()->html() ?></span><em class="arrow-right"></em></span>
                </a>
              </div>
            </div>
          </div>
        <?php endif ?>

        <?php $ind++; ?>
        <?php endforeach ?>
      </div>
    </div>
    <div class="margin-2"></div>
    <div class="row">
				<div class="col-sm-4">
					<p><?= $page->text()->kirbytext() ?></p>
				</div>
				<div class="col-sm-8">
					<p><?= $page->intro()->kirbytext() ?></p>
				</div>
			</div>
    <div class="clear"></div>
  </div>
</main>

<?php snippet('footer') ?>
