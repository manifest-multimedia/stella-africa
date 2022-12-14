<x-frontend-layout :context="$__data">

    <x-page-title :title="$page->title" />



    @collection('articles', ['limit' => 10, 'paginate' => true])
            @foreach($entry['entries'] as $entry)
            
            {{-- @dd($entry) --}}

            @data($entry)



               <!--====== BLOG STANDARD PART START ======-->
         
    <div class="blog-standard-area pt-90 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-lg-8">
                    <div class="blog-standard">
                        <div class="single-blog-standard  mt-30">
                            <div class="blog-dteails-content blog-border">
                                <div class="blog-details-top">
                                    <span>{{$blueprint['title']}}</span>
                                    <h2 class="title">{{$title}}</h2>
                                    <ul>
                                        {{-- <li><i class="fal fa-eye"></i> 232 Views</li>
                                        <li><i class="fal fa-comments"></i> 35 Comments</li> --}}
                                        <li><i class="fal fa-calendar-alt"></i> {{$date}} </li>
                                    </ul>
                                
                                </div>
                                {{-- <div class="blog-details-bath">
                                    <img src="{{$featured_image['url']}}" alt="blog-details">
                                    
                                </div> --}}
                                <div class="pt-30">
                                    {!!$content!!}
                                </div>
                                {{-- <div class="blog-details-quote text-center mt-30 mb-30">
                                    <p><span>by</span> Hetmayar</p>
                                    <h3 class="title">Viral dreamcatcher keytar typewriter, aesthetic offal umami. Aesthetic polaroid pug pitchfork post-ironic.</h3>
                                    <i class="fas fa-quote-left"></i>
                                </div> --}}
                                {{-- <div class="blog-details-confarance">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
                                    <div class="confarance-flex d-flex mt-20 mb-20">
                                        <div class="confarance-thumb-1">
                                                <img src="assets/images/confarance.jpg" alt="">
                                        </div>
                                        <div class="confarance-thumb-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit .</p>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.  </p>
                                </div> --}}
                                {{-- <div class="blog-details-bar d-flex justify-content-between mt-40 mb-50">
                                    <div class="blog-tags">
                                        <h4 class="title">Releted Tags</h4>
                                        <ul>
                                            <li><a href="#">Popular</a></li>
                                            <li><a href="#">desgin</a></li>
                                            <li><a href="#">ux</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-social text-right">
                                        <h4 class="title">Social Share</h4>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-typo3"></i></a></li>
                                            <li><a href="#"><i class="fab fa-staylinked"></i></a></li>
                                            <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                                {{-- <div class="blog-details-next-prev d-flex justify-content-between pt-45 pb-45">
                                    <div class="post-prev">
                                        <a href="#">
                                            <span>Prev Post</span>
                                            <h4 class="title">Tips On Minimalist</h4>
                                        </a>
                                    </div>
                                    <div class="post-next text-right">
                                        <a href="#">
                                            <span>Next Post</span>
                                            <h4 class="title">Less Is More</h4>
                                        </a>
                                    </div>
                                    <a href="#"><img src="assets/images/dot-box.png" alt=""></a>
                                </div> --}}
                                {{-- <div class="blog-details-releted-post mt-45">
                                    <h4 class="title">Releted Post</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="blog-details-releted-item mt-30">
                                                <div class="releted-thumb">
                                                    <img src="assets/images/releted-1.jpg" alt="">
                                                </div>
                                                <div class="releted-content">
                                                    <span><i class="fal fa-calendar-alt"></i> 24th March 2019</span>
                                                    <a href="#"><h4 class="title">A series of iOS 7 inspire vector icons sense.</h4></a>
                                                    <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="blog-details-releted-item mt-30">
                                                <div class="releted-thumb">
                                                    <img src="assets/images/releted-2.jpg" alt="">
                                                </div>
                                                <div class="releted-content">
                                                    <span><i class="fal fa-calendar-alt"></i> 24th March 2019</span>
                                                    <a href="#"><h4 class="title">A series of iOS 7 inspire vector icons sense.</h4></a>
                                                    <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="blog-details-written mt-50">
                                    <div class="written-area d-flex align-items-center">
                                        <div class="written-thumb">
                                            <img src="assets/images/writter.jpg" alt="">
                                        </div>
                                        <div class="written-content">
                                            <span>Written by</span>
                                            <h4 class="title">Rosalina D. William</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation is enougn for today.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="blog-details-comments mt-45">
                                    <h4 class="title">03 Comments</h4>
                                    <div class="blog-comments-area">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="blog-left">
                                                <h6 class="title">Rosalina Kelian</h6>
                                                <span>19th May 2018</span>
                                            </div>
                                            <div class="blog-right">
                                                <a href="#"><i class="fal fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <img src="assets/images/blog-cmnt-1.png" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class="blog-comments-area ml-125">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="blog-left">
                                                <h6 class="title">Rosalina Kelian</h6>
                                                <span>19th May 2018</span>
                                            </div>
                                            <div class="blog-right">
                                                <a href="#"><i class="fal fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <img src="assets/images/blog-cmnt-2.png" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                    <div class="blog-comments-area">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="blog-left">
                                                <h6 class="title">Rosalina Kelian</h6>
                                                <span>19th May 2018</span>
                                            </div>
                                            <div class="blog-right">
                                                <a href="#"><i class="fal fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <img src="assets/images/blog-cmnt-3.png" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div> --}}
                               {{--  <div class="blog-details-post-comments">
                                    <h4 class="title">Post Comment</h4>
                                   <div class="post-comments-area gray-bg">
                                        <form action="#">
                                            <div class="input-box mt-20">
                                                <textarea name="#" id="#" cols="30" rows="10" placeholder="Type your comments...."></textarea>
                                            </div>
                                            <div class="input-box mt-20">
                                                <input type="text" placeholder="Type your name....">
                                            </div>
                                            <div class="input-box mt-20">
                                                <input type="email" placeholder="Type your email....">
                                            </div>
                                            <div class="input-box mt-20">
                                                <input type="text" placeholder="Type your website....">
                                            </div>
                                            <div class="input-box mt-20">
                                                <button class="main-btn"><i class="fal fa-comments"></i>Post Comment</button>
                                            </div>
                                        </form>
                                    </div>  
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div> 

    @enddata
    @endforeach
@endcollection

    <x-cta-phone /> 

</x-frontend-layout>