		<!-- Author Upload Form -->
		<div class="col-lg-6">
			<div class="card">
				<form action="author-add.php" method="post" enctype="multipart/form-data" class="form-horizontal">
					<div class="card-header">
						<strong>စာေရးဆရာ အသစ္ထည့္ရန္</strong>
					</div>
					<div class="card-body card-block">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="authorname" class=" form-control-label">စာေရးဆရာနာမည္</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="authorname" name="authorname" placeholder="စာေရးဆရာနာမည္္" class="form-control" />
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="authorgroup" class=" form-control-label">စာေရး အုပ္စုေရြးရန္</label>
								</div>
								<div class="col col-md-9">
									<select name="authorgroup" id="authorgroup" class="form-control">	
										<option value ="1">က</option>
										<option value ="2">ခ</option>
										<option value="3">ဂ</option>
										<option value="D">ဃ</option>
										<option value="E">င</option> 
										<option value="F">စ</option> 
										<option value="G">ဆ</option> 
										<option value="H">ဇ</option> 
										<option value="I">စ်</option> 
										<option value="J">ည</option> 
										<option value="K">ဋ</option> 
										<option value="L">ဌ</option> 
										<option value="M">ဍ</option> 
										<option value="N">ဏ</option> 
										<option value="O">တ</option> 
										<option value="P">ထ</option> 
										<option value="Q">ဒ</option> 
										<option value="R">ဓ</option> 
										<option value="S">န</option> 
										<option value="T">ပ</option> 
										<option value="U">ဖ</option> 
										<option value="V">ဗ</option> 
										<option value="W">ဘ</option> 
										<option value="X">မ</option> 
										<option value="Y">ယ</option> 
										<option value="Z">ရ</option> 
										<option value="AB">လ</option> 
										<option value="AC">ဝ</option> 
										<option value="AD">သ</option> 
										<option value="AE">ဟ</option> 
										<option value="AF">ဠ</option> 
										<option value="AG">အ</option> 
									</select>
								</div>
							</div>							
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary btn-sm" value=""><i class='fa fa-save'></i> ထည့္သြင္းမည့္</button>
						<a class="btn btn-warning btn-sm" href="book-list.php" class="back"><i class="fa fa-ban"></i> Back</a>
					</div>
				</form>
			</div><!-- /card -->
		</div><!-- /col-lg-6 -->
		<!-- /Author Upload Form -->		