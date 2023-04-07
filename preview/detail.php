<!DOCTYPE html>
<html lang="en">

<?php
include_once "core/meta.php";
include 'core/dbconnection.php';
$conn = OpenCon();
mysqli_set_charset($conn, "utf8");

if(isset($_GET)) {
    $id = mysqli_real_escape_string($conn,intval($_GET['id']));
}else{
    $id = 1;
}


$querySingleApartment = "SELECT * FROM blog where ID = '$id' LIMIT 1";
$result = $conn->query($querySingleApartment);
$row = $result->fetch_array(MYSQLI_ASSOC);

$latestNews = $conn->query("SELECT * FROM blog  ORDER BY date DESC LIMIT 3");

?>

<body>
    <!-- Preloader -->
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
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(preview/img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Xəbərlər</h3>
                        <p>Son artiklardan məlumatlı olun</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="medilife-blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <div class="single-blog-area">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="<?php echo $row['image']; ?> " alt="">
                            <!-- Post Date -->
                            <div class="post-date">
                                <a href="#">Jan 23, 2018</a>
                            </div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img  src="img/blog-img/uzman_profile.png"  alt=""></a>
                            </div>
                            <a href="#" class="headline mb-0"><?php echo $row['title']; ?> </a>
                            <div class="post-meta">
                                <a href="#" class="post-author-name">by <?php echo $row['author']; ?></a> | <a href="#" class="post-catagory">Süd vəzi xərçəngi</a>
                            </div>
                            <p><?php echo $row['content']; ?></p>

                        </div>
                        <!-- Post Content -->

                    </div>


                    <!-- Leave A Comment -->
                </div>

                <div class="col-12 col-lg-4">
                    <div class="medilife-blog-sidebar-area">

                        <!-- Search Widget -->
<!--                        <div class="search-widget-area mb-50">-->
<!--                            <form action="#" method="get">-->
<!--                                <input type="search" placeholder="Type Any Keywords">-->
<!--                                <input type="submit" value="Search">-->
<!--                            </form>-->
<!--                        </div>-->
                        

                        <!-- Latest News -->
                        <div class="latest-news-widget-area mb-50">
                            <h5>Latest News</h5>
                            <div class="widget-blog-post">
                                <!-- Single Blog Post -->
                                <?php foreach ($latestNews as $news) { ?>

                                    <div class="widget-single-blog-post d-flex align-items-center">
                                        <div class="widget-post-thumbnail pr-3">
                                            <img src="<?php echo $news['image']; ?>" alt="">
                                        </div>
                                        <div class="widget-post-content">
                                            <a href="detail.php?id=<?php echo $news['id']; ?>">
                                                <?php echo strlen($news['title']) > 27 ? substr($news['content'], 0, 27) . '...' : $news['title']; ?>
                                            </a>
                                            <p><?php echo $news['date']; ?></p>
                                        </div>
                                    </div>

                                    <?php
                                }
                                ?>

                            </div>
                        </div>

                        <!-- medilife Emergency Card -->
                        <div class="medilife-emergency-card bg-img bg-overlay" style="background-image: url(preview/img/bg-img/about1.jpg);">
                            <i class="icon-smartphone"></i>
                            <h2>Təcili Zəng üçün</h2>
                            <h3>+994 50 205 45 17</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->


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