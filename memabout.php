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
										<li> <a href="">မိမိအေၾကာင္းႏွင့္ငွားခဲ့ဖူးေသာစာအုပ္စာရင္း</a> </li>
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
					 $gid = $_GET['id'];
					mysqli_query($conn, "SET NAMES UTF8");
					$member = mysqli_query($conn, "SELECT * FROM member WHERE mebid = '$gid'");
					$row = mysqli_fetch_assoc($member);
				?>			
				<div class="col-md-7 customr">
				<? if(isset($gid)): ?>
					<div class="alert  alert-success alert-dismissible fade show" role="alert">
						<span class="badge badge-pill badge-success">Success</span> မဂၤလာပါ <?php echo $row['mebmname'] ?>။ သန္လ်င္ဖံြ႕ၿဖိဳးမႈအသင္း၏ စာၾကည့္တိုက္မွႀကိဳဆိုပါသည္။
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<? endif; ?>
					<h1>Member Area</h1>						
						<table>
							<tr>
								<td width="30%">Member ID</td>
								<td width="4%">-</td>
								<td width="40%"><?php echo $row['member_id']; ?></td>
								<td width="20%" rowspan="6"><img src="admin/covers/memberphoto/<?php echo $row['photo']; ?>" alt="" align="right" height="140"></td>
							</tr>
							<tr>
								<td>Member Name [English]</td>
								<td width="4%">-</td>
								<td><?php echo $row['mebename']; ?></td>
								<td></td>
							</tr>
							<tr>
								<td>Member Name [Myanmar]</td>
								<td width="4%">-</td>
								<td><?php echo $row['mebmname']; ?></td>
								<td></td>
							</tr>
							<tr>
								<td>Phone</td>
								<td width="4%">-</td>
								<td><?php echo $row['phone']; ?></td>
								<td></td>
							</tr>
							<tr>
								<td>Address</td>
								<td width="4%">-</td>
								<td><?php echo $row['address']; ?></td>
								<td></td>
							</tr>
							<tr>
								<td>Email</td>
								<td width="4%">-</td>
								<td><?php echo $row['mebemail']; ?></td>
								<td></td>
							</tr>							
						</table>
						<p>&nbsp;</p>
							
							<?php
								$rmid = $row['member_id'];
								$sql = "SELECT borrowed_books.*, books.title, author.authorname, member.member_id FROM borrowed_books INNER JOIN books ON borrowed_books.book_id = books.id INNER JOIN author ON borrowed_books.author_id = author.authorid INNER JOIN member ON borrowed_books.member_id = member.member_id WHERE member.member_id = '$rmid'";
								mysqli_query($conn, "SET NAMES UTF8");
								$rbook = mysqli_query($conn, $sql);
							?>
							<table id="book-data-table" class="table table-striped table-bordered table-auto">
									<thead>
										<tr>
										<th>စဥ္</th>
										<th>စာအုပ္</th>
										<th>စာေရးဆရာ</th>
										<th>ငွားရမ္းခဲ့သည့္ေန႔</th>
										<th>ျပန္အပ္သည့္ေန႔</th>
										</tr>
									</thead>
									<tbody>
										<?php while($read = mysqli_fetch_assoc($rbook)): ?>
										<tr>
											<td><?php echo $read['brid']; ?></td>
											<td><a href="readtogether.php?rtid=<?php echo $read['book_id']; ?>"><?php echo $read['title']; ?></a></td>
											<td><?php echo $read['authorname']; ?></td>
											<td><?php echo $read['borrow_date']; ?></td>
											<td><?php echo $read['return_date']; ?></td>
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