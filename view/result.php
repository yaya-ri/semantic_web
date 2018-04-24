
<?php include '../proses/proses_searching.php'; ?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
				            <th class="text-center">Action</th>
				        </tr>
				    </thead>
				    <tbody id="data">
				    <?php if(isset($judul)){ ?>
				    	<?php foreach ($rows as $row) { ?>
			    			<tr>
			    		        <td class="text-center">1</td>
			    		        <td><?php echo $row['title']; ?></td>				           
			    		        <td class="text-center">
			    		        	<button type="button" class="btn btn-info"><div class="glyphicon glyphicon-zoom-in"></div> </button>

			    		        	<button type="button" class="btn btn-warning"><div class="glyphicon glyphicon-list-alt"></div> </button>
			    		        	
			    		        	<button type="button" class="btn btn-success"><div class="glyphicon glyphicon-star-empty"></div> </button>

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
</div>