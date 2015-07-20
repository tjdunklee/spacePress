<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package spacePress
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="site-info">
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'spacepress' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'spacepress' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'spacepress' ), 'spacepress', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
      </div><!-- .site-info -->
    </footer><!-- #colophon -->
  </div><!-- .site-wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
