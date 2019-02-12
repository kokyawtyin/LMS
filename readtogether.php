<?php
	include ("include/auth.php"); 
	include ("include/header_tow.php"); 
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
					 $gid = $_GET['rtid'];
					$sql = "SELECT borrowed_books.*, books.title, member.member_id, member.mebmname, member.phone FROM borrowed_books INNER JOIN books ON borrowed_books.book_id = books.id INNER JOIN member ON borrowed_books.member_id = member.member_id WHERE borrowed_books.book_id = '$gid'";
					mysqli_query($conn, "SET NAMES UTF8");
					$rbook = mysqli_query($conn, $sql);
				?>			
				<div class="col-md-7 customr">				
					<h1>ဤစာအုပ္ကိုဖတ္ခဲ့ဘူးသည့္ အဖဲြ႕ဝင္စာရင္း</h1>	
							<table id="book-data-table" class="table table-striped table-bordered table-auto">
									<thead>
										<tr>
										<th>စဥ္</th>
										<th>စာအုပ္</th>
										<th>အဖဲြ႔ဝင္အမွတ္</th>
										<th>အဖဲြ႔ဝင္အမည္</th>
										<th>အဖဲြ႔ဝင္္ဖုန္းနံပါတ္</th>
										</tr>
									</thead>
									<tbody>
										<?php while($read = mysqli_fetch_assoc($rbook)): ?>
										<tr>
											<td><?php echo $read['brid']; ?></td>
											<td><?php echo $read['title']; ?></td>
											<td><?php echo $read['member_id']; ?></td>
											<td><?php echo $read['mebmname']; ?></td>
											<td><?php echo $read['phone']; ?></td>
										<?php endwhile; ?>
									</tr>                      
									</tbody>
								</table>
				</div><!-- End col-md-2 customr-->			
				<?php include ("include/right-side.php"); ?>			
							
			</div>
	<script src="admin2/assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="admin2/assets/js/popper.min.js"></script>
	<script src="admin2/assets/js/plugins.js"></script>
	<script src="admin2/assets/js/main.js"></script>
	<script src="admin2/assets/js/lib/data-table/datatables.min.js"></script>
	<script src="admin2/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
	<script src="admin2/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
	<script src="admin2/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
	<script src="admin2/assets/js/lib/data-table/jszip.min.js"></script>
	<script src="admin2/assets/js/lib/data-table/pdfmake.min.js"></script>
	<script src="admin2/assets/js/lib/data-table/vfs_fonts.js"></script>
	<script src="admin2/assets/js/lib/data-table/buttons.html5.min.js"></script>
	<script src="admin2/assets/js/lib/data-table/buttons.print.min.js"></script>
	<script src="admin2/assets/js/lib/data-table/buttons.colVis.min.js"></script>
	<script src="admin2/assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#book-data-table').DataTable();
        } );
    </script>
<?php include ("include/footer.php"); ?>