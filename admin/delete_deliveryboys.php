<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM delivery WHERE d_id = '".$_GET['d_del']."'");
header("location:alldeliverboys.php");  

?>