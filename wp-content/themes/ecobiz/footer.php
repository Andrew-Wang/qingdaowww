      </div>
      <div class="clear"></div>
    </div>

    <!-- Footer Start -->
    <div id="bottomwrapper"></div>
    <div id="footer">
      <!-- Footer Box #1 -->
      <div class="footerbox">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('bottom1')) { ?>
        <h4><?php echo __('Categories','ecobiz');?></h4>
        <ul>
          <?php wp_list_categories('title_li=&hide_empty=0&exclude=1');?> 
        </ul>
        <?php } ?>
      </div>
      
      <!-- Footer Box #2 -->
      <div class="footerbox">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('bottom2')) { ?>
        <h4><?php echo __('友情链接','exobiz');?></h4>
        <ul>
          <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
        </ul>
        <?php } ?>
      </div>
      
      <!-- Footer Box #3 -->
      <div class="footerbox">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('bottom3')) { ?>
        <h4><?php echo __('公司地址','ecobiz');?></h4>
        <ul class="addresslist">
        <?php
          $info_address = get_option('ecobiz_info_address');
          $info_phone = get_option('ecobiz_info_phone');
          $info_email= get_option('ecobiz_info_email');
          $info_website = get_option('ecobiz_info_website');
        ?>        
          <li>
            <?php echo $info_address ? stripslashes($info_address) :  
            "Jln. Damai menuju Syurga No. 14,<br />
            Jakarta 20035,<br />
            Indonesia";?>
          </li>
          <li><strong><?php echo __('电话 ','ecobiz');?></strong>: <?php echo $info_phone ? $info_phone : "+62 525625";?></li>
          <li><strong><?php echo __('邮箱 ','ecobiz');?></strong>: <a href="mailto:<?php echo $info_email;?>"><?php echo $info_email ? $info_email : "info@mydomain.com";?></a></li>
          <li><strong><?php echo __('网址 ','ecobiz');?></strong>: <a href="<?php echo $info_website;?>"><?php echo $info_website ? $info_website : "http://www.mydomain.com";?></a></li>
        </ul>
        <?php } ?>
      </div>
      
      <!-- Footer Box #4 -->
      <div class="footerbox box-last">
        <?php $footerlogo = get_option('ecobiz_footerlogo'); ?>
        <a href="<?php echo home_url();?>"><img src="<?php echo ($footerlogo) ? $footerlogo : get_template_directory_uri().'/images/footer_logo.png';?>" alt="Footer Logo" class="aligncenter"/></a>
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('bottom4')) { ?>
          <p>青岛创源网站设计——青岛专业的网站设计、网站建设、网络推广</p>
        <?php } ?>
        <ul class="social-links">
        <?php
          $twitter_id = get_option('ecobiz_twitter_id');
          $facebook_url = get_option('ecobiz_facebook_url');
          $linkedin_url = get_option('ecobiz_linkedin_url');
          $flickr_id = get_option('ecobiz_flickr_id');
          $youtube_id = get_option('ecobiz_youtube_id');
        ?>
          <li>
          <?php if ($linkedin_url !="") { ?>
            <a href="<?php echo $linkedin_url;?>"><img src="<?php echo get_template_directory_uri();?>/images/linkedin.png" alt="Linkedin" /></a>
          <?php } ?>
          </li>
          <li>
          <?php if ($twitter_id !="") { ?> 
          <a href="http://twitter.com/<?php echo $twitter_id;?>"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png" alt="Twitter" /></a>
          <?php } ?>
          </li>
          <li>
          <?php if ($facebook_url !="") { ?>
            <a href="<?php echo $facebook_url;?>"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png" alt="Facebook" /></a>
          <?php } ?>
          </li>
          <li>
          <?php if ($flickr_id !="") { ?>
            <a href="http://www.flickr.com/photos/<?php echo $flickr_id;?>"><img src="<?php echo get_template_directory_uri();?>/images/flickr.png" alt="Flickr" /></a>
          <?php } ?>
          </li>
          <?php if ($youtube_id !="") { ?>
            <a href="http://www.youtube.com/user/<?php echo $youtube_id;?>"><img src="<?php echo get_template_directory_uri();?>/images/youtube.png" alt="Flickr" /></a>
          <?php } ?>
          </li>
          <li><a href="<?php bloginfo('rss2_url');?>"><img src="<?php echo get_template_directory_uri();?>/images/feed.png" alt="RSS" /></a></li>
        </ul>
      </div>
      <div class="clear"></div>
      
      <div class="bottom">
        <!-- Footer Menu -->
        <div class="footermenu">
          <?php 
            if (function_exists('wp_nav_menu')) { 
              wp_nav_menu( array( 'menu_class' => '', 'theme_location' => 'footernav', 'fallback_cb'=>'imediapixel_footermenu_pages','depth' =>1 ) );
            } 
          ?>        
        </div>
        <!-- Footer Menu End -->
        
        <!-- Site Copyright -->
        <div class="copyright">
          <p><?php $footer_text = get_option('ecobiz_footer_text');?>
        <?php echo ($footer_text) ? $footer_text : "&copy; 2007 - 2012 - Designed by <a href='#'>imediapixel.com</a>";?></p>
        </div>
        <!-- Site Copyright End -->     
      </div>
    </div>
    <!-- Footer End  -->
  </div>
  <?php 
  $ga_code = get_option('ecobiz_ga_code');
  if ($ga_code) echo stripslashes($ga_code);
  ?>    
  <?php wp_footer();?>
</body>
</html>