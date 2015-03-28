<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package zerif

 */

?>

<section id="sponsors">
  <div class="container sponsors">
    <img src="<?php echo get_stylesheet_directory_uri() . '/images/sponsors.jpg' ?>" alt=""/>
  </div>
</section>


<footer id="footer">

<div class="container">

  <div class="col-xs-12">
    <nav class="" role="navigation"   id="footer-site-navigation">

      <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav main-nav-list', 'fallback_cb'     => 'zerif_wp_page_menu')); ?>

    </nav>
  </div>
  <div class="col-xs-12 developed_by">
    <p class="center">Desenvolupat a la HackathonGi 2015</p>
  </div>
</div> <!-- / END CONTAINER -->


</footer> <!-- / END FOOOTER  -->



<?php wp_footer(); ?>



</body>

</html>
