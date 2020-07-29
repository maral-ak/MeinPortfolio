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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Vendor CSS Files -->
    {{--    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--    <link href="/css/icofont/icofont.min.css" rel="stylesheet">--}}
    {{--    <link href="assets/vendor/aos/aos.css" rel="stylesheet">--}}
    {{--    <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">--}}
    {{--    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">--}}

    <!-- Styles -->
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


</head>

<body id="page-top">
<!-- ======= Search Toggle ======= -->
<div class="collapse navbar-collapse custom-navmenu" id="main-search">
    <div class="container py-2 py-md-5">
        <div class="row align-items-start">
            <div class="col-md-2">
                <form method="post" action="ricerca.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="ricerca" name="ricerca">
                        <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit" name="invia_ricerca">
                                    <i class="material-icons">Search</i>
                                </button>
                            </span>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- ======= Navbar ======= -->
<section  style="background: url(https://ekinakis.com/wp-content/uploads/2019/05/NEW.jpg) no-repeat center -50px fixed;
                   background-size: cover;
                   height: 750px;
                   overflow: hidden;">
    <nav class="navbar  custom-navbar">
        {{--        <div class="container">--}}
            <div class="col-md-12 col-lg-8  mb-lg-0 main-menu">
                <a class="navbar-brand" href="index.html">MyPortfolio.</a>
                {{--                <p>Freelance Creativity</p>--}}
                <a href="index.html">SHOP</a>
                <a href="about.html">SARA SIAMI</a>
                <a href="works.html">WORK</a>
            </div>
            <div class="col-md-12 col-lg-4 text-left text-lg-right">
                <ul class="list-inline icon-color">
                    <li class="list-inline-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                    <li class="list-inline-item"><i  class="fa" >&#xf2c0;</i></li>
                    <a href="#" class="search" data-toggle="collapse" data-target="#main-search">
                        <li class="list-inline-item"><i class="fa fa-search" aria-hidden="true"></i></li>
                    </a>
                </ul>
            </div>
            {{--        </div>--}}
    </nav>
    <div class="row content-new-element">
        {{--        <div class="test">--}}
            <div class="col-md-12 col-lg-12 content-element">new </div>
            <div class="col-md-12 col-lg-12 mini-shop-header"> <strong>Explore the latest works</strong></div>
            <div class="col-md-12 col-lg-12 pt-3">
                <button type="button" class="btn btn-outline-light mini-shop-button">VIEW COLLECTION</button>
            </div>

            {{--        </div>--}}

    </div>
</section>

<main id="main">
    <!-- ======= Works Section ======= -->
    <section class="section pt-5 site-portfolio">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-md-12 col-lg-12 mb-4 mb-lg-0" style="height: 100px " data-aos="fade-up">
                    <h1>SHOP</h1>
                </div>
            </div>
            <div class="row mb-5 text-center">
                <div class="col-md-12 col-lg-12 " data-aos="fade-up" data-aos-delay="100">
                    <div id="filters" class="filters">
                        <a href="#" data-filter="*" class="active">All</a>
                        <a href="#" data-filter=".web">New Arrivals</a>
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






</body>

</html>


