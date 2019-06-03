<?php
/*
Template Name: Process
*/
?>
<?php get_header(); ?>
<div class="bigScreenNav" style="padding: 0;">

  <?php wp_nav_menu(
    array(
      'theme_location' => 'top-menu',
      'menu_class' => 'navigation'
    )
  ); ?>

</div>
<div class="container-fluid home">

  <div class="row">
    <div class="col-md-6 align-self-center">

    <div class="stopM">

<h1><?php the_title(); ?></h1>
<img class="stopImg" src="<?php $linkBase = get_template_directory_uri(); echo $linkBase ?>/img/img.jpg" alt="">

</div>

    </div>
    <div class="col-md-6 align-self-center text-center">
    <div class="process_text">

<?php $linkBase = get_template_directory_uri(); ?>

<div id="wrapper">
    <div id="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-1.png" alt=""> </div>
    <div id="second"><p><?php the_field('step_1') ?>Westion is still new for the best response.</p></div>
</div>
<div id="wrapper">
    <div id="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-2.png" alt=""> </div>
    <div id="second"><p><?php the_field('step_2') ?>Westion is still new for the best response.</p></div>
</div>
<div id="wrapper">
    <div id="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-3.png" alt=""> </div>
    <div id="second"><p><?php the_field('step_3') ?>Westion is still new for the best response.</p></div>
</div>
<div id="wrapper">
    <div id="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-4.png" alt=""> </div>
    <div id="second"><p><?php the_field('step_4') ?>Westion is still new for the best response.</p></div>
</div>
<div id="wrapper">
    <div id="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-5.png" alt=""> </div>
    <div id="second"><p><?php the_field('step_5') ?>Westion is still new for the best response.</p></div>
</div>

  <h1 class="h1P"><span class="proccesIn">INTERESTED?</span></h1>
  <a href="#">
    To the portraits
  </a>

</div>
    </div>
  </div>

</div>
<?php get_footer(); ?>
