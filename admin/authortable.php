<?php 
	include ("inc/header.php"); 
	include("confs/config.php");  
	include("confs/auth.php");
	include ("inc/leftpanel.php");
?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
		<?php 
			include ("inc/rightpanelheader.php");  
			mysqli_query($conn, "SET NAMES UTF8");
			$bresult = mysqli_query($conn, "SELECT * FROM author");
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
		
		<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<strong class="card-title">Data Table</strong>
								</div>
								<div class="card-body">
								  <table id="book-data-table" class="table table-striped table-bordered">
									<thead>
										<tr>
										<th>စဥ္</th>
										<th>စာေရးဆရာနာမည္</th>
										<th>စာေရးဆရာအုပ္စု</th>
										<th>Action</th>
										<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php while($row = mysqli_fetch_assoc($bresult)): ?>
									  <tr>
										<td><?php echo $row['authorid']; ?></td>
										<td><?php echo $row['authorname']; ?></td>
										<td><?php echo $row['authorgroupId']; ?></td>
										<td><a href="authortable.php?id=<?php echo $row['authorid'] ?>"	onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a></td>
										<td><a href="authortable.php?id=<?php echo $row['authorid'] ?>"><i class="fa fa-edit"></i></a></td>
										</tr>
										<?php endwhile; ?>									                        
									</tbody>
								  </table>
								</div>
							</div>
						</div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
		
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#author-data-table').DataTable();
        } );
    </script>
</body>
</html>
