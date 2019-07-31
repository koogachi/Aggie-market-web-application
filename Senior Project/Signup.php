<?php


function rand(){
	 return rand(950000004,959999999);
}
function used($x){
	$CHECK = "SELECT userid from accounts Where userid = '$x' "
	if($CHECK->num_rows ==0){
		return $x;
	}else{
		rand();
		used();
	}
}
$unman=$_POST['email'];
$psw=$_POST['psw'];
$usid = rand();
if(!empty($unman)||!empty($psw)||!empty($usid)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "Wayne0409!";
	$dbname = "Post_database";


	$conn = new mysql($host, $dbUsername,$dbPassword, $dbname);
	if($conn->connection_error){
		die('Connection Error('. $conn->connection_error.')');
	}else{
		$SELECT = "SELECT username form accounts Where username = ? Limit 1");
		$INSERT = "INSERT Into accounts (username,password, userid) values(?,?,?)"

		$stmt = $conn->prepare($SELECT):
		$stmt->bind_param("s",$unman);
		$stmt->execute();
		$stmt->bind_result($unman);
		$stmt->store_result();

		if($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare(INSERT);
			$stmt->bind_param("ssi",$unman, $psw, $usid);
			$stmt->execute();
			echo "New account was added"
		}
	}
}else{
	echo "All fields are required";
	die();
}
?>