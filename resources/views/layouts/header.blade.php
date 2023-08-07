<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-frontend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:20:36 GMT -->

<head>
    <meta charset="utf-8">
    @stack('head')
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/website/logo.jpg') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lucida+Handwriting+Std&display=swap">

    <style>
    .logo.logo-width-1 a img {
        width: 95px;
        height: 95px;
        margin-top: -8%;
        margin-bottom: -8%;
    }
    </style>
</head>

<body>

    <div class="container-fluid bg_black top_navigation " style="height: 50px;">
    <a href="{{ url('/') }}">
        <img src="{{ asset('uploads/website/welcomeimage.jpg') }}" class="top_moving_text" />
    </a>
    </div>



    <div class="text-center Samsonite_logo">
        <div class="container-fluid  d-flex align-items-center justify-content-between">
            <div>
                <a href="{{ url('/organization_chart') }}" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-sitemap mr-1"></i>
                    <span>Organization Chart</span>
                </a>
            </div>
            <div class="dropdown show hidden-uk-dropdown">
                <a class="btn btn-secondary dropdown-toggle border-0 bg-transparent text-dark ml-3" href="#"
                    role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    United Kingdom
                </a>

                <div class="dropdown-menu text-start p-4" aria-labelledby="dropdownMenuLink">
                    <div class="d-flex header_dropdown_main">
                        <div class="p-3 w_440">
                            <h2 class="dropdown_region">Europe & Africa</h2>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Belgium</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Belgium</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                        </div>
                        <div class="p-3 w_440">
                            <h2 class="dropdown_region">Europe & Africa</h2>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Belgium</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Belgium</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                        </div>
                        <div class="p-3 w_440">
                            <h2 class="dropdown_region">Europe & Africa</h2>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Belgium</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Belgium</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                        </div>
                        <div class="p-3 w_440">
                            <h2 class="dropdown_region">Europe & Africa</h2>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Belgium</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Belgium</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('uploads/website/flag.webp') }}"
                                    style="width: 12%; margin-right: 10px;" />Austia</a>
                        </div>
                    </div>

                </div>

            </div>

            
                                        
            <img src="{{ asset('uploads/website/baggage factory transparent logo.jpg') }}" class="img-fluid mb-2 logo"
                style="width: 30%;margin-left: -636px;"  id="logoImage"/>



            <div>
                <a href="{{ url('/locator') }}" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-map-pin mr-1"></i>
                    <span>Stores</span>
                </a>
                 
                           @if (session()->has('customer'))
                           <!-- <i class="fa-regular fa-user mx-3"> -->
                            <a class="fa-regular fa-user mx-3"  href="{{ url('/my-account') }}">

                                {{ session()->get('customer.f_name') }} {{ session()->get('customer.l_name') }}
                            </a>
                            <!-- </i> -->
                        @else
                          <!-- <i class="fa-regular fa-user mx-3"> -->
                            <a class="fa-regular fa-user mx-3 text-dark"  href="{{ url('/loginPage') }}"> </a>
                             <!-- </i> -->
                        @endif
    
                

                   
                     
                   
                <!-- <a> <i class="fa-regular fa-heart mx-2"></i> <sup class="badge badge-light" id="wishlistheading">
                        {{ $wishlist }}</sup>
                </a>
                <a>
                    <i class="fa-solid fa-cart-shopping mx-2"></i> <sup class="badge badge-light" id="cartheading">
                        {{ $cart }}</sup>
                </a>  -->

            </div>
        </div>

    </div>
    <div class=" container-fluid text-center Samsonite_logo ">
        <nav class=" navbar navbar-expand-lg navbar-transparent bg-transparent">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control  search_bar border-top-0 border-right-0 border-left-0" type="search"
                    placeholder="Search" aria-label="Search">
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">

                    <li class="nav-item ml-auto mr-5">
                        <div class="header_dropdown_main d-flex">
                            @foreach ($categories as $category)
                            <div class="w_250  text-center">
                                <a class="dropdown-item fw_700 px-1  dropdown-toggle navbar_items"
                                    href="{{ url('/shop/' . $category->category_slug) }}">
                                    {{ $category->category_title }}
                                </a>
                                <ul class="sub-category-list dropdown-menu">
                                    <div class="row">
                                        <div class="col-lg-3 ">
                                            <h5 class="ml-3"
                                                style="border-bottom:1px solid black; width:75%; padding-bottom:10px;">
                                                BY MATERIAL</h5>
                                            @foreach ($sub_categories[$category->id] as $item)

                                            <li class="cate_items text-left ml-3">
                                                <a
                                                    href="{{ url('/shop/' . $category->category_slug . '/' . $item->sub_category_slug) }}">{{ $item->sub_category_title }}</a>
                                            </li>

                                            @endforeach
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="{{ asset('uploads/website/dropdown1.png') }}"
                                                class="w-100 img-fluid">
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="{{ asset('uploads/website/dropdown2.png') }}"
                                                class="w-100 img-fluid">
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="{{ asset('uploads/website/amto-product.png') }}"
                                                class="w-100 img-fluid">
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item ml-1">
                        <a class="nav-link px-0" href="{{ url('/wishlist') }}">
                            <span class="badge badge-light">
                                My Wish Lists
                            </span>
                            <i class="fa-regular fa-heart"></i> <sup class="badge badge-light" id="wishlistheading">
                                {{ $wishlist }}</sup>

                        </a>
                    </li>
                    <li class="nav-item ml-1">
                        <a class="nav-link px-0" href="{{ url('/cart') }}">
                            <span class="badge badge-light">
                                View Cart
                            </span>
                            <i class="fa-solid fa-cart-shopping"></i> <sup class="badge badge-light" id="cartheading">
                                {{ $cart }}</sup>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

    <script>
    // Get the logo image element by its ID
    const logoImage = document.getElementById('logoImage');

    // Add a click event listener to the logo image
    logoImage.addEventListener('click', function() {
        // Replace the URL below with the desired destination URL
        window.location.href = 'https://axndispatch.com/';
    });
</script>