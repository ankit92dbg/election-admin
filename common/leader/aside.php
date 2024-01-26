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
        <span class="ms-1 font-weight-bold">Booth Candidate</span>
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
          <a class="nav-link <?php echo ($endPart[0]=='subleaders' || $endPart[0]=='add-subleaders' || $endPart[0]=='edit-subleaders') ? 'active' : ''; ?>" href="subleaders.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Caders</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='voters') ? 'active' : ''; ?>" href="voters.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Voters</span>
          </a>
        </li> -->
        <li class="nav-item" onclick="showTab('#report_1','.tab-data','')">
          <a class="nav-link " href="voters.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i style="color:#67748e" class="fa fa-folder text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Report 1</span>
          </a>        
          <!-- <ul>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Search</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Alphabetical List</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Agewise List</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Family Report</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Family Head Report</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Double Name List</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Married Women Report</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Single Voter List</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Address Wise List</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Surname Report</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">Family Labels</span></li>
            <li class="nav-item sub-menu"><span class="nav-link-text ms-1">SMS</span></li>
          </ul> -->
          <ul class="nav nav-underline">
                        <li class="nav-item sub-menu" onclick="showTab('#searchVoter','.inner-tab-data','.searchTab');$('#action').val('searchTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Search</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#alpha','.inner-tab-data','.alphaTab');$('#action').val('alphaTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Alphabetical List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#agewise','.inner-tab-data','.agewiseTab');$('#action').val('agewiseTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Agewise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#family','.inner-tab-data','.familyTab');$('#action').val('familyTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Family Report</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#familyHead','.inner-tab-data','.familyHeadTab');$('#action').val('familyHeadTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Family Head Report</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#doubleName','.inner-tab-data','.doubleNameTab');$('#action').val('doubleNameTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Double Name List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#married','.inner-tab-data','.marriedTab');$('#action').val('marriedTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Married Women Report</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#single','.inner-tab-data','.singleTab');$('#action').val('singleTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Single Voter List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#address','.inner-tab-data','.addressTab');$('#action').val('addressTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Address Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#surname','.inner-tab-data','.surnameTab');$('#action').val('surnameTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Surname Report</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#familyLabels','.inner-tab-data','.familyLabelsTab');$('#action').val('familyLabelsTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Family Labels</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#sms','.inner-tab-data','.smsTab');$('#action').val('smsTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">SMS</a>
                        </li>
                      </ul>
        </li>
        <li class="nav-item" onclick="showTab('#report_2','.tab-data','.searchTab')">
          <a class="nav-link "  href="voters.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i style="color:#67748e" class="fa fa-folder text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Report 2</span>
          </a>       
          <ul class="nav nav-underline">
                        <li class="nav-item sub-menu" onclick="showTab('#caste','.inner-tab-data','.casteTab');$('#action').val('casteTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Caste Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#labelValue','.inner-tab-data','.labelValueTab');$('#action').val('labelValueTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Label Value Filter</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#areaWise','.inner-tab-data','.areaWiseTab');$('#action').val('areaWiseTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Area Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#partyWise','.inner-tab-data','.partyWiseTab');$('#action').val('partyWiseTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Party Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#deadList','.inner-tab-data','.deadListTab');$('#action').val('deadListTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Dead List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#birthday','.inner-tab-data','.birthdayTab');$('#action').val('birthdayTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Birthday List</a>
                        </li>
                      </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='upload-csv') ? 'active' : ''; ?>" href="upload-csv.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-upload text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Upload CSV</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link " href="voter-labels.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Label Value</span>
          </a>
        </li>
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