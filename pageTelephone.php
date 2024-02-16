<!-- ``
Vous êtes chargé de développer une page Web
qui affiche les détails de telephone. 
Vous disposez d'un tableau associatif 
contenant des informations sur ces produits. 
Voici les étapes à suivre :
Déclarez un tableau associatif nommé $produits 
avec les clés suivantes : 'nom', 'prix', 'stock'.
Remplissez ce tableau avec au moins trois produits 
différents, chaque produit étant un sous-tableau 
avec les valeurs correspondantes pour les clés 'nom', 
'prix' et 'stock'.
Le premier produit a stock de 5 produits
le second produit a un stock de 0 produit
le troisième produit n’as pas de clé stock

Affichez ces informations dans une page HTML 
en utilisant une boucle foreach pour parcourir le tableau
$produits.

Avant d'afficher les informations, vérifiez si la clé 
'stock' existe pour chaque produit en utilisant 
array_key_exists. Si la clé 'stock' 
n'existe pas pour un produit, insérez-la avec 
une valeur de 0.
Pour chaque produit, ajoutez une condition : 
si le stock est supérieur à 0, affichez "En stock"
 en vert ; sinon, affichez "Rupture de stock" en rouge.
``` -->
<?php 
$produits = [
    [
    'modele' => 'Iphone 14',
    'prix' => ' 1675€ ',
    'stock' => 5 
    ],
    [
    'modele' => 'Iphone 13 Pro Max',
    'prix' => ' 1300€ ',
    'stock' => 0 
    ],
    [
    'modele' => 'Iphone 15 Pro',
    'prix' => ' 1675€ ', 
    ]
    ];
    echo "<br>";

    foreach($produits as $produit){

    if(!array_key_exists('stock', $produit)){
        //echo "Le stock pour cet article est de : " . $produit['stock'] . " " ;
        //ICI on est pas obligé de rajouter un else car on verifie deja si la clé existe pas (ça allège le code!)
        
        $produit['stock'] = 0 ;
    
    }

    if ($produit['stock'] > 0) {  
        echo "En stock !";
    }else{
    echo "En rupture de stock !";
}
};
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Liste de Smartphones </h1>

    <table>
    <thead>
        <tr>
            <th>Modele</th>
            <th>Prix</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($produits as $produit) { ?>
            <tr>
                <?php
                if(!array_key_exists('stock', $produit)){
                    //echo "Le stock pour cet article est de : " . $produit['stock'] . " " ;
                    //ICI on est pas obligé de rajouter un else car on verifie deja si la clé existe pas (ça allège le code!)
                    
                    $produit['stock'] = 0 ;
                
                }
            
                if ($produit['stock'] > 0) {  
                    echo "En stock !";
                }else{
                echo "En rupture de stock !";
            } 
                 ?>
                <!-- td = table data -->
                <td><?php echo $produit['modele']; ?></td>
                <td><?php echo $produit['prix']; ?></td>
                <td><?php echo $produit['stock']; ?></td>
            </tr>
        <?php } ?>
</body>
</html>