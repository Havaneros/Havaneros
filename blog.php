<?php
/* Template Name: blog */
include("/preHeader.php");
define("urlActual","");

get_header();

include('/titleRow.php'); 
?>

<!-- <md-content class="blog height500 backColorWhite" layout="column" layout-align="center center">
  <div class="content">
  	  <h2>Featured Posts</h3>
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
        
        if ( $the_query->have_posts() ) {
            echo '<div class=" center slider">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                
                $featured_image = '';
                if (has_post_thumbnail()) {
                  $featured_image = get_the_post_thumbnail_url($post->ID, 'full');
                }
        
                $output .= 
                   '<a class="item-link" href="'
                  . get_post_permalink()
                  .'"><div class="item" style="background-image:url('
                  . $featured_image
                  .') ">'
                  .'<div class="slider-text"> <p class="item-title"><strong>'
                  .get_the_title() 
                  .'</strong> </div></div></a>';
            }
            echo $output;
            echo '</div>';
        }
        // Reset post data
        wp_reset_postdata();


      ?>
  </div>
</md-content> -->


<md-content id="blogHolder" class="blog heightAuto backColorWhite" layout="column" layout-align="center center">
  <div class="content width90" layout="row" layout-align="start center" layout-wrap>

  	<?php // Display blog posts on any page 
    $wp_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'paged' => $paged,
                'order' => 'DES'
            ));
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

         <?php 
           $featured_image = '';
           if (has_post_thumbnail()) {
             $featured_image = get_the_post_thumbnail_url($post->ID, 'full');
           }
         ?>
         <div class="wow bounceInRight post width33 width50Md fullWidthSm padding10"  id="post-<?php get_the_ID(); ?>" >
           <a href="<?php the_permalink(); ?>">
             <div class="postInfo height200">
                <div class="fullWidth fullHeight backgroundCover backColorBase" style="background-image: url('<?php echo $featured_image; ?>');">
                </div>
             </div>
             <h2 class="title colorBlack"><?php the_title(); ?></h2>
           </a>
         </div>

    <?php endwhile; ?>
  </div>
  <div class="paginationHolder content width90" layout="row" layout-align="center center" layout-wrap>
    <?php 
  
    the_posts_pagination( array(
      'mid_size'  => 5,
      'prev_text' => __( 'NEW', 'textdomain' ),
      'next_text' => __( 'OLDER', 'textdomain' ),
    ) );
    ?>
  </div>

    <?php wp_reset_postdata(); ?>

    
    
  
       
  
</md-content>




<?php get_footer(); //include('/footer.php'); ?>
<script>
  $(document).ready(function() {          
  
  });
</script>