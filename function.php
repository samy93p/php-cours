<!-- exercice 7
creez un fichier fonction.php
// Fonction 1 : Concaténer deux chaînes de caractères avec un espace entre elles
// Fonction 2 : Remplacer les espaces par des tirets dans une chaîne
// Fonction 3 : Convertir une chaîne de caractères en majuscules
// Fonction 4 : ajouter la date ou un texte est afficher a la fin du texte
// Fonction 5 : verifier si un compte utilisateur est valide dans un tableau 
a la cle autorized

$utilisateur = [
    
    'nom' => 'John Doe',
    'email' => 'johndoe@example.com',
    'authorized' => true
];
// Fonction 6 : verifier si un compte utilisateur 
est valide dans un tableau a la cle autorized et rajouter un commentaire dans le tableau
 -->

<?php 

$nom = 'ELatre';

$prenom = 'Carla';

function concatener ($chaine1, $chaine2)
{

$chaine3 = $chaine1 . '  ' . $chaine2; 
echo " Je m'appelle"  .' - '. $chaine3; 

}

echo "<br>";
echo "<br>";

concatener($nom, $prenom);

echo "<br>";
echo "<br>";

concatener("Doe","John");

$phrase2 = concatener($nom, $prenom);

//Function 2

function espaceTiret($chaine){

    $phraseModifiee = str_replace(' ', ' - ', $chaine);
   
    echo $phraseModifiee;


    espaceTiret("Une phrase modifiee");
}

//function 3

function majuscule ($phrase){

    $chaineEnMajuscule = strtoupper ($phrase);

    echo $chaineEnMajuscule;

}

echo "<br>";

majuscule('Je ne sais pas');

//fonction 4

function ajouterDate($phrase)
{
    $phraseAvecDate = $phrase . " Fait le " . date('d/m/Y') . ' a ' .date('H :  i');
    echo$phraseAvecDate;
}

echo "<br>";
ajouterDate("Bonjour je m'appelle Carla");

//Fonction 5

$utilisateur=[

'nom' => 'Carla Elatre',

'email' => 'carla.elatre@example.com',

'authorized' => true

];

function verifierCompte($user)
{
    if(array_key_exists('authorized', $user) && $user ['authorized'] == true ){
        echo 'Le compte est validé';
    }else{
        echo "Le compte n'est pas autorisé";
    }
}

verifierCompte($utilisateur);

//function 6

function checkUserComm($user){

    if(array_key_exists('authorized', $user) && $user ['authorized'] == true){



    }
}



?>