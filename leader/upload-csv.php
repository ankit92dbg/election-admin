<?php
$breadCrumbName = "Upload CSV";
?>
<?php include('../common/leader/head.php'); ?>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php include('../common/leader/aside.php'); ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include('../common/leader/header.php'); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Upload file in CSV Format</h6>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-12">
                <div class="formbold-main-wrapper">
                    <div class="formbold-form-wrapper">
                        <form method="POST" id="uploadForm" enctype="multipart/form-data" method="POST">
                            <div class="mb-6 pt-4">
                                <label class="formbold-form-label formbold-form-label-2">
                                Upload File(.CSV)
                                </label>

                                <div class="formbold-mb-5 formbold-file-input">
                                    <input type="file" name="file" id="file" />
                                    <label for="file">
                                        <div>
                                        <!-- <span class="formbold-drop-file"> Drop files here </span>
                                        <span class="formbold-or"> Or </span> -->
                                        <span class="formbold-browse"> Browse </span>
                                        </div>
                                    </label>
                                </div>

                                <!-- <div class="formbold-file-list formbold-mb-5">
                                    <div class="formbold-file-item">
                                        <span class="formbold-file-name"> banner-design.png </span>
                                        <button>
                                        <svg
                                            width="10"
                                            height="10"
                                            viewBox="0 0 10 10"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z"
                                            fill="currentColor"
                                            />
                                            <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z"
                                            fill="currentColor"
                                            />
                                        </svg>
                                        </button>
                                    </div>
                                </div> -->

                                <!-- <div class="formbold-file-list formbold-mb-5">
                                    <div class="formbold-file-item">
                                        <span class="formbold-file-name"> banner-design.png </span>
                                        <button>
                                        <svg
                                            width="10"
                                            height="10"
                                            viewBox="0 0 10 10"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z"
                                            fill="currentColor"
                                            />
                                            <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z"
                                            fill="currentColor"
                                            />
                                        </svg>
                                        </button>
                                    </div>
                                    <div class="formbold-progress-bar">
                                        <div class="formbold-progress"></div>
                                    </div>
                                </div> -->

                                <div class="form-group" id="process" style="display:none;">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                            <span id="process_data">0</span> - <span id="total_data">0</span>
                                        </div>
                                    </div>    
                                </div>
                                <span id="message"></span>
                            </div>

                            <div>
                                <button type="submit" id="uploadBtn" class="formbold-btn w-full">Upload File</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <?php include('../common/leader/footer.php'); ?>
    </div>
  </main>
  </body>
<?php include('../common/leader/footer-links.php') ?>
<script>
 $(document).ready(function(){
    var clear_timer;
    $('#uploadForm').on('submit', function(event){
        $('#overlay').show()
        $('#uploadMsg').show()
        $('#message').html('');
        event.preventDefault();
        $.ajax({
            url:"../ajax/leader/upload-csv.php",
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
                $('#uploadMsg').hide()
                $('#uploadForm')[0].reset();
                if(data.success)
                {
                    $('#total_data').text(data.total_line);
                    $('#message').html('<div class="alert alert-success" style="color:#fff">CSV File Uploaded Successfully.</div>');
                }
                if(data.error)
                {
                    $('#message').html('<div class="alert alert-danger" style="color:#fff">'+data.error+'</div>');
                    $('#import').attr('disabled',false);
                    $('#import').val('Import');
                }
                setTimeout(() => {
                    $('#message').html('')
                }, 5000);
            }
        })
    });

});
</script>