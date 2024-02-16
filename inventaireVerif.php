<?php 

$prix_unitaire = 10;
$quantite_achetee = 20;


$montant_total = $prix_unitaire * $quantite_achetee;

if ($montant_total>=100){
    $montant_apres_reduction = $montant_total - ($montant_total*10)/100;
    echo "prix avant réduction". $montant_total;
    echo"prix apès réduction". $montant_apres_reduction;
}else{
    echo $montant_total;
}






// Creer un fichier inventaireVerif.php
// Déclarez une variable $prix_unitaire et attribuez-lui une valeur de 10 pour représenter le prix unitaire d'un article.
// Déclarez une variable $quantite_achetee et attribuez-lui une valeur de 20 pour représenter la quantité d'articles achetés.
// Calculez le montant total de l'achat en multipliant le prix unitaire par la quantité achetée. 
// Stockez ce montant dans une variable $montant_total.
// Vérifiez si le montant total de l'achat est supérieur ou égal à 100.

// Si c'est le cas, 
// appliquez une réduction de 10% sur le montant total et stockez le nouveau montant dans 
// la variable $montant_apres_reduction.
//  Sinon, conservez le montant total sans réduction.
// Affichez le montant total de l'achat avant et après la réduction, avec des messages 
// appropriés pour indiquer si une réduction a été appliquée ou non.







?>