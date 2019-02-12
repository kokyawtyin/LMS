<!-- Book Upload Form -->
		<div class="col-lg-6">
			<div class="card">
				<form action="book-add.php" method="post" enctype="multipart/form-data" class="form-horizontal">
					<div class="card-header">
						<strong>စာအုပ္အသစ္ထည့္ရန္</strong>
					</div>
					<div class="card-body card-block">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="title" class=" form-control-label">စာအုပ္နာမည္</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="title" name="title" placeholder="စာအုပ္နာမည္" class="form-control" />
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="authorgroup" class=" form-control-label">စာေရးဆရာ အုပ္စုေရြးရန္</label>
								</div>
								<div class="col col-md-9">
									<select class="form-control" name="authorgroup" id="authorgroup">
										<option value="">စာေရးဆရာအုပ္စုေရြးပါ</option>
										<?php echo load_author(); ?>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="authorlist" class=" form-control-label">စာေရးဆရာနာမည္</label>
								</div>
								<div class="col col-md-9">
									<select class="form-control" name="authorlist" id="authorlist">
										<option value="">စာေရးဆရာေရြးပါ</option>
									</select>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="summary" class=" form-control-label">စာအုပ္အက်ဥ္းခ်ဳပ္</label>
								</div>
								<div class="col-12 col-md-9">
									<textarea name="summary" id="summary" rows="9" placeholder="စာအုပ္အက်ဥ္းခ်ဳပ္..." class="form-control"></textarea>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="category_id" class=" form-control-label">စာအုပ္ အုပ္စု</label>
								</div>
								<div class="col col-md-9">
									<select name="category_id" id="category_id" multiple="" class="form-control">
									<?php
									   mysqli_query($conn, "SET NAMES UTF8");
									  $result = mysqli_query($conn, "SELECT id, name FROM categories");
									  while($row = mysqli_fetch_assoc($result)): ?>
									<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
									<?php endwhile; ?>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="cover" class=" form-control-label">စာအုပ္မ်က္ႏွာဖုံး</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="file" id="cover" name="cover" class="form-control-file">
								</div>
							</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary btn-sm" value=""><i class='fa fa-save'></i> စာအုပ္ထည့္မည့္</button>
						<a class="btn btn-warning btn-sm" href="book-list.php" class="back"><i class="fa fa-ban"></i> Back</a>
					</div>
				</form>
			</div><!-- /card -->
		</div><!-- /col-lg-6 -->
		<!-- /Book Upload Form -->