<?php $config = get_option('finace_business');?>
<div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><?php echo esc_html($config['servic_title']);?> <em><?php echo esc_html($config['servic_color_text']);?></em></h2>
              <span><?php echo esc_html($config['servic_des']);?></span>
            </div>
          </div>
          <?php 
            $service_query = new WP_Query(array(
              'post_type' => 'services',
              'posts_per_page' => 3,
              'orderby' => 'menu-order',
              'order' => 'ASC'
            ));
            if($service_query){
              while($service_query-> have_posts()){
                $service_query-> the_post();
          ?>
          <div class="col-md-4">
            <div class="service-item">
              <img src="<?php the_post_thumbnail_url();?>" alt="">
              <div class="down-content">
                <h4><?php the_title();?></h4>
                <p><?php the_content();?></p>
                <a href="<?php echo esc_url(get_field('button_link'));?>" class="filled-button"><?php echo esc_html(get_field('button_text'));?></a>
              </div>
            </div>
          </div>
          <?php
              }wp_reset_postdata();
            }
          ?>
        </div>
      </div>
    </div>