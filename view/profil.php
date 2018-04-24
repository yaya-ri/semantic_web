<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/profil.css">
</head>
<body>
	<div class="row">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Logo</a>
			    </div>

			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			      <ul class="nav navbar-nav">
			        <li class="#"><a href="home.php">Pencarian <span class="sr-only">(current)</span></a></li>
			        <li class="active"><a href="profil.php">Profil</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="login_v.php">Logout</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>
	</div>

	<div class="row">
	<?php 
		include '../proses/connection.php';
		session_start(); 
		$nim = $_SESSION['nim'];
	    $people = mysqli_query($connect, "SELECT * FROM people WHERE people_nim =$nim");
	    $no=1;
	    foreach ($people as $row){
	 ?>
		<div class="container">
	      <div class="row">
	          <div class="panel panel-primary">
	            <div class="panel-heading">
	              <h3 class="panel-title">Hai.... <?php echo $row['people_first_name']; ?></h3>
	            </div>
	            <div class="panel-body">
	              <div class="row">
	                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../gambar/profil.jpg" class="img-circle img-responsive"> </div>
	                <div class=" col-md-9 col-lg-9 "> 
	                  <table class="table table-user-information">
	                    <tbody>
	                      <tr>
	                        <td>nama:</td>
	                        <td><?php echo $row['people_first_name']." ".$row['people_last_name']; ?></td>
	                      </tr>
	                      <tr>
	                        <td>nim:</td>
	                        <td><?php echo $row['people_nim']; ?></td>
	                      </tr>
	                      <tr>
	                        <td>Jurusan</td>
	                        <td><?php echo $row['people_major']; ?></td>
	                      </tr>
	                      <tr>
	                        <td>Jenis Kelamin</td>
	                        <td><?php echo $row['people_gender'];; ?></td>
	                      </tr>
	                      <tr>
	                        <td>minat</td>
	                        <?php $interested = mysqli_query($connect, "SELECT * FROM interested JOIN interested_management ON (interested.interested_id = interested_management.interested_id) JOIN people ON (interested_management.people_id = people.people_id) WHERE people.people_nim=$nim"); ?>

	                        <td>
		                        <?php foreach ($interested as $row) {
		                        	echo $row['interested_name'].", ";
		                        } ?>
	                        </td>
	                      </tr>
	                      <tr>
	                        <td>konsentrasi</td>
	                        	<?php $c = mysqli_query($connect, "SELECT * FROM concentrate JOIN people ON (concentrate.concentrate_id = people.concentrate_id) WHERE people.people_nim=$nim "); ?>
	                        <td>
		                        <?php foreach ($c as $row) {
		                        	echo $row['concentrate_name'];
		                        } ?>
	                        </td>
	                      </tr>
	                      <tr>
	                        <td>bahasa pemrograman</td>
	                        	<?php $language = mysqli_query($connect, "SELECT * FROM programming_language JOIN l_management ON (programming_language.language_id = l_management.language_id) JOIN people ON (l_management.people_id = people.people_id) WHERE people.people_nim=$nim"); ?>
	                        <td>
	                        	<?php foreach ($language as $row) {
		                        	echo $row['language_name'].", ";
		                        } ?>
	                        </td>
	                      </tr>
	                      <tr>
	                        <td>Email</td>
	                        <td><a href="mailto:info@support.com"><?php echo $row['people_email']; ?></a></td>
	                      </tr>
	                        <td>Phone Number</td>
	                        <td>085888xxxx
	                        </td>
	                           
	                      </tr>
	                     
	                    </tbody>
	                  </table>
	                  
	                  <a href="bookmark.php" class="btn btn-primary">Judul favorite</a>
	                  <a href="#" class="btn btn-primary">Unduh Profile</a>
	                </div>
	              </div>
	            </div>
	                 <div class="panel-footer">
	                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
	                        <span class="pull-right">
	                            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
	                            <a href="#" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
	                        </span>
	                    </div>
	            
	          </div>
	        </div>
	      </div>
	<?php } ?>
	</div><br><br>



	<div class="row">
		<div class="row">
			<div class="col-md-8">
				<blockquote class="responsive">
				  <p><i>"Apabila amanah disia-siakan maka tunggulah saat kehancurannya."</p>
				  </i><small>HR. Imam Bukhari<cite title="Source Title"></cite></small>
				</blockquote>
			</div>
		</div>
	</div>
	
</body>
</html>