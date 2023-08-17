@extends('layouts.main')
@section('title', "- Meet Our Team")
@section('content')
    <div class="site-breadcrumb" style="background: url({{ asset('data/team_banner.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">
                Meet Our Team
            </h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    Team
                </li>
            </ul>
        </div>
    </div>


    <div class="team-area pt-120 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-lightbulb-on"></i> Our Team</span>
                        <h2 class="site-title">Our Experts <span>Team</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach ($teams as $team)
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="team-img">
                                <img src="{{ $team->photo }}" alt="thumb"
                                    style="width: 100%; height: 350px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="team-social">
                                <a href="https://www.facebook.com/winthtesan/"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>
                                        {{ $team->name ?? '' }}
                                    </h5>
                                    <span>
                                        {{ $team->position ?? '' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
