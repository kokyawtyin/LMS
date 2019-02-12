<?php
	include ("include/auth.php"); 
	include ("include/header.php"); 
	?>
    <body>
		<div id="hd">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				<div class="navbar-header">
				<a class="navbar-brand" href="index.php">
				<img src="images/logof.png" alt="Thanlyin Development Association" title="Thanlyin Development Association"/>
				</a>
				<h1>Thanlyin Development Association Library System</h1>
				</div>
				</div>
			</nav>
		</div>
		<header class="clearFix">
			<div class="wrap"> 
					<nav>
						<div id="nav"> <strong>Menu</strong>
							<ul>
								<li class="active"><a href="index.php">ပင္မစာမ်က္ႏွာ</a></li>
								<li> <a href="author.php">စာေရးဆရာ</a> </li>
								<li class="parent"><a href="#">မိမိ</a>
									<ul>
										<li> <a href="memabout.php">မိမိအေၾကာင္းႏွင့္ငွားခဲ့ဖူးေသာစာအုပ္စာရင္း</a> </li>
										<li> <a href="memlist.php">အဖဲြ႕၀င္မ်ားၾကည့္ရန္</a> </li>
									</ul>
								</li>													
								<li> <a href="event.php">လႈပ္ရွားမႈမွတ္တမ္း</a> </li>															
								<li> <a href="contact.php">ဆက္သြယ္ရန္</a> </li>															
								<li> <a href="logout.php">အေကာင့္မွထြက္ရန္</a> </li>
							</ul>
						</div>
					</nav>
			</div>
		</header>
			<p>&nbsp;</p>
		
		<div class="container-fluid">
			<div class="row">			
				<?php 
					include ("include/left-side.php"); 
					mysqli_query($conn, "SET NAMES UTF8");
					$member = mysqli_query($conn, "SELECT * FROM member LIMIT $start, $limit");
				?>			
				<div class="col-md-7 customr">
					<h1>Home</h1>
						<ul class="list">
						  <?php while($row = mysqli_fetch_assoc($member)): ?>
							<li>
							  <img src="admin2/covers/memberphoto/<?php echo $row['photo']; ?>" alt="" align="right" height="140">
							  <b><?php echo $row['member_id'] ?></b>
							  <b><?php echo $row['mebename'] ?></b>
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