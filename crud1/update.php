<?php
$title = "Update the Info";
include("../layout/header.php");
include("db.php");
$a=$_GET['id'];
$result=mysqli_query($conn,"SELECT  * FROM studentInfo WHERE id='$a'");
$row=mysqli_fetch_array($result);

?>

<h2>Update your information below</h2>
<form name="update" action="">

    <input type="text" name="fName" placeholder="First Name" required value="<?php echo $row['fName']?>"><br><br>
    <input type="text" name="lName" placeholder="Last Name" required value="<?php echo $row['lName']?>"><br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city']?>"><br><br>
    <select name="cname" value="<?php echo $row['groupID']?>">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21" >BBCAP21</option>
        <option value="other">Other</option>

    </select><br><br>
    
    <input type="submit" name="update" value="UPDATE">
    <input type="submit" name="delete" value="DELETE">
</form>

<?php 
    if(isset($_POST['update'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lName'];
        // $city=$_POST['city'];
        $query=mysqli_query($conn,"UPDATE studentInfo SET fName='$fname', lName='$lname' WHERE id='$a'");
        
        if($query){
            echo "<h2>Your Information is updated successfully</h2>";
        }

        else{
            echo "Record not modified";
        }
    
    }


?>







<?php
include("../layout/footer.php");


?>