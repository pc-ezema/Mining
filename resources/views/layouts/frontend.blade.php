<!doctype html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/bixcoin/theme/bixcoin-multipage/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 14:43:39 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{URL::asset('assets/image/fabicon.png')}}" type="image/png">
    <title>{{config('app.name')}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/stroke-icon/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/jqery-nice-selector/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/magnify-popup/magnific-popup.css')}}">
    
    <!-- main css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">

    <script>
        window.setTimeout(function() {
            $(".alert-dashboard").fadeTo(500, 0).slideUp(1000, function(){
                $(this).remove(); 
            });
        }, 15000);

    </script>
</head>
<body>

    <!-- Feature -->
    @yield('page-content')
    <!-- End Feature -->

    <script src="{{URL::asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/popper.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/jqery-nice-selector/js/jquery.nice-select.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/particles/particles.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/particles/particles-custom.js')}}"></script>
    <script src="{{URL::asset('assets/js/marquee.js')}}"></script>
    <script src="{{URL::asset('assets/js/custom.js')}}"></script>
</body>

<!-- Mirrored from designarc.biz/demos/bixcoin/theme/bixcoin-multipage/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 14:46:21 GMT -->
</html>