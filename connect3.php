<?php

$db = mysqli_connect("localhost","root","","catcare");

if(!$db){
    die('Not Connected'.mysqli_error());
}
else{
    echo "Connected";
}

$data ="INSERT INTO request(
    Name,PhoneNumber,Email,Subject,Message)
VALUES('$_POST[namein]','$_POST[phonein]','$_POST[ein]','$_POST[subin]','$_POST[msgin]')";

if(!mysqli_query($db,$data)){
    die('Data not added'.mysqli_error($db));
}
else{
    echo "data added";
}

mysqli_close($db);


?>