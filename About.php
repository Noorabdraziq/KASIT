<?php
session_start();

include 'includes/config.php';

?>
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>KASIT Guide</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="KASIT Guide" />
    <meta name="keywords" content="KASIT Guide" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <center><div id="status"><img src="images/header/loadinganimation.gif" width="30%" id="preloader_image" alt="loader"></center>
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+962 6 000 0000</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="#">info@ju.edu.jo</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        <div class="jp_top_header_right_cont">
                            <ul>
                               

                                <li><a style="color:#fff" href="KASIT_Map.php"><i class="fa fa-map"></i>&nbsp; KASIT Map</a></li>
                                <li><a style="color:#fff" href="Students_Login.php"><i class="fa fa-sign-in"></i>&nbsp; Students Login</a></li>
                            
						 </ul>
                        </div>
                        <div class="jp_top_header_right__social_cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Wrapper End -->
    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                                <a href="index.php"><img src="images/header/logo.png" alt="Logo" width="30%" style="margin-top:-10px; background-color:#fff; border-radius: 5%;" title="KASIT Guide" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 full_width">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                <div class="gc_right_menu">
                                    <ul>
                                        
                                       
                                    </ul>
                                </div>
                                <ul class="float_left">
                                    
									
								                                     <li class="gc_main_navigation parent"><a href="index.php" class="gc_main_navigation">Home</a></li>
                                    <li class="gc_main_navigation parent"><a href="About.php" class="gc_main_navigation">About</a></li>
                                                                        <li class="gc_main_navigation parent"><a href="Calculate_GPA.php" class="gc_main_navigation">Calculate GPA</a></li>
                                        
										
										
											   <li class="gc_main_navigation"><a href="#"
                                class="gc_main_navigation active_class">Study Plans <i class="fa fa-caret-down"></i></a>
                            <ul class="navi_2_dropdown">
							
							
							<li class="gc_main_navigation child"><a href="CS_Study_Plan.php" class="gc_main_navigation">CS Study Plan</a></li>
                                          <li class="gc_main_navigation child"><a href="CIS_Study_Plan.php" class="gc_main_navigation">CIS Study Plan</a></li>
                                          <li class="gc_main_navigation child"><a href="BIT_Study_Plan.php" class="gc_main_navigation">BIT Study Plan</a></li>
										  
										  
										  
                              
                            </ul>
                        </li>
						
						
						
						
						 <li class="gc_main_navigation parent"><a href="Important_Links.php" class="gc_main_navigation">Important Links</a></li>

                                    <li class="gc_main_navigation parent"><a href="Contact.php" class="gc_main_navigation">Contact</a></li>
									
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                                <a href="index.php"><img src="images/header/logo.png" width="50%" style="margin-top:-10px; background-color:#fff; border-radius: 5%;" alt="Logo"  title="Grace Church"></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="#0">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#ffffff"/></g></g></svg>
													</a>
                                                <nav class="cd-dropdown">
                                                    <h2><a href="#">KASIT<span>Guide</span></a></h2>
                                                    <a href="#0" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                       
                                                        <li class="has-children">
                                                           <a href="index.php">Home</a>
                                                            <a href="About.php">About</a>
                                                                                                          <a href="Calculate_GPA.php">Calculate GPA</a>
<a href="CS_Study_Plan.php">CS Study Plan</a>
                                                                                                            <a href="CIS_Study_Plan.php">CIS Study Plan</a>
                                                                                                            <a href="BIT_Study_Plan.php">BIT Study Plan</a>
<a href="Important_Links.php" >Important Links</a>                                                      
                                                         
														 <a href="Contact.php">Contact</a>

                                                          
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->


                                                      
                                                       
													
                                                       

                                                    </ul>
                                                    <!-- .cd-dropdown-content -->



                                                </nav>
                                                <!-- .cd-dropdown -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .cd-dropdown-wrapper -->
                            </header>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->
	  <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>About</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="index.php">Home</a> <i style="color:#fff" class="fa fa-angle-right"></i></li>
                                    <li style="color:#fff">About</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
	<!-- aboutus_section start-->
    <div class="aboutus_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="about_text_wrapper">
                        <div class="section_heading section_2_heading">
                            <h2><span>Who we are ?</span></h2>
                        </div>
                       <p  style="font-size:20px; text-align: justify; ;">
						 &nbsp; &nbsp;&nbsp; We are group of students in Information Technology College (KASIT) at the University of Jordan.

We started  this project to improve some related issues  in KASIT department , such as the need for a college map, an GPA calculator, and the presence of one place that includes the most important social networking sites links for the university, all of the above  sarve all students at the University.
</br> </br> 
 &nbsp; &nbsp;&nbsp; Let us be more specific, in order to  serve  students of the college itself,  they are able to create a scheduled plan for their next semester and review academic advice, field training, and study plan for thir majors. 

That’s why our project comes up ! 
</br> </br> 
We will be thrilled to help as much  students, Thank you for visiting or website. </p>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="about_image_wrapper">
                        <img class="img-responsive" src="images/content/icon.png" width="30%" alt="about-img">
                        <img class="img-responsive" src="images/content/logo.png" width="30%" alt="about-img">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        
        <!-- jp Newsletter Wrapper End -->
        <!-- jp footer Wrapper Start -->
        <div class="jp_footer_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_footer_logo_wrapper">
                            <div class="jp_footer_logo">
                                <a href="index.php"><img src="images/content/logo.png" width="20%" alt="logo"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="jp_footer_three_sec_main_wrapper">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="jp_footer_first_cont_wrapper">
                                <div class="jp_footer_first_cont">
                                    <h2>Who We Are</h2>
                                     <p  style="font-size:20px; text-align: justify; ;">
						 &nbsp; &nbsp;&nbsp; We are group of students in Information Technology College KASIT at the University of Jordan.

									We started  this project to improve some related issues  in KASIT department , such as the need for a college map, an GPA calculator, and the presence of one place that includes the most important social networking sites links for the university, all of the above  sarve all students at the University.
									</br> </br> 
									 &nbsp; &nbsp;&nbsp; Let us be more specific, in order to  serve  students of the college itself, ....

									</p>
									
									
									<ul>
                                        <li><i class="fa fa-plus-circle"></i> <a href="About.php">READ MORE</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper2">
                                <div class="jp_footer_candidate">
                                    <h2>Main Menu</h2>
                                   <ul>
                                        <li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Home</a></li>
                                        <li><a href="About.php"><i class="fa fa-caret-right" aria-hidden="true"></i> About</a></li>
                                        <li><a href="Calculate_GPA.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Calculate GPA</a></li>
                                                               <li><a href="CS_Study_Plan.php"><i class="fa fa-caret-right" aria-hidden="true"></i> CS Study Plan</a></li>
                                                               <li><a href="CIS_Study_Plan.php"><i class="fa fa-caret-right" aria-hidden="true"></i> CIS Study Plan</a></li>
                                                               <li><a href="BIT_Study_Plan.php"><i class="fa fa-caret-right" aria-hidden="true"></i> BIT Study Plan</a></li>

                                        <li><a href="Important_Links.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Important Links</a></li>
                                        <li><a href="Contact.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_bottom_footer_Wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_left_cont">
                                        <p>© 2022 KASIT Guide. All Rights Reserved.</p>
                                    </div>
                                    <div class="jp_bottom_top_scrollbar_wrapper">
<a href="javascript:window.scrollTo(0, 0);
" id="return-to-top"><i class="fa fa-angle-up"></i></a>                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_right_cont">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp footer Wrapper End -->
    <!--main js file start-->
    <script src="js/jquery_min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/custom.js"></script>
    <!--main js file end-->
</body>

</html>