<?php snippet('header') ?>

<main id="content" class="white-background" role="main">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <h1 class="single-title no-bottom"><?= $page->title()->html() ?></h1>
        <p class="post-meta"><span>door <a href="#">Nicole</a></span></p>
        <p><?= $page->text()->kirbytext() ?></p>
          <h5>Andere interessante blogs voor jou</h5>
          <div class="owl-carousel owl-thumbs-2">


	      <?php
	      $siblings = $page->siblings();
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
          <div class="margin-5"></div>
          <div id="disqus_thread"></div>
          <script>

              /**
               *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
               *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
              /*
               var disqus_config = function () {
               this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
               this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
               };
               */
              (function() { // DON'T EDIT BELOW THIS LINE
                  var d = document, s = d.createElement('script');
                  s.src = 'https://woonstijladvies.disqus.com/embed.js';
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
              })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          <div class="margin-5"></div>
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