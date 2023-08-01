@extends('layouts.main')
@push('head')
<title>Home | Baggage Factory</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
.c-text {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    /* number of lines to show */
    -webkit-box-orient: vertical;
}

.banner-img.banner-2 .banner-text {
    left: -10px;
    top: 55px;
}

.l2-text {
    f overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    /* number of lines to show */
    -webkit-box-orient: vertical;
}
</style>
@endpush
@section('section')
<main class="main">

    <div class="my-4 container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_banner">
                    <img src="{{ asset('uploads/website/431.png') }}" class="img-fluid w-100 h-100 top_banners">
                    <div class="inner_top_banner m-5">
                        <button
                            class="btn btn-info rounded-1 text-dark bg-white border-0 font-weight-bold px-4 py-3 banner_button">UPGRADE
                            YOUR
                            LUGGAGE
                            NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <article class="container-fluid mt-4 ">

        <h5 class="ml-2 fs_14">Our Products</h5>


        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-center">
                @php $counter = 0; @endphp
                <div class="carousel-item active">
                    <div class="row">
                        @foreach ($products as $product)
                        @if ($product->is_feature == 'Featured')
                        @if ($counter % 4 == 0 && $counter > 0)
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        @endif
                        <div class="col-lg-3">
                            <section class="inner_bag_details position-relative">
                                @php
                                $badges = explode(',', $product->badges);
                                $space = 0;
                                @endphp
                                @foreach ($badges as $badge)
                                @if ($badge == 'Hot')
                                <div class="product-badges product-badges-position product-badges-mrg "
                                    style="margin-top: {{ $space }}%;">
                                    <span class="hot inner_card_badge">Hot</span>
                                </div>
                                @elseif ($badge == 'New')
                                <div class="product-badges product-badges-position product-badges-mrg"
                                    style="margin-top: {{ $space }}%;">
                                    <span class="new inner_card_badge">New</span>
                                </div>
                                @elseif ($badge == 'Best Sell')
                                <div class="product-badges product-badges-position product-badges-mrg"
                                    style="margin-top: {{ $space }}%;">
                                    <span class="best inner_card_badge">Best Sell</span>
                                </div>
                                @elseif ($badge == 'Featured')
                                <div class="product-badges product-badges-position product-badges-mrg"
                                    style="margin-top: {{ $space }}%;">
                                    <span class="hot inner_card_badge">Featured</span>
                                </div>
                                @elseif ($badge == 'Sale')
                                <div class="product-badges product-badges-position product-badges-mrg"
                                    style="margin-top: {{ $space }}%;">
                                    <span class="sale inner_card_badge">Sale</span>
                                </div>
                                @endif
                                @php
                                $space = $space + 9;
                                @endphp
                                @endforeach
                                <a href="{{ url('/product-detail/' . $product->id) }}">
                                    @php
                                    $image = explode(',', $product->suppornting_media);
                                    @endphp
                                    <img class="product_images " src="{{ asset('uploads/' . $product->main_media) }}"
                                        alt="">
                                </a>
                                <div class="product_detail mt-3">
                                    <h5 class="mb-0" title="{{ $product->title }}">
                                        <a href="{{ url('/product-detail/' . $product->id) }}"
                                            class="text-decoration-none text-dark">{{ $product->title }}</a>
                                    </h5>

                                    @php
                                    $price = 0;
                                    @endphp
                                    <!-- <p class="mb-0">75 x 51 x 31 cm | 3 kg</p> -->
                                    <div class="baggage-product-price h3 mb-0">
                                        @if ($product->sale_price > 0)
                                        <span class="sale-price">{{ currency_converter($product->sale_price) }}</span>
                                        <span class="old-price">{{ currency_converter($product->price) }}</span>
                                        @php
                                        $price = $product->sale_price;
                                        @endphp
                                        @else
                                        <span class="regular-price">{{ currency_converter($product->price) }}</span>
                                        @php
                                        $price = $product->price;
                                        @endphp
                                        @endif
                                    </div>
                                </div>
                                <article class="mt-3 buy_product  d-flex">

                                    <button aria-label="Add To Wishlist"
                                        class="action-btn hover-up  btn btn-primary  d-flex align-items-center justify-content-center h5"
                                        href="javascript:void(0)" onclick="addToWishlist({{ $product->id }})">Add to
                                        Wishlist <i class="fi-rs-heart ml-2"></i></button>

                                    <button aria-label="Add To Cart"
                                        class="action-btn hover-up btn btn-dark ml-2 d-flex align-items-center justify-content-center h5"
                                        href="javascript:void(0)"
                                        onclick="addToCart({{ $product->id }},{{ $price }},1)">
                                        Add to Cart<i class="fi-rs-shopping-bag-add ml-2"></i></button>

                                </article>
                            </section>

                        </div>
                        @php $counter++; @endphp
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="mt-5 d-flex">
                        <img src="{{ asset('uploads/website/443.png') }}" alt="mid banner not found"
                            class="img-fluid w-50">
                        <img src="{{ asset('uploads/website/379.png') }}" alt="mid banner not found"
                            class="img-fluid w-50">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="mt-5 d-flex">
                        <img src="{{ asset('uploads/website/541.png') }}" alt="mid banner not found"
                            class="img-fluid w-50">
                        <img src="{{ asset('uploads/website/683.png') }}" alt="mid banner not found"
                            class="img-fluid w-50">
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




        <div class="container-fluid mt-5">
            <h5 class="fs_14">SHOP YOUR FAVOURITE STYLES</h5>
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner text-center">
                    @php $counter = 0; @endphp
                    <div class="carousel-item active">
                        <div class="row">
                            @foreach ($products as $product)

                            @if ($counter % 4 == 0 && $counter > 0)
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            @endif
                            <div class="col-lg-3">
                                <div class="inner_bag_details">
                                    <a href="{{ url('/product-detail/' . $product->id) }}">
                                        @php
                                        $image = explode(',', $product->suppornting_media);
                                        @endphp
                                        <img class="img-fluid w-100"
                                            src="{{ asset('uploads/' . $product->main_media) }}" alt="">
                                    </a>
                                    <div class="product_detail mt-3">

                                        <h5 class="mb-0" title="{{ $product->title }}">
                                            <a href="{{ url('/product-detail/' . $product->id) }}"
                                                class="text-decoration-none text-dark">{{ $product->title }}</a>
                                        </h5>

                                        @php
                                        $price = 0;
                                        @endphp
                                        <!-- <p class="mb-0">75 x 51 x 31 cm | 3 kg</p> -->
                                        <div class="baggage-product-price h3 mb-0">
                                            @if ($product->sale_price > 0)
                                            <span
                                                class="sale-price">{{ currency_converter($product->sale_price) }}</span>
                                            <span class="old-price">{{ currency_converter($product->price) }}</span>
                                            @php
                                            $price = $product->sale_price;
                                            @endphp
                                            @else
                                            <span class="regular-price">{{ currency_converter($product->price) }}</span>
                                            @php
                                            $price = $product->price;
                                            @endphp
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $counter++; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </article>
    <script>
    $(document).ready(function() {
        // Set the carousel to loop automatically
        $('#carouselExampleIndicators2').carousel({
            interval: 3000, // Set the interval (time between slides) as needed
            wrap: true // Set wrap to true to enable looping
        });
    });
    </script>


    <section class="mb-50 container-fluid mt-5">
        <div class="row">
            <div class="col-lg-8 p-0">
                <img src="{{ asset('uploads/website/emboss.jpg') }}" alt="emboss image" class="img-fluid">
            </div>
            <div class="col-lg-4 p-0">
                <video width="450" height="310" controls>
                    <source src="{{ asset('uploads/website/clip.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
</main>
@endsection
@push('footer')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function addToCart(id, price, qty) {
    $.ajax({
        method: "post",
        url: "{{ url('/AddToCart') }}",
        data: {
            "product_id": id,
            "product_price": price,
            "product_qty": qty
        },
        success: function(response) {
            if (response.success) {
                iziToast.success({
                    position: 'topRight',
                    message: response.message
                });
                $('#cartheading').html(response.qty);
            } else {
                iziToast.warning({
                    position: 'topRight',
                    message: response.message
                });
            }
        }
    });
}

function addToWishlist(id) {
    $.ajax({
        method: "post",
        url: "{{ url('/AddToWishlist') }}",
        data: {
            "product_id": id,
        },
        success: function(response) {
            if (response.success) {
                iziToast.success({
                    position: 'topRight',
                    message: response.message
                });
                $('#wishlistheading').html(response.qty)
            } else {
                iziToast.warning({
                    position: 'topRight',
                    message: response.message
                });
            }
        }
    });
}
</script>
@endpush