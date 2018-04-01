<?php snippet('header') ?>

<main id="content" class="white-background" role="main">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <h2 class="single-title no-bottom"><?= $page->title()->html() ?></h2>
        <p class="post-meta"><span>3 Days Ago, By <a href="#">Nicole</a></span></p>
        <p><?= $page->text()->kirbytext() ?></p>
      </div>
    </div>
        <div class="row">
          <div class="col-sm-6">
            <h5>Share this</h5>
            <p class="social-share no-bottom">
              <a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
              <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
              <a href="#" class="social-link"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="social-link"><i class="fa fa-dribbble"></i></a>
              <a href="#" class="social-link"><i class="fa fa-pinterest"></i></a>
              <a href="#" class="social-link"><i class="fa fa-behance"></i></a>
            </p>
          </div>
          <div class="col-sm-6">
            <p class="tags"><strong class="padding-bottom">Tagged:</strong><a href="#">Blog</a> <a href="#">Mobile</a> <a href="#">Post</a></p>
          </div>
        </div>
        <div class="clear"></div>

        <div class="sep margin-2"></div>

        <h5>Similar Posts</h5>
        <div class="owl-carousel owl-thumbs-2">
          <div class="thumb dark-overlay">
            <div class="photo">
              <a href="post.html">
                <img src="img/sample-thumb.png" alt="" width="434" height="434">
                <span class="info"><span class="big-excerpt">Din Kook</span></span>
              </a>
            </div>
          </div>
          <div class="thumb dark-overlay">
            <div class="photo">
              <a href="post.html">
                <img src="img/sample-thumb.png" alt="" width="434" height="434">
                <span class="info"><span class="big-excerpt">Maon</span></span>
              </a>
            </div>
          </div>
          <div class="thumb dark-overlay">
            <div class="photo">
              <a href="post.html">
                <img src="img/sample-thumb.png" alt="" width="715" height="715">
                <span class="info"><span class="big-excerpt">Northbound</span></span>
              </a>
            </div>
          </div>
        </div>
        <div class="margin-5"></div>

        <p>
          <a href="#" class="display-inline-block"><img src="img/sample-team.png" width="80" height="80" class="round" alt=""></a>
        </p>

        <div class="row">
          <div class="col-sm-6">
            <h5>Nicole Skidman</h5>
            <p>Nicole is an avid thinker, blogger, creative learner, frequent traveller and coffee hater. She blogs, when not designing, at <a href="#">nicole.me</a></p>
            <p class="social-share">
              <a href="#" class="social-link"><i class="fa fa-behance"></i></a>
              <a href="#" class="social-link"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
              <a href="#" class="social-link"><i class="fa fa-dribbble"></i></a>
            </p>
          </div>
          <div class="col-sm-6">
            <h5>More Posts by Nicole&hellip;</h5>
            <div class="owl-carousel owl-thumbs-3">
              <div class="thumb">
                <div class="photo">
                  <a href="post.html">
                    <img src="img/sample-thumb.png" width="100" height="100" alt="">
                    <span class="info"><em class="arrow-right centered"></em></span>
                  </a>
                </div>
              </div>
              <div class="thumb">
                <div class="photo">
                  <a href="post.html">
                    <img src="img/sample-thumb.png" width="100" height="100" alt="">
                    <span class="info"><em class="arrow-right centered"></em></span>
                  </a>
                </div>
              </div>
              <div class="thumb">
                <div class="photo">
                  <a href="post.html">
                    <img src="img/sample-thumb.png" width="100" height="100" alt="">
                    <span class="info"><em class="arrow-right centered"></em></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="margin-4"></div>

        <div id="disqus_thread"></div>
        <script type="text/javascript">
          var disqus_shortname = 'YOUR_SHORTNAME';
          (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
        <div class="margin-6"></div>
      </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
