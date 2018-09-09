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
<!-- Start of Async Drift Code -->
<script>
    "use strict";

    !function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                t.factory = function(e) {
                    return function() {
                        var n = Array.prototype.slice.call(arguments);
                        return n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
                t[e] = t.factory(e);
            }), t.load = function(t) {
                var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(o, i);
            };
        }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('rywh2decnztb');
</script>
<!-- End of Async Drift Code -->
</body>
</html>
