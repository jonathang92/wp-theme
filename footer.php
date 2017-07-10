<div class="clearfix"></div>
<footer>
  <section id="ft_widget">
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
  </section>
  <div class="clearfix"></div>
  <p id="copyright">Dev-theme-1 @2017 By Jonathan González</p>
</footer>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
  jQuery("body").niceScroll({
  zindex: 113,
  cursorwidth: 15,
  autohidemode: false,
  background: '#333333',
  cursorcolor: '#BF2222',
  cursorborderradius: 0,
  cursorborder: 'none'
  });
</script>
</body>
</html>
