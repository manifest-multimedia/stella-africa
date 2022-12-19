@aware(['page'])
    <!--====== FOOTER PART START ======-->

    <footer class="footer-area footer-3-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item mt-30">
                        
                        @if(isset($page->footer_logo[0]))
                            <a href="{!! $page->footer_logo_url !!}"><img src="{!!$page->footer_logo[0]['url']!!}" alt="{!!$page->footer_logo[0]['alt']!!}"></a>
                            @else 
                            <a href="#"><img src="assets/images/logo/logo.png" alt="footer-logo"></a>
                        @endif

                        @if(isset($page->about_us_footer[0]))
                            {!! $page->about_us_footer !!}
                        @else
                             <p>Technological innovation is a fine balance between pragmatism and vision. Pragmatically Stella uses state-of-the-art and proven storage technology combined with system design expert competence, a basis for clever new tailor-made solutions. Our visionary nature however pushes us to continuously keep our eye out for and vet new solutions for seamless integration into our portfolio.</p> 
                        @endif
                        

                        <a href="#"><i class="fal fa-arrow-right"></i> Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-item-2 mt-30">
                        <div class="footer-title">
                            <h3 class="title">Company</h3>
                        </div>
                        <ul>
                       
                            <li>
                                <ul>
                                    <li><a href="#">-  Vision & Mission </a></li>
                                    <li><a href="#">-  Ernegy Solutions</a></li>
                                    <li><a href="#">-  Services</a></li>
                                    <li><a href="#">-  Financing</a></li>
                                    <li><a href="#">-  Portfolio</a></li>
                                    <li><a href="#">-  Latest News</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                   {{-- Left Blank --}}
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-item-3 mt-30">
                        <div class="footer-title">
                            <h3 class="title">Product Showcase</h3>
                        </div>
                        <ul>
                            <li><a href="#"><img src="assets/images/solar_energy.png" alt="solar_ernergy_showcase"></a></li>
                            <li><a href="#"><img src="assets/images/solar_energy_showcase.png" alt="solar_ernergy_showcase"></a></li>
                            <li><a href="#"><img src="assets/images/battery_solutions_showcase.png" alt="battery_solutions_showcase"></a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><img src="assets/images/battery_solutions_showcase.png" alt="battery_solutions_showcase"></a></li>
                            <li><a href="#"><img src="assets/images/solar_energy.png" alt="solar_ernergy_showcase"></a></li>
                            <li><a href="#"><img src="assets/images/solar_energy_showcase.png" alt="solar_ernergy_showcase"></a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><img src="assets/images/solar_energy_showcase.png" alt="solar_ernergy_showcase"></a></li>
                            <li><a href="#"><img src="assets/images/battery_solutions_showcase.png" alt="battery_solutions_showcase"></a></li>
                            <li><a href="#"><img src="assets/images/solar_energy.png" alt="solar_ernergy_showcase"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
   
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== GO TO TOP PART START ======-->
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== GO TO TOP PART ENDS ======-->








    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== counterup js ======-->
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== circle progress js ======-->
    <script src="assets/js/circle-progress.min.js"></script>

    <!--====== waypoints js ======-->
    <script src="assets/js/waypoints.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>