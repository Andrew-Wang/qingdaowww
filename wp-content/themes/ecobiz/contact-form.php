<?php
/*
Template Name: Contact Form
*/
?>  
<?php get_header();?>

<?php
  $info_address = get_option('ecobiz_info_address');
  $info_phone = get_option('ecobiz_info_phone');
  $info_email= get_option('ecobiz_info_email');
  $info_website = get_option('ecobiz_info_website');
  $info_latitude = get_option('ecobiz_info_latitude') ? get_option('ecobiz_info_latitude') : "-6.229555086277892";
  $info_longitude = get_option('ecobiz_info_longitude') ? get_option('ecobiz_info_longitude') : "106.82551860809326";
?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACcaZADO4lQXTvVt1QRRWatwHx-RajbRw&sensor=false"></script>                        
<script type="text/javascript">
jQuery(document).ready(function($) { 
	var position = new google.maps.LatLng(<?php echo $info_latitude ? $info_latitude : "-6.229555086277892";?>, <?php echo $info_longitude ? $info_longitude : "106.82551860809326";?>);
	var mapOptions = {
          center: position,
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"),
            mapOptions);
		var marker = new google.maps.Marker({
			map:map,
			animation: google.maps.Animation.DROP,
			position: position
		});
});
</script> 
  
      <?php
        global $post;
        
        $heading_image = get_post_meta($post->ID,"_heading_image",true);
        $bgtext_heading_position = get_post_meta($post->ID,"_bgtext_heading_position",true);
        $page_short_desc = get_post_meta($post->ID,"_page_short_desc",true);
      ?>      
      
      <!-- Page Heading -->
      <div id="page-heading">
        <img src="<?php echo $heading_image ? $heading_image : get_template_directory_uri().'/images/page-heading5.jpg';?>" alt="" />
        <div class="heading-text<?php if ($bgtext_heading_position =="right") echo '-right';?>">
          <h3><?php the_title();?></h3>
          <p><?php echo $page_short_desc;?></p>
        </div>
      </div>
      <!-- Page Heading End -->
      <div class="clear"></div>
      
      <div class="center">
        <!-- Full Width Wrapper -->
        <div class="maincontent-full">
          <!-- Contact Form -->
          <div id="conctactleft">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();?>
            <?php the_content();?>
            <?php endwhile;?>
            <?php endif;?>
            
            <?php $success_msg  = get_option('ecobiz_success_msg');?>
            <div class="success-message"><?php echo ($success_msg) ? stripslashes($success_msg) : __("我们已经收到您的留言，我们会尽快与您联系，谢谢!",'ecobiz');?></div>
            
            <div id="maincontactform">
              <form action="#" id="contactform"> 
              <div>
                <label for="contactname"><?php echo __('姓名 ','ecobiz');?></label>
                <input type="text" name="contactname" class="textfield" id="contactname" value=""  /><span class="require"> *</span>
                <label for="contactsubject"><?php echo __('主题 ','ecobiz');?></label>
                <input type="text" name="contactsubject" class="textfield" id="contactsubject" value=""/><span class="require"> *</span>
                <label for="contactemail"><?php echo __('邮箱地址 ','ecobiz');?></label> 
                <input type="text" name="contactemail" class="textfield" id="contactemail" value="" /><span class="require"> *</span>
                <label for="contactmessage"><?php echo __('信息内容 ','ecobiz');?></label> 
                <textarea name="contactmessage" id="contactmessage" class="textarea" cols="8" rows="12"></textarea><span class="require"> *</span>
                <div class="clear"></div>
                <input type="hidden" name="siteurl" id="siteurl" value="<?php get_template_directory_uri();?>" />   
                <input type="hidden" name="sendto" id="sendto" value="<?php echo (get_option('ecobiz_info_email')) ? get_option('ecobiz_info_email') : get_option('admin_email');?>" />           
                <a href="#" class="button" id="buttonsend"><span><?php echo __('发送','ecobiz');?></span></a>
                <span class="loading" style="display: none;"><?php echo __('请等待..','ecobiz');?></span>
              </div>
              </form>
            </div>
          </div>
          <!-- Contact Form End -->
          
          <!-- Contact Address -->
          <div id="contactright">
            
            <div id="map" class="imgbox"></div>
                
            <ul class="contactinfo">
              <li>
              <?php echo $info_address ? stripslashes($info_address) : "
              Jln. Damai menuju Syurga No. 14,<br />
            Jakarta 20035,<br />
            Indonesia";?></li>
              <li><strong><?php echo __('联系电话','ecobiz');?></strong> : <?php echo $info_phone ? $info_phone : "+62 525625";?></li>
              <li><strong><?php echo __('邮箱','ecobiz');?></strong> : <a href="mailto:<?php echo $info_email ? $info_email : "#";?>"><?php echo $info_email ? $info_email : "info@mydomain.com";?></a></li>
              <li><strong><?php echo __('网址','ecobiz');?></strong> : <a href="<?php echo $info_website ? $info_website : "#";?>"><?php echo $info_website ? $info_website : "http://www.mydomain.com";?></a></li>
            </ul>      
            <div class="clear"></div>
          </div>
          <!-- Contact Address End -->          
        </div>
        <!-- Full Width Wrapper End -->
    
<?php get_footer();?>