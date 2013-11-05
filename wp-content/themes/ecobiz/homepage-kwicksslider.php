<?php
/*
Template Name: Homepage Kwicks Slider
*/
?>  
<?php get_header();?>
  <?php $kwicks_speed = get_option('ecobiz_kwicks_speed');?>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
  
    $('#kwicks1').kwicks({
  		event : 'mouseenter',
  		max : 800,
      spacing: 0,
      duration : <?php echo $kwicks_speed ? $kwicks_speed : 200;?>
  	});
    
    $(".heading-text").hide();
  
  	$('#kwicks1 li').mouseover(function() {
  	  $("#kwicks1 li.active .caption").stop().fadeTo("fase",0);
      $("#kwicks1 li.active .heading-text").stop().fadeTo("slow", 0.8);	
  		$("#kwicks1 li.active .heading-text p").stop().fadeTo("slow",0.8);
      if ($.browser.msie && $.browser.version.substr(0,1) == 8){
          $("#kwicks1 li.active .caption").hide();  
          $("#kwicks1 li.active .heading-text h3").show();	
        }
  	}).mouseout(function(){
  	   $(".caption").stop().fadeTo("fast",0.8);	 
        $("#kwicks1 li .heading-text").stop().fadeTo("slow", 0);
    		$("#kwicks1 li .heading-text p").stop().fadeTo("slow",0);
        if ($.browser.msie && $.browser.version.substr(0,1) == 8){
          $("#kwicks1 li .heading-text h3").hide();  
        }
  	});    
  });
  </script>  

    <?php include (TEMPLATEPATH.'/slideshow/kwicks-slider.php');?>
    
    <div class="clear"></div>
    
    <?php get_template_part( 'featureslist','4 cols site features' );?>
      
      <div class="clear"></div>
      <div class="center">
        <!-- Main Content -->
        <div class="maincontent">
        <?php
          $welcome_title = get_option('ecobiz_welcome_title');
          $welcome_message = get_option('ecobiz_welcome_message');
        ?>
          <h3><?php echo ($welcome_title) ? $welcome_title : "Welcome to Our Site!";?></h3>
          <p><?php echo ($welcome_message) ? $welcome_message : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum dui quis sem fermentum a mattis ipsum ultrices. Integer eu lacus sit amet mauris hendrerit egestas et eget neque. Mauris ac justo tempus velit imperdiet placerat. Nullam dolor lectus, sollicitudin sed dictum nec, consequat in erat. Quisque nibh ligula";?></p>
          
          <?php get_template_part( 'site-overview','4 cols site overview' );?>
        </div>
        <!-- Main Content End -->
        
        <?php get_sidebar();?>
        
<?php get_footer();?>