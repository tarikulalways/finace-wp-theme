<?php $config = get_option('finace_business');?>
<div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            <?php 
              $brand_items = $config['brand_items'];
              $b = 0;
              if($brand_items){
              foreach($brand_items as $brand_item){
                $partner_logo = $brand_item['barand_logo'];
                $b++
            ?>

              <div class="partner-item">
                <img src="<?php echo esc_url($partner_logo['url']);?>" title="<?php echo $b;?>" alt="<?php echo $b;?>">
              </div>
            <?php
                }}
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
