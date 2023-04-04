<!DOCTYPE html>
<html lang="en">

<?php
include("core/meta.php");
include 'core/dbconnection.php';
?>

<body>
<div id="preloader">
    <div class="doc-page-load"></div>
</div>

<header class="header-area">
    <?php
    include "core/top-header.php";
    ?>
    <div class="main-header-area" id="stickyHeader">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <a class="navbar-brand" style="width: 112px; border-radius:5px; background-color: #f0ffff;"
                               href="index.php"
                            ><img src="img/core-img/logo_new.png" alt="Logo">
                            </a>


                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false"
                                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse" id="medilifeMenu">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Əsas</a>
                                    </li>
                                    <li class="nav-item dropdown">

                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="about-us.php">Haqqında<span
                                                    class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="services.php">Xidmətlər</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.php">Xəbərlər</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Əlagə</a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="breadcumb-area bg-img gradient-background-overlay"
         style="background-image: url(img/core-img/breadcumb-1-1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Haqqımızda</h3>
                    <p>Bizi daha yaxından tanıyın</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="medilife-features-area section-padding-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="features-content">
                    <h1>Uzman Dr. Günel Məmmədova</h1>
                    <p>Ən prioritetimiz, xəstələrimizin rifahı və məmnuniyyətidir.</p>
                    <a href="#" class="btn medilife-btn mt-50">Xidmətlər <span>+</span></a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="features-thumbnail">
                    <img src="img/bg-img/d8.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="medilife-video-area section-padding-100 bg-overlay bg-img"
         style="background-image: url(img/bg-img/video.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <div class="video-box bg-overlay-black">
                    <img src="img/bg-img/uzman.jpeg" alt="">
                    <div class="play-btn">
                        <a class="popup-video" href="http://www.youtube.com/watch?v=ne6GEXM_ejo"><img
                                    src="img/core-img/play.png" alt=""></a>
                        <h6>Həyatımızdan bir gün</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="video-content">
                    <h2>Uzman Dr. Günəl Məmədova</h2>
                    <p>Dr. Günəl Məmmədova - Marmara üniversitetinində, cərrahpaşa fakultəsində təhsil almışdır.
                        Uzmanlığı MarmaraUniversitetində keşmiş. Bundan əlavə Memorial Hospitals İstanbul 5 illik iş
                        təcrübəsinə malikdir</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="medilife-tabs-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="medilife-tabs-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="institution-tab" data-toggle="tab" href="#institution" role="tab"
                               aria-controls="institution" aria-selected="false">Təhsil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab"
                               aria-controls="faq" aria-selected="false">Uzmanlıq</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="specialities-tab" data-toggle="tab" href="#specialities"
                               role="tab" aria-controls="specialities" aria-selected="true">İş təcrübəsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="laboratory-tab" data-toggle="tab" href="#laboratory" role="tab"
                               aria-controls="laboratory" aria-selected="false">Konfraslar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="emergencies-tab" data-toggle="tab" href="#emergencies" role="tab"
                               aria-controls="emergencies" aria-selected="false">Elmi işlər</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="scolarship-tab" data-toggle="tab" href="#scolarship" role="tab"
                               aria-controls="scolarship" aria-selected="false">Əlavə</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="institution" role="tabpanel" aria-labelledby="institution-tab">
                            <div class="medilife-tab-content d-md-flex align-items-center">
                                <div class="medilife-tab-text">
                                    <h2>Təhsil həyatı</h2>
                                    <p>
                                        <b style="font-size: 30px; color:#6633c1;">İstanbul Universiteti</b>
                                    <p style="margin-left: 40px;font-size: 20px;">- Cərrahpaşa tibb fakültəsi</p>

                                </div>
                                <div class="medilife-tab-img">
                                    <img src="img/core-img/istanbul.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                            <div class="medilife-tab-content d-md-flex align-items-center">
                                <div class="medilife-tab-text">
                                    <h2>Uzmanlıq</h2>
                                    <p>
                                        <b style="font-size: 30px; color:#6633c1;">Maramara Universiteti</b>
                                    <p style="margin-left: 40px;font-size: 20px;">- Genel Cerrahi bilim dalı</p>

                                    </p>
                                </div>
                                <div class="medilife-tab-img">
                                    <img src="img/core-img/marmara.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="specialities" role="tabpanel"
                             aria-labelledby="specialities-tab">
                            <div class="medilife-tab-content d-md-flex align-items-center">
                                <div class="medilife-tab-text">
                                    <h2>İş təcrübəsi</h2>
                                    <p><b style="font-size: 30px; color:#6633c1;"> Marmara Universiteti </b></p>
                                    <p style="margin-left: 40px;font-size: 20px;">Ümumi cərrahiyə şöbəsi</p>
                                    <p><b style="font-size: 30px; color: #6633c1;"> Mermorial Hospitals İstanbul </b>
                                    </p>
                                    <p style="margin-left: 40px; font-size: 20px;"> Ümumi cərrahiyə şöbəsi</p>
                                </div>
                                <div class="medilife-tab-img">
                                    <img src="img/core-img/memorial.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="laboratory" role="tabpanel" aria-labelledby="laboratory-tab">
                            <div class="medilife-tab-content d-md-flex align-items-center">
                                <div class="medilife-tab-text">
                                    <h2>Konfranslar</h2>
                                    <p> "Senun Breast Ultrasound Workshop"</p>
                                    <p> "St.Gallen International Breast Cacer Conference</p>
                                </div>
                                <div class="medilife-tab-img">
                                    <img src="img/bg-img/medical1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="emergencies" role="tabpanel" aria-labelledby="emergencies-tab">
                            <div class="medilife-tab-content d-md-flex align-items-center">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <h2>Take a look at this</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum
                                        dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                        aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing
                                        eli.</p>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <img src="img/bg-img/about1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="scolarship" role="tabpanel" aria-labelledby="scolarship-tab">
                            <div class="medilife-tab-content d-md-flex align-items-center">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <h2>Take a look at this</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum
                                        dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                        aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing
                                        eli.</p>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <img src="img/bg-img/medical1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Tabs Area End ***** -->

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