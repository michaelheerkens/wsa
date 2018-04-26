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
					<p>“First, we must ensure the validity of the approach. Second, we must confirm browser makers to add support for web fonts.”</p>
					<cite>Andrew Simons - web developer</cite>
				</blockquote>
			</div>
      <div class="clear"></div>
      <div class="team-container">
        <div class="team-member team-info">
          <h4>Team Players</h4>
          <p class="small">We are a digital agency with 20 collective experience in advertising printing, digital, typesetting and apparel industry.</p>
          <p class="small no-bottom">And Oh! <a href="#">We're Hiring</a></p>
        </div>
        <div class="team-member">
          <a href="#" class="team-photo">
            <img src="assets/img/sample-team.png" width="640" height="640" alt="">
            <span class="info"><span class="text"><span class="name">Emma Willkins</span><span class="description">SEO</span></span></span>
          </a>
        </div>
        <div class="team-member">
          <a href="#" class="team-photo">
            <img src="assets/img/sample-team.png" width="640" height="640" alt="">
            <span class="info"><span class="text"><span class="name">Joe Doe</span><span class="description">Partner</span></span></span>
          </a>
        </div>
        <div class="team-member">
          <a href="#" class="team-photo">
            <img src="assets/img/sample-team.png" width="640" height="640" alt="">
            <span class="info"><span class="text"><span class="name">Andras Ladocsi</span><span class="description">Web Developer</span></span></span>
          </a>
        </div>
        <div class="team-member">
          <a href="#" class="team-photo">
            <img src="assets/img/sample-team.png" width="640" height="640" alt="">
            <span class="info"><span class="text"><span class="name">Mike Gradski</span><span class="description">Web Designer</span></span></span>
          </a>
        </div>
        <div class="team-member">
          <a href="#" class="team-photo">
            <img src="assets/img/sample-team.png" width="640" height="640" alt="">
            <span class="info"><span class="text"><span class="name">Matt Johnson</span><span class="description">UI/UX Designer</span></span></span>
          </a>
        </div>
        <div class="clear"></div>
      </div>
      <div class="margin-2"></div>
    </div>
    <div class="margin-5"></div>

    <div class="row">
      <div class="col-sm-5 col-sm-offset-1">
        <h4>Join the league!</h4>
        <h4>Let's work together</h4>
        <a href="#" class="button filled">Get in touch</a>
        <div class="margin-2"></div>
      </div>
      <div class="col-sm-5">
        <div class="red-border testimonials-vertical-offset">
          <div class="owl-carousel owl-testimonials2 owl-red-dots">
            <div class="testimonial-item">
              <p>They listened to our ideas and objectives then produced a website that has been key competitive advantage in the whole industry.</p>
              <em class="name">- Corleone Clothings</em>
            </div>
            <div class="testimonial-item">
              <p>They listened to our ideas and objectives then produced a website that has been key competitive advantage in the whole industry.</p>
              <em class="name">- Corleone Clothings</em>
            </div>
            <div class="testimonial-item">
              <p>They listened to our ideas and objectives then produced a website that has been key competitive advantage in the whole industry.</p>
              <em class="name">- Corleone Clothings</em>
            </div>
          </div>
        </div>
        <div class="margin-3"></div>
      </div>
    </div>
    <img src="assets/img/sample-slide.png" width="1240" height="698" alt="">
    <div class="margin-5"></div>
  </div>
</main>

<?php snippet('footer') ?>
