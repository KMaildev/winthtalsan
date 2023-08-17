<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <h4 class="footer-widget-title">
                            Head office
                        </h4>
                        <p class="mb-3">
                            Interested in discussing?
                        </p>
                        <ul class="footer-contact">
                            <li>
                                <a href="tel:098622268">
                                    <i class="far fa-phone"></i>
                                    098622268, &nbsp;
                                </a>

                                <a href="tel:095433399">
                                    095433399
                                </a>
                            </li>

                            <li>
                                <a href="tel:0949777788">
                                    <i class="far fa-phone"></i>
                                    0949777788, &nbsp;
                                </a>

                                <a href="tel:0973777788">
                                    0973777788
                                </a>
                            </li>

                            <li>
                                <a href="tel:0973257455">
                                    <i class="far fa-phone"></i>
                                    0973257455, &nbsp;
                                </a>

                                <a href="tel:098632857">
                                    098632857
                                </a>
                            </li>

                            <li>
                                <a href="tel:095153400">
                                    <i class="far fa-phone"></i>
                                    095153400, &nbsp;
                                </a>

                                <a href="tel:095177727">
                                    095177727
                                </a>
                            </li>

                            <li>
                                <a href="javascript::void(0)">
                                    <i class="far fa-map-marker-alt"></i>
                                    No.1250, Thakhin Ohn Pe Gyi Street, North Dagon Township, Yangon, Myanmar
                                </a>
                            </li>

                            <li>
                                <a href="mailto:winthtesanoffice123636@gmail.com">
                                    <i class="far fa-envelope"></i>
                                    winthtesanoffice123636@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="fas fa-caret-right"></i>
                                    Home
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('about.index') }}">
                                    <i class="fas fa-caret-right"></i>
                                    About of Our Company
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('md') }}">
                                    <i class="fas fa-caret-right"></i>
                                    MD'S Message
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('team') }}">
                                    <i class="fas fa-caret-right"></i>
                                    Meet Our Team
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('projects.index') }}">
                                    <i class="fas fa-caret-right"></i>
                                    Our Projects
                                </a>
                            </li>

                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('activities.show', $category->id) }}">
                                        <i class="fas fa-caret-right"></i>
                                        {{ $category->title ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">
                            Google Map
                        </h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d516.1122235554395!2d96.17087433923224!3d16.881355276831027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19351ce267441%3A0xe9af5a652f382ea!2sWint%20Hte%20San%20Construction%20%26%20Home%20Decoration%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1692030956513!5m2!1sen!2smm"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">
                            Facebook
                        </h4>
                        <div class="footer-newsletter">
                            <div class="subscribe-form">
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous"
                                    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                                    nonce="PosYNXjc"></script>

                                <div class="fb-page" data-href="https://www.facebook.com/winthtesan"
                                    data-tabs="timeline" data-width="" data-height="300" data-small-header="false"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/winthtesan"
                                        class="fb-xfbml-parse-ignore"><a
                                            href="https://www.facebook.com/winthtesan">Facebook</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p class="copyright-text">
                        &copy; Copyright <span id="date"></span> <a href="#"> Electrow </a> All Rights
                        Reserved.
                    </p>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
