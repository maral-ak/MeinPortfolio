<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sara Siami Portfolio</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <script type="text/javascript" src="/fresco/dist/js/fresco.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/fresco/dist/css/fresco.css"/>

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

<main id="main">
    <!-- ======= Works Section ======= -->
<section class="section site-portfolio pt-5" >
    <div class="container">
        <div id="portfolio-grid" class="row product-content" data-aos="fade-up" data-aos-delay="200">
            @foreach($product->images as $img)
            <div class="item col-sm-6 col-md-12 col-lg-8 mb-4">
                <a href="/img/{{$img->img_name}}"  class="fresco"  data-fresco-group-options="thumbnails: 'vertical'">
                    <img class="img-fluid"  src="/img/{{$img->img_name}}">
                </a>
            </div>
            @endforeach
            <div class="product-info col-sm-6 col-md-12 col-lg-4 mb-4">
                <hr class= "boldred">
                <div class="product-title pt-2">
                    <h1> {{$product->title_pd}} </h1>
                </div>
                <div class="product-description">
                    <hr class= "boldred">
                    <br>
                    <span><h1> description </h1></span>
                    <br>
                    <p>{{$product->description_pd}}</p>
                    <form class="cart" action="" method="post">
				        <table class="variations" cellspacing="0">
			                <tbody>
								<tr>
                                    <td class="label"><label for="pa_frame">Frame</label></td>
                                    <td class="value woo-variation-items-wrapper">
                                        <select id="pa_frame" class=" hide woo-variation-raw-select woo-variation-raw-type-button" style="display:none" name="attribute_pa_frame" data-attribute_name="attribute_pa_frame" data-show_option_none="yes">
                                            <option value="">Choose an option</option>
                                            <option value="no-frame" class="attached enabled">No Frame</option>
                                            <option value="stretched-canvas" class="attached enabled">Stretched Canvas</option>
                                        </select>
                                        <ul class="variable-items-wrapper button-variable-wrapper" data-attribute_name="attribute_pa_frame">
                                            <li data-wvstooltip="No Frame" class="variable-item button-variable-item button-variable-item-no-frame" title="No Frame" data-value="no-frame">
                                                <span class="variable-item-span variable-item-span-button">No Frame</span>
                                            </li>
                                            <li data-wvstooltip="Stretched Canvas" class="variable-item button-variable-item button-variable-item-stretched-canvas" title="Stretched Canvas" data-value="stretched-canvas">
                                                <span class="variable-item-span variable-item-span-button">Stretched Canvas</span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>       
                </div>
                   
            </div>
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

