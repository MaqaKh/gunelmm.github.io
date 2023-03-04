<!DOCTYPE html>
<html lang="en">

<?php
include "core/meta.php";
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
                            <!-- Logo Area  -->
                            <a class="navbar-brand" style="width: 123px; border-radius:50px; background-color: #f0ffff;" href="index.php"
                            ><img src="img/core-img/logo_new.png" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false"
                                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse" id="medilifeMenu">
                                <!-- Menu Area -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Əsas</a>
                                    </li>
                                    <li class="nav-item dropdown">

                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="about-us.php">Haqqında<span
                                                    class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="services.php">Xidmətlər</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.php">Xəbərlər</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Əlagə</a>
                                    </li>
                                </ul>
                                <!-- Appointment Button -->
                                <a href="https://wa.me/994502054517?text=I'm%20interested%20in%20your%20car%20for%20sale" class="btn medilife-appoint-btn ml-30">Dərhal <span>əlagə</span> </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="breadcumb-area bg-img gradient-background-overlay"
         style="background-image: url(img/bg-img/breadcumb2.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Xidmətlər</h3>
                    <p>Müştərimizlərin ən güvəndiyi xidmətlər</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once "core/service/top-service-area.php";
include_once "core/service/mid-service-area.php";
include_once "core/service/bottom-service-area.php";
?>


<div class="medilife-cta-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content">
                    <i class="icon-smartphone"></i>
                    <h2>Təcili Zəng üçün</h2>
                    <h3>+994 50 205 45 17</h3>
                </div>
            </div>
        </div>
    </div>
</div>

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