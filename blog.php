<?php
   /*Template Name:Blog*/
?>
<?php echo get_header(); ?>
<section id="titlebar">
	<!-- Container -->
	<div class="container">	
		<div class="eight columns">
			<h3 class="left">Blogs</h3>
		</div>		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Blogs</li>
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
                <h3>&nbsp;</h3>
            </div>            
            <div class="span9">
              <!-- Blog Item -->
            <div class="row">
            	<?php
				$args = array(
				    'post_type' => 'post',
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'people',
				            'field' => 'slug', //can be set to ID
				            'terms' => 'bob' //if field is ID you can reference by cat/term number
				        )
				    )
				);
				$query = new WP_Query( $args );
				?>
<!--                <div class="span1">
                    <div class="blog-icon">
                        <i class="icon-camera"></i><br>
                        <h5>Gallery Post</h5>                  
                    </div>
                </div>
                <div class="span8">
                    <a href="blog-detail.htm"><img src="img/blog/1.jpg" alt=""></a>
                <div class="row">
                    <div class="span8 post-d-info">
                        <a href="blog-detail.htm"><h3>Ancient Timbuktu Texts in Danger?</h3></a>
                        <div class="blue-dark">
                            <i class="icon-user"></i> By Admin <i class="icon-tag"></i> Photography | Portrait <i class="icon-comment-alt"></i> With 12 Comments
                        </div>
	                    <p>
	                    Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.Pie wafer wypas candy canes toffee. Cookie icing candy jelly oat cake chupa chups bear claw.
	                    </p>
                    </div>          
                </div>
                </div> -->
            </div>
              <!-- Blog Item End -->             
            <div class="row space40"></div>                
              <!-- Blog Item -->
            <div class="row">
<!--                <div class="span1">  
                    <div class="blog-icon">
                        <i class="icon-film"></i><br>
                        <h5>Video Post</h5>                  
                    </div>   
                </div>
                <div class="span8">
                    <a href="blog-detail.htm"><img src="img/blog/2.jpg" alt=""></a>
                <div class="post-d-info">
                    <a href="blog-detail.htm"><h3>Ancient Timbuktu Texts in Danger?</h3></a>
                    <div class="blue-dark">
                        <i class="icon-user"></i> By Admin <i class="icon-tag"></i> Photography | Portrait <i class="icon-comment-alt"></i> With 12 Comments
                    </div>
                    <p>
                    Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.Pie wafer wypas candy canes toffee. Cookie icing candy jelly oat cake chupa chups bear claw.
                    </p>
 -->            <!-- </div>   -->
            <!-- </div> -->
            </div>
              <!-- Blog Item End -->                         
            <div class="row space40"></div>    
              <!-- Blog Item -->
            <div class="row">
<!--                <div class="span1">
                    <div class="blog-icon">
                        <i class="icon-quote-right"></i><br>
                        <h5>Single Post</h5>                  
                    </div>  
                </div>
                <div class="span8">
                    <a href="blog-detail.htm"><img src="img/blog/3.jpg" alt=""></a>
                    <div class="post-d-info">
	                    <a href="blog-detail.htm"><h3>Ancient Timbuktu Texts in Danger?</h3></a>
	                    <div class="blue-dark">
	                        <i class="icon-user"></i> By Admin <i class="icon-tag"></i> Photography | Portrait <i class="icon-comment-alt"></i> With 12 Comments
	                    </div>
	                    <p>
	                        Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.Pie wafer wypas candy canes toffee. Cookie icing candy jelly oat cake chupa chups bear claw.
	                    </p>
                    </div>
                </div> -->
            </div>
              <!-- Blog Item End -->       
            <div class="row space30"></div>    
              <!-- Paging -->      
            <div class="row">
<!--                 <div class="span9">
                    <a href="#" class="paging">&#62;</a>
                    <a href="#" class="paging">84</a>
                    <a href="#" class="paging">83</a>
                    <a href="#" class="paging">82</a>
                    <a href="#" class="paging">...</a>
                    <a href="#" class="paging">3</a>
                    <a href="#" class="paging">2</a>
                    <a href="#" class="paging">1</a>
                    <a href="#" class="paging">&#60;</a>
                </div> -->
            </div> 
              <!-- Paging End -->              
            <div class="row space40"></div>   
            </div>          
          <!-- Side Bar -->  
        <div class="span3">   
            <h3 class="p-t-0">Search</h3>
	            <div class="search-box">
	                <a href="#" class="search-icon"><i class="icon-search"></i></a>
	                <input class="search" name="" value="Search">
	            </div>  

            <h3>Categories</h3>
            <ul class="list-c">
              <li><i class="icon-chevron-right"></i><a href="#">Business Plan</a></li>
              <li><i class="icon-chevron-right"></i><a href="#">Entertainment</a></li>
              <li><i class="icon-chevron-right"></i><a href="#">News & Politics</a></li>
              <li><i class="icon-chevron-right"></i><a href="#">Social Media Networks</a></li>
              <li><i class="icon-chevron-right"></i><a href="#">Technology & Innovation</a></li>              
            </ul>                   

            <h3>Tags</h3>          
            <a href="#"><div class="tag">WordPress</div></a>
            <a href="#"><div class="tag">Webdesign</div></a>
            <a href="#"><div class="tag">Post-processing</div></a>
            <a href="#"><div class="tag">Tourism</div></a>
            <a href="#"><div class="tag">Rendering</div></a>
            <a href="#"><div class="tag">Photography</div></a>

            <h3>Latest Tweets</h3>
            <i class="icon-twitter"></i> Saying "Wow, You're cool." when you see someone doing something stupid. <a href="#" rel="external">http://t.co/YywnqBb8</a><br>
            6 minutes ago
            <br><br>
            <i class="icon-twitter"></i> Are you getting ready to work on a new project, take off on a sales trip. 
            <a href="#" rel="external">http://pic.witt.com.co/Uyoyyk#sp</a><br> 
            33 minutes ago

            <h3>Photos From Flickr</h3>
            <div class="flickr-widget">
                <div class="photo-stream">
                    <img src="img/stream/01.jpg" alt="">
                </div>
                <div class="photo-stream">
                    <img src="img/stream/02.jpg" alt="">
                </div>
                <div class="photo-stream">
                   <img src="img/stream/03.jpg" alt="">
                </div>
                <div class="photo-stream">
                    <img src="img/stream/04.jpg" alt="">
                </div>
                <div class="photo-stream">
                    <img src="img/stream/05.jpg" alt="">
                </div>
                <div class="photo-stream">
                    <img src="img/stream/06.jpg" alt="">
                </div>
            </div>
                <h3>Text Widget</h3>
                Amet, consectetur adipisicing elit, sedure doriatlor in fugiat nulla  deserunt mollit anim id est laborum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit orn.                    
            <div class="row space50"></div>  
        </div>
    </div>
    </div>
</div>
  <!-- Content End -->
<?php endwhile; else : ?>
<?php endif; ?>
<?php echo get_footer(); ?>