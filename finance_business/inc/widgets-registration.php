<?php 
    
    function finace_widgets_registrations() {
        // footer 1
        register_sidebar( array(
            'name'          => __( 'Footer One', 'finace' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on footer.', 'finace' ),
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ));

         // footer 2
         register_sidebar( array(
            'name'          => __( 'Footer Two', 'finace' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Widgets in this area will be shown on footer.', 'finace' ),
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ));

         // footer 3
         register_sidebar( array(
            'name'          => __( 'Footer There', 'finace' ),
            'id'            => 'sidebar-3',
            'description'   => __( 'Widgets in this area will be shown on footer.', 'finace' ),
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ));

         // footer 4
         register_sidebar( array(
            'name'          => __( 'Footer Foure', 'finace' ),
            'id'            => 'sidebar-4',
            'description'   => __( 'Widgets in this area will be shown on footer.', 'finace' ),
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ));
    }
    add_action( 'widgets_init', 'finace_widgets_registrations' );
?>