<!DOCTYPE html>
<html lang="en">

<?php
include "core/meta.php";
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
                            <!-- Logo Area  -->
                            <a class="navbar-brand" style="width: 112px; border-radius: 5px; background-color: #f0ffff;" href="index.php"
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

<section class="medilife-benefits-area section-padding-100-50">
    <div class="container">
        <div class="row">
            <!-- ***** Progress Bars & Accordions ***** -->
            <div class="col-12">
                <div class="elements-title">
                    <h2>Əsas xidmətlər</h2>
                </div>


                <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel single-accordion">
                        <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Donec ipsum metus, pharetr a quis nunc sit amet, maximus.
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a></h6>
                        <div id="collapseOne" class="accordion-content collapse show">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Maximus vehicula nibh. Prae sent pulvinar porta.
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseTwo" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Pharetr a quis nunc sit amet, maximus vehicula nibh.
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseThree" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12">
                <div class="elements-title">
                    <h2>Digər xidmətlər</h2>
                </div>


                <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel single-accordion">
                        <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Donec ipsum metus, pharetr a quis nunc sit amet, maximus.
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a></h6>
                        <div id="collapseFour" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">Maximus vehicula nibh. Prae sent pulvinar porta.
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseFive" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseSix">Pharetr a quis nunc sit amet, maximus vehicula nibh.
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseSix" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>




<?php
//include_once "core/service/top-service-area.php";
//include_once "core/service/mid-service-area.php";
//include_once "core/service/bottom-service-area.php";
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