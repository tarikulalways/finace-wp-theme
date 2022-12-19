<?php $config = get_option('finace_business');?>
<div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><?php echo esc_html($config['about_title']);?> <em><?php echo esc_html($config['about_color_title']);?></em></h2>
              <span><?php echo esc_html($config['about_des']);?></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              <?php 
                $testimonial_query = new WP_Query(array(
                  'post_type' => 'testimonial',
                  'posts_per_page' => -1,
                  'orderby' => 'menu-order',
                  'order' => 'ASC'
                ));
                if($testimonial_query){
                  while($testimonial_query-> have_posts()){
                    $testimonial_query-> the_post();
              ?>
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4><?php echo esc_html(get_field('name'));?></h4>
                  <span><?php echo esc_html(get_field('designations'));?></span>
                  <p><?php echo esc_html(get_field('descrptions'));?></p>
                </div>
                <img src="<?php the_post_thumbnail_url();?>" alt="tarik">
              </div>
              <?php
                  }wp_reset_postdata();
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>