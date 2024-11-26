<!DOCTYPE html>
<html lang="en">
@include('theme.partials.head')

<body>
    <!-- Navigation-->
    @include('theme.partials.nav')
    <!-- Page Header-->
    @yield('content')

    <!-- Footer-->
    @include('theme.partials.footer')

    <!-- Bootstrap core JS-->
    @include('theme.partials.scripts')
</body>

</html>
