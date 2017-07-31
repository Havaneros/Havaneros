<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * 
 *
 * @package WordPress
 * 
 * 
 */ 

?>

<?php
include("/preHeader.php");
define("urlActual","");

get_header();
?>


<md-content id="indexMain" class="backColorBase fullHeight minHeight500 relative">
  <div class="sliderSlick fullHeight fullWidth">
    <div class="banner backgroundCover" style="background-image:url(/wp-content/themes/havaneros/assets/images/banners/cuba4.jpg);"></div>
    <div class="banner backgroundCover" style="background-image:url(/wp-content/themes/havaneros/assets/images/banners/cuba1.jpg);"></div>
    <div class="banner backgroundCover" style="background-image:url(/wp-content/themes/havaneros/assets/images/banners/cuba3.jpg);"></div>
  </div>
  <div class="alignCenter container fullHeight fullWidth" layout="column" layout-align="end center">
  	<div class="content infoHolder colorWhite wow bounceInUp width90" layout="column" layout-align="center start">
     <div class="width60 fullWidthMd  contentHolder">
      <h1 class="">Paquete de prueba</h1>
      <br>
  	  <p class="textJustify">lorme lorme lorme lorme lorme lmroem loreml lorme e lmrel orme lorme lmrle lormemrllorme lmroem loreml lorme lmrel orme lorme lmrle lormee lorme lorme lorme lorme lorme lorme lorme lmroem loreml lorme lmrel orme lorme lmrle lorme lorme</p>
      <br>
     </div>
     <div class="width30 height50 backColorBlack padding20" layout="column" layout-align="center center">
       <h2 class="textCenter">READ MORE</h2>
     </div>

    </div> 
  </div>
</md-content>

<md-content id="indexTeam" class="backColorWhite" layout="column" layout-align="center center">
  <div class="content width90 padding20">
    <br>
    <h2 class="colorBlack">OUR TEAM</h2>
    <div class="backColorBlack fullWidth divider"></div>
    <br>
  </div>
  <div class="content padding50" layout="row" layout-align="center center" layout-wrap>
    
  </div>
</md-content>

<md-content id="indexInfo" class="backColorWhite hideSm" layout="column" layout-align="center center">
  <div class="content padding50" layout="row" layout-align="center center" layout-wrap>
     <div class="infoBox width33 height200 width50Md padding50" layout="column" layout-align="center center">
       <div>
        <h2 class="colorPrimary">ejemplo titulo</h2>
        <br>
        <p class="colorBlack">lorem ipsum amet lorem ilorem ipsum amet lorem impsum impsum ametm ipsum amet lorem impsum impsum amet</p>
       </div>
     </div>
     <div class="infoBox width33 height200 width50Md padding50" layout="column" layout-align="center center">
       <div>
        <h2 class="colorPrimary">ejemplo titulo</h2>
        <br>
        <p class="colorBlack">lorem ipsum amet lorem ilorem ipsum amet lorem impsum impsum ametm ipsum amet lorem impsum impsum amet</p>
       </div>
     </div>
     <div class="infoBox width33 height200 width50Md padding50" layout="column" layout-align="center center">
       <div>
        <h2 class="colorPrimary">ejemplo titulo</h2>
        <br>
        <p class="colorBlack">lorem ipsum amet lorem ilorem ipsum amet lorem impsum impsum ametm ipsum amet lorem impsum impsum amet</p>
       </div>
     </div>
     <div class="infoBox width33 height200 width50Md padding50" layout="column" layout-align="center center">
       <div>
        <h2 class="colorPrimary">ejemplo titulo</h2>
        <br>
        <p class="colorBlack">lorem ipsum amet lorem ilorem ipsum amet lorem impsum impsum ametm ipsum amet lorem impsum impsum amet</p>
       </div>
     </div>
     <div class="infoBox width33 height200 width50Md padding50" layout="column" layout-align="center center">
       <div>
        <h2 class="colorPrimary">ejemplo titulo</h2>
        <br>
        <p class="colorBlack">lorem ipsum amet lorem ilorem ipsum amet lorem impsum impsum ametm ipsum amet lorem impsum impsum amet</p>
       </div>
     </div>
     <div class="infoBox width33 height200 width50Md padding50" layout="column" layout-align="center center">
       <div>
        <h2 class="colorPrimary">ejemplo titulo</h2>
        <br>
        <p class="colorBlack">lorem ipsum amet lorem ilorem ipsum amet lorem impsum impsum ametm ipsum amet lorem impsum impsum amet</p>
       </div>
     </div>
  </div>
</md-content>


<!-- <md-content id="indexInsta" class="backColorBase" layout="column" layout-align="center center">
  <div class="content">
    <?php echo do_shortcode("[instagram-feed]"); ?> 
  </div>
</md-content> -->

<md-content id="indexInsta" class="backColorWhite" layout="column" layout-align="center center">
  <div class="content width90 padding20">
    <br>
    <h2 class="colorBlack">GALLERY</h2>
    <div class="backColorBlack fullWidth divider"></div>
    <br>
  </div>
  <div class="content padding50" layout="row" layout-align="center center" layout-wrap>
    
  </div>
</md-content>




<?php get_footer(); //include('/footer.php'); ?>
<script>
  $(document).ready(function() {          
  
  });
</script>