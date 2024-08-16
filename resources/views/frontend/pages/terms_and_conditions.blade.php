@extends('frontend.layout.app')
@section('title')
   Terms And Condition
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
                    <h2 class="section__title text-white">Terms & Conditions</h2>
                </div>
                <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Terms & Conditions</li>
                </ul>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!--======================================
            START TERMS-AND-CONDITIONS AREA
    ======================================-->
    <section class="terms-and-conditions-area section--padding">
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
                                    <li><a href="{{route('register')}}">Register</a></li>
                                    <li><a href="{{route('login')}}">Log in</a></li>
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
                            <h2 class="card-title fs-18 pb-2">1. Welcome to Aduca - Education HTML Template</h2>
                            <div class="divider"><span></span></div>
                            <p class="pb-3 text-black">These terms and conditions outline the rules and regulations for the use of Aduca - Education HTML Template</p>
                            <p>
                                Nemo ucxqui officia voluptatem accu santium doloremque laudantium,
                                totam rem ape dicta sunt dose explicabo. Nemo enim ipsam voluptatem quia voluptas.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa kequi
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                                unde omnis iste natus error sit voluptatem accusan tium dolorem
                                que laudantium, totam rem aperiam the eaque ipsa quae abillo
                                was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">2. Cookies</h2>
                            <div class="divider"><span></span></div>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium dolorem
                                que laudantium, totam rem aperiam the eaque ipsa quae abillo
                                was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">3. Licence</h2>
                            <div class="divider"><span></span></div>
                            <p class="pb-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae consequatur culpa dolore earum, eos, labore minima molestias natus nisi numquam provident quasi quis quisquam reprehenderit velit voluptates! Nostrum, tenetur?
                            </p>
                            <p class="pb-1 text-black">You must not:</p>
                            <ul class="text-black">
                                <li>Republish material from https://aduca.com</li>
                                <li>Sell, rent or sub-license material from https://aduca.com</li>
                                <li>Reproduce, duplicate or copy material from https://aduca.com</li>
                            </ul>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">4. User Comments</h2>
                            <div class="divider"><span></span></div>
                            <p class="pb-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae consequatur culpa dolore earum, eos, labore minima molestias natus nisi numquam provident quasi quis quisquam reprehenderit velit voluptates! Nostrum, tenetur?
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae consequatur culpa dolore earum, eos, labore minima molestias natus nisi numquam provident quasi quis quisquam reprehenderit velit voluptates! Nostrum, tenetur?
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">5. Hyperlinking to our Content</h2>
                            <div class="divider"><span></span></div>
                            <p class="pb-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequuntur dolore error fugit sequi ullam! A assumenda autem consequuntur doloribus esse illo, in inventore ipsa itaque, maiores molestiae quos reiciendis saepe soluta sunt voluptas voluptates. Aliquid assumenda hic laudantium ullam?
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, inventore suscipit. Aliquid amet asperiores eveniet hic iusto libero magnam nemo reprehenderit unde. Animi aspernatur culpa, ea eaque earum fugit labore.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">6. Iframe</h2>
                            <div class="divider"><span></span></div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequuntur dolore error fugit sequi ullam! A assumenda autem consequuntur doloribus esse illo, in inventore ipsa itaque, maiores molestiae quos reiciendis saepe soluta sunt voluptas voluptates. Aliquid assumenda hic laudantium ullam?
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">7. Reservation of Rights</h2>
                            <div class="divider"><span></span></div>
                            <p>
                                We reserve the right at any time and in its sole discretion to request that you remove all links or any particular link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also reserve the right to amend these terms and conditions and its linking policy at any time. By continuing to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">8. Removal of links from our website</h2>
                            <div class="divider"><span></span></div>
                            <p class="pb-3">
                                If you find any link on our Web site or any linked web site objectionable for any reason, you may contact us about this. We will consider requests to remove links but will have no obligation to do so or to respond directly to you.
                            </p>
                            <p>
                                Whilst we endeavour to ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we commit to ensuring that the website remains available or that the material on the website is kept up to date.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">9. Content Liability</h2>
                            <div class="divider"><span></span></div>
                            <p>
                                We shall have no responsibility or liability for any content appearing on your Web site. You agree to indemnify and defend us against all claims arising out of or based upon your Website. No link(s) may appear on any page on your Web site or within any context containing content or materials that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">10. Disclaimer</h2>
                            <div class="divider"><span></span></div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto error illo nam quas quo. Architecto dolores illum, mollitia possimus repellendus rerum. Corporis fugiat minus nemo officia omnis saepe sed ut velit veritatis. Doloremque eveniet explicabo optio placeat quod temporibus voluptate?
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h2 class="card-title fs-18 pb-2">11. Credit &amp; Contact Information</h2>
                            <div class="divider"><span></span></div>
                            <p>
                                This Terms and conditions page was created at termsandconditionstemplate.com generator. If you have any queries regarding any of our terms, please contact us.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end terms-and-conditions-area -->
    <!--======================================
            END TERMS-AND-CONDITIONS AREA
    ======================================-->

@endsection
