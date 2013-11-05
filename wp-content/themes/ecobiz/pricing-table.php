<?php
/*
Template Name: Pricing Table
*/
?>
<?php get_header();?>
    
      <?php
        global $post;
        
        $heading_image = get_post_meta($post->ID,"_heading_image",true);
        $bgtext_heading_position = get_post_meta($post->ID,"_bgtext_heading_position",true);
        $page_short_desc = get_post_meta($post->ID,"_page_short_desc",true);
      ?>      
      <!-- Page Heading --> 
      <div id="page-heading">
        <img src="<?php echo $heading_image ? $heading_image : get_template_directory_uri().'/images/page-heading1.jpg';?>" alt="" />
        <div class="heading-text<?php if ($bgtext_heading_position =="right") echo '-right';?>">
          <h3><?php the_title();?></h3>
          <p><?php echo $page_short_desc;?></p>
        </div>
      </div>
      <!-- Page Heading End -->
      <div class="clear"></div>
      
      <div class="center">
        <!-- Main Content Wrapper -->
        <div class="maincontent-full">
        <?php $product_desc = get_option('ecobiz_product_desc');?>
        <?php echo stripslashes($product_desc);?>
        <br />

            <ul class="process">
                <li>1. 通过沟通，了解客户需求<br/>
                    <span>通过电话、电邮或在线等方式沟通，了解网站建设的基本需求。</span></li>
                <li>2. 分析需求，建站方案策划</li>
                <li>3. 确定合作，签署网站建设合同<br/>
                    <span>双方就项目内容和具体需求进行商谈，认可后签署建站合同。客户支付建设首款。</span></li>
                <li>4. 网站设计制作，程序开发<br/>
                    <span>根据策划，按照时间流程安排，进行设计制作，并进行程序开发。</span></li>
                <li>5. 网站整体测试<br/>
                    <span>网站设计制作、程序开发完成，进行测试，检查BUG并及时进行修改。</span></li>
                <li>6. 培训，上线<br/>
                    <span>网站设计、制作、修改、程序开发完成后，提交给客户审核，客户确认并支付余款。创源网络做为专业的网站建设公司会对维护人员进行培训后正式上线。</span></li>
            </ul>
    			<div class="clear"></div>        
          <?php
          	global $post;
          	
          	$product_order = get_option('ecobiz_product_order') ? get_option('ecobiz_product_order') : "date";
            $product_cat = get_option('ecobiz_product_cat');

            $currency = get_option('ecobiz_currency');
            $billing_cycle = get_option('ecobiz_billing_cycle');            
            $product_button_text = get_option('ecobiz_product_button_text');
            
            if (post_type_exists('product')) {
              query_posts(array( 'post_type' => 'product', 'showposts' => 3,'orderby'=>$product_order,'product_category'=>$product_cat));
            }
            $counter = 0; 
            while ( have_posts() ) : the_post();
            $counter++;
            $product_price = get_post_meta($post->ID,'_product_price',true);
            $product_image = get_post_meta($post->ID,'_product_image',true);
            $product_url = get_post_meta($post->ID,'_product_url',true);
            $product_feature = get_post_meta($post->ID,'_product_feature',true);
            $features_list = explode(",",$product_feature);
          ?>   
          
          <div class="productbox<?php if ($counter %3 == 0) echo '-last';?>">
            <div class="topproduct"></div>
            <div class="headingproduct">
              <div class="title">
                <h4><?php the_title();?></h4>
              </div>
              <div class="price">
                <span class="currency"><?php echo $currency ? $currency : "&#36;";?></span><span class="price"><?php echo $product_price;?></span><span class="month">/<?php if ($billing_cycle == "monthly") echo '月'; else echo '年';?></span>
              </div>
              <div class="clear"></div>
              <div class="description">
                <?php the_content();?>
              </div>
            </div>
            <div class="contentproduct">
              <ul class="productfeatures">
                <?php foreach ($features_list as $feature_list) { ?> 
                <li><img src="<?php echo get_template_directory_uri();?>/images/features-icon1.png" alt="" class="product-icon"/><?php echo $feature_list;?></li>
                <?php } ?>
              </ul>
              <div class="clear"></div>
              <div class="buttoncenter">
                <a href="<?php echo $product_url ? $product_url : "#";?>" class="button"><span><?php echo $product_button_text ? $product_button_text : "ORDER NOW!";?> <img src="<?php echo get_template_directory_uri();?>/images/arrow_grey.png" alt="" class="readmore"/></span></a>
              </div>
              <div class="clear"></div>
            </div>
            <div class="bottomproduct"></div>
          </div> 
          
          <?php endwhile;?>      
        </div>
        <!-- Main Content Wrapper End -->
    
  <?php get_footer();?>