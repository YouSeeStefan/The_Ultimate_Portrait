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
                                      echo $linkBase ?>/img/img.jpg" alt="">

      </div>
    </div>
    <div class="col-md-6 align-self-center text-left">
      <div class="contact_text">

        <h1><?php the_title(); ?></h1><br>

        <p><b>Telephone </b><?php the_field('telephone') ?></p>
        <p><b>Email </b><?php the_field('email') ?></p>
        <p style="color:#ab945b"><b>KVK </b><?php the_field('kvk') ?></p>
        <p style="color:#ab945b"><b>IBAN </b><?php the_field('iban') ?></p><br>

        <h1 class="font colorC">I AM INTERESTED CALL ME</h1>
        <?php echo do_shortcode("[contact-form-7 id='118' title='ContactForm']"); ?>

        <br>
        <div class="wrapperContact">
            <div class="firstContact"> <a href="#"><img class="imgC" src="<?php echo $linkBase ?>/img/facebook.png" alt=""></a> </div>
            <div class="secondContact"> <a href="#"><img class="imgC" src="<?php echo $linkBase ?>/img/instagram.png" alt=""></a> </div>
            <div class="thirdContact"> <a href="#"><img class="imgC" src="<?php echo $linkBase ?>/img/linkedin.png" alt=""></a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php get_footer(); ?>
