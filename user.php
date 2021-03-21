<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />

    <link rel="shortcut icon" href="favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <title>Minya Hotels | Welcome</title>
    <link rel="stylesheet" href="css/popup.css">
</head>

<body data-color="mainColor">
    <!-- Start The Scroll To Top -->
    <div id="scroll-top">
        <i class="fa fa-chevron-up fa-2x"></i>
    </div>
    <!--loading-->
    <div class="loading red">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_four"></div>
                <div class="object object_three"></div>
                <div class="object object_two"></div>
                <div class="object object_one"></div>
            </div>
        </div>
    </div>
    <!--header navbar-->
    <header class="menu-3 type-5 bgtransparent">
        <div class="top-header-bar">
            <div class="container">
                <div class="left-col">
                    <a href="#"><i class="fa fa-phone"></i>01065165640</a>
                    <a href="#"><i class="fa  fa-map-marker"></i>Minya</a>

                </div>
                <div class="right-col">
                    <div class="folow">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                    <form action="?" class="serach-item">
                        <button type="submit" class="fa fa-search"></button>
                        <input type="text" placeholder="Search...">
                    </form>

                </div>
            </div>
        </div>

        <div class="nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="index.html" class="logo">
                            <img src="img/minyalogo1.png" alt="Minya Tours">
                        </a>
                        <div class="nav-menu-icon">
                            <a href="#"><i></i></a>
                        </div>
                        <nav class="menu">
                            <ul>
                                <li class="type-1">
                                    <a href="index.html">home<span class="fa fa-angle-down"></span></a>
                                </li>
                                <li class="type-1 active"><a href="hotels.html">Hotels<span class="fa fa-angle-down"></span></a>

                                </li>
                                <li class="type-1"><a href="cars.html">Cars<span class="fa fa-angle-down"></span></a>

                                </li>
                                <li class="type-1"><a href="tours.html">Tours<span class="fa fa-angle-down"></span></a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- INNER-BANNER slider -->
    <div class="inner-banner style-2">
        <img class="center-image  " src="img/imges/cover.jpg" alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">

                        <h4 class="color-white">hi <b><?php echo htmlspecialchars($_SESSION["user_name"]); ?></b> Welcome</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="detail-wrapper padd-40">
        <!-- Text Here -->
        <div class="text-center">
            <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
        </div>


    </div>

    <footer class="bg-dark type-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-block">
                        <img src="img/minyalogo1.png" alt="" class="logo-footer">
                        <div class="f_text color-grey-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore magna aliqua. Ut aliquip ex ea commodo consequat.</div>
                        <div class="footer-share">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-pinterest"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
                    <div class="footer-block">
                        <h6>Travel News</h6>
                        <div class="f_news clearfix">
                            <a class="f_news-img black-hover" href="#">
                                <img class="img-responsive" src="img/5.jpg" alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="f_news-content">
                                <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                                <span class="date-f">Feb 18, 2021</span>
                                <a href="#" class="r-more">read more</a>
                            </div>
                        </div>
                        <div class="f_news clearfix">
                            <a class="f_news-img black-hover" href="#">
                                <img class="img-responsive" src="img/6.jpg" alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="f_news-content">
                                <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                                <span class="date-f">Feb 18, 2021</span>
                                <a href="#" class="r-more">read more</a>
                            </div>
                        </div>
                        <div class="f_news clearfix">
                            <a class="f_news-img black-hover" href="#">
                                <img class="img-responsive" src="img/5.jpg" alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="f_news-content">
                                <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                                <span class="date-f">Feb 18, 2021</span>
                                <a href="#" class="r-more">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-block">
                        <h6>Subscribe</h6>
                        <form action="#" class="footer-form">
                            <div class="form-input">
                                <input type="email" placeholder="Enter your email" required>
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <input type="submit" value="submit" class="bg-aqua">
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-block">
                        <h6>Contact Info</h6>
                        <div class="contact-info">
                            <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>Minya</span>
                            </div>
                            <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:201065165640">+01065165640</a></div>
                            <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:">ota@mail.com</a></div>
                            <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a href="#">minya@ota.com</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-link bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <span>&copy; 2021 All rights reserved By ITI</span>
                        </div>
                        <ul>
                            <li><a class="link-aqua" href="#">Privacy Policy </a></li>
                            <li><a class="link-aqua" href="#">About Us</a></li>
                            <li><a class="link-aqua" href="#">Support </a></li>
                            <li><a class="link-aqua" href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/jquery.viewportchecker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/all.js"></script>
    <script src="./js/myJquery.js"></script>
</body>

</html>