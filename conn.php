<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="debasmita1_db";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
//mysqli_connect() function opens a new connection to the MySQL server.
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
	//die is similar to exit function kind of alians
	//mysqli_connect_error() function returns the error description from the last connection error, if any.

}

if(isset($_POST['save'])) //The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
{	
	 $name = $_POST['name'];
	 
	
	 $email = $_POST['email'];
	
	 $password = $_POST['password'];

	 //For inserting the values to mysql database 
     $sql_query = "INSERT INTO user_info (name,email,password)
	 VALUES ('$name','$email','$password')";

	 if (mysqli_query($conn, $sql_query)) //The query() / mysqli_query() function performs a query against a database.
	 {
		echo "Dear user sign up succesfully...Thanks to debasmita";
		//echo is for show output. Which dont have return value
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
		// mysqli_error() function returns the last error description for the most recent function call, if any.
	 }
	 mysqli_close($conn);
	 //mysqli_close() function closes a previously opened database connection.
}
?>