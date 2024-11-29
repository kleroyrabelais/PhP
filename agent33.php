<?php

require_once('connexion.php');

$stmt = $connexion->prepare("SELECT * FROM agent WHERE codePostal=33000");

$stmt->setFetchMode(PDO::FETCH_OBJ);

// Les résultats retournés par la requête seront traités en 'mode' objet

$stmt->execute();

 

// Parcours des enregistrements retournés par la requête : premier, deuxième…
echo ("<table border='1'>");
while($enregistrement = $stmt->fetch())
{

  // Affichage des champs nom et prenom de la table 'utilisateur'
  echo '<tr><td>', $enregistrement->nom, '</td><td> ', $enregistrement->prenom,'</td><td> ', $enregistrement->adresse1,'</td><td> ', $enregistrement->codePostal,'</td><td> ', $enregistrement->ville,'</td></tr>';
}
echo ("</table>");
?>