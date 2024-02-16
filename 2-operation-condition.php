<?php 
$number = 2 + 4;
echo $number;
echo "<br>";
$number = 2 - 4;
echo $number;
echo "<br>";
$number = 2 * 4;
echo $number;
echo "<br>";
$number = 3 * 3 + 1;
echo $number;
echo "<br>";
$number = 10 / 2;
echo $number;
echo "<br>";
$number = 2 - 4;
echo $number;
echo "<br>";
$number = (1 + 3) * 2;
echo $number;
echo "<br>";

$number = 10;
$result = ($number + 5) * $number;
echo $result;


echo "</br>";

$isactive = false;

if($isactive === true){
    echo "Le compte est actif";
}else{
    echo "Le compte est inactif";
}

$isAllowedToEnter = "Oui";

echo"<br/>";

if ($isAllowedToEnter === "Oui"){
    echo"Vous êtes autorisé";
}elseif ($isAllowedToEnter === "Non"){
    echo"Vous n'etes pas autorisé";
}else{
    echo"Je n'ai pas compris"; 
}

$age = 19;

if($age < 20){
    echo "<br> Vous avez moins de 20 ans";
}elseif ($age > 20 && $age < 30){
    echo "<br> Vous avez entre 20 et 30 ans";
}else{
    echo "<br> Vous avez plus de 30 ans"; 
}
echo"<br/>";
if($isAllowedToEnter){
    echo "site interdit pour vous ";
}
$isEnabled = true;
$isAdmin = false;

if($isEnabled && $Admin){
    echo "acces admin validé";
}else{
    echo "acces refusé";
}

?>