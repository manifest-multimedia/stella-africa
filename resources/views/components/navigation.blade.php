@aware(['page'])

<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="{{'/'}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt=""></a> <!-- logo -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
        </button> <!-- navbar toggler -->

        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                @foreach (tag('nav:main_menu') as $navItem)
                    <li class="nav-item">
                        <a class="nav-link {{$navItem['is_current'] ? 'active' : ''}}" href="{{$navItem['url']}}">{{$navItem['title']}}</a>
                        @if($navItem['children'])
                       
                        <ul class="sub-menu">
                            @foreach ($navItem['children'] as $subItem)
                                <li><a href="{{$subItem['url']}}"> {{$subItem['title']}}</a></li> 
                            @endforeach
                        </ul>
                        @endif
                    </li>
                @endforeach
              
            </ul>
        </div> <!-- navbar collapse -->
        <x-language-switcher />
        <div class="navbar-social ">
            <a class="main-btn" href="/contact-us">GET IN TOUCH</a>
           
        </div>

        {{-- Language Switcher --}}
    </nav>
</div> <!-- navigation -->