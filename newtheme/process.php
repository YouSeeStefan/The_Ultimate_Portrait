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

  <table>
    <tr class="spaceUnder">
      <td> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-1.png" alt="step 1"> </td>
      <td><?php the_field('step_1') ?></td>
    </tr>
    <tr class="spaceUnder">
      <td> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-2.png" alt="step 2"> </td>
      <td><?php the_field('step_2') ?></td>
    </tr>
    <tr class="spaceUnder">
      <td> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-3.png" alt="step 3"> </td>
      <td><?php the_field('step_3') ?></td>
    </tr> 
    
    <tr class="spaceUnder">
      <td> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-4.png" alt="step 4"> </td>
      <td><?php the_field('step_4') ?></td>
    </tr>
    <tr class="spaceUnder">
      <td> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-5.png" alt="step 5"> </td>
      <td><?php the_field('step_5') ?></td>
    </tr>
  </table>
  <h1 class="h1P"><span class="proccesIn">INTERESTED?</span></h1>
  <a href="#">
    To the portraits
  </a>
  
</div>
    </div>
  </div>
  
</div>
<?php get_footer(); ?>