<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
  	<meta charset="utf-8">
  	<title><?= $page->title()->html() ?> | Woonstijladvies.nl</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<meta name="description" content="<?= $page->description()->html() ?>">
    <meta name="keywords" content="<?= $page->keywords()->html() ?>">

  	<link rel="shortcut icon" href="<?= $site->home()->url() ?>/assets/img/favicon.ico">
  	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic%7CRoboto:400,700%7CDroid+Serif" rel="stylesheet" type="text/css">
    <?= css('assets/css/font-awesome.min.css') ?>
    <?= css('assets/css/style.css') ?>
    <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-27977332-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
      <?= js('assets/js/jquery.min.js') ?>
   
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#66757f"
    },
    "button": {
      "background": "#ff2641"
    }
  },
  "position": "top",
  "static": true,
  "content": {
    "message": "Deze website maakt gebruik van cookies. Door gebruik te maken van de website geef je aan hiermee akkoord te zijn. Meer weten?",
    "dismiss": "OK!",
    "link": "Bekijk onze cookiepagina"
  }
})});
</script>
    
  </head>
  <body>

  	<header id="top" class="navbar" role="banner">
  		<div class="container">
  			<div class="inner">

  				<div class="site-title">
  					<span><a href="<?= $site->home()->url() ?>"><img src="<?= $site->home()->url() ?>/assets/img/logo.png" width="204" height="56" alt="Exa"></a></span>
  					<a href="#site-menu" class="site-menu-toggle">
  						<span class="sr-only">Toggle navigation</span>
  						<em class="first"></em><em class="middle"></em><em class="last"></em>
  					</a>
  				</div>
          <?php snippet('menu') ?>
  			</div>
  		</div>
  	</header>
