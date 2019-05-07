<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-6">

      <?php if( have_rows('slider') ): ?>
      <div class=" container testimonials-container">

        <?php while( have_rows('slider') ): the_row();

          $image = get_sub_field('slider_image');
          $imageurl = $image['sizes']['slider'];
          $title = get_sub_field('title');

          ?>
        <div class="testimonial">
          <img src="<?php echo $imageurl;?>" alt="<?php echo $title;?>">
      </div>
        <?php endwhile; ?>

      </div>
      <?php endif; ?>


    </div>
    <div class="col-4">
      col 4
    </div>
    <div class="col-2">
      col 2
    </div>
  </div>
  <h1><?php the_title(); ?></h1>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile;
endif; ?>
</div>

<?php get_footer(); ?>
