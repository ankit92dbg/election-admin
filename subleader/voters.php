<?php
$breadCrumbName = "Voter List";
?>
<?php include('../common/subleader/head.php'); ?>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php include('../common/subleader/aside.php'); ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include('../common/subleader/header.php'); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-between">
                    <h6 class="mb-2">Voter List</h6>
                </div>
                <div class="col-lg-12">
                  <ul class="nav nav-pills">
                    <li class="nav-item" onclick="showTab('#report_1','.tab-data','')">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Report 1</a>
                    </li>
                    <li class="nav-item" onclick="showTab('#report_2','.tab-data','.searchTab')">
                      <a class="nav-link" href="javascript:void(0);">Report 2</a>
                    </li>
                  </ul>
                  <div class="tab-content" style="margin-top:2%;">
                    <input type="hidden" id="action" value="" />
                    <div id="report_1" class="tab-data">
                      <ul class="nav nav-underline">
                        <li class="nav-item" onclick="showTab('#searchVoter','.inner-tab-data','.searchTab');$('#action').val('searchTab');load_data()">
                          <a class="nav-link active" aria-current="page" href="javascript:void(0);">Search</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#alpha','.inner-tab-data','.alphaTab');$('#action').val('alphaTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Alphabetical List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#agewise','.inner-tab-data','.agewiseTab');$('#action').val('agewiseTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Agewise List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#family','.inner-tab-data','.familyTab');$('#action').val('familyTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Family Report</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#familyHead','.inner-tab-data','.familyHeadTab');$('#action').val('familyHeadTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Family Head Report</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#doubleName','.inner-tab-data','.doubleNameTab');$('#action').val('doubleNameTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Double Name List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#married','.inner-tab-data','.marriedTab');$('#action').val('marriedTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Married Women Report</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#single','.inner-tab-data','.singleTab');$('#action').val('singleTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Single Voter List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#address','.inner-tab-data','.addressTab');$('#action').val('addressTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Address Wise List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#surname','.inner-tab-data','.surnameTab');$('#action').val('surnameTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Surname Report</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#familyLabels','.inner-tab-data','.familyLabelsTab');$('#action').val('familyLabelsTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Family Labels</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#sms','.inner-tab-data','.smsTab');$('#action').val('smsTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">SMS</a>
                        </li>
                      </ul>
                      <div id="searchVoter" class="inner-tab-data" style="display:block;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Search List</h5>
                        <div class="row">
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="text" id="PART_NO_FROM" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="text" id="PART_NO_TO" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">SrNo </label>
                                  <input type="text" id="SECTION_NO" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">HNo </label>
                                  <input type="text" id="C_HOUSE_NO" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Surname </label>
                                  <input type="text" id="LASTNAME_EN" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Name </label>
                                  <input type="text" id="FM_NAME_EN" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Relative </label>
                                  <input type="text" id="RLN_FM_NM_EN" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">EPIC ID </label>
                                  <input type="text" id="EPIC_NO" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Mobile </label>
                                  <input type="text" id="MOBILE_NO" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Full Name </label>
                                  <input type="text" id="fullName" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Address </label>
                                  <input type="text" id="SECTION_NAME_EN" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Filter </label>
                                  <select id="filter_searchTab" class="form-select searchTab">
                                      <option value="" selected>No Filter</option>
                                      <option value="MOBILE_NO">Mobile No</option>
                                      <option value="aadhar">Aadhar</option>
                                      <option value="caste">Caste</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('searchTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="alpha" class="inner-tab-data" style="display:none">
                        <h5>Alphabetical List</h5>
                        <div class="row">
                          <div class="col-2"></div>
                          <div class="col-6">
                              <div class="mb-3">
                                  <label class="label">Enter Part No. here...(Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_COMMA" class="form-control alphaTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('alphaTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>  
                      </div>
                      <div id="agewise" class="inner-tab-data" style="display:none">
                        <h5>Agewise List</h5>
                        <div class="row">
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="text" id="PART_NO_AGE_FROM" class="form-control agewiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="text" id="PART_NO_AGE_TO" class="form-control agewiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Age From</label>
                                  <input type="number" id="AGE_FROM" class="form-control agewiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Age To</label>
                                  <input type="number" id="AGE_TO" class="form-control agewiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">GENDER</label>
                                  <select id="GENDER_AGE" class="form-select agewiseTab">
                                      <option value="" selected>Select</option>
                                      <option value="M">Male</option>
                                      <option value="F">Female</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">SORT</label>
                                  <select id="SORT_AGE" class="form-select agewiseTab">
                                      <option value="" selected>Select</option>
                                      <option value="Alphabetical">Alphabetical</option>
                                      <option value="Normal">Normal</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('agewiseTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="family" class="inner-tab-data" style="display:none">
                        <h5>Family Report</h5>
                        <div class="row">
                          <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Part No. (Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_FAMILY_FROM" class="form-control familyTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size From</label>
                                  <input type="number" id="FAMILY_SIZE_FROM" class="form-control familyTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size To</label>
                                  <input type="number" id="FAMILY_SIZE_TO" class="form-control familyTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Surname</label>
                                  <input type="text" id="SURNAME_FAMILY" class="form-control familyTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('familyTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="familyHead" class="inner-tab-data" style="display:none">
                        <h5>Family Head Report</h5>
                        <div class="row">
                          <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Part No. (Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_FAMILY_HEAD" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size From</label>
                                  <input type="number" id="FAMILY_HEAD_SIZE_FROM" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size To</label>
                                  <input type="number" id="FAMILY_HEAD_SIZE_TO" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Age From</label>
                                  <input type="number" id="FAMILY_HEAD_AGE_FROM" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Age To</label>
                                  <input type="number" id="FAMILY_HEAD_AGE_TO" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Head Gender</label>
                                  <select id="FAMILY_HEAD_GENDER" class="form-select familyHeadTab">
                                      <option value="" selected>Select</option>
                                      <option value="M">Male</option>
                                      <option value="F">Female</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Select Caste</label>
                                  <select id="FAMILY_HEAD_CASTE" class="form-select familyHeadTab">
                                      <option value="" selected>Select</option>
                                      <option value="0">Hindu</option>
                                      <option value="1">Muslim</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('familyHeadTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="doubleName" class="inner-tab-data" style="display:none">
                        <h5>Double Voter List</h5>
                        <div class="row">
                          <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Part No. (Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_DOUBLE" class="form-control doubleNameTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('doubleNameTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                         </div>  
                      </div>
                      <div id="married" class="inner-tab-data" style="display:none">
                        <h5>Married Women List</h5>
                        <div class="row">
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Considering Marriage Age</label>
                                  <input type="number" id="AGE_MARRIED" class="form-control marriedTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_MARRIED_FROM" class="form-control marriedTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_MARRIED_TO" class="form-control marriedTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">SORT</label>
                                  <select id="SORT_MARRIED" class="form-select marriedTab">
                                      <option value="" selected>Select</option>
                                      <option value="Alphabetical">Alphabetical</option>
                                      <option value="Normal">Normal</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('marriedTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="single" class="inner-tab-data" style="display:none">
                        <h5>Single Voter List</h5>
                        <div class="row">
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Age From</label>
                                  <input type="number" id="AGE_SINGLE_FROM" class="form-control singleTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Age To</label>
                                  <input type="number" id="AGE_SINGLE_TO" class="form-control singleTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_SINGLE_FROM" class="form-control singleTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_SINGLE_TO" class="form-control singleTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Gender</label>
                                  <select id="SORT_GENDER_SINGLE" class="form-select singleTab">
                                      <option value="" selected>Select</option>
                                      <option value="M">Male</option>
                                      <option value="F">Female</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('singleTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="address" class="inner-tab-data" style="display:none">
                        <h5>Addresswise List</h5>
                        <div class="row">
                          <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Part No. (Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_ADDRESS" class="form-control addressTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Search</label>
                                  <input type="text" id="SEARCH_ADDRESS" class="form-control addressTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('addressTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="surname" class="inner-tab-data" style="display:none">
                        <h5>Surname List</h5>
                        <div class="row">
                          <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Part No. (Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_SURNAME" class="form-control surnameTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Search</label>
                                  <input type="text" id="SEARCH_SURNAME" class="form-control surnameTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('surnameTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="familyLabels" class="inner-tab-data" style="display:none">
                        <h5>Family Labels</h5>
                        <div class="row">
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="text" id="PART_NO_FROM_LABEL" class="form-control familyLabelsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="text" id="PART_NO_TO_LABEL" class="form-control familyLabelsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size From</label>
                                  <input type="number" id="FAMILY_SIZE_FROM_LABEL" class="form-control familyLabelsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size To</label>
                                  <input type="number" id="FAMILY_SIZE_TO_LABEL" class="form-control familyLabelsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('familyLabelsTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="sms" class="inner-tab-data" style="display:none">
                        <h5>Family Labels</h5>
                        <div class="row">
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Name</label>
                                  <input type="text" id="NAME_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Surname</label>
                                  <input type="text" id="SURNAME_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Relative</label>
                                  <input type="text" id="RELATIVE_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('smsTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#exampleModal').modal('show'); " style="margin-top: 20%;" id="loginBtn" class="btn btn-primary"><i class="fa fa-send"></i> SMS</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                   
                  </div>
                </div> 
              </div>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-12">
                    <div class="table-responsive" id="dataTbl"></div>
                </div>
              </div>
            </div>

           <!-- Modal -->
           <div class="modal fade" style="z-index:9999" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">SMS PANEL</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" id="message_user_id" value="" />
                    <div class="row">
                      <div class="col-12">
                          <div class="mb-3">
                              <label class="label">Message Body</label>
                              <textarea style="height: 200px;" name="message_box" id="message_box" class="form-control form-control-lg" required></textarea>    
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-success">SEND</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal-->
            
          </div>
        </div>
      </div>
      <?php include('../common/subleader/footer.php'); ?>
    </div>
  </main>
  </body>
<?php include('../common/subleader/footer-links.php') ?>
<script>
 $(document).ready(function(){  
      load_data();  
       
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
      $(document).on('click', '.dp-menu', function(event) {
        $(this).next('.drop-menu').toggle();
        event.stopPropagation();
      }); 
 }); 
 function load_data(page)  
      {  
        if(page!=''){
          $('#overlay').show()
          // let total_records = $('#total_records').val()
          let search_str = $('#search_str').val()
            $.ajax({  
                  url:"../api/voter-list.php",  
                  method:"POST",  
                  data:{
                    page:page,
                    total_records:50,
                    search_str:search_str,
                    user_id:"<?php echo $_SESSION['leader_id']; ?>",
                    PART_NO_FROM: $('#PART_NO_FROM').val(),
                    PART_NO_TO: $('#PART_NO_TO').val(),
                    SECTION_NO: $('#SECTION_NO').val(),
                    C_HOUSE_NO: $('#C_HOUSE_NO').val(),
                    LASTNAME_EN: $('#LASTNAME_EN').val(),
                    FM_NAME_EN: $('#FM_NAME_EN').val(),
                    RLN_FM_NM_EN: $('#RLN_FM_NM_EN').val(),
                    EPIC_NO: $('#EPIC_NO').val(),
                    MOBILE_NO: $('#MOBILE_NO').val(),
                    fullName: $('#fullName').val(),
                    SECTION_NAME_EN: $('#SECTION_NAME_EN').val(),
                    filter_searchTab: $('#filter_searchTab').val(),
                    PART_NO_AGE_FROM: $('#PART_NO_AGE_FROM').val(),
                    PART_NO_AGE_TO: $('#PART_NO_AGE_TO').val(),
                    AGE_FROM: $('#AGE_FROM').val(),
                    AGE_TO: $('#AGE_TO').val(),
                    GENDER_AGE: $('#GENDER_AGE').val(),
                    SORT_AGE: $('#SORT_AGE').val(),         
                    PART_NO_FAMILY_FROM: $('#PART_NO_FAMILY_FROM').val(),         
                    FAMILY_SIZE_FROM: $('#FAMILY_SIZE_FROM').val(),         
                    FAMILY_SIZE_TO: $('#FAMILY_SIZE_TO').val(),         
                    SURNAME_FAMILY: $('#SURNAME_FAMILY').val(),         
                    PART_NO_FAMILY_HEAD: $('#PART_NO_FAMILY_HEAD').val(),         
                    FAMILY_HEAD_SIZE_FROM: $('#FAMILY_HEAD_SIZE_FROM').val(),         
                    FAMILY_HEAD_SIZE_TO: $('#FAMILY_HEAD_SIZE_TO').val(),         
                    FAMILY_HEAD_AGE_FROM: $('#FAMILY_HEAD_AGE_FROM').val(),         
                    FAMILY_HEAD_AGE_TO: $('#FAMILY_HEAD_AGE_TO').val(),         
                    FAMILY_HEAD_GENDER: $('#FAMILY_HEAD_GENDER').val(),         
                    FAMILY_HEAD_CASTE: $('#FAMILY_HEAD_CASTE').val(),         
                    PART_NO_DOUBLE: $('#PART_NO_DOUBLE').val(),         
                    AGE_MARRIED: $('#AGE_MARRIED').val(),         
                    PART_NO_MARRIED_FROM: $('#PART_NO_MARRIED_FROM').val(),         
                    PART_NO_MARRIED_TO: $('#PART_NO_MARRIED_TO').val(),         
                    SORT_MARRIED: $('#SORT_MARRIED').val(),         
                    AGE_SINGLE_FROM: $('#AGE_SINGLE_FROM').val(),         
                    AGE_SINGLE_TO: $('#AGE_SINGLE_TO').val(),         
                    PART_NO_SINGLE_FROM: $('#PART_NO_SINGLE_FROM').val(),         
                    PART_NO_SINGLE_TO: $('#PART_NO_SINGLE_TO').val(),         
                    SORT_GENDER_SINGLE: $('#SORT_GENDER_SINGLE').val(),         
                    PART_NO_ADDRESS: $('#PART_NO_ADDRESS').val(),         
                    SEARCH_ADDRESS: $('#SEARCH_ADDRESS').val(),         
                    PART_NO_SURNAME: $('#PART_NO_SURNAME').val(),         
                    SEARCH_SURNAME: $('#SEARCH_SURNAME').val(),         
                    PART_NO_FROM_LABEL: $('#PART_NO_FROM_LABEL').val(),         
                    PART_NO_TO_LABEL: $('#PART_NO_TO_LABEL').val(),         
                    FAMILY_SIZE_FROM_LABEL: $('#FAMILY_SIZE_FROM_LABEL').val(),         
                    FAMILY_SIZE_TO_LABEL: $('#FAMILY_SIZE_TO_LABEL').val(),         
                    PART_NO_FROM_SMS: $('#PART_NO_FROM_SMS').val(),         
                    PART_NO_TO_SMS: $('#PART_NO_TO_SMS').val(),         
                    NAME_SMS: $('#NAME_SMS').val(),         
                    SURNAME_SMS: $('#SURNAME_SMS').val(),         
                    RELATIVE_SMS: $('#RELATIVE_SMS').val(),         
                    action: $('#action').val()
                  },  
                  success:function(data){  
                      $('#dataTbl').html(data);  
                      $('#overlay').hide()
                  }  
            })  
        }
       
      }


      function delUser(){
        $('#overlay').show()
        $('#exampleModal').modal('hide');          
        $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{user_id:$('#delete_id').val(),action:"delete_user"},  
                success:function(data){  
                    load_data()
                }  
           }) 
      }

      function showTab(id,className,tabClass){
        let tab = ['.searchTab','.alphaTab','.agewiseTab','.familyTab',
        '.familyHeadTab','.doubleNameTab','.marriedTab','.singleTab',
        '.addressTab','.surnameTab','.familyLabelsTab','.smsTab']
        const index = tab.indexOf(tabClass);
        if (index > -1) { // only splice array when item is found
          tab.splice(index, 1); // 2nd parameter means remove one item only
        }
        for(let i=0;i<tab.length;i++){
          $(tab[i]).val('')
        }
        $('#action').val('')
        if(tabClass=='.doubleNameTab'){
          $('#action').val('doubleNameTab')
        }
        $(className).hide()
        $(id).show()
      }
</script>