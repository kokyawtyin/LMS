<?php
	include ("include/header.php"); 
	?>
    <body>
		<?php include ("include/nav.php"); ?>
		<div class="container-fluid">
			<div class="row">			
				<?php 
					include ("include/left-side.php"); 
				?>			
				<div class="col-md-7 customr">
					<h1>Memeber Login</h1>
						<form action="memloginset.php" method="post">
							<div class="form-group">
								<label for="name" class=" form-control-label">နာမည္</label>
								<input type="text" id="name" name="name" placeholder="Enter name.." class="form-control">
								<span class="help-block">Please enter your name</span>
							</div>
							<div class="form-group">
								<label for="password" class=" form-control-label">စကား၀ွက္</label>
								<input type="password" id="password" name="password" placeholder="Enter Password.." class="form-control">
								<span class="help-block">Please enter your password</span>
							</div>
							<input type="submit" class="btn btn-primary btn-sm" value="Login" />						
					</form>
				</div><!-- End col-md-2 customr-->			
				<?php include ("include/right-side.php"); ?>			
							
			</div>
<?php include ("include/footer.php"); ?>