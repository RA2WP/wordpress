<?php
/**
 * The WooCommerce pages template file.
 * @package HappenStance
 * @since HappenStance 1.0.0
*/
get_header(); ?>
    <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text"><?php if ( !is_product() ) { woocommerce_page_title(); } else { the_title(); } ?></span></h1>
<?php happenstance_get_breadcrumb(); ?>
    </div>
    <div class="entry-content">
<?php woocommerce_content(); ?>
    </div>   
  </div> <!-- end of content -->
<?php if ( is_product() ) { ?>
<?php if (get_theme_mod('happenstance_display_sidebar', $happenstance_defaults['happenstance_display_sidebar']) != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php }} else { ?>
<?php if (get_theme_mod('happenstance_display_sidebar_archives', $happenstance_defaults['happenstance_display_sidebar_archives']) != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php }} ?>
<?php get_footer(); ?>