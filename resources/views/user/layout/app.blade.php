<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{asset('frontend')}}/images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/line-awesome.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/fancybox.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    @stack('css')
    @stack('jquery')
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
@include('frontend.layout.css-loader')
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
@include('user.layout.header')
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    @include('user.layout.navbar')
    <div class="dashboard-content-wrap">
        @yield('content')

    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">Your account will be deleted permanently!</h4>
                <p>Are you sure you want to delete your account?</p>
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Ok, Delete</button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- template js files -->
<script src="{{asset('frontend')}}/js/jquery-3.4.1.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap-select.min.js"></script>
<script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('frontend')}}/js/isotope.js"></script>
<script src="{{asset('frontend')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('frontend')}}/js/fancybox.js"></script>
<script src="{{asset('frontend')}}/js/chart.js"></script>
<script src="{{asset('frontend')}}/js/doughnut-chart.js"></script>
<script src="{{asset('frontend')}}/js/bar-chart.js"></script>
<script src="{{asset('frontend')}}/js/line-chart.js"></script>
<script src="{{asset('frontend')}}/js/datedropper.min.js"></script>
<script src="{{asset('frontend')}}/js/emojionearea.min.js"></script>
<script src="{{asset('frontend')}}/js/animated-skills.js"></script>
<script src="{{asset('frontend')}}/js/jquery.MultiFile.min.js"></script>
<script src="{{asset('frontend')}}/js/main.js"></script>
@stack('js')
</body>
</html>
