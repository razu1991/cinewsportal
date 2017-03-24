<div class="col-md-9 total-news">
    <div class="slider">
        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                $("#conference-slider").responsiveSlides({
                    auto: true,
                    manualControls: '#slider3-pager',
                });
            });
        </script>
        <div class="conference-slider">
            <!-- Slideshow 3 -->
            <ul class="conference-rslide" id="conference-slider">
                <?php foreach ($breaking_news as $v_breaking_news) { ?>
                    <li><img src="<?php echo base_url() . $v_breaking_news->news_image; ?>" alt="">
                        <div class="breaking-news-title">                 
                            <a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_breaking_news->news_id; ?>" style="color:white; text-decoration:none; text-align: center; font-size: 22px; "><?php echo $v_breaking_news->news_title; ?></a>                 
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <!-- Slideshow 3 Pager -->
            <ul id="slider3-pager">
                <?php foreach ($breaking_news as $v_breaking_news) { ?>
                    <li><a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_breaking_news->news_id; ?>"><img src="<?php echo base_url() . $v_breaking_news->news_image; ?>" alt=""></a></li>  
                <?php } ?>
            </ul>          
        </div> 
        <h5 class="breaking">Breaking news</h5>
    </div>	
    <div class="posts">
        <div class="left-posts">
            <?php foreach ($all_mid_category as $v_mid_category) { ?>
                <div class="world-news">
                    <div class="main-title-head">
                        <h3><?php echo $v_mid_category->category_name ?></h3>
                        <?php
                        $this->db->select('*');
                        $this->db->from('tbl_news');
                        $this->db->where('category_id', $v_mid_category->category_id);
                        $query_result = $this->db->get();
                        $mid_news = $query_result->result();
                        ?>
                        <a href="<?php echo base_url() ?>welcome/news_category/<?php echo $v_mid_category->category_id ?>">More  +</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="world-news-grids">
                        <?php foreach ($mid_news as $v_mid_news) { ?>
                            <div class="world-news-grid">
                                <img src="<?php echo base_url() . $v_mid_news->news_image; ?>" alt="" />
                                <a href="singlepage.html" class="title"><?php echo $v_mid_news->news_title; ?></a>
                                <p><?php echo $v_mid_news->news_summary; ?></p>
                                <a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_mid_news->news_id; ?>">Read More</a>
                            </div>
                        <?php } ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            <?php } ?>

            <div class="gallery">
                <div class="main-title-head">
                    <h3>আলোক ছবি</h3>
                    <div class="clearfix"></div>
                </div>
                <div class="gallery-images">
                    <div class="course_demo1">
                        <ul id="flexiselDemo1">
                            <?php foreach ($popular_news as $v_popular_news) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_popular_news->news_id; ?>"><img src="<?php echo base_url() . $v_popular_news->news_image; ?>" alt="" /></a>						
                                </li>       
                            <?php } ?>
                        </ul>
                    </div>
                    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 2
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                </div>
                <div class="course_demo1">
                    <ul id="flexiselDemo">
                        <?php foreach ($latest_news as $v_latest_news) { ?>
                            <li>
                                <a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_latest_news->news_id; ?>"><img src="<?php echo base_url() . $v_latest_news->news_image; ?>" alt="" /></a>							
                            </li>  
                        <?php } ?>
                    </ul>
                </div>
                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
                <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 2
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                </script>
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>

            </div>
            <div class="tech-news">                
                <?php foreach ($all_footer_category as $v_footer_category) { ?>
                    <div class="world-news">
                        <div class="main-title-head">
                            <h3><?php echo $v_footer_category->category_name ?></h3>
                            <?php
                            $this->db->select('*');
                            $this->db->from('tbl_news');
                            $this->db->where('category_id', $v_footer_category->category_id);
                            $query_result = $this->db->get();
                            $footer_news = $query_result->result();
                            ?>
                            <a href="<?php echo base_url() ?>welcome/news_category/<?php echo $v_footer_category->category_id ?>">More  +</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="world-news-grids">
                            <?php foreach ($footer_news as $v_footer_news) { ?>
                                <div class="world-news-grid">
                                    <img src="<?php echo base_url() . $v_footer_news->news_image; ?>" alt="" />
                                    <a href="singlepage.html" class="title"><?php echo $v_footer_news->news_title; ?></a>
                                    <p><?php echo $v_footer_news->news_summary; ?></p>
                                    <a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_footer_news->news_id; ?>">Read More</a>
                                </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="right-posts">
            <?php foreach ($all_frontdesk_category as $v_frontdesk_category) { ?>
                <div class="desk-grid">        
                    <h3><?php echo $v_frontdesk_category->category_name; ?></h3>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_news');
                    $this->db->where('category_id', $v_frontdesk_category->category_id);
                    $query_result = $this->db->get();
                    $desk_news = $query_result->result();
                    ?>
                    <?php foreach ($desk_news as $v_desk_news) { ?>
                        <div class="desk">
                            <a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_desk_news->news_id; ?>" class="title"><?php echo $v_desk_news->news_title; ?></a>
                            <p><?php echo $v_desk_news->news_summary; ?></p>
                            <p><a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_desk_news->news_id; ?>">Read More</a></p>
                        </div>     
                    <?php } ?>
                    <a class="more" href="<?php echo base_url() ?>welcome/news_category/<?php echo $v_frontdesk_category->category_id ?>">More  +</a><br><br>

                </div>
            <?php } ?>

        </div>
        <div class="clearfix"></div>	
    </div>
</div>	


