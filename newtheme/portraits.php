<?php
/*
  Template Name: Portraits
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col-md col-12">
    <h1>Portraits</h1>
    <div class="row">
      <?php
      $args = array('post_type' => 'portrait', 'posts_per_page' => -1);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
        /*  the_title();   */
        $singlePageLink = get_permalink();
        echo '<div class="portrait_results">';
        ?>

        <?php

        $image = get_field('portrait');

        $size = 'slider';
        $thumb = $image['sizes'][$size];

        if (!empty($image)) : ?>

          <div class="col-md-3 col-12"><a href="<?php echo $singlePageLink; ?>" style="float: left; display: inline-block;"><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" class="imgContain" /></a></div>

        <?php endif;
        $text = get_field('description');
        $text = substr($text, 0, 590); //587
        $text = substr($text, 0, strrpos($text, ' '));
        ?>
          <div class="col-md col-12 resultsTextDiv">
            <h2><?php the_field('title'); ?></h2>
            <span><?php the_field('dimension'); ?></span>
            <span><?php the_field('year'); ?></span>
            <p><?php echo $text ?></p>
        <a href="<?php echo $singlePageLink; ?>">Go to the portrait  &rarr;</a>
        </div>
        <?php
        echo '</div>';
      endwhile;
      ?>

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