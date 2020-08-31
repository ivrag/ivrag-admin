<?php
session_start();
if (!empty($_SESSION["wg28-user"]) && $_SESSION["auth"] === True) {
  $page = "dashboard";
  require_once dirname(__FILE__) . "/../config.php";
?>

<!DOCTYPE html>
<html lang="de">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Immobilien Von Rehetobel AG">

  <!-- favicon -->
  <link rel="icon" type="image/svg+xml" href="../lib/img/brand/brand-28.svg" sizes="any">

  <title>Übersicht &bull; admin.wohnung28</title>

  <!-- Custom fonts for this template-->
  <link href="../node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="../node_modules/startbootstrap-sb-admin-2/css/sb-admin-2.min.css">
  <link rel="stylesheet" href="../assets/sb-admin/css/sb-admin-2.custom.css">
  <link rel="stylesheet" href="../assets/css/default/default.styles.css">

  <!-- Shoelace -->
  <link rel="stylesheet" href="../node_modules/@shoelace-style/shoelace/dist/shoelace/shoelace.css">

  <!-- Odometer -->
  <link rel="stylesheet" href="../node_modules/odometer/themes/odometer-theme-default.css">

  <!-- Custom -->
  <link rel="stylesheet" href="./style.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <?php require_once ROOT . "assets/client/sidebar.php" ?>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <div class="load-screen">
        <svg class="background-brand" viewBox="0 0 4000 852" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M539.531 512.57L600.398 190.844H693.252L592.945 643H499.16L425.561 340.527L351.961 643H258.176L157.869 190.844H250.723L311.9 511.949L386.432 190.844H465.311L539.531 512.57ZM714.059 471.889C714.059 438.557 720.477 408.848 733.312 382.762C746.148 356.676 764.574 336.49 788.59 322.205C812.812 307.92 840.865 300.777 872.748 300.777C918.088 300.777 955.043 314.648 983.613 342.391C1012.39 370.133 1028.44 407.812 1031.75 455.43L1032.37 478.41C1032.37 529.961 1017.98 571.367 989.203 602.629C960.426 633.684 921.814 649.211 873.369 649.211C824.924 649.211 786.209 633.684 757.225 602.629C728.447 571.574 714.059 529.34 714.059 475.926V471.889ZM803.807 478.41C803.807 510.293 809.811 534.723 821.818 551.699C833.826 568.469 851.01 576.854 873.369 576.854C895.107 576.854 912.084 568.572 924.299 552.01C936.514 535.24 942.621 508.533 942.621 471.889C942.621 440.627 936.514 416.404 924.299 399.221C912.084 382.037 894.9 373.445 872.748 373.445C850.803 373.445 833.826 382.037 821.818 399.221C809.811 416.197 803.807 442.594 803.807 478.41ZM1175.22 343.633C1199.03 315.062 1228.95 300.777 1264.97 300.777C1337.84 300.777 1374.8 343.115 1375.83 427.791V643H1286.09V430.275C1286.09 411.021 1281.95 396.84 1273.66 387.73C1265.38 378.414 1251.62 373.756 1232.36 373.756C1206.07 373.756 1187.02 383.9 1175.22 404.189V643H1085.47V166H1175.22V343.633ZM1526.14 306.988L1528.93 345.807C1552.95 315.787 1585.14 300.777 1625.51 300.777C1661.12 300.777 1687.62 311.232 1705.01 332.143C1722.4 353.053 1731.31 384.314 1731.72 425.928V643H1641.97V428.102C1641.97 409.055 1637.83 395.287 1629.55 386.799C1621.27 378.104 1607.5 373.756 1588.25 373.756C1562.99 373.756 1544.05 384.521 1531.42 406.053V643H1441.67V306.988H1526.14ZM2001.28 608.84C1979.12 635.754 1948.48 649.211 1909.35 649.211C1873.33 649.211 1845.79 638.859 1826.75 618.156C1807.91 597.453 1798.28 567.123 1797.87 527.166V306.988H1887.62V524.061C1887.62 559.049 1903.56 576.543 1935.44 576.543C1965.87 576.543 1986.78 565.984 1998.17 544.867V306.988H2088.23V643H2003.76L2001.28 608.84ZM2238.53 306.988L2241.33 345.807C2265.34 315.787 2297.54 300.777 2337.91 300.777C2373.52 300.777 2400.02 311.232 2417.41 332.143C2434.8 353.053 2443.7 384.314 2444.12 425.928V643H2354.37V428.102C2354.37 409.055 2350.23 395.287 2341.95 386.799C2333.66 378.104 2319.9 373.756 2300.64 373.756C2275.38 373.756 2256.44 384.521 2243.81 406.053V643H2154.06V306.988H2238.53ZM2499.39 472.51C2499.39 420.959 2511.61 379.449 2536.04 347.98C2560.67 316.512 2593.8 300.777 2635.41 300.777C2672.26 300.777 2700.94 313.406 2721.43 338.664L2725.16 306.988H2806.52V631.82C2806.52 661.219 2799.79 686.787 2786.34 708.525C2773.09 730.264 2754.35 746.826 2730.13 758.213C2705.91 769.6 2677.54 775.293 2645.04 775.293C2620.4 775.293 2596.39 770.324 2572.99 760.387C2549.6 750.656 2531.9 738.027 2519.89 722.5L2559.64 667.844C2582 692.895 2609.12 705.42 2641 705.42C2664.81 705.42 2683.34 699.002 2696.59 686.166C2709.84 673.537 2716.46 655.525 2716.46 632.131V614.119C2695.76 637.514 2668.54 649.211 2634.79 649.211C2594.42 649.211 2561.71 633.477 2536.66 602.008C2511.81 570.332 2499.39 528.408 2499.39 476.236V472.51ZM2589.14 479.031C2589.14 509.465 2595.25 533.377 2607.46 550.768C2619.68 567.951 2636.45 576.543 2657.77 576.543C2685.1 576.543 2704.66 566.295 2716.46 545.799V404.5C2704.46 384.004 2685.1 373.756 2658.39 373.756C2636.86 373.756 2619.88 382.555 2607.46 400.152C2595.25 417.75 2589.14 444.043 2589.14 479.031Z" fill="#606060" fill-opacity="0.45"/>
          <path d="M3451 52C3657.55 52 3825 219.446 3825 426C3825 632.554 3657.55 800 3451 800C3244.45 800 3077 632.555 3077 426C3077 219.446 3244.45 52 3451 52Z" stroke="#606060" stroke-opacity="0.45" stroke-width="30"/>
          <path d="M3430.84 604.851H3176.64V554.418L3296.61 426.554C3313.08 408.554 3325.22 392.848 3333.03 379.433C3341.01 366.017 3345 353.282 3345 341.226C3345 324.755 3340.84 311.849 3332.52 302.51C3324.2 293 3312.32 288.246 3296.86 288.246C3280.22 288.246 3267.06 294.019 3257.38 305.566C3247.88 316.944 3243.12 331.972 3243.12 350.649H3169.25C3169.25 328.065 3174.6 307.435 3185.3 288.755C3196.17 270.076 3211.45 255.473 3231.15 244.946C3250.85 234.248 3273.18 228.898 3298.14 228.898C3336.34 228.898 3365.97 238.068 3387.03 256.407C3408.26 274.747 3418.87 300.641 3418.87 334.094C3418.87 352.434 3414.12 371.111 3404.61 390.131C3395.1 409.149 3378.8 431.308 3355.7 456.609L3271.39 545.504H3430.84V604.851ZM3717.9 332.566C3717.9 350.565 3713.4 366.527 3704.4 380.45C3695.4 394.375 3683.01 405.497 3667.21 413.818C3685.21 422.479 3699.48 434.45 3710 449.733C3720.53 464.846 3725.8 482.676 3725.8 503.222C3725.8 536.164 3714.59 562.23 3692.17 581.417C3669.76 600.437 3639.28 609.946 3600.73 609.946C3562.19 609.946 3531.62 600.352 3509.04 581.163C3486.45 561.975 3475.16 535.994 3475.16 503.222C3475.16 482.676 3480.43 464.761 3490.95 449.478C3501.48 434.195 3515.66 422.309 3533.49 413.818C3517.7 405.497 3505.3 394.375 3496.3 380.45C3487.47 366.527 3483.06 350.565 3483.06 332.566C3483.06 300.981 3493.59 275.85 3514.64 257.172C3535.7 238.322 3564.31 228.898 3600.48 228.898C3636.48 228.898 3665.01 238.237 3686.06 256.917C3707.29 275.425 3717.9 300.641 3717.9 332.566ZM3651.93 497.873C3651.93 481.741 3647.26 468.835 3637.92 459.157C3628.58 449.478 3616.02 444.638 3600.22 444.638C3584.6 444.638 3572.12 449.478 3562.78 459.157C3553.44 468.666 3548.77 481.571 3548.77 497.873C3548.77 513.664 3553.36 526.4 3562.53 536.079C3571.7 545.759 3584.43 550.598 3600.73 550.598C3616.69 550.598 3629.18 545.927 3638.18 536.589C3647.35 527.25 3651.93 514.344 3651.93 497.873ZM3644.29 336.131C3644.29 321.698 3640.47 310.152 3632.83 301.491C3625.19 292.66 3614.4 288.246 3600.48 288.246C3586.72 288.246 3576.03 292.492 3568.39 300.981C3560.74 309.472 3556.92 321.188 3556.92 336.131C3556.92 350.904 3560.74 362.792 3568.39 371.791C3576.03 380.79 3586.81 385.291 3600.73 385.291C3614.66 385.291 3625.36 380.79 3632.83 371.791C3640.47 362.792 3644.29 350.904 3644.29 336.131Z" fill="#606060" fill-opacity="0.45"/>
        </svg>
      </div>

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
          </button>

          <div class="mt-2 ml-0">
            <h1 class="h3 text-gray-800">Übersicht</h1>
          </div>

          <?php require_once ROOT . "assets/client/topnav.php" ?>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Website Visitors -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h4 font-weight-bold text-primary text-uppercase mb-1">Seitenbesuche</div>
                      <div id="page-visitors" class="h3 mb-0 font-weight-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-eye fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Booking Visitors -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h4 font-weight-bold text-success text-uppercase mb-1">Reservationsbesuche</div>
                      <div id="booking-visitors" class="h3 mb-0 font-weight-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

              <!-- Color System -->
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Primary
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Success
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Info
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Warning
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Danger
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Secondary
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-light text-black shadow">
                    <div class="card-body">
                      Light
                      <div class="text-black-50 small">#f8f9fc</div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                  <div class="card-body">
                      Dark
                      <div class="text-white-50 small">#5a5c69</div>
                  </div>
                </div>
              </div>
            </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../node_modules/startbootstrap-sb-admin-2/img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div>

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <?php require_once ROOT . "assets/client/footer.php" ?>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="../node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>
  <script src="../node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../node_modules/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/sb-admin/js/sb-admin-2.custom.js"></script>

  <!-- Shoelace -->
  <script type="module" src="../node_modules/@shoelace-style/shoelace/dist/shoelace/shoelace.esm.js"></script>

  <!-- Page level plugins -->
  <script src="../node_modules/startbootstrap-sb-admin-2/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../node_modules/startbootstrap-sb-admin-2/js/demo/chart-area-demo.js"></script>
  <script src="../node_modules/startbootstrap-sb-admin-2/js/demo/chart-pie-demo.js"></script>

  <!-- xhr -->
  <script type="text/javascript" src="../assets/js/xhr/xhr.min.js"></script>

  <!-- Odometer -->
  <script src="../node_modules/odometer/odometer.min.js"></script>

  <!-- Custom -->
  <script type="text/javascript" src="./main.js"></script>

</body>

</html>

<?php
} else {
  header("Location: ../login/");
}
?>