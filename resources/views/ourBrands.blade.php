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
        <li>EAGLE</li>
        <li>FANTANA</li>
        <li>PETER JAMES</li>
    </ul>
    <div class="text-center">

        <img src="{{ asset('uploads/website/ourbrand.jpg') }} " class=" img-fluid w-50">
    </div>
</div>
</main> @endsection