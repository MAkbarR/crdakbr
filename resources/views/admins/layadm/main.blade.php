<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DASHBOARD ADMIN</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('mdn/assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{ asset('mdn/assets/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
@include('admins.layadm.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
@include('admins.layadm.header')
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        @yield('content')
@include('admins.layadm.footer')
      </div>
    </div>
  </div>
  <script src="{{ asset('mdn/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('mdn/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('mdn/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('mdn/assets/js/app.min.js') }}"></script>
  <script src="{{ asset('mdn/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('mdn//assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('mdn/assets/js/dashboard.js') }}"></script>
</body>

</html>