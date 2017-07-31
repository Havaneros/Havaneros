<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage havaneros
 * @since havaneros 1
 */

include("/preHeader.php");
get_header();

while ( have_posts() ) : the_post();
include('/titleRow.php'); 
?>

<md-content id="singlePost" class="backColorWhite" layout="column" layout-align="center center">
	<div class="content padding20 width90" layout="row" layout-align="center start">
 
    <div class="width70 fullWidthMd info">
     <p>By <em class="colorPrimary"><?php the_author()?></em> | <?php the_date();?>  <?php the_time();?></p>
     <br>
		 <?php 
		   the_content(); 
     ?>
     <br>
     <br>
     <br>
     <h2 class="colorWhite"><a href="/blog/" >RETURN TO BLOG</a></h2>
     <?php
           // If comments are open or we have at least one comment, load up the comment template.
		   if ( comments_open() || get_comments_number() ) :
		   	comments_template();
		   endif;
		 ?>
		</div>
           
         <?php

		// End the loop.
		endwhile;

		?>

		<div class="width30 hideMd padding50 posts">
		  <h2 class="textCenter">FEATURED POSTS</h2>
		  <?php
        
            // The query to fetch future posts
            $the_query = new WP_Query(array(
                'post_type' => 'post',
                'category_name' => 'featured',
                'posts_per_page' => 9,
                'orderby' => 'date',
                'order' => 'DES'
            ));
        
             // The loop to display posts
             
            if ( $the_query->have_posts() ) :
                 while ( $the_query->have_posts() ) : $the_query->the_post();
                      $featured_image = '';
                      if (has_post_thumbnail()) {
                        $featured_image = get_the_post_thumbnail_url($post->ID, 'full');
                      }
                 ?>
                   <div class="wow bounceInRight post width100 padding10"  id="post-<?php get_the_ID(); ?>" >
                      <a href="<?php the_permalink(); ?>">
                       <div class="postInfo height150 backgroundCover backColorBase" style="background-image: url('<?php echo $featured_image; ?>');">
                                     
                       </div>
                       <h2 class="title colorBlack"><?php the_title(); ?></h2>
                     </a>
                   </div>
                
                 <?php endwhile;


                 wp_reset_postdata();

             endif; 
             wp_reset_query(); ?>
             
		</div>

	</div><!-- .content-area -->
</md-content>

<?php get_footer(); ?>
