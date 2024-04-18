@extends('layouts.app')
@section('content')
    <div class="justify-center items-center bg-center bg-dark selection:text-main selection:text-main ">
        <div class="container">
            <div class="row d-flex">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div>
                        <div class="p-3">
                            <p class="d-flex align-items-center justify-content-center justify-content-md-start text-xl" dir="{{ __('menu.dir') }}">{{ __('about.description1') }}<br><br>{{ __('about.description1_2') }}</p>
                        </div>
                        <div class="p-3">
                            <h2 class="d-flex text-main align-self-center justify-content-center justify-content-md-start" dir="{{ __('menu.dir') }}">{{ __('about.vision') }}</h2>
                            <p class="d-flex align-self-center justify-content-center justify-content-md-start text-xl" dir="{{ __('menu.dir') }}">{{ __('about.vision1') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div>
                        <div class="d-flex justify-content-center justify-content-md-center">
                            <div class="triangle"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 order-2 order-lg-1">
                    <div>
                        <div class="d-flex justify-content-center justify-content-md-center">
                            <div class="triangle2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 order-1 order-lg-2">
                    <div>
                        <div class="p-3" >
                            <h2 class="d-flex text-main align-self-center justify-content-center justify-content-md-start" dir="{{ __('menu.dir') }}">{{ __('about.mission') }}</h2>
                            <p class="d-flex align-self-center justify-content-center justify-content-md-start text-xl" dir="{{ __('menu.dir') }}">{{ __('about.mission1') }}</p>
                        </div>
                        <div class="p-3" >
                            <h2 class="d-flex text-main align-self-center justify-content-center justify-content-md-start" dir="{{ __('menu.dir') }}">{{ __('about.what_benfits_us') }}</h2>
                            <p class="d-flex align-self-center justify-content-center justify-content-md-start text-xl" dir="{{ __('menu.dir') }}">{{ __('about.what_benfits_us1') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
