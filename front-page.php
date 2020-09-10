 <!-- Content -->
<?php get_header(); ?>
  <div id="content">
    <div class="container">
      <div class="f-center">
        <?php the_content(); ?> 
      </div>
      <div class="f-hr"></div>
      <div class="row space40"></div>
      <div class="row">
        <div class="span12">
          <div class="row">
            <!-- Getting the info content of info post -->
              <?php query_posts(
                array(
                  'post_type' => 'infos',
                  'orderby' => 'rand'
                ) ); 
                ?>                  
                  <?php  if(have_posts()) : while(have_posts()) : the_post();?> 
                    <div class="span4">
                    <div class="ic-1">
                      <?php 
                        if ( has_post_thumbnail() ) {
                          the_post_thumbnail();
                        }
                        else {
                          echo '<i class="icon-lightbulb"></i>';
                        }
                      ?>
                      </div>
                      <div class="title-1"><h4><?php echo get_the_title(); ?></h4></div>
                      <div class="text-1"> 
                        <?php echo get_the_content(); ?>
                      </div>
                      </div>
                    <?php endwhile;
                    endif; 
                    wp_reset_query(); 
              ?>
            </div>
          </div>
        <div class="span12">
          <h2><?php the_field('image_title'); ?></h2>
        </div> 
        <div class="span8">      
          <img src="<?php the_field('image'); ?>" alt="">
        </div>
        <div class="span4">
          <div class="ic-1"></div>
          <div class="title-1"><?php the_field('service_label'); ?></div>
          <!--get List by post of services-->
          <div class="text-1"> 
            <ul class="list-b">
              <?php query_posts(
                array(
                  'post_type' => 'services',
                  'orderby' => 'rand'
                ) ); 
                ?>   
                <?php  
                  if(have_posts()) : while(have_posts()) : the_post();?> 
                    <li><i class="icon-ok"></i><?php echo get_the_title(); ?></li>
                    
                    <?php endwhile;
                    endif; 
                    wp_reset_query(); 
              ?> 
              </ul>   
          </div>
          <!-- List End -->
        </div>
               
      </div>
      <!--Started Horizontal Slider -->
      <div class="space40"></div>               
      <!-- Our Clients -->
      <div class="row">
        <div class="span12">
          <h3><?php the_field('our_clients'); ?></h3>
        </div>
      </div>
      <!-- All slider type of carousel --> 
      <?php 
        echo do_shortcode('[wcp-carousel id="160"]'); 
      ?>    
      <div class="space50"></div> 
       
    </div>
  </div>
  <!-- Content End -->
 <?php get_footer(); ?>