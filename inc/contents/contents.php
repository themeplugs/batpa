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
            array(
               'name'      => __( 'metform', 'batpa' ),
               'slug'      => 'metform',
            ),
          
         )
      ),
      'demo2' =>array(
         'title' => __( 'Finance Demo', 'batpa' ),/*Title*/
         'is_pro' => false,/*Is Premium*/
         'type' => 'elementor',/*Optional eg gutentor, elementor or other page builders or type*/
         'author' => __( 'themeplugs', 'batpa' ),/*Author Name*/
         'keywords' => array( 'business', 'multipurpose', 'finance'),/*Search keyword*/
         'categories' => array( 'business','multipurpose', 'finance' ),/*Categories*/
            'template_url' => array(
                'content' => $demo_url.'/finance/content.json',/*Full URL Path to content.json*/
                'options' => $demo_url.'/finance/options.json',/*Full URL Path to options.json*/
                'widgets' => $demo_url.'/finance/widgets.json'/*Full URL Path to widgets.json*/
            ),
         'screenshot_url' => $demo_url.'/finance/screenshot.png',/*Full URL Path to demo screenshot image*/
         'demo_url' => 'http://themeplugs.com/wp/batpa/finance',/*Full URL Path to Live Demo*/
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
            array(
               'name'      => __( 'metform', 'batpa' ),
               'slug'      => 'metform',
            ),
          
         )
      ),

      'demo3' =>array(
         'title' => __( 'Digital Agency Demo', 'batpa' ),/*Title*/
         'is_pro' => false,/*Is Premium*/
         'type' => 'elementor',/*Optional eg gutentor, elementor or other page builders or type*/
         'author' => __( 'themeplugs', 'batpa' ),/*Author Name*/
         'keywords' => array( 'business', 'multipurpose', 'agency'),/*Search keyword*/
         'categories' => array( 'business','multipurpose', 'agency' ),/*Categories*/
            'template_url' => array(
                'content' => $demo_url.'/agency/content.json',/*Full URL Path to content.json*/
                'options' => $demo_url.'/agency/options.json',/*Full URL Path to options.json*/
                'widgets' => $demo_url.'/agency/widgets.json'/*Full URL Path to widgets.json*/
            ),
         'screenshot_url' => $demo_url.'/agency/screenshot.png',/*Full URL Path to demo screenshot image*/
         'demo_url' => 'http://themeplugs.com/wp/batpa/digital-agency',/*Full URL Path to Live Demo*/
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
            array(
               'name'      => __( 'metform', 'batpa' ),
               'slug'      => 'metform',
            ),
          
         )
      ),
      'demo4' =>array(
         'title' => __( 'Restaurant Demo', 'batpa' ),/*Title*/
         'is_pro' => false,/*Is Premium*/
         'type' => 'elementor',/*Optional eg gutentor, elementor or other page builders or type*/
         'author' => __( 'themeplugs', 'batpa' ),/*Author Name*/
         'keywords' => array( 'restaurant'),/*Search keyword*/
         'categories' => array( 'restaurant' ),/*Categories*/
            'template_url' => array(
                'content' => $demo_url.'/restaurant/content.json',/*Full URL Path to content.json*/
                'options' => $demo_url.'/restaurant/options.json',/*Full URL Path to options.json*/
                'widgets' => $demo_url.'/restaurant/widgets.json'/*Full URL Path to widgets.json*/
            ),
         'screenshot_url' => $demo_url.'/restaurant/screenshot.png',/*Full URL Path to demo screenshot image*/
         'demo_url' => 'http://themeplugs.com/wp/batpa/restaurant',/*Full URL Path to Live Demo*/
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
            array(
               'name'      => __( 'metform', 'batpa' ),
               'slug'      => 'metform',
            ),
            array(
               'name'      => __( 'wp-cafe', 'batpa' ),
               'slug'      => 'wp-cafe',
            ),
            array(
               'name'      => __( 'woocommerce', 'batpa' ),
               'slug'      => 'woocommerce',
            ),
          
         )
      ),
      'demo5' =>array(
         'title' => __( 'Industrial Demo', 'batpa' ),/*Title*/
         'is_pro' => false,/*Is Premium*/
         'type' => 'elementor',/*Optional eg gutentor, elementor or other page builders or type*/
         'author' => __( 'themeplugs', 'batpa' ),/*Author Name*/
         'keywords' => array( 'industrial'),/*Search keyword*/
         'categories' => array( 'industrial' ),/*Categories*/
            'template_url' => array(
                'content' => $demo_url.'/industrial/content.json',/*Full URL Path to content.json*/
                'options' => $demo_url.'/industrial/options.json',/*Full URL Path to options.json*/
                'widgets' => $demo_url.'/industrial/widgets.json'/*Full URL Path to widgets.json*/
            ),
         'screenshot_url' => $demo_url.'/industrial/screenshot.png',/*Full URL Path to demo screenshot image*/
         'demo_url' => 'http://themeplugs.com/wp/batpa/industrial',/*Full URL Path to Live Demo*/
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
            array(
               'name'      => __( 'metform', 'batpa' ),
               'slug'      => 'metform',
            ),
         )
      ),
      'demo6' =>array(
         'title' => __( 'Event & Conference Demo', 'batpa' ),/*Title*/
         'is_pro' => false,/*Is Premium*/
         'type' => 'elementor',/*Optional eg gutentor, elementor or other page builders or type*/
         'author' => __( 'themeplugs', 'batpa' ),/*Author Name*/
         'keywords' => array( 'event'),/*Search keyword*/
         'categories' => array( 'event' ),/*Categories*/
            'template_url' => array(
                'content' => $demo_url.'/event/content.json',/*Full URL Path to content.json*/
                'options' => $demo_url.'/event/options.json',/*Full URL Path to options.json*/
                'widgets' => $demo_url.'/event/widgets.json'/*Full URL Path to widgets.json*/
            ),
         'screenshot_url' => $demo_url.'/event/screenshot.png',/*Full URL Path to demo screenshot image*/
         'demo_url' => 'http://themeplugs.com/wp/batpa/event',/*Full URL Path to Live Demo*/
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
            array(
               'name'      => __( 'metform', 'batpa' ),
               'slug'      => 'metform',
            ),
            array(
               'name'      => __( 'woocommerce', 'batpa' ),
               'slug'      => 'woocommerce',
            ),
            array(
               'name'      => __( 'wp-event-solution', 'batpa' ),
               'slug'      => 'wp-event-solution',
            ),
         )
      ),


   );
   return $demo_lists;
}
add_filter('advanced_import_demo_lists','batpa_demo_import_lists');

