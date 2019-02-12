<?php
		function load_author()
		{
			$connect = mysqli_connect("localhost", "root", "", "store");
			$output = ' ';
			$sql = "SELECT * FROM authorgroup";
			mysqli_query($connect, "SET NAMES UTF8");
			$result = mysqli_query($connect, $sql);
			while($row = mysqli_fetch_array($result))
			{
				$output .= '<option value="' .$row["authorgroupId"]. '">' .$row["authorgroup"]. '</option>';
			}
			return $output;
		}
?>