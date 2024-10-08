@extends('frontend.layout.app')
@section('title')
    MEC
@endsection
@section('content')

    <!--================================
         START HERO AREA
=================================-->
    @include('frontend.sections.hero')
    <!--================================
        END HERO AREA
=================================-->

    <!--======================================
            START FEATURE AREA
     ======================================-->
    @include('frontend.sections.feature')

    <!--======================================
       END FEATURE AREA
======================================-->

    <!--======================================
            START CATEGORY AREA
    ======================================-->
    @include('frontend.sections.category')

    <!--======================================
        END CATEGORY AREA
======================================-->

    <!--======================================
            START COURSE AREA
    ======================================-->
    @include('frontend.sections.course')

    <!--======================================
        END COURSE AREA
======================================-->

    <!--======================================
            START COURSE AREA
    ======================================-->
    @include('frontend.sections.course2')

    <!--======================================
        END COURSE AREA
======================================-->

    <!-- ================================
           START FUNFACT AREA
    ================================= -->
    @include('frontend.sections.funfact')

    <!-- ================================
       START FUNFACT AREA
================================= -->

    <!--======================================
            START CTA AREA
    ======================================-->
    @include('frontend.sections.cta')

    <!--======================================
        END CTA AREA
======================================-->

    <!--================================
             START TESTIMONIAL AREA
    =================================-->
    @include('frontend.sections.testimonial')

    <!--================================
        END TESTIMONIAL AREA
=================================-->

    <div class="section-block"></div>

    <!--======================================
            START ABOUT AREA
    ======================================-->
    @include('frontend.sections.about')
    <!--======================================
        END ABOUT AREA
======================================-->

    <div class="section-block"></div>

    <!--======================================
            START REGISTER AREA
    ======================================-->
    @include('frontend.sections.register')

    <!--======================================
        END REGISTER AREA
======================================-->

    <div class="section-block"></div>

    <!-- ================================
           START CLIENT-LOGO AREA
    ================================= -->
    @include('frontend.sections.client_logo')

    <!-- ================================
       START CLIENT-LOGO AREA
================================= -->

    <!-- ================================
           START BLOG AREA
    ================================= -->
    @include('frontend.sections.blog')

    <!-- ================================
       START BLOG AREA
================================= -->

    <!--======================================
            START GET STARTED AREA
    ======================================-->
    @include('frontend.sections.started')

    <!-- ================================
       START GET STARTED AREA
================================= -->

    <!--======================================
            START SUBSCRIBER AREA
    ======================================-->
    @include('frontend.sections.subscriber')
    <!--======================================
        END SUBSCRIBER AREA
======================================-->

@endsection
