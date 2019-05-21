<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-10 no-padding">
      <div class="row test">
      <div class="col-6">
        <div class="singlePage">

        <?php if(has_post_thumbnail()):?>
          <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
        <?php endif;?>
</div>

      </div>
      <div class="col-5 paddingText">
        <div class="single_text">


          <h1><?php the_title(); ?></h1>

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile;
        endif; ?>
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

        <img class="sign" src="wp-content/themes/newtheme/img/handtekening.svg" alt="">

    </div>

  </div>

</div>
