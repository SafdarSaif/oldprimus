@include('front.panels.header-top')

@yield('styles')
@yield('scripts-top')

@include('front.panels.header-bottom')
@include('front.panels.menu')
@yield('content')
@include('front.panels.footer-top')
@yield('scripts')
@include('front.panels.footer-bottom')
