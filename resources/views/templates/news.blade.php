<x-frontend-layout :context="$__data">

    <x-page-title :title="$page->title" />



    @collection('articles', ['limit' => 10, 'paginate' => true])
            @foreach($entry['entries'] as $entry)
            
            {{-- @dd($entry) --}}

            @data($entry)
        
        <!--====== BLOG STANDARD PART START ======-->
         @if (!isset($featured_image))
         <style> 
            .blog-standard .single-blog-standard .blog-standard-content {
                border:2px solid #ededed !important; 
            }
            </style> 
         @endif
    <div class="blog-standard-area pt-90 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="blog-standard" >
                        <div class="single-blog-standard mt-30" >
                            @isset($featured_image)
                            <div class="blog-standard-thumb">
                                {{-- @dd($featured_image) --}}
                                <img src="{{$featured_image['url']}}" alt="blog">
                            </div>
                            @endisset
                            <div class="blog-standard-content">
                                <span>{{$blueprint['title']}}</span>
                                <h2 class="title">{{ $title }} </h2>
                                <ul>
                                    {{-- <li><i class="fal fa-eye"></i> 232 Views</li> --}}
                                    {{-- <li><i class="fal fa-comments"></i> 35 Comments</li> --}}
                                    <li><i class="fal fa-calendar-alt"></i> {{$updated_at}} </li>
                                </ul>
                                <p>{!! Statamic::modify($content)->safeTruncate([250, '...']) !!}</p>
                                <div class="blog-flex">
                                    
                                    {{-- @dd($entry) --}}

                                    @isset($updated_by['name'])
                                        <div class="blog-left" style="padding-left:0 !important">
                                            <p><span>Author:</span> {{$updated_by['name'] }}</p>
                                            {{-- <img src="assets/images/user.png" alt=""> --}}
                                        </div>
                                    @endisset
                                    <div class="blog-right">
                                        <a href="{{$url}}"><i class="fal fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @enddata
                        @endforeach
                    @endcollection
                    </div>
                  

                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination-area d-flex justify-content-center mt-40">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div> --}}
                </div>

      
                
            </div>
        </div>
    </div> 

    <!--====== BLOG STANDARD PART ENDS ======-->

    <x-cta-phone /> 

</x-frontend-layout>