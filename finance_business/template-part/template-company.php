<?php $config = get_option('finace_business');
  $company_thumbnail = $config['company_thumbnail'];
?>
<div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="<?php echo esc_url($company_thumbnail['url']);?>" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span><?php echo esc_html($config['company_sub_title']);?></span>
                    <h2><?php echo esc_html($config['company_title']);?> <em><?php echo esc_html($config['company_color_title']);?></em></h2>
                    <p><?php echo esc_html($config['company_des']);?></p>
                    <a href="<?php echo esc_url($config['company_button_link']);?>" class="filled-button"><?php echo esc_html($config['company_button_text']);?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>