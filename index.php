<?php require_once('init/initialization.php'); ?>
<!DOCTYPE html>
<html lang="en" xml:lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <!-- rel=dynamic-content indicates an element that is replaced with the contents produced by the specified href. 
		 dyn-cs:* URIs are resolved using the WP DynamicContentSpotMappings resource environment provider. These values can
		 also be set using theme metadata if a theme is specified in the URI (e.g. @tl:oid:theme_unique_name). -->

    <!-- <link rel="dynamic-content" href="co:head">-->
    <!-- <base href="https://portal.moi.gov.qa/wps/portal/MOIInternet/MOIHome/!ut/p/a1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOK9PFw8DYyDDbzdfcyMDRyDfXydjZwDDQwMzPTD9aPASjwdLUw8DA0MvS08DCyASkK8Qpz8nY0MDAyhCgxwAEcD_YLs7EAAcMr9uQ!!/"> -->

    <title>MOI Qatar - Home</title>

    <script type="text/javascript" src="<?php echo public_url(); ?>js/ruxitagentjs_ICA2dfjqruv_10159190121190724.js" data-dtconfig="app=1fcdae72075d44d9|featureHash=ICA2dfjqruv|vcv=2|rdnt=1|uxrgce=1|bp=2|cuc=17519beq|dpvc=1|lastModification=1603294614890|dtVersion=10159190121190724|tp=500,50,0,1|uxdcw=1500|vs=2|agentUri=/MOIInternetTheme/js/ruxitagentjs_ICA2dfjqruv_10159190121190724.js|reportUrl=/MOIInternetTheme/js/rb_06714fab-00ca-4cd6-92fc-bcce1c6af14e|rid=RID_389875425|rpid=334986795|domain=moi.gov.qa"></script>
    
    <!-- <link id="com.ibm.lotus.NavStateUrl" rel="alternate" href="/wps/portal/MOIInternet/MOIHome/!ut/p/a1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOK9PFw8DYyDDbzdfcyMDRyDfXydjZwDDQwMzPTD9aPASjwdLUw8DA0MvS08DCyASkK8Qpz8nY0MDAyhCgxwAEcD_YLs7EAAcMr9uQ!!/dl5/d5/L2dJQSEvUUt3QS80SmlFL1o2X0pIREkwM1MwS0dMNjMwQVNMTUMyQ1EwMDA2/" /> -->

    <!-- <link rel="bookmark" title='Home' href='/wps/portal/MOIInternet/MOIHome/!ut/p/a1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOK9PFw8DYyDDbzdfcyMDRyDfXydjZwDDQwMzPTD9aPASjwdLUw8DA0MvS08DCyASkK8Qpz8nY0MDAyhCgxwAEcD_YLs7EAAcMr9uQ!!/dl5/d5/L2dJQSEvUUt3QS80SmlFL1o2X0pIREkwM1MwS0dMNjMwQVNMTUMyQ1EwMDA2/' hreflang="en" /> -->


    <link href="<?php echo public_url(); ?>storage/logo/favicon.ico" rel="shortcut icon" type="image/x-icon" />


    <script src="<?php echo public_url(); ?>js/jquery-1.10.1.min.js" type="text/javascript"></script>
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
    <link href="<?php echo public_url(); ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
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



    <link href="<?php echo public_url(); ?>css/idangerous.swiper.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/fonts.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>css/slick.css" rel="stylesheet" />

    <script src="<?php echo public_url(); ?>js/placeholder.js"></script>
    <script src="<?php echo public_url(); ?>js/bootstrap-datepicker.js"></script>
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
                    <a tabindex="1" class="navbar-brand" href="/wps/portal/MOIInternet/MOIHome">
                        <img alt="Ministry of Interior Home" title="Ministry of Interior" src="<?php echo public_url();  ?>storage/logo/logo_en.png" />
                        <span class="noshow">Logo</span>
                    </a>

                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 pull-right padnone topdiv">
                        <div class="toprightDiv">

                            <ul class="nav yamm topNav01">

                                <!-- "Welcome User" after logged header menu -->
                                <!--Start Contact Us header menu -->
                                <li class="dropdown login">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span class="topTxtlink">Contact Us</span> <span class="contacticon">
                                            <img alt='Contact Us' src="<?php echo public_url();  ?>storage/images/msg.png"></span> <span class="arrowicon"> <img src="<?php echo public_url();  ?>storage/images/down-arrow.png" alt="" /></span> </a>

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
                                                                <a href="mailto:info@moi.gov.qa"> <em class="fa fa-envelope fa-large"></em> Send us an Email
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contactpost">
                                                                <a href="/wps/portal/MOIInternet/postyourcomments"> <em class="fa fa-comments fa-large"></em> Post a Comment</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contactpost">
                                                                <a href="/wps/portal/MOIInternet/surveyscenter"> <em class="fa fa-users fa-large"></em> Public Opinion Survey Center</a>
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
                                        <span><img src="<?php echo public_url();  ?>storage/images/graph.png" alt="" /></span>
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
                                                <input type="hidden" value="Z6_JHDI03S0KGL630ASLMC2CQ0006" name="sourceContentNode">
                                                <!-- 			<input type="hidden" value="internet" name="searchCollection" id="searchCollection" > -->

                                                <label for="searchInput1" class="hidden">Search</label>
                                                <input class="wpthemeSearchText" type="text" name="query" placeholder='Search' title='Enter the search keyword'>
                                                <input type="hidden" name="search_query">
                                                <button type="submit" class="btn-img">
                                                    <img src="<?php echo public_url();  ?>storage/images/search-icon.png" alt='Search'>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="wpthemeClear"></div>
                                    </div>

                                    <script language="Javascript">
                                        function addFilter0(queryIn) {
                                            return '"' + queryIn + '"' + ' +(+contentpath::"/wcmlib-internet-en/Site Area for Default Content" +contentpath::"/wcmlib-internet-en/SA-ImportantWebsites" +contentpath::"/wcmlib-internet-en/SA-AwarenessTips" +contentpath::"/wcmlib-internet-en/SA-Events" +contentpath::"/wcmlib-internet-en/SA-Publications" +contentpath::"/wcmlib-internet-en/SA-MOINews")';
                                        }
                                    </script>


                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $.validator.addMethod("sCheck", function(value, element) {
                                                var regexPatt = /script/ig;
                                                return this.optional(element) || !regexPatt.test(value);
                                            }, "Please enter valid Search text");

                                            $('#ptlSearchForm').submit(function(e) {
                                                var searchForm = $("#ptlSearchForm");
                                                searchForm.validate({
                                                    errorLabelContainer: '#searchErrorMsg',
                                                    rules: {
                                                        query: {
                                                            required: true,
                                                            rangelength: [2, 100],
                                                            sCheck: true
                                                        }
                                                    },
                                                    messages: {
                                                        query: {
                                                            required: 'Please enter valid text to search',
                                                            rangelength: 'Please enter valid text to search',
                                                            sCheck: 'Please enter valid text to search'
                                                        }
                                                    }
                                                });

                                                if (!searchForm.valid()) {
                                                    $('#ptlSearchErrorModal').modal('show');
                                                    return false;
                                                }

                                            });

                                        });
                                    </script>
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

                                <li class="arbic" lang="ar" xml:lang="ar" dir="rtl"><a tabindex="1" class="lang-button" href='/wps/portal/MOIInternet/MOIHome/!ut/p/a1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOK9PFw8DYyDDbzdfcyMDRyDfXydjZwDDQwMzPTD9aPASjwdLUw8DA0MvS08DCyASkK8Qpz8nY0MDAyhCgxwAEcD_YLs7EAAcMr9uQ!!/dl5/d5/L0lDUmlTUSEhL3dHa0FKRnNBLzRKVXBDQSEhL2FyX1FB/'>العربية</a></li>

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
            <script type='text/javascript'>
                document.cookie = 'this-is-human=$encrypted;path=/;Domain=.$domainName;';
                /* location.reload(true);  */
            </script>


            <script>
                //$(document).ready(function(){
                var url = "/MOIInternetTheme/SiteVisitServlet?locale=en_US";
                var lang = "en";
                var visitVar = "visitedMoiInt" + lang;
                if (typeof(Storage) !== "undefined") {
                    var canAccesSessionStorage = true;
                    try {
                        sessionStorage[visitVar];
                    } catch (err) {
                        canAccesSessionStorage = false;
                    }
                    if (!canAccesSessionStorage || sessionStorage[visitVar]) {
                        $.get(url, function(data) {
                            showHitCount(data);
                        });
                    } else {
                        $.post(url, function(data) {
                            showHitCount(data);
                        });
                        sessionStorage[visitVar] = 'Yes';
                    }
                } else {
                    $.post(url, function(data) {
                        showHitCount(data);
                    });
                }
                //});

                $().ready(function() {
                    $('#loginModal').on('hidden.bs.modal', function(e) {
                        $(this).removeData('bs.modal');
                    });
                });

                function showHitCount(data) {
                    if (data == null) return;
                    var res = data.split("#");
                    if (res != null && res.length > 1) {
                        $('#siteVisitSpan').html(res[0]);
                        $('#siteVisitToolTip').html(res[1]);
                    } else if (res != null && res.length == 1) {
                        $('#siteVisitSpan').html(res[0]);
                        $('#siteVisitToolTip').html(res[0]);
                    } else {
                        $('#siteVisitSpan').html(data);
                        $('#siteVisitToolTip').html(data);
                    }


                }
            </script>
        </div>

        <script type="text/javascript">
            function search() {
                $('form#mobileSearchForm').submit();
            }
        </script>

        <!-- Loader block -->
        <div class="loader" style="display: none;">
            <img src="<?php echo public_url();  ?>storage/images/loader.gif" alt="loading">
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
                                                        <input type="hidden" value="Z6_JHDI03S0KGL630ASLMC2CQ0006" name="sourceContentNode">
                                                        <label for="searchInput" class="hidden">Search</label>
                                                        <input class="mobsearchinput pad13" type="text" id="searchInput" name="query" placeholder='Search' title='Enter the search keyword'>
                                                        <span>
                                                            <button type="submit" class="btn-img" style="border: none; background: none; padding: 0px;">
                                                                <img src="<?php echo public_url();  ?>storage/images/mob-search-icon.gif" alt="Search">
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
                                                        <a target="_blank" href="https://eservices.moi.gov.qa/eservices-portal/pages/serviceGroups.xhtml">
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

                                    <a href="/wps/portal/MOIInternet/awarenesstips">Security Awareness</a>

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

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/infocenter/importantwebsites">Useful Links</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/infocenter/relatedwebsites">Related Websites</a></li>

                                                    <li role="menuitem">
                                                        <a target="_blank" href="http://maps.moi.gov.qa/publicgis/index-en.html">
                                                            My Address
                                                        </a>
                                                    </li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/infocenter/newministrystatistics">Ministry Statistics</a></li>

                                                    <li role="menuitem">
                                                        <a target="_self" href="https://portal.moi.gov.qa/wps/portal/MOIInternet/opendata">
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

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/aboutministry/history">History</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/aboutministry/functions">Functions</a></li>

                                                    <li role="menuitem">
                                                        <a target="_self" href="/wps/portal/MOIInternet/departmentcommittees">
                                                            Organization Chart
                                                        </a>
                                                    </li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/aboutministry/officialspersonalities">Officials & Personalities</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/aboutministry/ministrystrategy">Ministry Strategy </a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/aboutministry/awardsrecognitions">Awards & Recognitions</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/aboutministry/ourlocations">Our Locations</a></li>

                                                    <li role="menuitem"><a href="/wps/portal/MOIInternet/aboutministry/rulesandregulations">Rules and Regulations</a></li>

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
        <script>
            $(function() {
                $('.stickyHeader .nav').Setup_ARIA_Navigation();
                $('.toprightDiv .nav').Setup_ARIA_Navigation();
            });

            var keyCodeMap = {
                48: "0",
                49: "1",
                50: "2",
                51: "3",
                52: "4",
                53: "5",
                54: "6",
                55: "7",
                56: "8",
                57: "9",
                59: ";",
                65: "a",
                66: "b",
                67: "c",
                68: "d",
                69: "e",
                70: "f",
                71: "g",
                72: "h",
                73: "i",
                74: "j",
                75: "k",
                76: "l",
                77: "m",
                78: "n",
                79: "o",
                80: "p",
                81: "q",
                82: "r",
                83: "s",
                84: "t",
                85: "u",
                86: "v",
                87: "w",
                88: "x",
                89: "y",
                90: "z",
                96: "0",
                97: "1",
                98: "2",
                99: "3",
                100: "4",
                101: "5",
                102: "6",
                103: "7",
                104: "8",
                105: "9"
            }

            $.fn.Setup_ARIA_Navigation = function(settings) {

                settings = jQuery.extend({
                    menuHoverClass: 'show-menu',
                }, settings);

                // Add ARIA role to menubar and menu items
                //$(this).attr('role', 'menubar').find('li').attr('role', 'menuitem');

                var mainmenu_links = $(this).find('> li > a').not('.lang-button');

                // Added by Terrill: (removed temporarily: doesn't fix the JAWS problem after all)
                // Add tabindex="0" to all top-level links
                // Without at least one of these, JAWS doesn't read widget as a menu, despite all the other ARIA
                $(mainmenu_links).attr('tabindex', '0');

                // Set tabIndex to -1 so that mainmenu_links can't receive focus until menu is open
                $(mainmenu_links).next('ul')
                    .attr('data-test', 'true')
                    .attr({
                        'aria-hidden': 'true'
                    }) //, 'role': 'menu' })
                    .find('a')
                    .attr('tabIndex', -1);

                // Adding aria-haspopup for appropriate items
                /*   $(mainmenu_links).each(function() {
                      if ($(this).next('ul').length > 0)
                          $(this).parent('li').attr('aria-haspopup', 'true');
                  }); */

                /*  $(mainmenu_links).hover(function() {
                     $(this).closest('ul')
                         .attr('aria-hidden', 'false')
                         .find('.' + settings.menuHoverClass)
                         .attr('aria-hidden', 'true')
                         .removeClass(settings.menuHoverClass)
                         .toggle('dropdown')
                         .find('a')
                         .attr('tabIndex', -1);
                     $(this).next('ul')
                         .attr('aria-hidden', 'false')
                         .addClass(settings.menuHoverClass)
                         .toggle('dropdown')
                         .find('a').attr('tabIndex', 0);
                 }); */
                $(mainmenu_links).focus(function() {
                    $(this).closest('ul')
                        .find('.' + settings.menuHoverClass)
                        .attr('aria-hidden', 'true')
                        .removeClass(settings.menuHoverClass)
                        .toggle('dropdown')
                        .find('a')
                        .attr('tabIndex', -1);
                    $(this).next('ul')
                        .attr('aria-hidden', 'false')
                        .addClass(settings.menuHoverClass)
                        .toggle('dropdown')
                        .find('a').not('.lang-button').attr('tabIndex', 0);
                    $(this).closest('ul').find('> li').removeClass("open");
                    $(this).closest('li[aria-haspopup=true]').addClass("open");
                    //$('.navbar-nav').toggleClass("bar");

                });

                // Bind arrow keys for navigation
                $(mainmenu_links).keydown(function(e) {
                    if (e.keyCode == 37) {
                        e.preventDefault();
                        // This is the first item
                        if ($(this).parent('li').prev('li').length == 0) {
                            $(this).parents('ul').find('> li').last().find('a').first().focus();
                        } else {
                            $(this).parent('li').prev('li').find('a').first().focus();
                        }
                    } else if (e.keyCode == 38) {
                        e.preventDefault();
                        if ($(this).parent('li').find('ul').length > 0) {
                            $(this).parent('li').find('ul')
                                .attr('aria-hidden', 'false')
                                .addClass(settings.menuHoverClass)
                                .find('a').attr('tabIndex', 0)
                                .last().focus();
                        }
                    } else if (e.keyCode == 39) {
                        e.preventDefault();
                        // This is the last item
                        if ($(this).parent('li').next('li').length == 0) {
                            $(this).parents('ul').find('> li').first().find('a').first().focus();
                        } else {
                            $(this).parent('li').next('li').find('a').first().focus();
                        }
                    } else if (e.keyCode == 40) {
                        e.preventDefault();
                        if ($(this).parent('li').find('ul').length > 0) {
                            $(this).parent('li').find('ul')
                                .attr('aria-hidden', 'false')
                                .addClass(settings.menuHoverClass)
                                .find('a').attr('tabIndex', 0)
                                .first().focus();
                        }
                    } else if (e.keyCode == 13 || e.keyCode == 32) {
                        // If submenu is hidden, open it
                        e.preventDefault();
                        $(this).parent('li').find('ul[aria-hidden=true]')
                            .attr('aria-hidden', 'false')
                            .addClass(settings.menuHoverClass)
                            .find('a').attr('tabIndex', 0)
                            .first().focus();
                        if ($(this).parent('li').attr('aria-haspopup') == undefined || $(this).parent('li').attr('aria-haspopup') == false)
                            window.location = $(this).attr('href');
                    } else if (e.keyCode == 27) {
                        e.preventDefault();
                        $('.' + settings.menuHoverClass)
                            .attr('aria-hidden', 'true')
                            .removeClass(settings.menuHoverClass)
                            .find('a')
                            .attr('tabIndex', -1);
                    } else {
                        $(this).parent('li').find('ul[aria-hidden=false] a').each(function() {
                            if ($(this).text().substring(0, 1).toLowerCase() == keyCodeMap[e.keyCode]) {
                                $(this).focus();
                                return false;
                            }
                        });
                    }
                });


                var links = $(mainmenu_links).parent('li').find('ul').find('a');
                $(links).keydown(function(e) {
                    if (e.keyCode == 38) {
                        e.preventDefault();
                        // This is the first item
                        if ($(this).parent('li').prev('li').length == 0) {
                            $(this).parents('ul').parents('li').find('a').first().focus();
                        } else {
                            $(this).parent('li').prev('li').find('a').first().focus();
                        }
                    } else if (e.keyCode == 40) {
                        e.preventDefault();
                        if ($(this).parent('li').next('li').length == 0) {
                            $(this).parents('ul').parents('li').find('a').first().focus();
                        } else {
                            $(this).parent('li').next('li').find('a').first().focus();
                        }
                    } else if (e.keyCode == 27 || e.keyCode == 37) {
                        e.preventDefault();
                        $(this)
                            .parents('ul').first()
                            .prev('a').focus()
                            .parents('ul').first().find('.' + settings.menuHoverClass)
                            .attr('aria-hidden', 'true')
                            .removeClass(settings.menuHoverClass)
                            .find('a')
                            .attr('tabIndex', -1);
                    } else if (e.keyCode == 32) {
                        e.preventDefault();
                        window.location = $(this).attr('href');
                    } else {
                        var found = false;
                        $(this).parent('li').nextAll('li').find('a').each(function() {
                            if ($(this).text().substring(0, 1).toLowerCase() == keyCodeMap[e.keyCode]) {
                                $(this).focus();
                                found = true;
                                return false;
                            }
                        });

                        if (!found) {
                            $(this).parent('li').prevAll('li').find('a').each(function() {
                                if ($(this).text().substring(0, 1).toLowerCase() == keyCodeMap[e.keyCode]) {
                                    $(this).focus();
                                    return false;
                                }
                            });
                        }
                    }
                });


                // Hide menu if click or focus occurs outside of navigation
                $(this).find('a').last().keydown(function(e) {
                    if (e.keyCode == 9) {
                        // If the user tabs out of the navigation hide all menus
                        $('.' + settings.menuHoverClass)
                            .attr('aria-hidden', 'true')
                            .removeClass(settings.menuHoverClass).toggle('dropdown')
                            .find('a')
                            .attr('tabIndex', -1);
                        $(this).parents('ul').closest('ul').find('> li').removeClass("open");
                    }
                });
                $('.contactpost').find('a').last().keydown(function(e) {
                    if (e.keyCode == 9) {
                        // If the user tabs out of the navigation hide all menus
                        $('.' + settings.menuHoverClass)
                            .attr('aria-hidden', 'true')
                            .removeClass(settings.menuHoverClass).toggle('dropdown')
                            .find('a')
                            .attr('tabIndex', -1);
                    }
                });

                $(document).click(function() {
                    $('.' + settings.menuHoverClass).attr('aria-hidden', 'true').toggle('dropdown').removeClass(settings.menuHoverClass).find('a').attr('tabIndex', -1);
                });

                $(this).click(function(e) {
                    e.stopPropagation();
                });
            }
        </script>
        <!-- Bread Crumb Trail for MOI Internet Theme -->
        <!--Bread crumb -->
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
                <span class="asa.page.id">Z6_JHDI03S0KGL630ASLMC2CQ0006</span>


                <span class="asa.visitor"></span>
                <span class="asa.url">/wps/portal/MOIInternet/MOIHome</span>

                <span class="asa.page.title">Home</span>
                <span class="asa.page.locale">en</span>
                <span class="asa.page.direction">ltr</span>

                <span class="asa.page.breadcrumb">/Home/Home</span>
                <div class="asa.page.tags" id="asa.page.tags" style="display:none;">

                </div>


            </div>

            <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_crumbTrail"></a> -->

            <div class="wpthemeClear"></div>

            <div class="wpthemeInner">
                <div id="wpthemeStatusBarContainer" class="lotusui30">

                    <noscript>
                        <div class="lotusMessage2" role="alert" wairole="alert">
                            <img class="lotusIcon lotusIconMsgError" src="icons/blank.gif" alt="Error" />
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
                <div class="hiddenWidgetsDiv">
                    <!-- widgets in this container are hidden in the UI by default -->
                    <!--<div class="component-container hiddenWidgetsContainer ibmDndRow wpthemeCol12of12 wpthemeFull" name="ibmHiddenWidgets"></div> -->
                    <div style="clear:both"></div>
                </div>
                <!-- this layout has one row across the whole page with 3 equally sized columns underneath 
<div class="wptheme3Col wptheme1Row">
	<div class="component-container wpthemeRow wpthemeHeadlineContainer ibmDndRow wpthemeCol12of12 wpthemeFull" name="top"></div>
	<div class="component-container wpthemeCol wpthemeTertiaryContainer ibmDndColumn wpthemeLeft wpthemeCol4of12 wpthemeNarrow" name="left"></div>
	<div class="component-container wpthemeCol wpthemePrimaryContainer ibmDndColumn wpthemeLeft wpthemeCol4of12 wpthemeNarrow" name="ibmMainContainer"></div>
	<div class="component-container wpthemeCol wpthemeSecondaryContainer ibmDndColumn wpthemeLeft wpthemeCol4of12 wpthemeNarrow" name="right"></div>
</div>
-->


                <div class="wptheme3Col wptheme2Row">

                    <!--Banner elements-->
                    <div class='component-container wpthemeFull ibmDndRow wpthemeHeadlineContainer wpthemeRow wpthemeRow4of12 id-Z7_IA84H101K0EE30A23K0KGF2062' name='top'>
                        <div class='component-control id-Z7_IA84H101K0E3F0AIG02P3Q10U3'><span id="Z7_IA84H101K0E3F0AIG02P3Q10U3"></span>
                            <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                <!-- marks the node the analytics tags for this portlet will be placed in -->


                                <div class="asa.portlet" id="asa.portlet.Z7_IA84H101K0E3F0AIG02P3Q10U3" style="display:none;">
                                    <span class="asa.portlet.id">Z7_IA84H101K0E3F0AIG02P3Q10U3</span>


                                    <span class="asa.portlet.direction">ltr</span>
                                    <span class="asa.portlet.locale">en</span>
                                    <span class="asa.portlet.title">Web Content Viewer (JSR 286)</span>
                                    <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_IA84H101K0E3F0AIG02P3Q10U3" style="display:none;">

                                    </div>


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
                                        .banner-txtbg1 {
                                            background-color: #dd4b6c;
                                            padding: 0 5px;
                                        }

                                        .banner-txtbg2 {
                                            background-color: #333;
                                            padding: 0 5px;
                                        }

                                        .banner-txtbg3 {
                                            background-color: #2c3e50;
                                            padding: 0 5px;
                                        }
                                    </style>

                                    <div class="container-fluid carouselBG divider-inside-bottom">
                                        <div class="carouselGenExt">
                                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="10000">

                                                <!-- Indicators -->
                                                <ol class="carousel-indicators carouselIndiExt homeSlider">
                                                </ol>

                                                <div class="carousel-inner">

                                                    <div class="item active" tabindex="0">


                                                        <div class="highlights1">
                                                            <img src="<?php echo public_url(); ?>storage/images/qatarvisacenters_en.jpg?MOD=AJPERES&amp;CACHEID=657af129-9be3-4f0b-81f4-99cb698655d6" alt="qatarvisacentres" width="1200" height="378" />
                                                        </div>

                                                        <div class="carousel-caption carouselExt container" style="background: none;">

                                                            <p>
                                                                <p>
                                                                    <br />
                                                                </p>
                                                            </p>

                                                        </div>

                                                    </div>

                                                    <div class="item" tabindex="0">

                                                        <a href="https://portal.moi.gov.qa/wps/portal/MOIInternet/departmentcommittees/permanentresidency/!ut/p/a1/hY9NT4QwEIZ_iweuzEAXbLxV1izlw3XDGtleNt2kshhosVT054tET37N7X3zzDMZEFCD0HJqG-lao2X3kUV85KzkGK6w2JCc4o7n0Q3e3pH7y3gGDgtAV2mAQU5TpMiqfba_3iYhYvDffiUtPIBYsCxdcyQV5psiJrOlKJMw2SHS6BP468wC4C_DEDIQTWdOy08Hpk-ENiCselRWWf_FzvXZuWG88tDDwVgnO783rd-YyX-WHr4O41fvYbnlXDtltXJLSE2vftKezeig_maDoa_f-FPUTQW7eAetzmFs/dl5/d5/L0lHSkovd0RNQUprQUVnQSEhLzRKU0UvZW5fVVM!/" tabindex="-1">
                                                        

                                                            <div class="highlights1">
                                                                <img src="<?php echo public_url(); ?>storage/images/permanent-residency2_en.jpg?MOD=AJPERES&amp;CACHEID=27c09fd8-f885-4364-8e68-e0962ff37afe" alt="Permanent Residence" width="1200" height="378" />
                                                            </div>

                                                            <div class="carousel-caption carouselExt container" style="background: none;">

                                                                <p>
                                                                    <p>
                                                                        <br />
                                                                    </p>
                                                                </p>

                                                            </div>

                                                        </a>
                                                    </div>


                                                    <div class="item" tabindex="0">
                                                        <a href="https://portal.moi.gov.qa/qatarvisas/" tabindex="-1" target=_blank>

                                                            <div class="highlights1">
                                                                <img src="<?php echo public_url(); ?>storage/images/visas.jpg?MOD=AJPERES&amp;CACHEID=be17e29a-9980-4fd1-81aa-2331c3892084" alt="Entry Permit (Visas) to Qatar" width="1200" height="378" />
                                                            </div>

                                                            <div class="carousel-caption carouselExt container" style="background: none;">

                                                                <p>
                                                                    <p>
                                                                        <br />
                                                                    </p>
                                                                </p>

                                                            </div>

                                                        </a>
                                                    </div>
                                                </div>

                                                <a data-slide="prev" href="#carousel-example-generic" class="left carousel-control" tabindex="-1"><span class="sr-only">Previous Banner</span><i class="glyphicon glyphicon-chevron-left"></i> </a>
                                                <a data-slide="next" href="#carousel-example-generic" class="right carousel-control" tabindex="-1"><span class="sr-only">Next Banner</span><i class="glyphicon glyphicon-chevron-right"></i> </a>

                                            </div>
                                        </div>
                                        <script>
                                            $(function() {
                                                $('.carouselGenExt .carousel-caption').css('background', 'none');

                                                //for accessibility
                                                $('#carousel-example-generic div.item').keydown(function(e) {
                                                    if (e.keyCode == 9) {
                                                        if ($('#carousel-example-generic .carousel-inner .item:last').hasClass('active')) {
                                                            console.log("sssssss")
                                                            //if the last slide ,skip
                                                        } else {
                                                            //e.preventDefault();
                                                            //$('#carousel-example-generic').carousel('pause');
                                                            $('#carousel-example-generic').carousel('next');
                                                            $('#carousel-example-generic').carousel('pause');
                                                            $('#carousel-example-generic div.active.item').focus();
                                                            //setTimeout(function(){ $('#carousel-example-generic div.active.item').focus();}, 0);
                                                        }
                                                    }
                                                });

                                                //for accessibility stop home banner carousel
                                                $(document).bind("keydown.homecarousel", function(e) {
                                                    if (e.keyCode == 9) { //stop carousel if user press tab
                                                        $('#carousel-example-generic').carousel('pause');
                                                        //$('#carousel-example-generic').carousel({interval: false,pause:true}); 
                                                        $(document).unbind("keydown.homecarousel");
                                                    }
                                                });

                                                $('.carousel-control').click(function(e) {
                                                    //$('#carousel-example-generic div.active.item').focus();
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class='component-control id-Z7_IA84H101K0E3F0AIG02P3Q10L7'>
                            <span id="Z7_IA84H101K0E3F0AIG02P3Q10L7"></span>
                            <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                <!-- marks the node the analytics tags for this portlet will be placed in -->

                                <div class="asa.portlet" id="asa.portlet.Z7_IA84H101K0E3F0AIG02P3Q10L7" style="display:none;">
                                    <span class="asa.portlet.id">Z7_IA84H101K0E3F0AIG02P3Q10L7</span>


                                    <span class="asa.portlet.direction">ltr</span>
                                    <span class="asa.portlet.locale">en</span>
                                    <span class="asa.portlet.title">Web Content Viewer (JSR 286)</span>
                                    <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_IA84H101K0E3F0AIG02P3Q10L7" style="display:none;">

                                    </div>


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
                                    <div class="container-fluid lightboxBg home-margBtm">
                                        <div class="container">

                                            <div class="carousel carousel-fade slide" id="newsitems">
                                                <div class="carousel-inner">

                                                    <div class="item active">


                                                        <img src="<?php echo public_url(); ?>storage/images/moi+news.jpg?MOD=AJPERES&amp;CACHEID=f67b1ef6-fa3e-4c3d-b2c9-07b9f82ff654" alt="Visas (Entry permits)" width="32" height="16" />
                                                        <a href="https://portal.moi.gov.qa/qatarvisas/">
                                                            Visas (Entry permits)
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        $('#newsitems.carousel').carousel({
                                            interval: 6000,
                                            pause: '',
                                        });
                                    </script>

                                    <style>
                                        .carousel-inner>.item>img {
                                            display: inline-block;
                                            padding: 0 10px;
                                        }
                                    </style>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!--EServices & Features services elements-->
                    <div class="container home-margBtm ">
                        <div class='component-container wpthemeFull wpthemeHeadlineContainer wpthemeCol ibmDndColumn wpthemeCol4of12 id-Z7_IA84H101K0E3F0AIG02P3Q10L4' name='center'>
                            <div class='component-control id-Z7_IA84H101K0EE30A23K0KGF2010'><span id="Z7_IA84H101K0EE30A23K0KGF2010"></span>
                                <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                    <!-- marks the node the analytics tags for this portlet will be placed in -->


                                    <div class="asa.portlet" id="asa.portlet.Z7_IA84H101K0EE30A23K0KGF2010" style="display:none;">
                                        <span class="asa.portlet.id">Z7_IA84H101K0EE30A23K0KGF2010</span>


                                        <span class="asa.portlet.direction">ltr</span>
                                        <span class="asa.portlet.locale">en</span>
                                        <span class="asa.portlet.title">Web Content Viewer (JSR 286)</span>
                                        <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_IA84H101K0EE30A23K0KGF2010" style="display:none;">

                                        </div>


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
                                         <div class="row">
                                            <div class="col-sm-3 col-md-3">
                                                <div class="panel panel-default servicesList">

                                                    <div class="panel-heading">
                                                        <h1 class="heading">Inquiries</h1>
                                                    </div>

                                                    <div class="panel-body">

                                                        <a href="<?php echo base_url(); ?>services/index.php" title='Inquiries'>
                                                            <div class="text-center">
                                                                <img src="<?php echo public_url(); ?>storage/connect/en_inquires_3.png?MOD=AJPERES&amp;CACHEID=92e6dc18-dafd-4071-a471-e9f6dfe045c6" alt="View all Inquiries" width="80" height="88" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-md-3">
                                                <div class="panel panel-default servicesList">

                                                    <div class="panel-heading">
                                                        <h1 class="heading">E-Services </h1>
                                                    </div>

                                                    <div class="panel-body">

                                                        <a target="_blank" href="#" title='E-Services'>
                                                            <div class="text-center">
                                                                <img src="<?php echo public_url() ?>storage/connect/1.png?MOD=AJPERES&amp;CACHEID=39568dcf-23ae-4bf2-9614-3f601f1a34ea" alt="View All Services" width="80" height="88" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-md-3">
                                                <div class="panel panel-default servicesList">

                                                    <div class="panel-heading">
                                                        <h1 class="heading">MOI Forms</h1>
                                                    </div>

                                                    <div class="panel-body">

                                                        <a href="#" title='MOI Forms'>

                                                            <div class="text-center">
                                                                <img src="<?php echo public_url() ?>storage/connect/2.png?MOD=AJPERES&amp;CACHEID=39df00e8-296a-4b9d-9b7a-acb2d9bb8e43" alt="MOI Forms" width="80" height="88" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-md-3">
                                                <div class="panel panel-default servicesList">

                                                    <div class="panel-heading">
                                                        <h1 class="heading">Visas (Entry permits)</h1>
                                                    </div>

                                                    <div class="panel-body">


                                                        <a target="_blank" href="https://portal.moi.gov.qa/qatarvisas" title='Visas'>
                                                            <div class="text-center">
                                                                <img src="<?php echo public_url() ?>storage/connect/visas_icon_small1.png?MOD=AJPERES&amp;CACHEID=ccf15f2b-3c15-458b-b480-e9b558e5bef4" alt="Visas (Entry permits)" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <!--Latest News elements-->
                    <div class="container home-margBtm ">
                        <div class='component-container wpthemeFull ibmDndRow wpthemeHeadlineContainer wpthemeRow wpthemeRow4of12 id-Z7_IA84H101K0E3F0AIG02P3Q10C2' name='middle'>
                            <div class='component-control id-Z7_IA84H101KOF9F0A2JN1IUV30S5'>
                                <span id="Z7_IA84H101KOF9F0A2JN1IUV30S5"></span>
                                <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                    <!-- marks the node the analytics tags for this portlet will be placed in -->


                                    <div class="asa.portlet" id="asa.portlet.Z7_IA84H101KOF9F0A2JN1IUV30S5" style="display:none;">
                                        <span class="asa.portlet.id">Z7_IA84H101KOF9F0A2JN1IUV30S5</span>


                                        <span class="asa.portlet.direction">ltr</span>
                                        <span class="asa.portlet.locale">en</span>
                                        <span class="asa.portlet.title">Web Content Viewer (JSR 286)</span>
                                        <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_IA84H101KOF9F0A2JN1IUV30S5" style="display:none;">

                                        </div>


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
                                        <script src="<?php echo public_url(); ?>js/FancyZoom.js" type="text/javascript"></script>
                                        <script src="<?php echo public_url(); ?>js/FancyZoomHTML.js" type="text/javascript"></script>
                                        <link rel=stylesheet type=text/css href="<?php echo public_url(); ?>css/fancyzoom.css">

                                        <div class="col-md-12 col-sm-12 col-sx-12 contentBox padnone whitebg">
                                            <div class="grey-sliders-TopBg">
                                                <div>
                                                    <span>
                                                        <em class="fa fa-file-text fa-15x fa pull-left"></em>
                                                    </span>


                                                    <h2 class="heading sliders-heading">Latest News</h2>



                                                </div>

                                                <div>
                                                    <div class="pull-right">


                                                        <a title="Read All News" target="" href="/wps/portal/MOIInternet/mediacenter/moinews" aria-label="Read All News"><button class="button slider001" style="margin-right: 60px;" tabindex="-1">Read All News</button></a>




                                                    </div>
                                                </div>
                                            </div>

                                            <div class="slider2 grey-slidersBG1" style="display:none;">
                                                <div class="mediaholder_innerwrap newsconbox">


                                                    <a tabindex="-1" class="pad02 popUpImage" href="/wps/wcm/connect/0.jpg?MOD=AJPERES&amp;CACHEID=d2f2e49a-8a8b-4e0f-85fc-658d7ec401a5" title='Zoom Image' style="float:right!important;padding:0px;">
                                                        <img src="<?php echo public_url(); ?>storage/connect/0.jpg?MOD=AJPERES&amp;CACHEID=d2f2e49a-8a8b-4e0f-85fc-658d7ec401a5" alt="56" width="106" height="106" />
                                                    </a>

                                                    <p>
                                                        Sep 29, 2020
                                                    </p>

                                                    <p class="ellipsis-multi ellipsis4">
                                                        <a href='?1dmy&amp;page=pg.moi.newsdetails&amp;urile=wcm%3apath%3a%2Fwcmlib-internet-en%2Fsa-moinews%2F9465a0f6-c056-403d-ac05-c883bc9c1ef6' title='Open awareness seminar on risks and hazards of drugs'>
                                                            Open awareness seminar on risks and hazards of drugs
                                                        </a>
                                                    </p>

                                                </div>


                                                <div class="mediaholder_innerwrap newsconbox">


                                                    <a tabindex="-1" class="pad02 popUpImage" href="/wps/wcm/connect/92478aa9-24be-4e28-b9b6-d355b5d58ce5/%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9+%D8%A7%D9%84%D8%A7%D8%B9%D9%84%D8%A7%D9%85+%D8%A7%D9%84%D8%A7%D9%85%D9%86%D9%8A.jpg?MOD=AJPERES&amp;CACHEID=92478aa9-24be-4e28-b9b6-d355b5d58ce5" title='Zoom Image' style="float:right!important;padding:0px;">

                                                        <img src="<?php echo public_url(); ?>storage/connect/%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9+%D8%A7%D9%84%D8%A7%D8%B9%D9%84%D8%A7%D9%85+%D8%A7%D9%84%D8%A7%D9%85%D9%86%D9%8A.jpg?MOD=AJPERES&amp;CACHEID=92478aa9-24be-4e28-b9b6-d355b5d58ce5" alt="t" width="106" height="106" />
                                                    </a>


                                                    <p>
                                                        Sep 24, 2020
                                                    </p>

                                                    <p class="ellipsis-multi ellipsis4">
                                                        <a href='?1dmy&amp;page=pg.moi.newsdetails&amp;urile=wcm%3apath%3a%2Fwcmlib-internet-en%2Fsa-moinews%2Fc3618394-6294-4254-989d-b7a6da311632' title='10th Meeting of the Security Media Committee of the Arabian Gulf Cooperation Council'>
                                                            10th Meeting of the Security Media Committee of the Arabian Gulf Cooperation Council
                                                        </a>
                                                    </p>

                                                </div>


                                                <div class="mediaholder_innerwrap newsconbox">


                                                    <a tabindex="-1" class="pad02 popUpImage" href="/wps/wcm/connect/2529266b-6f0e-4720-963c-1a0ceffaf61d/987.JPG?MOD=AJPERES&amp;CACHEID=2529266b-6f0e-4720-963c-1a0ceffaf61d" title='Zoom Image' style="float:right!important;padding:0px;">

                                                        <img src="<?php echo public_url(); ?>storage/connect/987.JPG?MOD=AJPERES&amp;CACHEID=2529266b-6f0e-4720-963c-1a0ceffaf61d" alt="76" width="106" height="106" />
                                                    </a>


                                                    <p>
                                                        Sep 22, 2020
                                                    </p>

                                                    <p class="ellipsis-multi ellipsis4">
                                                        <a href='?1dmy&amp;page=pg.moi.newsdetails&amp;urile=wcm%3apath%3a%2Fwcmlib-internet-en%2Fsa-moinews%2F5fe6a986-e647-4c01-9134-324a979b4981' title='Cooperation agreement with Weill Cornell Medicine-Qatar'>
                                                            Cooperation agreement with Weill Cornell Medicine-Qatar
                                                        </a>
                                                    </p>

                                                </div>


                                                <div class="mediaholder_innerwrap newsconbox">


                                                    <a tabindex="-1" class="pad02 popUpImage" href="/wps/wcm/connect/6e1e2433-116b-43da-a94e-8e5baa3fc7ea/9.jpg?MOD=AJPERES&amp;CACHEID=6e1e2433-116b-43da-a94e-8e5baa3fc7ea" title='Zoom Image' style="float:right!important;padding:0px;">


                                                        <img src="<?php echo public_url(); ?>storage/connect/9.jpg?MOD=AJPERES&amp;CACHEID=6e1e2433-116b-43da-a94e-8e5baa3fc7ea" alt="7" width="106" height="106" />
                                                    </a>


                                                    <p>
                                                        Sep 17, 2020
                                                    </p>

                                                    <p class="ellipsis-multi ellipsis4">
                                                        <a href='?1dmy&amp;page=pg.moi.newsdetails&amp;urile=wcm%3apath%3a%2Fwcmlib-internet-en%2Fsa-moinews%2F03980789-7d59-4bcb-80c2-6f7743079a4b' title='The Board of Trustees of the Qatar Football Association Award Honours MOI'>
                                                            The Board of Trustees of the Qatar Football Association Award Honours MOI
                                                        </a>
                                                    </p>

                                                </div>


                                                <div class="mediaholder_innerwrap newsconbox">


                                                    <a tabindex="-1" class="pad02 popUpImage" href="/wps/wcm/connect/123dd2c8-0fad-4a5b-a7a5-7b2f4633c41f/2356.jpg?MOD=AJPERES&amp;CACHEID=123dd2c8-0fad-4a5b-a7a5-7b2f4633c41f" title='Zoom Image' style="float:right!important;padding:0px;">


                                                        <img src="<?php echo public_url(); ?>storage/connect/2356.jpg?MOD=AJPERES&amp;CACHEID=123dd2c8-0fad-4a5b-a7a5-7b2f4633c41f" alt="تطبيق مطراش2 ... العديد من الخدمات المتنوعة " width="106" height="106" />
                                                    </a>


                                                    <p>
                                                        Sep 14, 2020
                                                    </p>

                                                    <p class="ellipsis-multi ellipsis4">
                                                        <a href='?1dmy&amp;page=pg.moi.newsdetails&amp;urile=wcm%3apath%3a%2Fwcmlib-internet-en%2Fsa-moinews%2F165b6388-5571-4f5a-b9f8-97ad08231afb' title='Metrash2 App Provides Multiple Services for the Public'>
                                                            Metrash2 App Provides Multiple Services for the Public
                                                        </a>
                                                    </p>

                                                </div>



                                            </div>
                                            <script>
                                                $(".popUpImage").fancyZoom();
                                            </script>

                                            <div class="mobbutton">

                                                <a title="Read All News" target="" href="/wps/portal/MOIInternet/mediacenter/moinews">
                                                    <button class="button">Read All News</button></a>
                                            </div>
                                        </div>

                                        <div class="sbclear"></div></div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <!-- NewsLetter Subscription Portlet -->
                    <div class="container home-margBtm ">
                        <div class="whitebg clearfix">
                            <div class='component-container wpthemeFull ibmDndRow wpthemeHeadlineContainer wpthemeRow wpthemeRow4of12 id-Z7_N90A19O0KGN650AMH7U0RC3082' name='middle-bottom'>
                                <div class='component-control id-Z7_N90A19O0KGN650AMH7U0RC30O6'><span id="Z7_N90A19O0KGN650AMH7U0RC30O6"></span>
                                    <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                        <!-- marks the node the analytics tags for this portlet will be placed in -->


                                        <div class="asa.portlet" id="asa.portlet.Z7_N90A19O0KGN650AMH7U0RC30O6" style="display:none;">
                                            <span class="asa.portlet.id">Z7_N90A19O0KGN650AMH7U0RC30O6</span>


                                            <span class="asa.portlet.direction">ltr</span>
                                            <span class="asa.portlet.locale">en</span>
                                            <span class="asa.portlet.title">Web Content Viewer (JSR 286)</span>
                                            <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_N90A19O0KGN650AMH7U0RC30O6" style="display:none;">

                                            </div>


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

                                            <div class="col-md-4 col-sm-5 col-xs-12">
                                                <ul class="list-inline" style="padding-top: 10px; padding-bottom: 5px;">
                                                    <li>
                                                        <p><span aria-hidden="true" style="font-size:18px;color:#4e4e4e">
                                                                <em class="fa fa-user"></em>
                                                            </span>&nbsp;&nbsp;

                                                            Journalist Registration :


                                                        </p>
                                                    </li>
                                                    <li style="padding-left:0px;padding-right:0px;">

                                                        <button title="Journalist Registration" type="submit" class="button " style="padding:3px 10px;" onclick="window.location.href='/wps/portal/MOIInternet/journalistregistration'">Register</button>


                                                    </li>
                                                    <li style="padding-left:0px;padding-right:0px;">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </li>
                                                    <li class="jreg-newsltr-sep" style="padding-left:0px;padding-right:0px;">&nbsp;</li>

                                                </ul>

                                            </div>
                                            <div class="modal fade" id="loginJournalistModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </section>
                                </div>
                                <div class='component-control id-Z7_IAMI0240LG74E0QG0Q2QA80MD5'><span id="Z7_IAMI0240LG74E0QG0Q2QA80MD5"></span>
                                    <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                        <!-- marks the node the analytics tags for this portlet will be placed in -->


                                        <div class="asa.portlet" id="asa.portlet.Z7_IAMI0240LG74E0QG0Q2QA80MD5" style="display:none;">
                                            <span class="asa.portlet.id">Z7_IAMI0240LG74E0QG0Q2QA80MD5</span>


                                            <span class="asa.portlet.direction">ltr</span>
                                            <span class="asa.portlet.locale">en</span>
                                            <span class="asa.portlet.title">NewsLetterSubscription</span>
                                            <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_IAMI0240LG74E0QG0Q2QA80MD5" style="display:none;">

                                            </div>


                                        </div>

                                        <!-- asa.overlay marks the node that the AsaOverlayWidget will be placed in -->
                                        <div style="position:relative; z-index: 1;">
                                            <div class="analytics.overlay"></div>
                                        </div>
                                        <!-- Hide the text of the title, but still provide the lm-dynamic-title container for accessing the dynamic title -->
                                        <span class="wpthemeAccess">
                                            <span class="lm-dynamic-title asa.portlet.title a11yRegionLabel"><span lang="en" dir="ltr">NewsLetterSubscription</span></span>
                                        </span>
                                        <div class="wpthemeOverflowAuto">
                                            <!-- lm:control dynamic spot injects markup of layout control -->


                                            <style>
                                                .form-control-nl {
                                                    height: 60px !important;
                                                    border: 1px solid border-radius:4px !important;
                                                }

                                                .imgBlock img {
                                                    width: auto !important;
                                                    height: auto !important;
                                                }
                                            </style>




                                            <script>
                                                if (typeof dojo == 'undefined') {
                                                    document.writeln("<scr" + "ipt src='<?php echo public_url() ?>js/dojo.js' ></scr" + "ipt>");
                                                }
                                            </script>
                                            <script>
                                                dojo.require('ibm.portal.xml.xpath');
                                                dojo.require('ibm.portal.xml.xslt');
                                            </script>
                                            <script>
                                                dojo.require('ibm.portal.portlet.portlet');
                                            </script>
                                            <script>
                                                if (typeof(ibmPortalConfig) == "undefined") {
                                                    ibmPortalConfig = {
                                                        contentHandlerURI: "/wps/contenthandler/!ut/p/digest!s2Z4aR8sNRIeEv9KxILyUA/nm/oid:wps.portal.root"
                                                    };
                                                } else if (!ibmPortalConfig["contentHandlerURI"]) {
                                                    ibmPortalConfig["contentHandlerURI"] = "/wps/contenthandler/!ut/p/digest!s2Z4aR8sNRIeEv9KxILyUA/nm/oid:wps.portal.root";
                                                }
                                            </script>
                                            <div id='com.ibm.wps.web2.portlet.root.Z7_IAMI0240LG74E0QG0Q2QA80MD5' style='display: none;'>/wps/contenthandler/!ut/p/digest!s2Z4aR8sNRIeEv9KxILyUA/pm/oid:--portletwindowid--@oid:Z6_JHDI03S0KGL630ASLMC2CQ0006</div>
                                            <div id='com.ibm.wps.web2.portlet.preferences.Z7_IAMI0240LG74E0QG0Q2QA80MD5' style='display: none;' pageid='Z6_JHDI03S0KGL630ASLMC2CQ0006' configid='Z3_IAMI0240LOGB80A1AK435330S6' editdefaultsid='Z5_IAMI0240LG74E0QG0Q2QA80MD3'></div>
                                            <div id='com.ibm.wps.web2.portlet.user.Z7_IAMI0240LG74E0QG0Q2QA80MD5' style='display: none;'>/wps/contenthandler/!ut/p/digest!s2Z4aR8sNRIeEv9KxILyUA/um/secure/currentuser/profile?expandRefs=true</div>

                                            <div class="col-md-8 col-sm-7 col-xs-12 formcontainer photoGalleryNews" style="margin-right: 0px !important">
                                                <form name="newsletterSubForm" method="post" id="newsletterSubForm" action="dl5/d5/L2dBISEvZ0FBIS9nQSEh/pw/Z7_IAMI0240LG74E0QG0Q2QA80MD5/act/id=0/464690936457/=/#Z7_IAMI0240LG74E0QG0Q2QA80MD5" autocomplete="off">
                                                    <ul class="list-inline" style="padding-top: 10px; padding-bottom: 5px; margin-top: 3px;">
                                                        <li style="vertical-align: top" class="subscribetxt" tabindex="0" role="heading" aria-level="3">
                                                            <p>
                                                                <span aria-hidden="true" style="font-size:18px;color:#4e4e4e">
                                                                    <em class="fa fa-newspaper-o"></em>
                                                                </span>&nbsp;&nbsp;Newsletter
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <label for="emailId" class="hidden">Enter your E-Mail Address</label>
                                                            <input class="form-control subscribeEmail" name="emailId" id="emailId" type="text" autocomplete="off" placeholder='Enter your E-Mail Address'>
                                                            <input type="hidden" name="userAction" id="userAction" />
                                                            <div id="errorMsgs" class="text-center text-danger"> </div>
                                                        </li>
                                                        <li style="vertical-align: top">
                                                            <button class="button subcolor" type="button" onclick="callNewsLetterAction('subscribe');">
                                                                Subscribe
                                                            </button>&nbsp;
                                                            <button class="button unsubscribe" type="button" onclick="callNewsLetterAction('unsubscribe');">
                                                                Unsubscribe
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </form>

                                            </div>

                                            <div class="modal fade" id="nlUnSubscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title subclass" id="myModalLabel">Newsletter Suscription</h4>
                                                            <h4 class="modal-title unsubHeadClass" id="myModalLabelUnsub" style="display: none;">Unsubscribe Newsletter</h4>
                                                        </div>
                                                        <form id="nlform">
                                                            <div class="modal-body" style="padding:10px !important;">

                                                                <div id="msgDiv" class="hide from-div-margin" style="margin :10px;" role="alert">
                                                                    <div id="msg"></div>
                                                                </div>

                                                                <div id="validationErrorMsg" class="col-md-12 text-center text-danger" style="margin-bottom:10px;"> </div>

                                                                <div class="row unsubClass hidearea">

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label for=""><b>You are going to unsubscribe from MOI newsletter, could you please enter the reason?</b></label>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <textarea rows="3" class="form-control" style="border-color:#ccc" name="reason" id="reason" required min-length="4" max-length="500"></textarea>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row hidearea">
                                                                    <label class="col-xs-12 " for="captchaResponse">Please enter the verification code from the picture or audio</label>
                                                                </div>
                                                                <div class="row imgBlock hidearea">
                                                                    <div class="col-xs-12  col-sm-5">
                                                                        <div id="captcha-wrap">
                                                                            <div id="captcha-box" style="padding : 6px;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-7" style="padding: 5px 0px;">
                                                                        <div class="col-xs-12 col-sm-5">
                                                                            <input type="text" size="3" maxlength="3" autocomplete="off" name="captchaResponse" id="captchaResponse" class="enText numeric" style="width: 130px !important; height: 30px !important; border:1px solid !important; border-radius:4px !important;" />
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-4">
                                                                            <a href="javascript:void(0)" id="refreshLink" onclick="refreshCapthcans_Z7_IAMI0240LG74E0QG0Q2QA80MD5_();" style="margin-left :10px; margin-right : 10px;">
                                                                                <img src='<?php echo public_url(); ?>storage/images/refresh.png' title='Refresh captcha' id="captcha-refresh" alt='Refresh captcha' style="height: 24px;" />
                                                                            </a>
                                                                            <a href="javascript:void(0)" id="textAudioLink" onclick='toggleAudioCaptcha($("#text-audio-refresh"))'>
                                                                                <img src='<?php echo public_url(); ?>storage/images/audio.png' title='Switch to audio' class="audio" id="text-audio-refresh" alt='Switch to audio' style="height: 24px;" />
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                        <div class="modal-footer">
                                                            <img id="wait-gif" src='<?php echo public_url();  ?>storage/images/ajax_loader.gif' style="display: none;">
                                                            <button id="btnUnSub" class="button unsubscribe hidearea unsubbtn" style="display:inline-block;" type="button" onclick="newsLetterSubmit()">
                                                                Unsubscribe
                                                            </button>
                                                            <button id="btnSub" class="button subcolor hidearea subbtn" type="button" style="display:inline-block;" onclick="newsLetterSubmit()">
                                                                Subscribe
                                                            </button>
                                                            <button type="button" class="button" data-dismiss="modal" style="display:inline-block;background: #e4e7ea; color : #636e7b">Close</button>

                                                        </div>



                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                $().ready(function() {

                                                    var formId = 'nlform'
                                                    $('#' + formId + ' .numeric').on('keyup blur', function() {
                                                        var conv = this.value.replace(/[^0-9]/g, '');
                                                        if (this.value != conv) {
                                                            this.value = conv;
                                                        }
                                                    });

                                                    $('input').keydown(function(e) {
                                                        if (e.keyCode == 13) {
                                                            e.preventDefault();
                                                            newsLetterSubmit();
                                                        }
                                                    });

                                                });

                                                function callNewsLetterAction(action) {

                                                    $('#btnUnSub').removeAttr("disabled");
                                                    $('#btnSub').removeAttr("disabled");

                                                    var regexPatt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                                                    var email = $('#emailId').val();
                                                    $('#userAction').val(action);
                                                    $("#errorMsgs").attr('style', 'display :none');
                                                    $("#validationErrorMsg").attr('style', 'display :none');
                                                    $(".hidearea").attr('style', 'display :block');
                                                    $("#errorMsgs").text("");
                                                    $("#reason").text("");
                                                    if (email == "") {
                                                        $("#errorMsgs").attr('style', 'display :block');
                                                        $("#errorMsgs").text('Please enter your email address');
                                                        return;
                                                    } else if (!regexPatt.test(email.trim())) {
                                                        $("#errorMsgs").attr('style', 'display :block');
                                                        $("#errorMsgs").text('Please enter a valid email address');
                                                        return;
                                                    } else if (email.trim().length < 10 || email.trim().length > 100) {
                                                        $("#errorMsgs").attr('style', 'display :block');
                                                        $("#errorMsgs").text('Please enter a valid email address');
                                                        return;
                                                    }

                                                    $("#msgDiv").attr('style', 'display :none');
                                                    $("#msgDiv").removeClass('hide');
                                                    $("#msgDiv").removeClass('alert alert-danger alert-dismissible fade in');
                                                    $("#msgDiv").removeClass('alert alert-success alert-dismissible fade in');
                                                    $("#msg").text("");
                                                    refreshCapthcans_Z7_IAMI0240LG74E0QG0Q2QA80MD5_();
                                                    $("#captchaResponse").val("");

                                                    if (action != 'subscribe') {
                                                        $('.unsubClass').attr('style', 'display :block');
                                                        $('.unsubClass').attr('style', 'margin :2px');
                                                        $('.unsubHeadClass').attr('style', 'display :block');
                                                        $('.unsubbtn').attr('style', 'display :inline-block');
                                                        $('.subbtn').attr('style', 'display :none');
                                                        $('.subclass').attr('style', 'display :none');
                                                    } else {
                                                        $('.subclass').attr('style', 'display :block');
                                                        $('.subbtn').attr('style', 'display :inline-block');
                                                        $('.unsubbtn').attr('style', 'display :none');
                                                        $('.unsubClass').attr('style', 'display :none');
                                                        $('.unsubHeadClass').attr('style', 'display :none');
                                                    }
                                                    $('#nlUnSubscribeModal').modal('show');
                                                }

                                                function newsLetterSubmit() {

                                                    //var regex = /^[0-9a-zA-Z\_?!.@\s*\[\]\- \u0600-\uFEFF]+$/
                                                    var action = $('#userAction').val();

                                                    $("#validationErrorMsg").attr('style', 'display :none');
                                                    if (action == 'unsubscribe' && $('#reason').val().trim() == "") {
                                                        $("#validationErrorMsg").attr('style', 'display :block');
                                                        $("#validationErrorMsg").attr('style', 'margin-bottom:10px');
                                                        $("#validationErrorMsg").text('Please enter the reason for unsubscription');
                                                        $('#reason').focus();
                                                        return;
                                                    }
                                                    /* else if($('#reason').val().trim() != "" && !regex.test($("#reason").val())) {
				$( "#validationErrorMsg" ).attr('style', 'display :block');	
				$( "#validationErrorMsg" ).attr('style', 'margin-bottom:10px');	
				$( "#validationErrorMsg" ).text('Please enter valid characters only');
				$('#reason').focus();
				return;
			}  */
                                                    else if ($('#captchaResponse').val().trim() == "") {
                                                        $("#validationErrorMsg").attr('style', 'display :block');
                                                        $("#validationErrorMsg").attr('style', 'margin-bottom:10px');
                                                        $("#validationErrorMsg").text('Please enter the Verification code correctly');
                                                        $('#captchaResponse').focus();
                                                        return;
                                                    }

                                                    $('#wait-gif').show();
                                                    var jsonObj = getJsonObj();

                                                    $('#btnUnSub').attr("disabled", true);
                                                    $('#btnSub').attr("disabled", true);

                                                    var url = "";
                                                    if (action == 'subscribe')
                                                        url = "dl5/d5/L2dBISEvZ0FBIS9nQSEh/pw/Z7_IAMI0240LG74E0QG0Q2QA80MD5/res/id=nlSubScribeResourcAction/c=cacheLevelPage/=/";
                                                    else if (action == 'unsubscribe')
                                                        url = "dl5/d5/L2dBISEvZ0FBIS9nQSEh/pw/Z7_IAMI0240LG74E0QG0Q2QA80MD5/res/id=nlUnSubScribeResourcAction/c=cacheLevelPage/=/";

                                                    $.post(url,
                                                        jsonObj,
                                                        function(responseText) {
                                                            $('#wait-gif').hide();
                                                            refreshCapthcans_Z7_IAMI0240LG74E0QG0Q2QA80MD5_();
                                                            $('#captchaResponse').val("");
                                                            var error = responseText.match(/<error>(.*?)<\/error>/);

                                                            $("#msgDiv").attr('style', 'display :block');
                                                            $("#msgDiv").removeClass('hide');
                                                            $("#msgDiv").removeClass('alert alert-danger alert-dismissible fade in');
                                                            $("#msgDiv").removeClass('alert alert-success alert-dismissible fade in');

                                                            if (error) {
                                                                $('#btnUnSub').removeAttr("disabled");
                                                                $('#btnSub').removeAttr("disabled");
                                                                responseText = responseText.replace('<error>', "").replace('</error>', "");
                                                                $("#msgDiv").addClass('alert alert-danger alert-dismissible fade in');
                                                            } else {
                                                                $(".hidearea").attr('style', 'display :none');
                                                                $("#msgDiv").addClass("alert alert-success alert-dismissible fade in");
                                                            }

                                                            $("#msg").text(responseText);

                                                        });
                                                }


                                                function getJsonObj() {
                                                    var jsonObj = {
                                                        "emailId": $('#emailId').val(),
                                                        "reason": $('#reason').val(),
                                                        "captchaResponse": $('#captchaResponse').val()
                                                    };
                                                    return jsonObj;
                                                }

                                                var url_captcha = "dl5/d5/L2dBISEvZ0FBIS9nQSEh/pw/Z7_IAMI0240LG74E0QG0Q2QA80MD5/res/id=captchaRefreshAction/c=cacheLevelPage/=/";

                                                $(function() {
                                                    getImageAudioCaptcha("image");
                                                });

                                                function isBrowserIE() {
                                                    var msie = window.navigator.userAgent.indexOf("MSIE");
                                                    var ie11 = window.navigator.userAgent.indexOf("rv:11");
                                                    return (msie > 0 || ie11 > 0);
                                                }

                                                function toggleAudioCaptcha(obj) {
                                                    if ($(obj).hasClass('audio') === false) {
                                                        $(obj).attr('src', '/wps/PA_NLtterSubscription/images/audio.png');
                                                        $(obj).addClass('audio');
                                                        getImageAudioCaptcha("image");
                                                        $("#captchaResponsens_Z7_IAMI0240LG74E0QG0Q2QA80MD5_").focus();
                                                        setTimeout(function() {
                                                            $(obj).attr('alt', 'Switch to audio');
                                                            $(obj).attr('title', 'Switch to audio');
                                                        }, 1);

                                                    } else {
                                                        $(obj).attr('src', '/wps/PA_NLtterSubscription/images/text.png');
                                                        $(obj).removeClass('audio');
                                                        getImageAudioCaptcha("audio");
                                                        $("#captcha-box").focus();
                                                        setTimeout(function() {
                                                            $(obj).attr('alt', 'Switch to image');
                                                            $(obj).attr('title', 'Switch to image');
                                                        }, 1);
                                                    }
                                                }

                                                function refreshCapthcans_Z7_IAMI0240LG74E0QG0Q2QA80MD5_() {
                                                    if ($('#text-audio-refresh').hasClass('audio') === true) {
                                                        getImageAudioCaptcha("image");
                                                        $("#captchaResponsens_Z7_IAMI0240LG74E0QG0Q2QA80MD5_").focus();
                                                    } else {
                                                        getImageAudioCaptcha("audio");
                                                    }
                                                    $("#captchaResponsens_Z7_IAMI0240LG74E0QG0Q2QA80MD5_").val("");
                                                }

                                                function getImageAudioCaptcha(type) {
                                                    if (type === "image") {
                                                        $.ajax({
                                                            url: url_captcha,
                                                            type: 'POST',
                                                            data: {
                                                                type: type
                                                            },
                                                            error: function() {

                                                            },
                                                            success: function(base64_string) {
                                                                var img = new Image();
                                                                img.src = "data:image/png;base64," + base64_string;
                                                                img.alt = "Captcha Image";
                                                                $("#captcha-box").html(img);

                                                            }
                                                        });
                                                    } else {
                                                        if (isBrowserIE()) {
                                                            var audio = '<embed autostart=false id="audioCaptcha" enablejavascript="true" style="width:100%;height:40px; margin-top: 20px;" aria-label="Audio Captcha" title="Audio Captcha" ></embed>';
                                                            $("#captcha-box").html(audio);
                                                            document.getElementById("audioCaptcha").src = url_captcha + "?type=audio&bogus=" + new Date().getTime();
                                                            document.getElementById("audioCaptcha").focus();
                                                            //document.getElementById("audioCaptcha").play();
                                                        } else {
                                                            var audio = '<audio controls autoplay id="audioCaptcha" style="width:100%;"></audio>';
                                                            $("#captcha-box").html(audio);
                                                            document.getElementById("audioCaptcha").src = url_captcha + "?type=audio&bogus=" + new Date().getTime();
                                                            document.getElementById("audioCaptcha").focus();
                                                            document.getElementById("audioCaptcha").pause();
                                                        }
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Quick Access html elements-->
                    <div class="container">
                        <div class="container" style="width:auto;padding:0px;">
                            <div class='component-container wpthemeFull ibmDndRow wpthemeHeadlineContainer wpthemeRow wpthemeRow4of12 id-Z7_IA84H101K0E3F0AIG02P3Q10C6' name='below'>
                                <div class='component-control id-Z7_IA84H101KOF9F0A2JN1IUV30S6'><span id="Z7_IA84H101KOF9F0A2JN1IUV30S6"></span>
                                    <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                        <!-- marks the node the analytics tags for this portlet will be placed in -->


                                        <div class="asa.portlet" id="asa.portlet.Z7_IA84H101KOF9F0A2JN1IUV30S6" style="display:none;">
                                            <span class="asa.portlet.id">Z7_IA84H101KOF9F0A2JN1IUV30S6</span>


                                            <span class="asa.portlet.direction">ltr</span>
                                            <span class="asa.portlet.locale">en</span>
                                            <span class="asa.portlet.title">Web Content Viewer (JSR 286)</span>
                                            <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_IA84H101KOF9F0A2JN1IUV30S6" style="display:none;">

                                            </div>


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
                                                .qSlider {
                                                    padding: 0 18px !important;
                                                }
                                            </style>

                                            <div class="container-fluid lightboxBg margin00 mobquickdiv">
                                                <div class="container">
                                                    <div class="qheaddiv">
                                                        <span>
                                                            <em class="fa fa-chain fa-2x pull-left"></em>
                                                        </span>

                                                        <h1 class="heading ltPad pull-left">Quick Access</h1>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container-fluid whiteBgBox">
                                                <div class="container">
                                                    <div class="qSlider">

                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/Related-Links_icon12_en.png?MOD=AJPERES&amp;CACHEID=78554da4-fd67-44d1-be95-b7196c7a2a98" alt="National Address" width="166" height="105" />

                                                                <a href="https://portal.moi.gov.qa/wps/portal/nationaladdressEN">
                                                                    National Address
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/residence-icon_en.png?MOD=AJPERES&amp;CACHEID=065e1f9f-1aee-4478-b448-98482ae4efac" alt="Permanent Residency" width="166" height="105" />


                                                                <a href="https://portal.moi.gov.qa/wps/portal/MOIInternet/departmentcommittees/permanentresidency">
                                                                    Permanent Residency
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/open-data-en.png?MOD=AJPERES&amp;CACHEID=05c11be0-a07e-4ac1-8d6f-a70bbd739f18" alt="Open Data" width="166" height="105" />


                                                                <a href="/wps/portal/MOIInternet/opendata">
                                                                    Open Data
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/qatarvisacenter.png?MOD=AJPERES&amp;CACHEID=2a771bc6-6b48-4483-bbca-b485dda87de4" alt="Qatar Visa Center" height="105" />

                                                                <a class="external" href="http://www.qatarvisacenter.com">
                                                                    Qatar Visa Center
                                                                </a>


                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/metrash-icon.png?MOD=AJPERES&amp;CACHEID=6c7a6fe1-a761-4bc7-8702-5da5349bbaa7" alt="Metrash 2" name="Metrash 2" height="105" />




                                                                <a class="external" href="https://portal.moi.gov.qa/metrash2/en/index.html">
                                                                    Metrash 2
                                                                </a>


                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/career-icon%2Bcopy.png?MOD=AJPERES&amp;CACHEID=44dd68e6-62f1-4415-9bf2-a74986374716" alt="Career" name="Career" height="105" />

                                                                <a class="external" href="https://portal.moi.gov.qa/careers/guest/home_landingPage.do?request_locale=en">
                                                                    Careers
                                                                </a>


                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/our-location-icon%2Bcopy.png?MOD=AJPERES&amp;CACHEID=d3f4af6e-0b98-4d12-86e8-6a89589d1e9e" alt="Our Location" name="Our Location" height="105" />


                                                                <a href="/wps/portal/MOIInternet/aboutus/aboutministry/ourlocations">
                                                                    Our Locations
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/awareness-tips-icon%2Bcopy.png?MOD=AJPERES&amp;CACHEID=8fa4045e-f204-4b9f-b94c-5ce696fb07fb" alt="Awareness Tips" name="Awareness Tips" />


                                                                <a href="/wps/portal/MOIInternet/awarenesstips">
                                                                    Awareness Tips
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/people-icon%2Bcopy.png?MOD=AJPERES&amp;CACHEID=df863a1d-fc77-45ea-ab07-05357380ad14" alt="Senior and Special People Needs" name="Senior and Special People Needs" />


                                                                <a href="/wps/portal/MOIInternet/departmentcommittees/elderlydepartment">
                                                                    Services for the Elderly and People with Special Needs
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/conduct-certificate-icon%2Bcopy.png?MOD=AJPERES&amp;CACHEID=1e409062-0150-44b1-808c-40b0d989ef01" alt="Conduct Certificate" name="Conduct Certificate" />


                                                                <a href="/wps/portal/MOIInternet/infocenter/conductcertificate">
                                                                    Police Clearance Certificate
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/form-icon.png?MOD=AJPERES&amp;CACHEID=a6ef461d-3c14-4761-b306-c00b7e4666a4" alt="نموذج تسجيل الموردين" height="105" />


                                                                <a href="https://portal.moi.gov.qa/wps/portal/MOIInternet/departmentcommittees/galogistics/!?1dmy&amp;urile=wcm%3apath%3a%2Fwcmlib-internet-en%2Fsa-departmentcommittee%2Fgeneraladministrationoflogisticsandsupply%2Fprocurementdepartment%2Fsasd">
                                                                    Supplier Registration
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/website-icon%2Bcopy.png?MOD=AJPERES&amp;CACHEID=e62ed5b9-a1bb-43b7-893c-ecb3b1ab0183" alt="Related Website" name="Related Website" />


                                                                <a href="/wps/portal/MOIInternet/infocenter/relatedwebsites">
                                                                    Related Websites
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/ministry-statastics-icon%2Bcopy.png?MOD=AJPERES&amp;CACHEID=63e304de-4c77-4306-adf8-923272a43810" alt="Ministry Statistics" name="Ministry Statistics" height="105" />


                                                                <a href="/wps/portal/MOIInternet/infocenter/newministrystatistics">
                                                                    Ministry Statistics
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/emergency-service-icon%2Bcopy.png?MOD=AJPERES&amp;CACHEID=862bc67d-d10f-4013-a590-17af7724c405" alt="Emergency Service for Deaf" name="Emergency Service for Deaf" width="167" height="105" />


                                                                <a href="/wps/portal/MOIInternet/infocenter/emerservicedeaf">
                                                                    Emergency Service for Deaf
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/servicecenter%2Bcopy.png?MOD=AJPERES&amp;CACHEID=502b8ff9-1840-4d38-bec9-77739dbd1f1d" alt="Service Centers" height="105" />


                                                                <a href="https://portal.moi.gov.qa/wps/portal/MOIInternet/departmentcommittees/unifiedservices/?1dmy&amp;current=true&amp;urile=wcm%3apath%3a%2Fwcmlib-internet-en%2Fsa-departmentcommittee%2Fgeneraladministrationofnationalitybordersandexpatriateaffairs%2Funifiedservic">
                                                                    Service Centers
                                                                </a>




                                                            </div>
                                                        </div>
                                                        <div class="fullWidth">

                                                            <div class="qaccess-image">
                                                                <img src="<?php echo public_url(); ?>storage/connect/tander%2Bcopy.png?MOD=AJPERES&amp;CACHEID=cb94c965-12bf-4cee-b43b-08f6495f6f75" alt="Tenders &amp; Auctions" width="166" height="105" />


                                                                <a href="/wps/portal/MOIInternet/departmentcommittees/galogistics/?1dmy&amp;current=true&amp;urile=wcm%3apath%3a%2Fwcmlib-internet-en%2Fsa-departmentcommittee%2Fgeneraladministrationoflogisticsandsupply%2Fc24397">
                                                                    Tenders &amp; Auctions
                                                                </a>




                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sbclear"></div>



                                            <script>
                                                function updatePageCount() {
                                                    var total = $('div.qSlider .slick-track .fullWidth').length;
                                                    var start = ($($('div.qSlider .slick-track .slick-active').get(0)).data('slick-index') * 2 + 1);
                                                    var end = $('div.qSlider .slick-track .slick-active .fullWidth').length + ($($('div.qSlider .slick-track .slick-active').get(0)).data('slick-index') * 2);
                                                    var ofText = ' of ';

                                                    //$('span.qSliderPage').html(start + ' - ' + end + ofText + total);
                                                }

                                                $().ready(function() {
                                                    var divs = $("div.fullWidth");
                                                    for (var i = 0; i < divs.length; i += 2) {
                                                        divs.slice(i, i + 2).wrapAll("<div></div>");
                                                    }

                                                    $('.qSlider').slick({
                                                        // dots: true,


                                                        prevArrow: '<button class="slick-prev" data-role="none" type="button" ><span class="noshow">Previous</span></button>',
                                                        nextArrow: '<button class="slick-next" data-role="none" type="button" ><span class="noshow">Next</span></button>',

                                                        variableWidth: false,
                                                        infinite: false,
                                                        speed: 300,
                                                        slidesToShow: 5,
                                                        slidesToScroll: 1,
                                                        autoplay: true,
                                                        arrows: true,
                                                        responsive: [{
                                                            breakpoint: 1024,
                                                            settings: {
                                                                slidesToShow: 4,
                                                                slidesToScroll: 1
                                                                // centerMode: true,
                                                            }
                                                        }, {
                                                            breakpoint: 760,
                                                            settings: {
                                                                slidesToShow: 3,
                                                                slidesToScroll: 1,
                                                                dots: false
                                                            }

                                                        }, {
                                                            breakpoint: 500,
                                                            settings: {
                                                                slidesToShow: 2,
                                                                slidesToScroll: 1,
                                                                dots: false
                                                            }
                                                        }, {
                                                            breakpoint: 420,
                                                            settings: {
                                                                slidesToShow: 1,
                                                                slidesToScroll: 1,
                                                                dots: false
                                                            }

                                                        }]
                                                    });

                                                    $('div.qSlider').append('<span class="qSliderPage" style="margin-right: 72px;right:0 !important;"></span>');


                                                    updatePageCount();
                                                    $('div.qSlider button').on('click', function() {
                                                        updatePageCount()
                                                    });

                                                });


                                                $(function() {
                                                    $(".qaccess-image").click(function(e) {
                                                        e.preventDefault();
                                                        var targetCls = $(this).children('a').attr('class');
                                                        if (targetCls && targetCls == 'external') {
                                                            window.open($('a', this).attr('href'));
                                                        } else {
                                                            window.location.href = $('a', this).attr('href');
                                                        }
                                                    });

                                                    $('.qSlider a').focus(function(e) {
                                                        $('.qSlider').slick('pause');
                                                        var slick = $(this).closest('.slick-slide');
                                                        var slickPos = $(slick).parent().children().index($(slick));
                                                        $('.qSlider').slick('slickGoTo', slickPos)
                                                    });


                                                });
                                            </script>

                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Polls Survey, forums,emergency contacts html elements-->
                    <div class="container">
                        <!-- For Title -->
                        <div class='component-container wpthemeFull ibmDndRow wpthemeHeadlineContainer wpthemeRow wpthemeRow4of12 id-Z7_IAMI0240LO2P90Q521ASAK1133' name='surveyTitle'>
                            <div class='component-control id-Z7_IAMI0240LO2P90Q521ASAK1137'><span id="Z7_IAMI0240LO2P90Q521ASAK1137"></span>
                                <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                    <!-- marks the node the analytics tags for this portlet will be placed in -->


                                    <div class="asa.portlet" id="asa.portlet.Z7_IAMI0240LO2P90Q521ASAK1137" style="display:none;">
                                        <span class="asa.portlet.id">Z7_IAMI0240LO2P90Q521ASAK1137</span>


                                        <span class="asa.portlet.direction">ltr</span>
                                        <span class="asa.portlet.locale">en</span>
                                        <span class="asa.portlet.title">Web Content Viewer (JSR 286)</span>
                                        <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_IAMI0240LO2P90Q521ASAK1137" style="display:none;">

                                        </div>


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
                                            .surveyDiv {
                                                margin: 0px !important;
                                            }
                                        </style>
                                        <div class=" lightboxBg " style="margin: 10px 0 0px 0px;">
                                            <div class="container">
                                                <div class="qheaddiv">
                                                    <span>
                                                        <em class="fa fa-check-square-o fa-2x pull-left"></em>
                                                    </span>

                                                    <h1 class="heading ltPad pull-left">Public Opinion Survey Center</h1>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="surveyDiv">
                            <div class='component-container wpthemeTertiaryContainer wpthemeLeft col-xs-12 wpthemeCol col-md-4 ibmDndColumn wpthemeNarrow wpthemeCol4of12 survey-block id-Z7_IA84H101K0FR40A2LPOVQA30O0' name='left'>
                                <div class='component-control id-Z7_N90A19O0K87EB0AU2K1DM710G5'><span id="Z7_N90A19O0K87EB0AU2K1DM710G5"></span>
                                    <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                        <!-- marks the node the analytics tags for this portlet will be placed in -->


                                        <div class="asa.portlet" id="asa.portlet.Z7_N90A19O0K87EB0AU2K1DM710G5" style="display:none;">
                                            <span class="asa.portlet.id">Z7_N90A19O0K87EB0AU2K1DM710G5</span>


                                            <span class="asa.portlet.direction">ltr</span>
                                            <span class="asa.portlet.locale">en</span>
                                            <span class="asa.portlet.title">PollPortlets</span>
                                            <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_N90A19O0K87EB0AU2K1DM710G5" style="display:none;">

                                            </div>


                                        </div>

                                        <!-- asa.overlay marks the node that the AsaOverlayWidget will be placed in -->
                                        <div style="position:relative; z-index: 1;">
                                            <div class="analytics.overlay"></div>
                                        </div>
                                        <!-- Hide the text of the title, but still provide the lm-dynamic-title container for accessing the dynamic title -->
                                        <span class="wpthemeAccess">
                                            <span class="lm-dynamic-title asa.portlet.title a11yRegionLabel"><span lang="en" dir="ltr">PollPortlets</span></span>
                                        </span>
                                        <div class="wpthemeOverflowAuto">
                                            <!-- lm:control dynamic spot injects markup of layout control -->
                                            <script>
                                                if (typeof dojo == 'undefined') {
                                                    document.writeln("<scr" + "ipt src='<?php echo public_url(); ?>js/dojo.js' ></scr" + "ipt>");
                                                }
                                            </script>
                                            <script>
                                                dojo.require('ibm.portal.xml.xpath');
                                                dojo.require('ibm.portal.xml.xslt');
                                            </script>
                                            <script>
                                                dojo.require('ibm.portal.portlet.portlet');
                                            </script>
                                            <script>
                                                if (typeof(ibmPortalConfig) == "undefined") {
                                                    ibmPortalConfig = {
                                                        contentHandlerURI: "/wps/contenthandler/!ut/p/digest!s2Z4aR8sNRIeEv9KxILyUA/nm/oid:wps.portal.root"
                                                    };
                                                } else if (!ibmPortalConfig["contentHandlerURI"]) {
                                                    ibmPortalConfig["contentHandlerURI"] = "/wps/contenthandler/!ut/p/digest!s2Z4aR8sNRIeEv9KxILyUA/nm/oid:wps.portal.root";
                                                }
                                            </script>
                                            <div id='com.ibm.wps.web2.portlet.root.Z7_N90A19O0K87EB0AU2K1DM710G5' style='display: none;'>/wps/contenthandler/!ut/p/digest!s2Z4aR8sNRIeEv9KxILyUA/pm/oid:--portletwindowid--@oid:Z6_JHDI03S0KGL630ASLMC2CQ0006</div>
                                            <div id='com.ibm.wps.web2.portlet.preferences.Z7_N90A19O0K87EB0AU2K1DM710G5' style='display: none;' pageid='Z6_JHDI03S0KGL630ASLMC2CQ0006' configid='Z3_IAMI0240LOGB80A1AK435330I4' editdefaultsid='Z5_N90A19O0K87EB0AU2K1DM710G3'></div>
                                            <div id='com.ibm.wps.web2.portlet.user.Z7_N90A19O0K87EB0AU2K1DM710G5' style='display: none;'>/wps/contenthandler/!ut/p/digest!s2Z4aR8sNRIeEv9KxILyUA/um/secure/currentuser/profile?expandRefs=true</div>

                                            <link rel="stylesheet" href="<?php echo public_url(); ?>css/customPoll.css">
                                            <link rel="stylesheet" href="<?php echo public_url(); ?>css/jquery.dataTables.min.css" />

                                            <script src="<?php echo public_url(); ?>js/custom.validation.js" type="text/javascript"></script>

                                            <script src="<?php echo public_url(); ?>js/jquery.paginate.js" type="text/javascript"></script>
                                            <script src="<?php echo public_url(); ?>js/jquery.dataTables.min.js"></script>

                                            <form action="dl5/d5/L2dBISEvZ0FBIS9nQSEh/pw/Z7_N90A19O0K87EB0AU2K1DM710G5/act/id=0/p=pollSurveyAction=Yes/464690936492/=/#Z7_N90A19O0K87EB0AU2K1DM710G5" method="post" name="pollSurveyForm" id="pollSurveyForm">

                                                <input type="hidden" name="pollId" value="339">

                                                <div class="col-xs-12 pollsurvey">
                                                    <span class="pollicon"><img src='<?php echo public_url(); ?>storage/images/poll-icon.png' class="pull-left pad16 modalIcon" alt="poll Icon" /></span>
                                                    <h2 class="device-accordion-header blueheading h2-style2" tabindex="0">
                                                        Opinion Poll

                                                    </h2>


                                                    <div class="device-accordion-content pollSurvey" tabindex="0">
                                                        <p id="pollErrorMsgs" aria-live="assertive"></p>
                                                        <p>
                                                            Do you adhere to safe driving rules and practices while driving inside residential neighbourhoods?
                                                        </p>

                                                        <fieldset aria-hidden='false'>
                                                            <legend class="hidden">Options:</legend>

                                                            <div class="radio">
                                                                <input type="radio" name="optionId" id="optionId0" value="417" required style="margin-top: 2px;" /> <label for="optionId0">


                                                                    I always do



                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <input type="radio" name="optionId" id="optionId1" value="418" required style="margin-top: 2px;" /> <label for="optionId1">


                                                                    I do sometimes



                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <input type="radio" name="optionId" id="optionId2" value="419" required style="margin-top: 2px;" /> <label for="optionId2">


                                                                    I don&#039;t do



                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <input type="radio" name="optionId" id="optionId3" value="420" required style="margin-top: 2px;" /> <label for="optionId3">


                                                                    I don&#039;t know



                                                                </label>
                                                            </div>

                                                        </fieldset>

                                                        <div class="clearfix vote">


                                                            <ul class="list-unstyled">


                                                                <li><input type="submit" id="vote" name="vote" class="button pad04 col-md-3 col-sm-3 mobmar01 btnDarkgrey margin02" value='Vote' /></li>




                                                                <li>
                                                                    <button id="viewPollResultBtn" class="button pad11 col-md-3 col-sm-3 mobmar01 btnDarkgrey margin02" href="dl5/d5/L2dBISEvZ0FBIS9nQSEh/pw/Z7_N90A19O0K87EB0AU2K1DM710G5/res/id=pollResultResourceId/c=cacheLevelPage/p=pollId=339/=/" data-toggle="modal" data-target="#pollModal">
                                                                        Results
                                                                    </button>
                                                                </li>

                                                                <li>
                                                                    <button id="viewPollArchivetBtn" class="button pad11 mobmar01 btnDarkgrey margin02" href="dl5/d5/L2dBISEvZ0FBIS9nQSEh/pw/Z7_N90A19O0K87EB0AU2K1DM710G5/res/id=pollArchiveResourceId/c=cacheLevelPage/p=pollId=339/=/" data-toggle="modal" data-target="#pollModal">
                                                                        Archive
                                                                    </button>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <p class="pad07">
                                                            Vote duration: From
                                                            04/10/2020
                                                            To
                                                            31/12/2020
                                                            <p>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="pollModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="pollsurvey_header" aria-describedby="pollsurvey_body">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header serContHead margin00">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="???common.close???">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <span><img src='/wps/PA_Poll/images/poll-icon.png' class="pull-left pad16 modalIcon" alt="" /></span>
                                                                <h4 class="modal-title" id="pollsurvey_header">
                                                                    Results
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body" id="pollsurvey_body"></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- View Result Modal div ends -->

                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            <div class='component-container wpthemeLeft col-xs-12 wpthemePrimaryContainer wpthemeCol col-md-4 ibmDndColumn wpthemeNarrow wpthemeCol4of12 survey-block id-Z7_JHDI03S0KGL630ASLMC2CQ0007' name='ibmMainContainer'>
                                <div class='component-control id-Z7_IAMI0240LOECA0Q9HTHC300GR1'><span id="Z7_IAMI0240LOECA0Q9HTHC300GR1"></span>
                                    <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                        <!-- marks the node the analytics tags for this portlet will be placed in -->


                                        <div class="asa.portlet" id="asa.portlet.Z7_IAMI0240LOECA0Q9HTHC300GR1" style="display:none;">
                                            <span class="asa.portlet.id">Z7_IAMI0240LOECA0Q9HTHC300GR1</span>


                                            <span class="asa.portlet.direction">ltr</span>
                                            <span class="asa.portlet.locale">en</span>
                                            <span class="asa.portlet.title">Web Content Viewer (JSR 286)</span>
                                            <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_IAMI0240LOECA0Q9HTHC300GR1" style="display:none;">

                                            </div>


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

                                            <div class="discItems col-xs-12">

                                                <span class="disicon">
                                                    <i class="fa fa-pencil-square-o fa-2x"></i>
                                                </span>
                                                <h2 class="device-accordion-header blueheading h2-style2" tabindex="0">Public Opinion Survey</h2>




                                                <div class="device-accordion-content" style="padding-top : 5px;">
                                                    <div id="discussionForum">

                                                        <p style="padding-top :10px; padding-bottom: 10px; ">Your opinions matter to us greatly in developing our services and activities to achieve excellence in providing our services. We appreciate your participation in our surveys designed to achieve this goal&hellip;</p>

                                                        <div>

                                                            <a href="/wps/portal/MOIInternet/surveyscenter"><button class="button btnPadExt btnWidExt pull-right">
                                                                    More </button></a>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            <div class='component-container wpthemeLeft col-xs-12 wpthemeCol col-md-4 wpthemeSecondaryContainer ibmDndColumn wpthemeNarrow wpthemeCol4of12 survey-block id-Z7_JHDI03S0KGL630ASLMC2CQ00G0' name='right'>
                                <div class='component-control id-Z7_IA84H101KOTCD0A25RTFK73G63'><span id="Z7_IA84H101KOTCD0A25RTFK73G63"></span>
                                    <section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">
                                        <!-- marks the node the analytics tags for this portlet will be placed in -->


                                        <div class="asa.portlet" id="asa.portlet.Z7_IA84H101KOTCD0A25RTFK73G63" style="display:none;">
                                            <span class="asa.portlet.id">Z7_IA84H101KOTCD0A25RTFK73G63</span>


                                            <span class="asa.portlet.direction">ltr</span>
                                            <span class="asa.portlet.locale">en</span>
                                            <span class="asa.portlet.title">Web Content Viewer (JSR 286)</span>
                                            <div class="asa.portlet.tags" id="asa.portlet.tags.Z7_IA84H101KOTCD0A25RTFK73G63" style="display:none;">

                                            </div>


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
                                            <div class="discItems col-xs-12">

                                                <span class="disicon">
                                                    <i class="fa fa-group fa-2x"></i>
                                                </span>
                                                <h2 class="device-accordion-header blueheading h2-style2" tabindex="0">
                                                    CurrentDiscussion
                                                </h2>
                                                <div class="device-accordion-content" style="padding-top : 5px;">
                                                    <div id="discussionForum">
                                                        <a href="/wps/portal/MOIInternet/discussionforum">
                                                            <button type="submit" class="btn-link" onclick="wps/portal/MOIInternet/discussionforum" style=" text-align :right; ">
                                                                <span class="add-on"> <img src="/wps/wcm/connect/0fd34ade-ba15-4b07-a350-5018e766e3dd/1/discus-icon-1.png?MOD=AJPERES&amp;CACHEID=0fd34ade-ba15-4b07-a350-5018e766e3dd/1" alt="" title="" /> </span>
                                                                Wrong behaviors while driving
                                                            </button></a>


                                                        <p style="padding-top :10px; padding-bottom: 10px; "> Wrong behaviors while driving</p>



                                                        <a href="/wps/portal/MOIInternet/discussionforum">
                                                            <button type="submit" class="button btnPadExt btnWidExt" style="margin : 12px 8px;" onclick="wps/portal/MOIInternet/discussionforum">
                                                                Discuss 
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="wpthemeClear"></div>
            </div>
        </div>
    </div>
    <!--end main content-->

    <footer class="wpthemeFooter" role="contentinfo">
        <!-- <div class="wpthemeInner">	-->
        <!-- <a rel="dynamic-content" href="dyn-cs:id:80theme_footer"></a> -->
        <!-- Footer JSP -->


        <div class="container-fluid footerbg">
            <div class="container">
                <div class="col-md-1 col-sm-1 col-xs-12 text-center">

                    <a href="http://www.mada.org.qa/eAccessibility/EN/index.htm" target="_blank" style="display: block;">
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

                        <li><a href="/MoiPortalRestServices/rest/prayertimings/today/en" data-toggle="modal" data-target="#prayerModal">Prayer Timings</a></li>

                        <li><a href="/wps/portal/MOIInternet/accessibility">Accessibility</a></li>

                        <li><a target="_blank" href="http://qweather.gov.qa/Index.aspx">Weather forecast</a></li>

                        <li><a href="/wps/portal/MOIInternet/termsofuse">Terms of Use</a></li>

                        <li><a target="_blank" href="https://webmail.moi.gov.qa/owa/">MOI Web Email</a></li>

                        <li><a href="/wps/portal/MOIInternet/aboutqatar">About Qatar</a></li>

                        <li><a href="/wps/portal/MOIInternet/contactus">Contact Us</a></li>

                        <li><a href="/wps/wcm/connect/wcmlib-internet-en/site%20area%20for%20emergency%20contacts?srv=cmpnt&CACHE=NONE&cmpntname=wcmlib-internet-shared/NAV-EmergencyContactsModal&WCM_Page.ResetAll=TRUE&CONNECTORCACHE=NONE&source=library&CONTENTCACHE=NONE" data-toggle="modal" data-target="#emergencyModal">Emergency Contacts</a></li>


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
        <!--<a rel="dynamic-content" href="res:/MOIInternetTheme/themes/html/dynamicSpots/navigation.jsp?rootClass=wpthemeHeaderNav&startLevel=3&levelsDisplayed=1"></a>-->
        <!-- 	<div class="wpthemeClear"></div>
			</div>-->
    </footer><!-- page footer -->

    <!--</div> end frame -->

    <!-- This is responsible for bootstrapping the configuration for the javascript framework. 
        This is located here instead of the head section to improve client performance. 
	<div class="wpthemeComplementaryContent" id="wpthemeComplementaryContent" role="region" aria-labelledby="wpthemeComplementaryContentText">
		<span class="wpthemeAltText" id="wpthemeComplementaryContentText" >Complementary Content</span>
		<a rel="dynamic-content" href="co:config"></a>
	</div>
	-->

</body>

</html>