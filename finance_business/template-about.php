<?php $config = get_option('finace_business');
  $company_thumbnail = $config['aboutpage_thumbnail'];
  $counter_bg = $config['counter_bg']
?>
<?php get_header();
  // template name: About page
?>

  <?php get_template_part('breadcumb/breadcumb');?>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>
                    <?php 
                      if($config['aboutpage_sub_title']){
                        echo esc_html($config['aboutpage_sub_title']);
                      }
                    ?>
                    </span>
                    <h2><?php echo esc_html($config['aboutpage_title']);?> <em><?php echo esc_html($config['aboutpage_color_title']);?></em></h2>
                    <p><?php echo esc_html($config['aboutpage_des']);?></p>
                    <a href="<?php echo esc_url($config['aboutpages_button_link']);?>" class="filled-button"><?php echo esc_html($config['aboutpage_button_text']);?></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="<?php echo esc_url($company_thumbnail['url']);?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><?php 
                if($config['team_section_title']){
                  echo esc_html($config['team_section_title']);
                }
              ?> <em><?php
                if($config['team_section_color_title']){
                  echo esc_html($config['team_section_color_title']);
                }
              ?></em></h2>
              <span><?php 
                if($config['team_section_des']){
                  echo esc_html($config['team_section_des']);
                }
              ?></span>
            </div>
          </div>
          <?php 
            $member_query = new WP_Query(array(
              'post_type' => 'team_members',
              'posts_per_page' => 3,
              'orderby' => 'menu-order',
              'order' => 'ASC'
            ));
            if($member_query){
              while($member_query-> have_posts()){
                $member_query-> the_post();
                $person_profile_image = get_field('person_profile_image');
          ?>
          <div class="col-md-4">
            <div class="team-item">
              <img src="<?php 
                if($person_profile_image){
                  echo esc_url($person_profile_image['url']);
                }
              ?>" alt="">
              <div class="down-content">
                <h4><?php 
                  if(get_field('person_name')){
                    echo esc_html(get_field('person_name'));
                  }
                ?></h4>
                <span><?php 
                  if(get_field('person_designations')){
                    echo esc_html(get_field('person_designations'));
                  }
                ?></span>
                <p><?php 
                  if(get_field('person_details')){
                    echo esc_html(get_field('person_details'));
                  }
                ?></p>
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

    <div class="fun-facts" style="background-image: url(<?php 
      if($counter_bg){
        echo esc_url($counter_bg['url']);
      }
    ?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <span><?php 
                if($config['cont_sub_title']){
                  echo esc_html($config['cont_sub_title']);
                }
              ?></span>
              <h2><?php 
                if($config['cont_title']){
                  echo esc_html($config['cont_title']);
                }
              ?> <em><?php 
              if($config['cont_color_title']){
                echo esc_html($config['cont_color_title']);
              }
            ?></em></h2>
              <p><?php 
              if($config['cont_des']){
                echo esc_html($config['cont_des']);
              }
            ?></p>
              <a href="<?php 
              if($config['cont_btn_link']){
                echo esc_html($config['cont_btn_link']);
              }
            ?>" class="filled-button"><?php 
            if($config['cont_btn_text']){
              echo esc_html($config['cont_btn_text']);
            }
          ?></a>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <?php 
                $counter_contetns = $config['counter_contetn'];
                foreach($counter_contetns as $counter_contetn){
              ?>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit"><?php
                    if($counter_contetn['counter_nbr']){
                      echo esc_html($counter_contetn['counter_nbr']);
                    }
                  ?></div>
                  <div class="count-title"><?php
                    if($counter_contetn['counter_text']){
                      echo esc_html($counter_contetn['counter_text']);
                    }
                  ?></div>
                </div>
              </div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php get_template_part('/template-part/template-testimonial');?>

    <!-- Footer Starts Here -->
    <?php get_footer();?>