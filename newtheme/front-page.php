<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <?php if (have_rows('slider')) : ?>

        <ul class="slides">

          <?php while (have_rows('slider')) : the_row();

            // vars
            $image = get_sub_field('slider_image');
            // $image = get_sub_field('image');
            // $content = get_sub_field('content');
            // $link = get_sub_field('link');

            ?>

            <li class="slide">

              <?php if ($link) : ?>
                <a href="<?php echo $link; ?>">
                <?php endif; ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                <?php if ($link) : ?>
                </a>
              <?php endif; ?>

              <?php echo $content; ?>

            </li>

          <?php endwhile; ?>

        </ul>

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