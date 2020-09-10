<?php
/*
  Template Name: Services
 */
?>
<?php get_header(); ?>
	<?php
        $args = array( 'post_type' => 'services', 'posts_per_page' => 2);
            $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    the_title();?>
                    <div class="im234" style="height:500px; width: 400px;"><?php the_post_thumbnail(); ?></div>
                    <?php
                    the_content();
                endwhile;
    ?>
<?php get_footer(); ?>