<?php require './header.php';?>

<body>
    <header>
        <div class="container-fluid">
            
<h1 class="text-center my-4 py-3"> Creation CV</h1>

    </header>
    <main>
        <div class="bodyArya">
        <h3 class="my-3 py-3">User information</h3>
        <form action="./data1.php" method="POST">
   <table>
    <tr>
    <th>personal information</th>
    </tr>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="txtName" required></td>
    </tr>
    <tr>
        <td> Last Name:</td>
        <td><input type="text" name="txtLname" required></td>    
    </tr>
    <tr>
        <td>Your Age:</td>
        <td><input type="number" name="txtAge" min="15" required></td>
    </tr>
    <tr>
        <td>Ginder:</td>
        <td><input type="radio" name="txtGender" value="mail" required>Mail
            <input type="radio" name="gender" value="femail" required>Femail
        </td>
    </tr>
    <tr>
         <tr>
            <td>Country:</td>
            <td><input type="text" name="txtLocation" required></td>
          </tr>
          <tr>
        
            <td>Your Img</td>                            
            <td><label for="formFile" class="form-label"></label>
           <input class="form-control" type="file" id="formFile" name="txtImg"></td>
          
          </tr>
<tr>
    <td><input type="submit" name="submit"></td>
</tr>
        
       </main>
       <?php require './footer.php'?>