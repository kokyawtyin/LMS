<?php
  include("confs/config.php");

  $authorname = $_POST['authorname'];
  $authorgroup = $_POST['authorgroup'];

  $sql = "INSERT INTO author (authorname, authorgroup) VALUES ('$authorname', '$authorgroup')";

  
mysqli_query($conn, "SET NAMES UTF8");
  mysqli_query($conn, $sql);

  header("location: authortable.php");
?>
