
  <?php 
    if(get_site_url('/one-page')){
      wp_safe_redirect(site_url());
    }
  ?>

  <?php get_footer();?>