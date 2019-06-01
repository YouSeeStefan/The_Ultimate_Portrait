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
<div class="container-fluid">
  <div class="row">
    <div class="col-10 no-padding">
      <div class="row test">
      <div class="col-6">
        <div class="stopM">


        <img class="contactImg" src="<?php $linkBase = get_template_directory_uri(); echo $linkBase ?>/img/img.jpg" alt="">

      </div>

      </div>
      <div class="col-5 proccesText">
        <div class="process_text">

          <h1><?php the_title(); ?></h1><br>

          <p> <b>Telephone </b> +31 614 489 594</p>
          <p> <b>Email </b> naam@gmail.com</p>
          <p> <b>KVK </b> 34334396</p>
          <p> <b>IBAN </b> NL61 INGB 0002645082</p><br><br><br><br><br><br>

          <h1 class="font">I AM INTERESTED CALL ME</h1>
          <?php echo do_shortcode("[contact-form-7 id='118' title='ContactForm']");?>


        </div>

      </div>
      </div>
      <div class="row">
        <div class="col">
        <?php get_footer(); ?>
        </div>
      </div>
    </div>
  </div>

</div>
