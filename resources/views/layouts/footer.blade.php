@section('footer')
<hr>
<footer class="footer pt-5 ">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<div class="widget mb-5 mb-lg-0 " >
					<div class="logo mt-4 d-flex justify-content-center justify-content-md-start">
                        <a aria-label="">
                            <img alt="Tahleel Logo" title="Tahleel Logo" width="300" src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="row d-flex justify-content-center justify-content-md-start mb-3" style="font-size: 3em">
                        <div class="col-3 align-self-center">
                            <center>
                                <a title="Tahleel whatsapp" href="https://www.wa.me/+966112910100" target="_blank" rel="me">
                                    <i class="fab fa-whatsapp text-white"></i>            
                                </a>
                            </center>
                        </div>
                        <div class="col-3 align-self-center">
                            <center>
                                <a title="Tahleel Instagram" href="https://www.instagram.com/agile4training/" target="_blank" rel="me">
                                    <i class="fab fa-instagram text-white"></i>
                                </a>
                            </center>
                        </div>
                        <div class="col-3 align-self-center">
                            <center>
                                <a title="Tahleel twitter" href="https://www.instagram.com/agile4training/" target="_blank" rel="me">
                                    <i class="fab fa-x-twitter text-white"></i>
                                </a>
                            </center>
                        </div>
                    </div>
					<div class="mb-3">
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill mr-1" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>	
                            <span class="h6 mb-0 text">
                                قرطبة، الرياض 11564، السعودية
                            </span>
                        </div>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill mr-1" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                            <span class="h6 mb-0">
                                <a class="text-white" href="mailto:support@tahleel.com.sa" title="support@tahleel.com.sa">support@tahleel.com.sa</a>
                            </span>
                        </div>
                        <div class="d-flex justify-content-center justify-content-md-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill mr-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>	

                            <span class="h6 mb-0 phone">
                            <a class="text-white" href="tel:+966112910100" title="+966112910100" dir="ltr"> +966 11 291 0100</a>
                            </span>
                        </div>
					</div>
                    
                    <div class="row d-flex justify-content-center justify-content-md-start">
                        <div class="col-2 align-self-center">
                            <center>
                                <img src="{{ asset('images/pay1.webp') }}" alt="visa" width="50" style="max-width: 50px;" class="mr-1">
                            </center>
                        </div>
                        <div class="col-2 align-self-center">
                            <center>
                                <img src="{{ asset('images/pay2.webp') }}" alt="mastercard" width="50" style="max-width: 50px;" class="mr-1">
                            </center>
                        </div>
                        <div class="col-2 align-self-center">
                            <center>
                                <img src="{{ asset('images/pay3.webp') }}" alt="mada" width="50" style="max-width: 50px;" class="mr-1">
                            </center>
                        </div>
                        <div class="col-2 align-self-center">
                            <center>
                                <img src="{{ asset('images/pay4.webp') }}" alt="stcpay" width="50" style="max-width: 50px;">
                            </center>
                        </div>
                    </div>
				</div>
			</div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
				<div class="widget mb-5 mb-lg-0  ">
					<p class="text-capitalize mb-3 text-main d-flex justify-content-center" style="font-size: 2em"> {{__('menu.pages')}}</p>
					<div class="divider mb-4"></div>
					<ul class="list-unstyled footer-menu lh-35 p-0 " >
						<li>
                            <a class="nav-link text-white d-flex justify-content-center p-3 p-md-1 text-xl" href="{{ route('home', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.Home') }}</a>
                        </li>
                        <li>
                            <a class="nav-link text-white d-flex justify-content-center p-3 p-md-1 text-xl" href="{{ route('services', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.Services') }}</a>
                        </li>
                        <li>
                            <a class="nav-link text-white d-flex justify-content-center p-3 p-md-1 text-xl" href="{{ route('contact', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.Contact') }}</a>
                        </li>
                        <li>
                            <a class="nav-link text-white d-flex justify-content-center p-3 p-md-1 text-xl" href="{{ route('ticket', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.Ticket') }}</a>
                        </li>
                        <li>
                            <a class="nav-link text-white d-flex justify-content-center p-3 p-md-1 text-xl" href="{{ route('about', app()->getLocale() === 'en' ? ['locale' => 'en'] : []) }}">{{ __('menu.About') }}</a>
                        </li>
					</ul>
				</div>
			</div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 ">
				<div class="widget widget-contact mb-5 mb-lg-0 d-flex justify-content-center justify-content-md-end mt-4">
					  <div class="footer-contact-block mb-4">
                        <img src="{{ asset('images/barcode1.webp') }}" alt="" style="max-width:200px">
                    </div>
				</div>
			</div>
		</div>

			<div id="scrollToTop" class="row">
				<div class="col-lg-4">
					<span class="backtop js-scroll-trigger me-2" href="" title="Top" aria-label="Top">
                        <!-- arrow up in dark sircle -->
                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                            <circle cx="12" cy="12" r="10" fill="#333"/>
                            <path fill="#FFF" d="M12 8l-4 4h3v4h2v-4h3z"/>
                        </svg>

                    </span>
				</div>
			</div>
		</div>
    </footer>
    <div class="p-1 bg-black d-flex text-lg flex-row justify-content-center align-items-center">
        Powered by &nbsp;<span class=""><img src="{{ asset('images/dande.webp') }}" alt="" style="max-width: 35px;"></span>&nbsp; all rights reserved &copy; {{ date('Y') }} <a href="https://tahleel.com.sa" target="_blank" class="text-white">&nbsp;tahleel.com.sa</a>
    </div>
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="round">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="25" result="blur" />    
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                    <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                </filter>
            </defs>
        </svg>
@endsection