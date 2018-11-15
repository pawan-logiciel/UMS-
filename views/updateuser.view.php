<div class="col-lg-2"></div>
<div class="col-lg-10 pl-5 pb-5 table-secondary content">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form action="/updateuser?id=<?php echo $id; ?>" method="post">
				<h2 class="mb-3">Update User</h2>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-lg-8 col-md-6">
						<div class="form-group">
							Name<input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 pl-0">
					<div class="form-group ">
						Username<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
					</div>
				</div>	
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 pl-0">
					<div class="form-group ">
						Email<input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
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
