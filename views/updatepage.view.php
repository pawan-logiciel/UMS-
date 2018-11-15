<div class="col-lg-2"></div>
<div class="col-lg-10 pl-5 pb-5 table-secondary content">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form action="/updatepage?id=<?php echo $id; ?>" method="post">
				<h2 class="mb-3">Update Page</h2>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-lg-8 col-md-6">
						<div class="form-group">
							Title<input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 pl-0">
					<div class="form-group ">
						Meta Keyword<input type="text" name="metakey" class="form-control" value="<?php echo $metakey; ?>">
					</div>
				</div>	
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 pl-0">
					<div class="form-group ">
						Meta Description<input type="text" name="metadesc" class="form-control" value="<?php echo $metadesc; ?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 pl-0">
					<div class="form-group ">
						Description<input type="text" name="desc" class="form-control" value="<?php echo $desc; ?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 pl-0">
					<div class="form-group ">
						Status<select name="status" class="form-control" required>
                   			 <option value="" selected disabled><?php echo $status; ?></option>
                   			 <option value="1">1</option>
                    		 <option value="0">0</option>
                 		</select>
                 	</div>
                 </div>		
				<div class="row justify-content-center">
					<div class="col-xs-12 col-md-6 col-lg-4">
						<input type="submit" value="Update" class="btn btn-success btn-block btn-lg">
					</div>
				</div>
			</form>
		</div>
	</div>
