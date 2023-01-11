<x-frontend-layout :context="$__data"> 

    <x-page-title :title="$page->title" />
    
    <!--====== ABOUT BOX PART START ======-->
      
    <section class="about-box-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-box">
                        <div class="shape"></div>
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="about-box-title text-right">
                                    <span>Our Vision</span>
                                    <h3 class="title">Making sustainable energy safe and accessible everywhere!</h3>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="about-box-title text-right text-lg-left">
                                    <p> "Access to clean and reliable energy is a matter of justice. Accessability is about business innovation, having a capable infrastructure roll-out and possessing knowledge within robust and reliable technology."</p>
                                    <p> &mdash; Ulrika Tornerefelt, Group CEO  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
   
    <!--====== ABOUT BOX PART ENDS ======-->

    <!--====== FUN FACTS PART START ======-->
      
    <section class="fun-facts-2-area fun-facts-3-area pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="fun-facts-content">
                        <span class=" wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="100ms">Our Mission</span>
                        <h3 class="title wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="300ms">Combining engineering excellence with green financing</h3>
                        <p class=" wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="500ms">Pure financial aid isn’t a viable solution to sustainable development, empowerment is. Real solutions that cover the 3 major branches of sustainability; economic, environmental and social are being pioneered by Stella.</p>
                    </div>
                    {{-- <div class="progress-bar-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="circle-item text-center">
                                        <div id="circle4"></div>
                                        <div class="counter-item">
                                            <span class="counter">90</span><span>%</span>
                                        </div> 
                                        <p>Client Satisfiction</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="circle-item text-center">
                                        <div id="circle5"></div>
                                        <div class="counter-item">
                                            <span class="counter">57</span><span>%</span>
                                        </div>
                                        <p>Brand Identity</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="circle-item text-center">
                                        <div id="circle6"></div>
                                        <div class="counter-item">
                                            <span class="counter">87</span><span>%</span>
                                        </div>
                                        <p>Product Hunting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6">
                    <div class="fun-facts-thumb ml-40">
                        <img src="assets/images/our-mission.jpg" alt="facts">
                        <div class="item">
                            <img src="assets/images/fun-facts-shape-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
   
    <!--====== FUN FACTS PART ENDS ======-->

    <!--====== FACILITIES PART START ======-->
    
    <style>
        .facilities-area .section-title .title::before{
            content:"People";
        }
    </style>

    <section class="facilities-area facilities-3-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                     <div class="section-title text-center">
                       <span>Our People</span>
                        <h3 class="title">Our People</h3>
                    </div> 
                </div>
            </div>
            
            <div class="team-page-area row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item mt-30">
                        <img src="assets/images/team-item-1.jpg" alt="team">
                        <div class="team-overlay d-flex align-items-center pl-45">
                            <div class="item">
                                <h5 class="title">Ulrika Tornerefelt</h5>
                                <span>Founder and Group CEO</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item mt-30">
                        <img src="assets/images/team-item-2.jpg" alt="team">
                        <div class="team-overlay d-flex align-items-center pl-45">
                            <div class="item">
                                <h5 class="title">Francis Asante</h5>
                                <span>CEO and Partner</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item mt-30">
                        <img src="assets/images/team-item-3.jpg" alt="team">
                        <div class="team-overlay d-flex align-items-center pl-45">
                            <div class="item">
                                <h5 class="title">Jonas Jonsson</h5>
                                <span>Co-founder, Investor Relations & Partner</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item mt-30">
                        <img src="assets/images/team-item-4.jpg" alt="team">
                        <div class="team-overlay d-flex align-items-center pl-45">
                            <div class="item">
                                <h5 class="title">Nickie Akosa</h5>
                                <span>Business Develoment and Partner</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item mt-30">
                        <img src="assets/images/team-item-5.jpg" alt="team">
                        <div class="team-overlay d-flex align-items-center pl-45">
                            <div class="item">
                                <h5 class="title">Jinkar R. Ronald</h5>
                                <span>Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item mt-30">
                        <img src="assets/images/team-item-6.jpg" alt="team">
                        <div class="team-overlay d-flex align-items-center pl-45">
                            <div class="item">
                                <h5 class="title">Robert Yawson</h5>
                                <span>Head of Technology</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section> 
   
    <!--====== FACILITIES PART ENDS ======-->

    <!--====== BENEFITS PART START ======-->
      
    <section class="benefits-area benefits-3-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="benefits-content text-center">
                        <span>Your Benefits</span>
                        <h3 class="title">Huge Costs Savings on Green Energy!</h3>
                        <ul>
                            <li><a class="main-btn" href="#">View Our Solutions</a></li>
                            <li><a class="main-btn main-btn-2" href="#">Talk to an Expert!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
   
    <!--====== BENEFITS PART ENDS ======-->
    
    <x-cta-phone /> 

</x-frontend-layout>