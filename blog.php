<!DOCTYPE html>
<html lang="en">

<?php
    include_once "core/meta.php";
?>
<body>
    <div id="preloader">
        <div class="medilife-load"></div>
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
                        <h3 class="breadcumb-title">Blog</h3>
                        <p>Bizim haqqında daha məlumatlı olun</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="medilife-blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <!-- Single Blog Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-area bg-gray mb-50">
                                <!-- Post Thumbnail -->
                                <div class="blog-post-thumbnail">
                                    <img src="img/blog-img/1.jpg" alt="">
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">Jan 23, 2018</a>
                                    </div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-author">
                                        <a href="#"><img src="img/blog-img/p1.jpg" alt=""></a>
                                    </div>
                                    <a href="#" class="headline">New drog release soon</a>
                                    <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    <a href="#" class="comments">3 Comments</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-area bg-gray mb-50">
                                <!-- Post Thumbnail -->
                                <div class="blog-post-thumbnail">
                                    <img src="img/blog-img/2.jpg" alt="">
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">Jan 23, 2018</a>
                                    </div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-author">
                                        <a href="#"><img src="img/blog-img/p2.jpg" alt=""></a>
                                    </div>
                                    <a href="#" class="headline">Free dental care</a>
                                    <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    <a href="#" class="comments">3 Comments</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-area bg-gray mb-50">
                                <!-- Post Thumbnail -->
                                <div class="blog-post-thumbnail">
                                    <img src="img/blog-img/3.jpg" alt="">
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">Jan 23, 2018</a>
                                    </div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-author">
                                        <a href="#"><img src="img/blog-img/p3.jpg" alt=""></a>
                                    </div>
                                    <a href="#" class="headline">Good news for the pacients</a>
                                    <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    <a href="#" class="comments">3 Comments</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-area bg-gray mb-50">
                                <!-- Post Thumbnail -->
                                <div class="blog-post-thumbnail">
                                    <img src="img/blog-img/1.jpg" alt="">
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">Jan 23, 2018</a>
                                    </div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-author">
                                        <a href="#"><img src="img/blog-img/p1.jpg" alt=""></a>
                                    </div>
                                    <a href="#" class="headline">New drog release soon</a>
                                    <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    <a href="#" class="comments">3 Comments</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-area bg-gray mb-50">
                                <!-- Post Thumbnail -->
                                <div class="blog-post-thumbnail">
                                    <img src="img/blog-img/2.jpg" alt="">
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">Jan 23, 2018</a>
                                    </div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-author">
                                        <a href="#"><img src="img/blog-img/p2.jpg" alt=""></a>
                                    </div>
                                    <a href="#" class="headline">Free dental care</a>
                                    <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    <a href="#" class="comments">3 Comments</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-area bg-gray mb-50">
                                <!-- Post Thumbnail -->
                                <div class="blog-post-thumbnail">
                                    <img src="img/blog-img/3.jpg" alt="">
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">Jan 23, 2018</a>
                                    </div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-author">
                                        <a href="#"><img src="img/blog-img/p3.jpg" alt=""></a>
                                    </div>
                                    <a href="#" class="headline">Good news for the pacients</a>
                                    <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    <a href="#" class="comments">3 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Pagination Area -->
                    <div class="pagination-area mt-50">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include "core/foot.php";
    ?>
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