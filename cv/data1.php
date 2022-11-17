<?php require './header.php';
// git index.php data
$name=$_POST["txtName"];
$lname=$_POST["txtLname"];
$age=$_POST["txtAge"];
$ginder=$_POST["txtGender"];
$country=$_POST["txtLocation"];
$img=$_POST["txtImg"];
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
        <form action="./data2.php" method="POST">
   <table>
    <tr>
    <th>conict information</th>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="email" name="txtEmail" required></td>
    </tr>
    <tr>
        <tr>
            <td>Linked in:</td>
            <td><input type="email" name="txtLinked" required></td>
        </tr>
        <tr>
            <td>Github:</td>
            <td><input type="email" name="txtGithup" required></td>
        </tr>
    </tr>
    
    <tr>
        <td>Number</td>
    <td><input type="text" name="txtNumber"></td>    
    </tr>
   
<tr>
    <td><input type="submit" name="submit"></td>
</tr>
          
   </table>
   <input type="hidden" name="txtName" value="<?= $name ;?>">
   <input type="hidden" name="txtLname" value="<?= $lname ;?>">
   <input type="hidden" name="txtAge" value="<?= $age ;?>">
   <input type="hidden" name="txtGender" value="<?= $ginder ;?>">
   <input type="hidden" name="txtLocation" value="<?= $country ;?>">
   <input type="hidden" name="txtImg" value="<?= $img ;?>">
   </form>
   </div>
   
       </main>
       <?php require './footer.php'?>