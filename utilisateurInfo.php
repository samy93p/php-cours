<!-- exercice 4
Utilisateur 1 :
Nom : John Doe
Email : john.doe@example.com
Mot de passe : Password123
age : 30
Utilisateur 2 :
Nom : Jane Smith
Email : jane.smith@example.com
Mot de passe : Secure456
age : 28

Stockez ces informations dans des tableaux associatifs.

Affichez l'email de l'utilisateur 2.

Utilisez une boucle while pour afficher 10 fois 
"Bonjour, Utilisateur !" en remplaçant "Utilisateur" par le nom de l'utilisateur 1.
 -->

 <?php 


$users = [
    ["John Doe", "john.doe@example.com", "Password123", 30],
    ["Jane Smith", "jane.smith@example.com", "Secure456", 28],
];

echo $users[1][1];
echo $users [0][0];

$index = 0;

while ($index < 10) {

echo "Bonjour, ". $users[0][0]. "! ";

$index++;
   
}

 
 
 
 ?>