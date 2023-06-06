<html>
    <head>
        <style>
             @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

body {
    background-color: #673AB7;
    font-family: 'Calibri', sans-serif !important
}

.h1 {
    size:28px;
    color:orangered;

}

.container{
   margin-top:100px;
}
.card {
      position: relative;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
   -ms-flex-direction: column;
   flex-direction: column;
   min-width: 0;
   word-wrap: break-word;
   background-color: #fff;
   background-clip: border-box;
   border: 0px solid transparent;
   border-radius: 0px;
}


.card-body {
   -webkit-box-flex: 1;
   -ms-flex: 1 1 auto;
   flex: 1 1 auto;
   padding: 1.25rem;
}

.card .card-title {
   position: relative;
   font-weight: 600;
   margin-bottom: 10px;
}

.btn{
    padding: 10px 0;
    color: #fff;
    outline: none;
    font-size:20px;
    background: orangered;
    border: none;
    width: 20%;
    cursor: pointer;
    margin-top: 2%;
    border-radius: 25px;

}


.btnd{
    padding: 10px 0;
    color: #fff;
    outline: none;
    font-size:20px;
    background: black;
    border: none;
    width: 20%;
    cursor: pointer;
    margin-top: 2%;
    border-radius: 25px;
}
.table {
   width: 100%;
   max-width: 100%;
   margin-bottom: 1rem;
   background-color: transparent;
}

* {
   outline: none;
}

.table th, .table thead th {
   font-weight: 500;
   color:orangered;
   font-size:25px;
}

.table td, .table tbody td{
    font-size:22px;
}
.table thead th {
   vertical-align: bottom;
   border-bottom: 2px solid #dee2e6;
}


.table th {
   padding: 1rem;
   vertical-align: top;
   border-top: 1px solid #dee2e6;
}


.table th, .table thead th {
   font-weight: 500;
}


th {
   text-align: inherit;
}


.m-b-20 {
   margin-bottom: 20px;
}


.customcheckbox {
   display: block;
   position: relative;
   padding-left: 24px;
   font-weight: 100;
   margin-bottom: 12px;
   cursor: pointer;
   font-size: 22px;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
}


.customcheckbox input {
   position: absolute;
   opacity: 0;
   cursor: pointer;
}

.checkmark {
   position: absolute;
   top: -3px;
   left: 0;
   height: 20px;
   width: 20px;
   background-color: #CDCDCD;
   border-radius: 6px;
}


.customcheckbox input:checked ~ .checkmark {
   background-color: #2196BB;
}


.customcheckbox .checkmark:after {
   left: 8px;
   top: 8px;
   width: 5px;
   height: 10px;
   border: solid white;
   border-width: 0 3px 3px 0;
   -webkit-transform: rotate(45deg);
   -ms-transform: rotate(45deg);
   transform: rotate(45deg);
} 


.table tbody{
    padding-top:8px;
    padding-bottom:5px;
}

        </style>
</head>
<body>
    <div class="container">
                      
                                
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h1 class="card-title m-b-0">Adoption Details</h1>
                                <button type="button" class="btnd" id="delete" onclick="deletedata()">Delete</button>
                                <button type="button" class="btn"><a href="Adopt_a_cat_form.html">Back</a></button>
                            </div>
                                <div class="table-responsive">
                                    <table class="table" border="2">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Adopter_Name</th>
                                                <th scope="col">PhoneNumber</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Cat_age</th>
                                                <th scope="col">Cat_Center</th>
                                                <th scope="col">Message</th>
                                            </tr>
                                            
                                            </thead>
                                        <tbody class="customtable">

                                        <?php

$db = mysqli_connect("localhost","root","","catcare");
if($db->connect_error){
    die("connection failed:".$db->connect_error);
}

$sql = "SELECT ID,adopter_Name, PhoneNumber, Email, Cat_Age, Cat_Gender,Message from adopt";
$result = $db->query($sql);


if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["ID"]."</td><td>".$row["adopter_Name"]."</td><td>".$row["PhoneNumber"].
        "</td><td>".$row["Email"]."</td><td>".$row["Cat_Age"]."</td><td>".$row["Cat_Gender"]."</td><td>".$row["Message"]."</td></tr>";

    }
    echo "</table>";
}
else{
    echo "0 result";
}

$db->close();



?>

<script>
    function deletedata(){
        <?php

include "connect4.php"; // Using database connection file here       

$ID = $_GET['ID'];
$adopter_Name =$_GET['adopter_Name'];
$PhoneNumber = $_GET['PhoneNumber'];
$Email = $_GET['Email'];
$Cat_Age= $_GET['Cat_Age'];
$Cat_Gender = $_GET['Cat_Gender'];
$Message = $_GET['Message'];
 // get id through query string

$del = mysqli_query($db,"delete from adopt where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:all_records.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

$db->close();
?>
    }
    </script>


                                       </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>

                   </div> 
                    </body>
                   </html>