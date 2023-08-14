@extends('layouts.main')
@section('title', '- Contact us')
@section('content')

    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">
                Gallery & Activities
            </h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    Gallery & Activities
                </li>
                <li class="active">
                    {{ $category->title ?? '' }}
                </li>
            </ul>
        </div>
    </div>

    <div class="portfolio-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-lg-flex align-items-end justify-content-between mb-40">
                    <div class="site-heading mb-0">
                        <span class="site-title-tagline">
                            <i class="far fa-lightbulb-on"></i>
                            Gallery & Activities
                        </span>
                        <h2 class="site-title">
                            {{ $category->title ?? '' }}
                        </h2>
                    </div>
                    <div class="filter-control">
                        <ul class="filter-btn">
                            @foreach ($categories as $cat)
                                <li onclick="searchByCategory({{ $cat->id }})" class="@if ($cat->title == $category->title) active @endif">
                                    {{ $cat->title ?? '' }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row filter-box popup-gallery">
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-md-4 filter-item cat1 cat2">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img src="{{ $image }}" alt>
                                </div>
                                <div class="portfolio-content">
                                    <a class="popup-img portfolio-link" href="{{ $image }}">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                    <div class="portfolio-info">
                                        <div class="portfolio-title-info">
                                            <h5 class="portfolio-subtitle">
                                                <span>//</span>
                                                Wint Htal San Co.,Ltd
                                            </h5>
                                            <a href="portfolio-single.html">
                                                <h4 class="portfolio-title">
                                                    {{ $activity->title ?? '' }}
                                                </h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>


    <script>
        function searchByCategory(id) {
            window.location.href = "{{ url('activities') }}" + "/" + id;
        }
    </script>
@endsection
