<?php
session_start();
unset($_SESSION);
$response = new stdClass();
$response->message = "success";
echo json_encode($response);
?>