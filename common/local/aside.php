<?php
$url = $_SERVER['REQUEST_URI'];
$endPart = end(explode('/', rtrim($url, '/')));
$endPart = str_replace(' ', '', $endPart);
$endPart = explode('.',$endPart);
?>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Booth Admin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='dashboard') ? 'active' : ''; ?>" href="dashboard.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link dropdown-btn" href="javascript:void(0)">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Master <i class="fa fa-caret-down"></i></span>
          </a>
          <ul class="submenu" style="display:none">
            <li class="nav-item">
                <a class="nav-link " href="./pages/tables.html">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa fa-user-circle-o text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Leader</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="./pages/tables.html">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa fa-user-circle-o text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Subleader</span>
                </a>
                </li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='leaders' || $endPart[0]=='add-leaders' || $endPart[0]=='voters' || $endPart[0]=='edit-leaders'|| $endPart[0]=='subleaders'|| $endPart[0]=='edit-subleaders'|| $endPart[0]=='add-subleaders'|| $endPart[0]=='voter-labels'|| $endPart[0]=='add-voter-label'|| $endPart[0]=='edit-voter-labels') ? 'active' : ''; ?>" href="leaders.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-secret text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Candidate</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="leaders.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-secret text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Report 1</span>
          </a>
        
        <ul>
          <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Alphabetical List</span></li>
          <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Agewise List</span></li>
        </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="leaders.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-secret text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Report 2</span>
          </a>
        
        <ul>
          <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Caste Wise List</span></li>
          <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Married Women Report</span></li>
        </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link"  href="leaders.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-secret text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Reports</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='subleaders' || $endPart[0]=='add-subleaders' || $endPart[0]=='edit-subleaders') ? 'active' : ''; ?>" href="subleaders.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Cader</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='voters') ? 'active' : ''; ?>" href="voters.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Voters</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='upload-csv') ? 'active' : ''; ?>" href="upload-csv.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-upload text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Upload CSV</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link " href="./pages/rtl.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li> -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='profile') ? 'active' : ''; ?>" href="profile.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a onClick="logout()" class="nav-link " href="javascript:void(0)">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sign-out text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>