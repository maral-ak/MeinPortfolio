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
    <link href="/css/icofont/icofont.min.css" rel="stylesheet">

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
<header class="masthead" style="background: url(https://ekinakis.com/wp-content/uploads/2019/05/NEW.jpg) no-repeat center -50px fixed;
                   background-size: cover;
                   height: 750px;
                   overflow: hidden;">
    <div class="site-top-header">
        <div class="site-header col-lg-12">
            <div class="site-branding col-lg-2">
                <a href="#page-top">MyPortfolio.</a>
            </div>
            <div class="site-tools col-lg-3">
                <ul>
                    <li class="wish-list-button">
                        <a><i class="icofont-shopping-cart"></i></a>
                    </li>
                    <li class="shopping-bag-button">
                        <a><i class="icofont-user-alt-7"></i></a>
                    </li>
                    <li class="main-serach-button">
                        <a href="#" class="search" data-toggle="collapse" data-target="#main-search">
                            <i class="icofont-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <nav  class="main-navigation default-navigation align_left" role="navigation">
                <div class="col-lg-7">
                    <ul class="menu-main-navigation">
                        <li class="menu-item">
                            <a>SHOP</a>
                        </li>
                        <li class="menu-item">
                            <a>SARA SIAMI</a>
                        </li>
                        <li class="menu-item">
                            <a>WORK</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    
    <div class="row content-new-element">
        <div class="test">
            <div class="col-md-12 col-lg-12 content-element">new </div>
            <div class="col-md-12 col-lg-12 mini-shop-header"> <strong>Explore the latest works</strong></div>
            <div class="col-md-12 col-lg-12 pt-3">
                <button type="button" class="btn btn-outline-light mini-shop-button" style="font-size:10px; font-weight: bold;">VIEW COLLECTION</button>
            </div>
        </div>
    </div>
</header>

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
                        <a href="#" data-filter=".watercolor">WaterColor</a>
                        <a href="#" data-filter=".pen">Pen</a>
                    </div>
                </div>
            </div>
            
            <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
            @foreach($products as $product)
                <div class="item {{$product->category->cat_name}} col-sm-6 col-md-4 col-lg-4 mb-4">
                
                    <a href="/products/{{$product->id}}" class="item-wrap fancybox">
                        <div class="work-info">
                            <h3>{{$product->title_pd}}</h3>
                            <span>{{$product->category->cat_name}}</span> 
                        </div>
                        <img class="img-fluid" style="object-fit: none; width:450px;height:350px;"  src="/img/{{$product->images[0]->img_name}}">
                       
                    </a>
                   
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- End  Works Section -->
</main>
<!-- End #main -->
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
<!-- Template Main JS File 
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
-->
</body>

</html>

