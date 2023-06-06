<?php

$connection = mysqli_connect("localhost","root","","catcare");
$db = mysqli_select_db($connection, 'phpcrud');

if(isset($_POST['insertdata']))
{
    $ID = $_POST['ID'];
    $Adopter_Name =$_POST['Adopter_Name'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Email = $_POST['Email'];
    $Cat_Age= $_POST['Cat_Age'];
    $Cat_Gender = $_POST['Cat_Gender'];
    $Message = $_POST['Message'];

  
    $query = "INSERT INTO adopt ('ID','Adopter_Name', 'PhoneNumber', 'Email', 'Cat_Age', 'Cat_Gender','Message') 
    VALUES ('$ID','$Adopter_Name', '$PhoneNumber', '$Email', '$Cat_Age', '$Cat_Gender','$Message')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: tableDelete.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>