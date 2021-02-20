<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generation of recharge pin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 >Telecommunication Recharge Pin</h1>
    <?php



 function teleCom(){
     
     for ($i=0; $i <=200; $i++) { 
         # code...
         $pin = random_int(1000000000000000, 9000000000000000);
          echo " <div> $pin </div>   <br>"; 
         
     }
     
   
 }
teleCom();

?>

</body>
</html>
