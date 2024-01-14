<?php
    include_once('connexion.php');
    $sql = "SELECT * FROM categorie";
    $reponse = $bdd->query($sql);
    $resultat = $reponse->fetchAll();
    /*foreach($resultat as $element){
        echo $element['id_cat']."- ".$element['lib_cat'];
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Catégorie</h2>
<table>
    <tr>
        <td>Id</td>
        <td>Libelle</td>
        <td>Modifier</td>
        <td>Supprimer</td>
    </tr>
    <?php foreach($resultat as $element) {?>
    <tr>
        <td> <?php echo $element['id_cat']; ?> </td>
        <td> <?php echo $element['lib_cat']; ?> </td>
        <td>
            <form action="categorieUpdate.php" method="POST">
                <button type="submit">Modifier</button>
                <input type="hidden" name="txtid" id="txtid" value="<?php echo $element['id_cat']; ?>">
            </form>
        </td>
        <td>
        <form action="categorieDel.php" method="POST">
                <button type="submit">Supprimer</button>
                <input type="hidden" name="txtid" id="txtid" value="<?php echo $element['id_cat']; ?>">
            </form>
        </td>
    </tr>
    <?php }; ?>
</table>
</body>
</html>

