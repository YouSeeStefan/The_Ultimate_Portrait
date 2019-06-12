<?php /* Template Name: Single portrait */ ?>


<?php get_header(); ?>

<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col-md col-12">
      <div class="row" style="margin-top: 3em;">
        <div class="col-md-6">
          <div class="col-12">
            <?php
            $args = array('post_type' => 'portrait', 'posts_per_page' => -1);
            $loop = new WP_Query($args);

            $image = get_field('portrait');

            $size = 'largest';
            $thumb = $image['sizes'][$size];

            if (!empty($image)) : ?>

              <a class="peppa" href="<?php echo $image['url'] ?>">   
                <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" style="width: 100%;" />
</a>

            <?php endif; ?>
          </div>

          <div class="col-12 galleryDesktop">
            <div class="row">
            <?php

          $images = get_field('process_images_gallery');

          if ($images) : ?>

            <?php foreach ($images as $image) :
            
              $content .= '<div class="col-4"><a class="process-img" href="' . $image['url'] . '" >';
              $content .= '<img src="' . $image['sizes']['thumbnail'] . '" alt="' . $image['alt'] . '" />';
              $content .= '</a></div>';
              // if (function_exists('slb_activate')) {
              //   $content = slb_activate($content);
             // }
 endforeach; 
  echo $content;
        endif; ?>
                <div class="col">
                <?php
    $prev = get_adjacent_post(false, '', true);
    $next = get_adjacent_post(false, '', false);

    //use an if to check if anything was returned and if it has, display a link
    if($prev){
        $url = get_permalink($prev->ID);            
        echo '<a href="' . $url . '" title="' . $prev->post_title . '" class="portraitPreviousButton">' . $prev->post_title . "'s portrait" . '</a>';
    }

    if($next) {
        $url = get_permalink($next->ID);            
        echo '<a href="' . $url . '" title="' . $next->post_title . '" class="portraitNextButton">'. $next->post_title . "'s portrait" . '</a>';
    } 
?>
              </div>

        
        </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-12  text-center">
            <div class="home_text">
              <div class="resultsTextDiv" style="max-width: 100%;">
                <h2><?php the_field('title'); ?></h2>
                <span class="portraitInfo"><?php the_field('dimension'); ?></span>
                <span class="portraitInfo"><?php the_field('year'); ?></span>
                <p><?php the_field('description'); ?></p>
                
                  
                  <a class="gotoprocessButton">Read more about process</a>

              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="col-12  text-center">
            <div class="home_text">
            <?php

            $image = get_field('stopmotion');

            ?>
<a class="peppa" href="<?php echo $image['url'] ?>" target="_blank">
<video width="100%" height="auto" autoplay loop>
  <source src="<?php echo $image['url']; ?>" type="video/mp4">

</video>
</a>

            <?php  ?>

          </div>
              </div></div></div>




        <div class="col-12 galleryMobile">
          <?php

          $images = get_field('process_images_gallery');

          if ($images) : ?>

            <?php foreach ($images as $image) :
            
              $content .= '<a class="" href="' . $image['url'] . '">';
              $content .= '<img src="' . $image['sizes']['thumbnail'] . '" alt="' . $image['alt'] . '" />';
              $content .= '</a>';
              // if (function_exists('slb_activate')) {
              //   $content = slb_activate($content);
              // }
 endforeach; 
echo $content;
        endif; ?>
        <span><?php echo get_next_posts_link( $label, $max_page ); ?>  </span>
        <span><?php echo get_next_posts_link( $label, $max_page ); ?>  </span>
      
        </div>
      </div>
    </div>



    <div class="col-md-3 col-12 bigScreenNav sticky" style="padding: 0; min-height:100vh">

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