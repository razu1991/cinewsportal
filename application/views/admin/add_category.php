<div id="content" class="span10">
    <!-- content starts -->


    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url() ?>super_admin">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="<?php echo base_url() ?>super_admin/category">Category</a>
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
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_category.aspx" method="post">
                    <fieldset>
                        <legend>Add Category</legend>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Name </label>
                            <div class="controls">
                                <input required="true" type="text" name="category_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                                  <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3" name="category_description"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" >Menubar Category</label>
                            <div class="controls">
                                <select name="menubar_category">
                                    <option>Select Status.....</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" >Header Category</label>
                            <div class="controls">
                                <select name="header_category">
                                    <option>Select Status.....</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" >Mid Content Category</label>
                            <div class="controls">
                                <select  name="mid_category">
                                    <option>Select Status.....</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >Front Desk Category</label>
                            <div class="controls">
                                <select name="frontdesk_category">
                                    <option>Select Status.....</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" >Footer Category</label>
                            <div class="controls">
                                <select name="footer_category">
                                    <option>Select Status.....</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
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
                            <button type="submit" class="btn btn-primary" name="btn">Save Category</button>

                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div>
</div>