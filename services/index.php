<?php require_once('../init/initialization.php'); ?>
<!DOCTYPE html>
<html lang="en" xml:lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title>MOI Qatar - Visa Inquiry &amp; Printing</title>


    <link href="<?php echo public_url(); ?>storage/logo/favicon.ico" rel="shortcut icon" type="image/x-icon" />


    <script src="<?php echo public_url(); ?>js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo public_url(); ?>js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo public_url(); ?>js/sticky-nav-min.js" type="text/javascript"></script>
    <script src="<?php echo public_url(); ?>js/slick.min.js" type="text/javascript"></script>
    <script src="<?php echo public_url(); ?>js/global.js" type="text/javascript"></script>
    <script src="<?php echo public_url(); ?>js/responsive.js" type="text/javascript"></script>
    <script src="<?php echo public_url(); ?>js/navstates.js" type="text/javascript"></script>
    <script src="<?php echo public_url(); ?>js/slide-photo.js" type="text/javascript"></script>

    <script src="<?php echo public_url(); ?>js/smartcardAuth.js" type="text/javascript"></script>
    <!-- <script src="/MOIInternetTheme/js/fb-sdk.js" type="text/javascript"></script> -->
    <!-- <script src="/MOIInternetTheme/js/all.js" type="text/javascript"></script> -->

    <script src="<?php echo public_url(); ?>js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo public_url(); ?>js/additional-methods.min.js" type="text/javascript"></script>

    <!-- English specific css -->
    <link href="<?php echo public_url(); ?>css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/custom.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/style.default.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/thumbslider.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/thumbscroll.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/slick-theme.css" rel="stylesheet" />

    <!-- English specific js -->
    <script src="<?php echo public_url(); ?>js/slick-slides.js" type="text/javascript"> </script>
    <script src="<?php echo public_url(); ?>js/jquery.flexisel.js" type="text/javascript"></script>
    <script src="<?php echo public_url(); ?>js/thumbslider.js" type="text/javascript"></script>
    <script src="<?php echo public_url(); ?>js/photoGallery.js" type="text/javascript"></script>

    <!-- English specific css -->
    <link href="<?php echo public_url(); ?>css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/custom.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/style.default.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/thumbslider.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/thumbscroll.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/slick-theme.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/idangerous.swiper.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/fonts.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/slick.css" rel="stylesheet" />

    <script src="<?php echo public_url(); ?>js/placeholder.js"></script>
    <script src="<?php echo public_url(); ?>js/datepicker/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" title="Style" href="<?php echo public_url(); ?>css/datepicker.css" /><!-- rendering is delegated to the specified href for each locale -->
</head>

<body>
    <div class="div-skip">
        <a href="#layoutContainers" class="skip-element-invisible" tabindex="1" title="Skip navigation links">Skip navigation links</a>
    </div>

    <!-- <div class="wpthemeFrame"> -->
    <header role="banner">
        <div class="header-bg">
            <!-- Displays Header HTML -->
            <div class="container fluiddiv">
                <div class="header">
                    <a tabindex="1" class="navbar-brand" href="">
                        <img alt="Ministry of Interior Home" title="Ministry of Interior" src="<?php echo public_url(); ?>storage/logo/logo_en.png" />
                        <span class="noshow">Logo</span>
                    </a>

                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 pull-right padnone topdiv">
                        <div class="toprightDiv">

                            <ul class="nav yamm topNav01">

                                <!-- "Welcome User" after logged header menu -->
                                <!--Start Contact Us header menu -->
                                <li class="dropdown login">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span class="topTxtlink">Contact Us</span> <span class="contacticon">
                                            <img alt='Contact Us' src="<?php echo public_url(); ?>storage/images/msg.png"></span>
                                        <span class="arrowicon"> <img src="<?php echo public_url(); ?>storage.images/down-arrow.png" alt="" /></span> </a>

                                    <ul class="dropdown-menu contactbox">
                                        <li class="topuparrow"></li>
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <h2 style="color:#fff;font-size: 14px;padding: 0 10px;">Contact Us</h2>
                                                </div>
                                                <div class="row">
                                                    <ul class="col-md-6 col-sm-6 col-xs-12 list-unstyled contlogline">
                                                        <li tabindex="0">Phone: 2367111</li>
                                                        <li tabindex="0">Email:info@moi.gov.qa</li>
                                                        <li tabindex="0">Fax: 44323339</li>
                                                        <li class="contactlink"><a href="/wps/portal/MOIInternet/contactus" aria-label="View more contact details">More</a></li>
                                                    </ul>
                                                    <ul class="col-md-6 col-sm-6 col-xs-12 list-unstyled">
                                                        <li>
                                                            <div class="contactpost">
                                                                <a href=""> <em class="fa fa-envelope fa-large"></em> Send us an Email
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contactpost">
                                                                <a href="#"> <em class="fa fa-comments fa-large"></em> Post a Comment</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contactpost">
                                                                <a href="#"> <em class="fa fa-users fa-large"></em> Public Opinion Survey Center</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="vdevider">&nbsp;</li>

                                <!-- Start of Site Visits   -->

                                <li>
                                    <div class="sitevisit">
                                        <span><img src="<?php echo public_url(); ?>storage/images/graph.png" alt="" /></span>
                                        Site Visits
                                    </div>
                                    <div class="pluginCountButton pluginCountNum">
                                        <div class="tooltipVisit">
                                            <span id="u_0_2"> <span id="siteVisitSpan" class="pluginCountTextDisconnected">0</span>
                                                <span id="siteVisitToolTip" class="tooltiptext" style="visibility: hidden;">0</span>
                                            </span>
                                        </div>
                                        <div class="pluginCountButtonNub">
                                            <s></s><em></em>
                                        </div>
                                    </div>
                                </li>
                                <!--End of Site Visits  -->


                                <li class="vdevider">&nbsp;</li>

                                <li>
                                    <div id="changeFont">
                                        <a class="decreaseFont" href="#" title="Text size smaller">A-</a> <a class="increaseFont" href="#" title="Text size bigger">A+</a>
                                    </div>
                                </li>

                                <li class="vdevider">&nbsp;</li>
                                <li class="remover">

                                    <div class="wpthemeControlBody wpthemeOverflowAuto wpthemeClear">
                                        <!-- lm:control dynamic spot injects markup of layout control -->
                                        <!-- asa.overlay marks the node that the AsaOverlayWidget will be placed in -->
                                        <div style="position:relative; z-index: 1;">
                                            <div class="analytics.overlay"></div>
                                        </div>
                                        <div class="portal-search">
                                            <form name="searchQueryForm" method="get" action="dl5/d5/L2dJQSEvUUt3QS80SmlFL1o2X0lBTUkwMjQwTE9LUDgwUUE4M1RSR08xOEs1/" onsubmit="this.search_query.value=addFilter0(this.query.value)">
                                                <input type="hidden" value="Z6_N90A19O0KG80B0A1F3NMPT10D2" name="sourceContentNode">
                                                <!-- 			<input type="hidden" value="internet" name="searchCollection" id="searchCollection" > -->

                                                <label for="searchInput1" class="hidden">Search</label>
                                                <input class="wpthemeSearchText" type="text" name="query" placeholder='Search' title='Enter the search keyword'>
                                                <input type="hidden" name="search_query">
                                                <button type="submit" class="btn-img">
                                                    <img src="<?php echo public_url(); ?>storage/images/search-icon.png" alt='Search'>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="wpthemeClear"></div>
                                    </div>






                                </li>
                                <li>

                                    <div class="socialicons-header">
                                        <a target="_blank" aria-label='Facebook' title='Facebook' href="http://www.facebook.com/moigovqatar.en"><em class="fa fa-facebook fa-15x fa-blue"></em><span class="noshow">Facebook</span></a>
                                        <a target="_blank" aria-label='Twitter' title='Twitter' href="http://twitter.com/moi_qataren"><em class="fa fa-twitter fa-15x fa-blue"></em><span class="noshow">Twitter</span></a>
                                        <a target="_blank" aria-label='Youtube' title='Youtube' href="http://www.youtube.com/user/moigovqa"><em class="fa fa-youtube fa-15x fa-blue"></em><span class="noshow">Youtube</span></a>
                                        <a target="_blank" aria-label='Instagram' title='Instagram' href="http://instagram.com/moi_qatar"><em class="fa fa-instagram fa-15x fa-blue"></em><span class="noshow">Instagram</span></a>
                                        <a aria-label='Snapchat : moi.qatar' title='Snapchat : moi.qatar' href="#"><em class="fa fa-snapchat fa-15x fa-blue"></em><span class="noshow">Snapchat : moi.qatar</span></a>
                                    </div>

                                </li>
                                <li class="vdevider remover">&nbsp;</li>

                                <li class="arbic" lang="ar" xml:lang="ar" dir="rtl"><a tabindex="1" class="lang-button" href='/wps/portal/MOIInternet/services/inquiries/visaservices/enquiryandprinting/!ut/p/a1/jc_LDoIwEAXQT-odakhZFhAobwQVuzGsTBNFF8bvtxJjdCHa1TQ5dx5Ms57pcbiZw3A153E4Pv7a3ZceJHkVsljAt2XEy6LuCKFjwe4diLoUkEm0WamiJnj4L6-kWCQEykQCm2-7tPOrwAHoV37L9CepIAhymSlquORxTE-QJqECb22P3OV2RF4ETtAALzB3wwTmlpwAvjwJdjmtexhl7sq3vfk!/dl5/d5/L0lDUmlTUSEhL3dHa0FKRnNBLzRKVXBDQSEhL2FyX1FB/'>العربية</a></li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <h4 id="LoginModalLabel" class="modal-title">Login</h4>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="ptlSearchErrorModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="false">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                                <h4 id="searchModalLabel" class="modal-title">Search</h4>
                            </div>
                            <div class="modal-body">
                                <p class="pad06" id="searchErrorMsg"></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Loader block -->
        <div class="loader" style="display: none;">
            <img src="<?php echo public_url(); ?>storage/mages/loader.gif" alt="loading">
        </div>

        <!-- Displays Navigation -->

        <div class="container-fluid stickyHeader header-bg">
            <div class="buttonbg">
                <div class="container stickdiv padnone">
                    <div class="navbar navbar-default yamm">

                        <!-- Start Mobile Nav support  -->
                        <div class="row-fluid navbar-header">
                            <div class="span12 dispFlex">
                                <table style="width:100%">
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;vertical-align:top"><button data-target=".navbar-collapse-2" data-toggle="collapse" class="navbar-toggle margin00" id="menuBtn"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="noshow">menu</span></button></td>
                                            <td style="width:90%;vertical-align:top">
                                                <div class="mobilesearchbox serBoxExt">

                                                    <form name="searchQueryForm" id="mobileSearchForm" method="get" action="dl5/d5/L2dJQSEvUUt3QS80SmlFL1o2X0lBODRIMTAxS0dGM0MwQVNKNFY1NTgxMDg0/">
                                                        <input type="hidden" value="Z6_N90A19O0KG80B0A1F3NMPT10D2" name="sourceContentNode">
                                                        <label for="searchInput" class="hidden">Search</label>
                                                        <input class="mobsearchinput pad13" type="text" id="searchInput" name="query" placeholder='Search' title='Enter the search keyword'>
                                                        <span>
                                                            <button type="submit" class="btn-img" style="border: none; background: none; padding: 0px;">
                                                                <img src="<?php echo public_url(); ?>storage/images/mob-search-icon.gif" alt="Search">
                                                            </button>
                                                        </span>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--End of mobile nav  -->
                        <div class="collapse navbar-collapse navbar-collapse-2 mobileMenu">
                            <ul class="nav navbar-nav" role="menubar">
                                <!-- First level Menu display start-->
                                <li class="dropdown" role="menuitem">

                                    <a href="/wps/portal/MOIInternet/MOIHome">
                                        Home
                                    </a>

                                </li>
                                <!-- First level Menu display start-->
                                <li class="dropdown" role="menuitem" aria-haspopup="true">

                                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                                        MOI Services<strong class="caret"></strong>
                                    </a>
                                    <!-- Sub Menu display -->
                                    <ul class="dropdown-menu navbar-right dd05">
                                        <!-- TBD css -->
                                        <li>
                                            <div class="yamm-content">
                                                <!-- Second level Menu display-->
                                                <ul class="list-unstyled" role="menu">

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/services/inquiries">Inquiries</a></li>

                                                    <li role="menuitem">
                                                        <a target="_blank" href="#">
                                                            E-Services
                                                        </a>
                                                    </li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/services/otherservices">Department Services</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/deptformsindex">MOI Forms</a></li>

                                                </ul>


                                            </div>
                                        </li>
                                    </ul>

                                </li>
                                <!-- First level Menu display start-->
                                <li class="dropdown" role="menuitem">

                                    <a href="/wps/portal/MOIInternet/departmentcommittees">Departments &amp; Committees</a>

                                </li>
                                <!-- First level Menu display start-->
                                <li class="dropdown" role="menuitem" aria-haspopup="true">

                                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                                        Media Center<strong class="caret"></strong>
                                    </a>
                                    <!-- Sub Menu display -->
                                    <ul class="dropdown-menu navbar-right dd05">
                                        <!-- TBD css -->
                                        <li>
                                            <div class="yamm-content">
                                                <!-- Second level Menu display-->
                                                <ul class="list-unstyled" role="menu">

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/mediacenter/moinews">MOI News</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/mediacenter/publications">Publications</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/mediacenter/audio%26videogallery">Audio & Video Gallery</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/mediacenter/photogallery">Photo Gallery</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/mediacenter/events">Events</a></li>

                                                    <li role="menuitem">
                                                        <a target="_self" href="/wps/portal/MOIInternet/discussionforum">
                                                            Discussion Forum
                                                        </a>
                                                    </li>

                                                </ul>


                                            </div>
                                        </li>
                                    </ul>

                                </li>
                                <!-- First level Menu display start-->
                                <li class="dropdown" role="menuitem">

                                    <a href="#">Security Awareness</a>

                                </li>
                                <!-- First level Menu display start-->
                                <li class="dropdown" role="menuitem" aria-haspopup="true">

                                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                                        Information Center<strong class="caret"></strong>
                                    </a>
                                    <!-- Sub Menu display -->
                                    <ul class="dropdown-menu navbar-right dd05">
                                        <!-- TBD css -->
                                        <li>
                                            <div class="yamm-content">
                                                <!-- Second level Menu display-->
                                                <ul class="list-unstyled" role="menu">

                                                    <li role="menuitem"><a href="#">Useful Links</a></li>

                                                    <li role="menuitem"><a href="#">Related Websites</a></li>

                                                    <li role="menuitem">
                                                        <a target="_blank" href="#">
                                                            My Address
                                                        </a>
                                                    </li>

                                                    <li role="menuitem"><a href="#">Ministry Statistics</a></li>

                                                    <li role="menuitem">
                                                        <a target="_self" href="#">
                                                            Open Data
                                                        </a>
                                                    </li>

                                                </ul>


                                            </div>
                                        </li>
                                    </ul>

                                </li>
                                <!-- First level Menu display start-->
                                <li class="dropdown" role="menuitem" aria-haspopup="true">

                                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                                        About Ministry <strong class="caret"></strong>
                                    </a>
                                    <!-- Sub Menu display -->
                                    <ul class="dropdown-menu navbar-right dd05">
                                        <!-- TBD css -->
                                        <li>
                                            <div class="yamm-content">
                                                <!-- Second level Menu display-->
                                                <ul class="list-unstyled" role="menu">

                                                    <li role="menuitem"><a href="#">History</a></li>

                                                    <li role="menuitem"><a href="#">Functions</a></li>

                                                    <li role="menuitem">
                                                        <a target="_self" href="#">
                                                            Organization Chart
                                                        </a>
                                                    </li>

                                                    <li role="menuitem"><a href="#">Officials & Personalities</a></li>

                                                    <li role="menuitem"><a href="#">Ministry Strategy </a></li>

                                                    <li role="menuitem"><a href="#">Awards & Recognitions</a></li>

                                                    <li role="menuitem"><a href="#">Our Locations</a></li>

                                                    <li role="menuitem"><a href="#">Rules and Regulations</a></li>

                                                </ul>


                                            </div>
                                        </li>
                                    </ul>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bread Crumb Trail for MOI Internet Theme -->
        <!--Bread crumb -->
        <div class="container fluiddiv">
            <div class="containerBox">
                <ol class="breadcrumbExt">


                    <li>

                        <a href="#">Home</a>


                    </li>
                    <!-- <span class="wpthemeCrumbTrailSeparator">&gt; </span> -->

                    <li>
                        MOI Services

                    </li>
                    <!-- <span class="wpthemeCrumbTrailSeparator">&gt; </span> -->

                    <li>

                        <a href="#">Inquiries</a>


                    </li>
                    <!-- <span class="wpthemeCrumbTrailSeparator">&gt; </span> -->

                    <li>

                        <a href="#">Visa Services</a>


                    </li>
                    <!-- <span class="wpthemeCrumbTrailSeparator">&gt; </span> -->

                    <li class="active">Visa Inquiry &amp; Printing</li>

                </ol>
            </div>
        </div>
        <!-- <div class="wpthemeHeader">-->
        <!-- inserts the managed pages preview mode contributions -->
        <div class="wpthemeInner">
            <!-- <div class="wpthemeLogo wpthemeLeft">
						<span class="wpthemeAltText">MOI Intranet Portal1</span>
					</div> -->

            <!-- renders the top navigation -->
            <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_topNav"></a>-->

            <!-- displays the state of the current page -->
            <div class="wpthemeRight">
                <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_projectMenu"></a>-->
                <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_pageModeToggle"></a>-->
                <!--<a rel="dynamic-content" href="res:/MOIInternetTheme/themes/html/dynamicSpots/pageModeToggle.jsp"></a>-->
            </div>
        </div>
        <!-- </div> -->
        <!-- end header -->

        <!-- inserts the universal toolbar -->
        <!--<a rel="dynamic-content" href="dyn-cs:id:80theme_toolbar"></a>-->

        <div class="wpthemeBanner">
            <div class="wpthemeBannerInner">
                <div class="wpthemeInner">
                    <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_search"></a>-->
                    <!-- Search Inclusion 
						<a rel="dynamic-content" href="res:/MOIInternetTheme/themes/html/dynamicSpots/modules/search/search.jsp"></a>
						<a rel="dynamic-content" href="dyn-cs:id:80theme_commonActions"></a>
						<a rel="dynamic-content" href="res:/MOIInternetTheme/themes/html/dynamicSpots/commonActions.jsp"></a>
						<a rel="dynamic-content" href="dyn-cs:id:80theme_mobileNav"></a>-->
                    <div class="wpthemeClear"></div>
                </div>
            </div>
        </div>
        <!--end main banner-->

        <div class="wpthemeBanner wpthemeBannerPrimaryNavigation">
            <div class="wpthemeBannerInner">
                <div class="wpthemeInner">
                    <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_primaryNav"></a>-->
                    <!-- Primary Navigation Include 
						<a rel="dynamic-content" href="res:/MOIInternetTheme/themes/html/dynamicSpots/navigation.jsp?rootClass=wpthemePrimaryNav&startLevel=1&levelsDisplayed=3"></a>
						-->
                    <div class="wpthemeClear"></div>
                </div>
            </div>
        </div>
        <!--end primary nav banner-->

        <div class="wpthemeSecondaryBanner">

            <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_secondaryNav"></a>  -->
            <!-- start of Level 3 Navigation -->
            <!--<a rel="dynamic-content" href="res:/MOIInternetTheme/themes/html/dynamicSpots/navigation.jsp?rootClass=wpthemeSecondaryNav&startLevel=3"></a>-->
            <div class="wpthemeClear"></div>
        </div>
        <!--end secondary banner-->
    </header>



    <div class="wpthemeMainContent container" role="main" style="width:100%;padding:0px;">
        <div class="wpthemeInner">
            <!-- asa markup contributions for pages -->
            <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_asa"></a> -->



            <div class="asa.page" id="asa.page" style="display:none;">
                <span class="asa.page.id">Z6_N90A19O0KG80B0A1F3NMPT10D2</span>



            </div>

            <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_crumbTrail"></a> -->

            <div class="wpthemeClear"></div>

            <div class="wpthemeInner">
                <div id="wpthemeStatusBarContainer" class="lotusui30">

                    <noscript>
                        <div class="lotusMessage2" role="alert" wairole="alert">
                            <img class="lotusIcon lotusIconMsgError" src="<?php echo public_url(); ?>storage/images/blank.gif" alt="Error" />
                            <span class="lotusAltText">Error:</span>
                            <div class="lotusMessageBody">Javascript is disabled in this browser. This page requires Javascript. Modify your browser's settings to allow Javascript to execute. See your browser's documentation for specific instructions.</div>
                        </div>
                    </noscript>
                </div>
            </div>
        </div>

        <!-- required - do not remove -->
        <div style="display:none" id="portletState">{}</div>
        <div id="layoutContainers" class="wpthemeLayoutContainers wpthemeLayoutContainersHidden">
            <div class="wpthemeInner">
                <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_layout"></a> -->
                <!-- MOI Internet Theme Template -->
                <!-- This layout is designed w.r.t MOI-e-Services page -->
                <div class="wptheme2Col wptheme1Row">
                    <div class="container fluiddiv">
                        <div class='component-container wpthemeCol wpthemeCol4of12 ibmDndColumn wpthemeHeadlineContainer wpthemeFull id-Z7_N90A19O0KG80B0A1F3NMPT10D5' name='bottom'>
                            <div class='component-control id-Z7_N90A19O0KG80B0A1F3NMPT10D7'><span id="Z7_N90A19O0KG80B0A1F3NMPT10D7"></span>
                                <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                    <!-- marks the node the analytics tags for this portlet will be placed in -->


                                    <div class="asa.portlet" id="asa.portlet.Z7_N90A19O0KG80B0A1F3NMPT10D7" style="display:none;">
                                        <span class="asa.portlet.id">Z7_N90A19O0KG80B0A1F3NMPT10D7</span>
                                    </div>

                                    <!-- asa.overlay marks the node that the AsaOverlayWidget will be placed in -->
                                    <div style="position:relative; z-index: 1;">
                                        <div class="analytics.overlay"></div>
                                    </div>
                                    <!-- Hide the text of the title, but still provide the lm-dynamic-title container for accessing the dynamic title -->
                                    <span class="wpthemeAccess">
                                        <span class="lm-dynamic-title asa.portlet.title a11yRegionLabel"><span lang="en" dir="ltr">Web Content Viewer (JSR 286)</span></span>
                                    </span>
                                    <div class="wpthemeOverflowAuto">
                                        <!-- lm:control dynamic spot injects markup of layout control -->
                                        <style>
                                            .inner-brand.pad07 img {
                                                height: 75px;
                                                width: 70px;
                                            }
                                        </style>
                                        <div class="containerBox pad05 deptbannerdiv">
                                            <div class="innerbannerdiv">
                                                <div class="inner-brand pad07">
                                                    <img src="<?php echo public_url(); ?>storage/connect/visaQueries.png?MOD=AJPERES&amp;CACHEID=c73748e2-3c3e-4091-83b5-1d08c503b2ab" alt="Visa inquiry" />
                                                </div>
                                                <h1 class="pad08">Visa Services</h1>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="containerBox">
                            <div class="leftpanel bs-docs-sidebar affix-top column1">
                                <div class='component-container wpthemeCol wpthemeCol4of12 ibmDndColumn wpthemeHeadlineContainer wpthemeFull id-Z7_N90A19O0KG80B0A1F3NMPT10T0' name='top'>
                                    <div class='component-control id-Z7_N90A19O0KG80B0A1F3NMPT10T2'><span id="Z7_N90A19O0KG80B0A1F3NMPT10T2"></span>
                                        <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                            <!-- marks the node the analytics tags for this portlet will be placed in -->

                                            <div class="asa.portlet" id="asa.portlet.Z7_N90A19O0KG80B0A1F3NMPT10T2" style="display:none;">
                                                <span class="asa.portlet.id">Z7_N90A19O0KG80B0A1F3NMPT10T2</span>
                                            </div>

                                            <!-- asa.overlay marks the node that the AsaOverlayWidget will be placed in -->
                                            <div style="position:relative; z-index: 1;">
                                                <div class="analytics.overlay"></div>
                                            </div>
                                            <!-- Hide the text of the title, but still provide the lm-dynamic-title container for accessing the dynamic title -->
                                            <span class="wpthemeAccess">
                                                <span class="lm-dynamic-title asa.portlet.title a11yRegionLabel"><span lang="en" dir="ltr">Web Content Viewer (JSR 286)</span></span>
                                            </span>
                                            <div class="wpthemeOverflowAuto">
                                                <!-- lm:control dynamic spot injects markup of layout control -->
                                                <style>
                                                    .serviceImage img {
                                                        width: 42px;
                                                        height: 42px;
                                                    }
                                                </style>
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <a class="menutoggle menu-collapsed"><i class="fa fa-bars"></i></a>
                                                    </div>
                                                    <label for="servicesearch" class="hidden">Search here</label>
                                                    <input id="servicesearch" title="Search here..." placeholder="Search here..." class="form-control search" type="text">
                                                </div>

                                                <div class="">
                                                    <ul class="nav nav-pills nav-stacked nav-bracket service-list">
                                                        <li class="active">
                                                            <a title="Traffic Inquiries" class="serviceImage" href="/wps/portal/MOIInternet/services/inquiries/trafficservices">
                                                                <img alt="Traffic Inquiries" src="<?php echo public_url(); ?>storage/connect/trafficViolations.png?MOD=AJPERES&amp;CACHEID=6719b619-366d-4c37-88ca-e88e83ded7eb">
                                                                <span>Traffic Inquiries</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a title="Visa Services" class="serviceImage" href="#">
                                                                <img alt="Visa inquiry" src="<?php echo public_url(); ?>storage/connect/visaQueries.png?MOD=AJPERES&amp;CACHEID=c73748e2-3c3e-4091-83b5-1d08c503b2ab">
                                                                <span>Visa Services</span>
                                                            </a>
                                                        </li>



                                                        <li>
                                                            <a title="Exit &amp; Entry Permits" class="serviceImage" href="/wps/portal/MOIInternet/services/inquiries/exitservices">
                                                                <img alt="Exit-Entry Services" src="<?php echo public_url(); ?>storage/connect/exitPermit.png?MOD=AJPERES&amp;CACHEID=76f36c1e-e240-4988-9377-ec9ba61c0674">
                                                                <span>Exit &amp; Entry Permits</span>
                                                            </a>
                                                        </li>



                                                        <li>
                                                            <a title="Residency Permits inquiry" class="serviceImage" href="#">
                                                                <img height="88" alt="Residency Permits inquiry" width="80" src="<?php echo public_url(); ?>storage/connect/rpprint.png?MOD=AJPERES&amp;CACHEID=3a5c1f6d-7fd4-400c-9643-308108b86457">
                                                                <span>Residency Permits inquiry</span>
                                                            </a>
                                                        </li>



                                                        <li>
                                                            <a title="Other Inquiries" class="serviceImage" href="#">
                                                                <img height="88" alt="Other Inquiries" width="80" src="<?php echo public_url(); ?>storage/connect/icon_queries.png?MOD=AJPERES&amp;CACHEID=0d0e3e0c-3d89-4775-afe1-70b36ae07ec3">
                                                                <span>Other Inquiries</span>
                                                            </a>
                                                        </li>



                                                        <li>
                                                            <a title="Metrash" class="serviceImage" href="#">
                                                                <img height="88" alt="Metrash" width="80" src="<?php echo public_url(); ?>storage/connect/metrash1.png?MOD=AJPERES&amp;CACHEID=c515deba-2bb5-4efe-bc05-ab3e99463ced">
                                                                <span>Metrash</span>
                                                            </a>
                                                        </li>



                                                        <li>
                                                            <a title="QPost Services" class="serviceImage" href="#">
                                                                <img height="88" alt="QPost Services" width="80" src="<?php echo public_url(); ?>storage/connect/qPostService.png?MOD=AJPERES&amp;CACHEID=e8b6b793-781b-461c-acbd-0f9fbde9e32c">
                                                                <span>QPost Services</span>
                                                            </a>
                                                        </li>



                                                        <li>
                                                            <a title="PCC Inquiry" class="serviceImage" href="#">
                                                                <img height="88" alt="PCC Inquiry" width="80" src="<?php echo public_url(); ?>storage/connect/police-clearance.png?MOD=AJPERES&amp;CACHEID=91466086-d956-43f5-962b-e8a1f665ae99">
                                                                <span>PCC Inquiry</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>







                                                <script type="text/javascript">
                                                    $(document).ready(function() {
                                                        $('#servicesearch').keyup(function() {
                                                            var valThis = $(this).val().toLowerCase();
                                                            if (valThis == "") {
                                                                $('.service-list > li').show();
                                                            } else {
                                                                $('.service-list > li').each(function() {
                                                                    var text = $(this).text().toLowerCase();
                                                                    (text.indexOf(valThis) >= 0) ? $(this).show(): $(this).hide();
                                                                });
                                                            };
                                                        });
                                                        $('.serviceImage img').addClass('sIcon menu-icon');

                                                        if ($(window).width() < 768 || sessionStorage.getItem('servicesCollapsed')) {
                                                            $('body').addClass('leftpanel-collapsed');
                                                        }
                                                        $(window).resize(function() {
                                                            if ($(window).width() < 768) {
                                                                $('body').addClass('leftpanel-collapsed');
                                                            } else {
                                                                $('body').removeClass('leftpanel-collapsed');
                                                            }
                                                        });

                                                        $('.menutoggle').click(function() {
                                                            var body = $('body');
                                                            var bodypos = body.css('position');

                                                            if (bodypos != 'relative') {
                                                                if (!body.hasClass('leftpanel-collapsed')) {
                                                                    body.addClass('leftpanel-collapsed');
                                                                    sessionStorage.setItem('servicesCollapsed', true)
                                                                } else {
                                                                    body.removeClass('leftpanel-collapsed');
                                                                    sessionStorage.removeItem('servicesCollapsed');
                                                                    $('.nav-bracket li.active ul').css({
                                                                        display: 'block'
                                                                    });
                                                                }
                                                            }
                                                        });
                                                    });
                                                </script>
                                                <style>
                                                    @media (max-width: 768px) {
                                                        .menutoggle {
                                                            pointer-events: none;
                                                            cursor: default;
                                                            display: none;
                                                        }

                                                        #servicesearch {
                                                            display: none;
                                                        }
                                                    }

                                                    .containerBox {
                                                        background-color: #fff;
                                                    }

                                                    .nav-bracket>li {
                                                        background: #fff;
                                                        background-color: #fff;
                                                        color: #666;
                                                    }


                                                    .service-list>li.active>a {
                                                        background-color: #efefef;
                                                        background: #efefef;
                                                        color: #666;
                                                    }
                                                </style>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="mainpanel column1">
                                <div class='component-container wpthemeCol wpthemeLeft wpthemeNarrow wpthemeCol4of12 ibmDndColumn wpthemePrimaryContainer id-Z7_N90A19O0KG80B0A1F3NMPT10T6' name='left'>
                                    <div class='component-control id-Z7_N90A19O0KG80B0A1F3NMPT10T7'><span id="Z7_N90A19O0KG80B0A1F3NMPT10T7"></span>
                                        <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                            <!-- marks the node the analytics tags for this portlet will be placed in -->


                                            <div class="asa.portlet" id="asa.portlet.Z7_N90A19O0KG80B0A1F3NMPT10T7" style="display:none;">
                                                <span class="asa.portlet.id">Z7_N90A19O0KG80B0A1F3NMPT10T7</span>



                                            </div>

                                            <!-- asa.overlay marks the node that the AsaOverlayWidget will be placed in -->
                                            <div style="position:relative; z-index: 1;">
                                                <div class="analytics.overlay"></div>
                                            </div>
                                            <!-- Hide the text of the title, but still provide the lm-dynamic-title container for accessing the dynamic title -->
                                            <span class="wpthemeAccess">
                                                <span class="lm-dynamic-title asa.portlet.title a11yRegionLabel">MOI Visa Enquiry Portlet</span>
                                            </span>
                                            <div class="wpthemeOverflowAuto">
                                                <!-- lm:control dynamic spot injects markup of layout control -->










                                                <style>
                                                    button:disabled,
                                                    button[disabled] {
                                                        opacity: 0.4;
                                                        cursor: default;
                                                        pointer-events: none;
                                                    }
                                                </style>







                                                <link rel=stylesheet type=text/css href="/.moi_portal_utility/enquiry_services/css/services.css">

                                                <link rel=stylesheet type=text/css href="/.moi_portal_utility/enquiry_services/css/en-services.css">




                                                <script>
                                                    $(document).ready(function() {
                                                        var formId = 'frmns_Z7_N90A19O0KG80B0A1F3NMPT10T7_'
                                                        $('#' + formId + ' .numeric').on('keyup blur', function() {
                                                            var conv = this.value.replace(/[^0-9]/g, '');
                                                            if (this.value != conv) {
                                                                this.value = conv;
                                                            }
                                                        });

                                                        $('#' + formId + ' .alphanumeric').on('keyup blur', function() {
                                                            var conv = this.value.replace(/[^A-Za-z.\d\s]/g, '');
                                                            if (this.value != conv) {
                                                                this.value = conv;
                                                            }
                                                        });

                                                        $('#' + formId + ' .alphanumericStrict').on('keyup blur', function() {
                                                            var conv = this.value.replace(/[^a-z0-9]/gi, '');
                                                            if (this.value != conv) {
                                                                this.value = conv;
                                                            }
                                                        });
                                                    });
                                                </script>
                                                <div class="tab-pane active eservices" id="servicesPanens_Z7_N90A19O0KG80B0A1F3NMPT10T7_">
                                                    <div class="contentpanelForm text-left">
                                                        <div class="panel panel-primary" style="margin: auto;">


                                                            <div class="panel-heading">
                                                                <h2 class="panel-title">Visa Inquiry & Printing </h2>
                                                            </div>

                                                            <form method="Post" name="VisaEnquiryForm" id="frmns_Z7_N90A19O0KG80B0A1F3NMPT10T7_">
                                                                <div class="panel-body">

                                                                    <fieldset>
                                                                        <legend class="hidden">Search by Visa Number or Passport Number</legend>
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-5  radio-selection">
                                                                                <div class="form-group form-inline">
                                                                                    <INPUT type="radio" checked="checked" onclick="showHideItemsEnquiryNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();" onkeypress="showHideItemsEnquiryNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();" name="searchBy" id="radioByVisaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_" value="radioByVisaNo" data-toggle="radio">
                                                                                    <label class="radio radio-labelEn " id="VsaNolabel" for="radioByVisaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_">Visa Number </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-7  ">
                                                                                <label class="sr-only" for="visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_">Search by Visa Number</label>
                                                                                <input type="text" name="visaNo" maxlength="12" id="visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_" class="form-control input-xs enText numeric  " value="" required autocomplete="off" title="Visa Number  ">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-5  radio-selection">
                                                                                <div class="form-group form-inline">
                                                                                    <INPUT type="radio" onclick="showHideItemsEnquiryNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();" onkeypress="showHideItemsEnquiryNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();" name="searchBy" id="radioByPaspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_" value="radioByPaspNo" data-toggle="radio">
                                                                                    <label class="radio radio-labelEn " id="passportlabel" for="radioByPaspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_"> Passport Number </label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-xs-12 col-sm-7  ">
                                                                                <label class="sr-only" for="PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_">Search by Passport Number</label>
                                                                                <input type="text" name="passpNo" size="28" maxlength="20" id="PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_" class="form-control input-xs enText alphanumericStrict  disabled-text  " value="" disabled="disabled" title="Passport Number ">
                                                                            </div>

                                                                        </div>
                                                                    </fieldset>

                                                                    <div class="row">
                                                                        <div class="col-xs-12  col-sm-5   ">
                                                                            <label class="box-title" for="Nationalityns_Z7_N90A19O0KG80B0A1F3NMPT10T7_">Nationality </label>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-7 ">
                                                                            <select class="form-control" name="nationality" id="Nationalityns_Z7_N90A19O0KG80B0A1F3NMPT10T7_" title="Nationality ">
                                                                                <OPTION value="000">.............</OPTION>

                                                                                <OPTION value=101> </OPTION>


                                                                                <OPTION value=004>AFGHANISTAN </OPTION>


                                                                                <OPTION value=248>ALAND ISLANDS </OPTION>


                                                                                <OPTION value=008>ALBANIA </OPTION>


                                                                                <OPTION value=012>ALGERIA </OPTION>


                                                                                <OPTION value=016>AMIRICAN SAMOA </OPTION>


                                                                                <OPTION value=020>ANDORRA </OPTION>


                                                                                <OPTION value=024>ANGOLA </OPTION>


                                                                                <OPTION value=660>ANGUILLA </OPTION>


                                                                                <OPTION value=028>ANTIGUA AND BARBUDA </OPTION>


                                                                                <OPTION value=032>ARGENTINA </OPTION>


                                                                                <OPTION value=051>ARMENIA </OPTION>


                                                                                <OPTION value=533>ARUBA </OPTION>


                                                                                <OPTION value=036>AUSTRALIA </OPTION>


                                                                                <OPTION value=040>AUSTRIA </OPTION>


                                                                                <OPTION value=031>AZERBAIJAN </OPTION>


                                                                                <OPTION value=044>BAHAMAS </OPTION>


                                                                                <OPTION value=048>BAHRAIN </OPTION>


                                                                                <OPTION value=050>BANGLADESH </OPTION>


                                                                                <OPTION value=052>BARBADOS </OPTION>


                                                                                <OPTION value=112>BELARUS </OPTION>


                                                                                <OPTION value=056>BELGIUM </OPTION>


                                                                                <OPTION value=084>BELIZE </OPTION>


                                                                                <OPTION value=204>BENIN </OPTION>


                                                                                <OPTION value=060>BERMUDA </OPTION>


                                                                                <OPTION value=064>BHUTAN </OPTION>


                                                                                <OPTION value=068>BOLIVIA </OPTION>


                                                                                <OPTION value=544>BOSNIA & HERZEGOVINA</OPTION>


                                                                                <OPTION value=072>BOTSWANA </OPTION>


                                                                                <OPTION value=074>BOUVET ISLAND </OPTION>


                                                                                <OPTION value=076>BRAZIL </OPTION>


                                                                                <OPTION value=086>BRITISH INDIAN OCEAN</OPTION>


                                                                                <OPTION value=092>BRITISH VIRGIN ISLND</OPTION>


                                                                                <OPTION value=096>BRUNEI DARUSSALAM </OPTION>


                                                                                <OPTION value=100>BULGARIA </OPTION>


                                                                                <OPTION value=854>BURKINA FASO </OPTION>


                                                                                <OPTION value=108>BURUNDI </OPTION>


                                                                                <OPTION value=178>Congo </OPTION>


                                                                                <OPTION value=116>CAMBODIA </OPTION>


                                                                                <OPTION value=120>CAMEROON </OPTION>


                                                                                <OPTION value=124>CANADA </OPTION>


                                                                                <OPTION value=132>CAPE VERDE </OPTION>


                                                                                <OPTION value=136>CAYMEN ISLANDS </OPTION>


                                                                                <OPTION value=140>CENTRAL AFRICAN </OPTION>


                                                                                <OPTION value=148>CHAD </OPTION>


                                                                                <OPTION value=830>CHANNEL IALSND </OPTION>


                                                                                <OPTION value=152>CHILE </OPTION>


                                                                                <OPTION value=156>CHINA </OPTION>


                                                                                <OPTION value=162>CHRISIMAS ISLAND </OPTION>


                                                                                <OPTION value=166>COCOS KEELING ISLAND</OPTION>


                                                                                <OPTION value=170>COLOMBIA </OPTION>


                                                                                <OPTION value=174>COMOROS </OPTION>


                                                                                <OPTION value=184>COOK ISLAND </OPTION>


                                                                                <OPTION value=188>COSTA RICA </OPTION>


                                                                                <OPTION value=384>COTE DIVOIRE </OPTION>


                                                                                <OPTION value=191>CROATIA </OPTION>


                                                                                <OPTION value=192>CUBA </OPTION>


                                                                                <OPTION value=196>CYPRUS </OPTION>


                                                                                <OPTION value=200>CZECHO </OPTION>


                                                                                <OPTION value=180>Democratic congo </OPTION>


                                                                                <OPTION value=208>DENMARK </OPTION>


                                                                                <OPTION value=262>DJIBOUTI </OPTION>


                                                                                <OPTION value=212>DOMINICA </OPTION>


                                                                                <OPTION value=214>DOMINICAN REPUBLIC </OPTION>


                                                                                <OPTION value=218>ECUADOR </OPTION>


                                                                                <OPTION value=818>EGYPT </OPTION>


                                                                                <OPTION value=222>EL SALVADOR </OPTION>


                                                                                <OPTION value=226>EQUATORIAL GUINEA </OPTION>


                                                                                <OPTION value=080>ERITREA </OPTION>


                                                                                <OPTION value=233>ESTONIA </OPTION>


                                                                                <OPTION value=230>ETHIOPIA </OPTION>


                                                                                <OPTION value=234>FAEROE ISLANDS </OPTION>


                                                                                <OPTION value=238>FALKLAND ISLANDS </OPTION>


                                                                                <OPTION value=242>FIJI </OPTION>


                                                                                <OPTION value=246>FINLAND </OPTION>


                                                                                <OPTION value=250>FRANCE </OPTION>


                                                                                <OPTION value=254>FRENCH GUIANA </OPTION>


                                                                                <OPTION value=258>FRENCH POLYNESIA </OPTION>


                                                                                <OPTION value=266>GABON </OPTION>


                                                                                <OPTION value=270>GAMBIA </OPTION>


                                                                                <OPTION value=268>GEORGIA </OPTION>


                                                                                <OPTION value=280>GERMANY </OPTION>


                                                                                <OPTION value=288>GHANA </OPTION>


                                                                                <OPTION value=292>GIBRLTAR </OPTION>


                                                                                <OPTION value=300>GREECE </OPTION>


                                                                                <OPTION value=304>GREENLAND </OPTION>


                                                                                <OPTION value=308>GRENADA </OPTION>


                                                                                <OPTION value=312>GUADELOUPE </OPTION>


                                                                                <OPTION value=983>GUADER </OPTION>


                                                                                <OPTION value=316>GUAM </OPTION>


                                                                                <OPTION value=320>GUATEMALA </OPTION>


                                                                                <OPTION value=831>GUERNESEY </OPTION>


                                                                                <OPTION value=324>GUINEA </OPTION>


                                                                                <OPTION value=624>GUINEA-BISSAU </OPTION>


                                                                                <OPTION value=328>GUYANA </OPTION>


                                                                                <OPTION value=332>HAITI </OPTION>


                                                                                <OPTION value=334>HEARD AND MC DONALD </OPTION>


                                                                                <OPTION value=340>HONDURAS </OPTION>


                                                                                <OPTION value=344>HONG KONG </OPTION>


                                                                                <OPTION value=348>HUNGARY </OPTION>


                                                                                <OPTION value=352>ICELAND </OPTION>


                                                                                <OPTION value=356>INDIA </OPTION>


                                                                                <OPTION value=360>INDONESIA </OPTION>


                                                                                <OPTION value=996>INTERPOL </OPTION>


                                                                                <OPTION value=364>IRAN </OPTION>


                                                                                <OPTION value=368>IRAQ </OPTION>


                                                                                <OPTION value=372>IRELAND </OPTION>


                                                                                <OPTION value=833>ISLE OF MAN </OPTION>


                                                                                <OPTION value=376>ISRAEL </OPTION>


                                                                                <OPTION value=380>ITALY </OPTION>


                                                                                <OPTION value=388>JAMAICA </OPTION>


                                                                                <OPTION value=392>JAPAN </OPTION>


                                                                                <OPTION value=832>JERSEY </OPTION>


                                                                                <OPTION value=396>JOHNSTON </OPTION>


                                                                                <OPTION value=400>JORDAN </OPTION>


                                                                                <OPTION value=398>KAZAKHSTAN </OPTION>


                                                                                <OPTION value=404>KENYA </OPTION>


                                                                                <OPTION value=296>KIRIBATI </OPTION>


                                                                                <OPTION value=410>KOREA ST </OPTION>


                                                                                <OPTION value=414>KUWAIT </OPTION>


                                                                                <OPTION value=417>KYRGYZSTAN </OPTION>


                                                                                <OPTION value=418>LAO </OPTION>


                                                                                <OPTION value=428>LATVIA </OPTION>


                                                                                <OPTION value=422>LEBANON </OPTION>


                                                                                <OPTION value=426>LESOTHO </OPTION>


                                                                                <OPTION value=430>LIBERIA </OPTION>


                                                                                <OPTION value=434>LIBYA </OPTION>


                                                                                <OPTION value=438>LIECHTENSTEIN </OPTION>


                                                                                <OPTION value=440>LITHUANIA </OPTION>


                                                                                <OPTION value=442>LUXEMBOURG </OPTION>


                                                                                <OPTION value=478>Mauritania </OPTION>


                                                                                <OPTION value=446>MACAO </OPTION>


                                                                                <OPTION value=450>MADAGASCAR </OPTION>


                                                                                <OPTION value=454>MALAWI </OPTION>


                                                                                <OPTION value=458>MALAYSIA </OPTION>


                                                                                <OPTION value=462>MALDIVES </OPTION>


                                                                                <OPTION value=466>MALI </OPTION>


                                                                                <OPTION value=470>MALTA </OPTION>


                                                                                <OPTION value=584>MARSHALL ISLANDS </OPTION>


                                                                                <OPTION value=474>MARTINIQUE </OPTION>


                                                                                <OPTION value=480>MAURITIUS </OPTION>


                                                                                <OPTION value=175>MAYOTTE </OPTION>


                                                                                <OPTION value=484>MEXICO </OPTION>


                                                                                <OPTION value=583>MICRONESIA </OPTION>


                                                                                <OPTION value=488>MIDWAY </OPTION>


                                                                                <OPTION value=498>MOLDOVA </OPTION>


                                                                                <OPTION value=492>MONACO </OPTION>


                                                                                <OPTION value=496>MONGOLIA </OPTION>


                                                                                <OPTION value=499>MONTENEGRO </OPTION>


                                                                                <OPTION value=500>MONTSERRAT </OPTION>


                                                                                <OPTION value=504>MOROCCO </OPTION>


                                                                                <OPTION value=508>MOZAMBIQUE </OPTION>


                                                                                <OPTION value=104>MYANMAR </OPTION>


                                                                                <OPTION value=516>NAMIBIA </OPTION>


                                                                                <OPTION value=520>NAURU </OPTION>


                                                                                <OPTION value=524>NEPAL </OPTION>


                                                                                <OPTION value=528>NETHERLANDS </OPTION>


                                                                                <OPTION value=532>NETHERLANDS ANTILLES</OPTION>


                                                                                <OPTION value=540>NEW CALEDONIA </OPTION>


                                                                                <OPTION value=554>NEW ZEALAND </OPTION>


                                                                                <OPTION value=558>NICARGUA </OPTION>


                                                                                <OPTION value=562>NIGER </OPTION>


                                                                                <OPTION value=566>NIGERIA </OPTION>


                                                                                <OPTION value=570>NIUE </OPTION>


                                                                                <OPTION value=000>NO NATIONALY </OPTION>


                                                                                <OPTION value=574>NORFOLK ISLAND </OPTION>


                                                                                <OPTION value=408>NORTH KOREA </OPTION>


                                                                                <OPTION value=997>NORTHEN CYPRUS </OPTION>


                                                                                <OPTION value=580>NORTHERN MARIANA ISL</OPTION>


                                                                                <OPTION value=578>NORWAY </OPTION>


                                                                                <OPTION value=512>OMAN </OPTION>


                                                                                <OPTION value=582>PACFC IL </OPTION>


                                                                                <OPTION value=586>PAKISTAN </OPTION>


                                                                                <OPTION value=585>PALAU </OPTION>


                                                                                <OPTION value=999>PALESTIN </OPTION>


                                                                                <OPTION value=590>PANAMA </OPTION>


                                                                                <OPTION value=598>PAPUA NG </OPTION>


                                                                                <OPTION value=600>PARAGUAY </OPTION>


                                                                                <OPTION value=604>PERU </OPTION>


                                                                                <OPTION value=608>PHILIPPINES </OPTION>


                                                                                <OPTION value=612>PITCAIRN </OPTION>


                                                                                <OPTION value=616>POLAND </OPTION>


                                                                                <OPTION value=620>PORTUGAL </OPTION>


                                                                                <OPTION value=630>PUERTO RICO </OPTION>


                                                                                <OPTION value=634>QATAR </OPTION>


                                                                                <OPTION value=807>R. north macedonia </OPTION>


                                                                                <OPTION value=901>R.O.C.TAIWAN </OPTION>


                                                                                <OPTION value=991>REPUBLIC OF KOSOVO </OPTION>


                                                                                <OPTION value=638>REUNION </OPTION>


                                                                                <OPTION value=642>ROMANIA </OPTION>


                                                                                <OPTION value=643>RUSSIA </OPTION>


                                                                                <OPTION value=810>RUSSIA </OPTION>


                                                                                <OPTION value=646>RWANDA </OPTION>


                                                                                <OPTION value=652>SAINT BARTHELEMY </OPTION>


                                                                                <OPTION value=654>SAINT HELENA </OPTION>


                                                                                <OPTION value=659>SAINT KITTS & NEVIS </OPTION>


                                                                                <OPTION value=662>SAINT LUCIA </OPTION>


                                                                                <OPTION value=663>SAIT-MARTIN </OPTION>


                                                                                <OPTION value=882>SAMOA </OPTION>


                                                                                <OPTION value=674>SAN MARINO </OPTION>


                                                                                <OPTION value=678>SAO T&P </OPTION>


                                                                                <OPTION value=682>SAUDI ARABIA </OPTION>


                                                                                <OPTION value=686>SENEGAL </OPTION>


                                                                                <OPTION value=688>SERBIA </OPTION>


                                                                                <OPTION value=891>SERBIA &MONTENEGRO </OPTION>


                                                                                <OPTION value=690>SEYCHELLES </OPTION>


                                                                                <OPTION value=694>SIERRA LEONE </OPTION>


                                                                                <OPTION value=702>SINGAPORE </OPTION>


                                                                                <OPTION value=703>SLOVAKIA </OPTION>


                                                                                <OPTION value=705>SLOVENIA </OPTION>


                                                                                <OPTION value=090>SOLOMON ISLANDS </OPTION>


                                                                                <OPTION value=706>SOMALIA </OPTION>


                                                                                <OPTION value=710>SOUTH AFRICA </OPTION>


                                                                                <OPTION value=728>SOUTH SUDAN </OPTION>


                                                                                <OPTION value=724>SPAIN </OPTION>


                                                                                <OPTION value=144>SRILANKA </OPTION>


                                                                                <OPTION value=658>ST CHRIS </OPTION>


                                                                                <OPTION value=666>ST PIR&MQ </OPTION>


                                                                                <OPTION value=670>ST VINCT&GRDN </OPTION>


                                                                                <OPTION value=736>SUDAN </OPTION>


                                                                                <OPTION value=740>SURINAME </OPTION>


                                                                                <OPTION value=744>SVALBARD AND JAN </OPTION>


                                                                                <OPTION value=748>SWAZILAND </OPTION>


                                                                                <OPTION value=752>SWEDEN </OPTION>


                                                                                <OPTION value=756>SWITZERLAND </OPTION>


                                                                                <OPTION value=760>SYRIA </OPTION>


                                                                                <OPTION value=762>TAJIKISTAN </OPTION>


                                                                                <OPTION value=834>TANZANIA </OPTION>


                                                                                <OPTION value=764>THAILAND </OPTION>


                                                                                <OPTION value=626>TIMOR ES </OPTION>


                                                                                <OPTION value=796>TKS & CA </OPTION>


                                                                                <OPTION value=768>TOGO </OPTION>


                                                                                <OPTION value=772>TOKELAU </OPTION>


                                                                                <OPTION value=776>TONGA </OPTION>


                                                                                <OPTION value=990>TRAVEL DOCUMENT </OPTION>


                                                                                <OPTION value=780>TRINIDAD AND TOBAGO </OPTION>


                                                                                <OPTION value=788>TUNISIA </OPTION>


                                                                                <OPTION value=792>TURKEY </OPTION>


                                                                                <OPTION value=795>TURKMENIST </OPTION>


                                                                                <OPTION value=798>TUVALU </OPTION>


                                                                                <OPTION value=826>U K </OPTION>


                                                                                <OPTION value=784>U.A.E. </OPTION>


                                                                                <OPTION value=888>U.N. </OPTION>


                                                                                <OPTION value=800>UGANDA </OPTION>


                                                                                <OPTION value=804>UKRAINE </OPTION>


                                                                                <OPTION value=858>URUGUAY </OPTION>


                                                                                <OPTION value=840>USA </OPTION>


                                                                                <OPTION value=860>UZBEKISTAN </OPTION>


                                                                                <OPTION value=548>VANUATU </OPTION>


                                                                                <OPTION value=336>VATICAN </OPTION>


                                                                                <OPTION value=862>VENEZUELA </OPTION>


                                                                                <OPTION value=850>VG IS US </OPTION>


                                                                                <OPTION value=704>VIETNAM </OPTION>


                                                                                <OPTION value=872>WAKE ISL </OPTION>


                                                                                <OPTION value=876>WALS & FT </OPTION>


                                                                                <OPTION value=886>YEMEN </OPTION>


                                                                                <OPTION value=890>YUGOSLVA </OPTION>


                                                                                <OPTION value=894>ZAMBIA </OPTION>


                                                                                <OPTION value=981>ZANIBAR </OPTION>


                                                                                <OPTION value=716>ZIMBABWE </OPTION>


                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-footer">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-6 col-md-6  ptl  ">
                                                                            <!-- <INPUT type="hidden" name="fromVsAtracking" id="fromVsAtracking" value="false"> -->
                                                                            <button type="submit" id="vsaEnqBtn" class="button btnPadExt btn-block btn-md">Submit</button>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6 col-md-6  ptl  ">
                                                                            <input type="button" class="button btnPadExt btn-block btn-md" onclick="javascript:ResetInputFormVisaEnquiryns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();" value="Reset">

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="myModalns_Z7_N90A19O0KG80B0A1F3NMPT10T7_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_search" aria-describedby="searchResultns_Z7_N90A19O0KG80B0A1F3NMPT10T7_" aria-hidden="true">

                                                    <div class="modal-dialog " role="document">

                                                        <div class="modal-content">

                                                            <div class="modal-header modal-header-bg">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h2 class="modal-title" id="myModalLabel_search">Visa Number Information</h2>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div id="searchResultns_Z7_N90A19O0KG80B0A1F3NMPT10T7_" class="table-responsive">
                                                                    
                                                                </div>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="spinnerOverlayns_Z7_N90A19O0KG80B0A1F3NMPT10T7_" class="spinnerOverlay">
                                                    <div class="spinner"></div>
                                                </div>

                                                <script type="text/javascript">
                                                    $(document).ready(function() {
                                                        $('#radioByPaspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').on('toggle', function() {
                                                            showHideItemsEnquiryNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();
                                                        });

                                                        $('#radioByVisaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').on('toggle', function() {
                                                            showHideItemsEnquiryNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();
                                                        });


                                                    });


                                                    $(document).ready(function() {
                                                        $("#vsaEnqBtn").click(function(e) {
                                                            e.preventDefault();
                                                            var visa_number = $('#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val();
                                                            var passport_number = $('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val();
                                                            var nationality = $('#Nationalityns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val();
                                                            if(visa_number != "" && passport_number == ""){
                                                                find_by_visa_number(visa_number, nationality);
                                                            }
                                                        });
                                                    });

                                                    function find_by_visa_number(visa_number, nationality) {
                                                        var action = "FETCH_VISA_BY_NUMBER";
                                                        $.ajax({
                                                            url: "<?php echo base_url(); ?>api/visa/visa.php",
                                                            type: "POST",
                                                            data: {action:action, visa_number:visa_number, nationality:nationality},
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('#myModalns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').modal('show');
                                                                if(data.message == "errorVisa"){
                                                                    $('#searchResultns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').html('<div class="alert alert-danger">Sorry, Requested Visa Not Found..... Please try again</div>');
                                                                    return false;
                                                                }else{
                                                                    let loadHtml = '<table class="table table-striped">';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Visa Number</th>';
                                                                    loadHtml += '<td>'+data.visa_number+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Name</th>';
                                                                    loadHtml += '<td>'+data.fullnames+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Nationality</th>';
                                                                    loadHtml += '<td>'+data.nationality+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Passport Number</th>';
                                                                    loadHtml += '<td>'+data.passport_number+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Description Of Visa Owner</th>';
                                                                    loadHtml += '<td>'+data.description+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Gender</th>';
                                                                    loadHtml += '<td>'+data.gender+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Visa Type</th>';
                                                                    loadHtml += '<td>'+data.visa_type+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Travel Index</th>';
                                                                    loadHtml += '<td>'+data.travel_index+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Stay Duration</th>';
                                                                    loadHtml += '<td>'+data.duration_residence+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Date of Issue</th>';
                                                                    loadHtml += '<td>'+data.date_issue+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Visa Validity</th>';
                                                                    loadHtml += '<td>'+data.visa_validity+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '<tr>';
                                                                    loadHtml += '<th>Visa Status</th>';
                                                                    loadHtml += '<td>'+data.visa_status+'</td>';
                                                                    loadHtml += '</tr>';
                                                                    loadHtml += '</table>';
                                                                    $('#searchResultns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').html(loadHtml);
                                                                }
                                                            }
                                                        });
                                                    }



                                                    function ResetInputFormVisaEnquiryns_Z7_N90A19O0KG80B0A1F3NMPT10T7_() {
                                                        $('#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val("");
                                                        $('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val("");
                                                        $('#Nationalityns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val("");
                                                        $("div").remove(".alert-danger");
                                                    }

                                                    function checkVisaEnquiryeServicens_Z7_N90A19O0KG80B0A1F3NMPT10T7_(lang) {

                                                        if ($('#frmns_Z7_N90A19O0KG80B0A1F3NMPT10T7_')) {

                                                            if (document.getElementById("radioByVisaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").checked == true) {
                                                                if ($('#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_') && $.trim($('#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val()) == "" || ($('#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val().length < 12)) {
                                                                    strMessage = lang.toUpperCase() == "EN" ? "The Number of Visa character is 12 digit" : "الرجاء إدخال رقم تأشيرة مكون من 12 رقم";
                                                                    alert(strMessage);
                                                                    $('#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').focus();
                                                                    return false;
                                                                } else if (isNaN($.trim($('#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val()))) {
                                                                    strMessage = lang.toUpperCase() == "EN" ? "Only Numbers are allowed" : "الرجاء ادخال ارقام فقط";
                                                                    alert(strMessage);
                                                                    $('#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').focus();
                                                                    return false;
                                                                }
                                                            } else {
                                                                if ($('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_') && $.trim($('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val()) == "") {
                                                                    strMessage = lang.toUpperCase() == "EN" ? "Please Enter the Passport No " : "الرجاء إدخال رقم جواز السفر";
                                                                    alert(strMessage);
                                                                    $('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').focus();
                                                                    return false;
                                                                } else if (!checkAlphaNumericns_Z7_N90A19O0KG80B0A1F3NMPT10T7_($('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val())) {
                                                                    strMessage = lang.toUpperCase() == "EN" ? "Please Enter a valid the Passport No " : "الرجاء إدخال رقم جواز السفر بالشكل الصحيح";
                                                                    alert(strMessage);
                                                                    $('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').focus();
                                                                    return false;
                                                                } else if ($('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val().length < 4) {
                                                                    strMessage = lang.toUpperCase() == "EN" ? "Please Enter a valid the Passport No " : "الرجاء إدخال رقم جواز السفر بالشكل الصحيح";
                                                                    alert(strMessage);
                                                                    $('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').focus();
                                                                    return false;
                                                                }
                                                            }

                                                            if ($('#Nationalityns_Z7_N90A19O0KG80B0A1F3NMPT10T7_') && $('#Nationalityns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val() == "000") {
                                                                strMessage = lang.toUpperCase() == "EN" ? "Please choose the Nationality" : "الرجاء اختيار الجنسية ";
                                                                alert(strMessage);
                                                                $('#Nationalityns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').focus();
                                                                return false;
                                                            }

                                                            if ($('#captchaResponsens_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val() == "" || $('#captchaResponsens_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val().length != 3) {
                                                                strMessage = lang.toUpperCase() == "EN" ? "Please,Enter the Verification code correctly" : "الرجاء ادخال رمز التحقق بشكل صحيح";
                                                                alert(strMessage);
                                                                $('#captchaResponsens_Z7_N90A19O0KG80B0A1F3NMPT10T7_').focus();
                                                                return false;
                                                            }

                                                        }
                                                        return true;
                                                    }

                                                    function checkAlphaNumericns_Z7_N90A19O0KG80B0A1F3NMPT10T7_(evnt) {
                                                        var strText = evnt;
                                                        var result = true;
                                                        for (var i = 0; i < strText.length; i++) {
                                                            str = strText.charAt(i);
                                                            strCode = strText.charCodeAt(i);

                                                            if (((strCode >= 48 && strCode <= 57) || (strCode >= 65 && strCode <= 90) || (strCode >= 97 && strCode <= 122))) {

                                                                result = true;
                                                            } else {

                                                                result = false;
                                                                break;

                                                            }
                                                        }


                                                        return result;
                                                    }

                                                    function showHideItemsEnquiryNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_() {
                                                        var selected = document.getElementById("radioByPaspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").checked;

                                                        if (selected) {
                                                            hideVisaNoNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();
                                                            showPaspNoNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();
                                                        } else if (document.getElementById("radioByVisaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").checked) {
                                                            hidePaspNoNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();
                                                            showVisaNoNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();
                                                        }
                                                    }



                                                    function showVisaNoNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_() {

                                                        if ($("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_")) {
                                                            $("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").readOnly = false;
                                                            $("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").prop('disabled', false);
                                                            $("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").removeClass("disabled-text");
                                                            //$("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").focus();
                                                        }
                                                    }

                                                    function hideVisaNoNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_() {

                                                        if ($("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_")) {
                                                            $("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").readOnly = true;
                                                            $("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").prop('disabled', true);;
                                                            $("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").val("");
                                                            $("#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").addClass("disabled-text");
                                                        }
                                                    }

                                                    function showPaspNoNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_() {

                                                        if ($("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_")) {
                                                            $("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").readOnly = false;
                                                            $("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").prop('disabled', false);
                                                            $("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").removeClass("disabled-text");
                                                            //$("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").focus();
                                                        }
                                                    }

                                                    function hidePaspNoNewns_Z7_N90A19O0KG80B0A1F3NMPT10T7_() {

                                                        if ($("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_")) {
                                                            $("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").readOnly = true;
                                                            $("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").prop('disabled', true);
                                                            $("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").val("");
                                                            $("#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_").addClass("disabled-text");

                                                        }
                                                    }


                                                    // function getJsonObjns_Z7_N90A19O0KG80B0A1F3NMPT10T7_() {
                                                    //     var jsonObj = {
                                                    //         "language": $('#languagens_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val(),
                                                    //         "lang": 'en',
                                                    //         "SearchBy": $("input[name='searchBy']:checked").val(),
                                                    //         "visaNo": $('#visaNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val(),
                                                    //         "PasspNo": $('#PasspNons_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val(),
                                                    //         "Nationality": $('#Nationalityns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val(),
                                                    //         "captchaResponse": $('#captchaResponsens_Z7_N90A19O0KG80B0A1F3NMPT10T7_').val(),
                                                    //         "fromVsAtracking": $('#fromVsAtracking').val()
                                                    //     };
                                                    //     return jsonObj;
                                                    // }

                                                    // function formSubmitAjaxns_Z7_N90A19O0KG80B0A1F3NMPT10T7_() {

                                                    //     if (!checkVisaEnquiryeServicens_Z7_N90A19O0KG80B0A1F3NMPT10T7_('en')) return false;
                                                    //     $('#spinnerOverlayns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').show();
                                                    //     var jsonObj = getJsonObjns_Z7_N90A19O0KG80B0A1F3NMPT10T7_();
                                                    //     $.post('dl5/d5/L2dBISEvZ0FBIS9nQSEh/pw/Z7_N90A19O0KG80B0A1F3NMPT10T7/res/id=submitAjaxEnquiryAction/c=cacheLevelPage/=/',
                                                    //         jsonObj,
                                                    //         function(responseText) {
                                                    //             refreshCapthcans_Z7_N90A19O0KG80B0A1F3NMPT10T7_();
                                                    //             $('#spinnerOverlayns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').hide();
                                                    //             $("#searchResultns_Z7_N90A19O0KG80B0A1F3NMPT10T7_").html(responseText);
                                                    //             $('#myModalns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').modal('show');

                                                    //             //var bgcolor = $(".innerbannerdiv").css('background-color');
                                                    //             //$(".panel-primary .panel-heading").attr('style','background-color:'+ bgcolor +' !important' );
                                                    //             //$(".button").attr('style','background-color:'+ bgcolor);
                                                    //         }
                                                    //     );
                                                    // }

                                                    // function getReturnPermit(visaNum) {
                                                    //     $('#spinnerOverlayns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').show();
                                                    //     $.post('dl5/d5/L2dBISEvZ0FBIS9nQSEh/pw/Z7_N90A19O0KG80B0A1F3NMPT10T7/res/id=getReturnPermit/c=cacheLevelPage/=/',
                                                    //         null,
                                                    //         function(responseText) {
                                                    //             $('#spinnerOverlayns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').hide();
                                                    //             var vsaPdfArr;
                                                    //             try {
                                                    //                 vsaPdfArr = base64ToArrayBuffer(responseText);
                                                    //             } catch (e) {
                                                    //                 var strMessage = lang == 'en' ? "Unable to download the document" : "لا يمكن تحميل الملف";
                                                    //                 alert(strMessage);
                                                    //                 return;
                                                    //             }
                                                    //             saveByteArray(visaNum, vsaPdfArr);
                                                    //             $('#btnDownload').attr('disabled', 'disabled');
                                                    //         }).fail(function() {
                                                    //         $('#spinnerOverlayns_Z7_N90A19O0KG80B0A1F3NMPT10T7_').hide();
                                                    //         $('#btnDownload').attr('disabled', 'disabled');
                                                    //         var lang = 'en';
                                                    //         var strMessage = lang == 'en' ? "NO ATTACHMENT FOUND" : "لم يتم العثور على الملف المرفق";
                                                    //         alert(strMessage);
                                                    //     });
                                                    // }

                                                    function base64ToArrayBuffer(base64) {
                                                        var binaryString = window.atob(base64);
                                                        var binaryLen = binaryString.length;
                                                        var bytes = new Uint8Array(binaryLen);
                                                        for (var i = 0; i < binaryLen; i++) {
                                                            var ascii = binaryString.charCodeAt(i);
                                                            bytes[i] = ascii;
                                                        }
                                                        return bytes;
                                                    }

                                                    function saveByteArray(reportName, bytes) {
                                                        var blob = new Blob([bytes], {
                                                            type: "application/pdf"
                                                        });
                                                        if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                                                            window.navigator.msSaveOrOpenBlob(blob);
                                                        } else {
                                                            var link = document.createElement('a');
                                                            link.href = window.URL.createObjectURL(blob);
                                                            var fileName = reportName;
                                                            link.download = fileName;
                                                            link.click();
                                                        }
                                                    }
                                                </script>

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="sb-clear"></div>
                        </div>
                    </div>
                </div>
                <div class="wpthemeClear"></div>
            </div>
        </div>
    </div>
    <!--end main content-->

    <footer class="wpthemeFooter" role="contentinfo">


        <div class="container-fluid footerbg">
            <div class="container">
                <div class="col-md-1 col-sm-1 col-xs-12 text-center">

                    <a href="#" target="_blank" style="display: block;">
                        <img class="img-responsive" alt="Mada National Web Accreditation, Access Certified, Ministry of Interior - Qatar, June 2016 to June 2017" src="<?php echo public_url(); ?>storage/images/mac-en.png" style="display: inline;" width="52" height="52">
                    </a>

                </div>

                <div class="col-md-9 col-sm-9 col-xs-12 footerlinks padnone">
                    <div class="modal fade" id="prayerModal" tabindex="-1" role="dialog" aria-labelledby="prayerModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h4 id="prayerModalLabel" class="modal-title">مواقيت الصلاة</h4>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="emergencyModal" tabindex="-1" role="dialog" aria-labelledby="prayerModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h4 id="prayerModalLabel" class="modal-title">ارقام الطواريء</h4>
                            </div>
                        </div>
                    </div>


                    <ul>

                        <li><a href="#" data-toggle="modal" data-target="#prayerModal">Prayer Timings</a></li>

                        <li><a href="#">Accessibility</a></li>

                        <li><a target="_blank" href="#">Weather forecast</a></li>

                        <li><a href="#">Terms of Use</a></li>

                        <li><a target="_blank" href="#">MOI Web Email</a></li>

                        <li><a href="#">About Qatar</a></li>

                        <li><a href="#">Contact Us</a></li>

                        <li><a href="#" data-toggle="modal" data-target="#emergencyModal">Emergency Contacts</a></li>


                    </ul>

                    <p>© 2016 Ministry of Interior. All Rights Reserved.</p>

                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 SocialDiv padnone">

                    <h1>Follow us on</h1>
                    <div class="socialicons">
                        <a target="_blank" title='Facebook' href="http://www.facebook.com/moigovqatar.en"><em class="fa fa-facebook fa-ftx"></em><span class="noshow">Facebook</span></a>
                        <a target="_blank" title='Twitter' href="http://twitter.com/moi_qataren"><em class="fa fa-twitter fa-ftx"></em><span class="noshow">Twitter</span></a>
                        <a target="_blank" title='Youtube' href="http://www.youtube.com/user/moigovqa"><em class="fa fa-youtube fa-ftx"></em><span class="noshow">Youtube</span></a>
                        <a target="_blank" title='Instagram' href="http://instagram.com/moi_qatar"><em class="fa fa-instagram fa-ftx"></em><span class="noshow">Instagram</span></a>
                        <a title='Snapchat : moi.qatar' href="#"><em class="fa fa-snapchat fa-ftx "></em><span class="noshow">Snapchat : moi.qatar</span></a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- page footer -->

</body>

</html>