<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Baggage Factory</title>
</head>
<style>
    body {
        font-family: GT America Extended, sans-serif;
    }

    .bg_black {
        background-color: black;
    }

    .Samsonite_logo {
        border-bottom: 1px solid #C7C7C7;
    }

    .nav-link {
        color: black;
        font-weight: 600;
    }

    .inner_fav_Styles>.product_detail>h4 {
        text-align: initial;
        font-size: 19px;
        font-weight: 900;
    }

    .inner_fav_Styles>.product_detail>p {
        text-align: initial;
        font-size: 14px;
        color: #828282;
    }

    .footer_ul li {
        list-style: none;
    }

    .footer_navlinks {
        font-size: 14px;
        color: #efefef;
    }

    .benefit-title {
        font-size: 14px;
        font-weight: 800;
        text-transform: uppercase;
    }

    .Summer {
        color: red !important;
    }

    .ml_6 {
        margin-left: 150px;
    }

    .fs_14 {
        font-size: 14px;
        margin: 45px 0px 30px;
        font-weight: 800;
    }

    .search_bar {
        border-radius: 0px;
    }

    .benefit {
        padding: 50px 60px;
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1250px;
        }

    }

    @media (max-width: 991px) {
        .top_navigation {
            display: none;
        }

        .logo {
            width: 46% !important;
        }

        .top_banners {
            height: 100% !important;
        }

        .mosaic_banner {
            display: none;
        }

        .banner_button {
            font-size: 12px;
        }
    }

    .header_banner {
        position: relative;
    }

    .inner_top_banner {
        position: absolute;
        bottom: 0;
    }

    .top_banners {
        height: 500px;
    }
</style>

<body>


    <div class="container-fluid bg_black text-center top_navigation">
        <div class="row p-3">
            <div class="col-sm text-white">
                Free delivery starting from £100
            </div>
            <div class="col-sm text-white">
                BOOK A VIDEO CHAT
            </div>
            <div class="col-sm text-white">
                <i class="fa-light fa-lock-hashtag"></i> Secure Payment
            </div>
        </div>
    </div>


    <div class="container-fluid text-center Samsonite_logo">
        <a><img src="{{ asset('uploads/website/logo.jpeg') }}" class="img-fluid mb-2 logo" style="width: 20%;" /></a>
    </div>

    <div class="container-fluid text-center Samsonite_logo ">
        <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 search_bar border-top-0 border-right-0 border-left-0" type="search"
                    placeholder="Search" aria-label="Search">
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Luggage <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Backpack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disney & Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Personalisation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Summer" href="#">% Summer Offer %</a>
                    </li>
                    <li class="nav-item ml_6">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Brands</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

    <div class="my-4 container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="header_banner">
                    <img src="{{ asset('uploads/website/head_banner.jpg') }}" class="img-fluid top_banners">
                    <div class="inner_top_banner m-3">
                        <button
                            class="btn btn-info rounded-1 text-dark bg-white border-0 font-weight-bold px-4 py-3 banner_button">UPGRADE
                            YOUR
                            LUGGAGE
                            NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mosaic_banner">
                <div class="header_banner">
                    <img src="{{ asset('uploads/website/mosaic_banner.jpg') }}" class="img-fluid top_banners mosaic_banner">
                    <div class="inner_top_banner m-3">
                        <button
                            class="btn btn-info rounded-1 text-dark bg-white border-0 font-weight-bold px-4 py-3">GET
                            YOUR SET</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">

        <h5 class="ml-5 fs_14">Our Recommendations</h5>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="inner_bag_details">
                                <img src="{{ asset('uploads/website/suit.png') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0">Proxis</h4>
                                    <p class="mb-0">75 x 51 x 31 cm | 3 kg</p>
                                    <h6 class="mb-0">£419.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_bag_details text-start">
                                <img src="{{ asset('uploads/website/suit.png') }}" class="img-fluid">
                                <div class="product_detail text-start">
                                    <h4 class="mb-0">Proxis</h4>
                                    <p class="mb-0">75 x 51 x 31 cm | 3 kg</p>
                                    <h6 class="mb-0">£419.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_bag_details text-start">
                                <img src="{{ asset('uploads/website/suit.png') }}" class="img-fluid">
                                <div class="product_detail text-start">
                                    <h4 class="mb-0">Proxis</h4>
                                    <p class="mb-0">75 x 51 x 31 cm | 3 kg</p>
                                    <h6 class="mb-0">£419.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_bag_details text-start">
                                <img src="{{ asset('uploads/website/suit.png') }}" class="img-fluid">
                                <div class="product_detail text-start">
                                    <h4 class="mb-0">Proxis</h4>
                                    <p class="mb-0">75 x 51 x 31 cm | 3 kg</p>
                                    <h6 class="mb-0">£419.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="inner_bag_details ">
                                <img src="{{ asset('uploads/website/suit.png') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0">Proxis</h4>
                                    <p class="mb-0">75 x 51 x 31 cm | 3 kg</p>
                                    <h6 class="mb-0">£419.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_bag_details">
                                <img src="{{ asset('uploads/website/suit.png') }}" class="img-fluid">
                                <div class="product_detail">
                                    <h4 class="mb-0">Proxis</h4>
                                    <p class="mb-0">75 x 51 x 31 cm | 3 kg</p>
                                    <h6 class="mb-0">£419.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_bag_details">
                                <img src="{{ asset('uploads/website/suit.png') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0">Proxis</h4>
                                    <p class="mb-0">75 x 51 x 31 cm | 3 kg</p>
                                    <h6 class="mb-0">£419.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_bag_details">
                                <img src="{{ asset('uploads/website/suit.png') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0">Proxis</h4>
                                    <p class="mb-0">75 x 51 x 31 cm | 3 kg</p>
                                    <h6 class="mb-0">£419.00</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="mt-5">
        <img src="{{ asset('uploads/website/mid_banner.jpg') }}" alt="mid banner not found" class="img-fluid">
    </div>

    <div class="container mt-5">
        <h5 class="fs_14">SHOP YOUR FAVOURITE STYLES</h5>
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="inner_fav_Styles">
                                <img src="{{ asset('uploads/website/fav_style.jpg') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0 mt-3 mb-3">More Sustainable Luggage & Bags</h4>
                                    <p>Premium quality, striking style, outstanding interior organisation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_fav_Styles">
                                <img src="{{ asset('uploads/website/fav_style.jpg') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0 mt-3 mb-3">More Sustainable Luggage & Bags</h4>
                                    <p>Premium quality, striking style, outstanding interior organisation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_fav_Styles">
                                <img src="{{ asset('uploads/website/fav_style.jpg') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0 mt-3 mb-3">More Sustainable Luggage & Bags</h4>
                                    <p>Premium quality, striking style, outstanding interior organisation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_fav_Styles">
                                <img src="{{ asset('uploads/website/fav_style.jpg') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0 mt-3 mb-3">More Sustainable Luggage & Bags</h4>
                                    <p>Premium quality, striking style, outstanding interior organisation</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="inner_fav_Styles">
                                <img src="{{ asset('uploads/website/fav_style.jpg') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0 mt-3 mb-3">More Sustainable Luggage & Bags</h4>
                                    <p>Premium quality, striking style, outstanding interior organisation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_fav_Styles">
                                <img src="{{ asset('uploads/website/fav_style.jpg') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0 mt-3 mb-3">More Sustainable Luggage & Bags</h4>
                                    <p>Premium quality, striking style, outstanding interior organisation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_fav_Styles">
                                <img src="{{ asset('uploads/website/fav_style.jpg') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0 mt-3 mb-3">More Sustainable Luggage & Bags</h4>
                                    <p>Premium quality, striking style, outstanding interior organisation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner_fav_Styles">
                                <img src="{{ asset('uploads/website/fav_style.jpg') }}" class="img-fluid">
                                <div class="product_detail ">
                                    <h4 class="mb-0 mt-3 mb-3">More Sustainable Luggage & Bags</h4>
                                    <p>Premium quality, striking style, outstanding interior organisation</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>


    <div class="mt-5">
        <img src="{{ asset('uploads/website/emboss.jpg') }}" alt="emboss image" class="img-fluid">
    </div>

    <div class="mt-5 container-fluid">
        <div class="row">
            <div class="col-lg-6 border-top border-right border-bottom">
                <div class="d-flex benefit align-items-center">
                    <img src="{{ asset('uploads/website/clock.PNG') }}" alt="no image" style="width: 80px ; height: 80px;">
                    <div class="px-4">
                        <strong class="mb-0 benefit-title"> Fast free standard delivery starting from £100</strong>
                        <p class="my-2">Baggage Factory uses only the best courier services and guarantees the safe delivery
                            of all
                            your online orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 border-top border-bottom">
                <div class="d-flex benefit align-items-center">
                    <img src="{{ asset('uploads/website/refresh.PNG') }}" alt="no image" style="width: 80px ; height: 80px;">
                    <div class="px-4">
                        <strong class="mb-0 benefit-title"> Returns are free</strong>
                        <p class="my-2">Shopping at Baggage Factory is risk-free. We guarantee your satisfaction by offering
                            free returns.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 border-right border-bottom">
                <div class="d-flex benefit align-items-center">
                    <img src="{{ asset('uploads/website/secure.PNG') }}" alt="no image" style="width: 80px ; height: 80px;">
                    <div class="px-4">
                        <strong class="mb-0 benefit-title"> Secure payment</strong>
                        <p class="my-2">Secure Socket Layer (SSL) encryption is used for every transaction in order to
                            ensure that your order is secure.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  border-bottom">
                <div class="d-flex benefit align-items-center">
                    <img src="{{ asset('uploads/website/globe.PNG') }}" alt="no image" style="width: 80px ; height: 80px;">
                    <div class="px-4">
                        <strong class="mb-0 benefit-title"> Global commercial warranty</strong>
                        <p class="my-2">Baggage Factory guarantees worldwide commercial warranty services to ensure your
                        Baggage Factory luggage can always stay by your side.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="py-5" style="background-color: #F8F8F8;">
        <div class="text-center">
            <h3 class="font-weight-bold">Join Our Community</h3>
            <p class="my-3">
                Get your exclusive welcome gift: free suitcase personalisation</p>
            <div class="d-flex justify-content-center my-2">

                <input type="email" name="email"
                    class="border-right-0 border-top-0 border-left-0 form-control border-dark w-25 "
                    placeholder="Enter Your Email">
            </div>
        </div>

    </div>

    <div class="bg_black footer_main">
        <div class=" container  py-4">
            <div class="row">
                <div class="col-lg-2">
                    <h6 class="text-secondary">NEAREST OFFICIAL Baggage Factory STORES</h6>
                    <ul class="p-0 footer_ul">
                        <li><u> <a href="#" class="footer_navlinks">Find a store</a></u></li>
                        <!-- <li> <a href="#" class="footer_navlinks">Nav Links</a></li>
                        <li> <a href="#" class="footer_navlinks">Nav Links</a></li>
                        <li> <a href="#" class="footer_navlinks">Nav Links</a></li> -->
                    </ul>

                </div>
                <div class="col-lg-2">
                    <h6 class="text-secondary">Support</h6>
                    <ul class="p-0 footer_ul">
                        <li> <a href="#" class="footer_navlinks">About Us</a></li>
                        <li> <a href="#" class="footer_navlinks">Shipping & Delivery</a></li>
                        <li> <a href="#" class="footer_navlinks">Terms & Conditions</a></li>
                        <li> <a href="#" class="footer_navlinks">Returns Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="text-secondary">PAGES</h6>
                    <ul class="p-0 footer_ul">
                        <li> <a href="#" class="footer_navlinks">Luggage</a></li>
                        <li> <a href="#" class="footer_navlinks">Shopping Trolley</a></li>
                        <li> <a href="#" class="footer_navlinks">Brands</a></li>
                        <li> <a href="#" class="footer_navlinks">Warranty</a></li>
                    </ul>
                </div>
              
                <div class="col-lg-2">
                    <h6 class="text-secondary">CONTACT US</h6>
                    <ul class="p-0 footer_ul">
                        <li> <a href="#" class="footer_navlinks">Contact Us</a></li>
                        <li> <a href="#" class="footer_navlinks">Store Locator</a></li>
                       
                    </ul>
                </div>
                <div class="col-lg-4 text-center">
                    <h6 class="text-secondary">Join us on</h6>
                    <img src="{{ asset('uploads/website/tiktok.PNG') }}" class="img-fluid" />
                    <br />
                    <a href="#"><i class="fa-brands fa-facebook-f text-white mx-1"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram text-white mx-1"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube text-white mx-1"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter text-white mx-1"></i></a>
                    <a href="#"><i class="fa-brands fa-pinterest text-white mx-1"></i></a>

                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


</body>

</html>