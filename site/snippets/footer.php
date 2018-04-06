<footer id="footer" role="contentinfo">
  <div class="container">
    <p>
      <a href="index.html" class="mini-logo"><img src="assets/img/logo-footer.png" width="156" height="43" alt="Exa"></a>
    </p>
    <p>&copy; 2015 Exa Studios Inc. All Rights Reserved.</p>
    <p>
      <a href="#" class="social-link"><i class="fa fa-behance"></i></a>
      <a href="#" class="social-link"><i class="fa fa-google-plus"></i></a>
      <a href="#" class="social-link"><i class="fa fa-dribbble"></i></a>
      <a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
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
