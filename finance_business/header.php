<?php $config = get_option('finace_business');?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>

    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <?php wp_head();?>
</head>

<!-- custom theme color change -->
<?php get_template_part('/theme-color/theme-color');?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li><a href="#"><i class="<?php echo esc_attr($config['time_icon']);?>"></i><?php echo esc_html($config['time_text']);?></a></li>
                        <li><a href="#"><i class="<?php echo esc_attr($config['phone_icon']);?>"></i><?php echo esc_html($config['header_top_number']);?></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <?php 
                            $header_social_grups = $config['header_social_grup'];
                            foreach($header_social_grups as $header_social_grup){
                        ?>
                        <li><a href="<?php echo esc_url($header_social_grup['header_social_link']);?>"><i class="<?php echo esc_attr($header_social_grup['header_social_icon']);?>"></i></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url(home_url());?>">
                    <h2><?php echo esc_html($config['add_logo']);?></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                    <!-- <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#top">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="one-page.html">One Page</a>
                        </li>
                    </ul> -->
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'finace_menu',
                            'menu_class'        => 'navbar-nav ml-auto',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                </div>
            </div>
        </nav>
    </header>