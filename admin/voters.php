<?php
$breadCrumbName = "Voter List";
?>
<?php include('../common/local/head.php'); ?>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php include('../common/local/aside.php'); ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include('../common/local/header.php'); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-lg-2 d-flex justify-content-between">
                    <h6 class="mb-2" style="margin-top:5%;">Voters</h6>
                </div>
                <div class="col-lg-4 d-flex justify-content-between">
                   <input type="text" onchange="load_data()" onkeyup="load_data()" onkeydown="load_data()" id="search_str" class="form-control" placeholder="Serarch by Name or Epic No." />
                </div>
                <div class="col-lg-2 justify-content-between">
                    <p style="float:right;margin-top:5%">Show Result :</p>
                </div>
                <div class="col-lg-2 d-flex justify-content-between">
                        <select id="total_records" onchange="load_data()" class="form-select">
                            <option value="50" selected>50</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                        </select>    
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
            
          </div>
        </div>
      </div>
      <?php include('../common/local/footer.php'); ?>
    </div>
  </main>
  </body>
<?php include('../common/local/footer-links.php') ?>
<script>
 $(document).ready(function(){  
      load_data();  
       
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 }); 
 function load_data(page)  
      {  
        $('#overlay').show()
        let total_records = $('#total_records').val()
        let search_str = $('#search_str').val()
           $.ajax({  
                url:"../ajax/voters.php",  
                method:"POST",  
                data:{page:page,total_records:total_records,search_str:search_str},  
                success:function(data){  
                    $('#dataTbl').html(data);  
                    $('#overlay').hide()
                }  
           })  
      } 
</script>