<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('frontend/image/favicon.png')}}" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    </head>
    <body>
        <!--================Header Area =================-->
        @include('layouts.header');
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        @include('layouts.banner');
        <!--================Banner Area =================-->
        
        <!--================ Accomodation Area  =================-->
         @include('layouts.accomodation');
        <!--================ Accomodation Area  =================-->
        
        <!--================ Facilities Area  =================-->
        @include('layouts.facilities');
        <!--================ Facilities Area  =================-->
        
        <!--================ About History Area  =================-->
        @include('layouts.about');
        <!--================ About History Area  =================-->
        
        <!--================ Testimonial Area  =================-->
        @include('layouts.testimonial');
        <!--================ Testimonial Area  =================-->
        
        <!--================ Latest Blog Area  =================-->
        @include('layouts.latest');
        <!--================ Recent Area  =================-->
        
        <!--================ start footer Area  =================-->	
        @include('layouts.footer');
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('frontend/js/popper.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('frontend/js/mail-script.js')}}"></script>
        <script src="{{asset('frontend/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.js')}}"></script>
        <script src="{{asset('frontend/js/mail-script.js')}}"></script>
        <script src="{{asset('frontend/js/stellar.js')}}"></script>
        <script src="{{asset('frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('frontend/js/custom.js')}}"></script>
    </body>
</html>