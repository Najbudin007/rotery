<!DOCTYPE html>
<html class="no-js" lang="en">
@include('frontend.layouts.header')

  <body class="font-poppins font-400">
    <!-- Navigation bar -->
    @include('frontend.layouts.navbar')

    @yield('content')

    <!-- Footer -->
    @include('frontend.layouts.footer')

    @include('frontend.layouts.script')
  </body>
</html>
