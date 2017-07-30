<?php
/* Template Name: blog */
include("/preHeader.php");
define("urlActual","");

get_header();

include('/titleRow.php'); 
?>

<md-content class="blog height500 backColorWhite" layout="column" layout-align="center center">
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
</md-content>


<md-content class="blog heightAuto backColorWhite" layout="column" layout-align="center center">
  <div class="content width90" layout="row" layout-align="start center" layout-wrap>
  	<?php 

     $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    
     $custom_args = array(
       'post_type' => 'post',
       'posts_per_page' => 4,
       'paged' => $paged
     );
   
     $custom_query = new WP_Query( $custom_args ); ?>
    
    <?php if ( $custom_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
    <?php 
         $featured_image = '';
         if (has_post_thumbnail()) {
           $featured_image = get_the_post_thumbnail_url($post->ID, 'full');
         }
    ?>
    <div class="post width33 width50Md fullWidthSm padding10"  id="post-<?php get_the_ID(); ?>" >
          <div class="postInfo height150 textJustify backgroundCover padding50 backColorBase" style="background-image: url('<?php echo $featured_image; ?>');">
             <a href="<?php the_permalink(); ?>"><h2 class="title colorBlack"><?php the_title(); ?></h2></a>
             
             <p class="autor fontSize16 colorPrimary">by <em><?php the_author(); ?></em></p>
            <?php //the_excerpt()?>
          </div>
    </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
    <?php
    if (function_exists(custom_pagination)) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
    }
    ?>
  </div>
       
        
  
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
    
       
    <?php wp_reset_query(); ?>
</md-content>


<?php get_footer(); //include('/footer.php'); ?>
<script>
  $(document).ready(function() {          
  
  });
</script>