<!DOCTYPE html>
<html lang="en">

  <head>
    @include('partials._head')
  </head>

  <body>
      
     @include('partials._nav') 

    @yield('cover')

     @include('partials._carousel')

<!-- main welcome.blade.php -->
<div class="container">
	@yield('content')
</div><!-- end of container -->    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->

  @include('partials._javascripts')

  @yield('scripts')

  </body>
</html>