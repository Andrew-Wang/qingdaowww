      <!-- Slideshow Wrapper -->
      <div id="slide-wrapper">
        <!-- Slideshow Start -->
        <div id="slider">
        <?php
        global $post;
        $slideshow_order = get_option('ecobiz_slideshow_order') ? get_option('ecobiz_slideshow_order') : "date";
        $enable_caption = get_option('ecobiz_nivo_caption');
      
        if (post_type_exists('slideshow')) { 
          
          query_posts(array( 'post_type' => 'slideshow', 'showposts' => -1,'orderby'=>$slideshow_order));
          ?>
          <?php
          if (have_posts()) {
          while (have_posts() ) : the_post();
            $slideshow_url = (get_post_meta($post->ID, '_slideshow_url', true )) ? get_post_meta($post->ID, '_slideshow_url', true ) : get_permalink();
            $slide_permalink = "<a href=".get_permalink($post->ID).'>'.get_the_title()."</a>";
            ?>
            <a href="<?php echo $slideshow_url;?>" title="<?php the_title();?>">
              <?php if (function_exists('has_post_thumbnail') && has_post_thumbnail()) {?>
              <img src="<?php echo get_template_directory_uri();?>/timthumb.php?src=<?php echo thumb_url();?>&amp;h=344&amp;w=960&amp;zc=1" alt="" title="<?php if ($enable_caption == "true") echo $slide_permalink;else echo ''; ?>"/>                
            <?php } ?>            
            </a>
          <?php endwhile;?>
          <?php } ?>
          <?php } ?>                              
        </div>
        <!-- Slideshow End  -->
      </div>
      <!-- Slideshow Wrapper End -->