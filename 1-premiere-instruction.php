<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ma premiere page</h1>

    <?php echo "Hello World";


    echo "Ceci est un message <strong>en gras</strong>";

    $age = 30;



    $age = 12;
    $age = 25;

    echo $age;

    $nom = "Rayan";

    echo $nom;


    $nom = "J'mappelle Rayan";

    echo $nom;

    $question = true;

    echo $question;


    $noValue = null;

    echo $noValue;

    $fullName = "Rayan";
    $welcome = "Et bienvenue sur le site";
    
    
    // concatenation
    echo "Je m'appelle " . $fullName . ' ' . $welcome;


    echo "Voila un message contenant {$fullName} , a l'interieur";



    ?>




</body>

</html>
