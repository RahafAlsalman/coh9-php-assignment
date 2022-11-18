
<?php session_start();?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="./style.css">
</head>
<body >

<header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Animal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <?php if(!strpos($_SERVER['SCRIPT_FILENAME'],'index.php')) : ?>
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <?php endif ?>
        </li>
        
      
    </div>
  
    <form class="d-flex" role="search">
      <?php if(!strpos($_SERVER['SCRIPT_FILENAME'],'index.php')) : ?>
        <button class="btn btn-danger" type="submit">logout</button>
      </form>
  </div>
  <?php endif ;?>
</nav>










</header>
<div class="container">