
<!DOCTYPE html>
<html lang="es">

@include('layouts.head')

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar STart -->
    @include('layouts.header')
    <!-- Navbar End -->

    {{-- CONTENT PAGE --}}
    @yield('content')

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    @include('layouts.scripts')
</body>
</html>
