<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php wp_head();?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body <?php body_class();?>>
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php wp_nav_menu (
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'navigation'
          )
        );?>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

    <!-- <header class="sticky-top">
      <div class="container">
        <?php wp_nav_menu (
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'navigation'
          )
        );?>
      </div>
    </header> -->
