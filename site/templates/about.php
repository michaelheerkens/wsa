<?php snippet('header') ?>

<main id="content" class="white-background" role="main">
  <div class="container">
    <div class="inner">
      <?php $coverimage = $page->coverimage()->toFile(); ?>
      <?php if($coverimage): ?>
        <img src="<?= $coverimage->url() ?>" width="1240" height="698" alt="">
      <?php else: ?>
        <img src="assets/img/sample-slide.png" width="1240" height="698" alt="">
      <?php  endif ?>
      <div class="margin-4"></div>
      <div class="row">
				<div class="col-md-6">
					<h3><?= $page->intro()->html() ?></h3>
					<div class="margin-4"></div>
				</div>
				<div class="col-md-6">
					<p><?= $page->text()->kirbytext() ?></p>
				</div>
			</div>
      <div class="margin-2"></div>
      <div class="row">
      <?php
      $adviseItems = $page->list()->toStructure();
      $ind = 0;
      foreach($adviseItems as $adviseItem): ?>
        <div class="col-sm-4">
          <h5><?= $adviseItem->title->value() ?></h5>
          <ul class="fa-ul">
            <?php foreach($adviseItem as $i): ?>
              <?php if(substr($i->key, 0, 4) === 'item' && !empty($i->value)): ?>
                <li><i class="fa-li fa fa-check fa-colored"></i><?=$i->value?></li>
              <?php endif ?>
            <?php endforeach ?>
					</ul>
          <a href="<?= $adviseItem->buttonlink->value()?>" class="button"><?= $adviseItem->buttontext->value()?></a>
        </div>
        <?php if ($ind === 2):?>
          </div><div class="margin-2"></div><div class="row">
        <?php endif ?>
        <?php $ind++ ?>
      <?php endforeach ?>
    </div>

      <div class="margin-2"></div>
      <div class="clear"></div>
      <div class="col-sm-12 col-md-10 col-md-offset-1">
				<blockquote>
					<p>“<?= $page->quote()->value()?>”</p>
					<cite><?= $page->quoteby()->value()?></cite>
				</blockquote>
			</div>
      <div class="clear"></div>
      <div class="margin-2"></div>
    </div>
    <div class="margin-5"></div>
  </div>
</main>

<?php snippet('footer') ?>
