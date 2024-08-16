@extends('frontend.layout.app')
@section('title')
    Privacy Policy
@endsection
@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area section-padding img-bg-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="section-heading">
                    <h2 class="section__title text-white">MEC - Privacy Policy</h2>
                </div>
                <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Privacy Policy</li>
                </ul>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!--======================================
            START PRIVACY POLICY AREA
    ======================================-->
    <section class="privacy-policy-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">Search Field</h3>
                                <div class="divider"><span></span></div>
                                <form method="post">
                                    <div class="form-group">
                                        <input class="form-control form--control pl-3" type="text" name="search" placeholder="Type your search term...">
                                        <p class="fs-13">Press the enter or click search now button</p>
                                    </div>
                                    <button type="submit" class="btn theme-btn w-100">
                                        <i class="la la-search mr-2"></i>Search Now
                                    </button>
                                </form>
                            </div>
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">Category</h3>
                                <div class="divider"><span></span></div>
                                <ul class="generic-list-item">
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">LMS</a></li>
                                    <li><a href="#">How To?</a></li>
                                    <li><a href="#">Video Tutorials</a></li>
                                    <li><a href="#">Other</a></li>
                                </ul>
                            </div>
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">Meta</h3>
                                <div class="divider"><span></span></div>
                                <ul class="generic-list-item">
                                    <li><a href="sign-up.html">Register</a></li>
                                    <li><a href="login.html">Log in</a></li>
                                    <li><a href="#">Entries feed</a></li>
                                    <li><a href="#">Comments feed</a></li>
                                </ul>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">1. Information We Collect and How We Use It</h2>
                            <div class="divider"><span></span></div>
                            <h3 class="fs-16 font-weight-semi-bold pb-1">A. Account Information:</h3>
                            <p class="pb-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, dicta error eum exercitationem expedita hic maiores necessitatibus possimus quo voluptatum.
                            </p>
                            <h3 class="fs-16 font-weight-semi-bold pb-1">B. Public Content:</h3>
                            <p class="pb-3">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium dolorem
                                que laudantium, totam rem aperiam the eaque ipsa quae abillo
                                was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                            </p>
                            <h3 class="fs-16 font-weight-semi-bold pb-1">C. Contacts:</h3>
                            <p class="pb-3">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium dolorem
                                que laudantium, totam rem aperiam the eaque ipsa quae abillo
                                was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                            </p>
                            <h3 class="fs-16 font-weight-semi-bold pb-1">D. Communications:</h3>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium dolorem
                                que laudantium, totam rem aperiam the eaque ipsa quae abillo
                                was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">2. Contact forms</h2>
                            <div class="divider"><span></span></div>
                            <h3 class="fs-16 font-weight-semi-bold pb-1">A. Cookies</h3>
                            <p class="pb-3">
                                Aperiam beatae consequatur culpa dolore earum, eos, labore minima molestias natus nisi numquam provident quasi quis quisquam reprehenderit velit voluptates! Nostrum, tenetur?
                            </p>
                            <h3 class="fs-16 font-weight-semi-bold pb-1">B. Embedded content from other websites</h3>
                            <p>
                                Aperiam beatae consequatur culpa dolore earum, eos, labore minima molestias natus nisi numquam provident quasi quis quisquam reprehenderit velit voluptates! Nostrum, tenetur?
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">3. How we protect your information</h2>
                            <div class="divider"><span></span></div>
                            <p class="pb-3">
                                We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.
                            </p>
                            <p>
                                Sensitive and private data exchange between the Site and its Users happens over a SSL secured communication channel and is encrypted and protected with digital signatures. Our Site is also in compliance with PCI vulnerability standards in order to create as secure of an environment as possible for Users.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">4. Your contact information</h2>
                            <div class="divider"><span></span></div>
                            <p>
                                If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end privacy-policy-area -->
    <!--======================================
            END PRIVACY POLICY AREA
    ======================================-->

@endsection
