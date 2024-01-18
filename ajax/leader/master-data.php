<?php
session_start();
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
include ('../../config/conn.php');

//fetch AC_NO
$q1 = "SELECT DISTINCT AC_NO from voters_data";
$r1 = mysqli_query($conn,$q1);
$AC_NO = [];
$output = new stdClass();
while($row1 = mysqli_fetch_assoc($r1)){
    $AC_NO[] = $row1;
}

//fetch PART_NO
$PART_NO = [];
if(isset($_POST) && $_POST['AC_NO']!=''){
    $q1 = "SELECT DISTINCT PART_NO from voters_data WHERE AC_NO='".$_POST['AC_NO']."'";
    $r1 = mysqli_query($conn,$q1);
    $output = new stdClass();
    while($row1 = mysqli_fetch_assoc($r1)){
        $PART_NO[] = $row1;
    }
}

//fetch SECTION_NO
$SECTION_NO = [];
if(isset($_POST) && $_POST['AC_NO']!='' && $_POST['PART_NO']!=''){
    $q1 = "SELECT DISTINCT SECTION_NO from voters_data WHERE AC_NO='".$_POST['AC_NO']."' AND PART_NO='".$_POST['PART_NO']."'";
    $r1 = mysqli_query($conn,$q1);
    $output = new stdClass();
    while($row1 = mysqli_fetch_assoc($r1)){
        $SECTION_NO[] = $row1;
    }
}

//fetch state
$q1 = "SELECT * from states";
$r1 = mysqli_query($conn,$q1);
$state = [];
$output = new stdClass();
while($row1 = mysqli_fetch_assoc($r1)){
    $state[] = $row1;
}

//fetch city
$city = [];
if(isset($_POST) && $_POST['state']!=''){
    $q1 = "SELECT * from cities WHERE state_id=".$_POST['state'];
    $r1 = mysqli_query($conn,$q1);
    $output = new stdClass();
    while($row1 = mysqli_fetch_assoc($r1)){
        $city[] = $row1;
    }
}

if(isset($_POST) && $_POST['action']!='' && $_POST['action']=='change_status'){
   $q1 = "SELECT * FROM user_tbl WHERE id=".$_POST['user_id'];
    $r1 = mysqli_query($conn,$q1);
    $row1 = mysqli_fetch_assoc($r1);
    $status= 0;
    if($row1['isActive']==0){
        $status=1;
    }
    $q1 = "UPDATE `user_tbl` SET `isActive`= $status  WHERE `id`=".$_POST['user_id'];
    $r1 = mysqli_query($conn,$q1);
    $output = new stdClass();
    $output->statusChanged = true;
    
}

$userData = new stdClass();
if(isset($_POST) && $_POST['action']!='' && $_POST['action']=='user_data'){
    $q1 = "SELECT * FROM user_tbl WHERE id=".$_POST['user_id'];
     $r1 = mysqli_query($conn,$q1);
     while($row1 = mysqli_fetch_assoc($r1)){
     $userData = $row1;
     }

     //PART_NO query
    $q1 = "SELECT DISTINCT PART_NO from voters_data WHERE AC_NO='".$userData['AC_NO']."'";
    $r1 = mysqli_query($conn,$q1);
    while($row1 = mysqli_fetch_assoc($r1)){
        $PART_NO[] = $row1;
    }

    //SECTION_NO query
    $q1 = "SELECT DISTINCT SECTION_NO from voters_data WHERE AC_NO='".$userData['AC_NO']."' AND PART_NO='".$userData['PART_NO']."'";
    $r1 = mysqli_query($conn,$q1);
    while($row1 = mysqli_fetch_assoc($r1)){
        $SECTION_NO[] = $row1;
    }

    //selected booth
    $q1 = "SELECT * FROM `user_assigned_booth` WHERE user_id=".$_POST['user_id'];
    $r1 = mysqli_query($conn,$q1);
    $boothRow = [];
    while($row1 = mysqli_fetch_assoc($r1)){
        $boothRow[] = $row1;
    }
    $userData['selectedBooth'] = $boothRow;

    //city query
    $q1 = "SELECT * from cities WHERE state_id=".$userData['state'];
    $r1 = mysqli_query($conn,$q1);
    $output = new stdClass();
    while($row1 = mysqli_fetch_assoc($r1)){
        $city[] = $row1;
    }

     $output = new stdClass();
     $output->userData = $userData;
     
 }


 if(isset($_POST) && $_POST['action']!='' && $_POST['action']=='delete_user'){
     //delete leader from user_tbl
    $q1 = "DELETE FROM user_tbl WHERE id=".$_POST['user_id'];
    $r1 = mysqli_query($conn,$q1);

     //delete sub from user_tbl
     $q1 = "DELETE FROM user_tbl WHERE leader_id=".$_POST['user_id'];
     $r1 = mysqli_query($conn,$q1);

     //delete from booth
     $q1 = "DELETE FROM user_assigned_booth WHERE user_id=".$_POST['user_id'];
     $r1 = mysqli_query($conn,$q1);

     $output->userDeleted = true;
     
 }

 $leader_list = [];
if(isset($_POST) && $_POST['action']!='' && $_POST['action']=='leader_list'){
    $q1 = "SELECT * FROM user_tbl WHERE user_type=1";
     $r1 = mysqli_query($conn,$q1);
     while($row1 = mysqli_fetch_assoc($r1)){
     $leader_list[] = $row1;
     }
}  

$dashboardData = new stdClass();
if(isset($_POST) && $_POST['action']!='' && $_POST['action']=='dashboard_data'){
    $uq = "SELECT * FROM user_tbl WHERE id=".$_SESSION['user_id'];
    $ur = mysqli_query($conn, $uq);  
    $urow = mysqli_fetch_array($ur);
    $AC_NO = $urow['AC_NO'];
    $PART_NO = $urow['PART_NO'];
    //total booth workers :
    $q1 = "SELECT * FROM user_tbl WHERE leader_id=".$_SESSION['user_id']." AND user_type!=0";
     $r1 = mysqli_query($conn,$q1);
     $dashboardData->totalBoothWorkers=mysqli_num_rows($r1);
    //total polling booth :
    $q1 = "SELECT DISTINCT SECTION_NO FROM `voters_data` WHERE leader_id=".$_SESSION['user_id'];
    $r1 = mysqli_query($conn,$q1);
    $dashboardData->totalPollingBooth=mysqli_num_rows($r1);
     //total male voters :
     $q1 = "SELECT * FROM `voters_data` WHERE leader_id=".$_SESSION['user_id']." AND GENDER='M'";
     $r1 = mysqli_query($conn,$q1);
     $dashboardData->totalMaleVoters=mysqli_num_rows($r1);
     //total female voters :
     $q1 = "SELECT * FROM `voters_data` WHERE leader_id=".$_SESSION['user_id']." AND GENDER='F'";
     $r1 = mysqli_query($conn,$q1);
     $dashboardData->totalFemaleVoters=mysqli_num_rows($r1);
}  




$output->AC_NO = $AC_NO;
$output->PART_NO = $PART_NO;
$output->SECTION_NO = $SECTION_NO;
$output->state = $state;
$output->city= $city;
$output->leader_list= $leader_list;
$output->dashboardData= $dashboardData;
echo json_encode($output);
?>