@extends('layouts.main')
@push('head')
<title>About | Baggage Factory</title>
@endpush
@section('section')
@php
$content = \App\Models\CMS::where('page', '=', 'about')->first();
@endphp
<main class="main single-page">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('/') }}" rel="nofollow">Home</a>
                <span></span> About us
            </div>
        </div>
    </div>

    <div class="text-center my-5">
        <img src="{{ asset('uploads/website/history.jpg') }}" alt="no imge" class="img-fluid w-75">
    </div>
    <div class="text-center my-5">
        <img src="{{ asset('uploads/website/VISION.jpg') }}" alt="no imge" class="img-fluid w-50">
    </div>
    <div class="text-center my-5">
        <img src="{{ asset('uploads/website/QUALITY_ALWAYS_FIRST.jpg') }}" alt="no imge" class="img-fluid w-50">
    </div>
    <div class="text-center my-5">
        <img src="{{ asset('uploads/website/CUSTOMER_SERVICES.jpg') }}" alt="no imge" class="img-fluid w-50">
    </div>
    <div>
        <img src="{{ asset('uploads/website/novelity.jpg') }}" alt="no imge" class="img-fluid w-100">
    </div>


    <!-- <section class="container-fluid p-0 position-relative">
        <img src="{{ asset('uploads/website/abut1.jpg') }}" alt="Snow" class="img-fluid w-100">
        <div class="top_b_text w_40 p-5">
            <h1 class="text-white font-weight-bolder">EXPECT<br> INNOVATION</h1>
            <p class="text-white fs_13">We want our products to make a positive difference in the life of every
                traveller.</p>
            <p class="text-white fs_13">Throughout our 110-year lifespan, we have been resolutely focused on innovation,
                design, and have been an industry leader in the use of new materials. We are pioneering new solutions
                for the decades to come helping travellers’ journey further, with ever lighter, stronger and more
                sustainable products.</p>
            <p class="text-white fs_13">We will ensure that our commitment to sustainability combines with our
                continuing thirst for innovation to create the kind of future we want to see.</p>
        </div>
    </section> -->



    <!-- <article class="container my-5">
        <div class="row">
            <div class="col-lg-6 p-0" style="background-color:#F0F0F0;">
                <div class="p-5">
                    <h1 style="font-weight: 700; text-transform: uppercase;">Our Values</h1>
                    <div class="values">
                    </div>
                    <p class="mt-3" style="font-weight: 500;">Do unto others as you would have them do unto you.</p>
                    <p style="font-weight: 500;">Our founder Jesse Shwayder inscribed our ethos on a marble that was
                        issued to employees. Over a century later, this remains our guiding principle.</p>
                    <p style="font-weight: 500;">This motto is reflected in 5 core values which are anchored in the
                        heart of our company: entrepreneurialism, openness, partnership, integrity, family feeling</p>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <img src="{{ asset('uploads/website/abut2.jpg') }}" alt="Snow" class="img-fluid w-100" style="  width: 200px;
     height: -webkit-fill-available;  object-fit: cover;">
            </div>
        </div>
    </article>

    <article class="container my-5">
        <div class="row">
            <div class="col-lg-6 p-0">
                <img src="{{ asset('uploads/website/324.jpg') }}" alt="Snow" class="img-fluid w-100" style="  width: 200px;
     height: -webkit-fill-available;  object-fit: cover;">
            </div>
            <div class="col-lg-6 p-0" style="background-color:#F0F0F0;">
                <div class="p-5">
                    <h1 style="font-weight: 700; text-transform: uppercase;">
                        EXPECT INNOVATION</h1>
                    <div class="values">
                    </div>
                    <p class="mt-3" style="font-weight: 500; ">For over a century, Baggage Factory has been a byword for
                        exceptional luggage combining bold design with cutting-edge technology and new materials. From
                        the simple wooden trunk designed by company founder Jesse Shwayder, to modern iconic cases and
                        bags many of which being a pioneer in the industry. In today’s mobile world, Baggage Factory is
                        creating smart, trendsetting solutions for people on the go. Being it for travel, leisure or
                        daily commuting, Baggage Factory caters to all with an extensive range of stylish bags,
                        accessories
                        and durable, lightweight luggage.</p>
                    <button class="btn btn-dark text-white rounded-0 px-4 py-2"
                        style="background-color:black !important; font-weight: 800;">DISCOVER OUR STORY</button>
                </div>
            </div>

        </div>
    </article>

    <article class="container my-5">
        <div class="row">

            <div class="col-lg-6 p-0" style="background-color:#E6EBF8;">
                <div class="p-5">
                    <h1 style="font-weight: 700; text-transform: uppercase;">

                        Baggage Factory in europe</h1>
                    <div class="values">
                    </div>
                    <p class="mt-3" style="font-weight: 500;">With production plants in Belgium and Hungary, we can
                        guarantee great quality products designed with respect for high security standards and
                        transferred with limited transportation distances.</p>
                    <button class="btn btn-dark text-white rounded-0 px-4 py-2"
                        style="background-color:black !important; font-weight: 800;text-transform: uppercase;">discover
                        our made In Europe collections</button>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <img src="{{ asset('uploads/website/abut4.jpg') }}" alt="Snow" class="img-fluid w-100" style="  width: 200px;
     height: -webkit-fill-available;  object-fit: cover;">
            </div>
        </div>
    </article>

    <article class="container my-5">
        <div class="row">
            <div class="col-lg-6 p-0">
                <img src="{{ asset('uploads/website/abut5.jpg') }}" alt="Snow" class="img-fluid w-100" style="  width: 200px;
     height: -webkit-fill-available;  object-fit: cover;">
            </div>
            <div class="col-lg-6 p-0" style="background-color:#C9E1AF;">
                <div class="p-5">
                    <h1 style="font-weight: 700;">
                        OUR RESPONSIBLE JOURNEY</h1>
                    <div class="values">
                    </div>
                    <p class="mt-3" style="font-weight: 500;">Building on our heritage of innovation, quality and
                        durability, we mark our 110th anniversary with the launch of 'Our Responsible Journey', a global
                        strategy and commitment to lead the industry in sustainability.</p>
                    <button class="btn btn-dark text-white rounded-0 px-4 py-2"
                        style="background-color:black !important; font-weight: 800;">DISCOVER OUR RESPONSIBLE
                        JOURNEY</button>
                </div>
            </div>

        </div>
    </article>


    <article class="container my-5">
        <div class="row">

            <div class="col-lg-6 p-0" style="background-color:#BFCCF1;">
                <div class="p-5">
                    <h1 style="font-weight: 700; text-transform: uppercase;">
                        Quality first</h1>
                    <div class="values">
                    </div>
                    <p class="mt-3" style="font-weight: 500;">We deliver the quality, innovation and durability.</p>
                    <button class="btn btn-dark text-white rounded-0 px-4 py-2"
                        style="background-color:black !important; font-weight: 800;text-transform: uppercase;">See how
                        we test</button>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <img src="{{ asset('uploads/website/abut6.jpg') }}" alt="Snow" class="img-fluid w-100" style="  width: 200px;
     height: -webkit-fill-available;  object-fit: cover;">
            </div>
        </div>
    </article>

    <section class="position-relative">
        <img src="{{ asset('uploads/website/b_bnnr.jpg') }}" class="img-fluid">
        <div class="text-center inner_Data">
            <h2 class="text-white mb-4">Who we are</h2>
            <p class="text-white">OUR 13.600 EMPLOYEES ARE OUR GREATEST ASSET</p>
            <p class="text-white">How do we stay ahead of our game?</p>
            <p class="text-white">
                By prioritizing the human touch.</p>
            <button class="btn btn-dark rounded-0 mt-4 p-3"
                style="font-weight:700; background-color:black !important;text-transform: uppercase;">want to join
                us?</button>
        </div>
    </section>

    <article style="background-color:#EFEFEF" class="p-3 py-4 text-center">
        <h3 style="font-weight:700;">SEE ALSO</h3>
        <d1 class="d-flex text-center justify-content-center">
            <p class="mx-2 h4"><a style="font-weight:400; border-bottom:1px solid black; padding-bottom:20px;"
                    class="see_items">Investor</a></p>
            <p class="mx-2 h4"><a style="font-weight:400; border-bottom:1px solid black; padding-bottom:20px;"
                    class="see_items">Press contact</a></p>
            <p class="mx-2 h4"><a style="font-weight:400; border-bottom:1px solid black; padding-bottom:20px;"
                    class="see_items">Catalogue</a></p>
        </d1>
    </article> -->

    <!-- <section class="section-padding">
        <div class="container pt-25">
            <div class="row">
                <div class="align-self-center mb-lg-0 mb-4">
                    <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Company</h6>
                    {!! $content->content !!}
                </div>
            </div>
            <div class="excel">
                <button class="btn btn-primary" id="viewButton">
                    excel
                </button>
            </div>
            <script>
            document.getElementById("viewButton").addEventListener("click", function() {
                var excelFileUrl = "./";
                window.open(excelFileUrl, "_blank");
            });
            </script>

    </section>
    @if ($content->ad_status == 'Show')
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="banner-img banner-big wow fadeIn animated f-none">
                           <img src="{{ asset('/uploads/' . $content->ad) }}" alt=""> -->
    <!-- <div class="banner-text d-md-block d-none" style="margin-left: -2%;margin-top: 9.1%;">
        <a href="@if (empty($content->category_slug) && empty($content->sub_category_slug)) {{ url('/shop') }}
                                            @elseif (!empty($content->category_slug) && empty($content->sub_category_slug))
                                                {{ url('/shop/' . $content->category_slug) }}
                                            @elseif (!empty($content->category_slug) && !empty($content->sub_category_slug))
                                                {{ url('/shop/' . $content->category_slug . '/' . $content->sub_category_slug) }} @endif"
            class="btn ">Learn More <i class="fi-rs-arrow-right"></i></a>
    </div> -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    @endif
</main>
@endsection