<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Tables</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Members</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>News Title</th>
                        <th>News Category</th>
                        <th>Author Name</th>
                        <th>publication_status</th>
                        <th>Actions</th>
                    </tr>
                </thead> 

                <tbody>
                    <?php
                    foreach ($all_news as $v_news) {
                        ?>
                        <tr>
                            <td><?php echo $v_news->news_title; ?></td>
                            <td class="center"><?php echo $v_news->category_name; ?></td>
                            <td class="center"><?php echo $v_news->author_name; ?></td>
                            <td class="center">
                                <?php
                                if ($v_news->publication_status == 1) {
                                    echo 'Published';
                                } else {
                                    echo 'Unpublished';
                                }
                                ?>
                            </td>
                            <td class="center">
                                <?php
                                if ($v_news->publication_status == 1) {
                                    ?>
                                    <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/unpublished_news/<?php echo $v_news->news_id; ?>" title="unpublished">
                                        <i class="icon-arrow-down"></i>  

                                    </a>
    <?php } else {
        ?>
                                    <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/published_news/<?php echo $v_news->news_id; ?>" title="published">
                                        <i class="icon-arrow-up"></i>  

                                    </a>
    <?php }
    ?>
                                <a class="btn btn-info" href="<?php echo base_url(); ?>super_admin/edit_news/<?php echo $v_news->news_id; ?>" title="edit">
                                    <i class="icon-edit icon-white"></i>  

                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/delete_news/<?php echo $v_news->news_id; ?>" title="delete" onclick="return check_delete();">
                                    <i class="icon-trash icon-white"></i> 

                                </a>
                            </td>
                        </tr>
<?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
