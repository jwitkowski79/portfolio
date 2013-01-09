<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->

<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" /> <html class="no-js" lang="en"> <!--<![endif]-->

<meta name="viewport" content="width=device-width" />

 <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";
  

  ?></title>

  <base href="<?php bloginfo('template_directory'); ?>/" />

  <link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/foundation.css" media="screen" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/app.css" media="screen" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  



  <script src="javascripts/modernizr.foundation.js"></script>
    <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300|Arbutus+Slab' rel='stylesheet' type='text/css'>
<script type="text/javascript">

  $(document).ready(function(){
    
    $("img.color").hover(function() {
      $(this).stop().animate({"opacity": "0"}, "500");
      $(this).siblings('p.caption').animate({"opacity": "1"}, "500");
    }, function() {
      $(this).stop().animate({"opacity": "1"}, "slow");
      $(this).siblings('p.caption').animate({"opacity": "0"}, "slow");
    });

  });
</script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head();?>

</head>
<body>
  <div id="container">

  <!-- Header and Nav -->
 
  <nav class="top-bar">
    <ul>
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="#">
            Jen.
          </a>
        </h1>
      </li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>

    <section>

      <!-- Right Nav Section -->
      <ul class="right">
      
        <li><a href="#">portfolio</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">blog</a></li>
        <li><a href="#">contact</a></li>
        
          
      </ul>
    </section>
  </nav>