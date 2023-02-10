<?php include("header.php"); ?>
<form action="" method="get">
    <input type="number" placeholder="Enter your first number :" name="num1">
    <input type="number" placeholder="Enter your first number :" name="num2">
    <select name="operators">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="multi">Multiply</option>
        <option value="divide">Devide</option>
    </select>

    <input type="submit" name="cal" Value="Calculate">
</form>


<?php
if (isset($_GET['cal'])) {
    $num1=$_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operators'];
    switch ($operator){
        case "add":
            $result=$num1 + $num2;
            break;
        case "sub":
            $result=$num1 - $num2;
            break;
        case "multi":
            $result=$num1 * $num2;
            break;
        case "divide":
            $result=$num1 / $num2;
            break;
        default:
            $result = "Error.you have not selected the correct operator";
    }
if(isset($result)){
    echo "<h2>Result : $result</h2>";
}
}


?>

<h5> 5.1Write a php script to display courses as list. </h5>
<?php 
    $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project"); 

    foreach ($courses as $value) {
    echo "<li>".$value . "</li>";
}
?>

<h5>5.2 The unset() function is used to remove element from the array. The var_dump() 
    function is used to dump information about a variable.  array_values() is an inbuilt
     function that returns all the values of an array and not the keys.
</h5>

<?php 
    $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    unset($courses1["2"]);
    echo "<h6>use unset() function to Remove the third element of the array </h6>";
    foreach ($courses1 as $value) {
    echo $value."<br>" ;
}?>

<?php
    echo "<br><h6>Dumb information about element of the array</h6>";
    var_dump($courses1);

?>

<br>
<?php 
echo "<br><h6>Print only the values of the array elements</h6>";
    $values=array_values($courses1);
    foreach ($values as $value) {
        echo $value . "<br>";}
?>
<br>
<h5>5.3Sort the following array</h5>
<?php 
    echo "<br><h6>5.3.1 ascending order sort by value</h6>";
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    sort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

    echo "<br><h6>5.3.2 ascending order sort by keys</h6>";
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    ksort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

    echo "<br><h6>5.3.3 decending order sort by value</h6>";
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    krsort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

    echo "<br><h6>5.3.4 decending order sort by keys</h6>";
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    krsort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

?>

<br>
<h5>5.4 Change the following array's all values to upper case.</h5>
<?php 
    $courses4=array("php", "html", "javascript", "cms", "project");
    $chCase=array_change_key_case($courses4, $case=CASE_UPPER);
    foreach ($chCase as $value) {
        echo $value . "<br>";}

?>

<h5>5.5 List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h5>
<?php 
    $color['#ff0000'] = "Red";
    $color['#ffc0cb'] = "Pink";
    $color['#0000ff'] = "Blue";
    $color['#800080'] = "purple";
    $color['#008000'] = "Green";
    
    foreach ($color as $x=>$x_values) {
        echo $x . " => ".$x_values."<br>";}

?>

<h5>PHP script to calculate and display average temperature, five lowest and highest temperatures.</h5>

<?php
    $temperature=array(78, 60, 62, 68, 71, 68, 73,
    85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    );

    
    $sum=array_sum($temperature);
    $count=count($temperature);
    echo "Average temperature : ".$sum/$count;

    echo "<br><h6>First five lowest temperature</h6>";
    sort($temperature);

    for ($i=0; $i < 5; $i++) {
        echo $temperature[$i] . "<br>";}

    echo "<br><h6>First five highest temperature</h6>";
    rsort($temperature);

    for ($i=0; $i < 5; $i++) {
        echo $temperature[$i] . "<br>";}

?>


<?php include("footer.php"); ?>