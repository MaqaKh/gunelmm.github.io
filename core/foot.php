<?php
$conn = OpenCon();
mysqli_set_charset($conn, "utf8");
$latestNews = $conn->query("SELECT * FROM blog  ORDER BY date DESC LIMIT 3");
?>
<footer class="footer-area section-padding-100">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="footer-logo">
<!--                            <img src="img/core-img/name.png" alt="">-->
                        </div>
                        <p>Klinikamızda xəstələrimizə, fərdi müalicə planlarına və şəfqətli bir yanaşma ilə bağlı ən
                            yaxşı qayğı göstərin. Təcrübəli tibb mütəxəssislərimiz, hər bir xəstənin ən yüksək keyfiyyət
                            keyfiyyətini aldığını, gündəlik yoxlamalar və ya mürəkkəb tibbi prosedurları tələb
                            etmələrini təmin etməyə həsr olunmuşdur.</p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>Latest News</h6>
                        </div>
                        <div class="widget-blog-post">
                            <!-- Single Blog Post -->
                            <?php foreach ($latestNews as $news) { ?>

                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="<?php echo $news['image']; ?>" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="detail.php?id=<?php echo $news['id']; ?>">
                                            <?php echo strlen($news['title']) > 17 ? substr($news['content'], 0, 17) . '...' : $news['title']; ?>
                                        </a>
                                        <p><?php echo $news['date']; ?></p>
                                    </div>
                                </div>

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>Contact Form</h6>
                        </div>
                        <div class="footer-contact-form">
                            <form id="myForm">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0"
                                       name="footer-name" name="name" id="name" placeholder="Name">
                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0"
                                       name="footer-email" name="email" id="email"  placeholder="Email">
                                <textarea name="message" class="form-control border-top-0 border-right-0 border-left-0"
                                          name="message" id="message" placeholder="Message"></textarea>
                                <button type="submit" class="btn medilife-btn">Contact Us <span>+</span></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>News Letter</h6>
                        </div>

                        <div class="footer-newsletter-area">
                            <form action="#">
                                <input type="email" class="form-control border-0 mb-0" name="newsletterEmail"
                                       id="newsletterEmail" placeholder="Your Email Here">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-footer-content">
                        <div class="copywrite-text">
                            <p>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved by <a href="https://deimos.az" target="_blank">Deimos.az</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

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
