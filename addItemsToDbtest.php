<?php
require_once 'config.php';


// get parameters

//if(isset($_REQUEST['food']) && isset($_REQUEST['date']) &&
 //isset($_REQUEST['length']) && isset($_REQUEST['user'])&& isset($_REQUEST['price']) ){ 
    $Food = $_POST['Food'];
    $DateModified = $_POST['DateModified'];
    $Length = $_POST['Length'];
    $Price = $_POST['Price'];
    $UserName = $_POST['UserName'];
 //}
 //else
 //{
// return ;
//}
    if(strpos($Food, "'") || $Food == "'" || htmlentities($Food)){
        return;
    }
       if(strpos($DateModified, "'") || $DateModified == "'" || htmlentities($DateModified)){
        return;
    }
          if(strpos($Length, "'") || $Length == "'" || htmlentities($Length)){
        return;
    }
          if(strpos($Price, "'") || $Price == "'" || htmlentities($Price)){
        return;
    }
          if(strpos($UserName, "'") || $UserName == "'" || htmlentities($UserName)){
        return;
    }
// create connection
$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// check connection
if($con->connect_error){
    echo "Failed to connect : " . $con->connect_error;
    return;
}
$sqlquery =     "INSERT INTO `serevs` (`Food`, `DateModified`, `Length`, `Price`, `UserName`)
                VALUES ('$Food', '$DateModified',  '$Length', $Price, '$UserName')";

if($con->query($sqlquery) === TRUE){
    echo "New record created successfully";
} else{
    echo "Error : " . $con->error ;
}

?>