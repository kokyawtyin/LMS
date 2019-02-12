<?php 
	include ("inc/header.php");
	?>

	<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            
        </nav>
    </aside><!-- /#left-panel -->
	
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
			<!-- Header-->
			<div class="breadcrumbs">
				<div class="col-sm-4">
					<div class="page-header float-left">
						<div class="page-title">
							<h1>Login to Book Store Administration</h1>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="page-header float-right">
						<div class="page-title">
							<ol class="breadcrumb text-right">
								<li class="active">Login</li>
							</ol>
						</div>
					</div>
				</div>
			</div>

		<div class="content mt-3">
			<div class="col-sm-12">
			<? if( isset($_GET['login']) and $_GET['login'] == "failed"): ?>
				<div class="alert  alert-warning alert-dismissible fade show" role="alert">
					<span class="badge badge-pill badge-success">Failed</span> Login failed! User name or password incorrect.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<? endif; ?>
			</div>

			<div class="col-lg-3 col-md-3"></div>
			<div class="col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<strong>Normal</strong> Form
					</div>
					<div class="card-body card-block">
						<form action="login.php" method="post">
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
						
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-dot-circle-o"></i> Submit
						</button>
						<button type="reset" class="btn btn-danger btn-sm">
							<i class="fa fa-ban"></i> Reset
						</button>
					</div>
					</form>
				</div>
				
			</div>
			<div class="col-lg-3 col-md-3"></div>
		</div> <!-- .content -->
	</div><!-- /#right-panel -->
<?php include("inc/footer.php"); ?>