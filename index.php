<!DOCTYPE html>
<html lang="en">

<?php
include 'core/dbconnection.php';

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Uzman Dr. Günel Məmmədova - Uzman Ümumi Cərrah, Mammoloq</title>
    <meta name="description"
          content="Uzman Dr. Gunel Məmmədova - Uzman Ümumi Cərrah, Mammoloq - Süd vezi xercenginin müayinəsi və müalicəsi ilə məşquldur. Sud vezi xercengi elametleri, dos xercenginin"/>
    <meta name="keywords"
          content="mammoloq,radioloq,sud vezi xercengi, dos xercengi, hekim radioloq, hekim mamaloq,sud vezi xercengi hekimi,sud vezi mualicesi, Bakı Senologiya Akademiyasi, bsa, BSA"/>
    <meta name="author" content="Süd vəzi cərrahiyəsi - Uzman, Cərrah Günel Məmmədova"/>
    <link rel="alternate" hreflang="az" href="index.php"/>
    <meta property="og:url" content="https://sudvezi.az"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="az_AZ"/>
    <meta property="og:title" content="Uzman Dr. Günel Məmmədova - uzman ümumi cərrah,mammoloq"/>
    <meta property="og:description"
          content="Mammoloq, Radioloq Dr.Gunel Memmedova sud vezi xercenginin müayinəsi və müalicəsi ilə məşquldur. Sud vezi xercengi elametleri, dos xercenginin"/>
    <meta property="og:image" content="uploads/TKRCD/logo.png"/>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css
">
    <link rel="alternate" hreflang="az" href="index.php"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0FERCYRYH5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-0FERCYRYH5');
    </script>
</head>
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
                            <a class="navbar-brand" style="width: 112px; border-radius:5px;"
                               href="index.php"
                            ><img src="img/core-img/cerrahpasha-logo.jpg" alt="Logo">
                            </a>
                            <a class="navbar-brand" style="width: 112px; border-radius:5px;"
                               href="index.php"
                            ><img src="img/core-img/marmara-logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false"
                                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

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
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
include_once "core/index/slider.php";
include_once "core/index/info.php";
include_once "core/index/gallery.php";
include_once "core/index/blog.php";
include "core/foot.php";
?>
<script type="text/javascript">
    var config = {
        phone: "+994502054717",
        call: "Bizə yazın",
        position: "ww-right",
        size: "ww-normal",
        text: "Salam,",
        type: "ww-extended",
        brand: "Uzman Dr. Gunel Mammadova",
        subtitle: "",
        welcome: "Salam, Sizə necə kömək edə bilərik?"
    };
    var proto = document.location.protocol, host = "cloudfront.net", url = proto + "//d3kzab8jj16n2f." + host;
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = url + "/v2/main.js";

    s.onload = function () {
        tmWidgetInit(config)
    };
    var x = document.getElementsByTagName("script")[0];
    x.parentNode.insertBefore(s, x);
</script>

<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/active.js"></script>

</body>

</html>