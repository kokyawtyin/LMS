<?php
	session_start();
	include("admin/confs/config.php");
	include("search.lib.php");

	# Paging
  $limit = 7;
  $start = 0;
  if(isset($_GET['start'])) {
    $start = $_GET['start'];
  }

  $next = $start + $limit; 
  $prev = $start - $limit;
	
	# Browse by Category
	if(isset($_GET['cat'])) {
	$cat_id = $_GET['cat'];
	mysqli_query($conn, "SET NAMES UTF8");
	$books = mysqli_query($conn, "SELECT gr.id, gr.title, gr.title, gr.cover, cat.name, aut.authorname FROM books as gr INNER JOIN categories as cat ON gr.category_id = cat.id INNER JOIN author as aut ON gr.authorid = aut.authorid WHERE gr.category_id = $cat_id");
	} else {
	mysqli_query($conn, "SET NAMES UTF8");
	$books = mysqli_query($conn, "SELECT gr.id, gr.title, gr.cover, cat.name, aut.authorname FROM books as gr INNER JOIN categories as cat ON gr.category_id = cat.id INNER JOIN author as aut ON gr.authorid = aut.authorid ORDER BY gr.id DESC LIMIT $start, $limit");
	}
	
	# Search Result
	if(isset($_GET['q'])) {
	$books = search_perform($_GET['q'], "books", "title");
	}
	mysqli_query($conn, "SET NAMES UTF8");
	$cats = mysqli_query($conn, "SELECT * FROM categories");
  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Library Managment System</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/main.css" />
		<script src="js/jquery-1.6.4.min.js"></script>
		<script src="js/custom.js"></script>		
	</head>