<?php /*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<section id="titlebar">
	<!-- Container -->
	<div class="container">
	
		<div class="eight columns">
			<h3 class="left">Gallery</h3>
		</div>
		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Gallery</li>
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
         		<?php echo the_content(); ?>
    			<div class="row">
    				<!-- Get Category -->
            		<div class="span12">  
                    	<?php 
                    	$i=0;
                        $term_args = array(
						    'taxonomy' => $gallerytaxonomy,
						    );
						$terms = get_terms( $term_args ); ?>
                        <ul id="portfolio-filter">
							<?php foreach( $terms as $term ) {?>
							    <li <?php if($i == 0){ echo "class='active'"; } ?>  >  
							    	<a href="#" class="filter" data-filter="<?php if($i==0){ echo "*"; }else{ echo '.' .$term->slug; } ?>"><?php echo $term->name; ?></a>
							    </li>
							    <?php wp_reset_postdata(); ?>
							<?php $i++; } ?>
    		        	</ul>


			        	<section class="row" id="portfolio-items">
			                <!-- <ul class="portfolio"> --> 
			            <!-- call the gallery -->    	
			                <ul class="portfolio">
			                	<?php query_posts(
				                	array(
				                    'post_type' => 'galleries',
				                    'posts_per_page' => 12,
				                    'orderby' => 'rand'
				                    ) ); 
			                    	$loop = new WP_Query( $args );
					                if(have_posts()) : while(have_posts()) : the_post();?>
					                	<?php 
					                		$categories = get_the_terms( $post->ID, 'gallerytaxonomy' ); 
					                		foreach ($categories as $value) { ?>
					                			<li class="span3 project <?php echo $value->slug; ?>">
						                        	<?php the_post_thumbnail(); ?>
						                        	<h3><?php the_field('author_name'); ?></h3>
						                        	<a href="" style="color:#08c"><?php the_field('designation'); ?></a>
					                   			</li>
					                		<?php } ?>
					                <?php endwhile; endif; 
			                	wp_reset_query();  ?>
			            	</ul>                           
			            </section>             
							<!-- Content End -->
					</div> 
				</div> 
			</div> 
		</div>
	<?php 
	endwhile; 
	else: endif; ?> 
	</div> </div> 

  <?php get_footer(); ?>
  <!-- Footer -->
