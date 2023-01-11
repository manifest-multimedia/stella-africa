<x-frontend-layout :context="$__data">

    <x-page-title :title="$page->title" />

        <!--====== GALLERY PART START ======-->

    <div class="gallery-area pt-90 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-btns d-flex justify-content-center">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Sweden</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Africa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    
                    <section class="pt-20 pb-20">
                        <h2>Reference Cases</h2>
                        <p>In Sweden we have several installations that have been performing well for years and we have more coming up. Our focus is always to create sustainable and profitable solutions that are customized to the needs of our clients.</p>
                    </section>

                    <div class="tab-btns d-flex justify-content-center">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-all-sweden" data-toggle="pill" href="#all-sweden" role="tab" aria-controls="pills-1" aria-selected="true">All</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#real-estate-sweden" role="tab" aria-controls="pills-2" aria-selected="false">BRF/Real Estate</a>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="all-sweden" role="tabpanel" aria-labelledby="pills-1-tab">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="gallery-item mt-15">
                                        <img src="assets/images/gallery-1.jpg" alt="gallery">
                                        <div class="gallery-overlay">
                                            <a class="image-popup" href="assets/images/gallery-1.jpg"><i class="fal fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="gallery-item mt-15">
                                        <img src="assets/images/gallery-2.jpg" alt="gallery">
                                        <div class="gallery-overlay">
                                            <a class="image-popup" href="assets/images/gallery-2.jpg"><i class="fal fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="gallery-item mt-15">
                                        <img src="assets/images/gallery-3.jpg" alt="gallery">
                                        <div class="gallery-overlay">
                                            <a class="image-popup" href="assets/images/gallery-3.jpg"><i class="fal fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="gallery-item mt-15">
                                        <img src="assets/images/gallery-4.jpg" alt="gallery">
                                        <div class="gallery-overlay">
                                            <a class="image-popup" href="assets/images/gallery-4.jpg"><i class="fal fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="gallery-item mt-15">
                                        <img src="assets/images/gallery-5.jpg" alt="gallery">
                                        <div class="gallery-overlay">
                                            <a class="image-popup" href="assets/images/gallery-5.jpg"><i class="fal fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="gallery-item mt-15">
                                        <img src="assets/images/gallery-6.jpg" alt="gallery">
                                        <div class="gallery-overlay">
                                            <a class="image-popup" href="assets/images/gallery-6.jpg"><i class="fal fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="gallery-item mt-15">
                                        <img src="assets/images/gallery-7.jpg" alt="gallery">
                                        <div class="gallery-overlay">
                                            <a class="image-popup" href="assets/images/gallery-7.jpg"><i class="fal fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="gallery-item mt-15">
                                        <img src="assets/images/gallery-8.jpg" alt="gallery">
                                        <div class="gallery-overlay">
                                            <a class="image-popup" href="assets/images/gallery-8.jpg"><i class="fal fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="gallery-item mt-15">
                                        <img src="assets/images/gallery-9.jpg" alt="gallery">
                                        <div class="gallery-overlay">
                                            <a class="image-popup" href="assets/images/gallery-9.jpg"><i class="fal fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="sweden-realestate" role="tabpanel" aria-labelledby="pills-1-tab">
                        </div>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                    <section class="pt-20 pb-20">
                        <h2>Reference Cases</h2>
                        <p>In Africa we have several installations that have been performing well for years and we have more coming up. Our focus is always to create sustainable and profitable solutions that are customized to the needs of our clients.</p>
                    </section>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="gallery-item mt-15">
                                <img src="assets/images/gallery-1.jpg" alt="gallery">
                                <div class="gallery-overlay">
                                    <a class="image-popup" href="assets/images/gallery-1.jpg"><i class="fal fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="gallery-item mt-15">
                                <img src="assets/images/gallery-2.jpg" alt="gallery">
                                <div class="gallery-overlay">
                                    <a class="image-popup" href="assets/images/gallery-2.jpg"><i class="fal fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="gallery-item mt-15">
                                <img src="assets/images/gallery-3.jpg" alt="gallery">
                                <div class="gallery-overlay">
                                    <a class="image-popup" href="assets/images/gallery-3.jpg"><i class="fal fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="gallery-item mt-15">
                                <img src="assets/images/gallery-4.jpg" alt="gallery">
                                <div class="gallery-overlay">
                                    <a class="image-popup" href="assets/images/gallery-4.jpg"><i class="fal fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="gallery-item mt-15">
                                <img src="assets/images/gallery-5.jpg" alt="gallery">
                                <div class="gallery-overlay">
                                    <a class="image-popup" href="assets/images/gallery-5.jpg"><i class="fal fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="gallery-item mt-15">
                                <img src="assets/images/gallery-6.jpg" alt="gallery">
                                <div class="gallery-overlay">
                                    <a class="image-popup" href="assets/images/gallery-6.jpg"><i class="fal fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="gallery-item mt-15">
                                <img src="assets/images/gallery-7.jpg" alt="gallery">
                                <div class="gallery-overlay">
                                    <a class="image-popup" href="assets/images/gallery-7.jpg"><i class="fal fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="gallery-item mt-15">
                                <img src="assets/images/gallery-8.jpg" alt="gallery">
                                <div class="gallery-overlay">
                                    <a class="image-popup" href="assets/images/gallery-8.jpg"><i class="fal fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="gallery-item mt-15">
                                <img src="assets/images/gallery-9.jpg" alt="gallery">
                                <div class="gallery-overlay">
                                    <a class="image-popup" href="assets/images/gallery-9.jpg"><i class="fal fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>

    <!--====== GALLERY PART ENDS ======-->

    <x-cta-phone /> 
</x-frontend-layout>