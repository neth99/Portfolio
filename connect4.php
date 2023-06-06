<?php

$db = mysqli_connect("localhost","root","","catcare");

if(!$db){
    die('Not Connected'.mysqli_error());
}
else{
    echo "Connected";
}

$data ="INSERT INTO adopt(
    adopter_Name,PhoneNumber,Email,Cat_Age,Cat_Gender,Message)
VALUES('$_POST[namein]','$_POST[numin]','$_POST[ein]','$_POST[agein]','$_POST[gender]','$_POST[msg]')";

if(!mysqli_query($db,$data)){
    die('Data not added'.mysqli_error($db));
}
else{
    echo "data added";
}

mysqli_close($db);


?>