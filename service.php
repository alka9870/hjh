<?php
/*Template Name:Service*/
?>
<?php get_header(); ?>
<section id="titlebar">
	<!-- Container -->
	<div class="container">	
		<div class="eight columns">
			<h3 class="left">Service</h3>
		</div>		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Service</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- Container / End -->
</section>
  <!-- Content -->
<div id="content">
  <div class="container">
    <?php if ( have_posts() ) { 
          while ( have_posts() ) { the_post(); ?>
       <!-- Content -->
      <div class="row">
        <div class="span12">
          <?php the_content(); ?>
          <h3><?php the_field('service_consultancy'); ?></h3>
          <div class="ic-1"></div>
          <img src="<?php the_field('service_image'); ?>" alt="">
          <div class="title-1"><h4><?php the_field('our_service'); ?></h4></div>
           <!-- List -->
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
      <!-- List End -->
      <div class="space20"></div>
        <div class="row">
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
               /* the_post_thumbnail();*/
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
    <div class="space30"></div>      
      <!-- Typography Row -->
      <div class="row t-row">
        <!-- Line -->
        <div class="span12"><hr></div>
        <div class="span9">
          <h2><?php the_field('fastest_growing'); ?></h2>
        </div>
        <div class="span3">
          <!-- Button -->
          <div class="btn btn-blue f-right">
            <!-- Title -->
            <h3><i class="icon-signin hidden-tablet"></i><?php the_field('accession'); ?></h3>
          </div>
        </div>
        <div class="space30 visible-phone"></div>
        <div class="span12"><hr></div>
      </div>
      <!-- Typography Row End-->
      <div class="row">
        <div class="span6">
          <h3><?php the_field('accordion'); ?></h3>
          <!-- Accordion -->
          <div class="accordion" id="accordion2">
            <?php 
            $i=0;
            $args = array(
                'post_type' => 'accordationinfo',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
            $obituary_query = new WP_Query($args);
            ?>
            <?php while ($obituary_query->have_posts()) : $obituary_query->the_post(); ?>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $i; ?>">
                    <?php echo get_the_title(); ?>
                  </a>
                </div>
                <div id="collapse<?php echo $i; ?>" class="accordion-body collapse">
                  <div class="accordion-inner"><?php the_content(); ?></div>
                </div>
              </div>
              <?php $i++; endwhile;             
              wp_reset_query(); 
            ?> 
          </div>
          <!-- Accordion End -->   
        </div>      
        <div class="span6">
          <h3><?php the_field('new_services'); ?></h3>
          <!-- Tabs -->
          <div class="tabbable">
            <ul class="nav nav-tabs">
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
            
            <div class="tab-content">
              <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php if($j==1){ ?>
                  <div class="tab-pane active" id="tab1">
                    <h3><?php echo get_the_title(); ?></h3>
                    <p><?php echo get_the_content(); ?></p>
                  </div>
                <?php } 
                else{ ?>
                  <div class="tab-pane" id="tab<?php echo $j; ?>">
                    <h3><?php echo get_the_title(); ?></h3>
                    <?php echo get_the_content(); ?>
                  </div>
                <?php } ?>
                
              <?php $j++; endwhile;
              wp_reset_query(); 
              ?>
            </div>
            
          </div>
          <!-- Tabs End -->
        </div>
      </div>  

      <div class="row space30"></div>  

      <!-- Our Clients -->
      <div class="row">
        <div class="span12">
          <h3>Our Clients</h3>
        </div>
      </div> 
    <!--Get slider -->
      <!-- <div id="our-clients" class="slider2 flexslider"> -->
        <!-- <ul class="slides">
          <li> -->
            <?php echo do_shortcode('[wcp-carousel id="160"]'); ?>  
       <!--    </li> 
        </ul> -->
     <!--  </div>  -->
      <!-- Our Clients End -->
      <div class="row space50"></div>  
    </div>
  </div>
</div>
  <!-- Content End -->
    <?php 
    }
  }
  get_footer(); ?>
  <!-- Content End -->