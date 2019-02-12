<?php 
	include ("inc/header.php"); 
	include("confs/config.php");  
	include("confs/auth.php");
	include ("inc/leftpanel.php");
	include ("inc/function.php");
?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
		<?php 
			include ("inc/rightpanelheader.php");
		?>
       <!-- Header-->

		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Book</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Books table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
		<?php include ("bookuploadform.php"); ?>
		<?php include ("authoruploadform.php"); ?>
		
	</div><!-- /#right-panel -->
<?php include("inc/footer.php"); ?>