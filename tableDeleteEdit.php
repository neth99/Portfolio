<?php
$connection = mysqli_connect("localhost","root","","catcare");
$db = mysqli_select_db($connection, 'phpcrud');

    if(isset($_POST['updatedata']))
    {   
        $ID = $_POST['ID'];
        $Adopter_Name =$_POST['Adopter_Name'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Email = $_POST['Email'];
        $Cat_Age= $_POST['Cat_Age'];
        $Cat_Gender = $_POST['Cat_Gender'];
        $Message = $_POST['Message'];

        $query = "UPDATE adopt SET ID='$ID', Adopter_Name='$Adopter_Name', PhoneNumber='$PhoneNumber', Email='$Email', Cat_Age='$Cat_Age', 
        Cat_Gender='$Cat_Gender','Message'='$Message' WHERE ID='$ID'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:tableDelete.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>