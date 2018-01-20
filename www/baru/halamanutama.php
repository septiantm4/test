<?php  
include("../cek.php");

?>
<!DOCTYPE html>
<html>
    <!--
  * Please see the included README.md file for license terms and conditions.
  -->

    <head>
        <link rel="stylesheet" type="text/css" href="css/framework7-icons.css">
        <link rel="stylesheet" type="text/css" href="media_button_bar/css/media_button_bar.css">
        <link rel="stylesheet" type="text/css" href="framework7/css/framework7.ios.colors.min.css">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="framework7/css/framework7.ios.min.css">
        <title>GPS Tracker</title>
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
        <link rel="stylesheet" type="text/css" href="css/framework7-icons.css">

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
        <script type="application/javascript" src="js/index_user_scripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script type="application/javascript" src="xdk/ad/fw7_subpage.js"></script>
    </head>

    <body>
        <!-- IMPORTANT: Do not include a weinre script tag as part of your release builds! -->
        <!-- Place your remote debugging (weinre) script URL from the Test tab here, if it does not work above -->
        <!-- <script src="http://debug-software.intel.com/target/target-script-min.js#insertabiglongfunkynumberfromthexdkstesttab"></script> -->

        <div class="uwrap views">
            <div class="upage view-main view" id="mainpage">
                <div class="pages">

                    <div class="page navbar-fixed">
                        <div class="navbar inner-element uib_w_1 bg_header" data-uib="framework7/header" data-ver="0" id="header">
                            <div class="navbar-inner">
                                <div class="left">
                                    <div class="widget-container content-area horiz-area wrapping-col">
                                        <a class="uib-graphic-button default-graphic-sizing default-image-sizing hover-graphic-button active-graphic-button default-graphic-button default-graphic-text widget uib_w_11 d-margins media-button-text-bottom" data-uib="media/graphic_button" data-ver="0"
                                        href="#" id="btn_menu">
                                            <img src="images/listmenu.png">
                                            <span class="uib-caption"> </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="center labeltext"></div>

                                <div class="right">
                                    <div class="widget-container content-area horiz-area wrapping-col">
                                        <a class="uib-graphic-button default-graphic-sizing default-image-sizing hover-graphic-button active-graphic-button default-graphic-button default-graphic-text widget uib_w_16 d-margins media-button-text-bottom" data-uib="media/graphic_button" data-ver="0"
                                        href="#" id="btn_refresh">
                                            <img src="images/refreshh.png">
                                            <span class="uib-caption"> </span>
                                        </a>
                                        <a class="uib-graphic-button default-graphic-sizing default-image-sizing hover-graphic-button active-graphic-button default-graphic-button default-graphic-text widget uib_w_22 d-margins media-button-text-bottom" data-uib="media/graphic_button" data-ver="0"
                                        href="#" id="btn_user">
                                            <img src="images/user.png">
                                            <span class="uib-caption"> </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>
                            #map {
                                height: 100%;
                                width: 100%;
                               }
                        </style>

                        <div id="map"></div>

                        <div class="upage-content ac0 content-area vertical-col left page-content" id="page_92_44"></div>
                        <div class="inner-element uib_w_2 uib_sidebar leftbar bar-bg thumb-bg bar-gutter swipe fixed" data-uib="layout/left_sidebar" data-ver="1" data-anim="{'style':'overlap', 'v':200, 'side':'left', 'dur':200}">
                            <div class="sidebar-content content-area vertical-col">

                                <div class="sbs-container widget uib_w_4 d-margins" data-uib="layout/side_by_side" data-ver="0">
                                    <div class="leftContent widget-container">

                                    </div>
                                    <div class="rightContent widget-container">
                                    </div>
                                </div>

                                <!-- List View -->
                                <div class="list-block accordion-list {background-color:black;}">
                                    <ul>
                                        <li class="accordion-item">
                                            <a href="#" class="item-content item-link">
                                                <div class="item-inner">
                                                    <div class="item-title text-color-white">Monitor</div>
                                                </div>
                                            </a>
                                            <div class="accordion-item-content">
                                                <div class="content-block">
                                                    <div class="list-block">
                                                        <ul>
                                                            <li>
                                                                <a href="#vehicle_page" class="item-link item-content" id="btn_vehicle">
                                                                    <div class="item-media">
                                                                        <img src="images/vehicle.png">
                                                                    </div>
                                                                    <div class="item-inner ">
                                                                        <div class="item-title ">Vehicle</div>

                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="item-link item-content">
                                                                    <div class="item-media">
                                                                        <img src="images/group_car.png">
                                                                    </div>
                                                                    <div class="item-inner">
                                                                        <div class="item-title">Group</div>

                                                                    </div>
                                                                </a>
                                                            </li>

                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion-item">
                                            <a href="#" class="item-content item-link">
                                                <div class="item-inner">
                                                    <div class="item-title">About</div>
                                                </div>
                                            </a>
                                            <div class="accordion-item-content">
                                                <div class="content-block">
                                                    <p>BAPitech adalah perusahaan yang bergerak di bidang Teknologi Informasi. Sebagai grup dari perusahaan PT. Bina Area Persada disingkat BAP, BAPitech berperan untuk membangun pengelolaan Sistem Informasi
                                                        bagi organisasi BAP dan organisasi mitra BAP</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="upage vertical-col left hidden view" id="vehicle_page">
                <div class="pages">

                    <div class="page navbar-fixed">
                        <div class="navbar inner-element uib_w_8 bg_header" data-uib="framework7/header" data-ver="0">
                            <div class="navbar-inner">
                                <div class="left">
                                    <div class="widget-container content-area horiz-area wrapping-col"><a class="widget uib_w_9 d-margins button button-round button-fill color-black" data-uib="framework7/button" data-ver="0" id="btn_back_vehicle"><span>Back</span></a>
                                    </div>
                                </div>
                                <div class="center labeltext"></div>
                                <div class="right">
                                    <div class="widget-container content-area horiz-area wrapping-col"></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-block accordion-list {background-color:black;}">
                            <ul>
                                <li class="accordion-item">
                                    <a href="#" class="item-content item-link">
                                        <div class="item-inner">
                                            <div class="item-title text-color-white">Vehicle</div>
                                        </div>
                                    </a>
                                    <div class="accordion-item-content">
                                        <div class="content-block">
                                            <div class="list-block">
                                                <ul>
                                                    <li>
                                                        <a href="sidebar_vehicle/" class="item-link item-content" id="vehicle_1">
                                                            <div class="item-media">
                                                                <img src="images/car.png">
                                                            </div>
                                                            <div class="item-inner ">
                                                                <div class="item-title ">Vehicle_1</div>

                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="item-link item-content">
                                                            <div class="item-media">
                                                                <img src="images/car.png">
                                                            </div>
                                                            <div class="item-inner">
                                                                <div class="item-title">Vehicle_2</div>

                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="item-link item-content">
                                                            <div class="item-media">
                                                                <img src="images/car.png">
                                                            </div>
                                                            <div class="item-inner">
                                                                <div class="item-title">Vehicle_3</div>

                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="page-content upage-content content-area" id="page_80_25"></div>

                    </div>

                    <div class="outer-element uib_w_12 uib_crossbar botbar fixed bar-bg thumb-bg bar-gutter swipe" data-uib="layout/bottom_crossbar" data-ver="1" data-anim="{'style':'overlap', 'v':200, 'side':'bottom', 'dur':200}" id="sidebar_vehicle">
                        <div class="sidebar-content content-area vertical-col">

                        </div>
                    </div>

                </div>
            </div>

            <div class="upage vertical-col left hidden view" id="group_page">
                <div class="pages">

                    <div class="page navbar-fixed">
                        <div class="navbar inner-element uib_w_18 bg_header" data-uib="framework7/header" data-ver="0">
                            <div class="navbar-inner">
                                <div class="left">
                                    <div class="widget-container content-area horiz-area wrapping-col"><a hfre="index.html" class="button widget uib_w_19 d-margins button-round button-fill color-black" data-uib="framework7/button" data-ver="0" id="btn_back_group"><span>Back</span></a>
                                    </div>
                                </div>
                                <div class="center labeltext"></div>
                                <div class="right">
                                    <div class="widget-container content-area horiz-area wrapping-col"></div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content upage-content content-area" id="page_74_69"></div>
                    </div>

                </div>
            </div>

            <div class="upage vertical-col left hidden view" id="user_page">
                <div class="pages">
                    ?&gt;
                    <div class="page navbar-fixed">
                        <div class="navbar inner-element uib_w_20 bg_header" data-uib="framework7/header" data-ver="0">
                            <div class="navbar-inner">
                                <div class="left">
                                    <div class="widget-container content-area horiz-area wrapping-col"><a class="button widget uib_w_21 d-margins button-round button-fill color-black" data-uib="framework7/button" data-ver="0" id="btn_back_user"><span>Back</span></a>
                                    </div>
                                </div>
                                <div class="center labeltext"></div>
                                <div class="right">
                                    <div class="widget-container content-area horiz-area wrapping-col"></div>
                                </div>
                            </div>
                        </div>
                        <div></div>

                        <div class="page-content upage-content content-area" id="page_75_88">
                            <div class="widget uib_w_23 d-margins" data-uib="framework7/list_block" data-ver="0">
                                <div class="list-block">
                                    <ul>
                                        <li class="widget uib_w_25" data-uib="framework7/input" data-ver="0">
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div id="nama" class="item-title label"> Account :<?php echo $_SESSION['username']; ?></div>

                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget uib_w_25" data-uib="framework7/input" data-ver="0">
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div id="username" class="item-title label">Nama:<?php echo $_SESSION['nama']; ?></div>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a class="widget uib_w_28 button button-round color-blue" data-uib="framework7/button" data-ver="0" id="btn_logout"><span>Sign Out</span></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script type="application/javascript" src="lib/jquery.min.js"></script>

        // Script Google MAPS
        <div id="map"></div>

        <script>
            var map;
            var jakarta = {lat:-6.278717, lng:106.7904955};
            
            function addYourLocationButton(map, marker) 
            {
                var controlDiv = document.createElement('div');
            
                var firstChild = document.createElement('button');
                firstChild.style.backgroundColor = '#fff';
                firstChild.style.border = 'none';
                firstChild.style.outline = 'none';
                firstChild.style.width = '28px';
                firstChild.style.height = '28px';
                firstChild.style.borderRadius = '2px';
                firstChild.style.boxShadow = '0 1px 4px rgba(0,0,0,0.3)';
                firstChild.style.cursor = 'pointer';
                firstChild.style.marginRight = '10px';
                firstChild.style.padding = '0px';
                firstChild.title = 'Your Location';
                controlDiv.appendChild(firstChild);
            
                var secondChild = document.createElement('div');
                secondChild.style.margin = '5px';
                secondChild.style.width = '18px';
                secondChild.style.height = '18px';
                secondChild.style.backgroundImage = 'url(https://maps.gstatic.com/tactile/mylocation/mylocation-sprite-1x.png)';
                secondChild.style.backgroundSize = '180px 18px';
                secondChild.style.backgroundPosition = '0px 0px';
                secondChild.style.backgroundRepeat = 'no-repeat';
                secondChild.id = 'you_location_img';
                firstChild.appendChild(secondChild);
            
                google.maps.event.addListener(map, 'dragend', function() {
                    $('#you_location_img').css('background-position', '0px 0px');
                });
            
                firstChild.addEventListener('click', function() {
                    var imgX = '0';
                    var animationInterval = setInterval(function(){
                        if(imgX == '-18') imgX = '0';
                        else imgX = '-18';
                        $('#you_location_img').css('background-position', imgX+'px 0px');
                    }, 500);
                    if(navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function(position) {
                            var pos = {
                                          lat: position.coords.latitude,
                                          lng: position.coords.longitude
                                      };
                            marker.setPosition(pos);
                            map.setCenter(pos);
                            clearInterval(animationInterval);
                            $('#you_location_img').css('background-position', '-144px 0px');
                        });
                    }
                    else{
                        clearInterval(animationInterval);
                        $('#you_location_img').css('background-position', '0px 0px');
                    }
                });
            
                controlDiv.index = 1;
                map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(controlDiv);
            }
            
            function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 10,
                    center: jakarta,
                    mapTypeControl: true,
                    mapTypeControlOptions:{
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                    position: google.maps.ControlPosition.LEFT_BOTTOM
                  },
                            
                });
                 var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">B 6866 TPZ</h1>'+
                    '<div id="bodyContent">'+
                    '<p>Mesin: ON/OFF</p>'+
                    '<p>Lokasi saat ini</p>'+
                    '<p>Terakhir digunakan</p>'+
                    '</div>'+
                    '</div>';
        
                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                    maxWidth: 200
                });
                
                var icon = {
                    url :"https://preview.ibb.co/c81TKw/icon_mobil.png",
                    scaledSize: new google.maps.Size(70,50), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(0, 0), // anchor
                   
                    };
        
                var marker = new google.maps.Marker({
                    map: map,
                    animation: google.maps.Animation.DROP,
                    position: jakarta,
                    icon: icon 
                }); 
                
                
                    marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
                
                    addYourLocationButton(map, marker);
                
                var trafficLayer = new google.maps.TrafficLayer();
                    trafficLayer.setMap(map);
            }
            
            $(document).ready(function(e) {
                
                });
        </script>
        <script>
            function btn_refresh()
                        {
                            location.reload();
                        }
        </script>

        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAleexaLpRX4SDTX0to8EDvviB317r1140&amp;callback=initMap">
        </script>

        <script type="application/javascript" src="framework7/my-app.js"></script>
    </body>

</html>