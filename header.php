<!DOCTYPE html>

<html>
<head>
  <script>
  //   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  //   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  //   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  //   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  
  //   ga('create', 'UA-96309283-1', 'auto');
  //   ga('send', 'pageview');
  </script>
  <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/Havaneros/assets/images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/Havaneros/assets/images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/Havaneros/assets/images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/Havaneros/assets/images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/Havaneros/assets/images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/Havaneros/assets/images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/Havaneros/assets/images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/Havaneros/assets/images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/Havaneros/assets/images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/Havaneros/assets/images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/Havaneros/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/Havaneros/assets/images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/Havaneros/assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/wp-content/themes/Havaneros/assets/images/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/wp-content/themes/Havaneros/assets/images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

  <title><?php echo title?></title>
  <meta name="Description" content="<?php echo description?>" />
  <meta name="keywords" content="<?php echo keyWords?>" />

  <link rel="stylesheet" href="/wp-content/themes/Havaneros/bower_components/angular-material/angular-material.css">
  <link rel="stylesheet" href="/wp-content/themes/Havaneros/bower_components/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="/wp-content/themes/Havaneros/bower_components/slick-carousel/slick/slick-theme.css"> 
  <link rel="stylesheet" href="/wp-content/themes/Havaneros/bower_components/animate.css/animate.min.css">
  <link rel="stylesheet" href="/wp-content/themes/Havaneros/main.css">
  <link rel="stylesheet" href="/wp-content/themes/Havaneros/main960.css">
  <link rel="stylesheet" href="/wp-content/themes/Havaneros/main630.css">

</head>

<body ng-app="habaneros" scroll ng-controller="mainCTL as main">

<div id="header" class="container backColorWhite" layout="column" layout-align="center center">
    <div class="content relative width90" layout="row" layout-align="center center"> 
      <div class="logoHolder alignLeft">
         <a href="/index.php">
           <!-- <h1 class="colorPrimary">HAVANEROS</h1> -->
           <img src="/wp-content/themes/Havaneros/assets/images/logoTest2.png">
         </a>
      </div>
      <div class="alignRight optionsHolder hideMd" layout="row" layout-align="center center">
         <a href="#">
           <p class="text colorBlack">ABOUT US</p>
           <span class="line -right"></span>
           <span class="line -top"></span>
           <span class="line -left"></span>
           <span class="line -bottom"></span>
         </a>
         <a href="#">
           <p class="text colorBlack">GALLERY</p>
           <span class="line -right"></span>
           <span class="line -top"></span>
           <span class="line -left"></span>
           <span class="line -bottom"></span>
         </a>
         <a href="#">
           <p class="text colorBlack">PACKAGES</p>
           <span class="line -right"></span>
           <span class="line -top"></span>
           <span class="line -left"></span>
           <span class="line -bottom"></span>
         </a>
         <a href="/blog/">
           <p class="text colorBlack">BLOG</p>
           <span class="line -right"></span>
           <span class="line -top"></span>
           <span class="line -left"></span>
           <span class="line -bottom"></span>
         </a>
         <a href="#">
           <p class="text colorBlack">CONTACT US</p>
           <span class="line -right"></span>
           <span class="line -top"></span>
           <span class="line -left"></span>
           <span class="line -bottom"></span>
         </a>
      </div>
      <div id="burger" class="alignRight showMd btn">
       <img src="/wp-content/themes/Havaneros/assets/images/svgs/lnr-menu-circle.svg"  class="svgColorSecondary svg40 svg">
      </div>
  </div>
</div>
<md-content id="smallMenu" class=" fullWidth backColorPrimary colorWhite showMd" layout="column" layout-align="center center">
       <div class="content width90 ">
        <div class="textLeft optionsHolder">
             <a href="#"><p class="fontSize25">menu 1</p></a>
             <a href="#"><p class="fontSize25">menu 2</p></a>
             <a href="#"><p class="fontSize25">menu 3</p></a>
             <a href="#"><p class="fontSize25">menu 4</p></a>
             <a href="#"><p class="fontSize25">menu 5</p></a>
             <a href="#"><p class="fontSize25">menu 6</p></a>
          </div>
       </div>
</md-content>

