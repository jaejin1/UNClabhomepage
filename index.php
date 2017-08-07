<?php /**
/**
 * 첫화면
 * filename: index.php.
 * author: Jo_seungwan <wh7923@gmail.com>
 * version [1.0.0]
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
        <meta property="og:title" content="UNC Lab">
        <meta property="og:description" content="Our Ubiquitous networks & Convergence laboratory (UNC Lab) is led by Professor Beongku An.">
        <meta property="og:image" content="https://github.com/jaejin1/UNClabhomepage/blob/master/images/about/labpicture.jpg">

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
        Slider Section Start
        ================================================== -->
        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block">

                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="animated cd-headline slide">
                                <span>Ubiquitous Networks Convergence Lab</span><br>
<!--                                <span class="cd-words-wrapper">-->
<!--                                    <b class="is-visible">Hongik Unversity</b>-->
<!--                                    <b>Computer Impermation Comunication</b>-->
<!--                                    <b>Lab</b>-->
<!--                                </span>-->
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="animated">
                                    Our Ubiquitous Networks & Convergence Laboratory (UNC Lab.) is led by Professor Beongku An.
                                </h2>
                            <a class="btn-lines dark light animated smooth-scroll btn btn-default btn-green" href="#works" data-section="#resarch" style="padding-top: 10px; padding-bottom: 10px;" >View Resarch</a>

                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
            <!--
            ==================================================
            Introduction of Laboratory Start
            ================================================== -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block" style="text-align:justify">
                                <h2>
                                Introduction of Laboratory
                                </h2>
                                <p>
                                    Our Ubiquitous Networks & Convergence Laboratory (UNC Lab.) is led by Professor Beongku An. The UNC Lab. conducts research in various areas of ubiquitous networks and convergence technology since 2003. Currently, our research focuses on Cooperative Communication, Routing & Multicast, Network Coding, Resource Optimization, Cross-Layer Technology, Healthcare & Telemedicine, Cognitive Radio Networks in Ad-hoc Networks, Sensor Networks, Wireless Internet, Home Networks, Cellular Networks, Mesh Networks, Satellite Networks, VLC (Visible Light Communication, Content Centric Networks, etc.
                                </p>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block">
                                <img style="margin-top: 78px" src="images/about/labpicture.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            <!--

            ==================================================
            Resarch Section Start
            ================================================== -->
            <section id="research">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Research</h1>
                        <!-- <p class="wow fadeInDown" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
                        </p> -->
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12" style="text-align:justify">
                            <!-- <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms"> animation effect-->
                            <div>
                                <div class="media-left">
                                    <div>
                                        <img src="images/resarcharea/mobile.png">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="media-heading">Mobile Communications & Network</h4>
                                    <ul class="lsp">
                                      <li><p>- Ad-hoc Networks & Sensor Networks</p></li>
                                      <li><p>- Ubiquitous Networks</p></li>
                                      <li><p>- Wireless Internet</p></li>
                                      <li><p>- Cellular Networks</p></li>
                                    </ul>
                                    <!-- <p>Ad-hoc Networks & Sensor Networks<br>Ubiquitous Networks<br>Wireless Internet <br>Cellular Networks</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/routing.png">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading">Routing & Multicast</h4>
                                  <ul class="lsp">
                                    <li><p>- QoS Routing & Multicast: Reliable Routing & Multicast, Power Saving Routing & Multicast</p></li>
                                    <li><p>- Network Coding</p></li>
                                    <li><p>- Location-based Services</p></li>
                                    <li><p>- Clustering & Mobility Management</p></li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/cooperative.png">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading">Cooperative Communications & Cross-Layer Technology</h4>
                                  <ul class="lsp">
                                    <li><p>- Efficient Transmission  using Cooperative Transmission</p></li>
                                    <li><p>- Resource Optimization using Cross-Layer Technology</p></li>
                                    <li><p>- Relay Selection</p></li>
                                    <li><p>- Outage Probability Modeling</p></li>
                                    <li><p>- Cognitive Radio Networks</p></li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/ubiquitous.png">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading">Ubiquitous Healthcare & Bio Information Communications</h4>
                                  <ul class="lsp">
                                    <li><p>- Bio Sensor Networks based Healthcare Monitoring & Tel Medicine</p></li>
                                    <li><p>- Bio Sensor Networks based U-Animal Farm Monitoring & Tel Medicine</p></li>
                                    <li><p>- Bio Sensor Networks based Marine Monitoring Services</p></li>
                                    <li><p>- Bio Sensor Networks based Natural Environments Monitoring Services</p></li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/vlc.jpeg">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading">Visible Light Communications(VLC)</h4>
                                  <ul class="lsp">
                                    <li><p>- Indoor and Outdoor VLC-based Ubiquitous Networks</p></li>
                                    <li><p>- Modulation Techniques in Visible Light Communications</p></li>
                                    <li><p>- VLC-based Applications: Underwater Communications, Aviation, Wireles Mobile Connectivity, Traffic Lights, Hospital & Healthcare</p></li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/cognitive.jpg">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading">Cognitive Radio Networks</h4>
                                  <ul class="lsp">
                                    <li><p>- Spectrum Sensing</p></li>
                                    <li><p>- Route & Network Stabillity in Cognitive Radio Ad-Hoc Networks(CRAHNs)</p></li>
                                    <li><p>- Cooperative Transmission & Routing in CRAHNs</p></li>
                                    <li><p>- Throughput</p></li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#feature -->

            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title">Contact</h2>
                                <a href="contact.php" class="btn btn-default btn-contact">Contact With Me</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <? Footer::render(); ?> <!-- /#footer -->

        </body>
    </html>
