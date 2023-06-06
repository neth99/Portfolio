<?php
$connection = mysqli_connect("localhost","root","","catcare");
$db = mysqli_select_db($connection, 'phpcrud');

if(isset($_POST['deletedata']))
{
    $ID = $_POST['delete_ID'];

    $query = "DELETE FROM adopt WHERE ID='$ID'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:tableDelete.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>