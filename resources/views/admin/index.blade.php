<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .text-logo {
      font-size: 20px;
      font-weight: bold;
      color: black;
      letter-spacing: 0;
    }
    .text-logo span {
      color: #1f3bb3;
    }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gabut Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset ('vendors_template/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors_template/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors_template/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors_template/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors_template/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors_template/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors_template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors_template/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('vendors_template/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('vendors_template/images/favicon.png') }}" />
  </head>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="index.html">
              <div class="text-logo">GABUT<span>ADMIN</span></div>
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
              <img src={{ asset("vendors_template/images/logo-mini.svg") }} alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top"> 
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Good Afternoon, <span class="text-black fw-bold">Assyifa Khalif</span></h1>
              <h3 class="welcome-sub-text">Happy Nice Day</h3>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>

      </div>
    
       <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-category">Products</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Management Products</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href={{ url('products/') }}>View Products</a></li>
                  <li class="nav-item"> <a class="nav-link" href={{ url('supplier/view') }}>View Supplier</a></li>
                  <li class="nav-item"> <a class="nav-link" href={{ url('supplier/create') }}>Add Supplier</a></li>
                  <li class="nav-item"> <a class="nav-link" href={{ url('products/create') }}>Add Products</a></li>
                  <li class="nav-item"> <a class="nav-link" href={{ url('purchase/create') }}>Add Purchase</a></li>
                </ul>
              </div>
            </li>
        </ul>
      </nav>
      <!-- partial -->
      <di class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                @include('flash::message')
                @yield('content')
                </div>
            </div>
        </div>
    </div>
          </footer>
          <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('vendors_template/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('vendors_template/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('vendors_template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('vendors_template/vendors/progressbar.js/progressbar.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('vendors_template/js/off-canvas.js') }}"></script>
  <script src="{{ asset('vendors_template/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('vendors_template/js/template.js') }}"></script>
  <script src="{{ asset('vendors_template/js/settings.js') }}"></script>
  <script src="{{ asset('vendors_template/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('vendors_template/js/jquery.cookie.js') }}" type="text/javascript"></script>
  <script src="{{ asset('vendors_template/js/dashboard.js') }}"></script>
  <script src="{{ asset('vendors_template/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>
