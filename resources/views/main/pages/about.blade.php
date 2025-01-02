@extends('main.layouts.master')

@section('main-container')





<section class="ecommerce-about" style="
background-image: url('../assetsMain/images/about.jpg');
background-size: cover;
background-position: center;
">
    <div class="bg-overlay bg-primary-about" style="opacity: 0.7"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center">
                    <h1 class="text-white mb-0">About</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light justify-content-center mt-4">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" >
                                About
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<section class="ecommerce-aboutpage" style="margin-top: -15%">
    <div class="effect d-none d-md-block">
        <div class="ecommerce-effect bg-primary"></div>
        <div class="ecommerce-effect bg-info"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="fw-bold mb-3">👋 About Us</h1>
                <p class="fs-16 text-muted mb-5 mb-lg-3">We’re impartial and independent, and every day we create distinctive, world-class programmes and content which inform, educate and entertain millions of people in the around the world. The thought process that led to the items being created and sold.</p>
            </div>
            <div class="col-lg-6">
                <div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="position-relative">
                                <img src="../assetsMain/images/ecommerce/img-4.jpg" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="vstack gap-4">
                                <img src="../assetsMain/images/ecommerce/img-1.jpg" alt="" class="img-fluid rounded">
                                <img src="../assetsMain/images/ecommerce/img-3.jpg" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="ecommerce-about-cta">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-animate border-0">
                    <div class="card-body">
                        <lord-icon src="https://cdn.lordicon.com/fcoczpqi.json" trigger="hover" target="div" style="width:70px;height:70px">
                        </lord-icon>
                        <h5 class="fs-16 mt-3">25,000+ Happy Customer</h5>
                        <p class="text-muted">Customer happiness goes beyond customer satisfaction by creating an emotional connection with a brand's.</p>
                        <div>
                            <a href="#!" class="link-effect link-primary">Read More <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-animate border-0">
                    <div class="card-body">
                        <lord-icon src="https://cdn.lordicon.com/hbwqfgcf.json" trigger="hover" target="div" style="width:70px;height:70px">
                        </lord-icon>
                        <h5 class="fs-16 mt-3">6+ Years of Experiences</h5>
                        <p class="text-muted">The years of experience you list on your resume represent the work experience you have if you have little experience.</p>
                        <div>
                            <a href="#!" class="link-effect link-primary">Read More <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-animate border-0">
                    <div class="card-body">
                        <lord-icon src="https://cdn.lordicon.com/xhbsnkyp.json" trigger="hover" target="div" style="width:70px;height:70px">
                        </lord-icon>
                        <h5 class="fs-16 mt-3">14 Awards Won</h5>
                        <p class="text-muted">The Global Content Awards celebrate excellence in content marketing and rewards agencies and in-house teams.</p>
                        <div>
                            <a href="#!" class="link-effect link-primary">Read More <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ecommerce-about-team bg-light bg-opacity-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h2 class="mb-3">Expart Management Team</h2>
                    <P class="text-muted fs-15">An Expert Leader is first and foremost someone who has deep expertise in the area that they are leading.</P>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-xl-3 col-md-6">
                <div class="team-box text-center">
                    <div class="team-img">
                        <img src="../assetsMain/images/users/avatar-7.jpg" alt="" class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25">
                    </div>
                    <div class="mt-4 pt-1">
                        <a href="#!">
                            <h5>Rachael Larson</h5>
                        </a>
                        <p class="text-muted mb-0">Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="team-box text-center">
                    <div class="team-img">
                        <img src="../assetsMain/images/users/avatar-1.jpg" alt="" class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25">
                    </div>
                    <div class="mt-4 pt-1">
                        <a href="#!">
                            <h5>Jennifer Thompson</h5>
                        </a>
                        <p class="text-muted mb-0">Sr. Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="team-box text-center">
                    <div class="team-img">
                        <img src="../assetsMain/images/users/avatar-2.jpg" alt="" class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25">
                    </div>
                    <div class="mt-4 pt-1">
                        <a href="#!">
                            <h5>Amanda Rivera</h5>
                        </a>
                        <p class="text-muted mb-0">Marketing Executive</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="team-box text-center">
                    <div class="team-img">
                        <img src="../assetsMain/images/users/avatar-8.jpg" alt="" class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25">
                    </div>
                    <div class="mt-4 pt-1">
                        <a href="#!">
                            <h5>Donald Schmidt</h5>
                        </a>
                        <p class="text-muted mb-0">Account Executive</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div>
                    <img src="../assetsMain/images/ecommerce/img-5.jpg" alt="" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-4 mt-lg-0">
                    <p class="text-uppercase fw-medium text-muted">Best Products Sales</p>
                    <h2 class="lh-base fw-semibold mb-3">Desgining Spaces to enahance your business growth</h2>
                    <P class="text-muted fs-16">A physical office space will promote collaboration and understanding. Having a physical location for your business allows you to put together the company that you want in an environment where employees can communicate with each other without having to go through any extra steps.</P>
                    <a href="#!" class="fw-medium link-effect">Shop Now <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background-image: url('../assetsMain/images/profile-bg.jpg'); background-size: cover;background-position: center;">
    <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center">
                    <h1 class="text-white lh-base text-capitalize">Don't miss out on special offers</h1>
                    <p class="text-white-75 fs-15 mb-4 pb-2">Never Miss Anything From Toner By Signing Up To Our Newsletter.</p>
                    <form action="#!">
                        <div class="position-relative ecommerce-subscript">
                            <input type="email" class="form-control rounded-pill border-0" placeholder="Enter your email">
                            <button type="submit" class="btn btn-darken-primary rounded-pill">Subscript Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative py-5 border-bottom">
    <div class="container">
        <div class="row gy-4 gy-lg-0">
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="../assetsMain/images/ecommerce/fast-delivery.png" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                        <p class="text-muted mb-0">Tell about your service.</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="../assetsMain/images/ecommerce/returns.png" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">2 Days Return Policy</h5>
                        <p class="text-muted mb-0">No question ask.</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="../assetsMain/images/ecommerce/guarantee-certificate.png" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">Money Back Guarantee</h5>
                        <p class="text-muted mb-0">Within 5 business days</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="../assetsMain/images/ecommerce/24-hours-support.png" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">24 X 7 Service</h5>
                        <p class="text-muted mb-0">Online service for customer</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</section>





@endsection
