<?php
  session_start();
	include("admin/confs/config.php");
  $name = $_POST['name'];
  $password = $_POST['password'];
  mysqli_query($conn, "SET NAMES UTF8");
$member = mysqli_query($conn, "SELECT * FROM member WHERE member_id= '$name' AND mempass = '$password'");
$row = mysqli_fetch_assoc($member);
$id = $row['mebid'];
  $mid = $row['member_id'];
  $mpass = $row['mempass'];

  if($mid and $mpass) {
    $_SESSION['auth'] = true;
    header("location: memabout.php?id=$id");	
  } else {
    header("location: memlogin.php");
  }
?>