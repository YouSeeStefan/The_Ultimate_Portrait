<?php
$linkBase = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="The ultimate portrait, portfolio van Daniel Jeremy.">
  <meta name="keywords" content="Daniel Jeremy, Portrait, Prularia, Art, Kunst, Portret, Portfolio">
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
    );?>



  </div>

  <div class="navButtonDiv">
    <span class="responsiveNavText">Daniel Jeremy</span>
    <span class="responsiveMenuIcon" id="responsiveMenuIconBars" onclick="openNav()">&#9776;</span>
    <div id="contact-button"></div>

    <div id="contact-popup">

        <div class="kruisje" id="close"></div>


            <div class="interested">
                I AM INTERESTED
                <span class="gold">CALL ME</span>
            </div>


        <form action="">
            <p class="typefield-txt">Name</p>
            <input class="typefield-contact type-field-name" type="text" name="Name">

            <p class="typefield-txt">Telephone</p>
            <input class="typefield-contact type-field-tele" type="text" name="Telephone">

            <button type="submit" class="submit-button"></button>

        </form>

        <?php
          if(isset($_POST['submit'])){
              $to = "contactformulier@oweno.nl"; // this is your Email address

              $mail = $_POST['mail'];

              $name = $_POST['Name'];
              $telefoon = $_POST['telefoon'];
              $subject = "Mij graag terug bellen";
              $message = $name . " " . $mail . " " . $telefoon . "

          bericht:" . "\n\n" . $_POST['message'];

              $headers = "From:" . $to;
              mail($to,$subject,$message,$headers);
              header('Location: contact');
              }
          ?>

    </div>
  </div>
