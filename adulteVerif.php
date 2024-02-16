<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $age = 25 ;
    $isAdult = false;

    if($age >= 18 ){
        $isAdult = true;
    }else{ $isAdult = false;
    }
    if($isAdult){
        echo "Bienvenue";
    }else{
        echo "Désolé, vous devez être majeur pour accéder";   
    }
    ?>
</body>
</html>