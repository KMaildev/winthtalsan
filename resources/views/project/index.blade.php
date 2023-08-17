@extends('layouts.main')
@section('title', '- Contact us')
@section('content')

    <div class="site-breadcrumb" style="background: url({{ asset('data/gallery_banner.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">
                Our Projects
            </h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    Our Projects
                </li>
            </ul>
        </div>
    </div>


    <div class="blog-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">
                            <i class="far fa-lightbulb-on"></i>
                            Wint Htal San Co.,Ltd
                        </span>
                        <h2 class="site-title">Our <span>Projects</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($projects as $project)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-item-img">
                                <img src="{{ $project->project_photo }}" alt="Thumb"
                                    style="width: 100%; height: 250px; background-size: center; object-fit: cover;">
                                <div class="blog-date">
                                    <i class="fal fa-check"></i>
                                    {{ $project->project_status ?? '' }}
                                    Project
                                </div>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li>
                                            <i class="far fa-user-circle"></i>
                                            WINT HTAL SAN CO.,LTD
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="{{ route('projects.show', $project->id) }}" style="font-size: 18px;">
                                        {{ $project->project_title ?? '' }}
                                    </a>
                                </h4>
                                <a class="theme-btn" href="{{ route('projects.show', $project->id) }}">
                                    Read More
                                    <i class="fas fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
