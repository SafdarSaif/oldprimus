@include('admin.panels.header-top')

@yield('styles')

@include('admin.panels.header-bottom')
@include('admin.panels.top-menu')
@include('admin.panels.menu')
@yield('content')
@include('admin.panels.footer-top')
@yield('scripts')
@include('admin.panels.footer-bottom')
