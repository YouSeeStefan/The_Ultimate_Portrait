<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-5">

      <?php if( have_rows('slider') ): ?>
      <div class="container testimonials-container pt-4">

        <?php while( have_rows('slider') ): the_row();

          $image = get_sub_field('slider_image');
          $imageurl = $image['sizes']['slider'];
          $title = get_sub_field('title');

          ?>
        <div class="testimonial">
          <img class="portret" src="<?php echo $imageurl;?>" alt="<?php echo $title;?>">
      </div>
        <?php endwhile; ?>

      </div>
      <?php endif; ?>


    </div>
    <div class="col-5">
      <div class="home_text">


      <h1><?php the_title(); ?></h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile;
    endif; ?>
    </div>
    </div>
    <div class="col-2">
      <?php wp_nav_menu (
        array(
          'theme_location' => 'top-menu',
          'menu_class' => 'navigation'
        )
      );?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
