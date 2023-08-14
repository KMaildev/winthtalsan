@extends('layouts.main')
@section('title', '- Contact us')
@section('content')

    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>


    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Office Address</h5>
                                <p>
                                    No.1250, Thakhin Ohn Pe Gyi Street, North Dagon Township, Yangon, Myanmar
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone-volume"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Call Us</h5>
                                <p>
                                    <a href="tel:098622268">
                                        098622268,
                                    </a>
                                    <a href="tel:095433399">
                                        095433399,
                                    </a>
                                    <a href="tel:0949777788">
                                        0949777788,
                                    </a>
                                    <a href="tel:0973777788">
                                        0973777788,
                                    </a>
                                    <a href="tel:0973257455">
                                        0973257455,
                                    </a>
                                    <a href="tel:098632857">
                                        098632857,
                                    </a>
                                    <a href="tel:095153400">
                                        095153400,
                                    </a>
                                    <a href="tel:095177727">
                                        095177727
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelopes"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Email Us</h5>
                                <p>
                                    <a href="mailto:info@winthtalsan.com">
                                        info@winthtalsan.com
                                    </a>
                                    <a href="mailto:winthtesanoffice123636@gmail.com">
                                        winthtesanoffice123636@gmail.com
                                    </a>
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-img">
                            <img src="assets/img/contact/01.jpg" alt>
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Get In Touch</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page randomised words which don't look even slightly when looking at its
                                    layout. </p>
                            </div>
                            <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-3">
                                            <input name="name" type="text" required class="form-control"
                                                placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-3">
                                            <input name="email" type="text" class="form-control" required
                                                placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-3">
                                            <input name="phone" type="text" class="form-control" required
                                                placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-3">
                                            <input name="subject" type="text" class="form-control" required
                                                placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="theme-btn">Send
                                            Message <i class="far fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.34194156103!2d-74.03927096447748!3d40.759040329405195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a01c8df6fb3cb8!2sSolomon%20R.%20Guggenheim%20Museum!5e0!3m2!1sen!2sbd!4v1619410634508!5m2!1sen!2s"
            style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>

@endsection
