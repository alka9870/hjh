<!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="span5">
        <h3>Contact Form</h3>
        <!-- SHortcode of contact form 7 -->
          <?php 
            echo do_shortcode('[contact-form-7 id="186" title="Contact form 1"]');
          ?>  
        </div>
        <div class="span3 offset3">
        <!-- sidebar text call -->
        <?php
          if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <ul id="sidebar">
              <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </ul>
        <?php endif;
        ?>
        <!-- social sidebar call -->         
          <div class="row space40"></div>  
          <?php
            if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
              <ul id="sidebar">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
              </ul>
                <?php endif;?>    
        </div>
      </div>
      
      <div class="row space50"></div>
      <div class="row">
        <div class="span6">
          <div class="logo-footer">
            Design by <a href="https://www.freshdesignweb.com">freshDesignweb</a>
          </div>                       
        </div>
        <div class="span6 right">
          &copy; 2020. All rights reserved.
        </div>
      </div>
      <?php wp_footer(); ?>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- JavaScripts -->
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>

</body>
</html>
  