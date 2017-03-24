<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.leanModal.min.js"></script>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="The News Reporter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->

    </head>
    <body>         
        <!-- header-section-starts -->
        <div class="container">	
            <div class="news-paper">
                <div class="header">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html">
                                <h1>E-News <span>Portal</span></h1>
                            </a>
                        </div>
                    </div>
                    <div class="social-icons"> 
                        <!--Facebook Like Button-->
                        <div id="fb-root"></div>
                        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-like" data-href="https://www.facebook.com/mew.the.bilai/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>                      
                        <!--End Facebook Like Button-->
                    </div>
                    <div class="clearfix"></div>
                    <div class="header-right">
                        <div class="top-menu">
                            <ul>  
                                <li><a href="<?php echo base_url() ?>" class="btn1">হোম |</a></li>
                                <?php foreach ($all_header_category as $v_header_category) { ?>
                                    <li><a href="<?php echo base_url() ?>welcome/news_category/<?php echo $v_header_category->category_id ?>"><?php echo $v_header_category->category_name; ?></a></li> |  
                                <?php } ?>
                                <?php
                                $user_id = $this->session->userdata('user_name');
                                if ($user_id != null) {
                                    ?>                
                                    <li><a class="btn1"><?php echo $user_id; ?></a></li>|
                                    <li><a href="<?php echo base_url(); ?>welcome/logout" class="btn1">Logout</a></li>
                                <?php } else { ?>
                                    <li><a id="modal_trigger" href="#modal" class="btn1">লগইন </a></li>
                                <?php } ?>
                                <div id="modal" class="popupContainer" style="display:none;">
                                    <header class="popupHeader">
                                        <span class="header_title">Login</span>
                                        <span class="modal_close"><i class="fa fa-times"></i></span>
                                    </header>

                                    <section class="popupBody">
                                        <!-- Social Login -->
                                        <div class="social_login">
                                            <div class="action_btns">
                                                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                                                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                                            </div>
                                        </div>

                                        <!-- Username & Password Login form -->
                                        <div class="user_login" >
                                            <form action="<?php echo base_url(); ?>welcome/check_user_login" method="post">
                                                <label>Email / Username</label>
                                                <input type="text" name="user_email_add"/>
                                                <br />
                                                <label>Password</label>
                                                <input type="password" name="user_password"/>
                                                <br />                                                    
                                                <div class="action_btns">
                                                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                                    <div class="one_half last">
                                                        <button type="submit" class="btn btn-red">Login</button> 
                                                    </div>
                                                </div>
                                            </form>
                                            <a href="<?php echo base_url(); ?>welcome/forgot_password" class="forgot_password">Forgot password?</a>
                                        </div>
                                        <!-- Register Form -->
                                        <div class="user_register">
                                            <form action="<?php echo base_url(); ?>welcome/save_user_info" method="post" onsubmit="return validateStandard(this)">
                                                <label>Full Name</label>
                                                <input type="text"  name="user_name" required="true"/>
                                                <br />

                                                <label>Email Address</label>
                                                <input type="email" name="user_email_address" id="username" type="text" Placeholder="Email Address" err=" your are email" required="true" onblur="makerequest(this.value, 'res')"/><span id="res"></span>
                                                <br />
                                                <label>Phone Number</label>
                                                <input autofocus class="input-large span10" name="user_phone_number" id="username" type="text" Placeholder="Phone Number" required err=" your are tel" />
                                                <br/>
                                                <label>Password</label>
                                                <input type="password" name="user_password" required="true" />
                                                <br />                                                  
                                                <div class="action_btns">
                                                    <div class="one_half">
                                                        <a href="#" class="btn back_btn">
                                                            <i class="fa fa-angle-double-left"></i> Back</a></div>
                                                    <div class="one_half last">
                                                        <button type="submit" id="cbutton" class="btn btn-red" >Register</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                                <script type="text/javascript">
                                    $("#modal_trigger").leanModal({top: 200, overlay: 0.6, closeButton: ".modal_close"});

                                    $(function () {
                                        // Calling Login Form
                                        $("#login_form").click(function () {
                                            $(".social_login").hide();
                                            $(".user_login").show();
                                            return false;
                                        });

                                        // Calling Register Form
                                        $("#register_form").click(function () {
                                            $(".social_login").hide();
                                            $(".user_register").show();
                                            $(".header_title").text('Register');
                                            return false;
                                        });

                                        // Going back to Social Forms
                                        $(".back_btn").click(function () {
                                            $(".user_login").hide();
                                            $(".user_register").hide();
                                            $(".social_login").show();
                                            $(".header_title").text('Login');
                                            return false;
                                        });

                                    })
                                </script></li> |   
                            </ul>
                        </div>
                        <!---pop-up-box---->  
                        <link href="<?php echo base_url(); ?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                        <script src="<?php echo base_url(); ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
                        <!---//pop-up-box---->


                        <script>
                                        $(document).ready(function () {
                                            $('.popup-with-zoom-anim').magnificPopup({
                                                type: 'inline',
                                                fixedContentPos: false,
                                                fixedBgPos: true,
                                                overflowY: 'auto',
                                                closeBtnInside: true,
                                                preloader: false,
                                                midClick: true,
                                                removalDelay: 300,
                                                mainClass: 'my-mfp-zoom-in'
                                            });

                                        });
                        </script>	
                        <div class="search">
                            <form>
                                <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = '';
                                            }"/>
                                <input type="submit" value="">
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <span class="menu"></span>
                <div class="menu-strip">
                    <ul>           
                        <?php foreach ($all_menu_category as $v_menu_category) { ?>
                            <li><a href="<?php echo base_url() ?>welcome/news_category/<?php echo $v_menu_category->category_id ?>"><b><?php echo $v_menu_category->category_name ?></b></a></li>                       
                        <?php } ?>
                    </ul>
                </div>
                <!-- script for menu -->
                <script>
                    $("span.menu").click(function () {
                        $(".menu-strip").slideToggle("slow", function () {
                            // Animation complete.
                        });
                    });
                </script>
                <!-- script for menu -->
                <div class="clearfix"></div>
                <!--Start Main Content-->
                <div class="main-content">
                    <?php echo $maincontent; ?>
                    <!------------Start SideBar----------------->
                    <?php if (isset($sidebar)) { ?>
                        <div class="col-md-3 side-bar">
                            <div class="popular">
                                <div class="main-title-head">
                                    <h5>সর্বশেষ </h5>
                                    <div class="clearfix"></div>
                                </div>		
                                <div class="popular-news">  
                                    <?php foreach ($latest_news as $v_latest_news) { ?>
                                        <div class="popular-grid">
                                            <i><?php echo $v_latest_news->news_post_date_time; ?> </i>
                                            <p><?php echo $v_latest_news->news_title; ?>   <a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_latest_news->news_id; ?>">Read More</a></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="popular">
                                <div class="main-title-head">
                                    <h4> সর্বাধিক পঠিত </h4>
                                    <div class="clearfix"></div>
                                </div>		
                                <div class="popular-news">
                                    <?php foreach ($popular_news as $v_popular_news) { ?>
                                        <div class="popular-grid">
                                            <i>পঠিত  <?php echo $v_popular_news->hit_count; ?>  বার   </i>
                                            <p><?php echo $v_popular_news->news_title; ?>  <a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_popular_news->news_id; ?>">Read More</a></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="subscribe-now">
                                <div class="discount">
                                    <a href="#">
                                        <div class="save">
                                            <p>Place </p>
                                            <p>Here</p>
                                        </div>
                                        <div class="percent">
                                            <h2>Add</h2>
                                        </div>
                                        <div class="clearfix"></div>
                                </div>						
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                    <!------------End SideBar----------------->
                    <div class="clearfix"></div>
                </div>
                <!--End Main Content-->
                <div class="footer text-center">
                    <div class="bottom-menu">

                        <ul>   
                            <?php foreach ($all_menu_category as $v_menu_category) { ?>
                                <li><a href="<?php echo base_url() ?>welcome/news_category/<?php echo $v_menu_category->category_id ?>"><?php echo $v_menu_category->category_name; ?></a></li> |                 							
                            <?php } ?>
                        </ul>

                    </div>
                    <div class="copyright text-center">
                        <p>E-News Portal &copy; 2017 All rights reserved | Template  by  <a href="http://newsportal.biz">E-News</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            <!--
//Create a boolean variable to check for a valid Internet Explorer instance.
            var xmlhttp = false;
            //Check if we are using IE.
            try {
                //If the Javascript version is greater than 5.
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

                //alert ("You are using Microsoft Internet Explorer.");
            } catch (e) {

                //If not, then use the older active x object.
                try {
                    //If we are using Internet Explorer.
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    //alert ("You are using Microsoft Internet Explorer");
                } catch (E) {
                    //Else we must be using a non-IE browser.
                    xmlhttp = false;
                }
            }
            //If we are using a non-IE browser, create a javascript instance of the object.
            if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
                xmlhttp = new XMLHttpRequest();
                //alert ("You are not using Microsoft Internet Explorer");
            }

            function makerequest(given_email, objID)
            {
                //alert(given_text);
                //var obj = document.getElementById(objID);
                serverPage = '<?php echo base_url(); ?>welcome/ajax_email_check/' + given_email;
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function ()
                {
                    //alert(xmlhttp.readyState);
                    //alert(xmlhttp.status);
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        //alert(xmlhttp.responseText);
                        document.getElementById(objID).innerHTML = xmlhttp.responseText;
                        if (xmlhttp.responseText == 'already exists')
                        {
                            document.getElementById('cbutton').disabled = true;
                        }
                        if (xmlhttp.responseText == 'available')
                        {
                            document.getElementById('cbutton').disabled = false;
                        }
                        //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.send(null);
            }
//-->
        </script>
    </body>
</html>
