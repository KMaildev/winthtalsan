@extends('layouts.main')
@section('title', '- Contact us')
@section('content')

    <div class="site-breadcrumb" style="background: url({{ asset('data/contact_banner.webp') }})">
        <div class="container">
            <h2 class="breadcrumb-title" style="font-size: 19px;">
                {{ $project_details->project_title ?? '' }}
            </h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Project Detail</li>
            </ul>
        </div>
    </div>



    <div class="portfolio-single-area py-120">
        <div class="container">
            <div class="portfolio-single-wrapper">
                <div class="row">

                    <div class="col-xl-4 col-lg-4">
                        <div class="portfolio-sidebar">
                            <div class="widget portfolio-sidebar-content">
                                <h4 class="portfolio-sidebar-title">Project Details</h4>
                                <ul>
                                    <li>
                                        Project Status
                                        <span>
                                            {{ $project_details->project_status ?? '' }}
                                            Project
                                        </span>
                                    </li>
                                    <li>
                                        Project Location
                                        <span>
                                            {{ $project_details->project_location ?? '' }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget new-portfolio">
                                <h4>Do You Need Help With Construction Service?</h4>
                                <a href="{{ route('contact.index') }}" class="theme-btn theme-btn2">Contact Now<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>

                            <div class="widget category">
                                <h5 class="widget-title">
                                    Quick Links
                                </h5>
                                <div class="category-list">

                                    <a href="{{ route('home') }}">
                                        <i class="far fa-arrow-right"></i>
                                        Home
                                    </a>

                                    <a href="{{ route('projects.index') }}">
                                        <i class="far fa-arrow-right"></i>
                                        Our Projects
                                    </a>

                                    @foreach ($categories as $category)
                                        <a href="{{ route('activities.show', $category->id) }}">
                                            <i class="far fa-arrow-right"></i>
                                            {{ $category->title ?? '' }}
                                        </a>
                                    @endforeach

                                    <a href="{{ route('contact.index') }}">
                                        <i class="far fa-arrow-right"></i>
                                        Contact Us
                                    </a>

                                </div>
                            </div>


                            <div class="widget recent-post">
                                <h5 class="widget-title">
                                    Projects
                                </h5>
                                @foreach ($projects as $project)
                                    <div class="recent-post-single">
                                        <div class="recent-post-img">
                                            <img src="{{ $project->project_photo }}" alt="thumb"
                                                style="width: 80px; height: 80px; background-size: center; object-fit: cover;">
                                        </div>
                                        <div class="recent-post-bio">
                                            <h6>
                                                <a href="">
                                                    {{ $project->project_title ?? '' }}
                                                </a>
                                            </h6>
                                            <span>
                                                <i class="far fa-clock"></i>
                                                {{ $project->project_status ?? '' }}
                                                Project
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                            <div class="widget social-share">
                                <h5 class="widget-title">Follow Us</h5>
                                <div class="social-share-link">
                                    <a href="https://www.facebook.com/winthtesan" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details">
                            <div class="portfolio-details-img mb-30">
                                <img src="{{ $project_details->project_photo }}" alt="thumb">
                            </div>
                            <div class="portfolio-details">
                                <h3 class="mb-20" style="font-size: 22px;">
                                    {{ $project_details->project_title ?? '' }}
                                </h3>
                                <p class="mb-20">
                                    {!! $project_details->project_description ?? '' !!}
                                </p>
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <img src="assets/img/portfolio/01.jpg" alt>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="assets/img/portfolio/02.jpg" alt>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="gallery-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="site-heading text-center">
                                            <span class="site-title-tagline"><i class="far fa-lightbulb-on"></i>
                                                Gallery</span>
                                            <h2 class="site-title">Project Photo <span>Gallery</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row popup-gallery">
                                    @php
                                        $images = explode(',', $project_details->project_gallery);
                                    @endphp
                                    @foreach ($images as $image)
                                        <div class="col-md-4">
                                            <div class="gallery-item">
                                                <div class="gallery-img">
                                                    <img src="{{ $image }}"
                                                        style="width: 100%; height: 250px; background-size: center; object-fit: cover;">
                                                </div>
                                                <div class="gallery-content">
                                                    <a class="popup-img gallery-link" href="{{ $image }}">
                                                        <i class="fal fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
