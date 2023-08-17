@extends('layouts.main')
@section('title', '- About Us')
@section('content')

    <div class="site-breadcrumb" style="background: url({{ asset('data/about-us-banner.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">
                About of Our Company
            </h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    About Us
                </li>
            </ul>
        </div>
    </div>

    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <img src="{{ asset('data/company.jpg') }}" alt>
                        </div>
                        <div class="about-experience">
                            <div class="about-experience-icon">
                                <i class="icon-plug"></i>
                            </div>
                            <b class="text-start">
                                20 Years Of <br>
                                Quality Service
                            </b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">
                                <i class="far fa-lightbulb-on"></i>
                                About Us
                            </span>
                            <h2 class="site-title">
                                About <span> of Our</span> Company
                            </h2>
                        </div>
                        <p class="about-text" style="text-align: justify">
                            At Wint Htal San Co.,Ltd, we are dedicated to transforming architectural visions into reality.
                            With a steadfast commitment to quality, innovation, and excellence, we have earned a reputation
                            as a trusted leader in the construction industry. Our company was founded on the principles of
                            integrity, professionalism, and a passion for building, and these values continue to drive us
                            forward today.
                        </p>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="about-item">
                                        <div class="about-item-icon">
                                            <i class="icon-power-plant"></i>
                                        </div>
                                        <div class="about-item-content">
                                            <h5>
                                                Our Objective
                                            </h5>
                                            <p style="text-align: justify;">
                                                At Wint Htal San Co.,Ltd, our construction objectives are clear: unmatched
                                                quality, timely delivery, and innovative solutions. We prioritize client
                                                satisfaction, safety, and environmental responsibility while forging lasting
                                                partnerships.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                <li>
                                    Quality Excellence
                                </li>
                                <li>
                                    Innovation and Creativity
                                </li>
                                <li>
                                    Safety First
                                </li>
                                <li>
                                    Cost-Effective Solutions
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="counter-area pt-50 pb-50">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="icon-project-management"></i>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                            <h6 class="title">+ Projects Done </h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="icon-review"></i>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="30" data-speed="3000">30</span>
                            <h6 class="title">
                                Current Projects
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="icon-worker-1"></i>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                            <h6 class="title">
                                Expert Employees
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="icon-guarantee"></i>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="20" data-speed="3000">20</span>
                            <h6 class="title">
                                Our Experieces
                            </h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="faq-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInLeft" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline justify-content-start">
                                <i class="far fa-lightbulb-on"></i>
                                Company Statement
                            </span>
                            <h2 class="site-title my-3">
                                Our Vision <span>Mission</span> & Value
                            </h2>
                        </div>
                        <div class="faq-img">
                            <img src="{{ asset('data/company1.jpg') }}" alt>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion wow fadeInUp" data-wow-delay=".25s" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span><i class="far fa-question"></i></span>
                                    Our Vision
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our vision at Wint Htal San Co.,Ltd is to reshape skylines and communities through
                                    innovative construction solutions, setting new standards of excellence that inspire the
                                    industry and uplift the lives of those we serve.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span><i class="far fa-question"></i></span>
                                    Our Mission
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our mission is to be a premier construction firm, known for delivering exceptional
                                    projects that combine architectural brilliance, functional design, and sustainable
                                    practices. We are dedicated to fostering enduring client relationships, embracing
                                    innovation, and contributing positively to the built environment.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span><i class="far fa-question"></i></span>
                                    Our Value
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="about-list list-unstyled">
                                        <li>
                                            Quality: We hold ourselves to the highest standards, ensuring that every project
                                            reflects uncompromising quality in materials, craftsmanship, and execution.
                                        </li>

                                        <li>
                                            Innovation: We consistently seek new ways to innovate and advance construction
                                            practices, pushing boundaries to create structures that blend creativity,
                                            functionality,
                                            and sustainability.
                                        </li>

                                        <li>
                                            Collaboration: We believe in the power of teamwork and collaboration. By working
                                            closely
                                            with clients, partners, and stakeholders, we create synergistic solutions that
                                            enrich
                                            our projects.
                                        </li>

                                        <li>
                                            Safety: Safety is our top priority. We are committed to providing a secure work
                                            environment for our team and everyone involved in our projects, ensuring their
                                            well-being at all times.
                                        </li>


                                        <li>
                                            Accountability: We take ownership of our actions and results. Accountability
                                            drives
                                            us
                                            to deliver on our promises and ensure the successful completion of every
                                            project.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-area pt-100">
        <div class="container">
            <div class="cta-wrapper wow fadeInUp" data-wow-delay=".25s">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto">
                        <div class="cta-content">
                            <h1>
                                Keep In Touch
                            </h1>
                            <p>
                                If you have any queries or anything else, our team is ready to response all your queries.
                            </p>
                            <div class="cta-btn">
                                <a href="{{ route('contact.index') }}" class="theme-btn">Contact Us Now<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="process-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-lightbulb-on"></i> How It Works</span>
                        <h2 class="site-title">Our Working <span>Process</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6 text-center mb-30">
                    <div class="process-single">
                        <div class="icon">
                            <span>01</span>
                            <i class="icon-office"></i>
                        </div>
                        <h4>
                            Discuss with clients
                        </h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-30">
                    <div class="process-single">
                        <div class="icon">
                            <span>02</span>
                            <i class="icon-easy-installation"></i>
                        </div>
                        <h4>Confirmation Service</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-30">
                    <div class="process-single">
                        <div class="icon">
                            <span>03</span>
                            <i class="icon-diagnostic"></i>
                        </div>
                        <h4>Estimate Details</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-30">
                    <div class="process-single">
                        <div class="icon">
                            <span>04</span>
                            <i class="icon-satisfaction"></i>
                        </div>
                        <h4>Complete Your Works</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
@endsection
