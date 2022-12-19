<?php 
    $uploade_breadcumb_image = get_field('uploade_breadcumb_image');
  ?>
    <!-- Page Content -->
    <div class="page-heading header-text" style="background-image: url(<?php echo esc_url($uploade_breadcumb_image['url']);?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php the_title();?></h1>
            <span><?php echo get_the_excerpt();?></span>
          </div>
        </div>
      </div>
    </div>