
<div class="blog-main-content">		
    <div class="col-md-9 total-news">
        <div class="grids">
            <div class="grid box">
                <div class="grid-header">
                    <a class="gotosingle" href="<?php echo base_url(); ?>welcome/news_details/<?php echo $news_info->news_id; ?>"><?php echo $news_info->news_title; ?> </a>
                    <ul>
                        <li><span>Post <a href="#">Date </a> <?php echo $news_info->news_post_date_time; ?> </span></li>
                    </ul>
                </div>
                <div class="singlepage">
                    <a href="#"><img src="<?php echo base_url() . $news_info->news_image; ?>" /></a>
                    <p><?php echo $news_info->full_news ?><a href="#">...</a></p>
                    <div class="clearfix"> </div>
                </div>
                <div class="comments">
                    <ul>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://raazu.com/eshop/category/<?php echo $news_info->news_id ?>&title=<?php echo $news_info->news_title ?>" target="_blank"><img class="img-responsive" style="float:left; width:150px; height: 50px;" src="<?php echo base_url(); ?>images/views.png" title="view" /></a></li>

                    </ul>
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>
        <h3>All Comments.......</h3><hr>
        <?php
        foreach ($comments_info as $v_comments) {
            ?>
            <h4><?php echo $v_comments->comments_description; ?></h4><p style="border-bottom: 1px solid red;"><?php echo $v_comments->user_name; ?></p><hr>
            <?php
        }
        $user_id = $this->session->userdata('user_id');
        if ($user_id != null) {
            ?>                
            <div class="content-form">
                <h3>Leave a comment</h3>
                <form action="<?php echo base_url(); ?>welcome/save_comments" method="post">            
                    <textarea style="height: 80px;" name="comments_description" placeholder="Message"></textarea>
                    <input type="hidden" name="news_id" value="<?php echo $news_info->news_id; ?>">
                    <input type="submit" value="SEND"/>
                </form>
            </div>
        <?php } else { ?>
            <p>Please <span style="color:red;">Login/Register</span>  To Comments  </p>         
        <?php } ?>
    </div>
</div>
<?php
$this->db->where('news_id', $news_info->news_id);
$this->db->set('hit_count', 'hit_count+1', FALSE);
$this->db->update('tbl_news');
?>
