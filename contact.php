<!DOCTYPE html>
<html lang="en">

<?php
include("core/meta.php");
?>

<body>
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
                                <!-- Logo Area  -->
                                <a class="navbar-brand" style="width: 123px; border-radius:50px; background-color: #f0ffff;" href="index.php"
                                ><img src="img/core-img/logo_new.png" alt="Logo">
                                </a>


                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Əsas</a>
                                        </li>
                                        <li class="nav-item dropdown">

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.php">Haqqında<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="services.php">Xidmətlər</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.php">Xəbərlər</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="contact.php">Əlagə</a>
                                        </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a href="https://wa.me/994502054517?text=I'm%20interested%20in%20your%20car%20for%20sale" class="btn medilife-appoint-btn ml-30">Dərhal <span>əlagə</span> </a>
                                </div>                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Əlagə</h3>
                        <p>Müraciətlərinizi ən tez zamanda cavablandırmağa həmişə hazırıq</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <h5 class="mb-50">Biznen elaqə</h5>

                        <form id="myForm">
                            <div class="form-group">
                                <input type="text" class="form-control"  name="name" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" id="submit" class="btn medilife-btn">Send Message <span>+</span></button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">


                        <!-- Contact Card -->
                        <div class="medilife-contact-card mb-50">

                            <div class="single-contact d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="contact-meta">
                                    <p>Adress: Ataturk prospekti Ayna Sultanova heykəlinin yaxınlığı, Bakı 1108 </p>
                                </div>
                            </div>

                            <div class="single-contact d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="contact-meta">
                                    <p>Phone: +994 50 205 45 17</p>
                                </div>
                            </div>

                            <div class="single-contact d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="contact-meta">
                                    <p>Email: info@sudvezi.az</p>
                                </div>
                            </div>


                            <div class="contact-social-area">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>

                        </div>
                        

                        <!-- medilife Emergency Card -->
                        <div class="medilife-emergency-card bg-img bg-overlay" style="background-image: url(img/bg-img/about1.jpg);">
                            <i class="icon-smartphone"></i>
                            <h2>Təcili Zəng üçün</h2>
                            <h3>+994 50 205 45 17</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
<!--    <div class="map-area mb-100">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-12">-->
<!--                    <div id="googleMap" class="googleMap"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <?php
    include "core/foot-contact-page.php";
    ?>

    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'core/send-mail.php',
                    data: $('#myForm').serialize(),
                    success: function(data) {
                        alert('Email sent successfully!');
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });

    </script>

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
    <!-- Google Maps -->
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>-->
    <script src="js/map-active.js"></script>


</body>

</html>