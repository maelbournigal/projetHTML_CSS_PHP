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
      
    <!--        insertion du header et du menu-->
    <?php include('../headerprojet.html');
        include('../menu.html');
      
    Try {
        $bdd = new PDO('mysql:host=localhost;dbname=ma2sage;charset=utf8', 'root', '');
    }
    catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    ?>
    <div id="colortextactu">
    <p> Actualités : </p>
    <ul>
    <?php
        $result=$bdd->query('SELECT * FROM actu');
        
        while ($data= $result->fetch()) { 
    ?>
	<li>
        
    <h2><?php  echo $title['titres']; ?></h2>
    <p><?php echo $story['histoires']; ?></p>
    <p><?php echo $author['auteurs']; ?></p>
    <img src="<?php echo $picture['images']; ?>" class="imgactu">
        
    </li>
    <?php } 
    ?>
    </ul>
    </div>
    </body>
</html>
 <!-- MAXIME GRAND : End of work for this part --> 