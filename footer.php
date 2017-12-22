<div class="top-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
              <?php dynamic_sidebar( 'left_footer_area' ); ?>
            </div>
            <div class="col-md-4">
              <?php dynamic_sidebar( 'center_footer_area' ); ?>
            </div>
            <div class="col-md-4">
              <?php dynamic_sidebar( 'right_footer_area' ); ?>
            </div>
        </div>
  </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <p id="copyright"><?php if ( ember_get_option( 'copyright' ) != '' ) { echo esc_html( ember_get_option('copyright') ); } else { echo "&copy ". get_bloginfo( 'name' ) . " " . date('Y'); } ?></p>
            </div>
            <div class="col-md-5 col-md-offset-2 text-right">
                <p id="credit"><a href="#top">Back To Top</a></p>
            </div>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
