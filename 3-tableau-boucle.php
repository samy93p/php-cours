<?php 


$userName1="Alice";
$userEmail1="alice@example.com";
$userPassword1="Motdepasse123";
$userAge1= 40;

$userName2="Jean";
$userEmail2="jean@example.com";
$userPassword2="Securite123";
$userAge2= 35;

$user1 = ["Alice", "alice@example.com", "Motdepasse123", 40];

$user2 = ["Jean", "jean@example.com", "Securite123", 35];

//mot de passe 2eme utilisateur

echo $user2[2];

echo "Nom : " . $user1[0] . " Email: " .$user1[1] . " MDP: ". $user1[2] . " age: " . $user1[3];


$user1 = ["Alice", "alice@example.com", "Motdepasse123", 40];
$user2 = ["Jean", "jean@example.com", "Securite123", 35];
$users = [$user1, $user2];


$users = [
    ["Alice", "alice@example.com", "Motdepasse123", 40],
    ["Jean", "jean@example.com", "Securite123", 35],
];

// Boucle

$count = 1;

while ($count <= 15) {
    echo "Ceci est un compteur";
    $count++;
}

//---------------------

$users = [
    ["Alice", "alice@example.com", "Motdepasse123", 40],
    ["Jean", "jean@example.com", "Securite123", 35],
];

echo "<br>";
echo $user1[1][2];
echo "<br>";
echo count($users);


$index = 0;

echo "<br>";

while ($index < count ($users)){


    echo "Nom ". $users[$index][0] . "<br>";
    echo "mdp ". $users[$index][1] . "<br>";
    echo "email " . $users[$index][2] . "<br>";
    echo "age " . $users[$index][3] . "<br>";


    $index++;
}
//Boucles For

$users = [

    [
        "Alice", 
    "alice@example.com",
     "Motdepasse123",
      40
    ],
    ["Jean", "jean@example.com", "Securite123", 35],
];

for($index = 0; $index < 3; $index++){
    
    echo  $users[$index][0] . "<br>";
}



 
?>