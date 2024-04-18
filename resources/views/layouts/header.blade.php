@section('header')
        <div class="p-1 bg-dark d-flex text-lg flex-row justify-content-between align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-xl">
                        <a href="https://wa.me/+966112910100" target="_blank" class="">
                            <i class="fab fa-whatsapp text-white"></i>
                        </a>
                        <a href="https://instagram.com/tahleel_sa?igshid=YmMyMTA2M2Y=" target="_blank" class="p-3">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="https://twitter.com/tahleel_sa" target="_blank" class="">
                            <i class="fa-brands fa-x-twitter text-white"></i>
                        </a>
                        
                    </div>
                    <div class="col-md-6 text-md-end">
                        <span>
                            <a href="https://goo.gl/maps/opYN1UvfqrseFoNQ9" target="_blank" class="p-3 text-white" dir="rtl">
                                <i class="fas fa-map-marker-alt"></i>
                                قرطبة، الرياض 11564، السعودية
                            </a>
                        </span>
                        <span>
                            <a href="tel:+966112910100" target="_blank" class="text-white" dir="rtl">
                                <i class="fas fa-phone"></i>
                                <span class="pl-2" dir="ltr">+966 11 291 0100</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div  class="bg-dark navbar-background2 shadow-sm scroll">
            <div id="parallax" class="navbar-backgroundcover banner parallax"></div>
            <div class="container">
                <div class="p-0 m-0">
                    <nav class="navbar navbar-expand-md navbar-light " dir="rtl">
                        
                        <a class="navbar-brand" href="{{ url('/', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">
                            <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}" title="{{ config('app.name', 'Laravel') }}">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="menu navbar-nav me-auto">
                            <li>
                                    <a class="nav-link text-white" href="{{ route('home', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.Home') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link text-white" href="{{ route('services', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.Services') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link text-white" href="{{ route('contact', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.Contact') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link text-white" href="{{ route('ticket', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.Ticket') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link text-white" href="{{ route('about', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.About') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link text-white" href="{{ route('home', app()->getLocale() === 'en' ? []:  ['locale' => 'en']) }}">{{ __('menu.lnktoenglish') }}</a>
                                </li>
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="menu navbar-nav p-4 justify-content-between align-items-right" dir="{{ __('menu.dir') }}">
                            </ul>
                        </div>
                    </nav>
                    <div class="p-4 " dir="{{ __('menu.dir') }}">
                        <h1 class="p-3 text-main">{{ __('menu.title') }}</h1>
                        <p class="text-xl">{{ __('menu.headnote') }}</p>
                    </div>
                </div>
            </div>
        </div>
@endsection