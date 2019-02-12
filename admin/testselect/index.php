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
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery.js"></script>
</head>
<body>
	<p>
		<select name="authorgroup" id="authorgroup">
			<option value="">စာေရးဆရာအုပ္စုေရြးပါ</option>
			<?php echo load_author(); ?>
		</select>
	</p>
	<p>
		<select name="authorlist" id="authorlist">
			<option value="">စာေရးဆရာေရြးပါ</option>
		</select>
	</p>
</body>
</html>
	<script>
		$(document).ready(function(){
			$('#authorgroup').change(function(){
				var query = $(this).val();
				$.ajax({
						url:"searchauthor.php",
						method: "POST",
						data:{query:query},
						dataType: "text",
						success:function(data){
							$('#authorlist').html(data);
						}
					});
			});
		});		
	</script>