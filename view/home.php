<?php include '../proses/proses_searching.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-12">
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
			        <li class="active"><a href="home.php">Pencarian <span class="sr-only">(current)</span></a></li>
			        <li><a href="profil.php">Profil</a></li>
			      </ul>
			      <!-- <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input class="form-control" placeholder="Search" type="text">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			      </form> -->
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="login_v.php">Logout</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
			  <div class="col-md-12"><h1>SkripSweet:*</h1></div>
			  <div class="col-md-12">
			  	<p>Sebuah aplikasi yang akan membantu dan mempermudah pencarian judul Tugas akhit atau Skripsi yang kami tujukan untuk mahasiswa program study Teknik Informatika.....</p></div>
			  <p><a class="btn btn-primary btn-lg">Selengkapnya</a></p>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-md-12 col">
					<form class="form-horizontal" method="POST" action="home.php" >
					  <fieldset>
					    <div class="form-group">
					      <div class="col-md-8 col-md-offset-2 col">
					        <input class="form-control text-center" id="search" placeholder="Masukan Pencarian" type="text" name="judul">
					      </div>
					    </div>
					    <div class="form-group">
					      <div class="col-md-4 col-md-offset-4 col">
					        <!-- <a href="#" class="btn btn-primary btn-lg btn-block" type="submit">
					        <span class="glyphicon glyphicon-search"></span> Cari</a> -->
					        <button class="btn btn-primary btn-lg btn-block" type="submit">cari</button>
					      </div>
					    </div>
					  </fieldset>
					</form>
				</div>
			</div><br><br>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-10 col-md-offset-1 col">
				<div class="panel panel-default">
				  <div class="panel-heading">Hasil pencarian "tugaa akhir rekayasa perangkat lunak"</div>
				  <div class="panel-body">
				    <div class="table-responsive" id="data_aktivitas">
			    
					    <table class="table table-striped custab" id="tabel">
					    <thead>
					        <tr>
					            <th class="text-center">No</th>
					            <th >Judul TA</th>
					            <th>Penulis</th>
					            <th class="text-center">Action</th>
					        </tr>
					    </thead>
					    <tbody id="data">
					    <?php if(isset($judul)){ ?>
					    	<?php $i=1; foreach ($rows as $row) { ?>
				    			<tr>
				    		        <td class="text-center"><?php echo $i++; ?></td>
				    		        <td><?php echo $row['title']; ?></td>	
				    		        <td><?php echo $row['author']; ?></td>				           
				    		        <td class="text-center">
				    		        <a href="<?php echo $row['link']; ?>"><button type="button" class="btn btn-info" title="<?php echo $row['link']; ?>"><div class="glyphicon glyphicon-zoom-in" title="<?php echo $row['link']; ?>"></div> </button></a>
				    		        	

				    		        	<!-- <button type="button" class="btn btn-warning"><div class="glyphicon glyphicon-list-alt"></div> </button>
				    		        	
				    		        	<button type="button" class="btn btn-success"><div class="glyphicon glyphicon-star-empty"></div> </button> -->

				    		        </td>
				    		        
				    		    </tr>
					    	<?php } ?>
					    <?php } ?> 
					    </tbody>		            
					    </table>
					  
					</div>
				  </div>
				</div>
			</div>
		</div>
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
	
</div>

<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal Core -->
</body>
</html>

<!-- Button trigger modal -->
