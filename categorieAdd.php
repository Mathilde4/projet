<?php
    include_once('connexion.php');
    if(isset($_POST['btnot'])){
        $cat = $_POST['txtcat'];
        $sql = "INSERT INTO categorie(lib_cat) values(:txtcat)";
        $request = $bdd->prepare($sql);
        $request->bindParam(":txtcat",$_POST['txtcat']);
        $request->execute();
        //ddm contrôler correctement les données saisies par l'utilisateur dans la table
        //faire pour fournisseur et client pour l'ajout
        //clientListe, client ajout, fournisseurListe, fournisseur ajout
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="categorieAdd.php" method="post">
        <label for="txtcat">Catégorie</label>
        <input type="text" name="txtcat" id="txtcat">
        <button type="submit" name="btnot" id="btnot">Enregistrer</button>
    </form>
</body>
</html>