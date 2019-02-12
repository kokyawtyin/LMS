<div class="col-md-2 customrr">
				<h2>Category</h2>
				<ul class="cats">
				  <li>
					<b><a href="index.php">ေနာက္ဆံုးထြက္စာအုပ္</a></b>
				  </li>			  
				  <?php while($row = mysqli_fetch_assoc($cats)): ?>
					  <li>
						<a href="index.php?cat=<?php echo $row['id'] ?>">
						  <?php echo $row['name'] ?>
						</a>
					  </li>
					 <?php endwhile; ?>
				  <li>
					<b><a href="allcat.php">အုပ္စုခြဲထားသည့္စာအုပ္မ်ားအားလံုးကိုၾကည့္ရန္</a></b>
				  </li>			  
				</ul>
			</div> <!-- End col-md-2 customrr-->