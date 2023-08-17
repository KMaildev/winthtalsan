@extends('layouts.main')
@section('title', "- MD'S Message")
@section('content')
    <div class="site-breadcrumb" style="background: url({{ asset('data/banner-chairman-message.png') }})">
        <div class="container">
            <h2 class="breadcrumb-title">
                MD'S Message
            </h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    Message
                </li>
            </ul>
        </div>
    </div>


    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <img src="{{ asset('data/md1.jpg') }}" alt>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">
                                <i class="far fa-lightbulb-on"></i>
                                Message
                            </span>
                            <h2 class="site-title">
                                MD'S <span> Message</span>
                            </h2>
                        </div>
                        <p class="about-text" style="text-align: justify; color: black;">
                            At Wint Htal San Co.,Ltd, we are not just builders; we are creators of dreams, architects of
                            change, and pioneers of innovation. Our journey in the construction industry has been marked by
                            a relentless pursuit of excellence, a commitment to quality, and a passion for transforming
                            ideas into tangible realities.
                            <br><br>
                            As the Managing Director, I take immense pride in the exceptional team we've assembled—a team
                            that embodies expertise, dedication, and a shared vision. We understand that every structure we
                            build carries not only our name but also the aspirations of our clients and the communities we
                            serve.
                        </p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <p class="about-text" style="text-align: justify; color: black;">
                        <br>
                        Our approach is guided by a strong sense of responsibility. Responsibility to deliver projects
                        that stand as testaments to our craftsmanship, responsibility to create safe and secure work
                        environments, and responsibility to contribute positively to the environment and society.
                        <br><br>
                        In an ever-evolving industry, we embrace innovation as a driving force. We continually challenge
                        ourselves to find creative solutions, adopt cutting-edge technologies, and remain at the
                        forefront of sustainable practices.
                        <br><br>
                        With every project, we embark on a journey of collaboration, partnering with our clients to
                        understand their unique needs and aspirations. This partnership goes beyond construction—it's
                        about building lasting relationships, built on trust, transparency, and mutual success.
                        <br><br>
                        As we look ahead, our commitment remains steadfast—to exceed expectations, to set new
                        benchmarks, and to continue shaping skylines with structures that inspire and endure.
                        <br><br>
                        Thank you for considering Wint Htal San Co.,Ltd. We look forward to the opportunity of being
                        your construction partner and bringing your visions to life.
                    </p>
                    <p style="color: black; font-style: italic;">
                        <br>
                        Best,
                        <br>
                        Managing Director
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
