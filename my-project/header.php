<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/styles.css">
    <title></title>
    <?php if(!strpos($_SERVER['SCRIPT_FILENAME'],'index.php' )) :?>
 <style>
header{
    height: 50vw;
    background-image: url("https://img.freepik.com/free-vector/zoo-animals-wild-nature-background_1308-44948.jpg?w=2000");
    background-size: cover;
    background-repeat: no-repeat;
background-position: center; 
</style>
} <?php else:?>

    <style>
footer{
    background-color: burlywood;
    height: 15rem;
    margin-top: 20rem;

}
 </style>
    <?php endif; ?>
</head>

<body>

    <header>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Anamil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     
    <?php if(!strpos($_SERVER['SCRIPT_FILENAME'],'index.php')) :?>
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <button class="btn btn-danger" type="submit">logout</button>
      </form>
    </div>
    <?php endif; ?>
  </div>
</nav>

 <div id=img>
 </div>
    </header>