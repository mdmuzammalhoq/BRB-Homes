<?php  include ('../lib/Session.php');
    Session::checkSession();

 include ('../Config/config.php');
 include ('../lib/Database.php'); 
 include ('../Format/Format.php'); 


    $db= new Database();
    $fm = new Format();
?>
<?php
  //set headers to NOT cache a page
  //header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
  //header("Pragma: no-cache"); //HTTP 1.0
  //header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  // Date in the past
  //or, if you DO want a file to cache, use:
  //header("Cache-Control: max-age=2592000"); 
//30days (60sec * 60min * 24hours * 30days)
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <img style="    margin: -14px -1px;width: 89px;" src="img/brb/Capture.png" alt="Logo" />
				</div>
				<div class="floatleft middle">
					<h1>BRB Homes Limited</h1>
					<p>Quality is the heart of our Business</p>
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>
                <li class="ic-grid-tables"><a href="booking.php"><span>Booking-Message</span></a></li>
                <!-- <li class="ic-form-style"><a href=""><span>User Profile</span></a></li>
				<li class="ic-typography"><a href="changepassword.html"><span>Change Password</span></a></li>
				
                <li class="ic-charts"><a href="postlist.html"><span>Visit Website</span></a></li> -->
            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                       <!-- <li><a class="menuitem">Site Option</a>
                            <ul class="submenu">
                                <li><a href="slider.php">Slider</a></li>
                                <li><a href="social.html">Social Media</a></li>
                                <li><a href="copyright.html">Copyright</a></li>
                                
                            </ul>
                        </li> -->
						
                         <li><a class="menuitem">Update Pages</a>
                            <ul class="submenu">
                                <li><a href="addslider.php">Add Slider</a></li>
                                <li><a href="sliderlist.php">Slider List</a></li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Photo Gallary</a>
                            <ul class="submenu">
                                <li><a href="addphoto.php">Add Photo</a> </li>
                                <li><a href="photolist.php">Gallary List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Download Option</a>
                            <ul class="submenu">
                                <li><a href="adddownloads.php">Add Downloads</a> </li>
                                <li><a href="downloadslist.php">Downloads List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Projects</a>
                            <ul class="submenu">
                                <li><a href="ongoing.php">Ongoing Projects</a> </li>
                                <li><a href="handover.php">H-Overed Projects</a> </li>
                                <li><a href="upcomming.php">Upcomming Projects</a> </li>
                                <li><a href="ongoinglist.php">Ongoing List</a> </li>
                                <li><a href="handoverlist.php">H-Overed List</a> </li>
                                <li><a href="upcomminglist.php">Upcomming List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">News & Events</a>
                            <ul class="submenu">
                                <li><a href="newsevents.php">Add News or Events</a> </li>
                                <li><a href="newslist.php">News List</a> </li>
                                
                            </ul>
                        </li>
                       
                        
                    </ul>
                </div>
            </div>
        </div>