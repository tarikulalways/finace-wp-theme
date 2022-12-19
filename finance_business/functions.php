<?php 
    // after setup theme

    if(!function_exists('finace_setup_theme')){
        function finace_setup_theme(){
            add_theme_support('title-tag');
            add_theme_support('automatic-feed-links');
            /** post formats */
            $post_formats = array('image','gallery','link');
            add_theme_support( 'post-formats', $post_formats);
            /** HTML5 support **/
            add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
             /** refresh widgest **/
            add_theme_support( 'customize-selective-refresh-widgets' );

            load_theme_textdomain('finace', get_template_directory_uri(). '/languages');
            add_theme_support('post-thumbnails', array('slider', 'services', 'testimonial', 'our_service'));


            // register nav menus

            register_nav_menus(array(
                'finace_menu' => __('Primary Menu', 'finace')
            ));

            // nav walker

            require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
        }
    }
    add_action('after_setup_theme', 'finace_setup_theme');

    // active menu setup functions

    function finace_active_class ($classes, $item) {
      if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
      }
      return $classes;
    }
    add_filter('nav_menu_active_class' , 'finace_active_class' , 10 , 2);


    // plugin install

    get_template_part('/plugin/install-plugin');
    
    // finace demo data import

    require_once(get_template_directory(). '/demo-import/finace-demo-import.php');

    // css js enqueue

    require_once(get_template_directory(). '/inc/enqueue-css-js.php');

    // widgets register
    require_once(get_template_directory(). '/inc/widgets-registration.php');

    // theme options 

    require_once(get_template_directory(). '/theme-options/theme-option.php');
?>