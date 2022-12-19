<?php 
    if(!function_exists('finace_css_js_enqueue')){
        function finace_css_js_enqueue(){
            // css enqueue

            wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

            wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
            
            wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );
    
            wp_enqueue_style('bootstrapcss', get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css', array(), 'all');

            wp_enqueue_style('fontawesomecss', get_template_directory_uri(). '/assets/css/fontawesome.css', array(), 'all');

            wp_enqueue_style('templatemocss', get_template_directory_uri(). '/assets/css/templatemo-finance-business.css', array(), 'all');

            wp_enqueue_style('owlcss', get_template_directory_uri(). '/assets/css/owl.css', array(), 'all');

            wp_enqueue_style('customcss', get_stylesheet_uri());

            // js enqueue
            wp_enqueue_script('name', get_template_directory_uri(). '/vendor/jquery/jquery.min.js', array('jquery'), 'v1', true);

            wp_enqueue_script('bootstrapjs', get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), 'v1', true);
            
            wp_enqueue_script('customjs', get_template_directory_uri(). '/assets/js/custom.js', array('jquery'), 'v1', true);

            wp_enqueue_script('owljs', get_template_directory_uri(). '/assets/js/owl.js', array('jquery'), 'v1', true);

            wp_enqueue_script('slickjs', get_template_directory_uri(). '/assets/js/slick.js', array('jquery'), 'v1', true);

            wp_enqueue_script('accordionsjs', get_template_directory_uri(). '/assets/js/accordions.js', array('jquery'), 'v1', true);
        }
    }
    add_action('wp_enqueue_scripts', 'finace_css_js_enqueue');
?>