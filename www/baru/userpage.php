<!DOCTYPE html>
<html>
    <!--
  * Please see the included README.md file for license terms and conditions.
  -->

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="framework7/css/framework7.ios.min.css">
        <title>Blank App Designer Cordova Web App Project Template</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">


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

        <script src="cordova.js" id="xdkJScordova_"></script>

        <script src="js/app.js"></script>
        <!-- for your event code, see README and file comments for details -->
        <script src="js/init-app.js"></script>
        <!-- for your init code, see README and file comments for details -->
        <script src="xdk/init-dev.js"></script>
        <!-- normalizes device and document ready events, see file for details -->
        <script type="application/javascript" src="lib/jquery.min.js"></script>
        <script type="application/javascript" src="framework7/js/framework7.min.js"></script>
        <script type="application/javascript" src="sidebar/js/hammer.js"></script>
        <script type="application/javascript" src="sidebar/js/jquery.hammer.js"></script>
        <script type="application/javascript" src="sidebar/js/swipe-hammer.js"></script>
        <script type="application/javascript" src="sidebar/js/sidebar.js"></script>
    </head>

    <body>
        <!-- IMPORTANT: Do not include a weinre script tag as part of your release builds! -->
        <!-- Place your remote debugging (weinre) script URL from the Test tab here, if it does not work above -->
        <!-- <script src="http://debug-software.intel.com/target/target-script-min.js#insertabiglongfunkynumberfromthexdkstesttab"></script> -->
        <div class="uwrap views">
            <div class="upage view-main view" id="mainpage">
                <div class="pages">
                    <div class="page">
                        
                             <div class="pages">

                    <div class="page navbar-fixed">
                        <div class="navbar inner-element uib_w_21 bg_header" data-uib="framework7/header" data-ver="0">
                            <div class="navbar-inner">
                                 <div class="left">
                                    <div class="widget-container content-area horiz-area wrapping-col"><a class="button widget uib_w_19 d-margins button-round button-fill color-black" data-uib="framework7/button" data-ver="0" id="btn_back_group"><span>Back</span></a>
                                    </div>
                                </div>
                                <div class="center labeltext"></div>
                                <div class="right">
                                    <div class="widget-container content-area horiz-area wrapping-col"></div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content upage-content content-area" id="page_87_5">
                            <div class="widget uib_w_23 d-margins" data-uib="framework7/list_block" data-ver="0">
                                <div class="list-block">
                                    <ul>
                                        <li class="widget uib_w_24" data-uib="framework7/input" data-ver="0">
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div class="item-title label">
                                                        <?php
                                                    $url = file_get_contents("http://192.168.0.200/api/pengguna.php");
                                                    $result = json_decode($url, true);
                                                    if($result['status'] == true){
                                                        foreach($result['data'] as $row){
                                                            
                                                            echo "<br>Nama :".$row['nama_pengguna'];
                                                        }
                                                    }
                                                ?>
                                                    
                                                </div>
                                                    <div class="item-input">

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget uib_w_25" data-uib="framework7/input" data-ver="0">
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div class="item-title label"><?php
                                                    $url = file_get_contents("http://192.168.0.200/api/pengguna.php");
                                                    $result = json_decode($url, true);
                                                    if($result['status'] == true){
                                                        foreach($result['data'] as $row){
                                                            echo "Username : ".$row['username_pengguna'];
                                                            
                                                        }
                                                    }
                                                ?></div>
                                                    <div class="item-input">

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="buttons-row widget uib_w_26 d-margins" data-uib="framework7/button_group" data-ver="0"><a class="button widget uib_w_27 button-round button-fill" data-uib="framework7/button" data-ver="0"><span>Modify Password</span></a><a class="widget uib_w_28 button button-round color-blue" data-uib="framework7/button" data-ver="0"><span>Sign Out</span></a>
                            </div>
                        </div>
                    </div>

                </div>

                            
                               

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="application/javascript" src="framework7/my-app.js"></script>
    </body>

</html>