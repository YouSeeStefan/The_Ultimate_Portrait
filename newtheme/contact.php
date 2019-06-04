<?php
/*
Template Name: Contact
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

  <div class="row" style="height: 100vh;">
    <div class="col-md-6 align-self-center">

      <div class="stopM">


        <img class="contactImg" src="<?php $linkBase = get_template_directory_uri();
                                      echo $linkBase ?>/img/img.jpg" alt="Daniel">

      </div>
    </div>
    <div class="col-md-6 align-self-center text-center">
      <div class="process_text">

        <h1><?php the_title(); ?></h1><br>

        <p><b>Telephone </b><?php the_field('telephone') ?></p>
        <p><b>Email </b><?php the_field('email') ?></p>
        <p><b>KVK </b><?php the_field('kvk') ?></p>
        <p><b>IBAN </b><?php the_field('iban') ?></p>

        <h1 class="font">I AM INTERESTED CALL ME</h1>
        <?php echo do_shortcode("[contact-form-7 id='118' title='ContactForm']"); ?>
      </div>
    </div>
  </div>
</div>
  <?php get_footer(); ?>