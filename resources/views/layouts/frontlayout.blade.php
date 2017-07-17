<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
     @include('front.includes.header')

<body>
    
    <div id="app">
        @include('front.includes.body-header')
        
        <div class="clearfix"></div>

        @yield('content')
        
        @include('front.includes.body-footer')
        

    </div>

    <!-- Scripts -->

    @include('front.includes.footer')
    
</body>
</html>
