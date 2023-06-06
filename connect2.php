<?php

$db = mysqli_connect("localhost","root","","catcare");

if(!$db){
    die('Not Connected'.mysqli_error());
}
else{
    echo "Connected";
}

$data ="INSERT INTO register(
    FirstName,LastName,Email,Passward,Confirm_pwd)
VALUES('$_POST[fnamein]','$_POST[lnamein]','$_POST[emailin]','$_POST[pwd]','$_POST[repwd]')";

if(!mysqli_query($db,$data)){
    die('Data not added'.mysqli_error($db));
}
else{
    echo "data added";
}

mysqli_close($db);


?>