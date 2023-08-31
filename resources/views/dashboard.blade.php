<!DOCTYPE html>
<html lang="en">

{{-- header --}}
@include('admin.header')

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-green position-absolute w-100"></div>
    {{-- sidebar --}}
    @include('admin.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @yield('content')
            {{-- footer --}}
            @include('admin.footer')
        </div>
    </main>

    <!--   Core JS Files   -->
    {{-- js --}}
    @include('admin.js')
</body>

</html>
