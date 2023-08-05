@extends('layouts.main')
@push('head')
<title>Locator | Baggage Factory</title>
@endpush
@section('section')
<main>

    <div class="container-fluid">
        <h1 class="mb-0 mt-3">Our Stores</h1>
        <div class="row">

            <div class="col-lg-6 py-3">
                <div class="d-flex">
                    <img src="{{ asset('uploads/website/Brighton.jpg') }}" class="img-fluid w-50">
                    <div class="ml-4">
                        <h6 class="mb-0">
                            Brighton
                        </h6>
                        <p class="w-75">Unit 36, Waterfront,Brighton Marina, BN2 5WA</p>
                        <div class="mb-2"> <i
                                class="fa-regular fa-envelope mr-2"></i><a>sales@baggagefactory.co.uk</a></div>

                        <div class="mb-2"><i class="fa-solid fa-phone mr-2"></i>0127 699 996</div>

                        <button class="btn btn-outline-secondary font-weight-bold btn-sm  p-2 rounded-0">
                            Store Details
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="d-flex">
                    <img src="{{ asset('uploads/website/Sterling.jpg') }}" class="img-fluid w-50">
                    <div class="ml-4">
                        <h6 class="mb-0">
                            Sterling
                        </h6>
                        <p class="w-75">Unit 23, Sterling Mills Outlet Village, Tillicoultry, FK13 6HQ</p>
                        <div class="mb-2"> <i
                                class="fa-regular fa-envelope mr-2"></i><a>sales@baggagefactory.co.uk</a></div>

                        <div class="mb-2"><i class="fa-solid fa-phone mr-2"></i>01259 928 400</div>

                        <button class="btn btn-outline-secondary font-weight-bold btn-sm p-2 rounded-0">
                            Store Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 py-3">
                <div class="d-flex">
                    <img src="{{ asset('uploads/website/Trentham.jpg') }}" class="img-fluid w-50">
                    <div class="ml-4">
                        <h6 class="mb-0">
                            TRENTHAM
                        </h6>
                        <p class="w-75">Unit 301/302 TrenthamVillage, Stone Road, Stock on Trent, ST4 8AX</p>
                        <div class="mb-2"> <i
                                class="fa-regular fa-envelope mr-2"></i><a>sales@baggagefactory.co.uk</a></div>

                        <div class="mb-2"><i class="fa-solid fa-phone mr-2"></i>01782 657 392</div>

                        <button class="btn btn-outline-secondary font-weight-bold btn-sm p-2 rounded-0">
                            Store Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 py-3">
                <div class="d-flex">
                    <img src="{{ asset('uploads/website/Chathem.jpg') }}" class="img-fluid w-50">
                    <div class="ml-4">
                        <h6 class="mb-0">
                            CHATHAM
                        </h6>
                        <p class="w-75">Unit 47, Dockside Outlet Centre, Maritime Way, Chatham, Kent, ME4 3ED</p>
                        <div class="mb-2"> <i
                                class="fa-regular fa-envelope mr-2"></i><a>sales@baggagefactory.co.uk</a></div>

                        <div class="mb-2"><i class="fa-solid fa-phone mr-2"></i>01634 892 738</div>

                        <button class="btn btn-outline-secondary font-weight-bold btn-sm p-2 rounded-0">
                            Store Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 py-3">
                <div class="d-flex">
                    <img src="{{ asset('uploads/website/Peak Villege.png') }}" class="img-fluid w-50">
                    <div class="ml-4">
                        <h6 class="mb-0">
                            PEAK VILLAGE
                        </h6>
                        <p class="w-75">Unit 1, Peak Village, Chatsworth Road, Matlock, DE4 2JE</p>
                        <div class="mb-2"> <i
                                class="fa-regular fa-envelope mr-2"></i><a>sales@baggagefactory.co.uk</a></div>

                        <div class="mb-2"><i class="fa-solid fa-phone mr-2"></i>01629 735 777</div>

                        <button class="btn btn-outline-secondary font-weight-bold btn-sm p-2 rounded-0">
                            Store Details
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="baggage-locator-retailer">
        <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:5%;height:10%" />
            <span>Baggage Factory Retailers
             </span>
        </div>
        <div class="row">

            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class="  w-75 text-secondary location_details">
                        <h6>BAGGAGE FACTORY </h6>
                        <p class="mb-0">Unit 43, Dalton Park, Murton, County Durham, SR7 9HU </p>
                        <h5>DALTON PARK</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i> 0191 447 0140</p>
                    </div>
                </section>
            </article>

            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class="w-75 text-secondary location_details">
                        <h6>BAGGAGE FACTORY </h6>
                        <p class="mb-0">Unit 52, Lakeside Village outlet centre, White Rose Way, Doncaster, North
                            Yorkshire
                            DN4 5PH </p>
                        <h5>DONCASTER</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i> 01302 618150</p>
                    </div>
                </section>
            </article>

            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class="w-75 text-secondary location_details">
                        <h6>BAGGAGE FACTORY </h6>
                        <p class="mb-0">Unit 10 B, Affinity Outlet Village, Anchorage Road, Fleetwood, Lancashire, FY7
                            6AE
                        </p>
                        <h5>FLEETWOOD</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i> 01253932660 </p>
                    </div>
                </section>
            </article>

            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class="w-75 text-secondary location_details">
                        <h6>BAGGAGE FACTORY
                        </h6>
                        <p class="mb-0">Unit 37,Comet Way,The Galleria, Hatfield, AL10 0YB </p>
                        <h5>GALLERIA</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i> 01707 257 779</p>
                    </div>
                </section>
            </article>

            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE FACTORY
                        </h6>
                        <p class="mb-0">Unit F5, Junction 32, Tomahawk Trail,Castleford,West Yorkshire WF10 4FR </p>
                        <h5>JUNCTION 32</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i> 01977 279 696</p>
                    </div>
                </section>
            </article>
            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE FACTORY
                        </h6>
                        <p class="mb-0">Unit G3 Quaysid MdiaCity, The Quays, Salford, M50 3AG </p>
                        <h5>MANCHESTER</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i> 0161 222 9360</p>
                    </div>
                </section>
            </article>
            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE FACTORY
                        </h6>
                        <p class="mb-0">Unit 23, Sterling Mills Outlet Village, Tillicoultry, FK13 6HQ </p>
                        <h5>STERLING MILLS</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i> 01259 928 400</p>
                    </div>
                </section>
            </article>
            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE WORLD <small>Franchise</small>
                        </h6>
                        <p class="mb-0">Unit 86, Upper Level,Eastgate Shopping Centre, Basildon </p>
                        <h5>BARNET</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i> 01268 522 704</p>
                    </div>
                </section>
            </article>
            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE WORLD <small>Franchise</small>
                        </h6>
                        <p class="mb-0">Unit 64 Gloucester Quays Oulet Centre Gloucester, GL1 5SH </p>
                        <h5>GLOUCESTER</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i>01452 681 527</p>
                    </div>
                </section>
            </article>



            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE WORLD <small>Franchise</small>
                        </h6>
                        <p class="mb-0">Unit 16, The Marlowes Shopping Centre, Hemel Hempstead, HP1 1DX </p>
                        <h5>HEMEL HEMPSTEAD</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i>01442 246 443</p>
                    </div>
                </section>
            </article>
            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE WORLD <small>Franchise</small>
                        </h6>
                        <p class="mb-0">Unit 37, Kingsgate Centre, King Street, Huddersfield, HD1 2QB</p>
                        <h5>HUDDERSFIELD</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i> 01484 768820</p>
                    </div>
                </section>
            </article>
            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE WORLD <small>Franchise</small>
                        </h6>
                        <p class="mb-0">Unit 271 Lakeside Shopping Centre, Grays, RM20 2ZN</p>
                        <h5>LAKESIDE</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i>01708 607 755</p>
                    </div>
                </section>
            </article>

            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE WORLD <small>Franchise</small>
                        </h6>
                        <p class="mb-0">Unit 19, Royals Shopping centre, Southend on Sea, SS1 1DG</p>
                        <h5>SOUTHEND</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i>01702 617797</p>
                    </div>
                </section>
            </article>
            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE WORLD <small>Franchise</small>
                        </h6>
                        <p class="mb-0">Unit 10, West Gate, Stevenage, Hetfordshire, SG1 1QR</p>
                        <h5>STEVENAGE</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i>01438 488 385</p>
                    </div>
                </section>
            </article>

            <article class="col-lg-4 py-4">
                <section class="inner_location d-flex">
                    <img src="{{ asset('uploads/website/pinIcon.png') }}" style="width:10%;height:10%" />
                    <div class=" w-75 text-secondary location_details">
                        <h6>BAGGAGE WORLD <small>Franchise</small>
                        </h6>
                        <p class="mb-0">3 McAurthur Glen Western Designer Outlet Village Kemble Drive Swindon SN2 2DYR
                        </p>
                        <h5>SWINDON</h5>
                        <p><i class="fa-solid fa-phone mr-1"></i>01438 488 385</p>
                    </div>
                </section>
            </article>
            </section>
        </div>
        <div class="map container-fluid p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9582243.656664176!2d-15.019174957373366!3d54.101847533669854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2s!4v1690773056685!5m2!1sen!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</main> @endsection