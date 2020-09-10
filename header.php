<!DOCTYPE html>
<html class="not-ie" lang="en"> <!--<![endif]-->
<?php wp_head(); ?>
  <!-- Header -->
  <header id="header">
    <div class="container">
      <div class="row t-container">
        <!-- Logo -->
        <div class="span3">
          <div class="logo">
            <a href="index.htm"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-header.png" alt=""></a>
          </div>            
        </div>
        <div class="span9"> 
          <div class="row space60"></div>
            <nav id="nav" role="navigation">
                <a href="#nav" title="Show navigation">Show navigation</a>
              <a href="#" title="Hide navigation">Hide navigation</a>
              <!-- Get menu -->            
              <?php 
                wp_nav_menu( 
                    array( 
                      'theme_location' => 'top',
                      'container'=> 'active',
                      'menu_id'        => 'clearfix',
                     ) ); 
              ?>            
            </nav>
         </div> 
      </div> 
       <div class="row space40"></div>
        <!-- Get the slider -->
        <?php if(is_front_page()){ ?>
          <div class="slider1 flexslider">
            <ul class="slides">
              <?php query_posts(
                array(
                  'post_type' => 'sliders',
                  'orderby' => 'rand'
                ) ); 
                    if(have_posts()) : while(have_posts()) : the_post();?>
                      <li class="slide">
                        <?php the_post_thumbnail(); ?>
                      </li>
                    <?php endwhile;
                    endif; 
                    wp_reset_query(); 
              ?>
            </ul>
        <?php } ?>
        </div>  <!-- Slider End -->
  </div> 
</header>
  <!-- Header End -->
