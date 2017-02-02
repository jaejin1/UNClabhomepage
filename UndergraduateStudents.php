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
                    <h2>Undergraduatestudent</h2>
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
    U.R Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center">U.R Students</h2>
            <!--
            <div class="col-md-3">
                <div class="team-member   "  >
                    <div class="team-img">
                        <img src="images/team/joseungwan.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Seungwan Jo</h3>
                    <p class="team_designation">Senior</p>
                    <p class="team_text"> - Visible Light Communication<br>- Indoor location<br> - Wireless Network</p>
                    <p>
                        <i class="ion-android-mail"></i>  wh7923@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="team-member   "  >
                    <div class="team-img">
                        <img src="images/team/honoh.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Hoon Oh</h3>
                    <p class="team_designation">Senior</p>
                    <p class="team_text"> - Visible Light Communication<br>- Electronic Circuits<br> - Mobile Cloud</p>
                    <p>
                        <i class="ion-android-mail"></i>  stockhoon5@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="team-member   "  >
                    <div class="team-img">
                        <img src="images/team/yeonjae.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Yeonjea Lee</h3>
                    <p class="team_designation">Senior</p>
                    <p class="team_text"> - Visible Light Communication<br>- Electronic Circuits<br> - Mobile Cloud</p>
                    <p>
                        <i class="ion-android-mail"></i>  yeonjea115@gmail.com
                    </p>
                </div>
            </div>
        </div>
        <div class="row">-->
            <div class="col-sm-3">
                <div class="team-member   "  >
                    <div class="team-img">
                        <img src="images/team/mrkim.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Kihoon Kim</h3>
                    <p class="team_designation">Sophomore</p>
                    <p class="team_text"> - Visible Light Communication<br>- Electronic Circuits<br> - Mobile Cloud</p>
                    <p>
                        <i class="ion-android-mail"></i>  kkh5394@naver.com
                    </p>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <div class="team-member   "  >
                    <div class="team-img">
                        <img src="images/team/soobin.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Soobin Park</h3>
                    <p class="team_designation">Sophomore</p>
                    <p class="team_text"> - Visible Light Communication<br>- Electronic Circuits<br> - Mobile Cloud</p>
                    <p>
                        <i class="ion-android-mail"></i>  soobin950@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <div class="team-member   "  >
                    <div class="team-img">
                        <img src="images/team/jaejin.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Jaejin Lee</h3>
                    <p class="team_designation">Sophomore</p>
                    <p class="team_text"> - Visible Light Communication<br>- Electronic Circuits<br> - Mobile Cloud</p>
                    <p>
                        <i class="ion-android-mail"></i>  opiximeo@gmail.com
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <div class="team-member   "  >
                    <div class="team-img">
                        <img src="" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Hansol Cho</h3>
                    <p class="team_designation">Sophomore</p>
                    <p class="team_text"> - Visible Light Communication<br>- Electronic Circuits<br> - Mobile Cloud</p>
                    <p>
                        <i class="ion-android-mail"></i>
                    </p>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <div class="team-member   "  >
                    <div class="team-img">
                        <img src="" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Ilwon Choi</h3>
                    <p class="team_designation">Sophomore</p>
                    <p class="team_text"> - Visible Light Communication<br>- Electronic Circuits<br> - Mobile Cloud</p>
                    <p>
                        <i class="ion-android-mail"></i>
                    </p>
                </div>
            </div>
            <div class="col-sm-2"></div>
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