<?php /* Template Name: Portraits */ ?>

<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-10 no-padding">
      <div class="row rowC">
        <div class="col-12">
          <?php
          $args = array('post_type' => 'portrait', 'posts_per_page' => -1);
          $loop = new WP_Query($args);
          while ($loop->have_posts()) : $loop->the_post();
            /*  the_title();   */
            $singlePageLink = get_permalink();
            echo '<div class="entry-content">';
            ?>

<?php

            $image = get_field('portrait');

            // thumbnail

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

      </div>
      <div class="row rowF">
        <div class="col">
          <footer class="footerC">
            <div class="footerTables">
              <table>
                <tr>
                  <td>
                    <h3 class="lineHight">I WANT<br>TO BE<br><span class="called">CALLED</span></h3>
                  </td>
                  <td> <a class="clearTD">ddddd</a> </td>
                  <td class="form"><?php echo do_shortcode("[contact-form-7 id='168' title='Contact form 1']"); ?></td>
                </tr>
                </tr>
              </table>
            </div>
          </footer>
          </body>
        </div>
      </div>
    </div>
    <div class="col-2" style="padding: 0;">

      <?php wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'menu_class' => 'navigation'
        )
      ); ?>

      <img class="sign" src="wp-content/themes/newtheme/img/handtekening.svg" alt="">

    </div>

  </div>

</div>
<style>
  .imgContain {
    width: 250px;
    height: 350px;
  }
</style>