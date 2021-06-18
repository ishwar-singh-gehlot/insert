<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "insert" ;

$conn = mysqli_connect($server, $username, $password, $dbname) ;
   
if (isset($_POST['submit'])) {

	if (!empty($_POST['name'])) {

		$name = $_POST['name'] ;
		$query = "insert into form(name)value('$name')" ;

		$run = mysqli_query($conn,$query) or die(mysql_error());
		if($run){
			echo "form submitted successfully" ;
		}
		else{
			echo "form not submitted" ;
		}
		# code...
	}
	else{
		echo "fields required" ;
	}
	# code...
}
 ?>