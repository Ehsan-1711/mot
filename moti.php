<?php
require_once 'config.php';
// connect to database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if(mysqli_connect_errno()){
     echo "Couldn't connecto to DATABASE : " . mysqli_connect_error() . "<br>";
     return;
}
$Food =$_GET['food'];
echo $Food;
if(!isset($_GET['food'])){
     $content = mysqli_query($con, "SELECT UserName,Length FROM serevs WHERE Food='$Food'");
}
else{
     $content = mysqli_query($con, "SELECT UserName,Length FROM serevs WHERE Food='$Food' ");
}



$output = array();
while($row = mysqli_fetch_array($content)){
     $record = array();
    // $record['Id'] = $row['Id'];
     $record['UserName'] = $row['UserName'];
     $record['Length'] = $row['Length'];
    // $record['ServeDate'] = $row['ServeDate'];
 
     $output[] = $record;
}
//echo $Food;
echo json_encode($output);



?>