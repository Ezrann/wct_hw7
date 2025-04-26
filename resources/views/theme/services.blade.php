@extends('layouts.app')

@section('content')
<!-- ***** Services Section Start ***** -->
<section id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Our Services</h2>
                <p class="section-description">We offer a variety of services to help you succeed in the digital world.</p>
            </div>
        </div>

        <div class="row">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service-box">
                    <i class="fa fa-cogs service-icon"></i>
                    <h4>App Development</h4>
                    <p>We build fully responsive and robust mobile and web applications tailored to your business needs.</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service-box">
                    <i class="fa fa-paint-brush service-icon"></i>
                    <h4>UI/UX Design</h4>
                    <p>Our design team crafts seamless and intuitive user interfaces to ensure the best experience for your users.</p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service-box">
                    <i class="fa fa-cloud service-icon"></i>
                    <h4>Cloud Solutions</h4>
                    <p>We provide cloud-based solutions for scalable and flexible infrastructure, enabling your app to grow with ease.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Services Section End ***** -->

<!-- ***** About Us Section Start ***** -->
<section id="about" class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">About Us</h2>
                <p class="section-description">Learn more about our mission and vision as we work to help businesses scale effortlessly.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="about-text">At Chain App Dev, we specialize in developing cutting-edge mobile and web applications. Our team consists of experienced designers and developers who work collaboratively to provide the best digital solutions to our clients. Whether you're looking to build a brand new app or improve an existing one, we have the expertise to make your project a success.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/about-us.jpg') }}" alt="About Us Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- ***** About Us Section End ***** -->

@endsection
