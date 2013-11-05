        <?php 
    
          $site_overview_title1 = get_option('ecobiz_site_overview_title1'); 
          $site_overview_url1   = get_option('ecobiz_site_overview_url1');
          $site_overview_icon1  = get_option('ecobiz_site_overview_icon1');
          $site_overview_desc1  = get_option('ecobiz_site_overview_desc1');
          $site_overview_title2 = get_option('ecobiz_site_overview_title2'); 
          $site_overview_url2   = get_option('ecobiz_site_overview_url2');
          $site_overview_icon2  = get_option('ecobiz_site_overview_icon2');
          $site_overview_desc2  = get_option('ecobiz_site_overview_desc2');
          $site_overview_title3 = get_option('ecobiz_site_overview_title3'); 
          $site_overview_url3   = get_option('ecobiz_site_overview_url3');
          $site_overview_icon3  = get_option('ecobiz_site_overview_icon3');
          $site_overview_desc3  = get_option('ecobiz_site_overview_desc3');
          $site_overview_title4 = get_option('ecobiz_site_overview_title4'); 
          $site_overview_url4   = get_option('ecobiz_site_overview_url4');
          $site_overview_icon4  = get_option('ecobiz_site_overview_icon4');
          $site_overview_desc4  = get_option('ecobiz_site_overview_desc4');                  
        ?>          
          
          <!-- Content Box #1 -->
          <div class="mainbox">
            <h4><a href="<?php echo $site_overview_url1 ? $site_overview_url1 :"#";?>"><?php echo $site_overview_title1 ? stripslashes($site_overview_title1) : "About Us";?></a></h4>
            <img src="<?php echo get_template_directory_uri();?>/timthumb.php?src=<?php echo $site_overview_icon1 ? $site_overview_icon1 : get_template_directory_uri().'/images/icon1.png';?>&amp;h=64&amp;w=64&amp;zc=1" class="alignleft" alt="" />
            <p><?php echo $site_overview_desc1 ? stripslashes($site_overview_desc1) : "Integer eu lacus mauris hendrerit egestas imperdiet placerat ullam dolor lectus sollicitudin sed dictum  uisque nibh ligula, pharetra sit amet euismod.";?></p>
          </div>
          
          <!-- Content Box #2 -->
          <div class="mainbox box-last">
            <h4><a href="<?php echo $site_overview_url2 ? $site_overview_url2 :"#";?>"><?php echo $site_overview_title2 ? stripslashes($site_overview_title2) : "Our Services";?></a></h4>
            <img src="<?php echo get_template_directory_uri();?>/timthumb.php?src=<?php echo $site_overview_icon2 ? $site_overview_icon2 : get_template_directory_uri().'/images/icon2.png';?>&amp;h=64&amp;w=64&amp;zc=1" class="alignleft" alt="" />
            <p><?php echo $site_overview_desc2 ? stripslashes($site_overview_desc2) : "Integer eu lacus mauris hendrerit egestas imperdiet placerat ullam dolor lectus sollicitudin sed dictum  uisque nibh ligula, pharetra sit amet euismod.";?></p>
          </div>
          
          <div class="spacer"></div>
          
          <!-- Content Box #3 -->
          <div class="mainbox">
            <h4><a href="<?php echo $site_overview_url3 ? $site_overview_url3 :"#";?>"><?php echo $site_overview_title3 ? stripslashes($site_overview_title3) : "Our Works";?></a></h4>
            <img src="<?php echo get_template_directory_uri();?>/timthumb.php?src=<?php echo $site_overview_icon3 ? $site_overview_icon3 : get_template_directory_uri().'/images/icon3.png';?>&amp;h=64&amp;w=64&amp;zc=1" class="alignleft" alt="" />
            <p><?php echo $site_overview_desc3 ? stripslashes($site_overview_desc3) : "Integer eu lacus mauris hendrerit egestas imperdiet placerat ullam dolor lectus sollicitudin sed dictum  uisque nibh ligula, pharetra sit amet euismod.";?></p>
          </div>
          
          <!-- Content Box #4 -->
          <div class="mainbox box-last">
            <h4><a href="<?php echo $site_overview_url4 ? $site_overview_url4 :"#";?>"><?php echo $site_overview_title4 ? stripslashes($site_overview_title4) : "Our Products";?></a></h4>
            <img src="<?php echo get_template_directory_uri();?>/timthumb.php?src=<?php echo $site_overview_icon4 ? $site_overview_icon4 : get_template_directory_uri().'/images/icon4.png';?>&amp;h=64&amp;w=64&amp;zc=1" class="alignleft" alt="" />
            <p><?php echo $site_overview_desc4 ? stripslashes($site_overview_desc4) : "Integer eu lacus mauris hendrerit egestas imperdiet placerat ullam dolor lectus sollicitudin sed dictum  uisque nibh ligula, pharetra sit amet euismod.";?></p>
          </div> 