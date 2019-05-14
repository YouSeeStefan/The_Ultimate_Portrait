<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-10 no-padding">
      <div class="row test">
      <div class="col-6">

        <?php if (have_rows('slider')) : ?>
          <div class="container testimonials-container paddingImg">

            <?php while (have_rows('slider')) : the_row();

              $image = get_sub_field('slider_image');
              $imageurl = $image['sizes']['slider'];
              $title = get_sub_field('title');

              ?>
              <div class="testimonial">
                <img class="portret" src="<?php echo $imageurl; ?>" alt="<?php echo $title; ?>">
              </div>
            <?php endwhile; ?>

          </div>
        <?php endif; ?>


      </div>
      <div class="col-5 paddingText">
        <div class="home_text">


          <h1><?php the_title(); ?></h1>

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile;
        endif; ?>
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

        <img class="sign" src="wp-content/themes/newtheme/img/handtekening.svg" alt="">

    </div>

  </div>

</div>
