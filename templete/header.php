<?php
/**
 * filename: basicpage.php.
 * author: Jo_seungwan <wh7923@gmail.com>
 * version [1.0.0]
 */
class Header{
	public static function render(){

		echo '<header id="top-bar" class="navbar-fixed-top animated-header">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <div class="navbar-brand">
                    <a href="index.php" >
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <!-- /logo -->
            </div>
            <!-- main menu -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php" >Home</a>
                        </li>
                        <li><a href="professor.php">Professor</a></li>
                        <li class="dropdown">
                            <a href="GraduateStudents.php" class="dropdown-toggle" data-toggle="dropdown">Member <span class="caret"></span></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="GraduateStudents.php">Graduate Students</a></li>
                                    <li><a href="UndergraduateStudents.php">U.R Students</a></li>
                                    <li><a href="alumi.php">Alumi</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="project.php">Project</a></li>
                        <li class="dropdown">
                            <a href="internationalJ.php" class="dropdown-toggle" data-toggle="dropdown">Publications<span class="caret"></span></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="internationalJ.php">International Jouranl</a></li>
                                    <li><a href="DomesticeJ.php">Domestic Jouranl</a></li>
                                    <li><a href="internationalC.php">International Conference</a></li>
                                    <li><a href="DomesticeC.php">Domestic Conference</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href = "PhotoZone.php">Gallery</a></li>
                        <li><a href="lectures.php">Lectures</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>';

	}
}
