<?php
include "koneksi.php";

session_start();
error_reporting(0);
if (isset($_SESSION["ses_username"]) == "") {
  header("location: login.view.php");
} else {
  $data_id = $_SESSION["ses_id"];
  $data_nama = $_SESSION["ses_nama"];
  $data_foto = $_SESSION["ses_foto"];
  $data_nohp = $_SESSION["ses_nohp"];
  $data_email = $_SESSION["ses_email"];
  $data_username = $_SESSION["ses_username"];
  $data_password = $_SESSION["ses_password"];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>Dashboard Suki</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="
        background-image: url('../assets/img/nv-bg.jpg');
        background-position-y: 50%;
      ">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <div class="min-height-300 position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="./dashboard.view.php">
        <img src="../assets/images/icon.png" class="navbar-brand-img h-100" alt="main_logo" />
        <span class="ms-1 font-weight-bold">Suki Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./dashboard.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-warning text-sm opacity-10"></i>
              <!-- <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i> -->
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="./orders.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-cart text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Oders</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="./transaksi.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tag text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Transaksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./products.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bag-17 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./customs.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Customs</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./users.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-circle-08 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./report.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-bar-32 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Report</span>
          </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="./pages/tables.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/billing.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-credit-card text-success text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Billing</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/virtual-reality.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Virtual Reality</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/rtl.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">RTL</span>
            </a>
          </li> -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
            Account pages
          </h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./profile.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="./pages/sign-in.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-single-copy-04 text-warning text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Sign In</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/sign-up.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Sign Up</span>
            </a>
          </li> -->
      </ul>
    </div>
    <!-- <div class="sidenav-footer mx-3">
        <div class="card card-plain shadow-none" id="sidenavCard">
          <img
            class="w-50 mx-auto"
            src="./assets/img/illustrations/icon-documentation.svg"
            alt="sidebar_illustration"
          />
          <div class="card-body text-center p-3 w-100 pt-0">
            <div class="docs-info">
              <h6 class="mb-0">Need help?</h6>
              <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
            </div>
          </div>
        </div>
        <a
          href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard"
          target="_blank"
          class="btn btn-dark btn-sm w-100 mb-3"
          >Documentation</a
        >
        <a
          class="btn btn-primary btn-sm mb-0 w-100"
          href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree"
          type="button"
          >Upgrade to pro</a
        >
      </div> -->
  </aside>
  <main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-5 text-white" href="javascript:;">Pages</a>
            </li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">
              Dashboard
            </li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center"> -->
          <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..." />
            </div> -->
          <!-- </div> -->
          <ul class="ms-md-auto pe-md-3 d-flex align-items-center navbar-nav justify-content-end">
            <!-- <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li> -->
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>


            <?php
            error_reporting(0);


            $tampilprofil = ("SELECT id, foto, nama, nohp, email, username, password  FROM tb_user WHERE id = '$data_id'");
            $result   = mysqli_query($koneksi, $tampilprofil);

            while ($row = mysqli_fetch_array($result)) {

              $profilName   = $row['nama'];

            ?>

              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                  <span class="d-sm-inline d-none">Halo, <?php echo $profilName ?></span>
                </a>
              </li>

            <?php

            }
            ?>

            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="#" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-chevron-circle-down cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="dropdown-item d-flex align-items-center">
                  <a href="#" class="nav-link text-black px-2">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i> Setting
                  </a>

                </li>
                <li class="dropdown-item d-flex align-items-center">
                  <a href="./profile.view.php" class="nav-link text-black">
                    <i class="fa fa-user fixed-plugin-button-nav cursor-pointer"></i> Profile
                  </a>

                </li>
                <li class="dropdown-item d-flex align-items-center">
                  <a href="./logout.php" class="nav-link text-black">
                    <i class="fa fa-sign-out cursor-pointer"></i> Logout
                  </a>

                </li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                      Today Money
                    </p>

                    <?php
                    error_reporting(0);


                    $sql = ("SELECT format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product WHERE tb_transaksi.tanggal = curdate() AND tb_transaksi.status = 'done'");
                    $result   = mysqli_query($koneksi, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                      $total   = $row['total'];

                    ?>



                      <?php

                      if ($total == '') {
                        echo "
                        <h5 class='font-weight-bolder'> Rp. 0</h5>
                        ";
                      } else {

                        echo "

                        <h5 class='font-weight-bolder'>Rp. $total</h5>
                        
                        ";
                      }

                      ?>




                    <?php

                    }
                    ?>

                    <!-- <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+55%</span>
                      since yesterday
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                      Today Transaction
                    </p>


                    <?php
                    error_reporting(0);


                    $sql = ("SELECT COUNT(*) as jml_transaksi FROM tb_transaksi WHERE tb_transaksi.tanggal = curdate()");
                    $result   = mysqli_query($koneksi, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                      $jml_transaksi   = $row['jml_transaksi'];

                    ?>



                      <?php

                      if ($jml_transaksi == '') {
                        echo "
                        <h5 class='font-weight-bolder'>0</h5>
                        ";
                      } else {

                        echo "

                        <h5 class='font-weight-bolder'>$jml_transaksi</h5>
                        
                        ";
                      }

                      ?>




                    <?php

                    }
                    ?>

                    <!-- <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                      since last week
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                      Total Users
                    </p>
                    <?php
                    error_reporting(0);


                    $sql = ("SELECT COUNT(*) as user FROM tb_user WHERE tb_user.level = '1'");
                    $result   = mysqli_query($koneksi, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                      $jml_user   = $row['user'];

                    ?>



                      <?php

                      if ($jml_user == '') {
                        echo "
                        <h5 class='font-weight-bolder'>0</h5>
                        ";
                      } else {

                        echo "

                        <h5 class='font-weight-bolder'>$jml_user</h5>
                        
                        ";
                      }

                      ?>




                    <?php

                    }
                    ?>
                    <!-- <p class="mb-0">
                      <span class="text-danger text-sm font-weight-bolder">-2%</span>
                      since last quarter
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                      Total Products
                    </p>
                    <?php
                    error_reporting(0);


                    $sql = ("SELECT COUNT(tb_product.nama) as product FROM tb_product");
                    $result   = mysqli_query($koneksi, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                      $jml_product   = $row['product'];

                    ?>



                      <?php

                      if ($jml_product == '') {
                        echo "
                        <h5 class='font-weight-bolder'>0</h5>
                        ";
                      } else {

                        echo "

                        <h5 class='font-weight-bolder'>$jml_product</h5>
                        
                        ";
                      }

                      ?>




                    <?php

                    }
                    ?>
                    <!-- <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+5%</span>
                      than last month
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-bag-17 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Sales overview</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">4% more</span> in 2021
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
              <div class="carousel-inner border-radius-lg h-100">
                <div class="carousel-item h-100 active" style="
                      background-image: url('../assets/img/carousel-1.jpg');
                      background-size: cover;
                    ">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Get started with Argon</h5>
                    <p>
                      There’s nothing I really wanted to do in life that I
                      wasn’t able to get good at.
                    </p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="
                      background-image: url('../assets/img/carousel-2.jpg');
                      background-size: cover;
                    ">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">
                      Faster way to create web pages
                    </h5>
                    <p>
                      That’s my skill. I’m not really specifically talented at
                      anything except for the ability to learn.
                    </p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="
                      background-image: url('../assets/img/carousel-3.jpg');
                      background-size: cover;
                    ">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-trophy text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">
                      Share with us your design tips!
                    </h5>
                    <p>
                      Don’t be afraid to be wrong because you can’t learn
                      anything from a compliment.
                    </p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Top Products</h6>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center">

                <thead>
                  <tr>
                    <th>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">No.</p>

                      </div>
                    </th>
                    <th>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Nama</p>

                      </div>
                    </th>
                    <th>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">harga</p>

                      </div>
                    </th>
                    <th>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Jumlah Terjual</p>

                      </div>
                    </th>
                  </tr>
                </thead>

                <tbody>


                  <?php

                  $query  = "SELECT tb_product.nama, format(tb_product.harga,0) as harga , SUM(tb_detail_transaksi.qty) AS jml_terjual FROM tb_detail_transaksi INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product INNER JOIN tb_transaksi ON tb_transaksi.id=tb_detail_transaksi.id_transaksi WHERE tb_transaksi.status = 'done' GROUP BY tb_product.nama ORDER BY jml_terjual desc LIMIT 5";
                  $result = mysqli_query($koneksi, $query);


                  $no     = 1;
                  while ($row = mysqli_fetch_array($result)) {
                    $namapro = $row['nama'];
                    $hargapro = $row['harga'];
                    $jumlahpro = $row['jml_terjual'];


                  ?>

                    <tr>
                      <td>
                        <div class="text-center">
                          <h6 class="text-xs font-weight-bold mb-0"> <?php echo $no ?> </h6>
                        </div>
                      </td>


                      <td>
                        <div class="text-center">
                          <h6 class="text-xs font-weight-bold mb-0"> <?php echo $namapro ?> </h6>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <h6 class="text-xs font-weight-bold mb-0">Rp. <?php echo $hargapro ?></h6>
                        </div>
                      </td>
                      <td class="align-middle text-sm">
                        <div class="col text-center">
                          <h6 class="text-xs font-weight-bold mb-0"><?php echo $jumlahpro ?></h6>
                        </div>
                      </td>
                    </tr>
                  <?php

                    $no++;
                  }

                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Top Categories</h6>
            </div>
            <div class="card-body p-3">



              <?php

              $query  = "SELECT tb_kategori.nama, SUM(tb_detail_transaksi.qty) AS jml_terjual FROM tb_detail_transaksi INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product INNER JOIN tb_kategori ON tb_kategori.id=tb_product.kategori INNER JOIN tb_transaksi ON tb_transaksi.id=tb_detail_transaksi.id_transaksi WHERE tb_transaksi.status = 'done' GROUP BY tb_kategori.nama ORDER BY jml_terjual desc LIMIT 5;";
              $result = mysqli_query($koneksi, $query);

              while ($row = mysqli_fetch_array($result)) {
                $namakate = $row['nama'];
                $jmlkate = $row['jml_terjual'];
                // $hargapro = $row['harga'];
                // $jumlahpro = $row['jml_terjual'];


              ?>
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                      <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                        <i class="ni ni-mobile-button text-white opacity-10"></i>
                      </div>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm"> <?php echo $namakate ?></h6>
                        <span class="text-xs">
                          <span class="font-weight-bold"> <?php echo $jmlkate ?> sold</span></span>
                      </div>
                    </div>
                    <div class="d-flex">
                      <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                        <i class="ni ni-bold-right" aria-hidden="true"></i>
                      </button>
                    </div>
                  </li>
                </ul>

              <?php

              }

              ?>


            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1" />
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">
            White
          </button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">
            Dark
          </button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">
          You can change the sidenav type just on desktop view.
        </p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)" />
          </div>
        </div>
        <hr class="horizontal dark my-sm-4" />
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)" />
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i>
            Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, "rgba(94, 114, 228, 0.2)");
    gradientStroke1.addColorStop(0.2, "rgba(94, 114, 228, 0.0)");
    gradientStroke1.addColorStop(0, "rgba(94, 114, 228, 0)");
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: [
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6,
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
            },
            ticks: {
              display: true,
              padding: 10,
              color: "#fbfbfb",
              font: {
                size: 11,
                family: "Open Sans",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5],
            },
            ticks: {
              display: true,
              color: "#ccc",
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
        damping: "0.5",
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js"></script>
</body>

</html>