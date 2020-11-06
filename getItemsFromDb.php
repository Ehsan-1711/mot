<?php
require_once 'config.php';
// connect to database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//$s=mysql_query("SET NAMES 'utf8'", $con);
mysqli_set_charset($con, 'utf8');

if(mysqli_connect_errno()){
	
     echo "Couldn't connecto to DATABASE : " . mysqli_connect_error() . "<br>";
     return;
}

if(!isset($_REQUEST['Id'])){
	

     $content = mysqli_query($con, "SELECT FoodName,Price,Id,ServeDate,WeekDay FROM foods");
}
else{
     $Id = $_REQUEST['Id'];
     $content = mysqli_query($con, "SELECT FoodName,Price,Id,ServeDate,WeekDay FROM foods WHERE `Id`=$Id");
}


$output = array();
while($row = mysqli_fetch_array($content)){
     $record = array();
	 $record ['WeekDay'] = $row['WeekDay'];
     $record['Id'] = $row['Id'];
     $record['FoodName'] = $row['FoodName'];
     $record['Price'] = $row['Price'];
     $record['ServeDate'] = $row['ServeDate'];
 
     $output[] = $record;
}

echo json_encode($output);



?>