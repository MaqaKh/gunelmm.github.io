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
                        <p>Uzman. Dr. Günel Məmmədova hal-hazırda EGE hospitalda  təcrübəli tibbi personallarla
                        yüksək səviyyədə, fərdi müalicə planlaması ilə xəstələrə xidmət verməkdədir. <i><b>Bilgi və sevgi ilə sağaldırıq!</b></b></i></p>
                        <div class="footer-social-info">
                            <a href="https://www.instagram.com/uzman_cerrah_gunel_mammadova/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/@uzman_cerrah_gunel_mammado605"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/in/op-dr-g%C3%BCnel-mammadova-0b9b59220"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>Axirıncı xəbərlər</h6>
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
                            <h6>Əlagə Formu</h6>
                        </div>
                        <div class="footer-contact-form">
                            <form id="myForm">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0"
                                       name="footer-name" name="name" id="name" placeholder="Ad">
                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0"
                                       name="footer-email" name="email" id="email"  placeholder="Email">
                                <textarea name="message" class="form-control border-top-0 border-right-0 border-left-0"
                                          name="message" id="message" placeholder="Mesaj"></textarea>
                                <button type="submit" class="btn medilife-btn">Əlagə <span>+</span></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>Abunə ol</h6>
                        </div>

                        <div class="footer-newsletter-area">
                            <form action="#">
                                <input type="email" class="form-control border-0 mb-0" name="newsletterEmail"
                                       id="newsletterEmail" placeholder="Sizin emailiniz">
                                <button type="submit">Abunə ol</button>
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
