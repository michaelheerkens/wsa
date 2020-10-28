<?php snippet('header') ?>
<script src="https://www.google.com/recaptcha/api.js"></script>
<main id="content" role="main">
  <div class="container container-boxes">
    <div class="row">
      <div class="col-sm-6">
        <div class="box white-bg">
          <h1><?= $page->title()->text() ?></h1>
          <p><?= $page->subtitle()->text() ?></p>
          <p class="small contact-address-info">
            <i class="fa fa-map-marker"></i>
            <?= $page->address()->kirbytext() ?>
          </p>
          <p class="small contact-address-info">
            <i class="fa fa-envelope"></i>
            <?= $page->email()->kirbytext() ?>
          </p>
          <p class="small contact-address-info">
            <i class="fa fa-phone"></i>
            <?= $page->phone()->kirbytext() ?>
          </p>
        </div>
        <div class="box white-bg text-center">
          <h5><?= $page->socialmedia_title()->text() ?></h5>
          <p><?= $page->socialmedia_subtitle()->text() ?></p>
          <p class="social-share no-bottom">
            <a href="https://twitter.com/woonstijladvies" class="social-link"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/pages/Woonstijladvies/304331819608845" class="social-link"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/woonstijladvies/" class="social-link"><i class="fa fa-instagram"></i></a>
          </p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="box white-bg text-center">
          <div class="col-md-6">
            <p class="twitter-follow">
              <a href="<?= $page->socialmedia_pinterestlink()->text() ?>" class="username"><i class="fa fa-pinterest"></i><?= $page->socialmedia_pinterest()->text() ?></a>
              <a href="<?= $page->socialmedia_pinterestlink()->text() ?>" class="button"><?= $page->socialmedia_followtext()->text() ?></a>
            </p>
          </div>
          <div class="col-md-6">
            <h5 class="twitter-follow-text no-bottom"><?= $page->socialmedia_intro()->text() ?></h5>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="box white-bg">
          <h5>Verstuur bericht</h5>
          <div class="sep red"></div>
          <div class="margin-1"></div>
          <?php
            $post = kirby()->request()->data();
            $send = false;
            if($post){

              $data = array(
                'secret' => "6LeyjNwZAAAAAGr9xeawZbLTT74f_DsjTGwlG8qT",
                'response' => $post['g-recaptcha-response']
              );

              $verify = curl_init();
              curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
              curl_setopt($verify, CURLOPT_POST, true);
              curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
              curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
              $response = json_decode(curl_exec($verify), true);

              if(isset($post['sendmail']) && $post['sendmail'] == 1 && $response['success'] === true) {
                $email = email(array(
                  'to'      => 'info@woonstijladvies.nl',
                  'from'    =>  'michael.heerkens@allblue.nl',
                  'subject' => 'Nieuw bericht via woonstijladvies.nl - ' . $post['name'],
                  'body'    => "Naam: {$post['name']}\nEmail: {$post['email']}\nBericht: {$post['message']}" ,
                  'service' => 'postmark',
                  'options' => array(
                    'key' => 'ac89bdf1-7d2e-46ba-a9a7-5b9cb670fb71',
                  )
                ));

                if($send = $email->send()) {
                  echo 'Bedankt voor je bericht! We nemen snel contact op.';
                } else {
                  echo $email->error()->message();
                }
              }
            }
          ?>
          <?php if(!$send):?>
          <form action="?sendmail=1" method="post" class="no-bottom" id="contactform">
            <label for="name" class="sr-only">instagram</label>
            <input type="text" class="underline" name="name" id="name" placeholder="Jouw volledige naam..." required>
            <label for="email" class="sr-only">E-mail</label>
            <input type="email" class="underline" name="email" id="email" placeholder="Jouw e-mailadres..." required>
            <label for="message" class="sr-only">Bericht</label>
            <textarea class="underline" name="message" id="message" cols="30" rows="6" placeholder="Plaats hier je vraag..." required></textarea>
            <div class="margin-1"></div>
            <button class="g-recaptcha" data-sitekey="6LeyjNwZAAAAANyl3mLxU42NhzlSSEdR_dK148JL" data-callback='onSubmit' data-action='submit'>Verstuur nu</button>
          </form>
        <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
   function onSubmit(token) {
     document.getElementById("contactform").submit();
   }
 </script>
<?php snippet('footer') ?>
