<?php include ("include/header.php"); ?>
    <body>
        <?php include ("include/nav.php"); ?>
		<div class="container-fluid">
			<div class="row">			
				<?php include ("include/left-side.php"); ?>			
				<div class="col-md-7 customr">
					<h1>Home</h1>
						<ul class="list">
						  <?php while($row = mysqli_fetch_assoc($books)): ?>
							<li>
							  <img src="admin/covers/<?php echo $row['cover'] ?>" alt="" align="right" height="140">
							  <b><?php echo $row['id'] ?>. <?php echo $row['title'] ?></b>
							  <i>by <?php echo $row['authorname'] ?></i>
							  <div><?php echo $row['name'] ?></div>
							</li>
						  <?php endwhile; ?>
						</ul>
						<div class="paging">
							<? if($prev < 0): ?>
							<span>&laquo; Previous</span>
							<? else: ?>
							<a href="?start=<?= $prev ?>">&laquo; Previous</a>
							<? endif; ?>

							<? if($next >= $total): ?>
							<span>Next &raquo;</span>
							<? else: ?>
							<a href="?start=<?= $next ?>">Next &raquo;</a>
							<? endif; ?>
						</div>
				</div><!-- End col-md-2 customr-->			
				<?php include ("include/right-side.php"); ?>			
							
			</div>
<?php include ("include/footer.php"); ?>