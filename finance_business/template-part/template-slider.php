<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        <!-- Item -->
        <?php 
            $slider_query = new WP_Query(array(
                'post_type' => 'slider',
                'posts_per_page' => -1,
                'orderby' => 'menu-order',
                'order' => 'ASC'
            ));
            if($slider_query){
                while($slider_query-> have_posts()){
                    $slider_query-> the_post();
        ?>
        <div class="item item-1">
            <div class="img-fill" style="background-image: url(<?php the_post_thumbnail_url();?>);">
                <div class="text-content">
                    <h6><?php echo esc_html(get_field('sub_title'));?></h6>
                    <h4><?php the_title();?></h4>
                    <p><?php echo wp_trim_words(get_the_content(), 40);?></p>
                    <a href="<?php echo esc_url(get_field('slider_button_link'));?>" class="filled-button"><?php echo esc_html(get_field('slider_button_text'));?></a>
                </div>
            </div>
        </div>

        <?php
                }wp_reset_postdata();
            }
        ?>
        <!-- // Item -->
    </div>
</div>