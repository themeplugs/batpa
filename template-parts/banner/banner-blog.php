<?php
$banner_image    = '';
$banner_title    = '';
$banner_subtitle = '';

if (defined('FW')) {
   $banner_settings = theme_options('blog_banner');
   $show_breadcrumb = theme_options('breadcumb_show');
   //image
   $banner_image    = (is_array($banner_settings) && $banner_settings['url'] != '') ?
      $banner_settings['url'] : '';
   //breadcumb 
} else {
   //default
   $banner_image    = '';
   $banner_title    = get_bloginfo('name');
   $show_breadcrumb = 'no';
}


?>

<div class="inner-banner-area" id="inner-banner-area" style="background-image: url(<?php echo esc_url($banner_image); ?>);">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-heading">
               <h1 class="banner-title">
                  <?php
                  if (is_archive()) {
                     the_archive_title();
                  } elseif (is_single() || is_page()) {
                     the_title();
                  } else {
                     echo esc_html(get_bloginfo('name'));
                  }
                  ?>

               </h1>
               <?php if (isset($show_breadcrumb) && $show_breadcrumb == 'yes') : ?>
                  <?php the_breadcrumb(); ?>
               <?php endif; ?>
            </div><!-- Banner Heading end -->
         </div><!-- Col end-->
      </div><!-- Row end-->
   </div><!-- Container end-->
</div><!-- Banner area end-->