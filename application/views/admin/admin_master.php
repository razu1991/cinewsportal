<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
                Charisma v1.0.0

                Copyright 2012 Muhammad Usman
                Licensed under the Apache License v2.0
                http://www.apache.org/licenses/LICENSE-2.0

                http://usman.it
                http://twitter.com/halalit_usman
        -->
        <meta charset="utf-8">
        <title>Free HTML5 Bootstrap Admin Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman">
        <script>
            function check_delete() {
                var chk = confirm('Sure to delete this?');
                if (chk) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
        <!-- The styles -->
        <link href="<?php echo base_url(); ?>admin/css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="<?php echo base_url(); ?>admin/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>admin/css/charisma-app.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>admin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='<?php echo base_url(); ?>admin/css/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='<?php echo base_url(); ?>admin/css/chosen.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/uniform.default.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/colorbox.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/jquery.cleditor.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/opa-icons.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>admin/css/uploadify.css' rel='stylesheet'>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="img/favicon.ico">

    </head>

    <body>
        <!-- topbar starts -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- theme selector starts -->

                    <!-- theme selector ends -->

                    <!-- user dropdown starts -->
                    <div class="btn-group pull-right" >
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i><span class="hidden-phone">Hi <?php echo $this->session->userdata('admin_name'); ?></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>super_admin/logout">logout</a></li>
                        </ul>
                    </div>
                    <!-- user dropdown ends -->

                    <div class="top-nav nav-collapse">
                        <ul class="nav">
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- topbar ends -->
        <div class="container-fluid">
            <div class="row-fluid">

                <!-- left menu starts -->
                <div class="span2 main-menu-span">
                    <div class="well nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li class="nav-header hidden-tablet">Main</li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_Category.aspx"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Category</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_category.aspx"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manage Category</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_tag.aspx"><i class="icon-list-alt"></i><span class="hidden-tablet"> Add Tag</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_tag.aspx"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manage Tag</span></a></li>
                            <?php
                            $access_level = $this->session->userdata('access_level');
                            if ($access_level == 1) {
                                ?>
                            <?php } ?>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_news.aspx"><i class="icon-font"></i><span class="hidden-tablet"> Add News</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_news.aspx"><i class="icon-picture"></i><span class="hidden-tablet"> Manage News</span></a></li>             
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_comment.aspx"><i class="icon-picture"></i><span class="hidden-tablet"> User Comment's</span></a></li>             
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/logout"><i class="icon-picture"></i><span class="hidden-tablet"> Logout</span></a></li>             
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <!-- left menu ends -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <div id="content" class="span10">
                    <!-- content starts -->

                    <?php echo $admin_maincontent; ?>
                    <!-- content ends -->
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->

            <hr>

            <div class="modal hide fade" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Save changes</a>
                </div>
            </div>

            <footer>
                <p class="pull-left">&copy; <a href="http://newsportal.biz/cnewsportal" target="_blank">Edit By Shahnaouz Razu</a> 2017</p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- external javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>admin/js/jquery-1.7.2.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo base_url(); ?>admin/js/jquery-ui-1.8.21.custom.min.js"></script>
        <!-- transition / effect library -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-transition.js"></script>
        <!-- alert enhancer library -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-alert.js"></script>
        <!-- modal / dialog library -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-modal.js"></script>
        <!-- custom dropdown library -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-dropdown.js"></script>
        <!-- scrolspy library -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-scrollspy.js"></script>
        <!-- library for creating tabs -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-tab.js"></script>
        <!-- library for advanced tooltip -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-tooltip.js"></script>
        <!-- popover effect library -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-popover.js"></script>
        <!-- button enhancer library -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-button.js"></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-collapse.js"></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-carousel.js"></script>
        <!-- autocomplete library -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-typeahead.js"></script>
        <!-- tour library -->
        <script src="<?php echo base_url(); ?>admin/js/bootstrap-tour.js"></script>
        <!-- library for cookie management -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.cookie.js"></script>
        <!-- calander plugin -->
        <script src='<?php echo base_url(); ?>admin/js/fullcalendar.min.js'></script>
        <!-- data table plugin -->
        <script src='<?php echo base_url(); ?>admin/js/jquery.dataTables.min.js'></script>

        <!-- chart libraries start -->
        <script src="<?php echo base_url(); ?>admin/js/excanvas.js"></script>
        <script src="<?php echo base_url(); ?>admin/js/jquery.flot.min.js"></script>
        <script src="<?php echo base_url(); ?>admin/js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url(); ?>admin/js/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>admin/js/jquery.flot.resize.min.js"></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.chosen.min.js"></script>
        <!-- checkbox, radio, and file input styler -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.uniform.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.colorbox.min.js"></script>
        <!-- rich text editor library -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.cleditor.min.js"></script>
        <!-- notification plugin -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.noty.js"></script>
        <!-- file manager library -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.elfinder.min.js"></script>
        <!-- star rating plugin -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo base_url(); ?>admin/js/charisma.js"></script>


    </body>
</html>
