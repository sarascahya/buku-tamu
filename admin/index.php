<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Page</title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1 class="text-center">PERPUSTAKAAN</h1>
			</div>
			<div class="row">
  				<div class="col-md-4 col-md-offset-4">
  					<div class="panel panel-primary">
  						<!--<div class="panel-heading">
    						<h3 class="panel-title text-center">Login Admin</h3>
 						 </div>-->
						<div class="panel-body">
							<form class="form-horizontal" action="control/cek_login.php" method="post">
							 	<h3 class="text-center">LOGIN ADMIN</h3><br>
							 	<input type="text" class="form-control" placeholder="Username" name="username"><br>
							 	<input type="password" class="form-control" placeholder="Password" name="password"><br>
							 	<div class="row">
	  								<div class="col-md-4 col-md-offset-8">
							 			<button type="submit" name="kirim" class="btn btn-primary">LOGIN</button>
							 		</div>
							 	</div>
							</form>
						</div>
					</div>
  				</div>
			</div>
		</div>
	</body>
</html>