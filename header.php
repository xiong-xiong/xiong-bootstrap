<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Title  from wordpress -->
    <title><?php
        wp_title('/', 'true', 'right');
        bloginfo ( 'name' )
        ?>
    </title>
    <!--Important for mediaqueries to work properly-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Head info from Wordpress -->
    <?php wp_head();?>
    <!-- Link style.css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css"> 

    <!-- GOOGLE FONTS HERE-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:300,400,500|Rock+Salt" rel="stylesheet">


  </head>
  
          
<body>
<header>


  <nav class="xiong-main-nav">
    <div class="xiong-nav-container">
      <div class="xiong-nav-wrap">

      <div class="col-md-4"><a href="http://xiong.fi">
       <h1 id="site-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo_valk.png"><span class="hide">Xiong Media</span></h1></a>
      </div><!-- col2-->
      <div class="col-md-8" id="xiong-nav-align"><div class="xiong-open-mobile-nav"><i class="fa fa-bars"></i> Valikko</div>
      <?php wp_nav_menu( array( 'theme_location' => 'mainnav', 'container_class' => 'main-nav', 'container' => 'nav' )); ?> 
     </div><!-- col10-->
            
      </div>   
    </div><!-- /container --> 
  </nav><!-- xiong-main-nav-->

</header>


