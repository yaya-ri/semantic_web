<?php 

	@$judul = $_POST['judul'];
	// print_r(@$judul);
	// exit();

	include_once('../semsol/ARC2.php'); 
	$dbpconfig = array("remote_store_endpoint" => "http://localhost:2020/sparql");

	$store = ARC2::getRemoteStore($dbpconfig); 

	if ($errs = $store->getErrors()) {
		echo "<h1>getRemoteSotre error<h1>" ;
	}



	$query = "
		PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX vocab: <http://localhost:2020/resource/vocab/>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX map: <http://localhost:2020/resource/#>
		PREFIX db: <http://localhost:2020/resource/>

		SELECT DISTINCT ?title WHERE {
		   ?x vocab:concentrate_concentrate_id 2x.
		   ?y vocab:essay_concentrate_id ?x.
		   ?y vocab:essay_essay_id ?z.
		   
		   ?a vocab:interested_interested_id 2.
		   ?b vocab:essay_interested_id ?a.
		   ?b vocab:essay_essay_id ?c.

		   ?p vocab:programming_language_language_id 2.
		   ?q vocab:language_essay_language_id ?p.
		   ?q vocab:language_essay_essay_id ?r.
		   ?r vocab:essay_essay_id ?t.

		  ?essay vocab:essay_essay_id ?filter. FILTER(?filter = ?c && ?filter = ?z ).
		  ?essay vocab:essay_essay_title ?title. FILTER regex(?title,'Sistem').
		}";

	$rows = $store->query($query, 'rows');

	if ($errs = $store->getErrors()) {
		echo "Query errors" ;
		print_r($errs);
	}


 ?>