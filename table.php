
<!DOCTYPE html>
<head>
    <title>Database HTML</title>
</head>
<body>
<table class="table">
  
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Adopter_Name</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Email</th>
      <th scope="col">Cat_age</th>
      <th scope="col">Cat_Center</th>
      <th scope="col">Message</th>
    </tr>

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
</table>
</body>
</html>