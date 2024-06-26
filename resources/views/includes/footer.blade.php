<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>{{ __('messages.about_us') }}</h2>
                        <p>{{ __('messages.about_us_text') }}</p>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>{{ __('messages.quick_links') }}</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.home') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.about_us') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.services') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.our_cases') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.other_links') }}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.consulting') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.finance') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.testimonials') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.faq') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.contact_us') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>{{ __('messages.open_hours') }}</h2>
                        <p>{{ __('messages.open_hours_text') }}</p>
                        <ul class="time-sidual">
                            <li class="day">{{ __('messages.monday_friday') }} <span>8.00-20.00</span></li>
                            <li class="day">{{ __('messages.saturday') }} <span>9.00-18.30</span></li>
                            <li class="day">{{ __('messages.monday_thursday') }} <span>9.00-15.00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>{{ __('messages.newsletter') }}</h2>
                        <p>{{ __('messages.newsletter_text') }}</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="email" placeholder="{{ __('messages.email_placeholder') }}" class="common-input" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{ __('messages.email_placeholder') }}'" required="" type="email">
                            <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>{{ __('messages.copyright') }} <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
