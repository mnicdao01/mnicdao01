@include('partials._head')
{{--@include('partials._nav')--}}
@include('partials._nav')
   <div class="container">

        @include('partials._messages')
        @yield('content')
         <hr>

   </div>

@include('partials._footer')