      <footer id="footer">
        <div class="in-mark">
          <div class="container">© <?php echo date("Y"); ?> <a href="<?php echo home_url(); ?>" real="nofollow"><?php bloginfo('name'); ?></a>
            <span>Powered by <a rel="nofollow" target="_blank" href="https://cn.wordpress.org">WordPress</a>. Theme by
            <a rel="nofollow" target="_blank" href="http://chopstack.com">cho</a></span></div>
        </div>
      </footer>
    </div>
    <button class="side-click click-hamburger"><span class="bar"></span>
    </button><script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/static/index.js"></script>
  <!-- WordPress Native Foot Output -->
  <?php wp_footer(); ?>
  </body>
</html>