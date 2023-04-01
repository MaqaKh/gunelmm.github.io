<?php
$conn = OpenCon();
mysqli_set_charset($conn, "utf8");
$latestNews = $conn->query("SELECT * FROM blog  ORDER BY date DESC LIMIT 6");
?>
<div class="medilife-blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Single Blog Area -->
            <?php foreach ($latestNews as $row) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="<?php echo $row['image']; ?>" alt="">
                            <!-- Post Date -->
<!--                            <div class="post-date">-->
<!--                                <a  href='detail.php?id=--><?php //echo $row['id']; ?><!--'>--><?php //echo $row['date']; ?><!--</a>-->
<!--                            </div>-->
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="detail.php?id=<?php echo $row['id']; ?>"><img src="../../img/blog-img/uzman_profile.png" alt=""></a>
                            </div>
                            <a href="detail.php?id=<?php echo $row['id']; ?>" class="headline"><?php echo $row['title']; ?></a>
                            <p><?php echo strlen($row['content']) > 220 ? substr($row['content'], 0, 217) . '...' : $row['content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
