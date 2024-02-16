<?php 

$prix1=20;
$prix1=33;

//Declarer la fonction ("function")
// fournir des paramètre et appeler l'objet

function ajouterTVA($prix)
{
$prixTTC = $prix + ($prix * 0.2);
echo $prixTTC;
}

//Objet

ajouterTVA(20);
echo "<br>";
ajouterTVA(33);
echo "<br>";
$prix1 = 24;
$prix2 = 43;
ajouterTVA($prix1);

$tarif1 = 23;
$tarif2 = 45;
function addition($tarif1, $tarif2)
{
$tarif =  $tarif1 + $tarif2;
echo $tarif;

}

echo"<br>";
echo"<br>";

addition($tarif1,$tarif2);


//-------- fonction sur les chaîne de caractères


$phrase = "Je m'appelle ..";
$longueur = strlen($phrase);

echo 'la phrase contient ' . $longueur . 'caracteres';
$password = "securite123456789";

if(strlen($password) < 12){
    echo "Mot de Passe faible";
}else{
    echo 'mot de passe fort !';
}

echo "<br>";
echo "<br>";

$phrase = "Je m'appelle.. ";

$phraseCourte = substr($phrase, 0, 20);

echo "<br>";

echo $phraseCourte;

if (strlen($phrase)> 50){

$phraseRaccourcie = substr($phrase, 0,20);
echo 'voici la phrase raccourcie :' .$phraseRaccourcie;
}else{
    echo 'La Phrase est assez courte la voici : ' .$phrase;
}

//Str_replace pour remplacer un élèment

$phrase2 = "Je suis un Professeur de Programmation";
$phraseNormalisee = str_replace('P','p', $phrase2);

echo "<br>";
echo "<br>";
echo $phrase2;
echo "<br>";
echo $phraseNormalisee;

$phraseModifiee = str_replace ('Professeur', 'eleve', $phrase2);

echo "<br>";
echo $phraseModifiee;

//Date

$day = date('d');
$month = date('m');
$year = date('Y');
$hour = date ('H');

// les minutes s'appelle avec "i" et non m

$minute = date ('i');
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $year . 'et il est ' .$hour . 'h' . $minute;
echo "<br>";

//$date = date ('l d F Y');

$date = date ('d/m/Y');
$time = date ('H:i');
echo 'Bonjour ! Nous sommes le ' . $date . 'et il est ' .$time;





?>