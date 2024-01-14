<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=vente', 'root', '');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    //sélectionner les données de la table
    $script = $bdd->prepare("SELECT * FROM fournisseur");
    $script->execute();
    
    $thStyle = "padding: 23px";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des ventes</title>
</head>
<body>
    <header>
            <img src="icone.jpg" alt="logo de supermaché" class="logo" width="100">
            <h1>Gestion Des Ventes</h1> 
    </header>
    <main>
        <div class="search-container">
            <input type="text" placeholder="Search" id="search-input">
            <button onclick="search()">Rechercher</button>
        </div>
        <div class="search-results">

        </div>
            <section class="un">
                <h5>
                    <a href="categorie.php">Categorie</a>
                </h5>
                <h5>
                    <a href="fournisseur.php">Fournisseur</a>
                </h5>
                <h5>
                    <a href="vente.php">Vente</a>
                </h5>
                <h5>
                    <a href="produit.php">Produit</a>
                </h5>
            </section>
        
        <section class="deux">
            <p>Categorie - Liste</p>

            <button>Ajout</button>
            <button>Imprimer</button>
        </section>
            <?php
                 //récupérer les données 
                $four = $script->fetchAll(PDO:: FETCH_ASSOC);
                 //afficher les données
                echo "<table>";
                echo "<thead>
                    <tr>
                        <th>Nom de code du fournisseur</th><th>Le nom du fournisseur</th>
                    </tr>
                </thead>";
                echo "<tbody>";
                    foreach($four as $row){
                        echo "<tr>";
                        echo "<td>".$row['id_four']."</td>";
                        echo "<td>".$row['sigle_four']."</td>";
                        echo "<td>".$row['lib_four']."</td>";
                        echo "<td>".$row['tel_four']."</td>";
                        echo "<td>".$row['autreInfo_four']."</td>";
                        echo "</tr>";
                    }


                echo "</tbody>";
                echo "</table>";
            
    echo"     
    </main>

     <footer>
        <p>Votre satisfaction est notre priorité</p>
    </footer>"

?>
        <!-- le style même de la page -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;900&family=Space+Grotesk:wght@300&family=Ubuntu:wght@300;400;500;700&display=swap');
*{
    font-family: 'Ubuntu', sans-serif;
    font-weight: lighter;
}
body{
    background-color: whitesmoke;
}
.logo{
    float: left;
    border-radius: 20px;
    border-radius: 50%;
    z-index: 1;
    /* width: 50px;
    padding: auto; */
}
header{
    background: rgba(245, 222, 179, 0.797);
    height: 100px;
    text-align: center;
    border-radius: 20px;
    align-items: center;
}
header h1{
    padding-top: 25px;
    position: relative;
    font-weight: bold;
    height: 70px;
}

header h1:hover{
    z-index: 0;
    color: blue;
    letter-spacing: 2px;
    transition: all 0.4s;
}

.un{
    background: rgba(245, 222, 179, 0.797);
    position: absolute;
    border-radius: 20px;
    width: 100px;
    align-items: center;
    margin: auto;
    padding: 5%;
    margin-top: 120px;
}
.un h5 a{
    color: black;
    font-size: 1.4em;
    font-weight: 300;
    line-height: 1.5;
}

.un h5 a:hover{
    color: blue;
    letter-spacing: 2px;
    transition: all 0.3s ;
}

.deux{
    position: relative;
    text-align: center;
    margin-bottom: 50px;
    margin-left: 160px;
}

footer{
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: wheat;
    bottom: 0;
    font-size: 1em;
    border-radius: 20px;
    margin-top: 10px; 
}

input {
   text-align: center;
   margin-left: 200px;
   margin-bottom: 10px;
   margin-top: 15px;
}

.search-container{
    margin-left: 600px;
}

table{
    position: relative;
    margin-left: 350px;
    top: 47%;
}

table td{
    padding: 20px;
    border: 2px black solid;
    background-color: lightgoldenrodyellowse;
}

table thead tr th{
    padding: 20px;
    border: 2px black solid;
}

button{
    box-shadow: 5px 5px 10px burlywood;
}
        </style>
    <!-- style supplémentaire -->
    <style>
        table{
            width: 60%;
            border-collapse: collapse;
            border-radius: 4px;
        }
        th{
            font-size: 1.2em;
            border:2px black solid;
            padding: 10px;
            font-weight: 500;
        }
        th:hover{
            background: rgba(245, 222, 179, 0.797);
            color: blue;
            letter-spacing: 2px;
            transition: all 0.4s;
        }
        td:hover{
            color: blue;
            letter-spacing: 1px;
            transition: all 0.4s;
        }
        td{
            font-weight: 400;
        }
    </style>
</body>
</html>