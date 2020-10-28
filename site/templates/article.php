<?php snippet('header') ?>

<main id="content" class="white-background" role="main">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <h1 class="single-title no-bottom"><?= $page->title()->html() ?></h1>
        <p class="post-meta"><span>door <a href="#">Nicole</a></span></p>
        <p><?= $page->text()->kirbytext() ?></p>
          <?php if($tags = $page->tags()):?>

                  <p class="tags">
	       <?php foreach($tags->split('/') as $tag):?>
                  <a href="<?= $page->parent()->url() ?>/tag:<?= $tag?>">
		            <?= $tag; ?>
                  </a>

	      <?php endforeach ?>
                  </p>
	        <?php endif ?>
          <h5>Andere interessante blogs voor jou</h5>
          <div class="owl-carousel owl-thumbs-2">


	      <?php
	      $siblings = $page->siblings(false)->visible()->filterBy('date', '<', strtotime($page->date('Y-m-d')))->sortBy('date', 'desc');;
	      foreach($siblings as $sibling): ?>
              <div class="thumb dark-overlay">
                  <div class="photo">
                      <a href="<?= $sibling->url() ?>">
			  <?php if($image = $sibling->coverimage()->toFile()): ?>
                              <img src="<?= $image->url() ?>" alt="" width="434" height="434">
			  <?php endif ?>
                          <span class="info"><span class="big-excerpt"><?= $sibling->title()->html() ?></span></span>
                      </a>
                  </div>
              </div>
	      <?php endforeach ?>

          </div>
      </div>
    </div>

        <div class="clear"></div>
        <div class="margin-4"></div>

      </div>
    </div>
  </div>
</main>
<?= js('assets/js/owl.carousel.min.js') ?>
    <script>
        jQuery(".owl-carousel.owl-thumbs-2").owlCarousel({
            items   : 2,
            margin  : 30,
            nav     : true,
            navText : ['', ''],
            dots    : false,
            loop    : false
        });

        jQuery(".owl-carousel.owl-thumbs-3").owlCarousel({
            items   : 3,
            margin  : 30,
            nav     : false,
            navText : ['', ''],
            dots    : false,
            loop    : false
        });
    </script>
<?php snippet('footer') ?>
