@extends('layouts.main')
@push('head')
<title>Our Brands | Baggage Factory</title>
@endpush
@section('section')
<main>
<div class="container my-4">
    <div class="text-center">

        <h3 class=" font-weight-bold">OUR BRANDS</h3>
    </div>

    <ul class="our_brands_list">
        <li class="my-4">EAGLE</li>
        <img src="{{ asset('uploads/website/431.png') }} " class=" img-fluid w-100">
        <li class="my-4">FANTANA</li>
        <img src="{{ asset('uploads/website/549.jpg') }} " class=" img-fluid w-100">
        <li class="my-4">PETER JAMES</li>
    </ul>
    <div class="text-center">

        <img src="{{ asset('uploads/website/ourbrand.jpg') }} " class=" img-fluid w-100">
    </div>
</div>
</main> @endsection