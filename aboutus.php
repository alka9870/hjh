<?php
/*Template Name:About Us*/
?>
<?php get_header(); ?>
<section id="titlebar">
	<div class="container">
		<div class="eight columns">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			    <?php if(function_exists('bcn_display')){
			        bcn_display();
			    } ?>
			</div>
	    </div>
	</div>
</section>
  <!-- Content -->
<div id="content">
    <div class="container">
        <?php if ( have_posts() ) { 
        	while ( have_posts() ) { the_post(); ?>
		        <div class="row">
		            <div class="span12">
				        <?php the_content(); ?>  
		            	<h3><?php the_field('our_team'); ?></h3>
				        <div class="slider2 team flexslider">
				            <ul class="slides">
				            	<?php 
				              	$slider = array('post_type'=>'aboutsliders', 'posts_per_page'=>-1, 'order'=>'DESC');
				          		$slider_query = get_posts($slider);
				          		$devided_array = array_chunk($slider_query, 4);
				          		foreach($devided_array as $key  => $c){ ?>
				                	<li>
				                		<div class="row">
				            				<?php foreach ($c as $key => $value) {
				            					$post_id = $value->ID;
				            					$featured_img_url = get_the_post_thumbnail_url($post_id,'full'); ?>
				            					<a href="#">
								                    <div class="span3 square-1">
								                        <div class="img-container">
								                            <img src="<?php echo $featured_img_url; ?>" alt="">
								                        <div class="img-bg-icon"></div>
								                        </div>
								                        <h4>John Smith</h4>
								                         managing director  
								                    </div>
								                </a>
						                	<?php } ?>
						                </div>
				                	</li>
				                <?php } ?>
				            </ul>
				        </div>  
		            
		          
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
				                    <h3><i class="icon-signin hidden-tablet">
				                    </i><?php the_field('more_info'); ?></h3>
				                </div>
				            </div>
				            <div class="space30 visible-phone"></div>
				            <!-- Line -->
				            <div class="span12"><hr></div>
			            </div>
			          	<!-- Typography Row End-->
				        <div class="row space10"></div>  
				            <div class="row">
				            <!-- List -->    
				            <div class="span4"> 
				             <h3><?php the_field('list_about'); ?></h3>
				                <ul class="list-a">
				                	<!-- List get data from aboutlist posttype -->
				                	<?php query_posts(
				                        array(
				                        'post_type' => 'aboutlists',
				                        'orderby' => 'rand'
				                    ) ); 
				                    ?>   
				                    <?php  
				                        if(have_posts()) : while(have_posts()) : the_post();?> 
				                            <li><?php echo get_the_title(); ?></li>                   
				                                <?php endwhile;
				                                endif; 
				                        wp_reset_query(); 
				                    ?> 
				                </ul>   
				            </div>
				            <!-- List End -->              
				            <!-- Progress Bar -->    
				            <div class="span4">
					            <h3><?php the_field('progress_bar'); ?></h3>
                            <!-- Progress Bar -->
					        <?php 
					        echo do_shortcode('[skillwrapper type="bar"]
                            [skill title_background="#fb8865 !important" bar_foreground="#f7a53b" bar_background="#fb8865" percent="73" title="HTML/CSS 73%"]

                            [skill title_background="#fb8865 !important" bar_foreground="#f7a53b" bar_background="#fb8865" percent="100" title="Web Design 100%"]

                            [skill title_background="#fb8865 !important" bar_foreground="##f7a53b" bar_background="#fb8865" percent="78" title="Photography 78%"]

                            [skill title_background="#fb8865 !important" bar_foreground="##f7a53b" bar_background="#fb8865" percent="80" title="Sound Design 80%"]

                            [skill title_background="#fb8865 !important" bar_foreground="#f7a53b" bar_background="#fb8865" percent="63" title="Party 63%"]
                             [/skillwrapper]') ?>
				            </div>
				            <!-- //Progress Bar End --> 
				  
				            <!-- Client Says --> 
				            <div class="span4">
				              <h3><?php the_field('client_says'); ?></h3> 
				              <div class="client-says">            
				               <!--  “Claritas est etiam processus dynamicus, qui sur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas. Aliquam at erat in purus aliquet mollis. Fusce elementum velit vel dolor iaculis egestas. posuere vel vitae  elementum velit nibh.” -->
				               <?php the_field('client_comments'); ?>
				              </div>
				              <div class="client-says-2">
				                <div class="quotes">
				                  <i class="icon-quote-right"></i><?php the_field('client_designation') ?><!-- John Doe, Everton Inc. -->
				                </div>  
				              </div> 
				            </div>
				            <!-- Client Says End --> 
				            </div>                                    
				          <div class="row space50"></div>  
				        </div>
		      		</div>
    			</div>
    		</div>
   		<?php 
 		}
 	}
  get_footer(); ?>