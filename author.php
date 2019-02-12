<?php include ("include/header.php"); ?>
    <body>
		<?php include ("include/nav.php"); ?>
		<div class="container-fluid">
			<div class="row">			
				<?php include ("include/left-side.php"); ?>			
				<div class="col-md-7 customr">
					<h1>Author</h1>
						
						<div align="center" class="footer-social3">
							<ul>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#A">က</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#B">ခ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#C">ဂ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#D">ဃ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#E">င</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#F">စ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#G">ဆ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#H">ဇ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#I">စ်</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#J">ည</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#K">ဋ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#L">ဌ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#M">ဍ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#N">ဏ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#O">တ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#P">ထ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#Q">ဒ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#R">ဓ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#S">န</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#T">ပ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#U">ဖ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#V">ဗ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#W">ဘ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#X">မ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#Y">ယ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#Z">ရ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#AB">လ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#AC">ဝ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#AD">သ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#AE">ဟ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#AF">ဠ</a></li>
								<li style="margin-bottom:10px; background-color:#FFFFFF;"><a href="#AG">အ</a></li>
							</ul>
						</div>						
						<h4 id="A">က</h4>
						<div class="list-group">
						  <?php 
						  mysqli_query($conn, "SET NAMES UTF8");
						  $auth = mysqli_query($conn, "SELECT * FROM author WHERE authorgroupId = '1'");
						  while($row = mysqli_fetch_assoc($auth)): 						  
						  ?>
							<a href="bookbyauthor.php?auth=<?php echo $row['authorid']; ?>" class="list-group-item"><?php echo $row['authorname'] ?></a>
							</li>
						  <?php endwhile; ?>
						</div>
				</div><!-- End col-md-2 customr-->			
				<?php include ("include/right-side.php"); ?>		
			</div>
<?php include ("include/footer.php"); ?>