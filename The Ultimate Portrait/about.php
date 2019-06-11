<?php
/*
Template Name: About
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
        <div class="container testimonials-container paddingImg">



                      <div class="testimonial">

            <?php

        $image = get_field('image');

        $size = 'largest';
        $thumb = $image['sizes'][$size];

        if (!empty($image)) : ?>

          <div class="">
          <a href="<?php echo $singlePageLink; ?>" class="pageLinkImage">
          <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" class="slider-image" />
          </a>
          </div>

        <?php endif; ?>
            </div>



        </div>
    </div>
    <div class="col-md-6 align-self-center text-center">
    <div class="home_text">



<h2 class="myheader" style="text-transform: uppercase; font-size: 3em;"><?php the_field('head_text'); ?></h2>

    <div class="p-bold"><p><?php the_field('bold_text'); ?></p></div>

    <div class="p-margin"><p>“<?php the_field('quoted_text'); ?>”<p>

   <p><?php the_field('normal_text'); ?></p></div>

   <!-- <span class="label success">Artist</span>
   <span class="label success">Exclusive</span>
   <span class="label success">Portrait</span> -->

</div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
