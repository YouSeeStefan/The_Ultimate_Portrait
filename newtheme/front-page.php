<?php
/*
Template Name: homepage
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

      <?php if (have_rows('slider')) : ?>
        <div class="container testimonials-container paddingImg">

          <?php while (have_rows('slider')) : the_row();

            $image = get_sub_field('slider_image');
            $imageurl = $image['sizes']['slider'];
            $title = get_sub_field('title');

            ?>
            <div class="testimonial">
              <img class="slider-image" src="<?php echo $imageurl; ?>" alt="<?php echo $title; ?>">
            </div>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>

    </div>
    <div class="col-md-6 align-self-center text-center">
      <div class="home_text">

        <h1 style="text-transform: uppercase;"><?php the_field('head_text'); ?></h1>

       <div class="homeTextPadding"><?php the_field('main_text'); ?></div>
       
        <a href="portraits" class="homePortraitButton">
          To the portraits
        </a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>