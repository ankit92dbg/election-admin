<?php
session_start();
include ('../config/conn.php');
$email = $_POST['email'];
$password = md5($_POST['password']);
$query = "select * from user_tbl where email='$email' and password='$password'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$response = new stdClass();
if($row){
    if($row['isActive']==0){
        $response->message = "Your account is deactive, please contact your admin. Thanks!!";
    }else{
        $_SESSION['f_name'] = $row['f_name'];
        $_SESSION['l_name'] = $row['l_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_type'] = $row['user_type'];
        if($row['user_type']==0){
            $_SESSION['title'] = "Admin Panel";
        } else if($row['user_type']==1){
            $_SESSION['title'] = "Leader Panel";
        } else {
            $_SESSION['title'] = "Sub Leader Panel";
        }
        $response->message = "success";
        $response->user_type = $row['user_type'];
    }
}else{
    $response->message = "Invalid email or password!";
}
echo json_encode($response);
?>