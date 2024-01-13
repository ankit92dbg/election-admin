<?php
$breadCrumbName = "Add SubLeaders";
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
                <div class="col-lg-3 d-flex justify-content-between">
                    <h6 class="mb-2" style="margin-top:5%;">Create New SubLeader</h6>
                </div>   
              </div>
            </div>
            <div class="card-body p-3">
              <form  id="userForm" enctype="multipart/form-data" role="form" method="post">
                <div class="row">
                    <div class="col-12">
                        <span id="message"></span>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Select Leader</label>
                            <select id="leader_id" name="leader_id" class="form-select" required>
                                <option value="" selected>Please Select</option>
                            </select>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">First Name</label>
                            <input type="text" name="f_name" class="form-control form-control-lg" placeholder="First Name" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Last Name</label>
                            <input type="text" name="l_name" class="form-control form-control-lg" placeholder="Last Name" aria-label="Password" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Password" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Phone No.</label>
                            <input type="number" name="phone" class="form-control form-control-lg" placeholder="Phone Number" aria-label="Password" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Age</label>
                            <input type="number" name="age" class="form-control form-control-lg" placeholder="Age" aria-label="Password" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Desgination</label>
                            <input type="text" name="designation" class="form-control form-control-lg" placeholder="Desgination" aria-label="Password" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">State</label>
                            <select id="state" onchange="load_city(this.value)" name="state" class="form-select" required>
                                <option value="" selected>Please Select</option>
                            </select>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">City</label>
                            <select id="city" name="city" class="form-select" required>
                                <option value="" selected>Please Select</option>
                            </select>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Address</label>
                            <textarea name="address" class="form-control form-control-lg" required></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Profile Image</label>
                            <input type="file" name="profile_image" class="form-control form-control-lg" placeholder="" aria-label="Password">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" id="loginBtn" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Submit</button>
                    </div>
                    <div class="col-4">
                        <a href="subleaders.php" class="btn btn-lg btn-secondary btn-lg w-100 mt-4 mb-0">Back</a>
                    </div>
                </div>
              </form>
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
      $('#userForm').on('submit', function(event){
            $('#overlay').show()
            $('#message').html('');
            event.preventDefault();
            $.ajax({
                url:"../ajax/add-subleaders.php",
                method:"POST",
                data: new FormData(this),
                dataType:"json",
                contentType:false,
                cache:false,
                processData:false,
                beforeSend:function(){
                    $('#import').attr('disabled','disabled');
                    $('#import').val('Importing');
                },
                success:function(data)
                {
                    $('#overlay').hide()
                    if(data.error==''){
                        $('#userForm')[0].reset();
                    }
                    if(!data.error)
                    {
                        $('#total_data').text(data.total_line);
                        $('#message').html('<div class="alert alert-success" style="color:#fff">SubLeader Created Successfully.</div>');
                    }
                    if(data.error)
                    {
                        $('#message').html('<div class="alert alert-danger" style="color:#fff">'+data.error+'</div>');
                    }
                    setTimeout(() => {
                        $('#message').html('')
                    }, 5000);
                }
            })
        });
 }); 
 function load_data(page)  
      {  
        $('#overlay').show()
           $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{action:'leader_list'},  
                success:function(data){  
                    let option = [];
                    let optionState = [];
                    optionState += '<option value="" selected>Please Select</option>'
                    option += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.leader_list.length; i++){
                        option += `<option value="${data.leader_list[i].id}">${data.leader_list[i].f_name} ${data.leader_list[i].l_name}</option>`
                    }
                    for(let j=0; i < data.state.length; i++){
                        optionState += `<option value="${data.state[i].id}">${data.state[i].name}</option>`
                    }
                    $('#leader_id').html(option)
                    $('#state').html(optionState)
                    $('#overlay').hide()
                }  
           })  
      } 


      function load_city(val)  
      {  
        $('#overlay').show()
           $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{state:val},   
                success:function(data){  
                    let option = [];
                    option += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.city.length; i++){
                        option += `<option value="${data.city[i].id}">${data.city[i].city}</option>`
                    }
                    $('#city').html(option)
                    $('#overlay').hide()
                }  
           })  
      } 
      
</script>