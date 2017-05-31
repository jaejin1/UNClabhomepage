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
                            <h2>Professor</h2>
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
        <section class="memberinfo">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <img src="images/professor.png" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-9">
                        <div class="block" style="text-align:justify">
                            <h3>Prof. Beongku An</h3>
                            <h4>Contact information</h4>
                            <ul>
                                <li> - Department of Computer & Information Communication Engineering
                                    Hongik University</li>
                                <li> - Ubquitous Networks & Convergence Laboratory (UNC Lab)</li>
                                <li> - E-mail : beongku@hongik.ac.kr</li>
                                <li> - Phone (office): +82-44-860-2243, Fax: +82-44-865-0460</li>
                            </ul>
                            <h4>Education</h4>
                            <ul>
                                <li> - 2002: PhD, New Jersey Institute of Technology (NJIT), Dept. of Electrical and Computer Engineering, New Jersey,USA</li>
                                <li> - 1996: MS, New York University (Polytechnic), Dept. of Electrical and Computer Engineering, New York, USA</li>
                                <li> - 1988: BS, Kyungpook National University, Electronic Engineering, Daegu, Republic of Korea</li>
                            </ul>
                            <h4>Work Experience</h4>
                            <ul>
                                <li> - 2003 - present: Professor, Hongik University, Republic of Korea</li>
                                <li> - 1997 - 2002: Lecturer & RA, New Jersey Institute of Technology (NJIT), USA</li>
                                <li> - 1989 - 1994: Senior Researcher, RIST, Republic of Korea</li>
                            </ul>
                            <h4>Honours and/or Awards</h4>
                            <ul>
                                <li> - 2005 - 2011: Marquis Who's  Who in Science and Engineering (was listed)</li>
                                <li> - 2007 - 2015: Marquis Who's  Who in the World (was listed)</li>
                                <li> - 2007, 2010: IBC (was listed)</li>
                                <li> - 2007: Haedong Prize (IEEK), Korea </li>
                                <li> - 2001: Best Award Paper, KSEA, USA</li>
                            </ul>
                            <h4>Memberships/Affiliations</h4>
                            <ul>
                                <li> - IEIE (The Institute of Electronics and Information Engineers) Computer Society / President</li>
                                <li> - KICS (Korea Information and Communications Society) / Membership Committee</li>
                                <li> - IWIT (Institute of Webcasting and Internet Television) / Vice President</li>
                                <li> - KMS (Korea Multimedia Society) / Senior Member</li>
                                <li> - KST (Korea Society of Transportation) / Senior Member</li>
                                <li> - IEEE / Member, ACM / Member, IEICE / Member</li>
                                <li> - ICGHIT / General Chair</li>
                            </ul>
                            <a target="_blank" href="http://unclab.hongik.ac.kr/Publications & Projects.pdf#page=1"><h4>Publications and Projects</h4></a>
                            <h4>Research Fields</h4>
                            <ul>
                                <li> - Ad-hoc Networks, Sensor Networks, Home Networks</li>
                                <li> - QoS Routing & Multicast, Network Coding</li>
                                <li> - Cognitive Radio Networks</li>
                                <li> - Cooperative Communications, Cross-Layer Technology</li>
                                <li> - Mobile Clouding, IoT</li>
                                <li> - VLC (Visible Light Communication)</li>
                                <li> - Physical Layer Security</li>
                                <li> - Mobility Management, Location-Based Technology</li>
                                <li> - Mobile IP & TCP/IP Protocols </li>
                                <li> - Healthcare & Telemedicine</li>
                                <li> - Bio Information Communications</li>
                                <li> - Content Centric Networks</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
           ==================================================
           Call To Action Section Start
           ================================================== -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title" >Contact</h2>
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
        <? Footer::render(); ?>
         <!-- /#footer -->
        
    </body>
</html>