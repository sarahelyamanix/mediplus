<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-12">
                <!-- Contact -->
                <ul class="top-link">
                    <li><a href="#">{{ __('messages.about_us') }}</a></li>
                    <li><a href="#">{{ __('messages.doctors') }}</a></li>
                    <li><a href="#">{{ __('messages.contact_us') }}</a></li>
                    <li><a href="#">{{ __('messages.faq') }}</a></li>
                </ul>
                <!-- End Contact -->
            </div>
            <div class="col-lg-6 col-md-7 col-12">
                <!-- Top Contact -->
                <ul class="top-contact" style="display: flex; justify-content: flex-end;">
                    <li style="margin-left: auto;">
                        <i class="fa fa-phone">+880 1234 56789</i>
                    </li>
                    <li>
                        <i class="fa fa-envelope"><a href="mailto:support@yourmail.com">support@yourmail.com</a></i>
                    </li>
                    <li style="margin-left: auto;">
                        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img//english-flag.png')}}" alt="English" style="width: 24px; height: 24px; border-radius: 50%; object-fit: cover; margin-right: 8px;">
                            English
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/arabic-flag.png')}}" alt="العربية" style="width: 24px; height: 24px; border-radius: 50%; object-fit: cover; margin-right: 8px;">
                            العربية
                        </a>
                    </li>
                </ul>
                <!-- End Top Contact -->
            </div>
        </div>
    </div>
</div>
