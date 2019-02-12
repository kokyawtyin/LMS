<?php
  include("confs/config.php");

  $title = $_POST['title'];
  $author_id = $_POST['author_id'];
  $summary = $_POST['summary'];
  $category_id = $_POST['category_id'];

  $cover = $_FILES['cover']['name'];
  $tmp = $_FILES['cover']['tmp_name'];

  if($cover) {
    move_uploaded_file($tmp, "covers/$cover");
  }

  $sql = "INSERT INTO books (title, authorid, category_id, summary, cover, created_date, modified_date) 
	VALUES ('$title', '$author_id', '$category_id', '$summary', '$cover', now(), now())";

	mysqli_query($conn, "SET NAMES UTF8");
	mysqli_query($conn, $sql);

  header("location: booktable.php");
?>
