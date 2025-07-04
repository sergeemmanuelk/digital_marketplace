<!doctype html>
<html lang="en">

<head>
    @include('admin.layouts.partials.head')
</head>

<body>
    <script src="{{ asset('assets/admin/js/demo-theme.min.js') }}"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('admin.layouts.partials.sidebar')

        <!-- Navbar -->
        @include('admin.layouts.partials.navbar')

        <!-- Dynamic content -->
        @yield('content')
    </div>
    <!-- Tabler Core -->

    @include('admin.layouts.partials.script')
</body>

</html>
