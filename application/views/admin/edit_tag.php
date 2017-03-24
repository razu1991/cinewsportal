<div id="content" class="span10">
    <!-- content starts -->


    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url() ?>super_admin">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="<?php echo base_url() ?>super_admin/tag">Tag</a>
            </li>
        </ul>
    </div>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Form Elements</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div>
                <h3>
                    <?php
                    $msg = $this->session->userdata('message');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/update_tag.aspx" method="post">
                    <fieldset>
                        <legend>Edit Tag</legend>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Tag Name </label>
                            <div class="controls">
                                <input type="text" name="tag_name" class="span6 typeahead" id="typeahead" value="<?php echo $tag_info->tag_name; ?>" >
                                <input type="hidden" name="tag_id" class="span6 typeahead" id="typeahead" value="<?php echo $tag_info->tag_id; ?>" >
                                  <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                            </div>
                        </div>                       
                        <div class="control-group">
                            <label class="control-label" >Publication Status</label>
                            <div class="controls">
                                <select name="publication_status">
                                    <option>Select Status.....</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" name="btn">Update Tag</button>

                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div>
</div>