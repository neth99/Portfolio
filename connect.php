<?php

$db = mysqli_connect("localhost","root","","catcare");

if(!$db){
    die('Not Connected'.mysqli_error());
}
else{
    echo "Connected";
}

$data ="INSERT INTO login(
    email,passward)
VALUES('$_POST[emailin]','$_POST[passwardin]')";

if(!mysqli_query($db,$data)){
    die('Data not added'.mysqli_error($db));
}
else{
    echo "data added";
}

mysqli_close($db);


?>
