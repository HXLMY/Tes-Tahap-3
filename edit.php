<?php 
      require 'function.php';

    $id = $_GET ["id"];
    // 
    $data = query("SELECT * FROM tes_magang WHERE id = $id") [0];


      if (isset($_POST["submit"])) {
        if (edit($_POST) > 0) {
            echo "<script> 
                  alert ('data berhasil diedit');
                  document.location.href = 'data.php';
            </script>";
        } else {
            echo "<script> 
            alert ('data gagal diedit');
            document.location.href = 'data.php';
      </script>";
        } 
      }



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tes-Tahap-3 </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./img/logo.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
        <a href="./beranda.php" class="logo d-flex align-items-center">
          <img src="./img/logo.png" alt="logo" />
          <span class="d-none d-lg-block">Tes Tahap 3</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"> </i>
      </div>
      <!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <div class="icon">
 <i class="ri-account-circle-fill"></i>
 </div>
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="./login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="./beranda.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
        <li>
            <a href="./tambah.php" >
              <i class="bi bi-circle"></i><span>Input </span>
            </a>
          </li>  
        <li>
            <a href="./data.php" class="active">
              <i class="bi bi-circle"></i><span>Document </span>
            </a>
          </li>
          
          <li>
              <a href="./cetak.php"> <i class="bi bi-circle"></i><span>Print </span> </a>
            </li>
          <li>
              <a href="./cetak_excel.php"> <i class="bi bi-circle"></i><span>Download File</span> </a>
            </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="./profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="./contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="./login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

     
    </ul>

  </aside><!-- End Sidebar-->
  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Edit Data </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./beranda.php">Home</a></li>
          <li class="breadcrumb-item"><a href="./data.php">Tables</a></li>
          <li class="breadcrumb-item active" style="cursor: pointer;"> Edit Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<br>
<section class="section">
   <div class="row">
     <div class="col-lg-12">
     <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit </h5>
              
 <form action="" method="post" class="ms-3">
     <input type="hidden" name="id" value="<?= $data["id"]; ?>  ">
  <div class="mb-2">
    <label for="project_name" style="font-weight: bold;">PROJECT NAME</label><br>
    <input type="text" name="project_name" id="project_name" class="form-control" required value="<?= $data["project_name"]; ?>" >
  </div>
  <div class="mb-2">
    <label for="client" style="font-weight: bold;">CLIENT</label><br>
    <input type="text" name="client" id="client" class="form-control" required value="<?= $data["client"]; ?>">
  </div>
  <div class="mb-2">
    <label for="email" style="font-weight: bold;">PROJECT LEADER</label><br>
    <input type="text" name="email" id="email" class="form-control" required value="<?= $data["email"]; ?>">
  </div>
  <div class="mb-2">
    <label for="pembuatan" style="font-weight: bold;" >START DATE</label><br>
   
    <input type="date" id="pembuatan" name="pembuatan" class="form-control" required value="<?= $data["pembuatan"]; ?>">
  </div>
  <div class="mb-2">
    <label for="selesai" style="font-weight: bold;">END DATE</label><br>
   
    <input type="date" id="selesai" name="selesai" class="form-control" required value="<?= $data["selesai"]; ?>">
  </div>
  <div class="mb-2">
   <label for="progres" style="font-weight: bold;">PROGRESS</label><br>
   <input type="text" name="progres" id="progres" class="form-control" required value="<?= $data["progres"]; ?>">

  <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
  
</form>
            </div></div></div>
     </div>
   </div>
  </section>
  </main>
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>helmy Wahyudi</span></strong>. All Rights Reserved
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>