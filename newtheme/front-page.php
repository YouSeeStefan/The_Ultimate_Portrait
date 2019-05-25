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

        <h1>THE ULTIMATE PORTRAIT</h1>

        <?php /* the_content(); */ ?>
        <p>In this series NaadArtworks paints with objects. These items
          are used in the same manner as George Seurat made
          paintings out of dots, David Hockney used Polaroids in his
          work in the 70s and of course the portraits of Giuseppe
          Arcimboldo. Because of the three-dimensional characteristics
          of objects, the work sews a fine line between sculpture and
          painting.</p>
        <p>The items used aren’t just any material. These objects are
          from the portrayed and have emotional value. They are stuff
          that people might collect because it tells a story, or represent
          a period of life. For example: a pair of glasses, a ticket to a
          concert, or a lighter that may have ignited a love. It’s about the
          life experiences, which are collected and saved as
          memorabilia.</p>
        <p class="lastAlineaPadding">The portrait not only shows an external appearance, but also
          reflects the journey through a life.</p>

        <a href="portraits" class="homePortraitButton">
          To the portraits
        </a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>