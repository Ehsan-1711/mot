<?php
$DB_HOST =  "localhost";
$DB_NAME = "LUNCH";
$DB_USER = "root";
$DB_PASS = "";

//$conn = new mysqli($servername, $username, $server_password, $dbname);
$conn = new mysqli($DB_HOST,$DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user=$_POST['UserName'];
$password=$_POST['Password'];





$sql = "SELECT * FROM userinformations WHERE UserName = '$user'";
$response = mysqli_query($conn , $sql);

$result = array();

if(mysqli_num_rows($response)==1){
	$row = mysqli_fetch_assoc($response);
	
	if($password == $row['Password']){
		
		if($row['Admin'] == "1" ){
			$result['user'] = $row['UserName'];
			
			$result['success'] = "1";
			$result['message']= "Admin";
			echo json_encode($result);
			mysqli_close($conn);
			
		}
		if($row['Admin'] == "0" ){
		
			$result['user'] = $row['UserName'];
		
		
			$result['success'] = "1";
			$result['message']= "User";
			echo json_encode($result);
			mysqli_close($conn);
		}
	}
	else{
		$result['success'] = "0";
		$result['message']= "password ghalate";
		echo json_encode($result);
		mysqli_close($conn);
	}		
} 
else{
	$result['success'] = "0";
	$result['message']= "username ghalate";
	echo json_encode($result);
	mysqli_close($conn);
}


?>