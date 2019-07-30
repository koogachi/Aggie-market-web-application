<?php
// Get a connection for the database
require_once('../mysqli_connect.php');

// Create a query for the database
//
$query = "SELECT first_name, last_name, email, street, city, state, zip,
phone, birth_date FROM students";

// Get a response from the database by sending the connection
// and the query
echo $response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

if(/*request*/ == ($response)){
	//html code
} else {
	//
}


} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>