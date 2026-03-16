<?php
     session_start();
     if($_SESSION['status']!="login"){
        header("Location:login.php?belum_login");
     }
?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
</head>
<body>
    
                 <header>
                 <a class="navbar-brand" href="♡">
                    <img src="logo.gif" alt="logo" width="70" height="70"></a>
                    <div class="hamburger">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <nav class="nav-bar">
                        <ul>
                            <li>
                                <a href="index.php" class="active">Home</a>
                            </li>
                           <li>
                            <a href="list.php">Data</a>
                         </li>
                         <li>
                         <a href="https://www.instagram.com/lllaaras/">Contact</a>
                         </li>
                         <li>
                         <a href="login.php">LogOut</a>
                         </li>
                        </ul>
                     </nav>
                 </header>
                 <script>
                    hamburger = document.querySelector(".hamburger");
                    hamburger.onclick = function(){
                        navBar = document.querySelector(".nav-bar");
                        navBar.classList.toggle("active");
                    }
                    </script>
                       <div class="c">
  <input type="radio" name="a" id="cr-1" checked>
  <label for="cr-1" style="--hue: 1"></label>
  <div class="ci" style="--z: 4">
    <h2 class="ch" style="--h: 32; --s: 80%; --l: 90%"></h2>
    <img src="1.jpg" alt="">
  </div>

  <input type="radio" name="a" id="cr-2">
  <label for="cr-2" style="--hue: 2"></label>
  <div class="ci" style="--z: 3">
    <h2 class="ch" style="--h: 82; --s: 80%; --l: 90%"></h2>
    <img src="2.jpg" alt="">
  </div>

  <input type="radio" name="a" id="cr-3">
  <label for="cr-3" style="--hue: 3"></label>
  <div class="ci" style="--z: 2">
    <h2 class="ch" style="--h: 40; --s: 100%; --l: 89%"></h2>
    <img src="3.jpg" alt="">
  </div>
</div>
</body>
<div class="kotak_login">
                   <h1>Welcome <?php echo $_SESSION['username'];?>! <br> you have successfully logged in.</h1> 
</html>