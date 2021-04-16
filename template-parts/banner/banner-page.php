<?php
$batpa_banner_image    = '';
$batpa_banner_title    = '';
$batpa_banner_subtitle = '';
$banner_class = '';

if (defined('FW')) {
   $batpa_banner_settings = batpa_theme_options('page_banner');
   $batpa_show_breadcrumb = batpa_theme_options('page_breadcumb_show');
   //image
   $batpa_banner_image    = (is_array($batpa_banner_settings) && $batpa_banner_settings['url'] != '') ?
      $batpa_banner_settings['url'] : '';

      if($batpa_banner_image !=''){
         $banner_class = 'banner_overlay';
      }

   //breadcumb 
} else {
   //default
   $batpa_banner_image    = '';
   $batpa_banner_title    = get_bloginfo('name');
   $batpa_show_breadcrumb = 'no';
}


?>

<div class="inner-banner-area <?php echo esc_attr($banner_class); ?>" style="background-image: url(<?php echo esc_url($batpa_banner_image); ?>);">
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
               <?php if (isset($batpa_show_breadcrumb) && $batpa_show_breadcrumb == 'yes') : ?>
                  <?php batpa_the_breadcrumb(); ?>
               <?php endif; ?>
            </div><!-- Banner Heading end -->
         </div><!-- Col end-->
      </div><!-- Row end-->
   </div><!-- Container end-->
</div><!-- Banner area end-->