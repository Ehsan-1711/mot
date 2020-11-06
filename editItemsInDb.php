<?php
require_once 'config.php';
if( isset($_REQUEST['Id']) && isset($_REQUEST['ServeDate']) && isset($_REQUEST['FoodName'])
    && isset($_REQUEST['SetBy']) && isset($_REQUEST['Price']) && isset($_REQUEST['MaxLength']) )
{
    $Id = $_REQUEST['Id'];
    $FoodName = $_REQUEST['FoodName'];
    $SetBy = $_REQUEST['SetBy'];
    $MaxLength = $_REQUEST['MaxLength'];
    $Price = $_REQUEST['Price'];
    $ServeDate = $_REQUEST['ServeDate'];
	
}
else
{
    return;
}
if(strpos($FoodName, "'") || $FoodName == "'" || htmlentities($FoodName)){
        return;
    }
       if(strpos($SetBy, "'") || $SetBy == "'" || htmlentities($SetBy)){
        return;
    }
          if(strpos($MaxLength, "'") || $MaxLength == "'" || htmlentities($MaxLength)){
        return;
    }
          if(strpos($Price, "'") || $Price == "'" || htmlentities($Price)){
        return;
    }
          if(strpos($ServeDate, "'") || $ServeDate == "'" || htmlentities($ServeDate)){
        return;
    }
        if(strpos($Id, "'") || $Id == "'" || htmlentities($Id)){
        return;
    }

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($con->connect_error){
    echo "Failed to connect : " . $con->connect_error;
    return;
}
mysqli_set_charset($con, 'utf8');

$sql_query = "UPDATE `foods` SET  `FoodName`='$FoodName',
                                    `Price`=$Price,
                                    `MaxLength`='$MaxLength',
                                    `SetBy`='$SetBy',
                                    `ServeDate`='$ServeDate'
                                    WHERE `Id`=$Id";
if($con->query($sql_query) === TRUE){
    echo "Item updated successfully";
} else{
    echo "Error : " . $con->error ;
}

?>