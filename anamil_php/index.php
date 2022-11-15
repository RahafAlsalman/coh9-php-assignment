<?php require './header.php';

?>
<h1 class=" text-center my-4 py-4">Login Form</h1>
<hr>
<div class="my-5 d-flex justify-content-center align-items-center">
        <?php if (!empty($_SESSION) && isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error'] ?>
            </div>
        <?php endif; ?>
<div class="m-auto w-50 my-4 py-3 ">
<form  action="./validation.php" method="POST"
style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px,
     rgba(0, 0, 0, 0.12) 0px 4px 6px,
     rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
     width: 30rem;
    height: 27rem;
    margin-top:5rem;">



  <div class="mb-3 text-center" id="form" >
    <label for="exampleInputEmail1" class="form-label text-center py-3 my-4 fs-3"><strong>Emile </strong></label>
    <input type="email" class="form-control w-50 "id="exampleInputEmail1"  style="margin-left:7rem ;"  aria-describedby="emailHelp" name="emile">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 text-center">
    <label for="exampleInputPassword1" class="form-label text-center py-2 my-3 fs-3"><strong>Password</strong></label>
    <input type="password" class="form-control w-50" id="Password1"style="margin-left:7rem ;"  name="password">
  </div>
  <button type="submit" class="btn btn-primary " style="margin-left:24rem">login</button>
</form>
</div>
<?php require './footer.php'?>