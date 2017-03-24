<div class="col-md-9 total-news">
    <h2 style="text-align: center; color:red; margin-bottom: 20px; font-size: 38px; padding-top: 5px;  border-top: 3px solid red;"><?php echo $category_element_by_id->category_name; ?></h2>  
    <div class="technology" style="border-top: 3px solid red; margin-top: -10px;">
        <div class="tech-main"> 
            <?php foreach ($news_by_category as $v_news_by_category) { ?>
                <div class="col-md-4 tech" style="margin-top: 20px;">
                    <div class="view view-tenth">
                        <a href="singlepage.html"><img src="<?php echo base_url() . $v_news_by_category->news_image; ?>" alt="" /></a>
                        <div class="mask" >									
                            <p><?php echo $v_news_by_category->news_title ?></p>
                        </div>
                    </div>
                    <a class="power" href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_news_by_category->news_id; ?>"><?php echo $v_news_by_category->news_summary ?></a>
                </div>
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </div>


</div>	