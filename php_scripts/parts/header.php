<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE-edge"> 
        <meta name="viewport" content="width-device-vidth, initial-scale-1.e"> 
        
        <link rel="stylesheet" href="/style/app.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <title> Document</title> 
    
    
      </head>
    
    <body> 
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./pages/Login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pages/Register.php">Register</a>
        </li>
    </div>
    <?php if (!isset($_SESSION["username"])) : ?>
      </div>
     
    </div>
    <?php else : ?>
        <div class="d-flex align-items-center">
          <p class="text-info mb-0">
            Práve je prihlásený uživateľ <?php echo $_SESSION["username"] ?>
    </p>
      <a href="/php_scripts/Logout.php" class="btn btn-danger mx-2">Odhlásiť sa</a>
    </div>
    <?php endif; ?>
    </div>
 </nav>
</header>
