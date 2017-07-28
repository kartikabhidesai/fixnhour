<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
      @include('freelancer.includes.header')
<body>
    <div id="app">
        @include('freelancer.includes.body-header')
        <div class="clearfix"></div>
        @yield('content')
        @include('freelancer.includes.body-footer')
    </div>
    <!-- Scripts -->
    @include('freelancer.includes.footer')
</body>
</html>
