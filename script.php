<!DOCTYPE html>

<html lang="fr">
<head>
  <title>Table de multiplication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
  <h2>Formulaire HTML</h2>

  <form method="POST" action="script.php">
  
      <fieldset>
  
          <legend>Informations personnelles</legend>
  
          Prénom :<input type="text" id="txtprenom" name="txtprenom"><br><br>
          Nom : <input type="text" id="txtnom" name="txtnom"><br><br>
          Adresse : <input type="text" id="txtadresse" name="txtadresse"><br><br>
          J'accepte les conditions
            <input type="checkbox" id="accepte" name="accepte">
  
      </fieldset>
  
      <input type="submit" name="ok" value="Envoyer">
  
  </form>
  
    <?php
    if (isset($_POST["ok"])){
        $prenom=$_POST["txtprenom"];
        $nom=$_POST["txtnom"];
        $adresse=$_POST["txtadresse"];
        
        echo "Bonjour ".$prenom." ".$nom.".<br>";
        if (isset($_POST["accepte"])){
            echo "vous avez accepté les conditions";
            require_once('connexion.php') ;    
            $stmt = $connexion->prepare("INSERT INTO utilisateur(prenom,nom,adresse) VALUES (:txtprenom, :txtnom, :txtadresse)");
            $stmt->bindValue(':txtprenom', $prenom, PDO::PARAM_STR);
            $stmt->bindValue(':txtnom', $nom, PDO::PARAM_STR);
            $stmt->bindValue(':txtadresse', $adresse, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();}
    }
    ?>

</body>
</html>