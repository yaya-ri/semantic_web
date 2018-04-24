<?php 
	include 'connection.php';
	$nim 	  = $_POST['nim'];
	$password = $_POST['password'];
	$login    = mysqli_query($connect, "SELECT * FROM people WHERE people_nim='$nim' AND people_password='$password'");

	$result   = mysqli_num_rows($login);
	if($result>0){
	    $user = mysqli_fetch_array($login);
	    session_start();
	    $_SESSION['nim'] = $nim;
	    echo '<script language="javascript">';
	    echo 'alert("Berhasil Login")';
	    echo '</script>';
	    header("location:../view/home.php");
	}else{
	    header("location:../view/login_v.php");
	}
 ?>