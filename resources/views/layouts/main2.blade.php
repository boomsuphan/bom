
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>BOM</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Custom fonts for this template-->
        <link href="{{ asset('main/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      
        <!-- Custom styles for this template-->
        <link href="{{ asset('main/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
      </head>
<body id="page-top">
  <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
        @include ('layouts.sidebar2')
      <!--End Sidebar -->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
          <div id="content">
            <!-- Topbar -->
              @include ('layouts.topbar')
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container">
              @yield('content')
            </div>
            <!-- /.container-fluid -->
          </div>
        <!-- End of Main Content -->
        <!-- Footer -->
          @include ('layouts.footer')
        <!-- End of Footer -->
      </div>
        <!-- End of Content Wrapper -->
    </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  <!--JavaScript-->
    <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('main/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
      <script src="{{ asset('main/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
      <script src="{{ asset('main/js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
      <script src="{{ asset('main/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Page level custom scripts -->
      <script src="{{ asset('main/js/demo/chart-area-demo.js') }}"></script>
      <script src="{{ asset('main/js/demo/chart-pie-demo.js') }}"></script>
  <!--End JavaScript-->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
