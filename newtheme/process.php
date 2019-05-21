<?php
/*
Template Name: Process
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-10 no-padding">
      <div class="row test">
      <div class="col-6">
        <div class="stopM">

        <h1><?php the_title(); ?></h1>
        <img class="stopImg" src="../wp-content/themes/newtheme/img/img.jpg" alt="">

      </div>

      </div>
      <div class="col-5 proccesText">
        <div class="process_text">



          <table>
            <tr class="spaceUnder">
              <td> <img class="imgP" src="../wp-content/themes/newtheme/img/procces-1.png" alt=""> </td>
              <td>Get in contact - by email, phone or via the links below / OR / by Email or phone detailed below</td>
            </tr>
            <tr class="spaceUnder">
              <td> <img class="imgP" src="../wp-content/themes/newtheme/img/procces-2.png" alt=""> </td>
              <td>Let’s make a deal. Price, format and deadline & 1/3rd deposit (of proposal price)</td>
            </tr>
            <tr class="spaceUnder">
              <td> <img class="imgP" src="../wp-content/themes/newtheme/img/procces-3.png" alt=""> </td>
              <td>Collection of personal objects Daniel Jeremy will select or make images of the person to be portrayed</td>
            </tr> 
            
            <tr class="spaceUnder">
              <td> <img class="imgP" src="../wp-content/themes/newtheme/img/procces-4.png" alt=""> </td>
              <td>Daniel Jeremy will make studies. Then Daniel Jeremy will start an intense process of puzzling, composing and assembling. This may take up to 6 months.</td>
            </tr>
            <tr class="spaceUnder">
              <td> <img class="imgP" src="../wp-content/themes/newtheme/img/procces-5.png" alt=""> </td>
              <td>Presentation of completed work & Delivery</td>
            </tr>
          </table><br>

          <h1 class="h1P"><span class="proccesIn">INTERESTED?</span></h1>
          <a href="#">
            To the portraits
          </a>
        </div>

      </div>
      </div>
      <div class="row">
        <div class="col">
        <?php get_footer(); ?>
        </div>
      </div>
    </div>
    <div class="col-2" style="padding: 0;">

        <?php wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'navigation'
          )
        ); ?>

        <img class="sign" src="../wp-content/themes/newtheme/img/handtekening.svg" alt="">

    </div>

  </div>

</div>
