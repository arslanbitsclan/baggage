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

        <article class="row">
            <div class="col-lg-6 text-center my-auto">
                <strong class="sub_heading">Luggage: </strong>
                <p class="PR_inner_para">
                    We offer a variety of suitcases in different sizes, materials “SOFT & HARD LUGGAGE”, and designs.
                    From
                    lightweight carry-ons to spacious checked-in luggage, our suitcases are designed to offer maximum
                    packing
                    capacity while maintaining durability.</p>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <img src="{{ asset('uploads/website/LUGGAGE.jpg') }} " class=" img-fluid w-75">
                </div>
            </div>

            <div class="col-lg-6 text-center my-auto">
                <div class="text-center">
                    <img src="{{ asset('uploads/website/TRAVEL_BAGS.jpg') }} " class=" img-fluid w-75">
                </div>
            </div>
            <div class="col-lg-6  my-auto">
                <div class="text-center ">
                    <strong class="sub_heading">Travel Bags: </strong>
                    <p class="PR_inner_para">For those who prefer more
                        flexibility, we have
                        a selection of travel bags such as duffel bags, backpacks, and tote bags. These bags are ideal
                        for shorter
                        trips or as additional storage options alongside your main suitcase.</p>
                </div>
            </div>

            <div class="col-lg-6 my-auto">
                <div class="text-center">
                    <strong class="sub_heading">School Bags: </strong>
                    <p class="PR_inner_para">We offer backpacks and messenger
                        bags
                        specifically designed for students of all ages. Our school bags combine ergonomic designs,
                        durability, and
                        ample storage space to accommodate books, stationery, laptops, and other essentials.
                        <br>
                        In addition to our main luggage products, we also offer a range of travel
                        accessories to enhance your travel experience. These include Wallets, luggage tags, packing
                        cubes, travel locks, and more.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <img src="{{ asset('uploads/website/school_and_travel_bags.jpg') }} " class=" img-fluid w-75">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="text-center">
                    <img src="{{ asset('uploads/website/FASHION_BAGS.jpg') }} " class=" img-fluid w-75">
                </div>
            </div>
            <div class="col-lg-6 my-auto text-center">
                <strong class="sub_heading">Fashion Bags: </strong>
                <p class="PR_inner_para"> Stay on-trend with our fashionable
                    handbags,
                    crossbody bags, and clutches. Our collection features a variety of designs, colours, and materials,
                    allowing
                    you to express your personal style while keeping your belongings secure and organized.</p>
            </div>

            <div class="col-lg-6 my-auto">
                <div class="text-center">
                    <strong class="sub_heading ">Business and Laptop Bags: </strong>
                    <p class="PR_inner_para">We understand the importance of keeping your business essentials organized
                        and protected. Our business and laptop bags are designed with functionality and style in mind,
                        featuring dedicated compartments for laptops, tablets, documents, and other accessories. </p>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <img src="{{ asset('uploads/website/LAPTOP_BAGS.jpg') }} " class=" img-fluid w-75">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="text-center">
                    <img src="{{ asset('uploads/website/505.png') }} " class=" img-fluid w-100">
                </div>
            </div>

            <div class="col-lg-6 my-auto">
                <div class="text-center">
                    <strong class="sub_heading">Outdoor Bags: </strong>
                    <p class="PR_inner_para"> For outdoor enthusiasts, we have
                        a range of
                        hiking
                        backpacks, camping bags, and sports bags. These bags are
                        designed with durable materials, comfortable straps, and specialized compartments to accommodate
                        outdoor
                        gear and equipment.</p>
                </div>
            </div>
        </article>






















    </div>
</main> @endsection