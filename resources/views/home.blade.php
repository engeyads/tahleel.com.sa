@extends('layouts.app')
@section('content')
    <div class=" justify-center items-center bg-center bg-dark selection:text-main selection:text-main ">
        <div class="container">

        
        <center>
            <section class="barcode p-3">
                <h2 class="p-3">{{ __('home.barcode') }}</h2>
                <div>
                    <img src="{{ asset('images/barcode.webp') }}" alt="barcode" style="max-width: 200px;">
                </div>
            </section>
            <section class="offers p-3">
                <h2 class="p-3">{{ __('home.offers') }}</h2>
                <div>
                    <img src="{{ asset('images/TAHLEEL-SM-ND-92-2.webp') }}" alt="barcode" style="max-width: 500px;" class="rounded m-4">
                    <img src="{{ asset('images/TAHLEEL-SM-ND-92-22.webp') }}" alt="barcode" style="max-width: 500px;" class="rounded m-4">
                    <img src="{{ asset('images/TAHLEEL-SM-ND-92-23.webp') }}" alt="barcode" style="max-width: 500px;" class="rounded m-4">
                    <img src="{{ asset('images/TAHLEEL-SM-ND-92-24.webp') }}" alt="barcode" style="max-width: 500px;" class="rounded m-4">
                    <img src="{{ asset('images/TAHLEEL-SM-ND-92-25-1.webp') }}" alt="barcode" style="max-width: 500px;" class="rounded m-4">
                    <img src="{{ asset('images/TAHLEEL-SM-ND-92-26.webp') }}" alt="barcode" style="max-width: 500px;" class="rounded m-4">
                    <img src="{{ asset('images/TAHLEEL-SM-ND-92-27.webp') }}" alt="barcode" style="max-width: 500px;" class="rounded m-4">
                </div>
            </section>
            <section class="visits p-3">
                <h2 class="p-3">{{ __('home.visits') }}</h2>
                <div>
                    <h2 class="p-3 text-main">234123</h2>
                </div>
            </section>
            <section class="contractors p-3">
                <h2 class="p-3">{{ __('home.contractors') }}</h2>
                <div>
                    <!-- create grid 4 cols showing pictures as grid-->
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/img1.webp') }}" class="img-fluid" alt="Image 1" style="max-width:200px">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/img2.webp') }}" class="img-fluid" alt="Image 2" style="max-width:200px">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/img3.webp') }}" class="img-fluid" alt="Image 3" style="max-width:200px">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/img4.webp') }}" class="img-fluid" alt="Image 4" style="max-width:200px">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/img5.webp') }}" class="img-fluid" alt="Image 5" style="max-width:200px">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/img6.webp') }}" class="img-fluid" alt="Image 6" style="max-width:200px">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/img7.webp') }}" class="img-fluid" alt="Image 7" style="max-width:200px">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/img8.webp') }}" class="img-fluid" alt="Image 8" style="max-width:200px">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/img9.webp') }}" class="img-fluid" alt="Image 9" style="max-width:200px">
                        </div>
                    </div>
                </div>
            </section>
            
        </center>
    </div>
</div>
@endsection
