<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
  	<meta charset="utf-8">
  	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="keywords" content="">

  	<link rel="shortcut icon" href="favicon.png">
  	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic%7CRoboto:400,700%7CDroid+Serif" rel="stylesheet" type="text/css">
    <?= css('assets/css/font-awesome.min.css') ?>
    <?= css('assets/css/style.css') ?>
  </head>
  <body>

  	<header id="top" class="navbar" role="banner">
  		<div class="container">
  			<div class="inner">

  				<div class="site-title">
  					<h1><a href="index.html"><img src="assets/img/logo.png" width="144" height="52" alt="Exa"></a></h1>
  					<a href="#site-menu" class="site-menu-toggle">
  						<span class="sr-only">Toggle navigation</span>
  						<em class="first"></em><em class="middle"></em><em class="last"></em>
  					</a>
  				</div>

  				<div id="site-menu">
  					<nav>
  						<ul>
  							<li class="current-menu-item"><a href="index.html">Home</a></li>
  							<li><a href="about.html">About</a></li>
  							<li class="menu-item-has-children">
  								<a href="work.html">Work</a>
  								<ul>
  									<li><a href="work.html">Classic Gallery</a></li>
  									<li><a href="work-categories.html">Category Based</a></li>
  									<li><a href="project.html">Single Project</a></li>
  								</ul>
  							</li>
  							<li class="menu-item-has-children">
  								<a href="blog.html">Blog</a>
  								<ul>
  									<li><a href="blog.html"> Fullpage Blog</a></li>
  									<li><a href="blog-sidebar.html">Blog with Sidebar</a></li>
  									<li><a href="post.html">Single Blog Post</a></li>
  								</ul>
  							</li>
  							<li class="menu-item-has-children">
  								<a href="features.html">Features</a>
  								<ul>
  									<li><a href="features.html">Styleguide</a></li>
  									<li><a href="clients.html">Clients</a></li>
  									<li class="menu-item-has-children">
  										<a href="#">Submenu Test</a>
  										<ul>
  											<li><a href="#">Submenu Item 1</a></li>
  											<li><a href="#">Submenu Item 2</a></li>
  											<li><a href="#">Submenu Item 3</a></li>
  										</ul>
  									</li>
  									<li><a href="404.html">404 Not Found</a></li>
  								</ul>
  							</li>
  							<li class="menu-item-has-children">
  								<a href="contact1.html">Contact</a>
  								<ul>
  									<li><a href="contact1.html">Contact &mdash; Style 1</a></li>
  									<li><a href="contact2.html">Contact &mdash; Style 2</a></li>
  								</ul>
  							</li>
  							<li class="menu-item-search">
  								<a href="search.html"><i class="fa fa-search"></i><i class="fa fa-times"></i></a>
  								<form method="get" id="site-searchform" class="searchform" action="search.html">
  									<input type="search" name="s" autocomplete="off" placeholder="Search&hellip;">
  									<input type="submit" value="&#xf002;">
  								</form>
  							</li>
  						</ul>
  					</nav>
  				</div>

  			</div>
  		</div>
  	</header>
