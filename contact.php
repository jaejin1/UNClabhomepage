<?php /**
 @filesource
 @author SeungwanJo <wh7923@gmail.com
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
                            <h2>Contact</h2>
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
        </section><!--/#page-header-->


        <!-- 
        ================================================== 
            Contact Section Start
        ================================================== -->
        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle">Find Us</h2>
                            <p class="subtitle-des">
                            </p>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3202.212014084529!2d127.28422157937074!3d36.62128298349752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDM3JzE2LjYiTiAxMjfCsDE3JzEwLjMiRQ!5e0!3m2!1sko!2s!4v1459151954157" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="row address-details">
                    <div class="col-md-3">
                        <div class="address">
                            <i class="ion-ios-location-outline"></i>
                            <h5>(30016) , 세종특별시 조치원읍 <br>세종로,2639 홍익대학교 D동 422-1호</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="address">
                            <i class="ion-ios-location-outline"></i>
                            <h5>(30016) , HongikUnv. D 422-1 <br>2639, Sejong-ro, Jochiwon-eup, Sejong</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="email">
                            <i class="ion-ios-email-outline"></i>
                            <p>beongku@hongik.ac.kr</p>
                            <p>sks11521@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>(+82)044-860-2392<br>Fax - (+82)044-865-0460</p>
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


