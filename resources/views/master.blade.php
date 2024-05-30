<!doctype html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.nav')

    @include('partials.hero')

    @yield('content')

    @include('partials.testimonial')

    @include('partials.footer')

    @include('partials.scripts')

</body>

</html>