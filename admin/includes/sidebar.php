<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>

<aside
  class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
      target="_blank">
      <span class="ms-1 font-weight-bold text-white">Admin Pannel</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "index.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="index.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "c-o-p.php" ? 'active bg-gradient-primary' : ''; ?> "
          href="c-o-p.php">
          <!-- kind of php file is atteched here-->
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">inventory</i>
          </div>
          <span class="nav-link-text ms-1">All Product</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "add-product.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="add-product.php"> <!-- kind of php file is atteched here-->
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">shopping_basket</i>
          </div>
          <span class="nav-link-text ms-1">Add Product</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "addadmin.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="addadmin.php"> <!-- kind of php file is atteched here-->
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">group_add</i>
          </div>
          <span class="nav-link-text ms-1">Add Admin</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "showuser.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="showuser.php"> <!-- kind of php file is atteched here-->
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">group</i>
          </div>
          <span class="nav-link-text ms-1">Users</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "showadmin.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="showadmin.php"> <!-- kind of php file is atteched here-->
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">portrait</i>
          </div>
          <span class="nav-link-text ms-1">Admins</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="../../projectv/assets/html/index.php" type="button">&lt;
        Back</a>
    </div>
  </div>
</aside>