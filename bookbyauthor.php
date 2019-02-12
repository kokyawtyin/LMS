<?php 
	include ("include/header.php"); 
	if(isset($_GET['auth'])) {
	$auth_id = $_GET['auth'];
	mysqli_query($conn, "SET NAMES UTF8");
	$autbook = mysqli_query($conn, "SELECT gr.id, gr.title, gr.title, gr.cover, cat.name, aut.authorname FROM books as gr INNER JOIN categories as cat ON gr.category_id = cat.id INNER JOIN author as aut ON gr.authorid = aut.authorid WHERE gr.authorid = $auth_id");	
	}
?>
    <body>
		<?php include ("include/nav.php"); ?>
		<div class="container-fluid">
			<div class="row">			
				<?php include ("include/left-side.php"); ?>			
				<div class="col-md-7 customr">
					<h1>Home</h1>
						<ul class="list">
						  <?php while($row = mysqli_fetch_assoc($autbook)): ?>
							<li>
							  <img src="admin/covers/<?php echo $row['cover'] ?>" alt="" align="right" height="140">
							  <b><?php echo $row['id'] ?>. <?php echo $row['title'] ?></b>
							  <i>by <?php echo $row['authorname'] ?></i>
							  <div><?php echo $row['name'] ?></div>
							</li>
						  <?php endwhile; ?>
						</ul>
				</div><!-- End col-md-2 customr-->			
				<?php include ("include/right-side.php"); ?>			
							
			</div>
<?php include ("include/footer.php"); ?>