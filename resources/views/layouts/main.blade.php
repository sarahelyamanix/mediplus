<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<html class="no-js" lang="zxx">
    <head>
       @include('includes.head')
	   @if(app()->getLocale() == 'ar')
	   <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
   @endif
    </head>
    <body>
	
		<!-- Preloader -->
		@include('includes.preloader')
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		@include('includes.proButton')
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			@include('includes.topbar')
			<!-- End Topbar -->
			<!-- Header Inner -->
			@include('includes.headerInner')
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		@yield('content')
		
		<!-- Footer Area -->
		@include('includes.footer')
		<!--/ End Footer Area -->
		
		@include('includes.js')
    </body>
</html>