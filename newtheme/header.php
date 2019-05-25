<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>The ultimate portrait.</title>
</head>

<body <?php body_class(); ?>>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php
    function add_last_nav_item($items)
    {
      return $items .= '<img class="sign" src="wp-content/themes/The_Ultimate_Portrait/newtheme/img/handtekening.svg" alt="Daniel Jeremy logo"></li>';
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