<?php
$title = "Simple CRUD app";
include("../layout/header.php");
?>

<form accept="" method="post">
    
    <input type="text" name="fName" placeholder="First Name" required><br><br>
    <input type="text" name="lName" placeholder="Last Name" required><br><br>
    <input type="text" name="city" placeholder="City" required><br><br>
    <select name="cname">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21" >BBCAP21</option>
        <option value="other">Other</option>

    </select><br><br>
    
    <input type="submit" name="submit" value="SUBMIT">
</form>


<?php 
if(isset($_POST['submit'])){
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$city=$_POST['city'];
$course=$_POST['cname'];

include("db.php");
$sql="INSERT INTO studentInfo(fName, lName, city, groupID) VALUES ('$fName','$lName', '$city','$course')";
if($conn->query($sql)==TRUE){
    echo "Your information is added succesfully";}

    else {
        echo "Error :".$conn->error;
    }

}


?>
 







<?php include("../layout/footer.php");?>