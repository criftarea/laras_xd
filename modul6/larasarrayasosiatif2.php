<!DOCTYPE html>
<html>
     <head>
     <title>array asosiatif</title>
     <header style="text-align: center;">
        <img src="https://i.pinimg.com/564x/c9/6b/18/c96b187fa473c976c1e05075e7fe7cfa.jpg" 
        style="float: inherit ; width :200px ;height :200px ;">
    </header>
     </head>
             <body>
             <?php
             $data = [
             [
               "Angel number" => "2222",
               "Name of beauty" => "coquette",
               "From nowhere" => "pinterest",
             ],

             [
              "Angel number" => "4444",
              "Name of beauty" => "lolly",
              "From nowhere" => "tumblr",
             ],
             ];
              ?>
<article style="text-align: center ;">
<div style="max-width: 600px; margin: 3em auto"></div>
         <table border="1" width="100%">
    <tr>
        <th>Angel number</th>
        <th>Name of beauty</th>
        <th>From nowhere</th>
    </tr>
<?php foreach ($data as $data) {?>
     <tr>
        <td><?php echo $data["Angel number"]; ?></td>
        <td><?php echo $data["Name of beauty"]; ?></td>
        <td><?php echo $data["From nowhere"]; ?></td>
     </tr>
           <?php } ?>
       </table>
    </body>
</html>