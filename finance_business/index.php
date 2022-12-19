<?php get_header();
    // template name: Home page
?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php get_template_part('template-part/template-slider');?>
    <!-- Banner Ends Here -->

    <?php get_template_part('template-part/template-cta');?>

    <?php get_template_part('template-part/template-service');?>

    <?php get_template_part('template-part/template-grothe');?>

    <?php get_template_part('template-part/template-company');?>

   <?php get_template_part('template-part/template-testimonial');?>

    <?php get_template_part('template-part/template-callback');?>

    <?php get_template_part('template-part/template-brand');?>
    <div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
    <?php wp_link_pages();?>
    <!-- Footer Starts Here -->
    <?php get_footer();?>