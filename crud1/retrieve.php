<?php
$title = "Reading the data from database";
include("../layout/header.php");
include("db.php");
$sql="SELECT * FROM studentInfo";
$result=$conn->query($sql);
if($result->num_rows>0){
echo "
<form method='GET'>
    <table class='table'>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>Group ID</th>
    </tr>
    ";
    while($row=$result->fetch_assoc()){
   
echo "
    <tr>
        <td><a href='update.php?id=$row[id]'>$row[id]</a></td>
        <td>$row[fName]</td>
        <td>$row[lName]</td>
        <td>$row[city]</td>
        <td>$row[groupID]</td>
    </tr>
    

    
    ";
}
echo "</table></form>";
}

else{
    echo "no results";
}

$conn->close();
include("../layout/footer.php");


?>

