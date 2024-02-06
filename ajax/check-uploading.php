<?php
session_start();
include ('../config/conn.php');
$job_id = $_POST['job_id'];
$q = "select * from upload_progress where job_id='$job_id'";
$r = mysqli_query($conn,$q);
$row = mysqli_fetch_assoc($r);
$output = array(
    'success'  => true,
    'data' => $row
   );
echo json_encode($output);
?>