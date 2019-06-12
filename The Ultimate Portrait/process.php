<?php
/*
Template Name: Process
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col-md col-12">

      <div class="row">
        <div class="col-md-6 align-self-center">

          <div class="stopM">

            <h1><?php the_title(); ?></h1>
            <img class="stopImg" src="<?php $linkBase = get_template_directory_uri();
                                      echo $linkBase ?>/img/img.jpg" alt="">

          </div>

        </div>
        <div class="col-md-6 align-self-center text-center">
          <div class="process_text">

            <?php $linkBase = get_template_directory_uri(); ?>

            <div class="wrapper">
              <div class="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-1.png" alt="Roman number 1"> </div>
              <div class="second">
                <p><?php the_field('step_1') ?></p>
              </div>
            </div>
            <div class="wrapper">
              <div class="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-2.png" alt="Roman number 2"> </div>
              <div class="second">
                <p><?php the_field('step_2') ?></p>
              </div>
            </div>
            <div class="wrapper">
              <div class="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-3.png" alt="Roman number 3"> </div>
              <div class="second">
                <p><?php the_field('step_3') ?></p>
              </div>
            </div>
            <div class="wrapper">
              <div class="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-4.png" alt="Roman number 4"> </div>
              <div class="second">
                <p><?php the_field('step_4') ?></p>
              </div>
            </div>
            <div class="wrapper">
              <div class="first"> <img class="imgP" src="<?php echo $linkBase ?>/img/procces-5.png" alt="Roman number 5"> </div>
              <div class="second">
                <p><?php the_field('step_5') ?></p>
              </div>
            </div>

            <h1 class="h1P"><span class="proccesIn">INTERESTED?</span></h1>
            <a href="contact">
              Get in touch
            </a>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-12 bigScreenNav sticky" style="padding: 0; min-height: 100vh;">

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
