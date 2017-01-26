<?php /**
 * filesource
 * author SeungwanJo <wh7923@gmail.com>
 * copyright 2016 UNClab
 * version [ 1.0.0 ]
 */
class index {

}

include_once $_SERVER['DOCUMENT_ROOT'].'/templete/common.php';
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <? Basicpage::render()?>
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- slider js -->
        <script src="js/slider.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <? Header::render()?>

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Graduatestudents</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Ph.D Team Section Start
        ================================================== -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <h2 class="subtitle text-center">Ph.D Students</h2>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="team-member   "  >
                            <div class="team-img">
                                <img src="images/team/thnu.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Tri-Nhu Do</h3>
                            <p class="team_designation">4 Semester</p>
                            <p class="team_text"> - Cognitive Radio Ad-hoc Networks
                            <br>- Wireless energy harvesting
                            <br>- physical layer security
                            </p>
                            <p>
                                <i class="ion-android-mail"></i>  dotrinhu@gmail.com
                            </p>

                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </section>

        <!--
        ==================================================
            M.S. Team Section Start
        ================================================== -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <h2 class="subtitle text-center">M.S Students</h2>
                    <div class="col-md-4">
                        <div class="team-member   "  >
                            <div class="team-img">
                                <img src="images/team/simbr.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Kyu Seong Shim </h3>
                            <p class="team_designation">4 Semester</p>
                            <p class="team_text">- Wireless Networks<br>
                                - physical layer security<br>
                                - Routing Protocols</p>
                            <p>
                                <i class="ion-android-mail"></i>  sks11521@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <!--
                    <div class="col-md-4">
                        <div class="team-member   "   >
                            <div class="team-img">
                                <img src="images/team/simyo.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Kyu Hyeon Shim </h3>
                            <p class="team_designation">4 Semester</p>
                            <p class="team_text">- Wireless energy harvesting<br>
                                - Electronic Circuits</p>
                            <p>
                                <i class="ion-android-mail"></i>  lread714@naver.com
                            </p>
                        </div>
                    </div>
                    -->
                    <div class="col-md-4">
                        <div class="team-member   "   >
                            <div class="team-img">
                                <img src="images/team/Quang.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Nhat-Quang Le </h3>
                            <p class="team_designation">2 Semester</p>
                            <p class="team_text">- Wireless energy harvesting
                                <br>- physical layer security</p>
                            <p>
                                <i class="ion-android-mail"></i>  lenhatquangsg@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ==================================================
        Footer Section Start
        ================================================== -->
        <? Footer::render(); ?>
         <!-- /#footer -->
        
    </body>
</html>