<?php
$unman=$_POST['unman'];
$psw=$_POST['psw'];

if(!empty($unman)||!empty($psw)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "Wayne0409!";
	$dbname = "Post_database";


	$conn = new mysql($host, $dbUsername,$dbPassword, $dbname);
	if($conn->connection_error){
		die('Connection Error('. $conn->connection_error.')');
	}else{
		if($SELECT "SELECT psw from accounts where username = unman limit 1"){
			if(psw == $psw){
				echo "Login sucessful, what what you need Trey"
			}else{
				echo "Password is incorrect"
			}
		}else{
			echo "Either your username or password is incorrect"
		}
	}

}else{
	echo "All fields are required";
	die();
}

?>