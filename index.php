<!DOCTYPE html>
<html lang="en">

<?php
include("core/meta.php");
?>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
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
                                <a class="navbar-brand" style="width: 123px; border-radius:50px;" href="index.php"
                                ><img src="img/core-img/logo_new_2.png" alt="Logo">
                                </a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.php">Xəbərlər</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">Əlagə</a>
                                        </li>
                                    </ul>
                                    <a href="https://wa.me/0994502054517?text=I'm%20interested%20in%20your%20car%20for%20sale" class="btn medilife-appoint-btn ml-30">Dərhal <span>əlagə</span> </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Book An Appoinment Area Start ***** -->
<!--    <div class="medilife-book-an-appoinment-area">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-12">-->
<!--                    <div class="appointment-form-content">-->
<!--                        <div class="row no-gutters align-items-center">-->
<!--                            <div class="col-12 col-lg-9">-->
<!--                                <div class="medilife-appointment-form">-->
<!--                                    <form action="#" method="post">-->
<!--                                        <div class="row align-items-end">-->
<!--                                            <div class="col-12 col-md-4">-->
<!--                                                <div class="form-group">-->
<!--                                                    <select class="form-control" id="speciality">-->
<!--                                                    <option>Speciality 1</option>-->
<!--                                                    <option>Speciality 2</option>-->
<!--                                                    <option>Speciality 3</option>-->
<!--                                                    <option>Speciality 4</option>-->
<!--                                                    <option>Speciality 5</option>-->
<!--                                                </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-12 col-md-4">-->
<!--                                                <div class="form-group">-->
<!--                                                    <select class="form-control" id="doctors">-->
<!--                                                    <option>Doctors 1</option>-->
<!--                                                    <option>Doctors 2</option>-->
<!--                                                    <option>Doctors 3</option>-->
<!--                                                    <option>Doctors 4</option>-->
<!--                                                    <option>Doctors 5</option>-->
<!--                                                </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-12 col-md-2">-->
<!--                                                <div class="form-group">-->
<!--                                                    <input type="text" class="form-control" name="date" id="date" placeholder="Date">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-12 col-md-2">-->
<!--                                                <div class="form-group">-->
<!--                                                    <input type="text" class="form-control" name="time" id="time" placeholder="Time">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-12 col-md-4">-->
<!--                                                <div class="form-group">-->
<!--                                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="name" id="name" placeholder="Name">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-12 col-md-4">-->
<!--                                                <div class="form-group">-->
<!--                                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="number" id="number" placeholder="Phone">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-12 col-md-4">-->
<!--                                                <div class="form-group">-->
<!--                                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="email" id="email" placeholder="E-mail">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-12 col-md-7">-->
<!--                                                <div class="form-group mb-0">-->
<!--                                                    <textarea name="message" class="form-control mb-0 border-top-0 border-right-0 border-left-0" id="message" cols="30" rows="10" placeholder="Message"></textarea>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-12 col-md-5 mb-0">-->
<!--                                                <div class="form-group mb-0">-->
<!--                                                    <button type="submit" class="btn medilife-btn">Make an Appointment <span>+</span></button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-12 col-lg-3">-->
<!--                                <div class="medilife-contact-info">-->
<!--                                    <div class="single-contact-info mb-30">-->
<!--                                        <img src="img/icons/alarm-clock.png" alt="">-->
<!--                                        <p>Mon - Sat 08:00 - 21:00 <br>Sunday CLOSED</p>-->
<!--                                    </div>-->
<!--                                    <div class="single-contact-info mb-30">-->
<!--                                        <img src="img/icons/envelope.png" alt="">-->
<!--                                        <p>0080 673 729 766 <br>contact@business.com</p>-->
<!--                                    </div>-->
<!--                                    <div class="single-contact-info">-->
<!--                                        <img src="img/icons/map-pin.png" alt="">-->
<!--                                        <p>Lamas Str, no 14-18 <br>41770 Miami</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- ***** Book An Appoinment Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
   <!--  <section class="medica-about-us-area section-padding-100-20">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="medica-about-content">
                        <h2>We always put our pacients first</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                        <a href="#" class="btn medilife-btn mt-50">View the services <span>+</span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="service-content">
                                    <h5>The Best Doctors</h5>
                                    <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-blood-donation-1"></i>
                                </div>
                                <div class="service-content">
                                    <h5>Baby Nursery</h5>
                                    <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-flask-2"></i>
                                </div>
                                <div class="service-content">
                                    <h5>Laboratory</h5>
                                    <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-emergency-call-1"></i>
                                </div>
                                <div class="service-content">
                                    <h5>Emergency Room</h5>
                                    <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <!-- <section class="medilife-cool-facts-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-blood-transfusion-2"></i>
                        <h2><span class="counter">5632</span></h2>
                        <h6>Blood donations</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-atoms"></i>
                        <h2><span class="counter">23</span>k</h2>
                        <h6>Pacients</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-microscope"></i>
                        <h2><span class="counter">25</span></h2>
                        <h6>Specialities</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-doctor-1"></i>
                        <h2><span class="counter">723</span></h2>
                        <h6>Doctors</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php
    include_once "core/index/slider.php";
    include_once "core/index/info.php";
    include_once "core/index/gallery.php";
    include_once "core/index/blog.php";
    ?>

<!--    <div class="medilife-emergency-area section-padding-100-50">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-12 col-lg-6">-->
<!--                    <div class="emergency-content">-->
<!--                        <i class="icon-smartphone"></i>-->
<!--                        <h2>Təcili zənglər üçün</h2>-->
<!--                        <h3>+12-823-611-8721</h3>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12 col-lg-6">-->
<!--                    <div class="row">-->
<!--                        <div class="col-12 col-sm-6">-->
<!--                            <div class="single-emergency-helpline mb-50">-->
<!--                                <h5>London</h5>-->
<!--                                <p>0080 673 729 766 <br> contact@business.com <br> Lamas Str, no 14-18 <br> 41770 Miami</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-6">-->
<!--                            <div class="single-emergency-helpline mb-50">-->
<!--                                <h5>New Castle</h5>-->
<!--                                <p>0080 673 729 766 <br> contact@business.com <br> Lamas Str, no 14-18 <br> 41770 Miami</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-6">-->
<!--                            <div class="single-emergency-helpline mb-50">-->
<!--                                <h5>Manchester</h5>-->
<!--                                <p>0080 673 729 766 <br> contact@business.com <br> Lamas Str, no 14-18 <br> 41770 Miami</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-6">-->
<!--                            <div class="single-emergency-helpline mb-50">-->
<!--                                <h5>Bristol</h5>-->
<!--                                <p>0080 673 729 766 <br> contact@business.com <br> Lamas Str, no 14-18 <br> 41770 Miami</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- ***** Emergency Area End ***** -->

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