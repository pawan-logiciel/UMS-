<div class="container-fluid">
	<div class="row navbar nav pb-4 pt-3">  
		<div class="col-sm-12">
			<a href="#"><b class="d-inline  fa fa-bars text-white nav-icon mt-3"></b></a>
			<h4 class="d-inline text-white ml-5">UMS | ADMIN</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2 bg-white sidenav shadow" id="mysidenav">
			<img src="../images/admin.png" alt="not found" height="100px" class="ml-5 mb-2">
			<h3 class="ml-5 mb-5 pl-1">Admin</h3>
			<ul class="pl-2">
				<!-- department -->
				<li class="mb-4">
					<i class="fa fa-list"></i>
					<a href="#" class="dashboard"><span class="ml-3">Users</span></a>
					<i class="fa fa-angle-right float-right mt-1" id="drop-click"></i>
					<div class="drop mt-3 mb-3" id="drop">
						<ul>
							<li class="mb-2"><a href="/signup">Add User</a></li>
							<li class="mb-2"><a href="/manageuser">Manage User</a></li>
						</ul>
					</div>
				</li>
				<!-- leave type -->
				<li class="mb-4">
					<i class="fa fa-angle-left"></i>
					<i class="fa fa-angle-right"></i>
				<a href="#" class="dashboard"><span class="ml-3">Page Manager</span></a>
					<i class="fa fa-angle-right float-right mt-1" id="drop-click1"></i>
					<div class="drop mt-3 mb-3" id="drop1">
						<ul>
							<li class="mb-2"><a href="/add-page">Add Page</a></li>
							<li class="mb-2"><a href="/manage-page">Manage Page</a></li>
						</ul>
					</div>
				</li>
				<!-- sign out -->
				<li class="mb-4">
					<i class="fa fa-sign-out"></i>
					<a href="/" class="dashboard"><span class="ml-3">Sign Out</span></a>
				</li>
			</ul>
		</div>
<script src="../js/jquery.js" type="text/javascript"></script>	
<script src="../js/custom.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/addons/datatables.js"></script>