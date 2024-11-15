<!DOCTYPE html>

<html lang="fr">

<head>

  <title>liste adresse</title>

  <meta charset="utf-8">

<!-- charset=UTF-8 : pour que les caractères accentués ressortent correctement -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- la balise ci-dessus indique que l'affichage doit se faire sur la totalité de l'écran, par défaut voir Responsive Design -->

</head>

<body>

<table border=2>
    <?php
    require_once('connexion.php');
    $stmt = $connexion->prepare(query: "SELECT * FROM agent WHERE codepostal = 33000");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();

    while($enregistrement = $stmt->fetch())
    {
        echo "<tr>
        <td>$enregistrement->nom </td><td> $enregistrement->prenom</td><td> $enregistrement->adresse1</td>
        </tr>";
    }
?>
</table>
</body>

</html>                