<?php
/*
  Template Name: Portraits
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col-md col-12">
   
    <div class="row">
      <div class="col">
      <h1 class="portraitsTitle"><?php the_title(); ?></h1>
      <?php
      $args = array('post_type' => 'portrait', 'posts_per_page' => -1);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
       
        $singlePageLink = get_permalink();
        echo '<div class="row portrait_results">';
        ?>

        <?php

        $image = get_field('portrait');

        $size = 'large';
        $thumb = $image['sizes'][$size];

        if (!empty($image)) : ?>

          <div class="results_image">
          <a href="<?php echo $singlePageLink; ?>" class="pageLinkImage">
          <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" class="resultsImage" />
          </a>
          </div>

        <?php endif;
        $text = get_field('description');
        $textBig = substr($text, 0, 330); //587
        $textBig = substr($textBig, 0, strrpos($textBig, ' '));

        $textMedium = substr($text, 0, 184); //587
        $textMedium = substr($textMedium, 0, strrpos($textMedium, ' '));
        ?>
          <div class="results_text">

            <h2><?php the_field('title'); ?></h2>
            <span class="portraitInfo"><?php the_field('dimension'); ?></span>
            <span class="portraitInfo"><?php the_field('year'); ?></span>
            <p class="textBig"><?php echo $textBig . "..." ?></p>
            <p class="textMedium"><?php echo $textMedium . "..." ?></p>
        <a href="<?php echo $singlePageLink; ?>"><span class="goToPortrait">Go to the portrait</span><span class="viewPortrait">View portrait</span><span class="goToArrow"><?php
        
        $linkStart = get_template_directory_uri();
       echo '<img class="arrowright" src="'. $linkStart .'/img/arrow-right-solid.svg" alt="arrowRight">';
        
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