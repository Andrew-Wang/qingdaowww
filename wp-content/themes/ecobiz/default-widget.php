          <div class="sidebar nospace">
            <div class="sidebartop"></div>
            <div class="sidebarmain">
              <div class="sidebarcontent">
                <h4 class="sidebarheading"><?php echo __('新闻动态','ecobiz');?></h4>
                <?php
                $blog_page = get_option('ecobiz_blog_page');
                $blog_pid = get_page_by_title($blog_page);
                $blog_cats_include = get_option('ecobiz_blog_categories');
                if(is_array($blog_cats_include)) {
                  $blog_include = implode(",",$blog_cats_include);
                }
                ?>
                <?php imediapixel_latestnews($blog_cats_include,5,"");?>
              </div>
            </div>
            <div class="sidebarbottom"></div>
          </div>