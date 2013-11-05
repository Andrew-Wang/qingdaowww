<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"  />
<title><?php if (is_home () ) { bloginfo('name'); echo " - "; bloginfo('description'); 
} elseif (is_category() ) {single_cat_title(); echo " - "; bloginfo('name');
} elseif (is_single() || is_page() ) {single_post_title(); echo " - "; bloginfo('name');
} elseif (is_search() ) {bloginfo('name'); echo " search results: "; echo esc_html($s);
} else { wp_title('',true); }?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="robots" content="follow, all" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php $favico = get_option('ecobiz_custom_favicon');?>
<link rel="shortcut icon" href="<?php echo ($favico) ? $favico : get_template_directory_uri().'/images/favicon.ico';?>"/>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<!-- Javascript Start //-->
<?php
  $disable_cufon = get_option('ecobiz_disable_cufon');
  if ($disable_cufon != "true") { 
?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/cufon.js"></script>
<?php $cufon_font = get_option('ecobiz_cufon_font'); if ($cufon_font == "") $cufon_font = "ColaborateLight.js";?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/fonts/<?php echo $cufon_font;?>"></script>
<script type="text/javascript">
  Cufon.replace('h1')('h2')('h3')('h4')('h5')('#myslidemenu a',{hover: 'true'})('#myslidemenu li li a',{textShadow: '1px 1px #ffffff',hover: 'true'})('a.button', {hover: 'true'})('.nivo-caption p')('span.price')('span.month');
</script>
<?php } ?>

<?php if (is_home()) { ?> 
  <?php
  $nivo_transition = get_option('ecobiz_nivo_transition');
  $nivo_slices = get_option('ecobiz_nivo_slices');
  $nivo_animspeed = get_option('ecobiz_nivo_animspeed');
  $nivo_pausespeed = get_option('ecobiz_nivo_pausespeed');
  $nivo_directionNav = get_option('ecobiz_nivo_directionNav');
  $nivo_directionNavHide = get_option('ecobiz_nivo_directionNavHide');
  $nivo_controlNav = get_option('ecobiz_nivo_controlNav');  
  ?>
  <script type="text/javascript">
    jQuery(window).load(function($) {
      jQuery('#slider').nivoSlider({
        effect:'<?php echo ($nivo_transition) ? $nivo_transition : "random";?>',
        slices:<?php echo ($nivo_slices) ? $nivo_slices : "15";?>,
        animSpeed:<?php echo ($nivo_animspeed) ? $nivo_animspeed : "500";?>, 
        pauseTime:<?php echo ($nivo_pausespeed) ? $nivo_pausespeed : "3000";?>,
        directionNav:<?php echo ($nivo_directionNav) ? $nivo_directionNav : "true";?>,
        directionNavHide:<?php echo ($nivo_directionNavHide) ? $nivo_directionNavHide : "true";?>,
        controlNav:<?php echo ($nivo_controlNav) ? $nivo_controlNav : "true";?>
      });
    });
    </script> 
<?php } ?>
<!-- Javascript End //-->
</head>
<body <?php body_class(''); ?>>
  <div id="wrapper">
    <div id="topwrapper"></div>
    <div id="mainwrapper">
      <!-- Header Start -->
      <div id="header">
        <div class="center">
          <!-- Logo Start -->
          <div id="logo">
          <?php $logo = get_option('ecobiz_logo'); ?>
          <a href="<?php echo home_url();?>"><img src="<?php echo ($logo) ? $logo : get_template_directory_uri().'/images/logo.png';?>" alt="Logo"/></a>
          </div>
          <!-- Logo End -->
          
          <div id="headerright">
            <!-- Menu Navigation Start --> 
            <div id="mainmenu">
              <div id="myslidemenu" class="jqueryslidemenu">
                <?php 
                if (function_exists('wp_nav_menu')) { 
                  wp_nav_menu( array( 'menu_class' => '', 'theme_location' => 'topnav', 'fallback_cb'=>'imediapixel_topmenu_pages','depth' =>4 ) );
                } 
                ?>
              </div>
            </div>
            <!-- Menu Navigation End -->
          </div>
        </div>
      </div>
      <!-- Header End  -->