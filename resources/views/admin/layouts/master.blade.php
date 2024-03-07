@include('admin.layouts.top-includes')

<body>


    <!-- ======= Header ======= -->
    @include('admin.layouts.header')
    <!-- ======= Sidebar ======= -->
    @include('admin.layouts.side-bar')
    <main id="main" class="main">
        
        @include('admin.alert')

        @yield('content')

    </main><!-- End #main -->
    @include('admin.layouts.footer')
