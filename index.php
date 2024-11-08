<!DOCTYPE html>

<html lang="fr">

<head>
  <title>slt la terre</title>

  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
<?php
// commentaire simple 1 ligne
/* coca sans bulle pour plusieurs ligne
encore
*/
$nom = "Delphine";
$message = " la goat"; // chiant de mettre un espace pour separer dc quand sa ajoute aores avec .=
$nb = 12;
if ($nb < 3)
    echo "c'est grand";
else {
     echo "c'est grand";
     echo "<br>";
     echo " gg"; // acollade parck ya plus de 2 truc dans le else
}
   
    echo "<h1>hello $nom</h1>";
    echo "<h1>hello ".$nom."<h1>";
    $nom.=$message;
    echo "<h1> Delphine ".$message."</h1>";

$couleur = "rouge";
    switch($couleur) {

        case "rouge":
    
            echo "Choix de la couleur rouge";
    
            break;
    
        case "verte":
    
            echo "Choix de la couleur verte";
    
            break;        break;
    
        default:
    
            echo "Autres choix!";
    
    }

    $x = 1;

 
echo "<br>";
echo "<br>";
while($x <= 5) {

    echo "The number is: $x <br>";

    $x++;

}
 


$colors2 = array("red", "green", "blue", "yellow");

 

foreach ($colors2 as $value2) {

    echo "$value2 <br>";

}


$tableau_age = array("8"=>"1", "8"=>"2", "8"=>"3", "8"=>"4", "8"=>"5", "8"=>"6", "8"=>"7", "8"=>"8", "8"=>"9", "8"=>"10");

 

foreach($tableau_age as $x => $valeur_de_x) {

    echo "Clé =" . $x . ", Valeur=" . $valeur_de_x;

    echo "<br>";

}

























echo "<table border =1>";

$res = 0;
for ($x = 0; $x <= 10; $x++) {
 $res = $x * 8;

echo "<tr><td>8*$x=<td>$res<br></td></td></tr>";

}

echo "</table>";

























?>
</body>
</html>   