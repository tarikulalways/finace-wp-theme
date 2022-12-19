<?php get_header();
  // template name: Services
?>

    <!-- Page Content -->
    <?php get_template_part('breadcumb/breadcumb');?>
    
    <div class="single-services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <?php 
                $servic_cats = get_terms('servic_cat');
                $i = 0;
                foreach($servic_cats as $servic_cat){
                  $i++;
              ?>
              <li><a href='#tabs-<?php echo $i;?>'><?php echo esc_html($servic_cat->name);?> <i class="fas fa-angle-right"></i></a></li>
              <?php
                }
              ?>

            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <?php 
                $service_query = new WP_Query(array(
                  'post_type' => 'our_service',
                  'posts_per_page' => -1,
                  'orderby' => 'menu-order',
                  'order' => 'ASC'
                ));
                if($service_query){
                  $r = 0;
                  while($service_query-> have_posts()){
                    $r++;
                    $service_query-> the_post();
              ?>
              <article id='tabs-<?php echo $r;?>'>
                <img src="<?php the_post_thumbnail_url();?>" alt="">
                <h4><?php the_title();?></h4>
                <p><?php echo get_the_content();?></p>
              </article>
              <?php
                  }wp_reset_postdata();
                }
              ?>
            </section>
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('/template-part/template-callback');?>

    <?php echo get_template_part('/template-part/template-brand');?>


    <!-- Footer Starts Here -->
    <?php get_footer();?>