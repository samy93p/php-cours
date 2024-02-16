<?php 

$velos = [
[  
    "Modele" => " VTT ", 
    "Couleur" => " Rouge ", 
    "Marque" => " Marque A ", 
    "Option" => " 27,5 pouces "
],
[   
    "Modele" => " Vélo de route ", 
    "Couleur" => " Noir ", 
    "Marque" => " Marque B ", 
    "Option" => " Taille M "
],
[ 
    "Modele" => " Vélo électrique ", 
    "Couleur" => " Bleu ", 
    "Marque" => " Marque C ", 
    "Option" => " Batterie 500W "
],
[ 
    "Modele" => "BMX ", 
    "Couleur" => "Vert ", 
    "Marque" => " Marque D ", 
    "Option" => " Pneus larges "
],
[ 
    "Modele" => "Vélo pliable", 
    "Couleur" => "Gris", 
    "Marque" => "Marque E", 
    "Option" => "Compact et léger"
],   
];

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Les Vélos : </h1>
    <table>
    <thead>
        <tr>
            <th>Modele</th>
            <th>Couleur</th>
            <th>Marque</th>
            <th>Option</th>
            </tr>
    </thead>
    <tbody>
    <?php foreach ($velos as $velo) { ?>
            <tr>
                <!-- td = table data -->
                <td><?php echo $velo['Modele']; ?></td>
                <td><?php echo $velo['Couleur']; ?></td>
                <td><?php echo $velo['Marque']; ?></td>
                <td><?php echo $velo['Option']; ?></td>
            </tr>
        <?php } ?>
</body>
</html>