<?php 
$linkBase = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="ceyepMV2P82BweDJ4BD1d-MFlTeNb-lnBxSWUjR4Xr8" />
  <link rel="shortcut icon" href="<?php echo $linkBase ?>/img/favicon" type="image/x-icon" />
  <?php wp_head(); ?>
  <title>The ultimate portrait.</title>
</head>

<body id="body" <?php body_class(); ?>>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php
    
    function add_last_nav_item($items)
    {
      $linkBase = get_template_directory_uri();
      return $items .= '<li><img class="sign" src="'. $linkBase .'/img/handtekening.svg" alt="Daniel Jeremy logo"></li>';
    }
    add_filter('wp_nav_menu_items', 'add_last_nav_item');

    wp_nav_menu(
      array(
        'theme_location' => 'top-menu',
        'menu_class' => 'navigation'
      )
    ); ?>


  </div>

  <div class="navButtonDiv">
    <span class="responsiveNavText">Daniel Jeremy</span>
    <span class="responsiveMenuIcon" id="responsiveMenuIconBars" onclick="openNav()">&#9776;</span>
  </div>