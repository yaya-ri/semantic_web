<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div class="col-md-12">
		<div class="container">
			<div class="login-container">
	            <div id="output"></div>
	            <div class="avatar"><img alt="User Pic" src="../gambar/login.png" class="img-circle img-responsive"></div>
	            <div class="form-box">
	                <form action="../proses/proses_login.php" method="POST">
	                    <input name="nim" type="text" placeholder="nim">
	                    <input name="password" type="password" placeholder="password">
	                    <button class="btn btn-warning btn-block login" type="submit">Login</button>
	                </form>
	            </div>
	        </div>
		</div>
	</div>
</body>
</html>