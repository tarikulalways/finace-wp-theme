<?php $config = get_option('finace_business');
  $counter_bg = $config['counter_bg'];
?>
<div class="fun-facts" style="background-image: url(<?php echo esc_url($counter_bg['url']);?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-content">
                    <span><?php echo esc_html($config['cont_sub_title']);?></span>
                    <h2><?php echo esc_html($config['cont_title']);?>
                        <em><?php echo esc_html($config['cont_color_title']);?></em></h2>
                    <p><?php echo esc_html($config['cont_des']);?></p>
                    <a href="<?php echo esc_url($config['cont_btn_link']);?>"
                        class="filled-button"><?php echo esc_html($config['cont_btn_text']);?></a>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="row">
                    <?php 
                        $counter_contetns = $config['counter_contetn'];
                        if($counter_contetns){
                        foreach($counter_contetns as $counter_contetn){
                    ?>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit"><?php echo esc_html($counter_contetn['counter_nbr']);?></div>
                            <div class="count-title"><?php echo esc_html($counter_contetn['counter_text']);?></div>
                        </div>
                    </div>
                    <?php
                            }
                        }else{
                    ?>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">500</div>
                            <div class="count-title">Work House</div>
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
