<footer class="main">

    <div class="mt-5 container-fluid">
        <div class="row">
            <div class="col-lg-6 border-top border-right border-bottom">
                <div class="d-flex benefit align-items-center">
                    <img src="{{ asset('uploads/website/clock.PNG') }}" alt="no image"
                        style="width: 80px ; height: 80px;">
                    <div class="px-4">
                        <strong class="mb-0 benefit-title"> Fast free standard delivery starting from £100</strong>
                        <p class="my-2">Baggage Factory uses only the best courier services and guarantees the safe
                            delivery
                            of all
                            your online orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 border-top border-bottom">
                <div class="d-flex benefit align-items-center">
                    <img src="{{ asset('uploads/website/refresh.PNG') }}" alt="no image"
                        style="width: 80px ; height: 80px;">
                    <div class="px-4">
                        <strong class="mb-0 benefit-title"> Returns are free</strong>
                        <p class="my-2">Shopping at Baggage Factory is risk-free. We guarantee your satisfaction by
                            offering
                            free returns.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 border-right border-bottom">
                <div class="d-flex benefit align-items-center">
                    <img src="{{ asset('uploads/website/secure.PNG') }}" alt="no image"
                        style="width: 80px ; height: 80px;">
                    <div class="px-4">
                        <strong class="mb-0 benefit-title"> Secure payment</strong>
                        <p class="my-2">Secure Socket Layer (SSL) encryption is used for every transaction in order to
                            ensure that your order is secure.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  border-bottom">
                <div class="d-flex benefit align-items-center">
                    <img src="{{ asset('uploads/website/globe.PNG') }}" alt="no image"
                        style="width: 80px ; height: 80px;">
                    <div class="px-4">
                        <strong class="mb-0 benefit-title"> Global commercial warranty</strong>
                        <p class="my-2">Baggage Factory guarantees worldwide commercial warranty services to ensure your
                            Baggage Factory luggage can always stay by your side.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="py-5" style="background-color: #F8F8F8;">
        <div class="text-center">
            <h3 class="font-weight-bold">Join Our Community</h3>
            <p class="my-3">
                Get your exclusive welcome gift: free suitcase personalisation</p>
            <div class="d-flex justify-content-center my-2">

                <input type="email" name="subscriber_email" id="subscribeemail"
                    class="border-right-0 border-top-0 border-left-0 form-control border-dark w-25 "
                    placeholder="Enter Your Email">
                <button class="btn bg-transparent text-dark border-0 subscribe_btn" type="submit"
                    onclick="subscribe()">Subscribe</button>

            </div>
        </div>

    </div>
   
    <section class="section-padding footer-mid">
        <div class="bg_black footer_main">
            <div class=" container  py-4">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <h6 class="text-secondary">NEAREST OFFICIAL Baggage Factory STORES</h6>
                        <ul class="p-0 footer_ul">
                            <li><u> <a href="#" class="footer_navlinks">Find a store</a></u></li>
                        </ul>

                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <h6 class="text-secondary">Support</h6>
                        <ul class="p-0 footer_ul">
                            <li> <a href="{{ url('/about') }}" class="footer_navlinks">About Us</a></li>
                            <li> <a href="{{ url('/privacy-policy') }}" class="footer_navlinks">Return Policy</a></li>
                            <li> <a href="{{ url('/terms&conditions') }}" class="footer_navlinks">Terms & Conditions</a>
                            </li>
                            <li> <a href="{{ url('/contact') }}" class="footer_navlinks">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <h6 class="text-secondary">My Account</h6>
                        <ul class="p-0 footer_ul">
                            @if (!session()->has('customer'))
                            <li><a href="{{ url('/loginPage') }}" class="footer_navlinks">Sign In</a></li>
                            @endif
                            <li><a href="{{ url('/cart') }}" class="footer_navlinks">View Cart</a></li>
                            <li><a href="{{ url('/wishlist') }}" class="footer_navlinks">My Wishlist</a></li>
                            <li><a href="{{ url('/order-tracking') }}" class="footer_navlinks">Track My Order</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <h6 class="text-secondary">CONTACT US</h6>
                        <ul class="p-0 footer_ul">
                            <li> <a href="{{ url('/contact') }}" class="footer_navlinks">Contact Us</a></li>
                            <li> <a href="#" class="footer_navlinks">Store Locator</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h6 class="text-secondary">Join us on</h6>
                        <img src="{{ asset('uploads/website/tiktok.PNG') }}" class="img-fluid" />
                        <br />
                        <a href="#"><i class="fa-brands fa-facebook-f text-white mx-1"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram text-white mx-1"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube text-white mx-1"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter text-white mx-1"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest text-white mx-1"></i></a>

                    </div>
                </div>
            </div>
            <div class="container brdr_tp">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 my-3">
                        <h3 class="text-white">Our Partner</h3>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 my-3">
                        <img src="{{ asset('uploads/website/amto.png') }}" class="img-fluid w-100">
                        <img src="{{ asset('uploads/website/amto-product.png') }}" class="img-fluid w-100">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 my-3">
                        <img src="{{ asset('uploads/website/gregory.png') }}" class="img-fluid w-100">
                        <img src="{{ asset('uploads/website/gregory-product.png') }}" class="img-fluid w-100">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 my-3">
                        <img src="{{ asset('uploads/website/lipault.png') }}" class="img-fluid w-100">
                        <img src="{{ asset('uploads/website/lipault-product.png') }}" class="img-fluid w-100">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 my-3">
                        <img src="{{ asset('uploads/website/tumi.png') }}" class="img-fluid w-100">
                        <img src="{{ asset('uploads/website/tumi-product.png') }}" class="img-fluid w-100">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 my-3">
                        <img src="{{ asset('uploads/website/rolling-luggage.png') }}" class="img-fluid w-100">
                        <img src="{{ asset('uploads/website/rolling-luggage-product.png') }}" class="img-fluid w-100">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="copywt p-4 text-white text-center">
        Copyright © 2023 Baggage Factory. All rights reserved. Visit our corporate site for more information. Baggage
        Factory and
        the Baggage Factory logo are registered trademarks of Baggage Factory IP Holdings S.àr.l.
    </div>
 

</footer>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center">
                <h5 class="mb-10">Now Loading</h5>
                <div class="loader">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor JS-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

<!-- Template  JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/shop.js') }}"></script>
<script src="{{ asset('js/iziToast.js') }}"></script>
@include('vendor.lara-izitoast.toast')


</body>
<script>
// Set the date we're counting down to
var countDownDate = new Date("sep 10, 2022").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h ";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
@stack('footer')
<script>
function subscribe() {
    var email = $('#subscribeemail').val();
    $.ajax({
        method: "post",
        url: "{{ url('/subscribe') }}",
        data: {
            "subscriber_email": email,
            "_token": '{{ csrf_token() }}'
        },
        success: function(response) {
            if (response.success) {
                iziToast.success({
                    position: 'topRight',
                    message: response.message
                });
            } else {
                iziToast.warning({
                    position: 'topRight',
                    message: response.message
                });
            }
        },
        error: function(response) {
            iziToast.error({
                position: 'topRight',
                message: response.responseJSON.errors.subscriber_email[0]
            });
        }
    });
}

function currency_change(currency_code) {
    $.ajax({
        type: "POST",
        url: "{{ route('currency-load') }}",
        data: {
            'currency_code': currency_code,
            '_token': '{{ csrf_token() }}'
        },
        success: function(response) {
            if (response.success) {
                window.location.reload();
            } else {
                iziToast.error({
                    position: 'topRight',
                    message: response.message
                });
            }
        }
    });
}
</script>

</html>