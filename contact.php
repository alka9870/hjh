<?php
/*Template Name: Contact*/
?>
<?php echo get_header(); ?>
<section id="titlebar">
	<!-- Container -->
	<div class="container">
	
		<div class="eight columns">
			<h3 class="left">Contact</h3>
		</div>
		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Contact</li>
				</ul>
			</nav>
		</div>

	</div>
	<!-- Container / End -->
</section>
  <!-- Content -->
<div id="content">
    <div class="container">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    	
      <div class="row">
        <div class="span12">     
          <h2><?php the_content(); ?></h2>
        </div>        
                
        <div class="span6">
            <h3><?php the_field('tabs'); ?></h3>
            <!-- Tabs -->
            <div class="tabbable">
            <ul class="nav nav-tabs">
<!--               <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
              <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
              <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
 -->         
            <?php 
              $args = array(
                'post_type' => 'servicesection',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
            $query = new WP_Query($args);
            $i=1;
            $j=1;
            ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
              <?php if($i==1){ ?>
                <li class="active"><a href="#tab<?php echo $i; ?>" data-toggle="tab"><?php echo get_the_title(); ?></a></li>
              <?php } 
              else{ ?>
                <li><a href="#tab<?php echo $i; ?>" data-toggle="tab"><?php echo get_the_title(); ?></a></li>
              <?php } ?>
              
            <?php $i++; endwhile;
            wp_reset_query(); 
            ?>
            </ul>
            <!-- <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <h3>I'm in Section 1</h3>
                <p>Ut wisi enim ad minim veniam, quis nostrud exeinim et.Pie wafer wypas candy canes toffee. Co adipisicing elit, lit in voluptah uveere velit aliquet.Pie wafer wypas candy canes toffee. Co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer posuere erat a ante venenatis dapibus posuerci tation ullamcorper susc nostrudexerci tation ullamcoramcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendinim veniam, quis nostrud exerci tation ullamcorper suscipit lobrerit in vul</p>
              </div>
              <div class="tab-pane" id="tab2">
                <h3>I'm in Section 2</h3>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcinim veniam, quis nostrud exerci tation ullamcorper t lobortis nisl ut alisequat. Duis autem vel einim veniam, quis nostrud exerinim veniam, quis nostrud exerci tation ullamcorper suscipit lobci tation ullamcorper suscipit lobum iriure dolor in hendruis aute irure dolor in reprehenderit in voluptah ultricies vehat a ante veere velit aliquet.Pie wafer wypas candy canes toffee. Co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer posuere erat a ante venenatis dapibus posuerit in vul</p>
              </div>
              <div class="tab-pane" id="tab3">
                <h3>I'm in Section 3</h3>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea coiipit lobmmodo consequat. Duis autem vel eum iriure dolor in hendrerit in vinim veniam, quis nostrud einim veniam, quis nostrud exeruis aute irure dolor in reprehenderit in voluptah ultricies vehat a ante veere velit aliquet.Pie wafer wypas candy canes toffee. Co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer posuere erat a ante venenatis dapibus posuci tation ullamcorper suscipit lobxerci tation ullamcorper suscipit lobul</p>
              </div>
            </div> -->
          </div>
          <!-- Tabs End -->
        </div>
        <div class="span6">
          <h3><?php echo get_field('content'); ?></h3>
          <p>
          Porta montes montes vel nunc cras porttitor mid elementum dictumst dignissim dapibus urna ac, enia, magna dictumst odio, a tincidunt rhoncus massa in in risus nunc augue pham? Aenean, urna, magna dictumst odio massa in in risus nunc augue phasellus mattis mid elementum dictumst dignissim dapibus urna ac, enim? 
          </p><p>
          Porttitor! Aenean, urna, magna dictumst odio, a tingue phasellus mattis mid elementum dictumst dignissim dapibucidunt rhoncus massa in in risus nunc augue phasellus mattis Aenean, urna, magna dictumst odio massa in in risus nunc augue phasellus mattis mid elementum dictumst dignissim dapibus.
          </p><p>
          Tingue phasellus mattis mid elementum dictumst dignissim dapibucidunt rhoncus massa in in risus nunc augue phasellus mattis Aenean, urna, magna dictumst odio massa in in risus nunc augue phasellus mattis mid elementum dictumst dignissim dapibus.
          </p>
        </div>        

        <div class="row space40"></div> 

        <div class="span12">
      <!-- Our Clients -->
      <div class="row">
        <div class="span12">
          <h3><?php the_field('our_clients'); ?></h3>
        </div>
      </div> 
     <?php 
        echo do_shortcode('[wcp-carousel id="160"]'); 
      ?>  
    <!-- <div id="our-clients" class="slider2 flexslider">
        <ul class="slides">
          <li>
            <div class="row">
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/1.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/2.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/3.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/4.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/5.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/6.png" alt="">
                </a>
              </div>
            </div>  
          </li>
          <li>
            <div class="row">
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/4.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/3.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/1.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/2.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/5.png" alt="">
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                    <img src="img/our-clients/6.png" alt="">
                </a>
              </div>
            </div>  
          </li>
        </ul>
      </div>  -->
      <!-- Our Clients End -->
        
      </div>
      <div class="row space50"></div> 
    </div>
  </div>
  <!-- Content End -->
   <?php endwhile; else : ?>
   <?php endif; ?>
<?php echo get_footer(); ?>