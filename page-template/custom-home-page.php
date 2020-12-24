<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_theme_mod('fitness_insight_slider_arrows') != ''){ ?>  
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php
          for ( $i = 1; $i <= 4; $i++ ) {
            $mod =  get_theme_mod( 'fitness_insight_post_setting' . $i );
            if ( 'page-none-selected' != $mod ) {
              $fitness_insight_slide_post[] = $mod;
            }
          }
           if( !empty($fitness_insight_slide_post) ) :
          $args = array(
            'post_type' =>array('post','page'),
            'post__in' => $fitness_insight_slide_post
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            <div class="carousel-caption">
              <h2><?php the_title();?></h2>
              <div class="home-btn">
                <a href="<?php the_permalink(); ?>"><?php echo esc_html('GET STARTED','fitness-insight'); ?></a>
              </div>
            </div>
          </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-double-left"></i><?php echo esc_html('PREV','fitness-insight'); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><?php echo esc_html('NEXT','fitness-insight'); ?><i class="fas fa-angle-double-right"></i></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <section id="middle-sec">
    <div class="row m-0">
      <?php
        for ( $s = 1; $s <= 4; $s++ ) {
          $mod =  get_theme_mod( 'fitness_insight_middle_sec_settigs' . $s );
          if ( 'page-none-selected' != $mod ) {
            $fitness_insight_post[] = $mod;
          }
        }
         if( !empty($fitness_insight_post) ) :
        $args = array(
          'post_type' =>array('post','page'),
          'post__in' => $fitness_insight_post
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $s = 1;
      ?>
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-lg-3 col-md-6 p-0">
          <div class="box">
            <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            <div class="outer-box">
              <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
            </div>
            <div class="box-content">
              <i class="<?php echo esc_html(get_theme_mod('fitness_insight_mid_section_icon'. $s)); ?>"></i>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
              <p><?php $excerpt = get_the_excerpt(); echo esc_html( fitness_insight_string_limit_words( $excerpt, 8 )); ?></p>
            </div>
          </div>
        </div>
      <?php $s++; endwhile;
      wp_reset_postdata();?>
      <?php else : ?>
      <div class="no-postfound"></div>
        <?php endif;
      endif;?>
    </div>
  </section>
</main>

<?php get_footer(); ?>