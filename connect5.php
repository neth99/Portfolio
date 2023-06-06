<?php

$db = mysqli_connect("localhost","root","","catcare");

if(!$db){
    die('Not Connected'.mysqli_error());
}
else{
    echo "Connected";
}

$data ="INSERT INTO volunteer(
    Volunteer_Name,PhoneNumber,Email,Cat_Age,Cat_Gender,Care_Center,Message)
VALUES('$_POST[namein]','$_POST[numin]','$_POST[ein]','$_POST[agein]','$_POST[Gender]','$_POST[centerin]','$_POST[msgin]')";

if(!mysqli_query($db,$data)){
    die('Data not added'.mysqli_error($db));
}
else{
    echo "data added";
}

mysqli_close($db);


?>