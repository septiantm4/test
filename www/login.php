<?php
require('koneksi.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($con,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  $nama = stripcslashes($_REQUEST['nama']);
  $nama = mysqli_real_escape_string($con,$nama);
  //Checking is user existing in the database or not
  $query = "SELECT * from user where username= '$username' and password='$password'";

  $result = mysqli_query($con,$query) or die(mysql_error());
  $is_exist = mysqli_num_rows($result);
  if($is_exist>0){

  $rows = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $rows['username'];
        $_SESSION['nama']= $rows['nama'];
        echo "<script>location='baru/halamanutama.php';</script>";
    } else {
        echo "<script>alert('Username atau Password Anda tidak benar !!!');</script>";
        echo "<script>location='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
  <!--
  * Please see the included README.md file for license terms and conditions.
  -->

  <head>
    <link rel="stylesheet" type="text/css" href="framework7/css/framework7.ios.colors.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="framework7/css/framework7.ios.min.css">
    <title>GPS</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <!--
  * The "meta viewport" tag (below) helps your app size appropriately to a device's ideal viewport.
  * Note that Windows device viewports work better when initialized using the @viewport CSS rule.
  * For a quick overview of "meta viewport" and @viewport, see this article:
  *   http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag
  * To see how it works, try your app on a real device with and without a "meta viewport" tag.
  * Additional useful references include:
  *   http://www.quirksmode.org/mobile/viewports.html
  *   http://www.quirksmode.org/mobile/metaviewport/devices.html
  *   https://developer.apple.com/library/safari/documentation/AppleApplications/Reference/SafariHTMLRef/Articles/MetaTags.html
-->

    <!-- <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, minimum-scale=1, maximum-scale=2"> -->

    <style>
      /* following three (cascaded) are equivalent to above three meta viewport statements */
            /* see http://www.quirksmode.org/blog/archives/2014/05/html5_dev_conf.html */
            /* see http://dev.w3.org/csswg/css-device-adapt/ */
                @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; }          @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
                @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }                   @viewport { user-zoom: fixed ; min-zoom: 100% ; }
                /*@-ms-viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }   @viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }*/
    </style>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/index_main.less.css" class="main-less">

    <!-- IMPORTANT: Do not include a weinre script tag as part of your release builds! -->
    <!-- Place your remote debugging (weinre) script URL from the Test tab here, if it does not work below -->
    <!-- <script src="http://debug-software.intel.com/target/target-script-min.js#insertabiglongfunkynumberfromthexdkstesttab"></script> -->

    <!-- Recommended location for your JavaScript libraries -->
    <!-- These library references (below) are just examples to give you the general idea... -->
    <!-- <script src="lib/mc/hammer.js"></script> -->
    <!-- <script src="lib/ft/fastclick.js"></script> -->

    <!--
  * cordova.js is a phantom lib for "Cordova HTML5 web app," it does nothing in a "Standard HTML5 web app"
  * Seeing a "Failed to load resource: net::ERR_FILE_NOT_FOUND" message caused by this "cordova.js" script?
  * The cordova.js script is required if you convert your "Standard HTML5" project into a "Cordova" project.
  * You can safely ignore the error or comment out this line if you will not be developing a Cordova app.
-->
    <script src="cordova.js" id="xdkJScordova_"></script>

    <script src="js/app.js"></script>
    <!-- for your event code, see README and file comments for details -->
    <script src="js/init-app.js"></script>
    <!-- for your init code, see README and file comments for details -->
    <script src="xdk/init-dev.js"></script>
    <!-- normalizes device and document ready events, see file for details -->
    <script type="application/javascript" src="lib/jquery.min.js"></script>
    <script type="application/javascript" src="framework7/js/framework7.min.js"></script>
    <script type="application/javascript" src="js/login_user_scripts.js"></script>
  </head>

  <body>
   
   
	  
    <div class="uwrap views">
      <div class="upage view-main view style-19" id="mainpage">
        <div class="pages">

          <div class="page navbar-fixed">
            <div class="navbar inner-element uib_w_1 bgheader" data-uib="framework7/header" data-ver="0">
              <div class="navbar-inner">
                <div class="left">
                  <div class="widget-container content-area horiz-area wrapping-col"></div>
                </div>
                <div class="center labeltext"></div>
                <div class="right">
                  <div class="widget-container content-area horiz-area wrapping-col"></div>
                </div>
              </div>
            </div>

            <div class="upage-content ac0 content-area vertical-col page-content" id="page_80_9">

              <div class="widget uib_w_2 scale-image d-margins" data-uib="media/img" data-ver="0">
                <figure class="figure-align">
                  <img src="images/logo_login.png">

                  <figcaption data-position="bottom"></figcaption>
                </figure>
              </div>
              <form  method="post" action="" name="signin">
                <div class="list-block">
                  <ul>
                    <li class="item-content">
                      <div class="item-inner">
                        <div class="item-title label">Username</div>
                        <div class="item-input">
                          <input type="text" name="username" id="username" placeholder="Username" required="" autofocus="">
                        </div>
                      </div>
                    </li>
                    <li class="item-content">
                      <div class="item-inner">
                        <div class="item-title label">Password</div>
                        <div class="item-input">
                          <input type="password" name="password" id="password" placeholder="Password" required="" autofocus="">
                        </div>
                      </div>
                    </li>

                  </ul>
                   <div class="list">
            <ul>
              
                <li> 
                  <center>
                    <button class="item-link list-button" type="submit">Sign In</button>
                   
                 </li>
              
            </ul>
                   
                </div>


              </form>
            </div>
          </div>

        </div>
      </div>
      <div class="upage vertical-col left hidden view" id="page_menu">
        <div class="pages">

          <div class="page">
            <div class="page-content upage-content content-area" id="page_80_9"></div>
          </div>

        </div>
      </div>
    </div>

    <script type="application/javascript" src="framework7/my-app.js"></script>
  </body>
</html>