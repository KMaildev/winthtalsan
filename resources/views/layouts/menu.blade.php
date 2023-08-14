<header class="header">
    <div class="header-top">
        <div class="container px-0">
            <div class="header-top-wrapper">
                <div class="header-top-left">
                    <div class="header-top-contact">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="far fa-location-dot"></i>
                                    Construction company
                                </a>
                            </li>
                            <li><a
                                    href="https://live.themewild.com/cdn-cgi/l/email-protection#3e575058517e5b465f534e525b105d5153"><i
                                        class="far fa-envelopes"></i>
                                    <span class="__cf_email__"
                                        data-cfemail="98f1f6fef7d8fde0f9f5e8f4fdb6fbf7f5">[email&#160;protected]</span></a>
                            </li>
                            <li><a href="tel:+21236547898"><i class="far fa-phone-volume"></i> +2 123 654 7898</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-social">
                        <span>Follow Us: </span>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container custom-nav position-relative">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                </a>

                <div class="mobile-menu-right">
                    <div class="search-btn">
                        <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript::void(0)" data-bs-toggle="dropdown">
                                About
                            </a>
                            <ul class="dropdown-menu fade-down">
                                <li>
                                    <a class="dropdown-item" href="service.html">
                                        About of Our Company
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="service.html">
                                        MD'S Message
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="service.html">
                                        Meet Our Team
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript::void(0)" data-bs-toggle="dropdown">
                                Gallery & Activities
                            </a>
                            <ul class="dropdown-menu fade-down">
                                <li>
                                    <a class="dropdown-item" href="service.html">
                                        Labour Activities
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="service.html">
                                        Design
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                    <div class="nav-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                        </div>
                        <div class="nav-right-btn mt-2">
                            <a href="contact.html" class="theme-btn">Get A Quote<i
                                    class="fas fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <div class="search-area">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Type Keyword...">
                            <button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </nav>
    </div>
</header>
