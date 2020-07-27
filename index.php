<?php
$prenom = 'Abderr';
echo "<h1>Bonjour $prenom</h1>";

// Les tableaux
// Initialiser un tableau vide il y a deux méthodes
$tableau1 = array();
$tableau2 =[];

// Initialiser un tableau contenant des valeurs
$valeurs = [1, "35", "bonjour", false];

// Afficher la 3eme valeur du tableau dans une balise p
echo "<p>$valeurs[2]</p>";

// Affecter une valeur au tableau 
$valeurs["brouette"] = "joli texte";

// Afficher le tableau en "debug"
var_dump($valeurs);

//  Déclarer un tableau associatif 
$assoc = [
    'nom' => 'Boulhdir',
    'prenom' => 'Abderr',
    'telephone' => '0680502736'
];
echo "<p>{$assoc['prenom']}</p>"  ;
var_dump($assoc);

// Parcourir un tableau
foreach($assoc as $cle => $valeur){
    echo "<p>clé : $cle</p>";
    echo "<p>valeur : $valeur</p>";
}
 

// Coalescense nulle
$a = null;
$b = "au revoir";

echo $a ?? $b;







// Connaître la configuration de PHP
// phpinfo();

