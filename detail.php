<!DOCTYPE html>
<html lang="en">

<?php
include_once "core/meta.php";
include 'core/dbconnection.php';
$conn = OpenCon();
mysqli_set_charset($conn, "utf8");

if(isset($_GET)) {
    $id = mysqli_real_escape_string($conn,intval($_GET['id']));
}else{
    $id = 1;
}


$querySingleApartment = "SELECT * FROM blog where ID = '$id' LIMIT 1";
$result = $conn->query($querySingleApartment);
$row = $result->fetch_array(MYSQLI_ASSOC);

?>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="doc-page-load"></div>
    </div>


    <header class="header-area">
        <?php
        include_once "core/top-header.php";
        ?>
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <a class="navbar-brand" href="index.php"
                                ><img style="max-width: 50%;" src="img/core-img/logo_new.png" alt="Logo">
                                </a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Əsas<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.php">Haqqında</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="services.php">Xidmətlər</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="blog.php">Xəbərlər</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">Əlagə</a>
                                        </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a href="#" class="btn medilife-appoint-btn ml-30">Dərhal <span>əlagə</span> </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="medilife-blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <div class="single-blog-area">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="img/blog-img/4.jpg" alt="">
                            <!-- Post Date -->
                            <div class="post-date">
                                <a href="#">Jan 23, 2018</a>
                            </div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img style="border-radius: 20px !important;" src="img/bg-img/uzman.png"  alt=""></a>
                            </div>
                            <a href="#" class="headline mb-0"><?php echo $row['title']; ?> </a>
                            <div class="post-meta">
                                <a href="#" class="post-author-name">by <?php echo $row['author']; ?></a> | <a href="#" class="post-catagory">Dental</a>
                            </div>
                            <p><?php echo $row['content']; ?></p>

                        </div>
                        <!-- Post Content -->

                    </div>


                    <!-- Leave A Comment -->
                </div>

                <div class="col-12 col-lg-4">
                    <div class="medilife-blog-sidebar-area">

                        <!-- Search Widget -->
<!--                        <div class="search-widget-area mb-50">-->
<!--                            <form action="#" method="get">-->
<!--                                <input type="search" placeholder="Type Any Keywords">-->
<!--                                <input type="submit" value="Search">-->
<!--                            </form>-->
<!--                        </div>-->
                        

                        <!-- Latest News -->
                        <div class="latest-news-widget-area mb-50">
                            <h5>Latest News</h5>
                            <div class="widget-blog-post">
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex align-items-center">
                                    <div class="widget-post-thumbnail pr-3">
                                        <img src="img/blog-img/ln1.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">A big discovery for medicine</a>
                                        <p>Dec 02, 2017</p>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex align-items-center">
                                    <div class="widget-post-thumbnail pr-3">
                                        <img src="img/blog-img/ln2.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">Dentistry for everybody</a>
                                        <p>Dec 02, 2017</p>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex align-items-center">
                                    <div class="widget-post-thumbnail pr-3">
                                        <img src="img/blog-img/ln3.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">When it’s time to take pills</a>
                                        <p>Dec 02, 2017</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- medilife Emergency Card -->
                        <div class="medilife-emergency-card bg-img bg-overlay" style="background-image: url(img/bg-img/about1.jpg);">
                            <i class="icon-smartphone"></i>
                            <h2>For Emergency calls</h2>
                            <h3>+12-823-611-8721</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-100">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>Latest News</h6>
                            </div>
                            <div class="widget-blog-post">
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="img/blog-img/ln1.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">Better Health Care</a>
                                        <p>Dec 02, 2017</p>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="img/blog-img/ln2.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">A new drug is tested</a>
                                        <p>Dec 02, 2017</p>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="img/blog-img/ln3.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">Health department advice</a>
                                        <p>Dec 02, 2017</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>Contact Form</h6>
                            </div>
                            <div class="footer-contact-form">
                                <form action="#" method="post">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="footer-name" id="footer-name" placeholder="Name">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="footer-email" id="footer-email" placeholder="Email">
                                    <textarea name="message" class="form-control border-top-0 border-right-0 border-left-0" id="footerMessage" placeholder="Message"></textarea>
                                    <button type="submit" class="btn medilife-btn">Contact Us <span>+</span></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>News Letter</h6>
                            </div>

                            <div class="footer-newsletter-area">
                                <form action="#">
                                    <input type="email" class="form-control border-0 mb-0" name="newsletterEmail" id="newsletterEmail" placeholder="Your Email Here">
                                    <button type="submit">Subscribe</button>
                                </form>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-footer-content">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
<p>Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>