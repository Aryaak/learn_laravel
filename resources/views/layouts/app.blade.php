<!DOCTYPE html>
<html lang="en">
  <!-- Head -->
  @include('layouts.head')
  <!-- End Head -->
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- End Preloader -->

  <!-- Navbar -->
  @include('layouts.navbar')
  <!-- End navbar -->

  <!-- Sidebar Container -->
 @include('layouts.sidebar')
  <!-- End Sidebar Container -->

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content-->
   @yield('content')
    <!-- End content -->
  </div>
  <!-- End content-wrapper -->

  <!-- Footer -->
  @include('layouts.footer')
  <!-- End Footer -->
  
</div>
<!-- End Wrapper -->

<!-- Script -->
@include('layouts.script')
<!-- End Script -->

</body>
</html>
