<?php include("header.php");

$fName=$_POST["fName"];
$lName=$_POST["lName"];
$bDate=$_POST["bDate"];
$picColor = $_POST["picColor"];


echo "<h4> Your Name is : $fName $lName </h4>";
echo "<h4> Birth Date : $bDate";
echo "<h4> Selected Color : $picColor";
?>

<?php include("footer.php")?>