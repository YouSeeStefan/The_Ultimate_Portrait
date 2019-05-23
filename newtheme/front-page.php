<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xl-10 no-padding">
      <div class="row test">
        <div class="col-6">

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
        <div class="col-6 homeTextPadding">
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
            <p>The portrait not only shows an external appearance, but also
              reflects the journey through a life.</p>

            <a href="#">
              To the portraits
            </a>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col">
          <?php get_footer(); ?>
        </div>
      </div>
    </div>
    <div class="col-2 navCol" style="padding: 0;">

      <?php wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'menu_class' => 'navigation'
        )
      ); ?>

      <img class="sign" src="wp-content/themes/The_Ultimate_Portrait/newtheme/img/handtekening.svg" alt="">

    </div>

  </div>

</div>