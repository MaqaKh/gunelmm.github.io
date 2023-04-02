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
                            <a class="navbar-brand" style="width: 112px; border-radius: 5px; background-color: #f0ffff;"
                               href="index.php"
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
         style="background-image: url(img/core-img/breadcumb-2.jpeg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Xidmətlər</h3>
                    <p>Peşəkar xidmətlərdən yararlanın</p>
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
                        <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne"
                               data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Bütün növ süd vəzi xəstəliklərin müalicəsi
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a></h6>
                        <div id="collapseOne" class="accordion-content collapse">
                            <p>test</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">
                                Süd vəzi dikləşdirmə
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseTwo" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseThree">
                                Süd vəzinin implatla böyüdülməsi
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseThree" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseFour">
                                Süd vəzinin kiçildilməsi
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseFour" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseFive" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseFive">
                                Süd vəzi xərçəngində orqan qoruyucu cərrahiyə
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseFive" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseSix" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseSix">
                                Bilateral mastekdomiya - hər iki süd vəzinin çıxarılması
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseSix" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseSeven" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseSeven">
                                Sadə mastekdomiya - süd vızi toxumasının tamamilə çıxardılması
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseSeven" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseEight" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseEight">
                                Xoş xassəli süd vəzi törəmələrinin eksiziyası
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseEight" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseNine" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseNine">
                                Masteqdamiyadan sonra xəstənin öz toxumasından süd vəzinin yıqılması
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseNine" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseTen" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseTen">
                                Qoltuq altı limfa düyünün diseksiyası
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseTen" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseEleven" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapseEleven">
                                Qoltuqaltı aksesuar süd vəzi toxumasının çıxarılması
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapseEleven" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
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
                        <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapse12"
                               data-toggle="collapse" data-parent="#accordion" href="#collapse12">
                                Abdominoplastika
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a></h6>
                        <div id="collapse12" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapse13"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse13">
                                Liposaksiya
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse13" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse14" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse14">
                                Bütün növ onkoloji əməliyyatlar
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse14" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse15" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse15">
                                Endoskopiya və Koronoskopiya
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse15" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse16" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse16">
                                Arıqlamaq üçün mədə balonun taxılması (havalı, mayeli, öz pzünə əriyən)
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse16" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse17" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse17">
                                Arıqlamaq üçün mədə botoksu
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse17" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse18" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse18">
                                Öd kisəsi xəstəliklərinin cərrahi müalicəsi
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse18" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse19" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse19">
                                Qasıq və qarın yırtıqlarının cərrahi müalicəsi
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse19" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse20" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse20">
                                Mədə kiçiltmə əməliyyatları
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse20" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse21" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse21">
                                Qalxanabənzər vəzi cərrahi müalicəsi
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse21" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse22" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse22">
                                Bağırsaq çatı və babasil
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse22" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse23" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse23">
                                Anal fistula və anal absesin cərrahi müalicəsi
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse23" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse24" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse24">
                                Laparoskopik bütün növ əməliyyatlırın icrası
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse24" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse25" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse25">
                                Saçlı dəridə lipomların və sebase kistlərin çıxarılması
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse25" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collaps26" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse25">
                               Bədənin hər hansısa bir hissəsindəki lipomların çıxarılması
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse25" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
                        </div>
                    </div>
                    <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapse27" class="collapsed"
                               data-parent="#accordion" data-toggle="collapse" href="#collapse27">
                                Dırnaq batması
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                        </h6>
                        <div id="collapse27" class="accordion-content collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper
                                finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                vulputate id justo quis facilisis.</p>
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