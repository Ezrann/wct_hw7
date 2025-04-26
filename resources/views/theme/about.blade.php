@extends('layouts.app')

@section('content')
<!-- ***** Services Section Start ***** -->
<section id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">About Us</h2>
                <p class="section-description">We offer a variety of services to help you succeed in the digital world.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <p class="about-text">
                    At Chain App Dev, we specialize in developing high-quality mobile and web applications. Our mission is to help businesses grow by creating innovative solutions that are easy to use and impactful. 
                    Our team of designers, developers, and strategists work together to ensure that your project is a success.
                </p>
                <p>
                    Whether you're looking for a mobile app, a responsive website, or an enterprise-level application, we have the skills and expertise to make it happen.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpqJeMMJKQ0KzoJGDcVUbSP2PvBd8Ik85tiA&s"  alt="About Us Image" class="img-fluid">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <h3 class="team-title">Meet Our Team</h3>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fHww" alt="Team Member" class="img-fluid">
                    <h4>John Doe</h4>
                    <p>CEO & Founder</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="team-member">
                    <img src="https://us.123rf.com/450wm/dekazigzag/dekazigzag2108/dekazigzag210800026/172568501-close-up-photo-of-a-small-brunette-boy-looking-up-at-camera-while-playing-near-the-couch.jpg?ver=6 " >
                    <h4>Jane Smith</h4>
                    <p>Lead Developer</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="team-member">
                    <img src="https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.webp" alt="Team Member" class="img-fluid">
                    <h4>Robert Brown</h4>
                    <p>Project Manager</p>
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
