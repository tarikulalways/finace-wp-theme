<?php get_header();
  // template name: Contact page

  $config = get_option('finace_business');
?>

    <?php get_template_part('breadcumb/breadcumb');?>
    <div class="contact-information">
      <div class="container">
        <div class="row">
          <?php 
            $cont_info_query = new WP_Query(array(
              'post_type' => 'contactinfo',
              'posts_per_page' => -1,
              'orderby' => 'menu-order',
              'order' => 'ASC'
            ));
            if($cont_info_query){
              while($cont_info_query-> have_posts()){
                $cont_info_query-> the_post();
          ?>
          <div class="col-md-4">
            <div class="contact-item">
              <?php echo get_field('icon');?>
              <h4><?php 
                if(get_field('title')){
                  echo esc_html(get_field('title'));
                }
              ?></h4>
              <p><?php 
                if(get_field('descriptions')){
                  echo esc_html(get_field('descriptions'));
                }
              ?></p>
              <a href="#"><?php 
                if(get_field('status')){
                  echo esc_html(get_field('status'));
                }
              ?></a>
            </div>
          </div>
          <?php
              }wp_reset_postdata();
            }
          ?>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><?php 
                if($config['contact_section_title']){
                  echo esc_html($config['contact_section_title']);
                }
              ?> <em><?php 
                if($config['contact_section_color_title']){
                  echo esc_html($config['contact_section_color_title']);
                }
              ?></em></h2>
              <span><?php 
                if($config['contact_section_des']){
                  echo esc_html($config['contact_section_des']);
                }
              ?></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <?php echo do_shortcode('[contact-form-7 id="132" title="contact forms"]');?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->

      <?php 
        $contact_map = $config['contactmap'];
      ?>
      <iframe src="https://maps.google.com/maps?q=<?php echo $contact_map['latitude'];?>,<?php echo $contact_map['longitude'];?>&z=15&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            <?php 
              $brand_items = $config['brand_items'];
              $b = 0;
              foreach($brand_items as $brand_item){
                $partner_logo = $brand_item['barand_logo'];
                $b++
            ?>

              <div class="partner-item">
                <img src="<?php echo esc_url($partner_logo['url']);?>" title="<?php echo $b;?>" alt="<?php echo $b;?>">
              </div>
            <?php
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->
    <?php get_footer();?>