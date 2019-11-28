<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
   @include('admin.layouts.styles')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
  @include('admin.layouts.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <!-- Page Title Header Starts-->
                <div class="row page-title-header">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">Dashboard</h4>
                            <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                                <ul class="quick-links">
                                    <li><a href="#">ICE Market data</a></li>
                                    <li><a href="#">Own analysis</a></li>
                                    <li><a href="#">Historic market data</a></li>
                                </ul>
                                <ul class="quick-links ml-auto">
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="#">Analytics</a></li>
                                    <li><a href="#">Watchlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-toolbar">
                            <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
                                <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
                            </div>
                            <div class="filter-wrapper">
                                <div class="dropdown toolbar-item">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                                        <a class="dropdown-item" href="#">Last Day</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Last Year</a>
                                    </div>
                                </div>
                                <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
                            </div>
                            <div class="sort-wrapper">
                                <button type="button" class="btn btn-primary toolbar-item">New</button>
                                <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownexport">
                                        <a class="dropdown-item" href="#">Export as PDF</a>
                                        <a class="dropdown-item" href="#">Export as DOCX</a>
                                        <a class="dropdown-item" href="#">Export as CDR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Title Header Ends-->
        @yield('content')
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
           @include('admin.layouts.footer')
            <!-- partial -->
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.layouts.scripts')
<!-- End custom js for this page-->
</body>
</html>

