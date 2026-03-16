<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laras Kurniadesi</title>
</head>

<body>
     <nav>
        <a href="larashome.html">Home</a> |
        <a href="larasform.html">Form</a> |
        <a href="larastabel.html">Tabel</a> |
        <a href="larasaritmatika.php">Aritmatika</a> |
     </nav>

    <hr />

    <header style="text-align: center;">
        <img src="https://i.pinimg.com/564x/0a/dd/fd/0addfdc114233bd8c5a350a738a8f268.jpg" 
        style="float: inherit ; width :200px ;height :200px ;">
        <link rel="stylesheet" type="text/css" href="1.css">
        <div class="halo">
        <h1 id="text"><div style="text-align:center;"><a>ARITMATIKA</a> <div style="width: 1900px;text-align: center;"></div>
    </header>

    <hr />

    <article style="text-align: center;">
        <h2>VARIABEL</h2>
        <p>
        <?php 
                 $x = 222;
                 $y = 444;
                 
                 echo"Hasil Perkalian 222 x 444 adalah " , $y * $x;
                 ?>
        </p>
    </article>
    <hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2022 Laras Kurniadesi.</p>
    </footer>
</body>
</html>