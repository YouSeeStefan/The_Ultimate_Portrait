<?php
/*
  Template Name: Portraits
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col-md col-12">
    <h1 class="portraitsTitle"><?php the_title(); ?></h1>
    <div class="row">
      <div class="col">
      <?php
      $args = array('post_type' => 'portrait', 'posts_per_page' => -1);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
       
        $singlePageLink = get_permalink();
        echo '<div class="portrait_results">';
        ?>

        <?php

        $image = get_field('portrait');

        $size = 'medium';
        $thumb = $image['sizes'][$size];

        if (!empty($image)) : ?>

          <div class="">
          <a href="<?php echo $singlePageLink; ?>" class="pageLinkImage">
          <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" class="imgContain" />
          </a>
          </div>

        <?php endif;
        $text = get_field('description');
        $text = substr($text, 0, 590); //587
        $text = substr($text, 0, strrpos($text, ' '));
        ?>
          <div class="resultsTextDiv">
            <h2><?php the_field('title'); ?></h2>
            <span class="portraitInfo"><?php the_field('dimension'); ?></span>
            <span class="portraitInfo"><?php the_field('year'); ?></span>
            <p><?php echo $text . "..." ?></p>
        <a href="<?php echo $singlePageLink; ?>"><span class="goToPortrait">Go to the portrait</span><span class="goToArrow"><?php
        
        $linkStart = get_template_directory_uri();
       echo '<img class="arrowright" src="'. $linkStart .'/img/arrow-right-solid.svg" style="height: 1em;" alt="arrowRight">';
        
        ?></span></a>
        </div>
        <?php
        echo '</div>';
      endwhile;
      ?>
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