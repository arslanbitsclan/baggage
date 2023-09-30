@extends('layouts.main')
@push('head')
<title>Return Policy | Baggage Factory</title>
@endpush
@section('section')
@php
$content = \App\Models\CMS::where('page', '=', 'policy')->first();
@endphp
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('/') }}" rel="nofollow">Home</a>
                <span></span> Return policy
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-page pr-30">
                        <div class="single-header style-2">
                            <h2>Return Policy Baggage Factory</h2>
                        </div>
                        <ul>
                            <li style="list-style: disc;">
                                <h4>Return Policy</h4>
                            </li>
                        </ul>
                        <p>We aim to ensure that all our customers are 100% satisfied with both our products and our
                            service.</p>
                        <div class="pl-5" style="text-align: justify;">
                            Should you wish to return anything to us, we will be more than happy to refund or
                            exchange any product provided it is in a fully resalable condition. Please note this
                            applies to full price items only and does not apply to sale items. Sale items bought on
                            the web or in one of our retail outlets cannot be refunded.
                        </div>
                        <div class="pl-5 mt-3" style="text-align: justify;">
                            Full price items should be returned within 30 days and with all the original brand
                            packaging, tags, labels and accessories.
                        </div>
                        <div class="pl-5 mt-3" style="text-align: justify;">
                            Your return needs to be in the same condition delivered in, if the tags, labels and any
                            accessories have been removed then we will not be able to accept your return.
                        </div>
                        <div class="single-content">
                            {!! $content->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($content->ad_status == 'Show')
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="banner-img banner-big wow fadeIn animated f-none">
                            <img src="{{ asset('/uploads/' . $content->ad) }}" alt="">
                            <div class="banner-text d-md-block d-none" style="margin-left: -2%;margin-top: 9.1%;">
                                <a href="@if (empty($content->category_slug) && empty($content->sub_category_slug)) {{ url('/shop') }}
                                            @elseif (!empty($content->category_slug) && empty($content->sub_category_slug))
                                                {{ url('/shop/' . $content->category_slug) }}
                                            @elseif (!empty($content->category_slug) && !empty($content->sub_category_slug))
                                                {{ url('/shop/' . $content->category_slug . '/' . $content->sub_category_slug) }} @endif"
                                    class="btn ">Learn More <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</main>
@endsection