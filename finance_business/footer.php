<?php $config = get_option('finace_business');?>
<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
          </div>
          
          <div class="col-md-3 footer-item">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
          </div>
          <div class="col-md-3 footer-item">
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
          </div>
          <div class="col-md-3 footer-item last-item">
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
              <?php dynamic_sidebar( 'sidebar-4' ); ?>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p><?php 
              if($config['copy_title']){
                echo esc_html($config['copy_title']);
              }
            ?></p>
          </div>
        </div>
      </div>
    </div>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    <?php wp_footer();?>
  </body>
</html>