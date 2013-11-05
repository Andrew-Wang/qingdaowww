     
       <!-- Slideshow Wrapper -->
      <div id="slide-wrapper">
        <!-- Slideshow Start -->
        <?php if (post_type_exists('slideshow')) { ?>
        <ul id="kwicks1">
       <?php
        global $post;
        $slideshow_order = get_option('ecobiz_slideshow_order') ? get_option('ecobiz_slideshow_order') : "date";
        $enable_caption = get_option('ecobiz_nivo_caption'); 
          
          query_posts(array( 'post_type' => 'slideshow', 'showposts' => 5,'orderby'=>$slideshow_order));
          ?>
          <?php
          if (have_posts()) {
          while (have_posts() ) : the_post();
            $slideshow_url = (get_post_meta($post->ID, '_slideshow_url', true )) ? get_post_meta($post->ID, '_slideshow_url', true ) : get_permalink();
            $slide_permalink = "<a href=".get_permalink($post->ID).'>'.get_the_title()."</a>";
            ?>
          
          <li>
            <?php if (function_exists('has_post_thumbnail') && has_post_thumbnail()) {?>
              <img src="<?php echo get_template_directory_uri();?>/timthumb.php?src=<?php echo thumb_url();?>&amp;h=344&amp;w=960&amp;zc=1" alt="" />                
            <?php } ?>            
            <div class="caption">
              <h4><?php the_title();?></h4>
            </div>
            <div class="heading-text">
              <h3><?php the_title();?></h3>
              <?php the_content();?>  
            </div>
            <div class="shadow"></div>
          </li>
          <?php endwhile;?>
          <?php } ?>                   
        </ul>
        <?php } ?>
        <!-- Slideshow End -->
      </div>
      <!-- Slideshow Wrapper End -->