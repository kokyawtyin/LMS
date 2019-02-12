<?php	
	include("confs/config.php");  
	mysqli_query($conn, "SET NAMES UTF8");
	$bresult = mysqli_query($conn, "SELECT books.id, books.title, categories.name, author.authorname FROM books INNER JOIN author ON books.authorid = author.authorid LEFT JOIN categories ON books.category_id = categories.id");
	
	$row = array();
	while ($row = mysqli_fetch_array($bresult)){
		$rows[] = $row;
	}
	echo json_encode($rows);
?>