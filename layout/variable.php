<?php include("header.php");?>


<h3>Ex3. In class task variables & oprators (variable.php)</h3>
<h4>Create a simple html form to get Firstname and Lastname from the user and use echo echo statement 
     print using tag: Hello …., You are welcome to my site.</h4><br><br>
    <div class="form-group">
     <form action="action.php" method="post">
        <div class="row" style="">
            
            <div class="col">
                <input type="text" id="fName" name="fName" required placeholder="First Name" class="form-control">
            </div>
        
            <div class="col">
                <input type="text" id="lName" name="lName" required placeholder="Last Name" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="date" name="bDate"  placeholder="Birthdate" class="form-control">
            </div>
            <div class="col">
                <input type="color" name="picColor" placeholder="Selected Color" class="form-control">
                
            </div>
        <div class="row">
            <div class="col">
            <input type="submit" value="Submit">
            </div>
        </div>
        </div>

     </form>
    </div>

<h4>3.3 Prepare a simple html table and apply bootstrap style to the table. 
     may use the same table that you did in 3.5.
</h4>
<br>
<br>

<?php   $num1="50";
        $num2="10";
        $num3="30"; 
?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Sonali</td>
      <td> <?php echo "$num1"; ?></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Shanaka</td>
      <td><?php echo "$num2"; ?></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Larry the Bird</td>
      <td><?php echo "$num3"; ?></td>
    </tr>
  </tbody>
</table>

<h4>3.4 Write a PHP script with two string variables. Assign any text to these variables. 
    Join them together.  Print the length of the string. (Hint: string function)</h4>

    <?php
        $a = "Hello";
        $b = "world";
        $c = $a. $b;
        echo "$c <br><br>";
        echo "Lenth of the string :".strlen($c);
       
    ?>

<h4>3.5 Write a script to add up the numbers: 298, 234, 46. 
     variables to store these numbers and echo statement to output your answer.</h4>

     <?php  $num1="50";
            $num2="10";
            $num3="30";

            $total = $num1 + $num2 + $num3;
            echo "Total = ".$total;
    ?>   

<h4>3.6 Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER). </h4>
<?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n"; ?>

<?php include("footer.php");?>