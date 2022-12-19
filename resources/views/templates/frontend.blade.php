<x-frontend-layout :context="$__data">

<x-header />

<x-hero-section />
    {{-- {!! $page->content !!} --}}
    
  {{--  BATTERY ENERGY SOLUTIONS START  --}}
      
        <section class="about-us-area about-3-area">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-7">
                        <div class="about-content">
                            <span class=" wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="100ms">Battery Energy Storage Systems</span>
                            <h3 class="title wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="300ms">

                                Battery Energy Storage Systems
                                
                                + Financing Solutions
                                </h3>
                            <p class=" wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="500ms">
                                We offer battery solutions that enable cost savings and revenues for a wide range of market segments. Together with financing solutions such as leasing and battery-as-a-service we can ensure that everyone can become more cost efficient and enjoy the possibilities of utilizing a battery energy storage system (BESS).</p>
                            {{-- <div class="about-info wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="700ms">
                                <h5 class="title">Rosalina D. William</h5>
                                <span>Founder</span>
                                <img src="assets/images/about-info.png" alt="about">
                            </div> --}}
                        </div>
                    </div>
                    <div class="about-thumb">
                        <img src="{{asset('assets/images/battery-energy-storage.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section> 
        {{-- @yield('content') --}}
        {{-- BATTERY ENERGY SOLUTIONS END --}}
    <x-footer />

</x-frontend-layout>