@extends('layouts.main')
@section('title', '- Services')
@section('content')

    <div class="site-breadcrumb" style="background: url({{ asset('data/about-us-banner.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">
                Our Services
            </h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    Services
                </li>
            </ul>
        </div>
    </div>

@endsection
