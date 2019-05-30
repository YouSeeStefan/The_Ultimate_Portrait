<?php /* Template Name: Single portrait */ ?>


<?php get_header(); ?>

<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col-md col-12">
  <div class="row" style="margin-top: 3em">
    <div class="col-md-6">
      <?php
      $args = array('post_type' => 'portrait', 'posts_per_page' => -1);
      $loop = new WP_Query($args);

      $image = get_field('portrait');

      $size = 'largest';
      $thumb = $image['sizes'][$size];

      if (!empty($image)) : ?>

        <div class="">
          
            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" class="" style="width: 100%;"/>

        </div>

      <?php endif; ?>
    </div>
    <div class="col-md-6  text-center">
    <div class="home_text">
      <div class="resultsTextDiv">
        <h2><?php the_field('title'); ?></h2>
        <span class="portraitInfo"><?php the_field('dimension'); ?></span>
        <span class="portraitInfo"><?php the_field('year'); ?></span>
        <p><?php the_field('description'); ?></p>

      </div>
</div>
    </div>
  </div>
  <div class="row" style="min-height: 100vh;">
    <div class="col-md-6">
      <h2 style="display: block; font-size: xx-large;">Progress</h2>
      <?php

      $images = get_field('process_images_gallery');

      if ($images) : ?>

        <?php foreach ($images as $image) : ?>

          <!-- <a href="<?php echo $image['url']; ?>"> -->
          <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
          <!-- </a> -->
          

        <?php 
        endforeach;

    endif;
    previous_post_link();
    next_post_link();
    ?>
    </div>
    <div class="col-md-6">
      <?php

      $image = get_field('stopmotion');

      if (!empty($image)) : ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width: 100%;" />

      <?php endif; ?>

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