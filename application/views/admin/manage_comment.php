<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">All Comments</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Admin</h2>
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
                        <th>User</th>
                        <th>News</th>
                        <th>Comments</th>

                    </tr>
                </thead> 

                <tbody>
                    <?php
                    foreach ($all_comment as $v_comment) {
                        ?>
                        <tr>
                            <td><?php echo $v_comment->user_name; ?></td>
                            <td class="center"><?php echo $v_comment->news_title; ?></td>
                            <td class="center"><?php echo $v_comment->comments_description; ?></td>                                                          
                            <td><a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/delete_comment/<?php echo $v_comment->comments_id; ?>" title="delete" onclick="return check_delete();">
                                    <i class="icon-trash icon-white"></i> 

                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
