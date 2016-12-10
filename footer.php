<div class="container-fluid footer">
  <div class="row">
    <div class="col-sm-12">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
  		    <a href="http://www.jonzorn.com"><img src="http://www.jonzorn.com/wp-content/uploads/logo_site.png" class="footlogo"></a>
  		    </div>
		      
          <div class="col-sm-8">
            <nav role="navigation" class="footer-links">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					  </nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
				
<script>
//mobile menu functionality
jQuery("nav select").change(function() {
  window.location = jQuery(this).find("option:selected").val();
});
</script>

<?php wp_footer(); ?>

</body>
</html>