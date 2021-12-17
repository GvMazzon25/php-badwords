<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php 
       $frase="sono Giorgio e sto facendo l'esercizio di boolean";
       $array = explode(' ',$frase);
       $censored = $_GET['word'];
       $frase2 = str_replace($censored,"bip",$frase);

    ?>
    <?php ?>
    <h1>Ciao <?php echo $frase?></h1>
    <p> 
        <?php 
          echo "<pre>";
             var_dump($array);
          echo "<pre>";
        ?>
    </p>
    <h1>Censored</h1>
    <h2> 
        Ciao,<?php 
            echo $frase2;
            ?>
    </h2>
</body>
</html>