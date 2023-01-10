<x-frontend-layout :context="$__data">

    <x-page-title :title="$page->title" />


    <!--====== CONTACT TOUCH PART START ======-->

    <section class="contact-touch-area mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-touch-box">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                
                                <div class="contact-touch-map">
                                    {{-- <iframe  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31764.227964837024!2d-0.158316!3d5.636381!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b501278f4a5%3A0xca081548a0c20ffd!2sEast%20Legon%2C%20Accra!5e0!3m2!1sen!2sgh!4v1673360702124!5m2!1sen!2sgh" width="600" height="200" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-touch-item">
                                    <div class="contact-touch-title">
                                        <span>Have Questions?</span>
                                        <h3 class="title">Get In Touch</h3>
                                        <p class="pb-30"> Send us a message if you have any questions or are interested in working towards an offer. Contact a specific team member via team contact details on our <a href="/about-us">about us </a> page!</p>
                                    </div>
                                    <div class="contact-touch-input">
                                        <form action="#">
                                            <div class="input-box">
                                                <input type="text" placeholder="Enter your name">
                                                <i class="fal fa-user"></i>
                                            </div>
                                            <div class="input-box">
                                                <input type="email" placeholder="Enter your Email">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                            <div class="input-box">
                                                <textarea name="#" id="#" cols="30" rows="10" placeholder="Enter your message"></textarea>
                                                <i class="fal fa-edit"></i>
                                                <button class="main-btn main-btn-2">Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== CONTACT TOUCH PART ENDS ======-->
    
    <!--====== CONTACT US PART START ======-->
       
    <section class="contact-us-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span>More Ways to Reach Us</span>
                        <h3 class="title">Contact US</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="contact-us-item text-center">
                        <i class="fal fa-map"></i>
                        <h5 class="title">Ghana Office</h5>
                        <ul>
                            <li>45A Mahogany Avenue</li>
                            <li>East Legon, Accra</li>
                            <li>contact.gh@stellafutura.com</li>
                        </ul>
                        <a href="#"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="contact-us-item text-center">
                        <i class="fal fa-map"></i>
                        <h5 class="title">Sweden Office</h5>
                        <ul>
                            <li>Magnus Ladulåsgatan 1 (The Park)</li>
                            <li>118 65 Stockholm</li>
                            <li>contact@stellafutura.com</li>
                        </ul>
                        <a href="#"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="contact-us-item text-center">
                        <i class="fal fa-phone"></i>
                        <h5 class="title">Hotlines</h5>
                        <ul>
                            <li>GHANA</li>
                            <li>+233 (0)503 325 822</li>
                            <li>(MON - FRI 8:00 AM - 5:00 PM)</li>
                        </ul>
                        <a href="#"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
    <!--====== CONTACT US PART ENDS ======-->

    

<x-cta-phone />

</x-frontend-layout>