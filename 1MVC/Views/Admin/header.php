<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo $this->base_url; ?>assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="<?php echo $this->base_url; ?>assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/jquery.dataTables.min.csshttps://cdn.datatables.net/2.0.0/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/js/jquery.dataTables.min.js">

  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/jquery.dataTables.min.csshttps://cdn.datatables.net/2.0.0/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/js/jquery.dataTables.min.js">

  <!-- invoice script -->
    <!-- jQuery -->
    <script src="<?php echo $this->base_url; ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo $this->base_url; ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo $this->base_url; ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo $this->base_url; ?>plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo $this->base_url; ?>plugins/script.js"></script>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <!-- -------------------------------------------------------------- -->
    <aside class="left-sidebar" style="background-color: #00000021;">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between" style="background-color: #ff00f314;">
          <a href="admindashboard" class="text-nowrap logo-img">
            <i class="fa-solid fa-user"></i><h4 class="mt-4">Admin Dashboard</h4>
            <!-- <img src="<?php echo $this->base_url; ?>assets/images/logos/dark-logo.svg" width="180" alt="" /> -->
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="allusers" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">All Users</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="category" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Category</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="subcategory" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Sub-Category</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="product" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Product</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="gallery" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Gallery</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="allorder" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Order</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="offers" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Offers</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="payment" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Payment</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="invoice" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Invoice</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="feedback" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Feedback</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="deliveryboy" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Delivery Boy</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="generatereport" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Generate Report</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <!-- <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)"> -->
              <i class="ti ti-menu-2"></i>
              <!-- </a> -->
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link nav-icon-hover" href="javascript:void(0)"> -->
              <!-- <i class="ti ti-bell-ringing"></i> -->
              <div class="notification bg-primary rounded-circle"></div>
              <!-- </a> -->
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <h5>Hello, Admin</h5>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?php echo $this->base_url; ?>assets/images/profile/user-1.jpg" alt="" width="35"
                    height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="login" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>