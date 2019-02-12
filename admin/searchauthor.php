<?php
	$conn = mysqli_connect("localhost", "root", "", "store");
		$output = ' ';
		//$authorgId = $_POST["query"];
		$query = "SELECT * FROM author WHERE authorgroupid = ' ".$_POST["query"]." ' ORDER BY authorid ";
		mysqli_query($conn, "SET NAMES UTF8");
		$result = mysqli_query($conn, $query);
		$output = '<option value="">ေရြးပါ</option>';
			
				while($row = mysqli_fetch_array($result)){
					$output .= '<option value="'.$row['authorid'].'">'.$row['authorname'].'</option>';
				}
			
		echo $output;
?>