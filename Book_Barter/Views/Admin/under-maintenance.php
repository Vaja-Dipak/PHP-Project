<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Under Maintenance - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $this->assets_url; ?>/Assets/Admin/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo $this->assets_url; ?>/Assets/Admin/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/css/pages/page-misc.css" />

    <!-- Helpers -->
    <script href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script href="<?php echo $this->assets_url; ?>/Assets/Admin/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <!--Under Maintenance -->
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">Under Maintenance!</h2>
        <p class="mb-4 mx-2">Sorry for the inconvenience but we're performing some maintenance at the moment</p>
        <a href="<?php echo($_SESSION["userdata"]->role_id==1)? "dashboard":"home"; ?>" class="btn btn-primary">Back to home</a>
        <div class="mt-4">
          <img
            src="<?php echo $this->assets_url; ?>/Assets/Admin/img/illustrations/girl-doing-yoga-light.png"
            alt="girl-doing-yoga-light"
            width="500"
            data-app-dark-img="illustrations/girl-doing-yoga-dark.png"
            data-app-light-img="illustrations/girl-doing-yoga-light.png" />
        </div>
      </div>
    </div>
    <!-- /Under Maintenance -->

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/libs/jquery/jquery.js"></script>
    <script href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/libs/popper/popper.js"></script>
    <script href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/js/bootstrap.js"></script>
    <script href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script href="<?php echo $this->assets_url; ?>/Assets/Admin/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script href="<?php echo $this->assets_url; ?>/Assets/Admin/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
