<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
     @include('client.includes.header')

<body>
    
    <div id="app">
        @include('client.includes.body-header')
        
        <div class="clearfix"></div>

        @yield('content')
        
        @include('client.includes.body-footer')
        

    </div>

    <!-- Scripts -->

    @include('client.includes.footer')
    
</body>
</html>
