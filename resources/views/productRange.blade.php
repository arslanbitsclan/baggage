@extends('layouts.main')
@push('head')
<title>Product Range | Baggage Factory</title>
@endpush
@section('section')
<main>
    <div class="container my-4">
        <h4>Product Range:</h4>
        <p>We offer a wide range of Luggage options to cater to different travel preferences and requirements. Whether
            you're embarking on a short weekend trip or a long international journey, we have the perfect luggage to
            suit your needs. <em>Our product range includes:</em></p>


        <p> <strong class="sub_heading">Luggage: </strong></p>
        <div class="text-center">
            <img src="{{ asset('uploads/website/LUGGAGE.jpg') }} " class=" img-fluid w-50">
        </div>

        <p class="mt-5"><strong class="sub_heading">Travel Bags: </strong></p>
        <div class="text-center">
            <img src="{{ asset('uploads/website/TRAVEL_BAGS.jpg') }} " class=" img-fluid w-50">
        </div>


        <p class="mt-5"><strong class="sub_heading">School Bags: </strong></p>
        <div class="text-center">
            <img src="{{ asset('uploads/website/school_and_travel_bags.jpg') }} " class=" img-fluid w-50">
        </div>


        <p class="mt-5"> <strong class="sub_heading">Fashion Bags: </strong></p>
        <div class="text-center">
            <img src="{{ asset('uploads/website/FASHION_BAGS.jpg') }} " class=" img-fluid w-50">
        </div>

        <p class="mt-5"><strong class="sub_heading ">Business and Laptop Bags: </strong> </p>
        <div class="text-center">
            <img src="{{ asset('uploads/website/LAPTOP_BAGS.jpg') }} " class=" img-fluid w-50">
        </div>

        <p class="mt-5"><strong class="sub_heading">Outdoor Bags: </strong> For outdoor enthusiasts, we have a range of
            hiking
            backpacks, camping bags, and sports bags. These bags are
            designed with durable materials, comfortable straps, and specialized compartments to accommodate outdoor
            gear and equipment.</p>
        <div class="text-center">
            <img src="{{ asset('uploads/website/505.png') }} " class=" img-fluid w-50">
        </div>
        <p class="mt-5"><strong class="sub_heading">Travel Accessories: </strong> In addition to our main luggage
            products, we also
            offer a range of travel accessories to enhance your travel
            experience. These include Wallets, luggage tags, packing cubes, travel locks, and more.</p>
        <div class="text-center">
            <img src="{{ asset('uploads/website/luggage_bag2.jpg') }} " class=" img-fluid w-50">
        </div>
    </div>
</main> @endsection