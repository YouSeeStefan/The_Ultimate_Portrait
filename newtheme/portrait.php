<?php /* Template Name: Portrait */ ?>

<?php get_header();?>

<div class="container-fluid">
  <div class="row">
    <div class="col-10 no-padding">
      <div class="row rowC">
      <div class="col-12">
        <div class="contactPage">

          <div class="contactInfo">
            <h1><?php the_title();?></h1>

            <?php if(has_post_thumbnail()):?>
              <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
            <?php endif;?>

            <?php if (have_posts()) : while(have_posts()) : the_post();?>
              <?php the_content();?>
            <?php endwhile; endif;?>
          </div>

        </div>
</div>

  </div>
  <div class="row rowF">
  <div class="col">
    <footer class="footerC">
      <div class="footerTables">
        <table>
          <tr>
            <td><h3 class="lineHight">I WANT<br>TO BE<br><span class="called">CALLED</span></h3></td>
            <td> <a class="clearTD">ddddd</a> </td>
            <td class="form"><?php echo do_shortcode("[contact-form-7 id='168' title='Contact form 1']");?></td>
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
