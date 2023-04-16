<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <title>{{ $title }} | Dua Putri </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
    
    
        @include('partials.style')
    
    </head>

    

    <body data-sidebar="dark" data-layout-mode="light">

        @include('partials.header')
        

            @include('partials.sidebar')


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        
                        @yield('content')
                    
                    </div>
                </div>

                @include('partials.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('partials.script')
    </body>

</html>