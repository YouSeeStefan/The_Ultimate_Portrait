<?php
/*
Template Name: Thanks
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col-md col-12">

      <div class="row">
        <div class="col-md-6 align-self-center">

          <div class="stopM">

            <img class="thanksImg" src="<?php $linkBase = get_template_directory_uri();
                                      echo $linkBase ?>/img/img.jpg" alt="">

          </div>

        </div>
        <div class="col-md-6 align-self-center">
          <div class="process_text">

            <h2 class="myheader" style="text-transform: uppercase; font-size: 3em;">Thank you</h2>

                <div class="p-margin">
                  <p>I will look over your message and get back to you.<br>In the meantime, you can check the protrait page for new portraits.<p>
                    <br>  <a href="../portraits">
                      Go to the Portraits
                    </a>
               </div>

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
