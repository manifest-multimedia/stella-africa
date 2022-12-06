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
                <li class="nav-item">
                    <a class="nav-link active" href="{{'/'}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                    {{-- <ul class="sub-menu">
                        <li><a href="news.html">News</a></li>
                        <li><a href="news-details.html">News Details</a></li>
                    </ul> <!-- sub menu --> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div> <!-- navbar collapse -->
        <x-language-switcher />
        <div class="navbar-social ">
            <a class="main-btn" href="#">GET IN TOUCH</a>
           
        </div>

        {{-- Language Switcher --}}
    </nav>
</div> <!-- navigation -->