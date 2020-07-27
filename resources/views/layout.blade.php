<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sara Siami Portfolio</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Vendor CSS Files -->
{{--    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">--}}
{{--    <link href="assets/vendor/aos/aos.css" rel="stylesheet">--}}
{{--    <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">--}}
{{--    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">--}}

    <!-- Styles -->
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


</head>

<body>

<!-- ======= Navbar ======= -->
{{--https://ekinakis.com/wp-content/uploads/2019/05/NEW.jpg--}}
<section  style="background: url(https://ekinakis.com/wp-content/uploads/2019/05/NEW.jpg) no-repeat center -50px fixed;
                   background-size: cover;
                   height: 750px;
                   overflow: hidden; ">
        <nav id="main-nav" class="navbar navbar-light fixed-top custom-navbar">
        <div class="container">
            <div class="col-md-12 col-lg-3  mb-lg-0">
                <p><a class="navbar-brand  align-top" href="index.html">MyPortfolio.</a></p>
                <p>Freelance Creativity</p>
            </div>

            <div class="col-md-12 col-lg-5 mb-lg-0 text-left text-lg-left">
                <div id="main-menu" class="main-menu">
                    <a href="index.html">Home</a>
                    <a href="about.html">Sara Siami</a>
                    <a href="works.html">Works</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 text-left text-lg-right">
                Login
            </div>

            <!--      <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">-->
            <!--        <span></span>-->
            <!--      </a>-->
        </div>
    </nav>
</section>

<main id="main">
    <!-- ======= Works Section ======= -->
    <section class="section pt-5 site-portfolio">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-md-12 col-lg-12 mb-4 mb-lg-0" data-aos="fade-up">
                    <h2>SHOP</h2>
                </div>
            </div>
            <div class="row mb-5 text-center">
                <div class="col-md-12 col-lg-12 " data-aos="fade-up" data-aos-delay="100">
                    <div id="filters" class="filters">
                        <a href="#" data-filter="*" class="active">All</a>
                        <a href="#" data-filter=".web">New</a>
                        <a href="#" data-filter=".collage">Collage</a>
                        <a href="#" data-filter=".ecoline">Ecoline</a>
                        <a href="#" data-filter=".sketches">Sketches</a>
                        <a href="#" data-filter=".waterColor">WaterColor</a>
                        <a href="#" data-filter=".pen">Pen</a>
                    </div>
                </div>
            </div>
            <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
                <div class="item collage col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="#" class="item-wrap fancybox">
                        <div class="work-info">
                            <h3>EROTIC DIARY OF ZEUS</h3>
                            <span>Collage</span>
                        </div>
                        <img class="img-fluid" style="object-fit: none; width:450px;height:350px;"  src="/img/colage.jpg">
                    </a>
                </div>
                <div class="item ecoline col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="#" class="item-wrap fancybox">
                        <div class="work-info">
                            <h3>GANESHA</h3>
                            <span>Ecoline</span>
                        </div>
                        <img class="img-fluid" style="object-fit: none; width:450px;height:350px;" src="/img/ecoline.jpg">
                    </a>
                </div>
                <div class="item sketches col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="#" class="item-wrap fancybox">
                        <div class="work-info">
                            <h3>REPTILAN</h3>
                            <span>Sketches</span>
                        </div>
                        <img class="img-fluid" style="object-fit: none; width:450px;height:350px;" src="/img/sketch-book.jpg">
                    </a>
                </div>
                <div class="item waterColor col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="#" class="item-wrap fancybox">
                        <div class="work-info">
                            <h3>OCEAN</h3>
                            <span>WaterColor</span>
                        </div>
                        <img class="img-fluid" style="object-fit: none; width:450px;height:350px;" src="/img/water-color.jpg">
                    </a>
                </div>
                <div class="item pen col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="#" class="item-wrap fancybox">
                        <div class="work-info">
                            <h3>LONESOME</h3>
                            <span>Pen</span>
                        </div>
                        <img class="img-fluid" style="object-fit: none; width:450px;height:350px;" src="/img/pen.jpg">
                    </a>
                </div>
                <div class="item collage col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="#" class="item-wrap fancybox">
                        <div class="work-info">
                            <h3>ELECTRIC LADY LAND</h3>
                            <span>Collage</span>
                        </div>
                        <img class="img-fluid" style="object-fit: none; width:450px;height:350px;" src="/img/collage.jpg">
                    </a>
                </div>
            </div>
        </div>
    </section><!-- End  Works Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer class="footer" role="contentinfo">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-6">
                <p class="mb-1">&copy; Copyright MyPortfolio. All Rights Reserved</p>
                <div class="credits">

                </div>
            </div>
            <div class="col-sm-6 social text-md-right">
                <a href="#"><span class="icofont-twitter"></span></a>
                <a href="#"><span class="icofont-facebook"></span></a>
                <a href="#"><span class="icofont-dribbble"></span></a>
                <a href="#"><span class="icofont-behance"></span></a>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<!-- Template Main JS File -->
{{----}}


{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}






</body>

</html>
