<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
  	<meta charset="utf-8">
  	<title><?= $page->title()->html() ?> | Woonstijladvies.nl</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="keywords" content="">

  	<link rel="shortcut icon" href="favicon.ico">
  	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic%7CRoboto:400,700%7CDroid+Serif" rel="stylesheet" type="text/css">
    <?= css('assets/css/font-awesome.min.css') ?>
    <?= css('assets/css/style.css') ?>
  </head>
  <body>

  	<header id="top" class="navbar" role="banner">
  		<div class="container">
  			<div class="inner">

  				<div class="site-title">
  					<h1><a href="<?= $site->home()->url() ?>"><img src="<?= $site->home()->url() ?>/assets/img/logo.png" width="204" height="56" alt="Exa"></a></h1>
  					<a href="#site-menu" class="site-menu-toggle">
  						<span class="sr-only">Toggle navigation</span>
  						<em class="first"></em><em class="middle"></em><em class="last"></em>
  					</a>
  				</div>
          <?php snippet('menu') ?>
  			</div>
  		</div>
  	</header>
