<footer id="footer" role="contentinfo">
  <div class="container">
    <p>
      <a href="<?= $site->home()->url() ?>" class="mini-logo"><img src="<?= kirby()->urls()->assets()?>/img/logo-footer.png" width="156" height="43" alt="Woonstijladvies"></a>
    </p>
    <p>&copy; <?= date("Y") ?> Woonstijladvies. All Rights Reserved.</p>
    <p>
      <a href="https://twitter.com/woonstijladvies" class="social-link"><i class="fa fa-twitter"></i></a>
      <a href="https://www.facebook.com/pages/Woonstijladvies/304331819608845" class="social-link"><i class="fa fa-facebook"></i></a>
      <a href="https://www.instagram.com/woonstijladvies/" class="social-link"><i class="fa fa-instagram"></i></a>
    </p>
  </div>
</footer>

<?= js('assets/js/jquery.min.js') ?>
<?= js('assets/js/site.js') ?>

<?= js('assets/js/owl.carousel.min.js') ?>
<script>
  jQuery(".owl-carousel.owl-slider").owlCarousel({
    items   : 1,
    nav     : true,
    navText : ['', ''],
    loop    : true
  });
  jQuery(".owl-carousel.owl-thumbs").owlCarousel({
    items   : 3,
    margin  : 30,
    nav     : true,
    navText : ['', ''],
    dots    : false,
    loop    : false,
    responsive : {
      0: {
        items   : 2
      },
      768: {
        items   : 3
      }
    }
  });
</script>

</body>
</html>
