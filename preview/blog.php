<!DOCTYPE html>
<html lang="en">

<?php
include_once "core/meta.php";
include 'core/dbconnection.php';
$conn = OpenCon();
mysqli_set_charset($conn, "utf8");
$rows = $conn->query("SELECT * FROM blog ORDER BY ID LIMIT 100");

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
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="breadcumb-area bg-img gradient-background-overlay"
         style="background-image: url(preview/img/bg-img/breadcumb2.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Xəbərlər</h3>
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
                    <?php foreach ($rows as $row) { ?>
                        <div class="col-12 col-md-6">
                            <div class="single-blog-area bg-gray mb-50">
                                <div class="blog-post-thumbnail">
                                    <img src="<?php echo $row['image']; ?>" alt="">
                                    <div class="post-date">
                                        <a  href='detail.php?id=<?php echo $row['id']; ?>'><?php echo $row['date']; ?></a>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-author">
                                        <img style="border-radius:10px;" src="img/blog-img/uzman_profile.png" alt="">
                                    </div>
                                    <a href='detail.php?id=<?php echo $row['id']; ?>' class="headline"><?php echo $row['title']; ?></a>
                                    <p><?php echo strlen($row['content']) > 220 ? substr($row['content'], 0, 217) . '...' : $row['content']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>


        </div>

<!--        <div class="row">-->
<!--            <div class="col-12">-->
                <!-- Pagination Area -->
<!--                <div class="pagination-area mt-50">-->
<!--                    <nav aria-label="Page navigation">-->
<!--                        <ul class="pagination">-->
<!--                            <li class="page-item"><a class="page-link" href="#">01</a></li>-->
<!--                            <li class="page-item active"><a class="page-link" href="#">02</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">03</a></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
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