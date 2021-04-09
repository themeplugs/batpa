<?php

function batpa_demo_import_lists(){
    $demo_url = esc_url('http://themeplugs.com/wp/demos/batpa/');
   $demo_lists = array(
      'demo1' =>array(
         'title' => __( 'Main Demo', 'batpa' ),/*Title*/
         'is_pro' => false,/*Is Premium*/
         'type' => 'elementor',/*Optional eg gutentor, elementor or other page builders or type*/
         'author' => __( 'themeplugs', 'batpa' ),/*Author Name*/
         'keywords' => array( 'business', 'multipurpose' ),/*Search keyword*/
         'categories' => array( 'business','multipurpose' ),/*Categories*/
            'template_url' => array(
                'content' => $demo_url.'/content.json',/*Full URL Path to content.json*/
                'options' => $demo_url.'/options.json',/*Full URL Path to options.json*/
                'widgets' => $demo_url.'/widgets.json'/*Full URL Path to widgets.json*/
            ),
         'screenshot_url' => $demo_url.'/screenshot.png',/*Full URL Path to demo screenshot image*/
         'demo_url' => 'http://themeplugs.com/wp/batpa/',/*Full URL Path to Live Demo*/
         'plugins' => array(
            array(
               'name'      => __( 'elementor', 'batpa' ),
               'slug'      => 'elementor',
            ),
            array(
               'name'      => __( 'Elementskit Lite', 'batpa' ),
               'slug'      => 'elementskit-lite',
            ),
            array(
               'name'      => __( 'Unyson', 'batpa' ),
               'slug'      => 'unyson',
            ),
         )
      ),


   );
   return $demo_lists;
}
add_filter('advanced_import_demo_lists','batpa_demo_import_lists');
