<?php 


$user = [

'name' => 'Jeanne Martin',
'email'=> 'jeanne.martin@example.com',
'password' => 'Securite456',
'age'=> 25

];

echo $user ['name'];
echo '<br>';

$user['name'] = 'Carla';

echo $user ['name'];

// array = tableau
array_push($user, "adresse");

echo '<br>';

$user['adresse'] = '1234 rue de la republique';

var_dump($user);

echo '<br>';
echo '<br>';

print_r($user);
echo $user;

echo '<br>';
$question = true ;
echo '<br>';

echo $question;
echo '<br>';
var_dump($question);

echo '<br>';
echo '<br>';
echo '<br>';

$reponse = 1;
echo $reponse;
echo '<br>';
var_dump($reponse);
echo '<br>';

$secondeQuestion = "1";
echo '<br>';

echo $secondeQuestion;
echo '<br>';
var_dump($secondeQuestion);

$user['adresse'] = "1234 rue de la republique";

echo $user['adresse'] ;
echo '<br>';


echo"Je m'appelle" . $user['name'] . "j'ai " . $user['age'].
"ans, j'habite à" . $user ['adresse'] . " et mon email est " . $user['email'];















echo '<br>';
echo '<br>';

 $user=[

'name'=> 'Jeanne Martin',
'email'=> 'jeanne.martin@example.com',
'password'=> 'Securite456',
'age'=> '25',

 ];

 if (array_key_exists('adresse', $user)){
    echo "L'adresse de l'utilisateur est :" . $user['adresse'];
 }else{
    echo "l'utilisateur n'a pas d'adresse";
 }

 $user=[

    'name'=> 'Jeanne Martin',
    'email'=> 'jeanne.martin@example.com',
    'password'=> 'Securite456',
    'age'=> '25',
    'adresse'=> "152 rue de la tour"

 ];

 var_dump($user);
 echo"<br>";

if(in_array( 'non definie', $user)) {
$user['adresse'] = "152 rue de la tour";
echo"j'ai modifié l'adresse: "
.$user['adresse'];

}
$users = [
    [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'password' => 'password123',
        'age' => 30,
        'authorized' => true
    ],
    [
        'name' => 'Jane Smith',
        'email' => 'jane.smith@example.com',
        'password' => 'password456',
        'age' => 25,
        'authorized' => true
    ],
    [
        'name' => 'Mike Johnson',
        'email' => 'mike.johnson@example.com',
        'password' => 'password789',
        'age' => 35,
    ],
    [
        'name' => 'Sarah Williams',
        'email' => 'sarah.williams@example.com',
        'password' => 'passwordabc',
        'age' => 28,
        'authorized' => false
    ],
    [
        'name' => 'David Brown',
        'email' => 'david.brown@example.com',
        'password' => 'passwordxyz',
        'age' => 32,
    ]
];

    echo "<br>";

    foreach($users as $user){

    echo "<br>";

    if(array_key_exists('authorized', $user) && $user['autorized'] == true ){

        echo "L'utilisateur" .$user['name'] . "est autorisé";
    }else {
        echo "L'utilisateur" .$user['name'] . "n'est pas autorisé";
    }
}
$user = [

        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'password' => 'password123',
        'age' => 30,
        'authorized' => true
];
    echo '<br> <br> <br>';
    echo 'Name : ' . $user['name'];
    echo '<br><br><br>';

    foreach($user as $key => $valeur) {
        echo $key . ' : ' . $valeur;
        echo '<br>';
    }
    $users = [

        [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password123',
            'age' => 30,
            'authorized' => true
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => 'password456',
            'age' => 25,
            'authorized' => true
        ]

];
        echo '<br><br><br>';

        //parcourir les élements du tableau chercher les user et afficher les clés

        foreach($users as $user){
            foreach($user as $key => $value){
                echo $key . " : " . $value . "<br>";
            }












        }



?>





