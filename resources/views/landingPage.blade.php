<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MILLENNIAL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/generalProduct.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Arsha - v4.3.0
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        .modal {
            /*display: contents;*/
        }
    </style>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">MILLENNIAL</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Halaman Utama</a></li>
                <li><a class="nav-link scrollto" href="#about">Tetang Kami</a></li>
                <li><a class="nav-link scrollto" href="#services">Pelayanan</a></li>
                <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%">
        <!-- Indicators -->

        <ol class="carousel-indicators mx-auto">
            @foreach($data['banner'] as $banner)

                <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}"
                    class="{{ $loop->first ? 'active' : '' }}"
                    style="border-color: #999999; width: 10px"></li>
            @endforeach
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($data['banner'] as $banner)
                <div class="item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{$banner->photo}}" alt="{{$banner->title}}" width="100%" height="100%" class="img-fluid">
                </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>

            <div class="row">

                <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">
                    <h2 style="text-align: center; letter-spacing: 2px; text-transform: uppercase;">
                        {{$data['aboutUs']->title}}</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <p style="text-align: justify; font-size: 1.4rem; padding: 8px">
                            {{$data['aboutUs']->description}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{$data['aboutUs']->image}}" class="img-fluid animated m-auto" alt="">
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-10 d-flex flex-column mx-auto align-items-stretch  order-2 order-lg-1">

                    <div class="content text-center mb-5">
                        <h3><strong>STEP CUSTOM</strong></h3>
                    </div>

                    <div class="accordion-list mx-auto">
                        <ul>
                            @foreach($data['stepCustom'] as $step)
                                <li>
                                    <a data-bs-toggle="collapse" class="collapsed"
                                       data-bs-target="#accordion-list-{{$loop->iteration}}"><span>0{{$loop->iteration}}</span>
                                        {{$step->step}}<i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-{{$loop->iteration}}"
                                         class="collapse {{$loop->first ? 'show' : ''}}"
                                         data-bs-parent=".accordion-list">
                                        <p style="line-break: auto; width: 800px; font-size: 1.2rem">
                                            {{$step->description}}
                                        </p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pelayanan</h2>
            </div>
            <div class="main-timeline">

                <!-- start experience section-->
                @foreach($data['category'] as $category)
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                    <span class="date">
                                                <img src="{{$category->image}}" class="img" alt="{{$category->name}}"
                                                     width="110px">
                                    </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title"><a href="{{ url('/all-product-mebel') }}">{{$category->name}}</a></h5>
                            <p class="description">
                                {{$category->description}}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            {{--            <div class="row">--}}
            {{--                <div class="col-lg-9 text-center text-lg-start">--}}
            {{--                    <h3>Call To Action</h3>--}}
            {{--                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla--}}
            {{--                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt--}}
            {{--                        mollit anim id est laborum.</p>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-3 cta-btn-container text-center">--}}
            {{--                    <a class="cta-btn align-middle" href="#">Call To Action</a>--}}
            {{--                </div>--}}
        </div>
    </section><!-- End Cta Section -->
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
         aria-hidden="true" width="100%">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="container">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Basic Modal </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Modal Body</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach($data['category'] as $category)
                    <li data-filter=".filter-{{$category->id}}">{{$category->name}}</li>
                    {{--                <li data-filter=".filter-card">Card</li>--}}
                    {{--                <li data-filter=".filter-web">Web</li>--}}
                @endforeach
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                {{--                @foreach($data['detail_product'] as $detail_product)--}}
                {{--                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{$detail_product->product->category_id}}">--}}
                {{--                        <div class="portfolio-img"><img src="{{$detail_product->image1}}" class="img-fluid" alt="">--}}
                {{--                        </div>--}}
                {{--                        <div class="portfolio-info">--}}
                {{--                            <h4>{{$detail_product->name}}</h4>--}}
                {{--                            <div>--}}
                {{--                                --}}{{--                                <p>{{$detail_product->length}} x {{$detail_product->width}}--}}
                {{--                                --}}{{--                                    x {{$detail_product->height}}</p>--}}
                {{--                                <div class="color"--}}
                {{--                                     style="width: 20px; height: 20px; background-color:{{$detail_product->color}}">--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <a href="{{$detail_product->image1}}" data-gallery="portfolioGallery"--}}
                {{--                               class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>--}}
                {{--                            <a class="details-link"--}}
                {{--                               title="More Details" data-toggle="modal"--}}
                {{--                               data-target="#exampleModal"><i--}}
                {{--                                    class="bx bx-link"></i></a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                @endforeach--}}
                <button class="btn btn-lg btn-success" id="btn" data-toggle="modal" data-target="#basicModal">
                    Click to open Modal
                </button>
            </div>
            <!-- Add script tag with CDN link to js-cloudimage-360-view lib after all content in body tag -->
        </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontak</h2>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>{{$data['aboutUs']->address}}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{$data['aboutUs']->email}}</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>{{$data['aboutUs']->phone}}</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    {{--    <div class="footer-newsletter">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-lg-6">--}}
    {{--                    <h4>Join Our Newsletter</h4>--}}
    {{--                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>--}}
    {{--                    <form action="" method="post">--}}
    {{--                        <input type="email" name="email"><input type="submit" value="Subscribe">--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>MILLENNIAL</h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#home">Halaman Utama</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Pelayanan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Portofolio</a></li>
                        {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>--}}
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Mebel</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Mebel Berbasis Teknologi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Dekorasi Rumah</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Lukisan Kayu Custom</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Sosial Media</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Millennial</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<script>
    $('#btn').on('click', function () {
        $("#basicModal").modal("show");
    })


</script>
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2/js-cloudimage-360-view.min.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
