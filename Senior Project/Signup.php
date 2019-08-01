<?php


 ini_set("display_errors", "1");
  error_reporting(E_ALL);


$email=$_POST['email'];
$psw=$_POST['psw'];

if(!empty($email)||!empty($psw) ) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "root";
	$dbname = "Aggie";

	$conn = new mysqli($host, $dbUsername,$dbPassword, $dbname);
	if(mysqli_connect_error()){
		die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}else{
		$SELECT = "SELECT email form accounts Where email = ? Limit 1";
		$INSERT = "INSERT Into accounts (email, password) values(?, ?)";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		if ($stmt == false ){

        throw new Exception("Error, could not process data submitted.");
		}
		$stmt->execute();
		$stmt->bind_result($email);
		if ($stmt == false ){
			
        throw new Exception("Error, could not process data submitted.");
		}
		$stmt->store_result();
		$rnum = $stmt ->num_rows;

		if($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare(INSERT);
			$stmt->bind_param("ss",$email, $psw);
			if ($stmt == false ){
			
        	throw new Exception("Error, could not process data submitted.");
		}
			$stmt->execute();
			echo "New account was added";
		}
	}
}else{
	echo "All fields are required";
	die();
}
?>