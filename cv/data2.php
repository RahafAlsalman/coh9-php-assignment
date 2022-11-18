<?php require './header.php';

// git index.php data 
$name    =$_POST['txtName'];
$lname   =$_POST['txtLname'];
$age     =$_POST['txtAge'];
$ginder  =$_POST['txtGender'];
$country =$_POST['txtLocation'];
$picc    =$_POST['txtImg'];

//git data2.php

$emil    =$_POST['txtEmail'];
$linked   =$_POST['txtLinked'];
$githup   =$_POST['txtGithup'];
$number  =$_POST['txtNumber'];
var_dump($_POST);
?>


<body>
    <header>
        <div class="container-fluid">
            
<h1 class="text-center my-4 py-3"> Creation CV</h1>

    </header>
    <main>
        <div class="bodyArya">
        <h3 class="my-3 py-3">User information</h3>
        <form action="./finelCV.php" method="POST">
   <table>
    <tr>
    <th>Education information</th>
    </tr>
    <tr>
        <td>High School Name:</td>
        <td><input type="text" name="highSchool" required></td>
    </tr>
    <tr>
        <td>Cologe:</td>
        <td><input type="text" name="txtColog" required></td>
    </tr>
    <tr>
        <td> Universty:</td>
        <td><input type="text" name="txtMagor" required></td>    
    </tr>
    <tr>
        <td>Graduation:</td>
        <td><input type="month" id="start" name="txtStart"
            min="2018-03" value="2018-05"></td>
         <tr>
            <td>Courses:</td>
            <td><input type="text" name="txtCourses" required></td>
          </tr>
          <tr>
            <td>Expirence:</td>
            <td><textarea rows="4" cols="50" name="comment" form="usrform">
            </textarea></td>
          </tr>
<tr>
<td><button type="button" class="btn btn-primary">Submit</button></td>
<td><button type="button" class="btn btn-danger">Back</button></td>
</tr>
          
   </table>
   <input type="hidden" name="txtName" value="<?=$name ;?>">
   <input type="hidden" name="txtLname" value="<?=$lname ;?>">
   <input type="hidden" name="txtAge" value="<?=$age;?>">
   <input type="hidden" name="txtGender" value="<?=$ginder ;?>">
   <input type="hidden" name="txtLocation" value="<?=$country ;?>">
   <input type="hidden" name="txtImg" value="<?=$picc ;?>">
   
   <input type="hidden" name="txtEmail" value="<?=$emil ;?>">
   <input type="hidden" name="txtLinked" value="<?=$linked ;?>">
   <input type="hidden" name="txtGithup" value="<?=$githup ;?>">
   <input type="hidden" name="txtNumber" value="<?=$number ;?>">
   
   </form>
   </div>
   
       </main>
       <?php require './footer.php'?>