<?php require './header.php'?>

<div class="my-5 d-flex justify-content-center align-items-center">
        <?php if (!empty($_SESSION) && isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error']
                ?>
            </div>
        <?php
            unset($_SESSION['error']);
           
        endif; ?>
        <?= var_dump($_SESSION)?>
    </div>
<h1 class="text-center my-5 py-5">Login Form</h1>
<form method="post" action="/validation.php" class="w-50 m-auto py-5 my-5 w-40" >
  <div class="mb-3 text-center my-2 py-2">
    <label for="exampleInputEmail1" class="form-label fs-3">Email address</label>
    <input type="email" class="form-control w-50 m-auto" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 text-center my-2 py-2">
    <label for="exampleInputPassword1 " class="form-label fs-3 ">Password</label>
    <input type="password" class="form-control w-50 m-auto" id="exampleInputPassword1" name="password">
  </div>
    <div>
    <button type="submit" class="btn btn-primary my-2" style="margin-left:24rem">Log in</button>
    </div>
</form>










<?php require './footer.php'?>
