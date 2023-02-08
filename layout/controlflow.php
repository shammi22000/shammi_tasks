<?php include("header.php")?>

<h5>
4.1 Write a script that gets the current month and prints one of the 
following responses, <br>depending on whether it's August or not:<br>
It's August, so it's still holiday.<br>
Not August, this is Month-name so I don't have any holidays
</h5>



<?php 
    $chkMonth = date('F');
    if ($chkMonth == 'August'){
        echo "<br><h5>It's August, so it's still holiday.</h5><br>";
    }
    else{
    echo "<br><h6> August, so at least not in the peak of the heat</h6><br>";
    }
?>

<h5>
4.2 Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.
</h5>

<?php 
    $color = 'Red';
    if ($color == 'Red'){
        echo "<br><h6>The color is red.</h6> <br>";
    }
    else{
        echo "<br><h6>The color is not red.</h6><br>";
    }

?>

<h5>
4.3 Write a program to grade students based on their total score for a subject.
Use variable to hold the total score.
</h5>

<?php 
    $score = 100;
    if ($score > 80)
        {
        echo "<br><h6>Excellent</h6><br> ";
        }
    elseif ($score > 70) 
        {
        echo "<br><h6>Great </h6><br>";
        }
    elseif ($score > 60) 
        {
        echo "<br><h6>Good </h6><br>";
        }  
    elseif ($score > 50) 
        {
        echo "<br><h6>Pass </h6><br>";
        }  
    elseif ($score < 50) 
        {
        echo "<br><h6>Fail </h6><br>";
        }

?>

<h5>
4.4 Write a program to get inputs (age and name) from the user and based on 
their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h5>

<form action="" method="post">
    <div class="row">
        <div class="col">
        <input type="text" name="name" style="size:50px" placeholder="Name"><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <input type="text" name="age" placeholder="Age"><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <input type="submit"><br>
        </div>
    </div>
</form>
<?php
$name = $_POST['name'];
$age = $_POST['age'];

    if ($age >= 18) {
        echo $name . ", You Are Eligible For Vote";
    } else {
        echo $name . ", You are not eligible for vote. ";
    }
?>



<?php include("footer.php")?>