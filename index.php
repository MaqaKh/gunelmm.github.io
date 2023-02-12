<!DOCTYPE html>
<html lang="tr">

<?php
    include "core/head.php";
?>


<body data-url="index.html">

<?php
include "core/header.php";
?>

<div id="content">
    <section class="section more-padding ml-0 mr-0 pt-0">


        <style type="text/css">
            .article.small-article.iconkapat:after {
                display: none;
            }

            @media (max-width: 333px) {
                .acilis_h2 {
                    font-size: 18px;
                }
            }

            @media (min-width: 768px) and (max-width: 991px) {
                .acilis_h2 {
                    font-size: 21px;
                }
            }

            @media (min-width: 992px) {
                #content {
                    padding-top: 105px !important;
                }
            }
        </style>
        <div class="container-fluid" style="background-color:#b50067">
            <div class="row">
                <div class="align-items-center col-12" style="display:flex">
                    <div data-n1ed-col-align="center" style="width:100%">
                        <div data-n1ed-col-align="center" style="width:100%">
                            <p>&nbsp;</p>
                            <h1 style="text-align: center;"><span style="color:#ffffff;"><span><strong><Table>BSA | Bakı Senologiya Akademiyasi</Table></strong></span></span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center order-2 order-lg-1" href="nurse.php"
                     onclick="acilis_sayfasi('nurse',this);return false;">
                    <article class="article small-article iconkapat">
                        <div class="image-holder"><img alt="Toplum" class="img-fluid"
                                                       src="custom/doctor_1.jpg" title="Toplum"/>
                        </div>

                        <div class="article-content">
                            <p class="acilis_h2"><strong><span
                                            style="font-size:22px;">Tibb işçiləri üçün</span></strong>
                            </p>
                        </div>

                        <div class="article-content2" style="width:100%"><span
                                    class="btn icon-right">Sayfaya&nbsp;Git</span></div>
                    </article>
                </div>

                <div class="col-12 col-md-6 text-center order-1 order-lg-2" href="patient.php"
                     onclick="acilis_sayfasi('saglik_calisanlari_icin',this);return false;">
                    <article class="article small-article iconkapat">
                        <div class="image-holder"><img alt="Toplum" class="img-fluid"
                                                       src="custom/doctor_2.png"
                                                       title="Sağlık Çalışanları"/></div>

                        <div class="article-content">
                            <p class="acilis_h2"><strong><span style="font-size:22px;">Pasientlər üçün</span></strong>
                            </p>
                        </div>

                        <div class="article-content2" style="width:100%"><span
                                    class="btn icon-right">Sayfaya&nbsp;Git</span></div>
                    </article>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="align-items-center col-12" style="display:flex">
                    <div data-n1ed-col-align="center" style="width:100%">
                        <h2 style="text-align: center;">
                            <span>Türk Kolon və Düz Bağırsaq Cərrahiyyəsi Dərnəyinin məqsədi</span></h2>

                        <p style="text-align: justify;">Üzvlərinin öz ixtisas sahələrində hüquqlarının müdafiəsini və
                            inkişafını təmin etmək və kolorektal cərrahiyyə sahəsində cəmiyyətə təklif olunan səhiyyə
                            xidmətlərinin yaxşılaşdırılmasına töhfə vermək. Kolorektal cərrahiyyə sahəsində təlim və
                            tədqiqat fəaliyyətini təşkil etmək, xəstələrə qulluq standartlarının və milli siyasətlərin
                            formalaşmasına töhfə vermək, cəmiyyətin kolorektal xəstəliklərdən ən effektiv qorunması və
                            xəstələrin ən effektiv müalicəsi üçün çalışmaq. Kolorektal cərrahiyyə təcrübələrinin
                            standartlarını müəyyən etmək dərnək məqsədlərindəndir. Türkiyə Kolon və Düz Bağırsaq
                            Cərrahiyyə Dərnəyi yuxarıda qeyd olunan məqsədlərə çatmaq üçün üzvləri arasında peşəkar,
                            elmi və ictimai əlaqələri inkişaf etdirir.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>


    </section>

</div>

<?php
include "core/footer.php";
?>

<div class="container">
    <div class="col-md-12 text-center">
                <span class="font-weight-bold" style="font-size: 12px;font-family: roboto,helvetica;">Bütün hüquqlar qorunur © 2023
                    BSA | Bakı Senologiya Akademiyasi <a href="https://madmen.agency/" class="text-decaration-underline"
                                                         target="_blank" style="text-decoration: underline"></a></span>
    </div>
</div>


<div id="go-top"><i class="fa fa-angle-up"></i></div>
<div id="stage" class=""></div>

<!-- JS CEVIRI -->
<div class="ceviri" data-arama="Arama..." data-arama_baslik="ARAMA" data-arama_button="ARA"
     data-bostablo="Tabloda veri yok" data-silmeeminmisiniz="Silmek İstediğinize Emin misiniz?"
     data-evetsil="Evet Sil !" data-hayirsilme="Hayır !" data-evet="Evet" data-hayir="Hayır"
     data-select_secildi=" Adet Seçildi" data-select_tumu_secildi=" Tümü Seçildi"
     data-select_arama=" Arama Yap.. " data-select_arama_bulunamadi=" Arama Bulunamadı">
</div>
<!-- SON JS CEVIRI -->

<?php
include "core/js_libs.php";
?>


</body>

</html>