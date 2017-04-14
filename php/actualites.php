    <!-- MAXIME GRAND

             Résolution : 1920*1080 -->

<html>
    
  <head>
    <meta charset="utf-8">
    <title>Actualités</title>
    <link href="../css/cssprojet.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
  </head>
    
  <body>
      
    <!-- insertion du header et du menu -->
    <?php include('../headerprojet.html');
        include('../menu.html');
    // établissement de la connexion à la base de données avec gestion des erreurs
    Try {
        $bdd = new PDO('mysql:host=localhost;dbname=ma2sage;charset=utf8', 'root', '');
    }
    catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    ?>
    <div id="colortextactu">
        <h1> Actualités : </h1> <!-- Titre du thème de la page -->
    <ul>
    <?php
        // requête dans la base de données actu toutes les informations
        $result=$bdd->query('SELECT * FROM actualites');
        // utilisation de la fonction fetch pour gérer le résultat de l'instruction sql
        while ($data= $result->fetch()) { 
    ?>
	<li>
    <!--retourne des variables en leur associants/triants leurs valeurs par colonne-->
        <div class="actu">
        <img src="../img/<?php echo $data['pictures']; ?>" class="imgactu">
        <h2 class="titleactu"><?php  echo $data['titres']; ?></h2>
        <p class="article"><?php echo $data['histoires']; ?></p>
        <p class="auteur"><?php echo $data['auteurs']; ?></p>
      </div>
    </li>
    <?php } 
    ?>
    </ul>
    </div>
    </body>
</html>
 <!-- MAXIME GRAND : End of work for this part --> 