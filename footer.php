<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kateva
 */

?>

</div> <!-- columns -->
	</div><!-- #page-contents -->

  <div class="container-fluid bottom-bar">
    <div class="container">
      <footer id="colophon" class="site-footer">
        <div class="row">
          <div class="col">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-left") ) : ?>
            <?php endif;?>
          </div>
          <div class="col">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-right") ) : ?>
            <?php endif;?>
          </div>
        </div><!-- .site-info -->
        <div class="row">
          <div id="copyright" class="col copyright">&copy; <?php echo date("Y"); ?> E.I.C.C. Inc. All rights reserved.</div>
        </div>
      </footer><!-- #colophon -->
    </div><!-- container -->
  </div><!-- container-fluid -->

</div><!-- #page -->
  
<?php wp_footer(); ?>

</body>
</html>
