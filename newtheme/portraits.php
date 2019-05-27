<?php
/*
  Template Name: Portraits
*/
?>

<?php get_header(); ?>

<div class="container-fluid home">
  <div class="row flex-nowrap">
  
    <div class="col-md col-12 main">
      <?php
      $args = array('post_type' => 'portrait', 'posts_per_page' => -1);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
        /*  the_title();   */
        $singlePageLink = get_permalink();
        echo '<div class="portrait_result">';
        ?>

        <?php

        $image = get_field('portrait');

        $size = 'medium';
        $thumb = $image['sizes'][$size];

        if (!empty($image)) : ?>

          <a href="<?php echo $singlePageLink; ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" class="imgContain" /></a>

        <?php endif; ?>

        <h2><?php the_field('title'); ?></h2>
        <h2><?php the_field('dimension'); ?></h2>
        <h2><?php the_field('year'); ?></h2>
        <p><?php the_field('description'); ?></p>
        <a href="<?php echo $singlePageLink; ?>">Go to the portrait -></a>

        <?php
        echo '</div>';
      endwhile;
      ?>

    </div>
    <div class="col-md-2 col-12 bigScreenNav" style="padding: 0;">

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