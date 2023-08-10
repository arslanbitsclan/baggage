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
            <div class="text-center">
                <img src="{{ asset('uploads/website/EAGLE.jpg') }} " class=" img-fluid w-50">
            </div>
            <li class="my-4">FANTANA</li>
            <div class="text-center">
                <img src="{{ asset('uploads/website/FANTANA.jpg') }} " class=" img-fluid w-50">
            </div>
            <li class="my-4">PETER JAMES</li>
            <div class="text-center">
                <img src="{{ asset('uploads/website/PETER_JAMES.jpg') }} " class=" img-fluid w-50">
            </div>
        </ul>

    </div>
</main> @endsection