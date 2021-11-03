    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
        <div class="container h-100 px-0">
            <div class="suha-footer-nav h-100">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                    <li><a href="{{url('/')}}"><i class="lni lni-home"></i>Home</a></li>
                    <li><a href="{{url('/orders')}}"><i class="lni lni-package"></i>
                            <!-- <img src="{{ asset('img/icons/icon-orders.jpg') }}" width="38" height="181"> -->Orders</a>
                    </li>
                    <li><a href="{{url('/cart')}}"><i class="lni lni-shopping-basket"></i><span class="badge badge-warning" id="lblCartCount">@if(session()->has('uid')) {{ Session::get('countcart') }} @else {{"0"}}  @endif </span>Bag</a></li>
                    <li><a href="{{url('/wishlist-grid')}}"><i class="lni lni-heart"></i><span class="badge badge-warning" id="wishlistCount"> 5 </span>Wishlist</a></li>
                    <li><a href="{{url('/edit-profile')}}"><i class="lni lni-user"></i>Profile</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/default/jquery.passwordstrength.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jarallax.min.js') }}"></script>
    <script src="{{ asset('js/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('js/default/dark-mode-switch.js') }}"></script>
    <script src="{{ asset('js/default/no-internet.js') }}"></script>
    <!-- <script src="{{ asset('js/default/otp-timer.js') }}"></script> -->
    <script src="{{ asset('js/default/active.js') }}"></script>
    <script src="{{ asset('js/pwa.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/ion.rangeSlider.min.js') }}"></script>
    <!-- <script src="{{ asset('js/sweet-alert.js') }}"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
   
</script>
    </body>
    </html>
