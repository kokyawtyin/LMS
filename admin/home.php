<?php 
	include ("inc/header.php"); 
	include("confs/auth.php");
	include("confs/config.php");
	include ("inc/leftpanel.php");
	?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
		<?php include ("inc/rightpanelheader.php");  ?>

			<!-- Header-->
			<div class="breadcrumbs">
				<div class="col-sm-4">
					<div class="page-header float-left">
						<div class="page-title">
							<h1>Dashboard</h1>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="page-header float-right">
						<div class="page-title">
							<ol class="breadcrumb text-right">
								<li class="active">Home</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		<?php
			$bresult = mysqli_query($conn, "SELECT * FROM books ORDER BY id DESC"); // bresult is books result
			$book = mysqli_fetch_assoc($bresult);
			$aresult = mysqli_query($conn, "SELECT * FROM author ORDER BY authorid DESC"); //aresult is authors result
			$aut = mysqli_fetch_assoc($aresult);
			$cresult = mysqli_query($conn, "SELECT * FROM categories ORDER BY id DESC"); //cresult is categories result
			$cate= mysqli_fetch_assoc($cresult);			
			$mresult = mysqli_query($conn, "SELECT * FROM member ORDER BY mebid DESC"); //mresult is members result
			$member= mysqli_fetch_assoc($mresult);
		?>
		<div class="content mt-3">
			<div class="col-sm-6 col-lg-3">
				<div class="card text-white bg-flat-color-1">
					<div class="card-body pb-0">
						<div class="dropdown float-right">
							<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
								<i class="fa fa-cog"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<div class="dropdown-menu-content">
									<a class="dropdown-item" href="#">စာအုပ္အသစ္ထည့္ရန္</a>
									<a class="dropdown-item" href="#">စာအုပ္မ်ားကိုျပင္ရန္</a>
									<a class="dropdown-item" href="#">စာအုပ္အားလံုးၾကည့္ရန္</a>
								</div>
							</div>						
						</div>
						<h4 class="mb-0"><span class="count"><?php echo $book['id'];  ?></span></h4>
						<p class="text-light">စာအုပ္စုစုေပါင္း</p>
						<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
							<canvas id="widgetChart1"></canvas>
						</div>
					</div>
				</div>
			</div><!-- /col-sm-6 col-lg-3-->

			<div class="col-sm-6 col-lg-3">
				<div class="card text-white bg-flat-color-2">
					<div class="card-body pb-0">
						<div class="dropdown float-right">
							<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
								<i class="fa fa-cog"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<div class="dropdown-menu-content">
									<a class="dropdown-item" href="#">စာေရးဆရာအသစ္ထည့္ရန္</a>
									<a class="dropdown-item" href="#">စာေရးဆရာမ်ားကိုျပင္ရန္</a>
									<a class="dropdown-item" href="#">စာေရးဆရာအားလံုးၾကည့္ရန္</a>
								</div>
							</div>						
						</div>
						<h4 class="mb-0"><span class="count"><?php echo $aut['authorid'];  ?></span></h4>
						<p class="text-light">စာေရးဆရာစုစုေပါင္း</p>
						<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
							<canvas id="widgetChart2"></canvas>
						</div>
					</div>
				</div>
			</div><!-- /col-sm-6 col-lg-3-->

			<div class="col-sm-6 col-lg-3">
				<div class="card text-white bg-flat-color-3">
					<div class="card-body pb-0">
						<div class="dropdown float-right">
							<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
								<i class="fa fa-cog"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<div class="dropdown-menu-content">
									<a class="dropdown-item" href="#">စာအုပ္အုပ္စု အသစ္ထည့္ရန္</a>
									<a class="dropdown-item" href="#">စာအုပ္အုပ္စု မ်ားကိုျပင္ရန္</a>
									<a class="dropdown-item" href="#">စာအုပ္အုပ္စု အားလံုးၾကည့္ရန္</a>
								</div>
							</div>						
						</div>
						<h4 class="mb-0"><span class="count"><?php echo $cate['id'];  ?></span></h4>
						<p class="text-light">စာအုပ္အုပ္စု စုစုေပါင္း</p>
						<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
							<canvas id="widgetChart2"></canvas>
						</div>
					</div>
				</div>
			</div><!-- /col-sm-6 col-lg-3-->

			<div class="col-sm-6 col-lg-3">
				<div class="card text-white bg-flat-color-2">
					<div class="card-body pb-0">
						<div class="dropdown float-right">
							<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
								<i class="fa fa-cog"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<div class="dropdown-menu-content">
									<a class="dropdown-item" href="#">အဖဲြ႕၀င္ အသစ္ထည့္ရန္</a>
									<a class="dropdown-item" href="#">အဖဲြ႕၀င္ မ်ားကိုျပင္ရန္</a>
									<a class="dropdown-item" href="#">အဖဲြ႕၀င္ အားလံုးၾကည့္ရန္</a>
								</div>
							</div>						
						</div>
						<h4 class="mb-0"><span class="count"><?php echo $member['mebid'];  ?></span></h4>
						<p class="text-light">အဖဲြ႕၀င္ စုစုေပါင္း</p>
						<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
							<canvas id="widgetChart2"></canvas>
						</div>
					</div>
				</div>
			</div><!-- /col-sm-6 col-lg-3-->
			
			<p></p>
		
			
			<div class="col-lg-3 col-md-6">
				<div class="social-box facebook">
					<i class="fa fa-facebook"></i>
					<ul>
						<li>
							<sctrong><span class="count">40</span> k</strong>
							<span>friends</span>
						</li>
						<li>
							<sctrong><span class="count">450</span></strong>
							<span>feeds</span>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="social-box twitter">
					<i class="fa fa-twitter"></i>
					<ul>
						<li>
							<sctrong><span class="count">30</span> k</strong>
							<span>friends</span>
						</li>
						<li>
							<sctrong><span class="count">450</span></strong>
							<span>tweets</span>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="social-box linkedin">
					<i class="fa fa-linkedin"></i>
					<ul>
						<li>
							<sctrong><span class="count">40</span> +</strong>
							<span>contacts</span>
						</li>
						<li>
							<sctrong><span class="count">250</span></strong>
							<span>feeds</span>
						</li>
					</ul>
				</div>
			</div>


			<div class="col-lg-3 col-md-6">
				<div class="social-box google-plus">
					<i class="fa fa-google-plus"></i>
					<ul>
						<li>
							<sctrong><span class="count">94</span> k</strong>
							<span>followers</span>
						</li>
						<li>
							<sctrong><span class="count">92</span></strong>
							<span>circles</span>
						</li>
					</ul>
				</div>
			</div>
		</div> <!-- .content -->
	</div><!-- /#right-panel -->
<?php include("inc/footer.php"); ?>