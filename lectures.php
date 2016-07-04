<?php /**

@filesource
@author SeungwanJo <wh7923@gmail.com>
@copyright 2016 UNClab
@version [ 1.0.0 ]
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
                    <h2>Lectures</h2>
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
    Company Description Section Start
================================================== -->
<section class="blankpage">
    <div class="container">
        <div class="row">

            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="block" style="text-align:justify">
                    <h3>Lectures</h3>
                    <h4>Undergraduate</h4>
                    <ul>
                        <li>- Electrical Circuit Theory(회로이론)</li>
                        <li>- Electronic Circuit System (전자회로)</li>
                        <li>- Internetwork Engineering(인터넷공학)</li>
                        <li>- Wireless Communication Networks(무선통신망)</li>
                        <li>- Network Laboratory(네트워크실험)</li>
                        <li>- Information Communication Laboratory(정보통신실험)</li>
                        <li>- Capston Design(1)(2)(종합설계(1)(2))</li>
                    </ul>
                    <h4>Graduate</h4>
                    <ul>
                        <li>- Wireless Mobile Networks(1)(무선이동네트워크(1))</li>
                        <li>- Wireless Mobile Networks(2)(무선이동네트워크(2))</li>
                        <li>- Optimization Theory(최적화이론)</li>
                        <li>- Special Topics on Computer Networks(컴퓨터네트워크특론)</li>
                        <li>- Special Topics on Communication Networks(통신네트워크특론)</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3"></div>

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