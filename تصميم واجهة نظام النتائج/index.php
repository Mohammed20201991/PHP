<?php 
define("TITLE","بوابة نظام النتائج جامعة الفلوجة");
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo constant('TITLE'); ?> </title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8EJ02G1F-X9LjzrsIo-RbX62F5UUOV8Y4en3Zh-A84F6zOFPIeqNkrae8M7qOFH0hKSLwkNePPeftRZozsrkt5lpX-cxBelbb3CYeii1pcaE0ruaePxgrFkT3XKh-j-wvWEqUMxHXReef5Ac87KasNM" />
    <div class="container">
        <main role="main" class="pb-3">
            <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.php">الرئيسية</a></li>
                    <li><a href="TopStudents.php"> الطلبه  الاوائل </a></li>
                <li><a href="Statistics.php">إحصاءات عامة</a></li>
                <li><a href="Contact.php">إتصل بنا</a></li>
            </ul>
        </nav><!-- .nav-menu -->
        <div class="logo ml-auto"><img src="img/Fallujah-Logo.png" width="60" height="70"></div>
    </div>
</header>
<!-- End Header -->
<div class="allcom">
    <!-- ======= Result Section ======= -->
    <section id="featured-services mt-5" class="featured-services">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12">
                        <div class="icon-box animate__animated animate__fadeInRight">
                            <div class="icon btn-scroll"><i class="icofont-simple-down"></i></div>
                            <h2 class="title"><span>نظام النتائج :: جامعة الفلوجة </span></h2>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <!-- ======= Result Section ======= -->
    <section id="featured-services mt-5" class="featured-services">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12">
                        <div class="icon-box">
                            <h2 class="nategalabel m-2">الآن .. الأعلان عن نتائج الطلبة </h2>
                            <div class="cform m-auto col-lg-8 col-12 d-flex align-items-center justify-content-center">
                                <form form method="post" class="form-inline w-80" action="find-result.php">
                                    <!-- <div class="form-group p-2">
                                        <label for="SeatingNo"></label>
                                        <input type="text" class="form-control" id="SeatingNo" name="SeatingNo" placeholder="الرقم السري ">
                                    </div> -->
                                    <button type="submit" class="btn btn-success text-center align-items-center">عرض النتيجــة</button>
                                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8EJ02G1F-X9LjzrsIo-RbX5vh6-k3vCusVI4ZOCz8X63vsgjRnzI2YyIl11cBlRzyXQyMfwBXk5KvvsgcZHzOzDGRwjtwfWeQxzXTGK3FKItMrEyOlxoDnBJXkXgiBeLAktxoilKCjSOqmdnvGelkHQ" /></form>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center text-center align-items-center" style="color:red">
                            
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Hero Section ======= -->
    <!--  -->
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(img/1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="my-2 animate__animated animate__fadeInDown"><span> جامعة الفلوجة    </span></h2>
                            <p class="animate__animated animate__fadeInUp">ترحب بكم، وتتمنى لأبنائها وبناتها من طلاب وطالبات  النجاح والتوفيق</p>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(img/slide/2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"> نتيجة  الطلبة للدراسات الصباحية والمسائية  </h2>
                                <p class="animate__animated animate__fadeInUp">نتيجة  2020 م ستعلن هنا فور إعتمادها </p>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(img/slide/3.png)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">  االطلبـة الاوائل على الكليات </h2>
                                <p class="animate__animated animate__fadeInUp">سيتم  إعلان نتائج الطلبة  الأوائل على الكليات   للعام  2020 م </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">السابق</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">التالى</span>
            </a>
        </div>
    </section>
    <!-- End Hero -->
</div>

        </main>
    </div>
    <!-- ======= Footer Section ======= -->
    <footer id="footer">
        <div class="container">
            <div class="social-links">
                <a href="https://www.facebook.com/mediaalfallujah/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            </div>
            <div class="copyright">
                <p>جميع الحقوق محفوظة &copy; <strong>2013 to<?php echo date('Y'); ?> <a href="http://uofallujah.edu.iq/" >جامعة الفلوجة /مركز الحاسبة الالكترونية</a>  </strong> </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/venobox/venobox.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/counterup/counterup.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
    
</body>
</html>
