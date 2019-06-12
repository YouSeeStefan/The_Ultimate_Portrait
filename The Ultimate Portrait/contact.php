<?php
/*
Template Name: Contact
*/
?>
<?php
        if(isset($_POST['contact-name']) && isset($_POST['telephone'])){
            $to = "naadartworks@yahoo.com"; // this is your Email address
            $name = $_POST['contact-name'];
            $telefoon = $_POST['telephone'];
            $subject = "Bel terug form";
            $message = $name . " wilt graag gebeld worden op " . $telefoon;

            mail($to,$subject,$message);
            }
        ?>

<?php get_header(); ?>
<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col-md col-12">

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

        <p><b>TELEPHONE </b><?php the_field('telephone') ?></p>
        <p><b>EMAIL </b><?php the_field('email') ?></p>
        <p style="color:#ab945b"><b>KVK </b><?php the_field('kvk') ?></p>
        <p style="color:#ab945b"><b>IBAN </b><?php the_field('iban') ?></p><br>

        <h1 class="font colorC">I WANT THE ULTIMATE PORTRAIT</h1>
        <form action="/thanks" method="POST">
            <label class="labels">Name*
              <span><input type="text" name="contact-name"></span>
            </label>

            <label class="labels">Telephone*
              <span><input type="tel" name="telephone"></span>
            </label>

            <button type="submit" class="submit-button-contact"></button>

        </form>

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
    <div class="col-md-3 col-12 bigScreenNav sticky" style="padding: 0;">

<?php wp_nav_menu(
  array(
    'theme_location' => 'top-menu',
    'menu_class' => 'navigation'
  )
); ?>

</div>
  </div>
</div>
  <?php get_footer(); ?>
