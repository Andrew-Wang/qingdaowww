      <!-- Features Content -->
      <div id="featuresbox">
      	<?php
      	 $homebox_title1 = get_option('ecobiz_featuresbox_title1');
      	 $homebox_desc1 = get_option('ecobiz_featuresbox_desc1');
      	 $homebox_image1 = get_option('ecobiz_featuresbox_image1');
      	 $homebox_desturl1 = get_option('ecobiz_featuresbox_desturl1');
      	 $homebox_title2 = get_option('ecobiz_featuresbox_title2');
      	 $homebox_desc2 = get_option('ecobiz_featuresbox_desc2');
      	 $homebox_image2 = get_option('ecobiz_featuresbox_image2');
      	 $homebox_desturl2 = get_option('ecobiz_featuresbox_desturl2');
      	 $homebox_title3 = get_option('ecobiz_featuresbox_title3');
      	 $homebox_desc3 = get_option('ecobiz_featuresbox_desc3');
      	 $homebox_image3 = get_option('ecobiz_featuresbox_image3');
      	 $homebox_desturl3 = get_option('ecobiz_featuresbox_desturl3');
         $homebox_title4 = get_option('ecobiz_featuresbox_title4');
      	 $homebox_desc4 = get_option('ecobiz_featuresbox_desc4');
      	 $homebox_image4 = get_option('ecobiz_featuresbox_image4');
      	 $homebox_desturl4 = get_option('ecobiz_featuresbox_desturl4');
      	?>           
        <ul>
          <!-- Features Box #1 -->
          <li class="first">
            <img src="<?php echo $homebox_image1 ? $homebox_image1 : get_template_directory_uri().'/images/bar-chart.png';?>" class="alignleft" alt=""/>
            <h4><a href="<?php echo $homebox_desturl1 ? $homebox_desturl1 : "#";?>"><?php echo $homebox_title1 ? stripslashes($homebox_title1) : "Economy";?></a></h4>
            <div class="clear"></div>
            <p><?php echo $homebox_desc1 ? stripslashes($homebox_desc1) : "Lorem ipsum dolor sit amet, consectetur adipiscing elitsem fermentum a mattis";?></p>
          </li>
          
          <!-- Features Box #2 -->
          <li>
            <img src="<?php echo $homebox_image2 ? $homebox_image2 : get_template_directory_uri().'/images/fancy-globe.png'?>" class="alignleft" alt="" />
            <h4><a href="<?php echo $homebox_desturl2 ? $homebox_desturl2 : "#";?>"><?php echo $homebox_title2 ? stripslashes($homebox_title2) : "Ecology";?></a></h4>
            <div class="clear"></div>
            <p><?php echo $homebox_desc2 ? stripslashes($homebox_desc2) : "Lorem ipsum dolor sit amet, consectetur adipiscing elitsem fermentum a mattis";?></p>
          </li>
          
          <!-- Features Box #3 -->
          <li>
            <img src="<?php echo $homebox_image3 ? $homebox_image3 : get_template_directory_uri().'/images/processing.png';?>" class="alignleft" alt="" />
            <h4><a href="<?php echo $homebox_desturl3 ? $homebox_desturl3 : "#";?>"><?php echo $homebox_title3 ? stripslashes($homebox_title3) : "Equity";?></a></h4>
            <div class="clear"></div>
            <p><?php echo $homebox_desc3 ? stripslashes($homebox_desc3) : "Lorem ipsum dolor sit amet, consectetur adipiscing elitsem fermentum a mattis";?></p>
          </li>
          
          <!-- Features Box #4 -->
          <li class="last"> 
            <img src="<?php echo $homebox_image4 ? $homebox_image4 : get_template_directory_uri().'/images/connections.png';?>" class="alignleft" alt="" />
            <h4><a href="<?php echo $homebox_desturl4 ? $homebox_desturl4 : "#";?>"><?php echo $homebox_title4 ? stripslashes($homebox_title4) : "Connectivity";?></a></h4>
            <div class="clear"></div>
            <p><?php echo $homebox_desc4 ? stripslashes($homebox_desc4) : "Lorem ipsum dolor sit amet, consectetur adipiscing elitsem fermentum a mattis";?></p>
          </li>                              
        </ul>
      </div>
      <!-- Features Content End -->