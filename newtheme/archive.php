
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-10 no-padding">
      <div class="row test">
      <div class="col-12">
        <div class="blogPage">


        <h1><?php single_cat_title();?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>
          <div class="card mb-4">
            <div class="card-body">

              <?php if(has_post_thumbnail()):?>
                <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid"></a>
              <?php endif;?>

              <h3><?php the_title();?></h3>
              <?php /* the_excerpt(); */?>
            </div>
          </div>
        <?php endwhile; endif;?>
</div>

      </div>

      </div>
      <div class="row">
        <div class="col">
        <?php get_footer(); ?>
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
