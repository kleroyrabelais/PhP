<!DOCTYPE html>

<html lang="fr">
<head>
  <title>Table de multiplication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    require_once("connexion.php");
    $stmt = $connexion->prepare("SELECT * FROM activite");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
?>
    <form action="activites.php" method="post">
        <select name="activite">
        <?php
            while($enregistrement = $stmt->fetch())
            {
                    echo '<option value="'.$enregistrement->numero.'">'.$enregistrement->libelle.'</option>';
            }        
            
        ?>
        </select>
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
    if(isset($_POST['ok'])) 
    {
        $activite=$_POST["activite"];
        //echo "l'utilisateur a choisi l'activité n°".$activite;
        $stmt2 = $connexion->prepare("SELECT * FROM action where numeroActivite=:noAct");
        $stmt2->bindValue(":noAct", $activite);
        $stmt2->setFetchMode(PDO::FETCH_OBJ);
        $stmt2->execute();
        echo "<table border='1'>";
        while($enregistrement2 = $stmt2->fetch())
        {
                echo '<tr><td>'.$enregistrement2->code.'</td><td>'.$enregistrement2->intitule.'</td></tr>';
        }        
        echo "</table>";
    }
    ?>
</body>
</html>    